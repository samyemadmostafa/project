<?php

/* UserBundle:Admin:login.html.twig */
class __TwigTemplate_dd9164bf459978359f971274204647a626772e9af754157412f38adb62a2ab57 extends Twig_Template
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
        $__internal_be39580c3866480027e90231e7fbf34cba235e3a68cd6f77c1b17750d761b7bf = $this->env->getExtension("native_profiler");
        $__internal_be39580c3866480027e90231e7fbf34cba235e3a68cd6f77c1b17750d761b7bf->enter($__internal_be39580c3866480027e90231e7fbf34cba235e3a68cd6f77c1b17750d761b7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Admin:login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<title>Blog Admin </title>
 <script src=\"assets/js/jquery.js\"></script>
\t\t<meta name=\"description\" content=\"User login page\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

\t\t";
        // line 11
        echo twig_include($this->env, $context, "admin/style.html.twig");
        echo "

\t\t
\t</head>

\t
\t
\t<body class=\"login-layout\">
\t\t<div class=\"main-container\">
\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-1\">
\t\t\t\t\t\t<div class=\"login-container\">
\t\t\t\t\t\t\t<div class=\"center\">
\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<i class=\"icon-leaf green\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"red\"> login page  </span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"space-6\"></div>

\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t<div class=\"space-6\"></div>

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<div id=\"login-box\" class=\"login-box visible widget-box no-border\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
                                    
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"header blue lighter bigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-coffee green\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t Please Enter Your Information
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t<button type=\"submit\" class=\"width-35 pull-right btn btn-sm btn-primary\">
\t\t<i class=\"icon-key\"></i>
\t\tlogin</button>
\t\t";
        // line 73
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 74
            echo "    <div> username and password doesnt match </div>
";
        }
        // line 76
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-4\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!-- /widget-main -->

\t\t\t\t\t\t\t\t\t\t<div class=\"toolbar clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t<span class=\"forgot-password-link\"> &nbsp;</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- /widget-body -->
\t\t\t\t\t\t\t\t</div><!-- /login-box -->

\t\t\t\t\t\t\t\t<!-- /forgot-box -->

\t\t\t\t\t\t\t\t<!-- /signup-box -->
\t\t\t\t\t\t\t</div><!-- /position-relative -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t</div><!-- /.row -->
\t\t\t</div>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->

\t\t
\t</body>
\t
\t
 
    
    <script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='assets/js/jquery-2.0.3.min.js'>\"+\"<\"+\"/script>\");
\t\t</script>

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script type=\"text/javascript\">
 window.jQuery || document.write(\"<script src='assets/js/jquery-1.10.2.min.js'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->

\t\t<script type=\"text/javascript\">
\t\t\tif(\"ontouchend\" in document) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
\t\t</script>

\t\t<!-- inline scripts related to this page -->

\t\t<script type=\"text/javascript\">
\t\t\tfunction show_box(id) {
\t\t\t jQuery('.widget-box.visible').removeClass('visible');
\t\t\t jQuery('#'+id).addClass('visible');
\t\t\t}
\t\t</script>
</html>

\t\t\t\t
\t
\t
";
        
        $__internal_be39580c3866480027e90231e7fbf34cba235e3a68cd6f77c1b17750d761b7bf->leave($__internal_be39580c3866480027e90231e7fbf34cba235e3a68cd6f77c1b17750d761b7bf_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 76,  107 => 74,  105 => 73,  82 => 53,  64 => 38,  34 => 11,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/* 		<meta charset="utf-8" />*/
/* 		<title>Blog Admin </title>*/
/*  <script src="assets/js/jquery.js"></script>*/
/* 		<meta name="description" content="User login page" />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/* */
/* 		{{ include('admin/style.html.twig') }}*/
/* */
/* 		*/
/* 	</head>*/
/* */
/* 	*/
/* 	*/
/* 	<body class="login-layout">*/
/* 		<div class="main-container">*/
/* 			<div class="main-content">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-10 col-sm-offset-1">*/
/* 						<div class="login-container">*/
/* 							<div class="center">*/
/* 								<h1>*/
/* 									<i class="icon-leaf green"></i>*/
/* 									<span class="red"> login page  </span>*/
/* 								</h1>*/
/* 								*/
/* 							</div>*/
/* */
/* 							<div class="space-6"></div>*/
/* */
/* 							<div class="position-relative">*/
/* 							<div class="space-6"></div>*/
/* */
/* 											*/
/* 							<form action="{{ path('login_check') }}" method="post">*/
/* 								<div id="login-box" class="login-box visible widget-box no-border">*/
/* 									<div class="widget-body">*/
/*                                     */
/* 										<div class="widget-main">*/
/* 											<h4 class="header blue lighter bigger">*/
/* 												<i class="icon-coffee green"></i>*/
/* 												 Please Enter Your Information*/
/* 												*/
/* 											</h4>*/
/* */
/* 											*/
/* 												<fieldset>*/
/* 													<label class="block clearfix">*/
/* 														<span class="block input-icon input-icon-right">*/
/* 		<input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* 															<i class="icon-user"></i>*/
/* 														</span>*/
/* 													</label>*/
/* */
/* 													<label class="block clearfix">*/
/* 														<span class="block input-icon input-icon-right">*/
/* 			<input type="password" id="password" name="_password" />*/
/* 															<i class="icon-lock"></i>*/
/* 														</span>*/
/* 													</label>*/
/* */
/* 													<div class="space"></div>*/
/* */
/* 													<div class="clearfix">*/
/* 														*/
/* */
/* 		<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">*/
/* 		<i class="icon-key"></i>*/
/* 		login</button>*/
/* 		{% if error %}*/
/*     <div> username and password doesnt match </div>*/
/* {% endif %}*/
/* 															*/
/* 													</div>*/
/* */
/* 													<div class="space-4"></div>*/
/* 												</fieldset>*/
/* 											*/
/* 											*/
/* 										</div><!-- /widget-main -->*/
/* */
/* 										<div class="toolbar clearfix">*/
/* 											<div >*/
/* 												*/
/* 													*/
/* 			<span class="forgot-password-link"> &nbsp;</span>*/
/* 												*/
/* 											</div>*/
/* */
/* 											<div>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div><!-- /widget-body -->*/
/* 								</div><!-- /login-box -->*/
/* */
/* 								<!-- /forgot-box -->*/
/* */
/* 								<!-- /signup-box -->*/
/* 							</div><!-- /position-relative -->*/
/* 						</div>*/
/* 					</div><!-- /.col -->*/
/* 				</div><!-- /.row -->*/
/* 			</div>*/
/* 		</div><!-- /.main-container -->*/
/* */
/* 		<!-- basic scripts -->*/
/* */
/* 		<!--[if !IE]> -->*/
/* */
/* 		*/
/* 	</body>*/
/* 	*/
/* 	*/
/*  */
/*     */
/*     <script type="text/javascript">*/
/* 			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");*/
/* 		</script>*/
/* */
/* 		<!-- <![endif]-->*/
/* */
/* 		<!--[if IE]>*/
/* <script type="text/javascript">*/
/*  window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");*/
/* </script>*/
/* <![endif]-->*/
/* */
/* 		<script type="text/javascript">*/
/* 			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");*/
/* 		</script>*/
/* */
/* 		<!-- inline scripts related to this page -->*/
/* */
/* 		<script type="text/javascript">*/
/* 			function show_box(id) {*/
/* 			 jQuery('.widget-box.visible').removeClass('visible');*/
/* 			 jQuery('#'+id).addClass('visible');*/
/* 			}*/
/* 		</script>*/
/* </html>*/
/* */
/* 				*/
/* 	*/
/* 	*/
/* */
