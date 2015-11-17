<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7758183523873b195cfb9adb3a2fd7e6879dbc632cea5a176536a10cdf8e6108 extends Twig_Template
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
        $__internal_8a8a9ff6864150314db4456269bb3b5a1eb323bfff886eba3d6d66f81420a61a = $this->env->getExtension("native_profiler");
        $__internal_8a8a9ff6864150314db4456269bb3b5a1eb323bfff886eba3d6d66f81420a61a->enter($__internal_8a8a9ff6864150314db4456269bb3b5a1eb323bfff886eba3d6d66f81420a61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a8a9ff6864150314db4456269bb3b5a1eb323bfff886eba3d6d66f81420a61a->leave($__internal_8a8a9ff6864150314db4456269bb3b5a1eb323bfff886eba3d6d66f81420a61a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9683bb514dd9780224f475c1de9a5b12e3061535c7e3e457795e01663a5ff36c = $this->env->getExtension("native_profiler");
        $__internal_9683bb514dd9780224f475c1de9a5b12e3061535c7e3e457795e01663a5ff36c->enter($__internal_9683bb514dd9780224f475c1de9a5b12e3061535c7e3e457795e01663a5ff36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9683bb514dd9780224f475c1de9a5b12e3061535c7e3e457795e01663a5ff36c->leave($__internal_9683bb514dd9780224f475c1de9a5b12e3061535c7e3e457795e01663a5ff36c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d3bb2924df1a787ecb132d44f0dece9fe853edeb9190714fcda297b6917a42c = $this->env->getExtension("native_profiler");
        $__internal_3d3bb2924df1a787ecb132d44f0dece9fe853edeb9190714fcda297b6917a42c->enter($__internal_3d3bb2924df1a787ecb132d44f0dece9fe853edeb9190714fcda297b6917a42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d3bb2924df1a787ecb132d44f0dece9fe853edeb9190714fcda297b6917a42c->leave($__internal_3d3bb2924df1a787ecb132d44f0dece9fe853edeb9190714fcda297b6917a42c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d2d806c7a331a84124a47635d6c57da8d156c267eda20e1ff35135dfa50854e = $this->env->getExtension("native_profiler");
        $__internal_6d2d806c7a331a84124a47635d6c57da8d156c267eda20e1ff35135dfa50854e->enter($__internal_6d2d806c7a331a84124a47635d6c57da8d156c267eda20e1ff35135dfa50854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6d2d806c7a331a84124a47635d6c57da8d156c267eda20e1ff35135dfa50854e->leave($__internal_6d2d806c7a331a84124a47635d6c57da8d156c267eda20e1ff35135dfa50854e_prof);

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
