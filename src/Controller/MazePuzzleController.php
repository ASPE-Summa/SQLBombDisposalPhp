<?php

namespace App\Controller;

use App\Repository\MazePuzzleRepository;
use Doctrine\DBAL\ConnectionException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class MazePuzzleController extends AbstractController
{
    #[Route('/mazepuzzle')]
    public function mazepuzzle(Request $request, EntityManagerInterface $entityManager, MazePuzzleRepository $mazePuzzleRepository): Response
    {
        if ($request->isMethod("POST")) {
            try{
                $puzzleRows = $entityManager->getConnection()->executeQuery($request->get('query'))->fetchAllAssociative();
                return $this->render('maze.html.twig', ['puzzleRows' => $puzzleRows]);

            }
            catch (ConnectionException $e){
                return $this->render('error.html.twig');
            }
        }

        $puzzleRows = $entityManager->getConnection()->executeQuery("SELECT * FROM maze_puzzle")->fetchAllAssociative();
        return $this->render('maze.html.twig', ['puzzleRows' => $puzzleRows]);
    }
}
