<?php

/* base.html.twig */
class __TwigTemplate_16a0e879a0499e5e3085678eadca05f73072f010a98b2780758a9362c313fc90 extends Twig_Template
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
    }

    // line 24
    public function block_mainblock($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t
\t\t\t";
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
        return array (  100 => 25,  97 => 24,  87 => 50,  76 => 42,  65 => 34,  58 => 30,  53 => 27,  51 => 24,  41 => 17,  27 => 6,  20 => 1,);
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
