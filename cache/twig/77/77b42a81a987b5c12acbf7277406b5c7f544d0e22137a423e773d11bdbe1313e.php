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

/* partials/navigation.html.twig */
class __TwigTemplate_af5bf3860aedd83ad7f289ddf5302a7b111c98406d2219a09b8ae44cc4034c27 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation.html.twig"));

        // line 29
        echo "<ul class=\"header-nav\">
    ";
        // line 32
        echo "    ";
        $context["home"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/"], "method");
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["home"] ?? null), "collection", []));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo "        ";
            $context["current_module"] = ((($this->getAttribute($context["module"], "active", []) || $this->getAttribute($context["module"], "activeChild", []))) ? ("current") : (""));
            // line 35
            echo "
        ";
            // line 36
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute($context["module"], "redirect", []));
            echo "

        ";
            // line 38
            if ($this->getAttribute($this->getAttribute($context["module"], "header", []), "visible", [])) {
                // line 39
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "slug", []) == "home") && $this->getAttribute($context["module"], "modular_link", []))) {
                    // line 40
                    echo "                <li class=\" ";
                    echo ($context["current_module"] ?? null);
                    echo " \">
                    <a class=\"smoothscroll\"
                       href=\"#";
                    // line 42
                    if ($this->getAttribute($context["module"], "redirect", [])) {
                        echo $this->getAttribute($context["module"], "redirect", []);
                    } else {
                        echo $this->getAttribute($context["module"], "modular_link", []);
                    }
                    echo "\">";
                    echo $this->getAttribute($context["module"], "item_name", []);
                    echo "</a>
                </li>
            ";
                } elseif ((($this->getAttribute(                // line 44
($context["page"] ?? null), "slug", []) == "home") &&  !$this->getAttribute($context["module"], "modular_link", []))) {
                    // line 45
                    echo "                <li class=\" ";
                    echo ($context["current_module"] ?? null);
                    echo " \">
                    <a class=\"smoothscroll\"
                       href=\"#";
                    // line 47
                    if ($this->getAttribute($context["module"], "redirect", [])) {
                        echo $this->getAttribute($context["module"], "redirect", []);
                    } else {
                        echo $this->getAttribute($context["module"], "menu", []);
                    }
                    echo "\">";
                    echo $this->getAttribute($context["module"], "menu", []);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 50
                    echo "                <li class=\" ";
                    echo ($context["current_module"] ?? null);
                    echo " \">
                    <a href=\"";
                    // line 51
                    echo ($context["base_url_relative"] ?? null);
                    echo "#";
                    echo $this->getAttribute($context["module"], "menu", []);
                    echo "\">
                        ";
                    // line 52
                    echo $this->getAttribute($context["module"], "menu", []);
                    echo "
                    </a>
                </li>
            ";
                }
                // line 56
                echo "        ";
            }
            // line 57
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 60
            echo "        ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("current") : (""));
            // line 61
            echo "        <li class=\"";
            echo ($context["current_page"] ?? null);
            echo "\">
            <a href=\"";
            // line 62
            echo $this->getAttribute($context["page"], "url", []);
            echo "\">
                ";
            // line 63
            if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                // line 64
                echo "                    <i class=\"fa fa-";
                echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                echo "\"></i>
                ";
            }
            // line 66
            echo "                ";
            echo $this->getAttribute($context["page"], "menu", []);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</ul>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "loop"));

            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("current") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "            <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 7
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        // line 8
                        echo "                        <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>
                    ";
                    }
                    // line 10
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                    <span></span>
                </a>
                <ul>
                    ";
                    // line 14
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 18
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 19
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 20
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        // line 21
                        echo "                        <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>
                    ";
                    }
                    // line 23
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 27
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "pageLinkName"));

            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]);
            echo "
    ";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 30,  253 => 27,  245 => 23,  239 => 21,  237 => 20,  233 => 19,  228 => 18,  221 => 14,  213 => 10,  207 => 8,  205 => 7,  201 => 6,  196 => 5,  193 => 4,  190 => 3,  185 => 2,  170 => 1,  162 => 70,  151 => 66,  145 => 64,  143 => 63,  139 => 62,  134 => 61,  131 => 60,  127 => 59,  124 => 58,  118 => 57,  115 => 56,  108 => 52,  102 => 51,  97 => 50,  85 => 47,  79 => 45,  77 => 44,  66 => 42,  60 => 40,  57 => 39,  55 => 38,  50 => 36,  47 => 35,  44 => 34,  39 => 33,  36 => 32,  33 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/navigation.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\themes\\hola\\templates\\partials\\navigation.html.twig");
    }
}
