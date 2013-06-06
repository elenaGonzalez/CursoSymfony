<?php

namespace version2\calcuBundle\Controller;

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
     * @Route("/suma/{n1}{n2}")
     * @Template()
     */
    public function sumaAction($n1,$n2)
    {
        //return array('name' => $name);
        $suma= $n1 + $n2;
        echo $suma;
    }
}
