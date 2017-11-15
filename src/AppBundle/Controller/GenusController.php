<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $notes = [
            ' Octopus asked me a riddle, outsmarted me',
            'I counted & legs... as wrapped around me',
            'Inked!'
        ];
        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            "notes" => $notes
        ]);

    }
}