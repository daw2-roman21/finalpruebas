<?php

namespace App\Controller;

use App\Entity\Personaje;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Security\LoginFormAuthenticator;

class GuiltyController extends AbstractController
{
    /**
     * @Route("/guilty", name="guilty")
     */
    public function index(): Response
    {
        $usuario = $this->getUser();
        return $this->render('guilty/index.html.twig', [
            'controller_name' => 'GuiltyController',

        ]);
    }

    /**
     * @Route("/guilty/{nombre}", name="detalle")
     */
    public function detalle($nombre): Response
    {
        $repository = $this->getDoctrine()->getRepository(Personaje::class);
        $personaje = $repository->findOneBy(['nombre' => $nombre, 'juego' => 'guilty']);

        if (is_null($personaje)) {
            return $this->render('guilty/error.html.twig', [
                'error' => 'Personaje no encontrado',
            ]);
        } else {
            return $this->render('guilty/detalle.html.twig', [
                'personaje' => $personaje,
            ]);
        }
    }
}
