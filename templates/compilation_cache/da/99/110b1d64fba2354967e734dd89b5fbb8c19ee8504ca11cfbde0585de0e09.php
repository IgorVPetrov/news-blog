<?php

/* base.html.twig */
class __TwigTemplate_da99110b1d64fba2354967e734dd89b5fbb8c19ee8504ca11cfbde0585de0e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'link' => array($this, 'block_link'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\"/>
        ";
        // line 6
        $this->displayBlock('link', $context, $blocks);
        echo " 
    </head>
    ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo " 
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " News Blog ";
    }

    // line 6
    public function block_link($context, array $blocks = array())
    {
        echo " ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <body>
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        echo "    
    </body>
    ";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  61 => 9,  58 => 8,  52 => 6,  46 => 4,  40 => 12,  38 => 8,  33 => 6,  28 => 4,  23 => 1,);
    }
}
