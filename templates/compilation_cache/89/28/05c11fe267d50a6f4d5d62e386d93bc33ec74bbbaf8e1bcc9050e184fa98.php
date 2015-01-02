<?php

/* userviewall.html.twig */
class __TwigTemplate_892805c11fe267d50a6f4d5d62e386d93bc33ec74bbbaf8e1bcc9050e184fa98 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "        <div class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</div>
        <div class=\"text\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "text", array()), "html", null, true);
            echo "</div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 8
            echo "        <div>Нет новостей</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "   
";
    }

    public function getTemplateName()
    {
        return "userviewall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  57 => 8,  50 => 6,  45 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
