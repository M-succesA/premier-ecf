<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'menu')]
    public function index(): Response
    {
        $menuItems=[
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Nos montres', 'route'=>'montres'],
            ['label'=>'Nos bijoux', 'route'=>'bijoux'],
            ['label'=>'Nos colliers', 'route'=>'colliers'],
            ['label'=>'High-tech', 'route'=>'tech'],
            ['label'=>'Contactez-nous', 'route'=>'contact']
        ];
        return $this->render('menu/index.html.twig', [
            'menuItems' => $menuItems
        ]);
    } 

    #[Route('/propos', name: 'propos')]
    public function propos(): Response
    {
        $menuItems=[
            ['label'=>'Accueil', 'route'=>'menu'],
            ["label"=>"A propos", "route"=>"propos"],
            ["label"=>"Nos bijoux", "route"=>"bijoux"],
            ['label'=>'Nos colliers', 'route'=>'colliers'],
            ['label'=>'High-tech', 'route'=>'tech'],
            ['label'=>'Contactez-nous', 'route'=>'contact']
        ];
        return $this->render('menu/propos.html.twig', [
            'menuItems' => $menuItems
        ]);
    }

    #[Route('/montres', name: 'montres')]
    public function montres(): Response
    {
        $menuItems=[
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Nos montres', 'route'=>'montres'],
            ['label'=>'Nos bijoux', 'route'=>'bijoux'],
            ['label'=>'Nos colliers', 'route'=>'colliers'],
            ['label'=>'High-tech', 'route'=>'tech'],
            ['label'=>'Contactez-nous', 'route'=>'contact']
        ];
        return $this->render('menu/montres.html.twig', [
            'menuItems' => $menuItems
        ]);
    }

    #[Route('/bijoux', name: 'bijoux')]
    public function bijoux(): Response
    {
        $menuItems=[
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Nos montres', 'route'=>'montres'],
            ['label'=>'Nos bijoux', 'route'=>'bijoux'],
            ['label'=>'Nos colliers', 'route'=>'colliers'],
            ['label'=>'High-tech', 'route'=>'tech'],
            ['label'=>'Contactez-nous', 'route'=>'contact']
        ];
        return $this->render('menu/bijoux.html.twig', [
            'menuItems' => $menuItems
        ]);
    } 

    #[Route('/tech', name: 'tech')]
    public function tech(): Response
    {
        $menuItems=[
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Nos montres', 'route'=>'montres'],
            ['label'=>'Nos bijoux', 'route'=>'bijoux'],
            ['label'=>'Nos colliers', 'route'=>'colliers'],
            ['label'=>'High-tech', 'route'=>'tech'],
            ['label'=>'Contactez-nous', 'route'=>'contact']
        ];
        return $this->render('menu/tech.html.twig', [
            'menuItems' => $menuItems
        ]);
    }

    #[Route('/colliers', name: 'colliers')]
    public function colliers(): Response
    {
        $menuItems=[
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Nos montres', 'route'=>'montres'],
            ['label'=>'Nos bijoux', 'route'=>'bijoux'],
            ['label'=>'Nos colliers', 'route'=>'colliers'],
            ['label'=>'High-tech', 'route'=>'tech'],
            ['label'=>'Contactez-nous', 'route'=>'contact']
        ];
        return $this->render('menu/colliers.html.twig', [
            'menuItems' => $menuItems
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        $menuItems=[
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Nos montres', 'route'=>'montres'],
            ['label'=>'Nos bijoux', 'route'=>'bijoux'],
            ['label'=>'Nos colliers', 'route'=>'colliers'],
            ['label'=>'High-tech', 'route'=>'tech'],
            ['label'=>'Contactez-nous', 'route'=>'contact']
        ];
        return $this->render('menu/contact.html.twig', [
            'menuItems' => $menuItems
        ]);
    }
}
