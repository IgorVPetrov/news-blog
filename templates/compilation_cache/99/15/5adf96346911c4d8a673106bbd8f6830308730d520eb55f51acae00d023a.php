<?php

/* adminview.html.twig */
class __TwigTemplate_99155adf96346911c4d8a673106bbd8f6830308730d520eb55f51acae00d023a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"page-adminindex\">
        ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
        ";
        // line 6
        $this->displayBlock('content2', $context, $blocks);
        // line 8
        echo "    </div>
";
    }

    // line 6
    public function block_content2($context, array $blocks = array())
    {
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "adminview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  49 => 8,  47 => 6,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
