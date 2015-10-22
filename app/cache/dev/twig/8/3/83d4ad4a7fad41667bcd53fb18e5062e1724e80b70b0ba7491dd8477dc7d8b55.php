<?php

/* CategoryBundle:View:categories.html.twig */
class __TwigTemplate_26ff926b07fe38643f68609988acea0a978acbfae87222bb4cf2b31e1897890a extends Twig_Template
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
        $__internal_c304d8b50ff3427e3a2ccc9860029e057169b68df2910ddbc40944776ecb4348 = $this->env->getExtension("native_profiler");
        $__internal_c304d8b50ff3427e3a2ccc9860029e057169b68df2910ddbc40944776ecb4348->enter($__internal_c304d8b50ff3427e3a2ccc9860029e057169b68df2910ddbc40944776ecb4348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CategoryBundle:View:categories.html.twig"));

        // line 1
        echo "<div class=\"widget\">
\t\t\t\t\t\t<div class=\"widget-title\"><i class=\"fa fa-folder-open\"></i>";
        // line 2
        echo $this->env->getExtension('translator')->getTranslator()->trans("category", array(), "category");
        // line 5
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-categories\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catblog", array("catid" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a><i class=\"fa fa-angle-double-right\"></i></li>

\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- End widget-categories -->
\t\t\t\t\t</div>";
        
        $__internal_c304d8b50ff3427e3a2ccc9860029e057169b68df2910ddbc40944776ecb4348->leave($__internal_c304d8b50ff3427e3a2ccc9860029e057169b68df2910ddbc40944776ecb4348_prof);

    }

    public function getTemplateName()
    {
        return "CategoryBundle:View:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  36 => 9,  32 => 8,  27 => 5,  25 => 2,  22 => 1,);
    }
}
/* <div class="widget">*/
/* 						<div class="widget-title"><i class="fa fa-folder-open"></i>{% trans from "category" %}*/
/* 						category*/
/* 						{% endtrans %}*/
/* 						</div>*/
/* 						<div class="widget-categories">*/
/* 							<ul>*/
/* 							{% for category in data %}*/
/* 								<li><a href="{{ path('catblog',{'catid' : category.id })}}">{{ category.name }}</a><i class="fa fa-angle-double-right"></i></li>*/
/* */
/* 								{% endfor %}*/
/* 							</ul>*/
/* 						</div><!-- End widget-categories -->*/
/* 					</div>*/
