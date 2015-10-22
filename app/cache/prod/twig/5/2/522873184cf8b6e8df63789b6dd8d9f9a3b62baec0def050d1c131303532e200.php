<?php

/* admin/menu.html.twig */
class __TwigTemplate_18776233cb328410dc5e02a76f32eb972fa87c4cbd21b99c38f36b7be4d069c1 extends Twig_Template
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
        return array (  65 => 24,  60 => 22,  53 => 18,  48 => 16,  41 => 12,  36 => 10,  29 => 6,  24 => 4,  19 => 1,);
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
