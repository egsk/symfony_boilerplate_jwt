<?php

namespace App\Controller\UserSpace;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: "/user")]
class WelcomeController extends AbstractController
{
    #[Route(path: "/")]
    public function index(): Response
    {
        return $this->json([
            "status" => "User level access granted",
            "username" => $this->getUser()->getUserIdentifier()
        ]);
    }
}

