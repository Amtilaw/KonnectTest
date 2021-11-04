<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class ServicesController extends AbstractController
{
    /**
     * @Route("/services", name="services")
     */
    public function index(LoggerInterface $logger, MessageGenerator $messageGenerator): Response
    {
      // Créer un log pour les développeur symfony (dans admin : log)
      $message = $messageGenerator->getHappyMessage();
      $logger->info($message);
      $this->addFlash('success', $message);

        return $this->render('services/index.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }
}
