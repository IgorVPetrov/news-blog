<?php

/* adminviewall.html.twig */
class __TwigTemplate_365ec660f23063da17ea4a8e64aa84e0f0ad46887092fdfde6851f926461dfb9 extends Twig_Template
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
        echo "    
        <table id=\"admin-view-all-tbl\">
            <rov id=\" table-header\">
                <th>ID</th>
                <th>Title</th>
                <th>Text</th>
            </rov>
        
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "            <tr>
                <td class=\"table-id\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "text", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    
            <tr>
                <td colspan=\"3\">Нет новостей</td>
            </tr>
            
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo " 
        </table>
        
";
    }

    public function getTemplateName()
    {
        return "adminviewall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  73 => 18,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
