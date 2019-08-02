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

/* modular/home.html.twig */
class __TwigTemplate_40148888b2cc9a8dda1df763a6ca02af0f27e7edb65d95142a5eda53e5eaba0b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/home.html.twig"));

        // line 1
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-home page-hero target-section\" data-parallax=\"scroll\" data-image-src=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), [], "array"), "url", [], "method");
        echo "\"
         data-natural-width=\"3000\" data-natural-height=\"2000\" data-position-y=\"center\">


    <div class=\"home-content\">

        <div class=\"row home-content__main\">

            <h3>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>

            <h1>
                ";
        // line 13
        echo ($context["content"] ?? null);
        echo "
            </h1>

            <div class=\"home-content__buttons\">
                ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", [])) {
            // line 18
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 19
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", []);
            echo "
                    </a>
                ";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", [])) {
            // line 23
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 24
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", []);
            echo "
                    </a>
                ";
        }
        // line 27
        echo "            </div>

            <div class=\"home-content__scroll\">
                <a href=\"";
        // line 30
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button3Link", []);
        echo "\" class=\"scroll-link smoothscroll\">
                    <span>";
        // line 31
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button3Text", []);
        echo "</span>
                </a>
            </div>

        </div>

    </div> <!-- end home-content -->
    ";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "social", [])) {
            // line 39
            echo "        <ul class=\"home-social\">
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 41
                echo "                <li>
                    <a href=\"";
                // line 42
                echo $this->getAttribute($context["icon"], "socialIconLink", []);
                echo "\">
                        <i class=\"";
                // line 43
                echo $this->getAttribute($context["icon"], "socialIconClass", []);
                echo "\" aria-hidden=\"true\"></i>
                        <span>";
                // line 44
                echo $this->getAttribute($context["icon"], "socialIconText", []);
                echo "</span></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </ul> <!-- end home-social -->
    ";
        }
        // line 49
        echo "
</section> <!-- end s-home -->
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 49,  141 => 47,  132 => 44,  128 => 43,  124 => 42,  121 => 41,  117 => 40,  114 => 39,  112 => 38,  102 => 31,  98 => 30,  93 => 27,  87 => 24,  82 => 23,  79 => 22,  73 => 19,  68 => 18,  66 => 17,  59 => 13,  53 => 10,  42 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/home.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\themes\\hola\\templates\\modular\\home.html.twig");
    }
}
