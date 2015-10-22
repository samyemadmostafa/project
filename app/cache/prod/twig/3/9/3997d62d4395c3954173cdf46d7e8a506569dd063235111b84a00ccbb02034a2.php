<?php

/* css/header.html.twig */
class __TwigTemplate_0b027c9cf753cd892cfc7c3d9ba456d5180f1c9e0904023f75a0eb31c795ef5f extends Twig_Template
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
        echo "<header id=\"header\">
\t\t<div class=\"container clearfix\">
\t\t\t<div class=\"logo\"><a href=\"index.html\">Logger</a></div><!-- End logo -->
\t\t\t<nav class=\"navigation\">
\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<li class=\"current_page_item\"><a href=\"\">
\t\t\t\t\t";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("language", array(), "public");
        echo "</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">english</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["urlarabic"]) ? $context["urlarabic"] : null), "html", null, true);
        echo "\">العريبه</a></li>
\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"current_page_item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("mainblog");
        echo "\">
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("main", array(), "public");
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav><!-- End navigation -->
\t\t</div><!-- End container -->
\t</header><!-- End header -->";
    }

    public function getTemplateName()
    {
        return "css/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  45 => 16,  38 => 12,  34 => 11,  29 => 9,  19 => 1,);
    }
}
/* <header id="header">*/
/* 		<div class="container clearfix">*/
/* 			<div class="logo"><a href="index.html">Logger</a></div><!-- End logo -->*/
/* 			<nav class="navigation">*/
/* 				<ul>*/
/* 					*/
/* 					*/
/* 					<li class="current_page_item"><a href="">*/
/* 					{% trans from "public" %} language {% endtrans %}</a>*/
/* 						<ul>*/
/* 							<li><a href="{{ url }}">english</a></li>*/
/* 							<li><a href="{{ urlarabic}}">العريبه</a></li>*/
/* 						*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="current_page_item"><a href="{{ path('mainblog')}}">*/
/* 					{% trans from "public" %} main {% endtrans %}</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</nav><!-- End navigation -->*/
/* 		</div><!-- End container -->*/
/* 	</header><!-- End header -->*/
