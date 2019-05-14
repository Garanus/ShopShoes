<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PromotionControllerController extends Controller
{
    /**
     * @Route("/promotion", name="promotion")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('homeView/promotion.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
