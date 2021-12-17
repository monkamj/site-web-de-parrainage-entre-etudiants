<?php

namespace App\Controller;

use App\Entity\Profile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class MessagerieController extends AbstractController
{
    /**
     * @Route("/messagerie", name="messagerie")
     */
    public function index(SessionInterface $session): Response
    {
        
        $profils = $this->getDoctrine()->getRepository(Profile::class);

        return $this->render('messagerie/index.html.twig', [
            'profils' => $profils,
        ]);
    
}

}