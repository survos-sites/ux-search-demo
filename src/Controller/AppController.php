<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AppController extends AbstractController
{
    #[Route('/{searchName}', name: 'app_app')]
    #[Template('app/index.html.twig')]
    public function index(string $searchName='j2'): Response|array
    {
        return [
            'searchName' => $searchName,

        ];
    }
}
