<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueProduitController extends AbstractController
{
    /**
     * @Route("/catalogue_produit", name="catalogue_produit")
     */
    public function index(): Response
    {
        return $this->render('catalogue_produit/index.html.twig', [
            'controller_name' => 'CatalogueProduitController',
        ]);
    }

    public function createProduit(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $Produit = new Produit();

        $Produit->setnom("Nom produit numéro ")
            ->setdescription("description du produit numero ")
            ->setprix(" €")
            ->setgarantie("Garantie  ans")
            ->setphoto("photo du  e produit")
            ->setqteStock("il reste  en stock")
            ->setestEnVente("")
            ->setidFournisseur("id fournisseur: ");

        $entityManager->persist($Produit);
        $entityManager->flush();
        return new Response('Nouveau produit ajouté id='.$Produit->getId());
    }
}
