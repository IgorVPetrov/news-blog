<?php

/* idinputform.html.twig */
class __TwigTemplate_3039a72c0224e93b83fc475cffc3e8c296eb6853562e6e1aac30abedb2c76fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()), "html", null, true);
        echo "\" method=\"GET\">
    <fieldset id=\"newsgetform-fieldset\"> 
    <legend>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), "html", null, true);
        echo "</legend>
        <input type=\"text\" name=\"id\" /><br/>
        <input type=\"submit\" value=\"Отправить\"/>
    </fieldset>    
</form>
";
    }

    public function getTemplateName()
    {
        return "idinputform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
