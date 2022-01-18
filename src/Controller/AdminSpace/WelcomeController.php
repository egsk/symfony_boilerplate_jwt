<?php

namespace App\Controller\AdminSpace;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: "/admin")]
class WelcomeController extends AbstractController
{
    #[Route(path: "/")]
    public function index(): Response
    {
        return $this->json([
            "status" => "Admin level access granted",
            "username" => $this->getUser()->getUserIdentifier()
        ]);
    }
}
