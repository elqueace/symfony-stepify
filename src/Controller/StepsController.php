<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StepsController extends AbstractController
{
    /**
     * @Route("/steps", name="steps")
     */
    public function index()
    {
        return $this->render('steps/index.html.twig', [
            'controller_name' => 'StepsController',
        ]);
    }
}
