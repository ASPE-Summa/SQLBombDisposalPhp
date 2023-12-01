<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class TeacherController extends AbstractController
{
    #[Route('/teacher')]
    public function home(): Response
    {
        return $this->render('teachers.html.twig');
    }
}
