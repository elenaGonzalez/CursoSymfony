<?php

namespace miCalculadora\calcuBundle\Controller;

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
     * @Route("/suma/{n1}/{n2}")
     * @Template()
     */
    public function sumaAction($n1,$n2)
    {
        $suma=$n1 + $n2;
        return array('suma' => $suma);
    }
}
