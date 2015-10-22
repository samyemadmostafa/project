<?php

/* UserBundle:View:users.html.twig */
class __TwigTemplate_090d9bff09a6183c7aeafc7eff9552299c10aae8887b95ab885e998f4172823f extends Twig_Template
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
        echo "<div class=\"widget widget-about\">
\t\t\t\t\t\t<div class=\"widget-about-img\"><img alt=\"\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "image", array()), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t<h3>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "username", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<div class=\"social-ul\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"social-facebook\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "facebook", array()), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-twitter\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "twitter", array()), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-google\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "googleplus", array()), "html", null, true);
        echo "\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-linkedin\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "linkedin", array()), "html", null, true);
        echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-youtube\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "youtube", array()), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div><!-- End social-ul -->
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div><!-- End widget -->";
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
        return array (  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  27 => 3,  22 => 2,  19 => 1,);
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
