<?php

/* useradd.html.twig */
class __TwigTemplate_72644cfa7c28aed3246197ac872b9afd636cb677732c13d432a4ef48ed6105a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("userview.html.twig");
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
        return "userview.html.twig";
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
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "useradd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
