<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_2b318fbfd21e4c671533471df68b94da4d9d6ab7f2229d685889fd7e51003d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/Materialize/dist/css/materialize.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/material-design-icons-iconfont/dist/material-design-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/Materialize/dist/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/jquery-bridget/jquery.bridget.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/get-style-property/get-style-property.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/get-size/get-size.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/eventEmitter/EventEmitter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/eventie/eventie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/doc-ready/doc-ready.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/matches-selector/matches-selector.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/fizzy-ui-utils/utils.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/outlayer/item.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/outlayer/outlayer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/masonry/masonry.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/imagesloaded/imagesloaded.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular-masonry/angular-masonry.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/templates.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "    <div ng-app=\"app\" ng-controller=\"IndexController\">
        <navigation></navigation>
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col s4 offset-s4\">
                        <new-note notes=notes></new-note>
                    </div>
                </div>
                <div masonry reload-on-resize class=\"row\">
                    <note class=\"masonry-brick\" ng-repeat=\"note in notes\"></note>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 33,  128 => 32,  121 => 28,  117 => 27,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('bower_components/Materialize/dist/css/materialize.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bower_components/material-design-icons-iconfont/dist/material-design-icons.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/app.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/Materialize/dist/js/materialize.min.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/jquery-bridget/jquery.bridget.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/get-style-property/get-style-property.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/get-size/get-size.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/eventEmitter/EventEmitter.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/eventie/eventie.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/doc-ready/doc-ready.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/matches-selector/matches-selector.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/fizzy-ui-utils/utils.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/outlayer/item.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/outlayer/outlayer.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/masonry/masonry.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/imagesloaded/imagesloaded.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/angular-masonry/angular-masonry.js') }}"></script>*/
/* */
/*     <script src="{{ asset('assets/app.js') }}"></script>*/
/*     <script src="{{ asset('assets/templates.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div ng-app="app" ng-controller="IndexController">*/
/*         <navigation></navigation>*/
/*         <div class="container">*/
/*             <div class="content">*/
/*                 <div class="row">*/
/*                     <div class="col s4 offset-s4">*/
/*                         <new-note notes=notes></new-note>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div masonry reload-on-resize class="row">*/
/*                     <note class="masonry-brick" ng-repeat="note in notes"></note>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
