<?php

/* styleadmin.html.twig */
class __TwigTemplate_c8df6e3642357a0f97b71a69a8da6b01752c7d28e6cbc32e9dd60c242f2a2011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainblock' => array($this, 'block_mainblock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4100d8140bff14702cd215a82813e340167c83cec00e178b5f4b461b8e9622e3 = $this->env->getExtension("native_profiler");
        $__internal_4100d8140bff14702cd215a82813e340167c83cec00e178b5f4b461b8e9622e3->enter($__internal_4100d8140bff14702cd215a82813e340167c83cec00e178b5f4b461b8e9622e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "styleadmin.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "
\t\t<meta name=\"description\" content=\"Static &amp; Dynamic Tables\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

\t\t<!-- basic styles -->
";
        // line 12
        echo twig_include($this->env, $context, "admin/script.html.twig");
        echo "
";
        // line 13
        echo twig_include($this->env, $context, "admin/style.html.twig");
        echo "\t\t
 <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>     
 
        <style>
\t\tinput[type=\"range\"] {
\t-webkit-appearance: none;
\tbackground-color: black;
\theight: 2px;
}

input[type=\"range\"]::-webkit-slider-thumb {
\t-webkit-appearance: none;
\tposition: relative;
\ttop: -1px;
\tz-index: 1;
\twidth: 11px;
\theight: 11px;

\t-webkit-border-radius: 40px;
\t-moz-border-radius: 40px;
\tborder-radius: 40px;
\tbackground-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ebf1f6), color-stop(50%,#abd3ee), color-stop(51%,#89c3eb), color-stop(100%,#d5ebfb));
}

input[type=\"range\"]:hover ~ #rangevalue,input[type=\"range\"]:active ~ #rangevalue {
\t-ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
\tfilter: alpha(opacity=100);
\topacity: 1;
\ttop: -70px;
}

/* Tool Tip */
#rangevalue {
\tdisplay: block;
\tcolor: #fff;
\tmargin: 20px 0;
\tposition: relative;
\tleft: 44.5%;
\tpadding: 6px 12px;
\tborder: 1px solid black;

\t-webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
\t-moz-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
\tbox-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#222931), color-stop(100%,#181D21));

\t-webkit-border-radius: 20px;
\t-moz-border-radius: 20px;
\tborder-radius: 20px;
\twidth: 18px;
\t-ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
\tfilter: alpha(opacity=0);
\topacity: 0;

\t-webkit-transition: all 0.5s ease;
\t-moz-transition: all 0.5s ease;
\t-o-transition: all 0.5s ease;
\t-ms-transition: all 0.5s ease;
\ttransition: all 0.5s ease;
\ttop: -65px;
}
\t\t</style>
        
       
       
\t</head>

\t<body>
\t\t<div class=\"navbar navbar-default\" id=\"navbar\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('navbar' , 'fixed')}catch(e){}
\t\t\t</script>
";
        // line 86
        echo twig_include($this->env, $context, "admin/header.html.twig");
        echo "
\t\t</div>

\t\t<div class=\"main-container\" id=\"main-container\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('main-container' , 'fixed')}catch(e){}
\t\t\t</script>

\t\t\t<div class=\"main-container-inner\">
\t\t\t\t<a class=\"menu-toggler\" id=\"menu-toggler\" href=\"#\">
\t\t\t\t\t<span class=\"menu-text\"></span>
\t\t\t\t</a>

\t\t\t\t<div class=\"sidebar\" id=\"sidebar\">
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\ttry{ace.settings.check('sidebar' , 'fixed')}catch(e){}
\t\t\t\t\t</script>

\t\t\t\t\t<!-- #sidebar-shortcuts -->
";
        // line 105
        echo twig_include($this->env, $context, "admin/menu.html.twig");
        echo "

\t\t\t\t  <div class=\"sidebar-collapse\" id=\"sidebar-collapse\">
\t\t\t\t\t\t<i class=\"icon-double-angle-left\" data-icon1=\"icon-double-angle-left\" data-icon2=\"icon-double-angle-right\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\ttry{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
\t\t\t\t\t</script>
\t\t\t\t</div>
";
        // line 115
        $this->displayBlock('mainblock', $context, $blocks);
        // line 120
        echo "\t\t\t\t<!-- PAGE CONTENT ENDS -->
\t\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t  </div><!-- /.main-content -->

\t\t\t\t
\t\t\t\t<!-- /#ace-settings-container -->
\t\t  </div><!-- /.main-container-inner -->

\t\t\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
\t\t\t\t<i class=\"icon-double-angle-up icon-only bigger-110\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->
\t\t
\t

                                            
                                           
                                           
\t\t\t\t\t\t\t\t\t\t\t
                                            
                                            

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
        

\t\t

\t\t<!-- inline scripts related to this page -->
        

\t\t<script type=\"text/javascript\">
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
\t\t<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/typeahead-bs2.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- page specific plugin scripts -->

\t\t<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- ace scripts -->
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
\t\t

\t\t<!-- inline scripts related to this page -->

\t\t<script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\tvar oTable1 = \$('#sample-table-2').dataTable( {
\t\t\t\t\"aoColumns\": [
\t\t\t      { \"bSortable\": false },
\t\t\t      null, null,null, null, null,
\t\t\t\t  { \"bSortable\": false }
\t\t\t\t] } );
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('table th input:checkbox').on('click' , function(){
\t\t\t\t\tvar that = this;
\t\t\t\t\t\$(this).closest('table').find('tr > td:first-child input:checkbox')
\t\t\t\t\t.each(function(){
\t\t\t\t\t\tthis.checked = that.checked;
\t\t\t\t\t\t\$(this).closest('tr').toggleClass('selected');
\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\$('[data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
\t\t\t\tfunction tooltip_placement(context, source) {
\t\t\t\t\tvar \$source = \$(source);
\t\t\t\t\tvar \$parent = \$source.closest('table')
\t\t\t\t\tvar off1 = \$parent.offset();
\t\t\t\t\tvar w1 = \$parent.width();
\t\t\t
\t\t\t\t\tvar off2 = \$source.offset();
\t\t\t\t\tvar w2 = \$source.width();
\t\t\t
\t\t\t\t\tif( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
\t\t\t\t\treturn 'left';
\t\t\t\t}
\t\t\t})
\t\t</script>
        
         
\t</body>
</html>

\t\t\t\t
\t
\t
";
        
        $__internal_4100d8140bff14702cd215a82813e340167c83cec00e178b5f4b461b8e9622e3->leave($__internal_4100d8140bff14702cd215a82813e340167c83cec00e178b5f4b461b8e9622e3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2653d12df9a3d3a28d52addae22e594ab6e1f9df7bd4ef41ad1e4c3d70b741ac = $this->env->getExtension("native_profiler");
        $__internal_2653d12df9a3d3a28d52addae22e594ab6e1f9df7bd4ef41ad1e4c3d70b741ac->enter($__internal_2653d12df9a3d3a28d52addae22e594ab6e1f9df7bd4ef41ad1e4c3d70b741ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2653d12df9a3d3a28d52addae22e594ab6e1f9df7bd4ef41ad1e4c3d70b741ac->leave($__internal_2653d12df9a3d3a28d52addae22e594ab6e1f9df7bd4ef41ad1e4c3d70b741ac_prof);

    }

    // line 115
    public function block_mainblock($context, array $blocks = array())
    {
        $__internal_86d697fd1b99df77195e51c6560048677d00e501c47111198eca5ea8872117f2 = $this->env->getExtension("native_profiler");
        $__internal_86d697fd1b99df77195e51c6560048677d00e501c47111198eca5ea8872117f2->enter($__internal_86d697fd1b99df77195e51c6560048677d00e501c47111198eca5ea8872117f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainblock"));

        // line 116
        echo "\t\t\t\t


";
        
        $__internal_86d697fd1b99df77195e51c6560048677d00e501c47111198eca5ea8872117f2->leave($__internal_86d697fd1b99df77195e51c6560048677d00e501c47111198eca5ea8872117f2_prof);

    }

    public function getTemplateName()
    {
        return "styleadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 116,  318 => 115,  307 => 6,  250 => 190,  246 => 189,  240 => 186,  236 => 185,  229 => 181,  225 => 180,  163 => 120,  161 => 115,  148 => 105,  126 => 86,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  33 => 7,  31 => 6,  24 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/* 		<meta charset="utf-8" />*/
/* 		{% block title %}{% endblock %}*/
/* */
/* 		<meta name="description" content="Static &amp; Dynamic Tables" />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/* */
/* 		<!-- basic styles -->*/
/* {{ include('admin/script.html.twig') }}*/
/* {{ include('admin/style.html.twig') }}		*/
/*  <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>     */
/*  */
/*         <style>*/
/* 		input[type="range"] {*/
/* 	-webkit-appearance: none;*/
/* 	background-color: black;*/
/* 	height: 2px;*/
/* }*/
/* */
/* input[type="range"]::-webkit-slider-thumb {*/
/* 	-webkit-appearance: none;*/
/* 	position: relative;*/
/* 	top: -1px;*/
/* 	z-index: 1;*/
/* 	width: 11px;*/
/* 	height: 11px;*/
/* */
/* 	-webkit-border-radius: 40px;*/
/* 	-moz-border-radius: 40px;*/
/* 	border-radius: 40px;*/
/* 	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ebf1f6), color-stop(50%,#abd3ee), color-stop(51%,#89c3eb), color-stop(100%,#d5ebfb));*/
/* }*/
/* */
/* input[type="range"]:hover ~ #rangevalue,input[type="range"]:active ~ #rangevalue {*/
/* 	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";*/
/* 	filter: alpha(opacity=100);*/
/* 	opacity: 1;*/
/* 	top: -70px;*/
/* }*/
/* */
/* /* Tool Tip *//* */
/* #rangevalue {*/
/* 	display: block;*/
/* 	color: #fff;*/
/* 	margin: 20px 0;*/
/* 	position: relative;*/
/* 	left: 44.5%;*/
/* 	padding: 6px 12px;*/
/* 	border: 1px solid black;*/
/* */
/* 	-webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);*/
/* 	-moz-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);*/
/* 	box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);*/
/* 	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#222931), color-stop(100%,#181D21));*/
/* */
/* 	-webkit-border-radius: 20px;*/
/* 	-moz-border-radius: 20px;*/
/* 	border-radius: 20px;*/
/* 	width: 18px;*/
/* 	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";*/
/* 	filter: alpha(opacity=0);*/
/* 	opacity: 0;*/
/* */
/* 	-webkit-transition: all 0.5s ease;*/
/* 	-moz-transition: all 0.5s ease;*/
/* 	-o-transition: all 0.5s ease;*/
/* 	-ms-transition: all 0.5s ease;*/
/* 	transition: all 0.5s ease;*/
/* 	top: -65px;*/
/* }*/
/* 		</style>*/
/*         */
/*        */
/*        */
/* 	</head>*/
/* */
/* 	<body>*/
/* 		<div class="navbar navbar-default" id="navbar">*/
/* 			<script type="text/javascript">*/
/* 				try{ace.settings.check('navbar' , 'fixed')}catch(e){}*/
/* 			</script>*/
/* {{ include('admin/header.html.twig') }}*/
/* 		</div>*/
/* */
/* 		<div class="main-container" id="main-container">*/
/* 			<script type="text/javascript">*/
/* 				try{ace.settings.check('main-container' , 'fixed')}catch(e){}*/
/* 			</script>*/
/* */
/* 			<div class="main-container-inner">*/
/* 				<a class="menu-toggler" id="menu-toggler" href="#">*/
/* 					<span class="menu-text"></span>*/
/* 				</a>*/
/* */
/* 				<div class="sidebar" id="sidebar">*/
/* 					<script type="text/javascript">*/
/* 						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}*/
/* 					</script>*/
/* */
/* 					<!-- #sidebar-shortcuts -->*/
/* {{ include('admin/menu.html.twig') }}*/
/* */
/* 				  <div class="sidebar-collapse" id="sidebar-collapse">*/
/* 						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>*/
/* 					</div>*/
/* */
/* 					<script type="text/javascript">*/
/* 						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}*/
/* 					</script>*/
/* 				</div>*/
/* {% block mainblock %}*/
/* 				*/
/* */
/* */
/* {% endblock %}*/
/* 				<!-- PAGE CONTENT ENDS -->*/
/* 							</div><!-- /.col -->*/
/* 							<!-- /.col -->*/
/* 							<!-- /.col -->*/
/* 							<!-- /.col -->*/
/* 							<!-- /.col -->*/
/* 							<!-- /.col -->*/
/* 							<!-- /.col -->*/
/* 							<!-- /.col -->*/
/* 							*/
/* 							*/
/* 							*/
/* 							*/
/* 						</div><!-- /.row -->*/
/* 					</div><!-- /.page-content -->*/
/* 			  </div><!-- /.main-content -->*/
/* */
/* 				*/
/* 				<!-- /#ace-settings-container -->*/
/* 		  </div><!-- /.main-container-inner -->*/
/* */
/* 			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">*/
/* 				<i class="icon-double-angle-up icon-only bigger-110"></i>*/
/* 			</a>*/
/* 		</div><!-- /.main-container -->*/
/* 		*/
/* 	*/
/* */
/*                                             */
/*                                            */
/*                                            */
/* 											*/
/*                                             */
/*                                             */
/* */
/* 		<!-- basic scripts -->*/
/* */
/* 		<!--[if !IE]> -->*/
/*         */
/* */
/* 		*/
/* */
/* 		<!-- inline scripts related to this page -->*/
/*         */
/* */
/* 		<script type="text/javascript">*/
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
/* 		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* 		<script src="{{ asset('assets/js/typeahead-bs2.min.js') }}"></script>*/
/* */
/* 		<!-- page specific plugin scripts -->*/
/* */
/* 		<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>*/
/* 		<script src="{{ asset('assets/js/jquery.dataTables.bootstrap.js') }}"></script>*/
/* */
/* 		<!-- ace scripts -->*/
/* <script src="{{asset('assets/js/ace-elements.min.js') }}"></script>*/
/* 		<script src="{{ asset('assets/js/ace.min.js') }}"></script>*/
/* 		*/
/* */
/* 		<!-- inline scripts related to this page -->*/
/* */
/* 		<script type="text/javascript">*/
/* 			jQuery(function($) {*/
/* 				var oTable1 = $('#sample-table-2').dataTable( {*/
/* 				"aoColumns": [*/
/* 			      { "bSortable": false },*/
/* 			      null, null,null, null, null,*/
/* 				  { "bSortable": false }*/
/* 				] } );*/
/* 				*/
/* 				*/
/* 				$('table th input:checkbox').on('click' , function(){*/
/* 					var that = this;*/
/* 					$(this).closest('table').find('tr > td:first-child input:checkbox')*/
/* 					.each(function(){*/
/* 						this.checked = that.checked;*/
/* 						$(this).closest('tr').toggleClass('selected');*/
/* 					});*/
/* 						*/
/* 				});*/
/* 			*/
/* 			*/
/* 				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});*/
/* 				function tooltip_placement(context, source) {*/
/* 					var $source = $(source);*/
/* 					var $parent = $source.closest('table')*/
/* 					var off1 = $parent.offset();*/
/* 					var w1 = $parent.width();*/
/* 			*/
/* 					var off2 = $source.offset();*/
/* 					var w2 = $source.width();*/
/* 			*/
/* 					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';*/
/* 					return 'left';*/
/* 				}*/
/* 			})*/
/* 		</script>*/
/*         */
/*          */
/* 	</body>*/
/* </html>*/
/* */
/* 				*/
/* 	*/
/* 	*/
/* */
