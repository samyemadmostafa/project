<?php

/* admin/menu.html.twig */
class __TwigTemplate_98c7fedb9f255db0bd665eaa2de5154b19bf912e9193cf6ef53e7101f9bc6115 extends Twig_Template
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
        $__internal_200a1f30c51f3ad77560da0da94a5962532db98140dab5f497ef090f223d30a9 = $this->env->getExtension("native_profiler");
        $__internal_200a1f30c51f3ad77560da0da94a5962532db98140dab5f497ef090f223d30a9->enter($__internal_200a1f30c51f3ad77560da0da94a5962532db98140dab5f497ef090f223d30a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/menu.html.twig"));

        // line 1
        echo "
<ul class=\"nav nav-list\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("categoryblog");
        echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"menu-text\">";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("category", array(), "category");
        echo " </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("adminuser");
        echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"menu-text\">";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("user", array(), "user");
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("adminarticle");
        echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"menu-text\">";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("article", array(), "article");
        echo " </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"menu-text\">";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("logout", array(), "public");
        echo " </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>";
        
        $__internal_200a1f30c51f3ad77560da0da94a5962532db98140dab5f497ef090f223d30a9->leave($__internal_200a1f30c51f3ad77560da0da94a5962532db98140dab5f497ef090f223d30a9_prof);

    }

    public function getTemplateName()
    {
        return "admin/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  63 => 22,  56 => 18,  51 => 16,  44 => 12,  39 => 10,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* */
/* <ul class="nav nav-list">*/
/* 						<li>*/
/* 							<a href="{{ path('categoryblog') }}">*/
/* 								*/
/* 								<span class="menu-text">{% trans from "category" %} category {% endtrans %} </span>*/
/* 							</a>*/
/* 						</li>	*/
/* 						<li>*/
/* 							<a href="{{ path('adminuser') }}">*/
/* 								*/
/* 								<span class="menu-text">{% trans from "user" %} user {% endtrans %}</span>*/
/* 							</a>*/
/* 						</li>	*/
/* 						<li>*/
/* 							<a href="{{ path('adminarticle') }}">*/
/* 								*/
/* 								<span class="menu-text">{% trans from "article" %} article {% endtrans %} </span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a href="{{ path('logout') }}">*/
/* 								*/
/* 								<span class="menu-text">{% trans from "public" %} logout {% endtrans %} </span>*/
/* 							</a>*/
/* 						</li>*/
/* 						*/
/* 						*/
/* 					</ul>*/
