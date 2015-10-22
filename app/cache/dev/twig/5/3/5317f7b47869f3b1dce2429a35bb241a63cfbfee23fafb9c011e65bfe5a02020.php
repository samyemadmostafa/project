<?php

/* ArticleBundle:Admin:actionadminarticle.html.twig */
class __TwigTemplate_6914276fa9e5e3ada1cd53b5ccf7b71dc96f959a57b9873dd4e487cbc3614514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("styleadmin.html.twig", "ArticleBundle:Admin:actionadminarticle.html.twig", 2);
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
        $__internal_17cbaec1ba0a4390652e0227483561bb61c48aea14226f1ab39700ee0779c415 = $this->env->getExtension("native_profiler");
        $__internal_17cbaec1ba0a4390652e0227483561bb61c48aea14226f1ab39700ee0779c415->enter($__internal_17cbaec1ba0a4390652e0227483561bb61c48aea14226f1ab39700ee0779c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Admin:actionadminarticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17cbaec1ba0a4390652e0227483561bb61c48aea14226f1ab39700ee0779c415->leave($__internal_17cbaec1ba0a4390652e0227483561bb61c48aea14226f1ab39700ee0779c415_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34e12925ab7cc643ea654d9332bb3a140699a79d5c897a40f7472a739534614f = $this->env->getExtension("native_profiler");
        $__internal_34e12925ab7cc643ea654d9332bb3a140699a79d5c897a40f7472a739534614f->enter($__internal_34e12925ab7cc643ea654d9332bb3a140699a79d5c897a40f7472a739534614f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            // line 5
            echo "<title>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("add article", array(), "article");
            echo "</title>
";
        }
        // line 7
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "edit")) {
            // line 8
            echo "<title>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("edit article", array(), "article");
            echo "</title>
";
        }
        // line 10
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "del")) {
            // line 11
            echo "<title>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("delete article", array(), "article");
            echo "</title>
";
        }
        
        $__internal_34e12925ab7cc643ea654d9332bb3a140699a79d5c897a40f7472a739534614f->leave($__internal_34e12925ab7cc643ea654d9332bb3a140699a79d5c897a40f7472a739534614f_prof);

    }

    // line 14
    public function block_mainblock($context, array $blocks = array())
    {
        $__internal_578a075edd011635717b55bc23c9313897fda5ad1e81db3467e73c88f1b8ca29 = $this->env->getExtension("native_profiler");
        $__internal_578a075edd011635717b55bc23c9313897fda5ad1e81db3467e73c88f1b8ca29->enter($__internal_578a075edd011635717b55bc23c9313897fda5ad1e81db3467e73c88f1b8ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainblock"));

        // line 15
        echo "<style>
.textsize
{
width:500px;
height:200px;
}
</style>
<div class=\"main-content\">
\t\t\t\t  <div class=\"breadcrumbs\" id=\"breadcrumbs\">
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\ttry{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
\t\t\t\t\t\t</script>\t\t\t
<center><b>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("article", array(), "article");
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
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("article", array(), "article");
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
         <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div id=\"#\" class=\"tab-pane in active\">
";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                                    
                                    
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        // line 49
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "del")) {
            // line 50
            echo "                                    <div class=\"form-group\"  >
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
            // line 51
            echo $this->env->getExtension('translator')->getTranslator()->trans("name", array(), "public");
            echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"  >
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
            // line 62
            echo $this->env->getExtension('translator')->getTranslator()->trans("article description", array(), "article");
            echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin-top:120px;position:relative;\"  >
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
            // line 72
            echo $this->env->getExtension('translator')->getTranslator()->trans("image", array(), "public");
            echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin-top:50px;position:relative;\"  >
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
            // line 82
            echo $this->env->getExtension('translator')->getTranslator()->trans("category", array(), "category");
            echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category_id", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
";
        } else {
            // line 93
            echo " <div class=\"form-group\"  >


\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t
<h1><center>";
            // line 98
            echo $this->env->getExtension('translator')->getTranslator()->trans("do u want to delete this article???", array(), "article");
            echo "</center></h1>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t
";
        }
        // line 101
        echo "\t\t\t\t\t\t\t\t\t
                                    <div class=\"clearfix form-actions\" style=\"margin-top:200px;position:relative;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-offset-3 col-md-9\">
";
        // line 104
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "edit")) {
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t
";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "edit article"));
            echo "
";
        }
        // line 108
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            // line 109
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "add article"));
            echo "
";
        }
        // line 110
        echo "\t
";
        // line 111
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "del")) {
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "delete article"));
            echo "
";
        }
        // line 113
        echo "\t\t\t\t\t\t\t\t\t\t\t
                                            
                                            

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>        
                                               ";
        // line 120
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t</div>\t\t\t\t\t\t\t\t\t\t
\t<br/>
\t<br/>
\t<br/>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 127
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "success"), "method")) {
            // line 128
            echo "<button class=\"btn btn-success\" style=\"left:400px;bottom:20px;width:300px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"), 0, array()), "html", null, true);
            echo "</button>\t\t\t\t\t\t\t\t\t\t\t
<script>
setTimeout(function(){
  window.location = Routing.generate('adminarticle',{_locale : \"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
            echo "\"});
}, 2000);
</script>
";
        }
        // line 134
        echo " 
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
        
        $__internal_578a075edd011635717b55bc23c9313897fda5ad1e81db3467e73c88f1b8ca29->leave($__internal_578a075edd011635717b55bc23c9313897fda5ad1e81db3467e73c88f1b8ca29_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Admin:actionadminarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 134,  266 => 131,  259 => 128,  257 => 127,  247 => 120,  238 => 113,  233 => 112,  231 => 111,  228 => 110,  223 => 109,  221 => 108,  216 => 106,  213 => 105,  211 => 104,  206 => 101,  199 => 98,  192 => 93,  182 => 86,  175 => 82,  166 => 76,  159 => 72,  150 => 66,  143 => 62,  133 => 55,  126 => 51,  123 => 50,  121 => 49,  112 => 43,  104 => 38,  90 => 27,  76 => 15,  70 => 14,  59 => 11,  57 => 10,  51 => 8,  49 => 7,  43 => 5,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'styleadmin.html.twig' %}*/
/* {% block title %}*/
/* {% if action == 'add' %}*/
/* <title>{% trans from "article" %} add article {% endtrans %}</title>*/
/* {% endif %}*/
/* {% if action == 'edit' %}*/
/* <title>{% trans from "article" %} edit article {% endtrans %}</title>*/
/* {% endif %}*/
/* {% if action == 'del' %}*/
/* <title>{% trans from "article" %} delete article {% endtrans %}</title>*/
/* {% endif %}*/
/* {% endblock %}*/
/* {% block mainblock %}*/
/* <style>*/
/* .textsize*/
/* {*/
/* width:500px;*/
/* height:200px;*/
/* }*/
/* </style>*/
/* <div class="main-content">*/
/* 				  <div class="breadcrumbs" id="breadcrumbs">*/
/* 						<script type="text/javascript">*/
/* 							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}*/
/* 						</script>			*/
/* <center><b>{% trans from "article" %} article {% endtrans %}</b></center>						*/
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
/* 													<a data-toggle="tab" href="#">{% trans from "article" %} article {% endtrans %}</a>*/
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
/* 									{% if action != 'del' %}*/
/*                                     <div class="form-group"  >*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} name {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.name) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									*/
/* 									<div class="form-group"  >*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "article" %} article description {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.description) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group" style="margin-top:120px;position:relative;"  >*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "public" %} image {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.image) }}*/
/* 										</div>*/
/* 									</div> */
/* 									<br/>*/
/* 									<br/>*/
/* 									<div class="form-group" style="margin-top:50px;position:relative;"  >*/
/* <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>{% trans from "category" %} category {% endtrans %}</b></label>*/
/* */
/* 										<div class="col-sm-9">*/
/* 										*/
/* {{ form_widget(form.category_id) }}*/
/* 										</div>*/
/* 									</div> */
/* 																		*/
/* 									*/
/* 									*/
/* {% else %}*/
/*  <div class="form-group"  >*/
/* */
/* */
/* 										<div class="col-sm-12">*/
/* 										*/
/* <h1><center>{% trans from "article" %} do u want to delete this article??? {% endtrans %}</center></h1>*/
/* 										</div>*/
/* 									</div> 									*/
/* {% endif %}									*/
/*                                     <div class="clearfix form-actions" style="margin-top:200px;position:relative;">*/
/* 										<div class="col-md-offset-3 col-md-9">*/
/* {% if action == 'edit' %}*/
/* 										*/
/* {{ form_widget(form.save,{ 'label': 'edit article' }) }}*/
/* {% endif %}*/
/* {% if action == 'add' %}*/
/* {{ form_widget(form.save,{ 'label': 'add article' }) }}*/
/* {% endif %}	*/
/* {% if action == 'del' %}*/
/* {{ form_widget(form.save,{ 'label': 'delete article' }) }}*/
/* {% endif %}											*/
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
/*   window.location = Routing.generate('adminarticle',{_locale : "{{ app.request.locale }}"});*/
/* }, 2000);*/
/* </script>*/
/* {% endif %} */
/* 										*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  {% endblock %}*/
/* 							  */
