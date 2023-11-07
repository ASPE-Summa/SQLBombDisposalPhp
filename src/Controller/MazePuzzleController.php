<?php

namespace App\Controller;

use App\Repository\MazePuzzleRepository;
use Doctrine\DBAL\ConnectionException;
use Doctrine\DBAL\Exception\InvalidFieldNameException;
use Doctrine\DBAL\Exception\SyntaxErrorException;
use Doctrine\DBAL\Exception\TableNotFoundException;
use Doctrine\DBAL\Query\QueryException;
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
            /**
             * Database user for Entity manager connection only has read access so any other type of query will
             * throw a ConnectionException
             */

            $query = $request->get('query');
            try{
                $puzzleRows = $entityManager->getConnection()->executeQuery($query)->fetchAllAssociative();
                return $this->render('maze.html.twig', ['puzzleRows' => $puzzleRows , 'query' => $request->get('query')]);

            }
            catch (ConnectionException $e){
                return $this->render('error.html.twig');
            }
            catch (QueryException|TableNotFoundException|InvalidFieldNameException|SyntaxErrorException $e){
                return $this->render('maze.html.twig', ['puzzleRows' => [], 'queryException' => $e->getMessage(), 'query' => $request->get('query')]);
            }
        }

        $puzzleRows = $entityManager->getConnection()->executeQuery("SELECT * FROM maze_puzzle")->fetchAllAssociative();
        return $this->render('maze.html.twig', ['puzzleRows' => $puzzleRows]);
    }
}
