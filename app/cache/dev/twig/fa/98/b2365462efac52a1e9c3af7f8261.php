<?php

/* miCalculadoracalcuBundle:Default:suma.html.twig */
class __TwigTemplate_fa98b2365462efac52a1e9c3af7f8261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("miCalculadoracalcuBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "miCalculadoracalcuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Mi Primera Pagina";
    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "    La suma es :";
        echo twig_escape_filter($this->env, (isset($context["suma"]) ? $context["suma"] : $this->getContext($context, "suma")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "miCalculadoracalcuBundle:Default:suma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
