<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;;

#[Route('/test')]
final class TestController extends AbstractController
{
    #[Route('/index', name: 'test_index', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'result' => 'Hello World!',
        ]);
    }
}