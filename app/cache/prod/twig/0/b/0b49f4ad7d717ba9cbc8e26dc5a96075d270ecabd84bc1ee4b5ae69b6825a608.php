<?php

/* css/head.html.twig */
class __TwigTemplate_84273c5d0ceec3a5317bc8a6b88d093ae5b2a3ccb4f05388c4b81c2196dc0dc6 extends Twig_Template
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
        echo "<head>

\t<!-- Basic Page Needs -->
\t<meta charset=\"utf-8\">
\t<title>Blogger</title>
\t<meta name=\"description\" content=\"Logger - Clean & Flat Blog HTML Template\">
\t<meta name=\"author\" content=\"2code.info\">
\t
\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t
\t<!-- Main Style -->
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t
\t<!-- Skins -->
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/skins/skinsblog.css"), "html", null, true);
        echo "\">
\t
\t<!-- Responsive Style -->
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/responsiveblog.css"), "html", null, true);
        echo "\">
\t
\t<!-- Favicons -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">
  
</head>";
    }

    public function getTemplateName()
    {
        return "css/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  45 => 19,  39 => 16,  33 => 13,  19 => 1,);
    }
}
/* <head>*/
/* */
/* 	<!-- Basic Page Needs -->*/
/* 	<meta charset="utf-8">*/
/* 	<title>Blogger</title>*/
/* 	<meta name="description" content="Logger - Clean & Flat Blog HTML Template">*/
/* 	<meta name="author" content="2code.info">*/
/* 	*/
/* 	<!-- Mobile Specific Metas -->*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/* 	*/
/* 	<!-- Main Style -->*/
/* 	<link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/* 	*/
/* 	<!-- Skins -->*/
/* 	<link rel="stylesheet" href="{{ asset('css/skins/skinsblog.css') }}">*/
/* 	*/
/* 	<!-- Responsive Style -->*/
/* 	<link rel="stylesheet" href="{{ asset('css/responsiveblog.css') }}">*/
/* 	*/
/* 	<!-- Favicons -->*/
/* 	<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">*/
/*   */
/* </head>*/
