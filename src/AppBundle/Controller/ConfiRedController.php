<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConfiRedController extends Controller
{
    /**
     * @Route("/confiredes", name="confired_listar")
     */
    public function listarAction(Request $request)
    {
        $confiRedes = $this->getDoctrine()->getRepository('AppBundle:ConfiRed')->findAll();

        return $this->render('confired/listar.html.twig', [
            'confiRedes' => $confiRedes
        ]);
    }
}
