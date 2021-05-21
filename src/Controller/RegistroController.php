<?php

namespace App\Controller;

use App\Form\FormuUsuario;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="registro_usuario")
     */
    public function registro(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        //CREO EL FORM
        $user = new User();
        $form = $this->createForm(FormuUsuario::class, $user);

        //RECIBO LOS DATOS POR POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //Encripto la contraseña del usuario
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            //Guardo el usuario
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            //Redirecciono al login
            return new RedirectResponse('/alejandro-roman-final/public/login');
        }

        return $this->render('registro/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
