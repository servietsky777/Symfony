<?php

/* PortfolioPortfolioBundle:Portfolio:login.html.twig */
class __TwigTemplate_6c0a73ee84d71d66b45aedcc7b8f3429bc0da1f9857ffafc055a99cbc160ec6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PortfolioPortfolioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PortfolioPortfolioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Portfolio - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"col-md-10 col-md-offset-1 img-thumbnail\"><br/>
\t\t\t\t<span class=\"col-md-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">Please sign in</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Password\" name=\"_password\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\"> Remember Me
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button id=\"contact-submit\" type=\"submit\" class=\"btn btn-primary\">Login</button>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t\t<span class=\"col-md-9\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">Register</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"form\" name=\"addArticle\" method=\"post\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "<br/>
\t\t\t\t\t\t\t\t\t\t<button id=\"contact-submit\" type=\"submit\" class=\"btn btn-primary\">Register</button>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  84 => 21,  70 => 24,  181 => 80,  174 => 76,  165 => 69,  114 => 40,  110 => 39,  65 => 23,  222 => 102,  216 => 98,  212 => 96,  210 => 95,  160 => 61,  124 => 55,  100 => 52,  20 => 1,  81 => 23,  53 => 14,  113 => 36,  97 => 34,  77 => 38,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 103,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 57,  132 => 56,  128 => 51,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 102,  235 => 74,  230 => 82,  227 => 81,  224 => 104,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 34,  71 => 23,  67 => 23,  63 => 15,  59 => 20,  38 => 13,  94 => 29,  89 => 48,  85 => 25,  75 => 18,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 12,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 59,  142 => 52,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 36,  91 => 53,  62 => 14,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 18,  72 => 16,  69 => 33,  47 => 14,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 48,  123 => 49,  120 => 48,  115 => 36,  111 => 35,  108 => 53,  101 => 49,  98 => 31,  96 => 47,  83 => 25,  74 => 21,  66 => 18,  55 => 15,  52 => 13,  50 => 14,  43 => 10,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 66,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 40,  122 => 41,  116 => 54,  112 => 42,  109 => 34,  106 => 11,  103 => 10,  99 => 31,  95 => 28,  92 => 21,  86 => 30,  82 => 20,  80 => 19,  73 => 28,  64 => 19,  60 => 23,  57 => 15,  54 => 18,  51 => 15,  48 => 12,  45 => 11,  42 => 8,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}
