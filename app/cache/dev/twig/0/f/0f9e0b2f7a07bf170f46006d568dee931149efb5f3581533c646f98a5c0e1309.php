<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b55d6cec887f9f6901082005cd7abc7c180aca6189a1e0d371acf252635e8bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68205e27c4ce155ecf560336673b836bcc467703571160447e2fedde140b2951 = $this->env->getExtension("native_profiler");
        $__internal_68205e27c4ce155ecf560336673b836bcc467703571160447e2fedde140b2951->enter($__internal_68205e27c4ce155ecf560336673b836bcc467703571160447e2fedde140b2951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68205e27c4ce155ecf560336673b836bcc467703571160447e2fedde140b2951->leave($__internal_68205e27c4ce155ecf560336673b836bcc467703571160447e2fedde140b2951_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e506b4f1280323984091e499f1dd70b965bc043f4526a331ae38f17066d9b4c5 = $this->env->getExtension("native_profiler");
        $__internal_e506b4f1280323984091e499f1dd70b965bc043f4526a331ae38f17066d9b4c5->enter($__internal_e506b4f1280323984091e499f1dd70b965bc043f4526a331ae38f17066d9b4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e506b4f1280323984091e499f1dd70b965bc043f4526a331ae38f17066d9b4c5->leave($__internal_e506b4f1280323984091e499f1dd70b965bc043f4526a331ae38f17066d9b4c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_285d9c17dec018fde7b14ec0f912ac42a7c2999c42d79fc3ad9cba3683fd7227 = $this->env->getExtension("native_profiler");
        $__internal_285d9c17dec018fde7b14ec0f912ac42a7c2999c42d79fc3ad9cba3683fd7227->enter($__internal_285d9c17dec018fde7b14ec0f912ac42a7c2999c42d79fc3ad9cba3683fd7227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_285d9c17dec018fde7b14ec0f912ac42a7c2999c42d79fc3ad9cba3683fd7227->leave($__internal_285d9c17dec018fde7b14ec0f912ac42a7c2999c42d79fc3ad9cba3683fd7227_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a0ffbd864604bb4bd1b5d8c0fea3960d483c32184cb9c599abb3644070bdfb0 = $this->env->getExtension("native_profiler");
        $__internal_5a0ffbd864604bb4bd1b5d8c0fea3960d483c32184cb9c599abb3644070bdfb0->enter($__internal_5a0ffbd864604bb4bd1b5d8c0fea3960d483c32184cb9c599abb3644070bdfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5a0ffbd864604bb4bd1b5d8c0fea3960d483c32184cb9c599abb3644070bdfb0->leave($__internal_5a0ffbd864604bb4bd1b5d8c0fea3960d483c32184cb9c599abb3644070bdfb0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
