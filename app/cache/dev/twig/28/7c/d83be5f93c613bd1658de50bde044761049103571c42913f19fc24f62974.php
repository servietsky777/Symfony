<?php

/* PortfolioPortfolioBundle:Portfolio:articles.html.twig */
class __TwigTemplate_287cd83be5f93c613bd1658de50bde044761049103571c42913f19fc24f62974 extends Twig_Template
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
        echo "\t\t<div class=\".col-md-12\">
\t\t\t\t<h2>Articles</h2>
\t\t\t\t<div>
\t\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["key"] => $context["article"]) {
            // line 12
            echo "\t\t\t\t\t";
            if ((((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) % 2) == 0)) {
                echo "</div><div class=\"row\">";
            }
            // line 13
            echo "\t\t\t\t\t<span class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"img-thumbnail\">
\t\t\t\t\t\t\t<h3><a href=\"/Symfony/web/app_dev.php/article/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t<a href=\"/Symfony/web/app_dev.php/article/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Jellyfish.jpg"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"Test\"></a><br/><br/>
\t\t\t\t\t\t\t<p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p><b>Made by ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "autor"), "html", null, true);
            echo "</b></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</span>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  76 => 18,  72 => 17,  66 => 16,  60 => 15,  56 => 13,  51 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
