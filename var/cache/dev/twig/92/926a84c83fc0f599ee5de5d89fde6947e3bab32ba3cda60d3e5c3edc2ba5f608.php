<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_84a33e5e3dda437001e70ff3b0e074685f4dbb3620e067036586a25309581731 extends Twig_Template
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
        $__internal_cb004139bf97d690f9b0200cb0141ebd31572f5389443685c684ba4cfb97265c = $this->env->getExtension("native_profiler");
        $__internal_cb004139bf97d690f9b0200cb0141ebd31572f5389443685c684ba4cfb97265c->enter($__internal_cb004139bf97d690f9b0200cb0141ebd31572f5389443685c684ba4cfb97265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb004139bf97d690f9b0200cb0141ebd31572f5389443685c684ba4cfb97265c->leave($__internal_cb004139bf97d690f9b0200cb0141ebd31572f5389443685c684ba4cfb97265c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b01c5d756826cef15d0ca95feb9089d5a0c3deffb3b619a675d6e1ae44ba635 = $this->env->getExtension("native_profiler");
        $__internal_6b01c5d756826cef15d0ca95feb9089d5a0c3deffb3b619a675d6e1ae44ba635->enter($__internal_6b01c5d756826cef15d0ca95feb9089d5a0c3deffb3b619a675d6e1ae44ba635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6b01c5d756826cef15d0ca95feb9089d5a0c3deffb3b619a675d6e1ae44ba635->leave($__internal_6b01c5d756826cef15d0ca95feb9089d5a0c3deffb3b619a675d6e1ae44ba635_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b45967784aba5261cf53270a1286b2ea61fb83858447494fce3d9b348a0e09f7 = $this->env->getExtension("native_profiler");
        $__internal_b45967784aba5261cf53270a1286b2ea61fb83858447494fce3d9b348a0e09f7->enter($__internal_b45967784aba5261cf53270a1286b2ea61fb83858447494fce3d9b348a0e09f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/underscore/underscore-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular-sanitize/angular-sanitize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular-nl2br/angular-nl2br.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/templates.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_b45967784aba5261cf53270a1286b2ea61fb83858447494fce3d9b348a0e09f7->leave($__internal_b45967784aba5261cf53270a1286b2ea61fb83858447494fce3d9b348a0e09f7_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_18245c6097e60b9cc4501abc7eee36ce7776fd9ededc5dfb643946f36c2f3f07 = $this->env->getExtension("native_profiler");
        $__internal_18245c6097e60b9cc4501abc7eee36ce7776fd9ededc5dfb643946f36c2f3f07->enter($__internal_18245c6097e60b9cc4501abc7eee36ce7776fd9ededc5dfb643946f36c2f3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <div ng-app=\"app\" ng-controller=\"IndexController\">
        <navigation></navigation>
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col s4 offset-s4\">
                        <note-new notes=\"notes\" ></note-new>
                    </div>
                    ";
        // line 49
        echo "                </div>
                <div masonry=\"{'gutter': 20}\" load-images=\"false\" preserve-order reload-on-resize class=\"row\">
                    <note class=\"masonry-brick\" ng-repeat=\"note in notes\" ng-style=\"{width:note.size}\" ></note>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_18245c6097e60b9cc4501abc7eee36ce7776fd9ededc5dfb643946f36c2f3f07->leave($__internal_18245c6097e60b9cc4501abc7eee36ce7776fd9ededc5dfb643946f36c2f3f07_prof);

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
        return array (  174 => 49,  164 => 36,  158 => 35,  148 => 31,  144 => 30,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  123 => 24,  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  66 => 10,  60 => 9,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*     <script src="{{ asset('bower_components/underscore/underscore-min.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/angular-sanitize/angular-sanitize.min.js') }}"></script>*/
/*     <script src="{{ asset('bower_components/angular-nl2br/angular-nl2br.min.js') }}"></script>*/
/*     */
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
/*                         <note-new notes="notes" ></note-new>*/
/*                     </div>*/
/*                     {#<div class='col s4' style="height: 50px;">*/
/*                         <a href="javascript:;" ng-click="" class="" style="display: inline-block; margin-top: 13px;"><i class="material-icons" style=" font-size: 50px;">view_module</i></a>*/
/*                         <a href="javascript:;" ng-click="" class="" style="display: inline-block; margin-top: 13px;"><i class="material-icons" style=" font-size: 50px;">view_view_list</i></a>*/
/*                         <a href="javascript:;" ng-click="" class="" style="display: inline-block; margin-top: 13px;"><i class="material-icons" style=" font-size: 50px;">view_quilt</i></a>*/
/*                     </div>#}*/
/*                 </div>*/
/*                 <div masonry="{'gutter': 20}" load-images="false" preserve-order reload-on-resize class="row">*/
/*                     <note class="masonry-brick" ng-repeat="note in notes" ng-style="{width:note.size}" ></note>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
