<?php

namespace bundle\CalculadoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
     /**
     * @Route("/operar/{n1}{n2}")
     * @Template(Bundle/calculadoraBundle/Resources/views/operar.html.twig)
     */
    public function operarAction($n1,$n2)
    {
        $resul=$n1 + $n2;
        return array('resultado' => $resul);
        }

 }
