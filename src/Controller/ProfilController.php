<?php

namespace App\Controller;

use App\Repository\ProfileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(ProfileRepository $profileRepository): Response
    {
       $profil=$this->getUser();
       dump($profil);
        return $this->render('profil/index.html.twig', [
            'profil' => $profil,
        ]);
    }
    
}
