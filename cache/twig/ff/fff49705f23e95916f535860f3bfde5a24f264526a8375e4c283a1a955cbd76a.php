<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* item.html.twig */
class __TwigTemplate_af9180d9f1c9e9713111d0a2608bbb0906e1775548ab87879ff58ca15a9686b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "item.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <article class=\"blog-single\">

        <!-- page header/blog hero ================================================== -->
        <div class=\"page-header page-header--single page-hero\" style=\"background-image:url(";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array"), "url", [], "method");
        echo ")\">

            <div class=\"row page-header__content narrow\">
                <article class=\"col-full\">
                    <div class=\"page-header__info\">
                        <div class=\"page-header__cat\">
                            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "taxonomy", []), "category", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "                                <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "/category:";
            echo $context["category"];
            echo "\">";
            echo $context["category"];
            echo "</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
                        </div>
                    </div>
                    <h1 class=\"page-header__title\">
                        <a href=\"";
        // line 20
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\" title=\"\">
                            ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
                        </a>
                    </h1>
                    <ul class=\"page-header__meta\">
                        <li class=\"date\">";
        // line 25
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "F d, Y");
        echo "</li>
                        <li class=\"author\">
                            By
                            <span>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "taxonomy", []), "author", []));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 30
            echo "                                    ";
            echo $context["author"];
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </span>
                        </li>
                    </ul>

                </article>
            </div>

        </div> <!-- end page-header -->

        <div class=\"row blog-content\">
            <div class=\"col-full blog-content__main\">

                <p class=\"lead\">";
        // line 44
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lead", []);
        echo "</p>

                ";
        // line 46
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

                <p class=\"blog-content__tags\">
                    <span>Post Tags</span>

                    <span class=\"blog-content__tag-list\">
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "taxonomy", []), "tag", []));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 53
            echo "                            <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", [0 => true], "method");
            echo "/tag:";
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </span>

                </p>

                <div class=\"blog-content__pagenav\">
                    <div class=\"blog-content__nav\">
                        <div class=\"blog-content__prev\">
                            ";
        // line 62
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 63
            echo "                                <a class=\"button\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
            echo "\">
                                    <span>Next Post</span>";
            // line 64
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "title", []);
            echo "</a>
                            ";
        }
        // line 66
        echo "                        </div>
                        <div class=\"blog-content__next\">
                            ";
        // line 68
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 69
            echo "                                <a class=\"button\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
            echo "\">
                                    <span>Previus Post</span>
                                    ";
            // line 71
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "title", []);
            echo "</a>
                            ";
        }
        // line 73
        echo "                        </div>
                    </div>

                    <div class=\"blog-content__all\">
                        <a href=\"";
        // line 77
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", [], "method");
        echo "\" class=\"btn btn--primary\">
                            View All Post
                        </a>
                    </div>
                </div>

            </div> <!-- end blog-content__main -->
        </div> <!-- end blog-content -->

    </article>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 77,  203 => 73,  198 => 71,  192 => 69,  190 => 68,  186 => 66,  181 => 64,  176 => 63,  174 => 62,  165 => 55,  152 => 53,  148 => 52,  139 => 46,  134 => 44,  120 => 32,  111 => 30,  107 => 29,  100 => 25,  93 => 21,  89 => 20,  83 => 16,  70 => 14,  66 => 13,  57 => 7,  51 => 3,  45 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "item.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\themes\\hola\\templates\\item.html.twig");
    }
}
