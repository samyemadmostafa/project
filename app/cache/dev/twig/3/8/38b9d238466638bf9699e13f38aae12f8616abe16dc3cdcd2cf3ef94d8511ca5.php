<?php

/* CategoryBundle:Admin:actionadmincategories.html.twig */
class __TwigTemplate_1c6bcadb00b9385993678426f93e26a872baeb191177ffeac0eb441338a0854f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("styleadmin.html.twig", "CategoryBundle:Admin:actionadmincategories.html.twig", 2);
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
        $__internal_6c8c96429a4bb2ed11b7f4e9b83c8ce9e5fc0b7504b8ff91152484b148d967c4 = $this->env->getExtension("native_profiler");
        $__internal_6c8c96429a4bb2ed11b7f4e9b83c8ce9e5fc0b7504b8ff91152484b148d967c4->enter($__internal_6c8c96429a4bb2ed11b7f4e9b83c8ce9e5fc0b7504b8ff91152484b148d967c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CategoryBundle:Admin:actionadmincategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8c96429a4bb2ed11b7f4e9b83c8ce9e5fc0b7504b8ff91152484b148d967c4->leave($__internal_6c8c96429a4bb2ed11b7f4e9b83c8ce9e5fc0b7504b8ff91152484b148d967c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd8ecdd81ee0cf9e2041d64417caed94e65201216744f9579b489cdadd231ab7 = $this->env->getExtension("native_profiler");
        $__internal_dd8ecdd81ee0cf9e2041d64417caed94e65201216744f9579b489cdadd231ab7->enter($__internal_dd8ecdd81ee0cf9e2041d64417caed94e65201216744f9579b489cdadd231ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            // line 5
            echo "<title>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Add Category", array(), "category");
            echo "</title>
";
        }
        // line 7
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "edit")) {
            // line 8
            echo "<title>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Category", array(), "category");
            echo "</title>
";
        }
        // line 10
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "del")) {
            // line 11
            echo "<title>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Delete category", array(), "category");
            echo "</title>
";
        }
        
        $__internal_dd8ecdd81ee0cf9e2041d64417caed94e65201216744f9579b489cdadd231ab7->leave($__internal_dd8ecdd81ee0cf9e2041d64417caed94e65201216744f9579b489cdadd231ab7_prof);

    }

    // line 14
    public function block_mainblock($context, array $blocks = array())
    {
        $__internal_e0b5897404d283b47b6ac465daec321ceef43eaf183af7d942271d586e56f23a = $this->env->getExtension("native_profiler");
        $__internal_e0b5897404d283b47b6ac465daec321ceef43eaf183af7d942271d586e56f23a->enter($__internal_e0b5897404d283b47b6ac465daec321ceef43eaf183af7d942271d586e56f23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainblock"));

        // line 15
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
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("category", array(), "category");
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
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("category", array(), "category");
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
         <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div id=\"#\" class=\"tab-pane in active\">
";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                                    
                                    
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        // line 48
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "del")) {
            // line 49
            echo "                                    <div class=\"form-group\"  >
<label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"><b>";
            // line 50
            echo $this->env->getExtension('translator')->getTranslator()->trans("name", array(), "public");
            echo "</b></label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t
";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> 
";
        } else {
            // line 58
            echo " <div class=\"form-group\"  >


\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t
<h1><center>";
            // line 63
            echo $this->env->getExtension('translator')->getTranslator()->trans("do u want to delete this category???", array(), "category");
            echo "</center></h1>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t
";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t\t
                                    <div class=\"clearfix form-actions\" style=\"margin-top:100px;position:relative;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-offset-3 col-md-9\">
";
        // line 69
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "edit")) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t
";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Edit Category"));
            echo "
";
        }
        // line 73
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "add new category"));
            echo "
";
        }
        // line 75
        echo "\t
";
        // line 76
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "del")) {
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Delete category"));
            echo "
";
        }
        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t\t
                                            
                                            

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>        
                                               ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t</div>\t\t\t\t\t\t\t\t\t\t
\t<br/>
\t<br/>
\t<br/>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 92
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "success"), "method")) {
            // line 93
            echo "<button class=\"btn btn-success\" style=\"left:400px;bottom:20px;width:300px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"), 0, array()), "html", null, true);
            echo "</button>\t\t\t\t\t\t\t\t\t\t\t
<script>
setTimeout(function(){
  window.location = Routing.generate('categoryblog',{_locale : \"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
            echo "\"});
}, 2000);
</script>
";
        }
        // line 99
        echo " 
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
        
        $__internal_e0b5897404d283b47b6ac465daec321ceef43eaf183af7d942271d586e56f23a->leave($__internal_e0b5897404d283b47b6ac465daec321ceef43eaf183af7d942271d586e56f23a_prof);

    }

    public function getTemplateName()
    {
        return "CategoryBundle:Admin:actionadmincategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 99,  213 => 96,  206 => 93,  204 => 92,  194 => 85,  185 => 78,  180 => 77,  178 => 76,  175 => 75,  170 => 74,  168 => 73,  163 => 71,  160 => 70,  158 => 69,  153 => 66,  146 => 63,  139 => 58,  132 => 54,  125 => 50,  122 => 49,  120 => 48,  111 => 42,  103 => 37,  89 => 26,  76 => 15,  70 => 14,  59 => 11,  57 => 10,  51 => 8,  49 => 7,  43 => 5,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'styleadmin.html.twig' %}*/
/* {% block title %}*/
/* {% if action == 'add' %}*/
/* <title>{% trans from "category" %} Add Category {% endtrans %}</title>*/
/* {% endif %}*/
/* {% if action == 'edit' %}*/
/* <title>{% trans from "category" %} Edit Category {% endtrans %}</title>*/
/* {% endif %}*/
/* {% if action == 'del' %}*/
/* <title>{% trans from "category" %} Delete category {% endtrans %}</title>*/
/* {% endif %}*/
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
/* <center><b>{% trans from "category" %} category {% endtrans %}</b></center>						*/
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
/* 													<a data-toggle="tab" href="#">{% trans from "category" %} category {% endtrans %}</a>*/
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
/* {% else %}*/
/*  <div class="form-group"  >*/
/* */
/* */
/* 										<div class="col-sm-12">*/
/* 										*/
/* <h1><center>{% trans from "category" %} do u want to delete this category??? {% endtrans %}</center></h1>*/
/* 										</div>*/
/* 									</div> 									*/
/* {% endif %}									*/
/*                                     <div class="clearfix form-actions" style="margin-top:100px;position:relative;">*/
/* 										<div class="col-md-offset-3 col-md-9">*/
/* {% if action == 'edit' %}*/
/* 										*/
/* {{ form_widget(form.save,{ 'label': 'Edit Category' }) }}*/
/* {% endif %}*/
/* {% if action == 'add' %}*/
/* {{ form_widget(form.save,{ 'label': 'add new category' }) }}*/
/* {% endif %}	*/
/* {% if action == 'del' %}*/
/* {{ form_widget(form.save,{ 'label': 'Delete category' }) }}*/
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
/*   window.location = Routing.generate('categoryblog',{_locale : "{{ app.request.locale }}"});*/
/* }, 2000);*/
/* </script>*/
/* {% endif %} */
/* 										*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  {% endblock %}*/
/* 							  */
