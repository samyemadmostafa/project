<?php

/* css/header.html.twig */
class __TwigTemplate_97ba8d6efa5cbe668b9ca7a5888111e857e06af2b6f3ece4a8492bad70478286 extends Twig_Template
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
        $__internal_90c7bbd2b228c829382c8339968b4ffd25e860c9e5e0f4daee6d17fc200fff7b = $this->env->getExtension("native_profiler");
        $__internal_90c7bbd2b228c829382c8339968b4ffd25e860c9e5e0f4daee6d17fc200fff7b->enter($__internal_90c7bbd2b228c829382c8339968b4ffd25e860c9e5e0f4daee6d17fc200fff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css/header.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">english</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["urlarabic"]) ? $context["urlarabic"] : $this->getContext($context, "urlarabic")), "html", null, true);
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
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"current_page_item\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("dashboard", array(), "public");
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav><!-- End navigation -->
\t\t</div><!-- End container -->
\t</header><!-- End header -->";
        
        $__internal_90c7bbd2b228c829382c8339968b4ffd25e860c9e5e0f4daee6d17fc200fff7b->leave($__internal_90c7bbd2b228c829382c8339968b4ffd25e860c9e5e0f4daee6d17fc200fff7b_prof);

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
        return array (  62 => 21,  58 => 20,  52 => 17,  48 => 16,  41 => 12,  37 => 11,  32 => 9,  22 => 1,);
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
/* 					</li>*/
/* 					<li class="current_page_item"><a href="{{ path('login')}}">*/
/* 					{% trans from "public" %} dashboard {% endtrans %}</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</nav><!-- End navigation -->*/
/* 		</div><!-- End container -->*/
/* 	</header><!-- End header -->*/
