<?php

/* addeditform.html.twig */
class __TwigTemplate_7c742c838f9523b4328fc93905542ca26aa69e086baad6da48f591937f9c9d56 extends Twig_Template
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
        echo "\" method=\"POST\">
    <fieldset>
        <legend>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), "html", null, true);
        echo "</legend>
        <span>Заголовок</span><br/>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "\" />
        <input type=\"text\" name=\"title\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "\"><br/>
        <span>Текст новости</span><br/>
        <textarea name=\"text\" cols=\"40\" rows=\"8\"/>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "text", array()), "html", null, true);
        echo "</textarea><br/>
        <input type=\"submit\" value=\"Отправить\"/>
    </fieldset>    
</form>
";
    }

    public function getTemplateName()
    {
        return "addeditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }
}
