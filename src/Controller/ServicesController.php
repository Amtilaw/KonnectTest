<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class ServicesController extends AbstractController
{
    /**
     * @Route("/services", name="services")
     */
    public function index(LoggerInterface $logger): Response
    {
      // Créer un log pour les développeur symfony (dans admin : log)
      $logger->info('Look, I just used a service!');

        return $this->render('services/index.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }
}
