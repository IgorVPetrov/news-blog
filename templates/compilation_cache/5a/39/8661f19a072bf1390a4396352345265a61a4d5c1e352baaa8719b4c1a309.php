<?php

/* useraddform.html.twig */
class __TwigTemplate_5a398661f19a072bf1390a4396352345265a61a4d5c1e352baaa8719b4c1a309 extends Twig_Template
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
        echo twig_include($this->env, $context, "addeditform.html.twig");
        echo " 
";
    }

    public function getTemplateName()
    {
        return "useraddform.html.twig";
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
