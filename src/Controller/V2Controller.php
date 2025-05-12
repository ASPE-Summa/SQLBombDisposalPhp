<?php
/**
 * Author: Peter Askey
 * For education Purposes only
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class V2Controller extends AbstractController
{
    #[Route('/v2')]
    public function home(): Response
    {
        return $this->render('v2.html.twig');
    }
}