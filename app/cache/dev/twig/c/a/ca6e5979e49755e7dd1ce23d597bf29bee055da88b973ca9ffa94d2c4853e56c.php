<?php

/* UserBundle:Admin:adminusers.html.twig */
class __TwigTemplate_117d9e7d05d9a50077a5832e60ccbfd0b0bb65c4bc6e6b9c5c4f7ac07877b256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("styleadmin.html.twig", "UserBundle:Admin:adminusers.html.twig", 1);
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
        $__internal_2ff2d087fbfe73cfbbfaee3a5894b4b016923e190f984da4aade07f9e02087fd = $this->env->getExtension("native_profiler");
        $__internal_2ff2d087fbfe73cfbbfaee3a5894b4b016923e190f984da4aade07f9e02087fd->enter($__internal_2ff2d087fbfe73cfbbfaee3a5894b4b016923e190f984da4aade07f9e02087fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Admin:adminusers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff2d087fbfe73cfbbfaee3a5894b4b016923e190f984da4aade07f9e02087fd->leave($__internal_2ff2d087fbfe73cfbbfaee3a5894b4b016923e190f984da4aade07f9e02087fd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_78dbf13af7e2419b5584f65f317caeb7211fb0ec1cd89e935c8944ae78711c54 = $this->env->getExtension("native_profiler");
        $__internal_78dbf13af7e2419b5584f65f317caeb7211fb0ec1cd89e935c8944ae78711c54->enter($__internal_78dbf13af7e2419b5584f65f317caeb7211fb0ec1cd89e935c8944ae78711c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "<title>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("user", array(), "user");
        echo "</title>
";
        
        $__internal_78dbf13af7e2419b5584f65f317caeb7211fb0ec1cd89e935c8944ae78711c54->leave($__internal_78dbf13af7e2419b5584f65f317caeb7211fb0ec1cd89e935c8944ae78711c54_prof);

    }

    // line 5
    public function block_mainblock($context, array $blocks = array())
    {
        $__internal_d138215f6d3c7578f10eec09b64f84c91f0b615a2b98c4e12a1688e1237c572b = $this->env->getExtension("native_profiler");
        $__internal_d138215f6d3c7578f10eec09b64f84c91f0b615a2b98c4e12a1688e1237c572b->enter($__internal_d138215f6d3c7578f10eec09b64f84c91f0b615a2b98c4e12a1688e1237c572b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainblock"));

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
        echo $this->env->getExtension('translator')->getTranslator()->trans("user", array(), "category");
        echo "</b></center>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-content\"><!-- /.page-header -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\"><!-- /span -->
\t\t\t\t\t\t\t\t</div><!-- /row -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t  <div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"table-header\">
\t\t\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("user", array(), "user");
        // line 29
        echo "\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table id=\"\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("name", array(), "public");
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "public");
        echo "</th>
                                                        <th>";
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("email", array(), "public");
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("image", array(), "public");
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "public");
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "image", array()), "html", null, true);
            echo "\" style=\"width:100px;\"></td>
<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\">
\t\t

<a class=\"green\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editadminuser", array("_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "userid" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">\t
                                                            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil bigger-130\"></i>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
        
        $__internal_d138215f6d3c7578f10eec09b64f84c91f0b615a2b98c4e12a1688e1237c572b->leave($__internal_d138215f6d3c7578f10eec09b64f84c91f0b615a2b98c4e12a1688e1237c572b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Admin:adminusers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 107,  150 => 58,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  126 => 49,  122 => 48,  111 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  86 => 29,  84 => 28,  70 => 17,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'styleadmin.html.twig' %}*/
/* {% block title %}*/
/* <title>{% trans from "user" %} user {% endtrans %}</title>*/
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
/* <center><b>{% trans from "category" %} user {% endtrans %}</b></center>						*/
/* 					</div>*/
/* 					<div class="page-content"><!-- /.page-header -->*/
/* 						<div class="row">*/
/* 							<div class="col-xs-12">*/
/* 								<div class="row"><!-- /span -->*/
/* 								</div><!-- /row -->*/
/* 								<div class="row">*/
/* 								  <div class="col-xs-12">*/
/* 										*/
/* 										<div class="table-header">*/
/* 										{% trans from "user" %} user {% endtrans %}*/
/* 										</div>*/
/* */
/* 										<div class="table-responsive">*/
/* 											<table id="" class="table table-striped table-bordered table-hover">*/
/* 												<thead>*/
/* 													<tr>*/
/* 													*/
/* 														<th>{% trans from "public" %} name {% endtrans %}</th>*/
/* 														<th>{% trans from "public" %} Password {% endtrans %}</th>*/
/*                                                         <th>{% trans from "public" %} email {% endtrans %}</th>*/
/* 														<th>{% trans from "public" %} image {% endtrans %}</th>*/
/* 														<th>{% trans from "public" %} Actions {% endtrans %}</th>*/
/* 													</tr>*/
/* 												</thead>*/
/* */
/* 												<tbody>*/
/* 												*/
/* 												*/
/* 												*/
/* 												{% for user in data %}*/
/* 													<tr>*/
/* 				<td>{{ user.username }}</td>*/
/* 				<td>{{ user.password }}</td>*/
/* 				<td>{{ user.email }}</td>*/
/* 				<td><img src="{{ asset('uploads/')}}{{ user.image }}" style="width:100px;"></td>*/
/* <td>*/
/* 															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">*/
/* 		*/
/* */
/* <a class="green" href="{{ path('editadminuser',{'_locale' : app.request.locale,'userid' : user.id}) }}">	*/
/*                                                             */
/* 																	<i class="icon-pencil bigger-130"></i>*/
/* 																</a>*/
/* */
/* */
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
