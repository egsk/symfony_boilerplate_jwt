<?php

namespace App\Controller\ModeratorSpace;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: "/moderator")]
class WelcomeController extends AbstractController
{
    #[Route(path: "/")]
    public function index(): Response
    {
        return $this->json([
            "status" => "Moderator level access granted",
            "username" => $this->getUser()->getUserIdentifier()
        ]);
    }
}

