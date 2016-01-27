<?php

/* base.html.twig */
class __TwigTemplate_628402d1af58d31e53efa3e476d4364cd1cdbca2fa24c6da75f0331021b04fa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10e4f7a4220cdffc1e3d7a2fb5440a2030c8744a7c56eb1f84ebbe4edefe3189 = $this->env->getExtension("native_profiler");
        $__internal_10e4f7a4220cdffc1e3d7a2fb5440a2030c8744a7c56eb1f84ebbe4edefe3189->enter($__internal_10e4f7a4220cdffc1e3d7a2fb5440a2030c8744a7c56eb1f84ebbe4edefe3189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_10e4f7a4220cdffc1e3d7a2fb5440a2030c8744a7c56eb1f84ebbe4edefe3189->leave($__internal_10e4f7a4220cdffc1e3d7a2fb5440a2030c8744a7c56eb1f84ebbe4edefe3189_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a7fa2f2524ddf4abb3ffe39fe73cd7c451d301bcf5e2bf92930eb62831f4253 = $this->env->getExtension("native_profiler");
        $__internal_7a7fa2f2524ddf4abb3ffe39fe73cd7c451d301bcf5e2bf92930eb62831f4253->enter($__internal_7a7fa2f2524ddf4abb3ffe39fe73cd7c451d301bcf5e2bf92930eb62831f4253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Angular workshop!";
        
        $__internal_7a7fa2f2524ddf4abb3ffe39fe73cd7c451d301bcf5e2bf92930eb62831f4253->leave($__internal_7a7fa2f2524ddf4abb3ffe39fe73cd7c451d301bcf5e2bf92930eb62831f4253_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01c5bf1c899e4d8f710ef8926f1c42ec0571d6ad1fafcb9708145cabe1e25c79 = $this->env->getExtension("native_profiler");
        $__internal_01c5bf1c899e4d8f710ef8926f1c42ec0571d6ad1fafcb9708145cabe1e25c79->enter($__internal_01c5bf1c899e4d8f710ef8926f1c42ec0571d6ad1fafcb9708145cabe1e25c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01c5bf1c899e4d8f710ef8926f1c42ec0571d6ad1fafcb9708145cabe1e25c79->leave($__internal_01c5bf1c899e4d8f710ef8926f1c42ec0571d6ad1fafcb9708145cabe1e25c79_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1eef2c14a60b34da7f111b30c40730310018d2360a6692a37c2fb5098a234d0 = $this->env->getExtension("native_profiler");
        $__internal_c1eef2c14a60b34da7f111b30c40730310018d2360a6692a37c2fb5098a234d0->enter($__internal_c1eef2c14a60b34da7f111b30c40730310018d2360a6692a37c2fb5098a234d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1eef2c14a60b34da7f111b30c40730310018d2360a6692a37c2fb5098a234d0->leave($__internal_c1eef2c14a60b34da7f111b30c40730310018d2360a6692a37c2fb5098a234d0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f91df637800c277996eca978c6414243ca5e5bd1845ff0e90f654cde058adb39 = $this->env->getExtension("native_profiler");
        $__internal_f91df637800c277996eca978c6414243ca5e5bd1845ff0e90f654cde058adb39->enter($__internal_f91df637800c277996eca978c6414243ca5e5bd1845ff0e90f654cde058adb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f91df637800c277996eca978c6414243ca5e5bd1845ff0e90f654cde058adb39->leave($__internal_f91df637800c277996eca978c6414243ca5e5bd1845ff0e90f654cde058adb39_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome to Angular workshop!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
