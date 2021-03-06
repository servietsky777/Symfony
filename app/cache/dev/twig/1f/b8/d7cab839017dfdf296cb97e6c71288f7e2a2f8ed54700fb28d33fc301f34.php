<?php

/* PortfolioPortfolioBundle:Portfolio:contact.html.twig */
class __TwigTemplate_1fb8d7cab839017dfdf296cb97e6c71288f7e2a2f8ed54700fb28d33fc301f34 extends Twig_Template
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
\t\t<div class=\"col-md-12\"><br/>
\t\t\t<div class=\"col-md-8 img-thumbnail\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>Contact me!</h3>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t<strong>Email:</strong> <a href=\"mailto:#\"> name@domain.com</a><br><br>
\t\t\t\t\t\t\t<strong>Phone:</strong> (555)123-4567
\t\t\t\t\t\t</address>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-form\">
\t\t\t\t\t<form id=\"contact\" method=\"post\" class=\"form\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Name\" type=\"text\" required autofocus />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\" type=\"email\" required />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Message\" rows=\"5\"></textarea>
\t\t\t\t\t\t\t\t<br />\t\t\t\t\t\t\t\t<button class=\"btn btn-warning pull-right\" type=\"submit\">Send</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  84 => 21,  70 => 15,  181 => 80,  174 => 76,  165 => 69,  114 => 40,  110 => 39,  65 => 23,  222 => 102,  216 => 98,  212 => 96,  210 => 95,  160 => 61,  124 => 55,  100 => 52,  20 => 1,  81 => 23,  53 => 14,  113 => 36,  97 => 34,  77 => 38,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 103,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 57,  132 => 56,  128 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 102,  235 => 74,  230 => 82,  227 => 81,  224 => 104,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 34,  71 => 23,  67 => 15,  63 => 18,  59 => 17,  38 => 13,  94 => 29,  89 => 48,  85 => 25,  75 => 18,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 12,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 59,  142 => 52,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 36,  91 => 53,  62 => 14,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 18,  72 => 16,  69 => 33,  47 => 14,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 48,  123 => 49,  120 => 48,  115 => 36,  111 => 35,  108 => 53,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 21,  66 => 18,  55 => 15,  52 => 13,  50 => 14,  43 => 10,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 66,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 40,  122 => 41,  116 => 54,  112 => 42,  109 => 34,  106 => 11,  103 => 10,  99 => 31,  95 => 28,  92 => 21,  86 => 30,  82 => 20,  80 => 19,  73 => 28,  64 => 19,  60 => 23,  57 => 15,  54 => 15,  51 => 15,  48 => 12,  45 => 11,  42 => 8,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}
