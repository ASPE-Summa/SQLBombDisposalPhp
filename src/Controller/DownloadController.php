<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DownloadController extends AbstractController
{
    #[Route('/download')]
    public function home(): Response
    {
        return $this->render('download.html.twig');
    }
}
