<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Empresa;
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

    /**
     * @Route("/empresa/servicios/{id}", name="empresa_servicios_mostrar")
     */
    public function MostrarAction(Empresa $empresa)
    {
        $softwares = $this->getDoctrine()->getRepository('AppBundle:Software')->findByEmpresa($empresa);

        $confiRedes = $this->getDoctrine()->getRepository('AppBundle:ConfiRed')->findByEmpresa($empresa);

        $routers = $this->getDoctrine()->getRepository('AppBundle:Router')->findByEmpresa($empresa);

        $servidores = $this->getDoctrine()->getRepository('AppBundle:Servidor')->findByEmpresa($empresa);

        return $this->render('empresa/mostrar.html.twig', [
            'empresa' => $empresa,
            'softwares' => $softwares,
            'confiRedes' => $confiRedes,
            'routers' => $routers,
            'servidores' => $servidores
        ]);
    }
}
