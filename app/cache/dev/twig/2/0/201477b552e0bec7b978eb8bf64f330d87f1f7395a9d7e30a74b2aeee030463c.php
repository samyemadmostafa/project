<?php

/* css/head.html.twig */
class __TwigTemplate_f328bd07f86324c1ab23ad54775a5428526d62b7f01e55833155390e25bd0c79 extends Twig_Template
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
        $__internal_d285604c793fd94eb2ea3c30a3c72fa5d88d5b98ba9e75e4594eda814c2af8ae = $this->env->getExtension("native_profiler");
        $__internal_d285604c793fd94eb2ea3c30a3c72fa5d88d5b98ba9e75e4594eda814c2af8ae->enter($__internal_d285604c793fd94eb2ea3c30a3c72fa5d88d5b98ba9e75e4594eda814c2af8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css/head.html.twig"));

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
        
        $__internal_d285604c793fd94eb2ea3c30a3c72fa5d88d5b98ba9e75e4594eda814c2af8ae->leave($__internal_d285604c793fd94eb2ea3c30a3c72fa5d88d5b98ba9e75e4594eda814c2af8ae_prof);

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
        return array (  54 => 22,  48 => 19,  42 => 16,  36 => 13,  22 => 1,);
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
