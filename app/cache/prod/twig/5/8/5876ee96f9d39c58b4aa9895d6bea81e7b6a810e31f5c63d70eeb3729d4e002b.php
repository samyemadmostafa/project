<?php

/* ArticleBundle:View:homearticle.html.twig */
class __TwigTemplate_b89cbc0c3159521a11d64478165211e6a42d8e0ff8f2043d3533d9b6f17691fc extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 2
            echo "<div class=\"post post-image\">
\t\t\t\t\t\t<div class=\"post-head\"><h3><a href=\"single-blog.html\">";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div><!-- End post-head -->
\t\t\t\t\t\t<div class=\"post-wrap\">
\t\t\t\t\t\t\t<div class=\"post-img\"><a href=\"single-blog.html\"><img alt=\"\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploadsarticle/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
            echo "\"></a></div>
\t\t\t\t\t\t\t<div class=\"post-inner\">
\t\t\t\t\t\t\t\t<p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<div class=\"post-share-view\">
\t\t\t\t\t\t\t\t\t<div class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mainblogdescription", array("articleid" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"button post-more\">Continue Reading</a>
\t\t\t\t\t\t\t\t\t</div><!-- End post-meta -->
\t\t\t\t\t\t\t\t</div><!-- End post-share-view -->
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</div><!-- End post-inner -->
\t\t\t\t\t\t</div><!-- End post-wrap -->
\t\t\t\t\t</div><!-- End post -->
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ArticleBundle:View:homearticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  39 => 9,  33 => 7,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for article in data %}*/
/* <div class="post post-image">*/
/* 						<div class="post-head"><h3><a href="single-blog.html">{{ article.name }}</a></h3>*/
/* 							<div class="clearfix"></div>*/
/* 						</div><!-- End post-head -->*/
/* 						<div class="post-wrap">*/
/* 							<div class="post-img"><a href="single-blog.html"><img alt="" src="{{ asset('uploadsarticle/')}}{{ article.image }}"></a></div>*/
/* 							<div class="post-inner">*/
/* 								<p>{{ article.description }}</p>*/
/* 								<div class="clearfix"></div>*/
/* 								<div class="post-share-view">*/
/* 									<div class="post-meta">*/
/* 										*/
/* 										<a href="{{ path('mainblogdescription',{'articleid' : article.id}) }}" class="button post-more">Continue Reading</a>*/
/* 									</div><!-- End post-meta -->*/
/* 								</div><!-- End post-share-view -->*/
/* 								<div class="clearfix"></div>*/
/* 							</div><!-- End post-inner -->*/
/* 						</div><!-- End post-wrap -->*/
/* 					</div><!-- End post -->*/
/* 					{% endfor %}*/
