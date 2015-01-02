<?php

/* admineditform.html.twig */
class __TwigTemplate_6bbc969616c565ba99be189be7d132bef3059fc1467254c09506be2e1a8c650d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("adminview.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminview.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "    
    ";
        } else {
            // line 6
            echo "    
        ";
            // line 7
            echo twig_include($this->env, $context, "addeditform.html.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "admineditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  48 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
