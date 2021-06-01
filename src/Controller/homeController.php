<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homeController extends AbstractController
{
    /**
    * @return Response
    * @Route ("/", name="home")
    */
    //Affichage page d'accueil
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

}