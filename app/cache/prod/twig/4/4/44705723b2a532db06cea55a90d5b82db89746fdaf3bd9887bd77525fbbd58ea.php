<?php

/* CategoryBundle:View:categories.html.twig */
class __TwigTemplate_56561b08a23f7ec64408aec63667275ca6527bd44f09b92098b79dfcabc1f133 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
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
        return array (  45 => 12,  33 => 9,  29 => 8,  24 => 5,  22 => 2,  19 => 1,);
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
