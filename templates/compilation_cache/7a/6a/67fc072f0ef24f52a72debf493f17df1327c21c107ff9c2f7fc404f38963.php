<?php

/* menu.html.twig */
class __TwigTemplate_7a6a67fc072f0ef24f52a72debf493f17df1327c21c107ff9c2f7fc404f38963 extends Twig_Template
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
        echo "<ul id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "id", array()), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "class", array()), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "elements", array()));
        foreach ($context['_seq'] as $context["route"] => $context["descr"]) {
            // line 3
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $context["route"], "html", null, true);
            echo "\"><div>";
            echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
            echo "</div></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['route'], $context['descr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  30 => 3,  26 => 2,  19 => 1,);
    }
}
