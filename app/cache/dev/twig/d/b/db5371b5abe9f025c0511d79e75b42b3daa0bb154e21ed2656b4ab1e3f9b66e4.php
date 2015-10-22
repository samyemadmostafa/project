<?php

/* UserBundle:Admin:actionadminusers.html.twig */
class __TwigTemplate_738ce2282c2ab4eb2f4d83a16c3374c38ab65ffb6a8780fc9be82d665e3926a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("styleadmin.html.twig", "UserBundle:Admin:actionadminusers.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainblock' => array($this, 'block_mainblock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "styleadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4dfacb07b6b337930782222f77e72d172cf2676919b9c3698b9b84f3e6d570d = $this->env->getExtension("native_profiler");
        $__internal_f4dfacb07b6b337930782222f77e72d172cf2676919b9c3698b9b84f3e6d570d->enter($__internal_f4dfacb07b6b337930782222f77e72d172cf2676919b9c3698b9b84f3e6d570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Admin:actionadminusers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4dfacb07b6b337930782222f77e72d172cf2676919b9c3698b9b84f3e6d570d->leave($__internal_f4dfacb07b6b337930782222f77e72d172cf2676919b9c3698b9b84f3e6d570d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54e8d04792a2e01671420312618f609d271a614b0530f36709ace35034cc78cd = $this->env->getExtension("native_profiler");
        $__internal_54e8d04792a2e01671420312618f609d271a614b0530f36709ace35034cc78cd->enter($__internal_54e8d04792a2e01671420312618f609d271a614b0530f36709ace35034cc78cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "

<title>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("edit user", array(), "user");
        echo "</title>

";
        
        $__internal_54e8d04792a2e01671420312618f609d271a614b0530f36709ace35034cc78cd->leave($__internal_54e8d04792a2e01671420312618f609d271a614b0530f36709ace35034cc78cd_prof);

    }

    // line 9
    public function block_mainblock($context, array $blocks = array())
    {
        $__internal_ca479fd5d127a7148a4eb4abcef9f48f2e70250579fd8725ab54ecb1e33f4a65 = $this->env->getExtension("native_profiler");
        $__internal_ca479fd5d127a7148a4eb4abcef9f48f2e70250579fd8725ab54ecb1e33f4a65->enter($__internal_ca479fd5d127a7148a4eb4abcef9f48f2e70250579fd8725ab54ecb1e33f4a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainblock"));

        // line 10
        echo "<style>
.textsize
{
width:400px;
}
</style>
<div class=\"main-content\">
\t\t\t\t  <div class=\"breadcrumbs\" id=\"breadcrumbs\">
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\ttry{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
\t\t\t\t\t\t</script>\t\t\t
<center><b>";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("user", array(), "user");
        echo "</b></center>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-content\"><!-- /.page-header -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t  <div class=\"col-sm-6\" style=\"width:800px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tabbable\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs padding-12 tab-color-blue background-blue\" id=\"myTab4\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#\">";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("user", array(), "user");
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
         <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div id=\"#\" class=\"tab-pane in active\">
";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                                    
                                    
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<h3>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</h3>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("name", array(), "public");
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<h3>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "</h3>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "password", array())));
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'label');
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "password", array())));
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<h3>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</h3>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("email", array(), "public");
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<h3>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "</h3>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("image", array(), "public");
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<h3>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebook", array()), 'errors');
        echo "</h3>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 101
        echo $this->env->getExtension('translator')->getTranslator()->trans("facebook", array(), "public");
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebook", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<h3>";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "twitter", array()), 'errors');
        echo "</h3>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 112
        echo $this->env->getExtension('translator')->getTranslator()->trans("twitter", array(), "public");
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "twitter", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<br/>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 123
        echo $this->env->getExtension('translator')->getTranslator()->trans("google_plus", array(), "public");
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "google_plus", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
<br/>
\t\t\t\t\t\t\t\t\t<br/>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<h3>";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "linkedin", array()), 'errors');
        echo "</h3>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 134
        echo $this->env->getExtension('translator')->getTranslator()->trans("linkedin", array(), "public");
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "linkedin", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t\t\t<h3>";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "youtube", array()), 'errors');
        echo "</h3>
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
        // line 145
        echo $this->env->getExtension('translator')->getTranslator()->trans("youtube", array(), "public");
        echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "youtube", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"clearfix form-actions\" style=\"margin-top:100px;position:relative;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-offset-3 col-md-9\">

\t\t\t\t\t\t\t\t\t\t
";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "edit user"));
        echo "
\t\t\t\t\t\t\t\t\t
                                            
                                            

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>        
                                               ";
        // line 167
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t</div>\t\t\t\t\t\t\t\t\t\t
\t<br/>
\t<br/>
\t<br/>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 174
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "success"), "method")) {
            // line 175
            echo "<button class=\"btn btn-success\" style=\"left:400px;bottom:20px;width:300px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"), 0, array()), "html", null, true);
            echo "</button>\t\t\t\t\t\t\t\t\t\t\t
<script>
setTimeout(function(){
  window.location = Routing.generate('adminuser',{_locale : \"";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
            echo "\"});
}, 2000);
</script>
";
        }
        // line 181
        echo " 
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
        
        $__internal_ca479fd5d127a7148a4eb4abcef9f48f2e70250579fd8725ab54ecb1e33f4a65->leave($__internal_ca479fd5d127a7148a4eb4abcef9f48f2e70250579fd8725ab54ecb1e33f4a65_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Admin:actionadminusers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 181,  335 => 178,  328 => 175,  326 => 174,  316 => 167,  305 => 159,  292 => 149,  285 => 145,  281 => 144,  272 => 138,  265 => 134,  261 => 133,  252 => 127,  245 => 123,  235 => 116,  228 => 112,  224 => 111,  215 => 105,  208 => 101,  204 => 100,  195 => 94,  188 => 90,  184 => 89,  175 => 83,  168 => 79,  164 => 78,  155 => 72,  148 => 68,  138 => 61,  131 => 57,  127 => 56,  118 => 50,  111 => 46,  107 => 45,  96 => 37,  88 => 32,  74 => 21,  61 => 10,  55 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'styleadmin.html.twig' %}*/
/* {% block title %}*/
/* */
/* */
/* <title>{% trans from "user" %} edit user {% endtrans %}</title>*/
/* */
/* {% endblock %}*/
/* {% block mainblock %}*/
/* <style>*/
/* .textsize*/
/* {*/
/* width:400px;*/
/* }*/
/* </style>*/
/* <div class="main-content">*/
/* 				  <div class="breadcrumbs" id="breadcrumbs">*/
/* 						<script type="text/javascript">*/
/* 							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}*/
/* 						</script>			*/
/* <center><b>{% trans from "user" %} user {% endtrans %}</b></center>						*/
/* 					</div>*/
/* 					<div class="page-content"><!-- /.page-header -->*/
/* 						<div class="row">*/
/* 							<div class="col-xs-12">*/
/* 								<div class="row">*/
/* 								  <div class="col-xs-12">*/
/* 								  <div class="col-sm-6" style="width:800px;">*/
/* 										<div class="tabbable">*/
/* 											<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">*/
/* 												<li class="active">*/
/* 													<a data-toggle="tab" href="#">{% trans from "user" %} user {% endtrans %}</a>*/
/* 												</li>*/
/* 											</ul>*/
/*          <div class="tab-content">*/
/* 										<div id="#" class="tab-pane in active">*/
/* {{form_start(form) }}*/
/* */
/*                                     */
/*                                     */
/* 									<br/>*/
/* 									<br/>*/
/* 									*/
/*                                     <div class="form-group"  >*/
/* 									<h3>{{ form_errors(form.username) }}</h3>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} name {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.username) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group"  >*/
/* 									<h3>{{ form_errors(form.password.first) }}</h3>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{{ form_label(form.password.first)}}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.password.first,{'value' :  form.vars.value.password }) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group"  >*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{{ form_label(form.password.second)}}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.password.second,{'value' :  form.vars.value.password }) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group"  >*/
/* 									<h3>{{ form_errors(form.email) }}</h3>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} email {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.email) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group"  >*/
/* 									<h3>{{ form_errors(form.image) }}</h3>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} image {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.image) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group"  >*/
/* 									<h3>{{ form_errors(form.facebook) }}</h3>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} facebook {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.facebook) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group"  >*/
/* 									<h3>{{ form_errors(form.twitter) }}</h3>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} twitter {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.twitter) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group"  >*/
/* 									<br/>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} google_plus {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.google_plus) }}*/
/* 										</div>*/
/* 									</div>*/
/* <br/>*/
/* 									<br/>									*/
/* 									<div class="form-group"  >*/
/* 									<h3>{{ form_errors(form.linkedin) }}</h3>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} linkedin {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.linkedin) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group"  >*/
/* 									<h3>{{ form_errors(form.youtube) }}</h3>*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} youtube {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.youtube) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									*/
/*                                     <div class="clearfix form-actions" style="margin-top:100px;position:relative;">*/
/* 										<div class="col-md-offset-3 col-md-9">*/
/* */
/* 										*/
/* {{ form_widget(form.save,{ 'label': 'edit user' }) }}*/
/* 									*/
/*                                             */
/*                                             */
/* */
/* 											*/
/* 										</div>*/
/* 									</div>        */
/*                                                {{ form_end(form) }}*/
/* 												</div>*/
/* 												</div>*/
/* 	</div>										*/
/* 	<br/>*/
/* 	<br/>*/
/* 	<br/>*/
/* 											{% if app.session.flashbag.has('success')  %}*/
/* <button class="btn btn-success" style="left:400px;bottom:20px;width:300px;">{{ app.session.flashbag.get('success').0 }}</button>											*/
/* <script>*/
/* setTimeout(function(){*/
/*   window.location = Routing.generate('adminuser',{_locale : "{{ app.request.locale }}"});*/
/* }, 2000);*/
/* </script>*/
/* {% endif %} */
/* 										*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  {% endblock %}*/
/* 							  */
