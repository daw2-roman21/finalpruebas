<?php

namespace App\Controller;

use App\Entity\TweetGuardado;
use App\Entity\User;
use App\Entity\Tweet;
use PhpParser\Node\Expr\Cast\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UsuariosController extends AbstractController
{
    /**
     * @Route("/users/{usuario}", name="usuarios")
     */
    public function index($usuario): Response
    {

        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findOneBy(['username' => $usuario]);

        if (!is_null($user)) {
            $repository2 = $this->get('doctrine')->getRepository(TweetGuardado::class);
            $tweetsGuardados = $repository2->findByIdUser($user->getId());
            //print_r($tweetsGuardados);
            $idsTweet = array();
            foreach ($tweetsGuardados as $key => $value) {
                array_push($idsTweet,  strval($tweetsGuardados[$key]->getIdTweet()));
            }



            $tweetsFinal = $this->get('doctrine')->getRepository(Tweet::class)->findByIdTweet(
                $idsTweet
            );

            return $this->render('usuarios/index.html.twig', [
                'usuario' => $user,
                'tweets'  => $tweetsFinal
            ]);
        } else {
            return $this->render('usuarios/error.html.twig', [
                'error' => 'El usuario no existe.',
            ]);
        }
    }

    /**
     * @Route("/buscarUsuario", name="busc", methods={"POST"})
     * 
     */
    public function buscarUsuarios(Request $request)
    {

        $username = $request->request->get('data');
        $entityManager = $this->get('doctrine')->getManager();
        $usuarios = $entityManager->getRepository(User::class)->encontrarUsuarios($username);
        $arrUsernames = array();
        foreach ($usuarios as $key => $value) {
            array_push($arrUsernames, $usuarios[$key]->getUsername());
        }
        if ($request->isXmlHttpRequest()) {
            return new Response(json_encode($arrUsernames));
        }
    }


    /**
     * @Route("/guardarTweet", name="guardar", methods={"POST"})
     * 
     */
    public function guardarTweet(Request $request)
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $idTweet = $request->request->get('data');
        $repository2 = $this->getDoctrine()->getRepository(TweetGuardado::class);
        $tweetGuardado = $repository2->findOneBy([
            'idUser' => $userId,
            'idTweet' => $idTweet
        ]);

        if (is_null($tweetGuardado)) {
            $tweetGuardado = new TweetGuardado();
            $tweetGuardado->setIdTweet($idTweet)->setIdUser($userId);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tweetGuardado);
            $entityManager->flush();

            if ($request->isXmlHttpRequest()) {
                return new Response("Tweet Insertado");
            }
        }

        if ($request->isXmlHttpRequest()) {
            return new Response("El tweet ya existe");
        }
    }

    /**
     * @Route("/borrarTweet", name="borrarTweet", methods={"POST"})
     * 
     */
    public function borrarTweet(Request $request)
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $idTweet = $request->request->get('data');
        $repository = $this->getDoctrine()->getRepository(TweetGuardado::class);

        $tweetGuardado = $repository->findOneBy([
            'idUser' => $userId,
            'idTweet' => $idTweet
        ]);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($tweetGuardado);
        $entityManager->flush();

        if ($request->isXmlHttpRequest()) {
            return new Response("Tweet Borrado");
        }
    }

    /**
     * @Route("/useradmin", name="useradmin")
     */
    public function administrar(): Response
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $usuarios = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('usuarios/admin.html.twig', [
            "usuarios" => $usuarios,
        ]);
    }

    /**
     * @Route("/borrarUsuario", name="borrarUsuario", methods={"POST"})
     */
    public function borrarUsuario(Request $request): Response
    {
        $idUser = $request->request->get('data');
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findOneBy(["id" => $idUser]);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        if ($request->isXmlHttpRequest()) {
            return new Response("Usuario Borrado");
        }
    }

    /**
     * @Route("/obtenerUsuarios", name="obtenerUsuarios", methods={"GET"})
     */
    public function obtenerUsuarios(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $usuarios = $repository->findAll();


        if ($request->isXmlHttpRequest()) {
            return new Response(json_encode($usuarios, true));
        }
    }
}
