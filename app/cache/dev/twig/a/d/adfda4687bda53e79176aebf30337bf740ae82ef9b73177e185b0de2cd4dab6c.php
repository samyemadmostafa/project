<?php

/* UserBundle:View:users.html.twig */
class __TwigTemplate_edc397ce723b1e50c3541b3a9911ac96011a34ac6ee9e5173d001f5f9f56a59a extends Twig_Template
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
        $__internal_7751dc69021c45555214a358668a193c24c0f4d7cb8accc68f72d0877b172084 = $this->env->getExtension("native_profiler");
        $__internal_7751dc69021c45555214a358668a193c24c0f4d7cb8accc68f72d0877b172084->enter($__internal_7751dc69021c45555214a358668a193c24c0f4d7cb8accc68f72d0877b172084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:View:users.html.twig"));

        // line 1
        echo "<div class=\"widget widget-about\">
\t\t\t\t\t\t<div class=\"widget-about-img\"><img alt=\"\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "image", array()), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t<h3>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "username", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<div class=\"social-ul\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"social-facebook\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "facebook", array()), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-twitter\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "twitter", array()), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-google\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "googleplus", array()), "html", null, true);
        echo "\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-linkedin\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "linkedin", array()), "html", null, true);
        echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-youtube\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "youtube", array()), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- End social-ul -->
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div><!-- End widget -->";
        
        $__internal_7751dc69021c45555214a358668a193c24c0f4d7cb8accc68f72d0877b172084->leave($__internal_7751dc69021c45555214a358668a193c24c0f4d7cb8accc68f72d0877b172084_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:View:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  30 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="widget widget-about">*/
/* 						<div class="widget-about-img"><img alt="" src="{{ asset('uploads/') }}{{ data.image }}"></div>*/
/* 						<h3>{{ data.username }}</h3>*/
/* 						<div class="social-ul">*/
/* 							<ul>*/
/* 								<li class="social-facebook"><a href="{{ data.facebook }}"><i class="fa fa-facebook"></i></a></li>*/
/* 								<li class="social-twitter"><a href="{{ data.twitter }}"><i class="fa fa-twitter"></i></a></li>*/
/* 								<li class="social-google"><a href="{{ data.googleplus }}"><i class="fa fa-google-plus"></i></a></li>*/
/* 								<li class="social-linkedin"><a href="{{ data.linkedin }}"><i class="fa fa-linkedin"></i></a></li>*/
/* 								<li class="social-youtube"><a href="{{ data.youtube }}"><i class="fa fa-youtube-play"></i></a></li>*/
/* 							</ul>*/
/* 						</div><!-- End social-ul -->*/
/* 						<div class="clearfix"></div>*/
/* 					</div><!-- End widget -->*/
