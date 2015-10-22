<?php

/* homeblog.html.twig */
class __TwigTemplate_72c53ac91b6ac3b3005ac08d3d5b5a80e10e2648290f3442d93fd1225064dacb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homeblog.html.twig", 1);
        $this->blocks = array(
            'mainblock' => array($this, 'block_mainblock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d058ec731dbaf454d1de1861ba2648f79ec613583458b27a47e95820f138d1a3 = $this->env->getExtension("native_profiler");
        $__internal_d058ec731dbaf454d1de1861ba2648f79ec613583458b27a47e95820f138d1a3->enter($__internal_d058ec731dbaf454d1de1861ba2648f79ec613583458b27a47e95820f138d1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homeblog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d058ec731dbaf454d1de1861ba2648f79ec613583458b27a47e95820f138d1a3->leave($__internal_d058ec731dbaf454d1de1861ba2648f79ec613583458b27a47e95820f138d1a3_prof);

    }

    // line 2
    public function block_mainblock($context, array $blocks = array())
    {
        $__internal_20012fe32094044aaef131879eab15c4f6710042b36f78550acfae1f62e47e64 = $this->env->getExtension("native_profiler");
        $__internal_20012fe32094044aaef131879eab15c4f6710042b36f78550acfae1f62e47e64->enter($__internal_20012fe32094044aaef131879eab15c4f6710042b36f78550acfae1f62e47e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainblock"));

        // line 3
        echo "\t\t\t\t<div class=\"col-md-8 main-content\">
\t\t\t\t<!-- begin post post-2 post-gallery single-post -->
\t\t\t\t";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ArticleBundle:View:showposts"));
        echo "
\t\t\t\t\t<!-- End post post-2 post-gallery single-post -->
\t\t\t\t\t<div class=\"height_20\"></div>
\t\t\t\t</div><!-- End main-content -->
\t\t\t\t";
        
        $__internal_20012fe32094044aaef131879eab15c4f6710042b36f78550acfae1f62e47e64->leave($__internal_20012fe32094044aaef131879eab15c4f6710042b36f78550acfae1f62e47e64_prof);

    }

    public function getTemplateName()
    {
        return "homeblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}	*/
/* 			{% block mainblock %}*/
/* 				<div class="col-md-8 main-content">*/
/* 				<!-- begin post post-2 post-gallery single-post -->*/
/* 				{{ render(controller('ArticleBundle:View:showposts')) }}*/
/* 					<!-- End post post-2 post-gallery single-post -->*/
/* 					<div class="height_20"></div>*/
/* 				</div><!-- End main-content -->*/
/* 				{% endblock %}*/
/* 				*/
/* 	*/
/* 	*/
/* */
