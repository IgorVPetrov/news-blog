<?php

/* adminviewarticle.html.twig */
class __TwigTemplate_4e26a1e9fa26aa7454312a4f67aa352cd33003b7a12d34962cb5d654e7e5e625 extends Twig_Template
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
        if ((isset($context["article"]) ? $context["article"] : null)) {
            // line 13
            echo "            <tr>
                <td class=\"table-id\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "text", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        } else {
            // line 18
            echo "    
            <tr>
                <td colspan=\"3\">";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</td>
            </tr>
            
         ";
        }
        // line 23
        echo " 
        </table>
        
";
    }

    public function getTemplateName()
    {
        return "adminviewarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  72 => 20,  68 => 18,  62 => 16,  58 => 15,  54 => 14,  51 => 13,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
