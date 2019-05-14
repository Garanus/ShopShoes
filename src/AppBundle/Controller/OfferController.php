<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OfferController extends Controller
{
    /**
     * @Route("/offer", name="offer")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('homeView/offer.html.twig', []);
    }
}