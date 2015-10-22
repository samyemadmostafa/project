<?php

/* admin/header.html.twig */
class __TwigTemplate_615075093d3fb8996a84c515deace284e1ce223d7fe473971c6ce003c2359ded extends Twig_Template
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
        $__internal_3b6bc0527befdbb47194c9bfb85cd0e50b7ea13ff93d981fdcd1a5381edfc4a6 = $this->env->getExtension("native_profiler");
        $__internal_3b6bc0527befdbb47194c9bfb85cd0e50b7ea13ff93d981fdcd1a5381edfc4a6->enter($__internal_3b6bc0527befdbb47194c9bfb85cd0e50b7ea13ff93d981fdcd1a5381edfc4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/header.html.twig"));

        // line 1
        echo "<div  class=\"navbar navbar-default\" id=\"navbar\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('navbar' , 'fixed')}catch(e){}
\t\t\t</script>

\t\t\t<div class=\"navbar-container\" id=\"navbar-container\">
\t\t\t\t<div class=\"navbar-header pull-left\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-brand\">
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t<i class=\"icon-leaf\"></i>
\t\t\t\t\t\tDashboard
\t\t\t\t\t\t</small>
\t\t\t\t\t</a><!-- /.brand -->
\t\t\t\t</div><!-- /.navbar-header -->

\t\t\t\t<div class=\"navbar-header pull-right\" role=\"navigation\">
\t\t\t\t\t<ul class=\"nav ace-nav\">\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"light-blue\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Welcome,
\t\t\t\t\t\t\t\t\t";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 24
            echo "    <p> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
";
        }
        // line 26
        echo "\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<i class=\"icon-caret-down\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-off\"></i>
\t\t\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("logout", array(), "public");
        // line 42
        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul><!-- /.ace-nav -->
\t\t\t\t</div><!-- /.navbar-header -->
\t\t\t</div><!-- /.container -->
\t\t</div>
";
        
        $__internal_3b6bc0527befdbb47194c9bfb85cd0e50b7ea13ff93d981fdcd1a5381edfc4a6->leave($__internal_3b6bc0527befdbb47194c9bfb85cd0e50b7ea13ff93d981fdcd1a5381edfc4a6_prof);

    }

    public function getTemplateName()
    {
        return "admin/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 42,  74 => 41,  69 => 39,  54 => 26,  48 => 24,  46 => 23,  22 => 1,);
    }
}
/* <div  class="navbar navbar-default" id="navbar">*/
/* 			<script type="text/javascript">*/
/* 				try{ace.settings.check('navbar' , 'fixed')}catch(e){}*/
/* 			</script>*/
/* */
/* 			<div class="navbar-container" id="navbar-container">*/
/* 				<div class="navbar-header pull-left">*/
/* 					<a href="#" class="navbar-brand">*/
/* 						<small>*/
/* 							<i class="icon-leaf"></i>*/
/* 						Dashboard*/
/* 						</small>*/
/* 					</a><!-- /.brand -->*/
/* 				</div><!-- /.navbar-header -->*/
/* */
/* 				<div class="navbar-header pull-right" role="navigation">*/
/* 					<ul class="nav ace-nav">						*/
/* 						<li class="light-blue">*/
/* 							<a data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/* 								*/
/* 								<span class="user-info">*/
/* 									<small>Welcome,*/
/* 									{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*     <p> {{ app.user.username }}</p>*/
/* {% endif %}*/
/* 									</small>*/
/* 								</span>*/
/* */
/* 								<i class="icon-caret-down"></i>*/
/* 							</a>*/
/* */
/* 							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/* 								*/
/* */
/* 								*/
/* */
/* 								<li class="divider"></li>*/
/* 								<li>*/
/* 								<a href="{{ path('logout') }}">*/
/* 										<i class="icon-off"></i>*/
/* 										{% trans from "public" %} logout {% endtrans %}*/
/* 									</a>*/
/* 								</li>*/
/* 								*/
/* 								*/
/* 							</ul>*/
/* 						</li>*/
/* 					</ul><!-- /.ace-nav -->*/
/* 				</div><!-- /.navbar-header -->*/
/* 			</div><!-- /.container -->*/
/* 		</div>*/
/* */
