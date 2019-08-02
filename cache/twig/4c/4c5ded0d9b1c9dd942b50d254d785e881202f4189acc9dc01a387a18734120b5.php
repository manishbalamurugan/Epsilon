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

/* blog.html.twig */
class __TwigTemplate_d59a6d551e7c69e838ff9277830ed9c7470df994fbfbb4d82b1a559e33515ce7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog.html.twig"));

        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("blog_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"))], "method");
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 10
                echo "
            <section class=\"page-header page-hero\" style=\"background-image:url(";
                // line 11
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "media", []), $this->getAttribute($this->getAttribute($context["child"], "header", []), "hero_image", []), [], "array"), "url", [], "method");
                echo ")\">

                <div class=\"row page-header__content\">
                    <article class=\"col-full\">

                        <div class=\"page-header__info\">
                            <div class=\"page-header__cat\">
                                ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "taxonomy", []), "category", []));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 19
                    echo "                                    <a href=\"";
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
                // line 21
                echo "                            </div>
                            <div class=\"page-header__date\">
                                ";
                // line 23
                echo twig_date_format_filter($this->env, $this->getAttribute($context["child"], "date", []), "F d, Y");
                echo "
                            </div>
                        </div>

                        <h1 class=\"page-header__title\">
                            <a href=\"";
                // line 28
                echo $this->getAttribute($context["child"], "url", []);
                echo "\" title=\"\">
                                ";
                // line 29
                echo $this->getAttribute($context["child"], "title", []);
                echo "
                            </a>
                        </h1>
                        <p>";
                // line 32
                echo twig_slice($this->env, $this->getAttribute($context["child"], "content", []), 0, 150);
                echo "...</p>
                        <p>
                            <a href=\"";
                // line 34
                echo $this->getAttribute($context["child"], "url", []);
                echo "\" class=\"btn btn--stroke page-header__btn\">Read More</a>
                        </p>
                    </article>
                </div>

            </section> <!-- end highlighted-post -->

        ";
            }
            // line 42
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    <div class=\"blog-content-wrap\">
        <div class=\"row blog-content\">
            <div class=\"col-full\">
                <div class=\"blog-list block-1-2 block-tab-full\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 49
            echo "                        ";
            if ( !$this->getAttribute($context["loop"], "first", [])) {
                // line 50
                echo "                            <article class=\"col-block\">

                                <div class=\"blog-date\">
                                    <a href=\"";
                // line 53
                echo $this->getAttribute($context["child"], "url", []);
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["child"], "date", []), "F d, Y");
                echo "</a>
                                </div>

                                <h2 class=\"h01\">
                                    <a href=\"";
                // line 57
                echo $this->getAttribute($context["child"], "link", []);
                echo "\">";
                echo $this->getAttribute($context["child"], "title", []);
                echo "</a>
                                </h2>
                                <p>
                                    ";
                // line 60
                echo twig_slice($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "lead", []), 0.299999999999999988897769753748434595763683319091796875);
                echo "
                                </p>

                                <div class=\"blog-cat\">
                                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "header", []), "taxonomy", []), "category", []));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 65
                    echo "                                        <a href=\"";
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
                // line 67
                echo "
                                </div>

                            </article>
                        ";
            }
            // line 72
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </div>
                ";
        // line 74
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 75
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 75)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(            // line 76
($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(            // line 77
($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 79
            echo "                ";
        }
        // line 80
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 80,  267 => 79,  265 => 77,  264 => 76,  262 => 75,  260 => 74,  257 => 73,  243 => 72,  236 => 67,  223 => 65,  219 => 64,  212 => 60,  204 => 57,  195 => 53,  190 => 50,  187 => 49,  170 => 48,  163 => 43,  149 => 42,  138 => 34,  133 => 32,  127 => 29,  123 => 28,  115 => 23,  111 => 21,  98 => 19,  94 => 18,  84 => 11,  81 => 10,  78 => 9,  60 => 8,  54 => 7,  46 => 1,  44 => 5,  42 => 4,  40 => 3,  38 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "blog.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\themes\\hola\\templates\\blog.html.twig");
    }
}
