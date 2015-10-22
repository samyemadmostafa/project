<?php

/* ArticleBundle:Admin:adminarticle.html.twig */
class __TwigTemplate_4cdb67a97b820871cadad9a384708422635d06c442d345fbe9cd73f5d4278540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("styleadmin.html.twig", "ArticleBundle:Admin:adminarticle.html.twig", 1);
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
        $__internal_aeae1b8c03138d3e6348240b18ee2e63f6b1911397c93624c16cf047ccc41e88 = $this->env->getExtension("native_profiler");
        $__internal_aeae1b8c03138d3e6348240b18ee2e63f6b1911397c93624c16cf047ccc41e88->enter($__internal_aeae1b8c03138d3e6348240b18ee2e63f6b1911397c93624c16cf047ccc41e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArticleBundle:Admin:adminarticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeae1b8c03138d3e6348240b18ee2e63f6b1911397c93624c16cf047ccc41e88->leave($__internal_aeae1b8c03138d3e6348240b18ee2e63f6b1911397c93624c16cf047ccc41e88_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_640939ab0892f80b4207896f8fc62c186987ca9955256527468712c52757c761 = $this->env->getExtension("native_profiler");
        $__internal_640939ab0892f80b4207896f8fc62c186987ca9955256527468712c52757c761->enter($__internal_640939ab0892f80b4207896f8fc62c186987ca9955256527468712c52757c761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "<title>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("article", array(), "article");
        echo "</title>
";
        
        $__internal_640939ab0892f80b4207896f8fc62c186987ca9955256527468712c52757c761->leave($__internal_640939ab0892f80b4207896f8fc62c186987ca9955256527468712c52757c761_prof);

    }

    // line 5
    public function block_mainblock($context, array $blocks = array())
    {
        $__internal_13c0caf039432f8449ba7e5bc61adc95a7adeabbf84fb81d051a909138876167 = $this->env->getExtension("native_profiler");
        $__internal_13c0caf039432f8449ba7e5bc61adc95a7adeabbf84fb81d051a909138876167->enter($__internal_13c0caf039432f8449ba7e5bc61adc95a7adeabbf84fb81d051a909138876167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainblock"));

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
        echo $this->env->getExtension('translator')->getTranslator()->trans("article", array(), "article");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addadminarticle", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))), "html", null, true);
        echo "\" role=\"button\"  class=\"green\"  >";
        echo $this->env->getExtension('translator')->getTranslator()->trans("add article", array(), "article");
        echo " </a>
</h4>
\t\t\t\t\t\t\t\t</div><!-- /row -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"table-header\">
\t\t\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("article", array(), "article");
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("image", array(), "public");
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 42
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "public");
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploadsarticle/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
            echo "\" style=\"width:100px;\"></td>
<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\">
\t\t

<a class=\"green\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editadminarticle", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "articleid" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">\t
                                                            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

<a class=\"red\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteadminarticle", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "articleid" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
        
        $__internal_13c0caf039432f8449ba7e5bc61adc95a7adeabbf84fb81d051a909138876167->leave($__internal_13c0caf039432f8449ba7e5bc61adc95a7adeabbf84fb81d051a909138876167_prof);

    }

    public function getTemplateName()
    {
        return "ArticleBundle:Admin:adminarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 109,  151 => 63,  143 => 58,  134 => 53,  130 => 52,  127 => 51,  123 => 50,  112 => 42,  108 => 41,  104 => 40,  95 => 33,  93 => 32,  81 => 25,  70 => 17,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'styleadmin.html.twig' %}*/
/* {% block title %}*/
/* <title>{% trans from "article" %} article {% endtrans %}</title>*/
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
/* <center><b>{% trans from "article" %} article {% endtrans %}</b></center>						*/
/* 					</div>*/
/* 					<div class="page-content"><!-- /.page-header -->*/
/* 						<div class="row">*/
/* 							<div class="col-xs-12">*/
/* 								<div class="row"><!-- /span -->*/
/*                                 <h4 class="pink">*/
/* <i class="icon-hand-right icon-animated-hand-pointer blue"></i>*/
/* <a href="{{ path('addadminarticle',{'_locale' : app.request.locale })}}" role="button"  class="green"  >{% trans from "article" %} add article {% endtrans %} </a>*/
/* </h4>*/
/* 								</div><!-- /row -->*/
/* 								<div class="row">*/
/* 								  <div class="col-xs-12">*/
/* 										*/
/* 										<div class="table-header">*/
/* 										{% trans from "article" %} article {% endtrans %}*/
/* 										</div>*/
/* */
/* 										<div class="table-responsive">*/
/* 											<table id="" class="table table-striped table-bordered table-hover">*/
/* 												<thead>*/
/* 													<tr>*/
/* 													*/
/* 														<th>{% trans from "public" %} name {% endtrans %}</th>*/
/* 														<th>{% trans from "public" %} image {% endtrans %}</th>*/
/* 														<th>{% trans from "public" %} Actions {% endtrans %}</th>*/
/* 													</tr>*/
/* 												</thead>*/
/* */
/* 												<tbody>*/
/* 												*/
/* 												*/
/* 												*/
/* 												{% for article in data %}*/
/* 													<tr>*/
/* 				<td>{{ article.name }}</td>*/
/* 				<td><img src="{{ asset('uploadsarticle/')}}{{ article.image }}" style="width:100px;"></td>*/
/* <td>*/
/* 															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">*/
/* 		*/
/* */
/* <a class="green" href="{{ path('editadminarticle',{'_locale' : app.request.locale,'articleid' : article.id}) }}">	*/
/*                                                             */
/* 																	<i class="icon-pencil bigger-130"></i>*/
/* 																</a>*/
/* */
/* <a class="red" href="{{ path('deleteadminarticle',{'_locale' : app.request.locale,'articleid' : article.id}) }}">*/
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
/* 										</div>*/
/* 								  </div>*/
/* 							  </div>*/
/* 							  {% endblock %}*/
/* 							  */
