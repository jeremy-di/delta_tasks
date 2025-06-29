<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TaskRepository;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(TaskRepository $taskRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'tasks' => $taskRepository->findAll(),
        ]);
    }
}
