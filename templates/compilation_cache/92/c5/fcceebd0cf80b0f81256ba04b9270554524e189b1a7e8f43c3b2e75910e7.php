<?php

/* layout.html.twig */
class __TwigTemplate_92c5fcceebd0cf80b0f81256ba04b9270554524e189b1a7e8f43c3b2e75910e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'link' => array($this, 'block_link'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_link($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../css/styles.css\" />    
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "  
";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
