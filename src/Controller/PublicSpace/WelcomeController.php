<?php

namespace App\Controller\PublicSpace;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return $this->json(['status' => 'Main page works fine']);
    }
}
