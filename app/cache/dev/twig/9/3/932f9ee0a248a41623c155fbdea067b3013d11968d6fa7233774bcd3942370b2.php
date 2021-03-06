<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_68a21d01e99068e071c5b7fa44a6fbfff348eafcc314fa5aa0f01ffd1f2c8e36 extends Twig_Template
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
        $__internal_78e3eae45474e5666c550fea8f8b96f8808c790c3eeed7d3c1b1b1dffa1db8b8 = $this->env->getExtension("native_profiler");
        $__internal_78e3eae45474e5666c550fea8f8b96f8808c790c3eeed7d3c1b1b1dffa1db8b8->enter($__internal_78e3eae45474e5666c550fea8f8b96f8808c790c3eeed7d3c1b1b1dffa1db8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78e3eae45474e5666c550fea8f8b96f8808c790c3eeed7d3c1b1b1dffa1db8b8->leave($__internal_78e3eae45474e5666c550fea8f8b96f8808c790c3eeed7d3c1b1b1dffa1db8b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_216499ed8ff43cbcc28c63f33e37b29cc28c2ec6b3918115a672f1766bf95467 = $this->env->getExtension("native_profiler");
        $__internal_216499ed8ff43cbcc28c63f33e37b29cc28c2ec6b3918115a672f1766bf95467->enter($__internal_216499ed8ff43cbcc28c63f33e37b29cc28c2ec6b3918115a672f1766bf95467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_216499ed8ff43cbcc28c63f33e37b29cc28c2ec6b3918115a672f1766bf95467->leave($__internal_216499ed8ff43cbcc28c63f33e37b29cc28c2ec6b3918115a672f1766bf95467_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b894e997f3619d18a7f29c256237aec0c0297ab8bc7220ee1c9d31692dcc7a46 = $this->env->getExtension("native_profiler");
        $__internal_b894e997f3619d18a7f29c256237aec0c0297ab8bc7220ee1c9d31692dcc7a46->enter($__internal_b894e997f3619d18a7f29c256237aec0c0297ab8bc7220ee1c9d31692dcc7a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b894e997f3619d18a7f29c256237aec0c0297ab8bc7220ee1c9d31692dcc7a46->leave($__internal_b894e997f3619d18a7f29c256237aec0c0297ab8bc7220ee1c9d31692dcc7a46_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_693756168e2826800904054ab8a524670ed8aacf33494312665139eafcae71dd = $this->env->getExtension("native_profiler");
        $__internal_693756168e2826800904054ab8a524670ed8aacf33494312665139eafcae71dd->enter($__internal_693756168e2826800904054ab8a524670ed8aacf33494312665139eafcae71dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_693756168e2826800904054ab8a524670ed8aacf33494312665139eafcae71dd->leave($__internal_693756168e2826800904054ab8a524670ed8aacf33494312665139eafcae71dd_prof);

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
