<?php

/* miCalculadoracalcuBundle::layout.html.twig */
class __TwigTemplate_066e66a321de3004461dc8f35138106a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"cabecera\">
            ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 12
        echo "        </div>
 <div id=\"content\">
 ";
        // line 14
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 17
        echo " ";
        $this->displayBlock('pie', $context, $blocks);
        // line 20
        echo " </div>
 </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenidos";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "                <h1>Bienvenidos</h1>
            ";
    }

    // line 14
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 15
        echo "         <h3></h3>
";
    }

    // line 17
    public function block_pie($context, array $blocks = array())
    {
        // line 18
        echo "       <h4>Todos los derechos recervados</h4>
";
    }

    public function getTemplateName()
    {
        return "miCalculadoracalcuBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  75 => 17,  70 => 15,  67 => 14,  62 => 10,  59 => 9,  53 => 5,  47 => 20,  44 => 17,  42 => 14,  38 => 12,  36 => 9,  29 => 5,  23 => 1,);
    }
}
