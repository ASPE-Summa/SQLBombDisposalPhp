<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class PuzzleController extends AbstractController
{
    #[Route('/puzzles')]
    public function puzzleOverview(): Response
    {
        return $this->render('puzzles.html.twig');
    }
}
