<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmpresaController extends Controller
{
    /**
     * @Route("/empresas", name="empresa_listar")
     */
    public function listarAction()
    {
        $empresas = $this->getDoctrine()->getRepository('AppBundle:Empresa')->findAll();

        return $this->render('empresa/listar.html.twig', [
            'empresas' => $empresas
        ]);
    }
}
