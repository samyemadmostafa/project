<?php

/* base.html.twig */
class __TwigTemplate_3072860e33b82c4c37583c4f359f6464e50814011fec3eb2fb06107a8af0b02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'mainblock' => array($this, 'block_mainblock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dc2b5aac3fcab7486c872fa44dbc34e71d44a2cbda6cf3960cb8fb69e058f0c = $this->env->getExtension("native_profiler");
        $__internal_8dc2b5aac3fcab7486c872fa44dbc34e71d44a2cbda6cf3960cb8fb69e058f0c->enter($__internal_8dc2b5aac3fcab7486c872fa44dbc34e71d44a2cbda6cf3960cb8fb69e058f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]><html class=\"ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang=\"en\"> <!--<![endif]-->
<!-- begin head -->
";
        // line 6
        echo twig_include($this->env, $context, "css/head.html.twig");
        echo "
\t<!-- End head -->
<body>



<div id=\"wrap\" class=\"grid_1200\">
\t<div class=\"wrap-search\">
\t\t
\t</div><!-- End wrap-search -->
\t<!-- begin header -->
\t";
        // line 17
        echo twig_include($this->env, $context, "css/header.html.twig");
        echo "
\t<!-- End header -->
\t
\t<div class=\"clearfix\"></div>
\t<div class=\"sections\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t";
        // line 24
        $this->displayBlock('mainblock', $context, $blocks);
        // line 27
        echo "\t\t\t\t
\t\t\t\t<div class=\"col-md-4 sidebar\">
\t\t\t\t<!-- begin widget authors  -->
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:View:show"));
        echo "
\t\t\t\t\t<!-- End widget authors  -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CategoryBundle:View:show"));
        echo "
\t\t\t\t</div><!-- End sidebar -->
\t\t\t</div><!-- End row -->
\t\t</div><!-- End container -->
\t</div><!-- End sections -->
\t
\t<div class=\"clearfix\"></div>
\t<!-- begin footer -->
\t";
        // line 42
        echo twig_include($this->env, $context, "css/footer.html.twig");
        echo "
\t<!-- End footer -->
\t
</div><!-- End wrap -->

<div class=\"go-up\"><i class=\"fa fa-chevron-up\"></i></div>

<!-- js -->
";
        // line 50
        echo twig_include($this->env, $context, "css/scripts.html.twig");
        echo "
<!-- End js -->

</body>
</html>
";
        
        $__internal_8dc2b5aac3fcab7486c872fa44dbc34e71d44a2cbda6cf3960cb8fb69e058f0c->leave($__internal_8dc2b5aac3fcab7486c872fa44dbc34e71d44a2cbda6cf3960cb8fb69e058f0c_prof);

    }

    // line 24
    public function block_mainblock($context, array $blocks = array())
    {
        $__internal_7f5f970a90e48d6f938163d9999cc7aa7b7c0ab91802f41b123a578555ae1b94 = $this->env->getExtension("native_profiler");
        $__internal_7f5f970a90e48d6f938163d9999cc7aa7b7c0ab91802f41b123a578555ae1b94->enter($__internal_7f5f970a90e48d6f938163d9999cc7aa7b7c0ab91802f41b123a578555ae1b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainblock"));

        // line 25
        echo "\t\t\t
\t\t\t";
        
        $__internal_7f5f970a90e48d6f938163d9999cc7aa7b7c0ab91802f41b123a578555ae1b94->leave($__internal_7f5f970a90e48d6f938163d9999cc7aa7b7c0ab91802f41b123a578555ae1b94_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  103 => 24,  90 => 50,  79 => 42,  68 => 34,  61 => 30,  56 => 27,  54 => 24,  44 => 17,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->*/
/* <!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->*/
/* <!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->*/
/* <!-- begin head -->*/
/* {{ include('css/head.html.twig') }}*/
/* 	<!-- End head -->*/
/* <body>*/
/* */
/* */
/* */
/* <div id="wrap" class="grid_1200">*/
/* 	<div class="wrap-search">*/
/* 		*/
/* 	</div><!-- End wrap-search -->*/
/* 	<!-- begin header -->*/
/* 	{{ include('css/header.html.twig') }}*/
/* 	<!-- End header -->*/
/* 	*/
/* 	<div class="clearfix"></div>*/
/* 	<div class="sections">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 			{% block mainblock %}*/
/* 			*/
/* 			{% endblock %}*/
/* 				*/
/* 				<div class="col-md-4 sidebar">*/
/* 				<!-- begin widget authors  -->*/
/* 				{{ render(controller('UserBundle:View:show')) }}*/
/* 					<!-- End widget authors  -->*/
/* 					*/
/* 					*/
/* 					{{ render(controller('CategoryBundle:View:show')) }}*/
/* 				</div><!-- End sidebar -->*/
/* 			</div><!-- End row -->*/
/* 		</div><!-- End container -->*/
/* 	</div><!-- End sections -->*/
/* 	*/
/* 	<div class="clearfix"></div>*/
/* 	<!-- begin footer -->*/
/* 	{{ include('css/footer.html.twig') }}*/
/* 	<!-- End footer -->*/
/* 	*/
/* </div><!-- End wrap -->*/
/* */
/* <div class="go-up"><i class="fa fa-chevron-up"></i></div>*/
/* */
/* <!-- js -->*/
/* {{ include('css/scripts.html.twig') }}*/
/* <!-- End js -->*/
/* */
/* </body>*/
/* </html>*/
/* */
