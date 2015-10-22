<?php

/* CategoryBundle:Admin:admincategories.html.twig */
class __TwigTemplate_bd6309efaff91e23972efc706b36ed50b1344e2b63eb1d2bc275ddd8c91ef9d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("styleadmin.html.twig", "CategoryBundle:Admin:admincategories.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "<title>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("category", array(), "category");
        echo "</title>
";
    }

    // line 5
    public function block_mainblock($context, array $blocks = array())
    {
        // line 6
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
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("category", array(), "category");
        echo "</b></center>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-content\"><!-- /.page-header -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\"><!-- /span -->
                                <h4 class=\"pink\">
<i class=\"icon-hand-right icon-animated-hand-pointer blue\"></i>
<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addcategoryblog", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()))), "html", null, true);
        echo "\" role=\"button\"  class=\"green\"  >";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add Category", array(), "category");
        echo " </a>
</h4>
\t\t\t\t\t\t\t\t</div><!-- /row -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"table-header\">
\t\t\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("category", array(), "category");
        // line 33
        echo "\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table id=\"\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("name", array(), "public");
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "public");
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\">
\t\t

<a class=\"green\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategoryblog", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "catid" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">\t
                                                            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

<a class=\"red\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletecategoryblog", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "catid" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs visible-sm hidden-md hidden-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inline position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-minier btn-yellow dropdown-toggle\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-caret-down icon-only bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-zoom-in bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\"  title=\"Edit\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-edit bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        // line 115
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "has", array(0 => "success"), "method")) {
            // line 116
            echo "<button class=\"btn btn-success\" style=\"left:400px;bottom:20px;width:300px;\">Category  added successfully</button>\t\t\t\t\t\t\t\t\t\t\t
<script>
setTimeout(function(){
  window.location = Routing.generate('categoryblog');
}, 2000);
</script>
";
        }
        // line 122
        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
    }

    public function getTemplateName()
    {
        return "CategoryBundle:Admin:admincategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 122,  191 => 116,  189 => 115,  181 => 109,  129 => 63,  121 => 58,  113 => 53,  110 => 52,  106 => 51,  95 => 43,  89 => 40,  80 => 33,  78 => 32,  66 => 25,  55 => 17,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'styleadmin.html.twig' %}*/
/* {% block title %}*/
/* <title>{% trans from "category" %} category {% endtrans %}</title>*/
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
/* 								<div class="row"><!-- /span -->*/
/*                                 <h4 class="pink">*/
/* <i class="icon-hand-right icon-animated-hand-pointer blue"></i>*/
/* <a href="{{ path('addcategoryblog',{'_locale' : app.request.locale })}}" role="button"  class="green"  >{% trans from "category" %} Add Category {% endtrans %} </a>*/
/* </h4>*/
/* 								</div><!-- /row -->*/
/* 								<div class="row">*/
/* 								  <div class="col-xs-12">*/
/* 										*/
/* 										<div class="table-header">*/
/* 										{% trans from "category" %} category {% endtrans %}*/
/* 										</div>*/
/* */
/* 										<div class="table-responsive">*/
/* 											<table id="" class="table table-striped table-bordered table-hover">*/
/* 												<thead>*/
/* 													<tr>*/
/* 													*/
/* 														<th>{% trans from "public" %} name {% endtrans %}</th>*/
/* 														*/
/* */
/* 														<th>{% trans from "public" %} Actions {% endtrans %}</th>*/
/* 													</tr>*/
/* 												</thead>*/
/* */
/* 												<tbody>*/
/* 												*/
/* 												*/
/* 												*/
/* 												{% for category in data %}*/
/* 													<tr>*/
/* 				<td>{{ category.name }}</td>*/
/* <td>*/
/* 															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">*/
/* 		*/
/* */
/* <a class="green" href="{{ path('editcategoryblog',{'_locale' : app.request.locale,'catid' : category.id}) }}">	*/
/*                                                             */
/* 																	<i class="icon-pencil bigger-130"></i>*/
/* 																</a>*/
/* */
/* <a class="red" href="{{ path('deletecategoryblog',{'_locale' : app.request.locale,'catid' : category.id}) }}">*/
/* 																	<i class="icon-trash bigger-130"></i>*/
/* 																</a>*/
/* 																*/
/* 															</div>*/
/* */
/* 															<div class="visible-xs visible-sm hidden-md hidden-lg">*/
/* 																<div class="inline position-relative">*/
/* 																	<button class="btn btn-minier btn-yellow dropdown-toggle" >*/
/* 																		<i class="icon-caret-down icon-only bigger-120"></i>*/
/* 																	</button>*/
/* */
/* 																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">*/
/* 																		<li>*/
/* 																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">*/
/* 																				<span class="blue">*/
/* 																					<i class="icon-zoom-in bigger-120"></i>*/
/* 																				</span>*/
/* 																			</a>*/
/* 																		</li>*/
/* */
/* 																		<li>*/
/* 															 															*/
/* 																		*/
/* 				<a href="#" class="tooltip-success" data-rel="tooltip"  title="Edit">*/
/* 				*/
/* 																				<span class="green">*/
/* 																					<i class="icon-edit bigger-120"></i>*/
/* 																				</span>*/
/* 																			</a>*/
/* 																		</li>*/
/* */
/* 																		<li>*/
/* 																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">*/
/* 																				<span class="red">*/
/* 																					<i class="icon-trash bigger-120"></i>*/
/* 																				</span>*/
/* 																			</a>*/
/* 																		</li>*/
/* 																	</ul>*/
/* 																</div>*/
/* 															</div>*/
/* 														</td>*/
/* 				*/
/* 													</tr>*/
/* 													{% endfor %}*/
/* 													*/
/* 											  </tbody>*/
/* 											</table>*/
/* 											<br/>*/
/* 											<br/>*/
/* 											*/
/* 											{% if app.session.flashbag.has('success')  %}*/
/* <button class="btn btn-success" style="left:400px;bottom:20px;width:300px;">Category  added successfully</button>											*/
/* <script>*/
/* setTimeout(function(){*/
/*   window.location = Routing.generate('categoryblog');*/
/* }, 2000);*/
/* </script>*/
/* {% endif %} */
/* 										</div>*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  {% endblock %}*/
/* 							  */
