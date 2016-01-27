<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9d4984d4dea816206bc634f5c43e6e930c4b25d600d858636c9327298f8da795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54c8f2e7ab12b0681e4468c8920ed40da45890cb5b7b771807aa3338c1498fd4 = $this->env->getExtension("native_profiler");
        $__internal_54c8f2e7ab12b0681e4468c8920ed40da45890cb5b7b771807aa3338c1498fd4->enter($__internal_54c8f2e7ab12b0681e4468c8920ed40da45890cb5b7b771807aa3338c1498fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54c8f2e7ab12b0681e4468c8920ed40da45890cb5b7b771807aa3338c1498fd4->leave($__internal_54c8f2e7ab12b0681e4468c8920ed40da45890cb5b7b771807aa3338c1498fd4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98e63c52f0fd08030c5d07292bfbc5e99ad65c74c6bcef21721cbf0b74f11431 = $this->env->getExtension("native_profiler");
        $__internal_98e63c52f0fd08030c5d07292bfbc5e99ad65c74c6bcef21721cbf0b74f11431->enter($__internal_98e63c52f0fd08030c5d07292bfbc5e99ad65c74c6bcef21721cbf0b74f11431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98e63c52f0fd08030c5d07292bfbc5e99ad65c74c6bcef21721cbf0b74f11431->leave($__internal_98e63c52f0fd08030c5d07292bfbc5e99ad65c74c6bcef21721cbf0b74f11431_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_def5652c566e623cbcf3f41c12a4cac63b3df4b061f7a510c9608db41fd9b361 = $this->env->getExtension("native_profiler");
        $__internal_def5652c566e623cbcf3f41c12a4cac63b3df4b061f7a510c9608db41fd9b361->enter($__internal_def5652c566e623cbcf3f41c12a4cac63b3df4b061f7a510c9608db41fd9b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_def5652c566e623cbcf3f41c12a4cac63b3df4b061f7a510c9608db41fd9b361->leave($__internal_def5652c566e623cbcf3f41c12a4cac63b3df4b061f7a510c9608db41fd9b361_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc515de8e1d6ac94c2c6334cfa70036a8d88b4e36a80fe2ff303e3ac44a8488a = $this->env->getExtension("native_profiler");
        $__internal_cc515de8e1d6ac94c2c6334cfa70036a8d88b4e36a80fe2ff303e3ac44a8488a->enter($__internal_cc515de8e1d6ac94c2c6334cfa70036a8d88b4e36a80fe2ff303e3ac44a8488a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc515de8e1d6ac94c2c6334cfa70036a8d88b4e36a80fe2ff303e3ac44a8488a->leave($__internal_cc515de8e1d6ac94c2c6334cfa70036a8d88b4e36a80fe2ff303e3ac44a8488a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
