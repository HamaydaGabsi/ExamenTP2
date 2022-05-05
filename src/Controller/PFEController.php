<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PFEController extends AbstractController
{
    #[Route('/pfe/add', name: 'pfe.add')]
    public function ajoutPFE(): Response
    {
        return $this->render('pfe/index.html.twig', [
            'controller_name' => 'PFEController',
        ]);
    }
    #[Route('/pfe/info/{id})', name: 'pfe.info')]
    public function infoPFE(): Response
    {
        return $this->render('pfe/index.html.twig', [
            'controller_name' => 'PFEController',
        ]);
    }
    #[Route('/pfe/{id})', name: 'pfe.entreprise')]
    public function PFEparEntreprise(): Response
    {
        return $this->render('pfe/index.html.twig', [
            'controller_name' => 'PFEController',
        ]);
    }
}
