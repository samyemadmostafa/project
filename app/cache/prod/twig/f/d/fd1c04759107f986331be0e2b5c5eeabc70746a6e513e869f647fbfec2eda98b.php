<?php

/* homeblog.html.twig */
class __TwigTemplate_e6e708c218bb051bd8e478cfa00c08b10ba1c361b8e81e462db360a660c8373d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mainblock($context, array $blocks = array())
    {
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
        return array (  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
