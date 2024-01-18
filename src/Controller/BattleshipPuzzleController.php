<?php

namespace App\Controller;

use Doctrine\DBAL\Exception\ConnectionException;
use Doctrine\DBAL\Exception\InvalidFieldNameException;
use Doctrine\DBAL\Exception\SyntaxErrorException;
use Doctrine\DBAL\Exception\TableNotFoundException;
use Doctrine\DBAL\Query\QueryException;
use Doctrine\DBAL\Schema\Exception\ColumnDoesNotExist;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Exception\MissingColumnException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class BattleshipPuzzleController extends AbstractController
{
    #[Route('/battleshippuzzle')]
    public function battleshipPuzzle(Request $request, EntityManagerInterface $userEntityManager): Response
    {
        if ($request->isMethod("POST")) {
            /**
             * Database user for Entity manager connection only has read access so any other type of query will
             * throw a ConnectionException
             */

            $query = $request->get('query');
            try{
                $puzzleRows = $userEntityManager->getConnection()->executeQuery($query)->fetchAllAssociative();
                return $this->render('battleship.html.twig', ['puzzleRows' => $puzzleRows , 'query' => $request->get('query')]);

            }
            catch (ConnectionException $e){
                return $this->render('error.html.twig');
            }
            catch (QueryException|TableNotFoundException|InvalidFieldNameException|SyntaxErrorException|ColumnDoesNotExist $e){
                return $this->render('battleship.html.twig', ['puzzleRows' => [], 'queryException' => $e->getMessage(), 'query' => $request->get('query')]);
            }
        }

        $puzzleRows = $userEntityManager->getConnection()->executeQuery("SELECT * FROM battleship")->fetchAllAssociative();
        return $this->render('battleship.html.twig', ['puzzleRows' => $puzzleRows]);
    }
}
