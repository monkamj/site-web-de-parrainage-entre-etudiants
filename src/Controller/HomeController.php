<?php

namespace App\Controller;

use App\Repository\CommentaireRepository;
use App\Repository\PublicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(PublicationRepository $publicationRepository,CommentaireRepository $commentaireRepository): Response
    {
        $publications=$publicationRepository->findAll();
        $commentaire=$commentaireRepository->findOneBy(array(),array('id' => 'DESC'));
        dump($commentaire);
        return $this->render('home/index.html.twig', [
            'publications' => $publications,
            'commentaire'=> $commentaire
        ]);
    }
}
