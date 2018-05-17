<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClienteController extends Controller
{
    /**
     * @Route("/clientes", name="cliente_listar")
     */
    public function listarAction(Request $request)
    {
        $clientes = $this->getDoctrine()->getRepository('AppBundle:Cliente')->findAll();

        return $this->render('cliente/listar.html.twig', [
            'clientes' => $clientes
        ]);
    }
}
