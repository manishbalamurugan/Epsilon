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

/* modular/works.html.twig */
class __TwigTemplate_8690bc6b3682ac986c72ba266f0adb3327a5740347062e03685f2c7c2833d978 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/works.html.twig"));

        // line 1
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-works ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">


    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full\">
            <h3>";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo ".</h1>

            <p class=\"lead\">";
        // line 10
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</p>
        </div>
    </div>

    <div class=\"row masonry-wrap\">
        <div class=\"masonry\">

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "
                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"gallery-wrapper\">
                            <div class=\"item-folio__thumb\">
                                <a href=\"";
            // line 24
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array"), "url", [], "method");
            echo "\" class=\"thumb-link\" title=\"Epsilon Academics\" data-size=\"1050x700\">
                                    <img src=\"";
            // line 25
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array"), "url", []);
            echo "\"
                                         srcset=\"";
            // line 26
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "imageSize1", []), [], "array"), "url", []);
            echo " 1x, ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "imageSize2", []), [], "array"), "url", []);
            echo " 2x\" alt=\"\">
                                    <span class=\"shadow-overlay\"></span>
                                </a>
                            </div>

                            <div class=\"item-folio__text\">
                                <h3 class=\"item-folio__title\">
                                    ";
            // line 33
            echo $this->getAttribute($context["item"], "title", []);
            echo "
                                </h3>
                                <p class=\"item-folio__cat\">
                                    ";
            // line 36
            echo $this->getAttribute($context["item"], "category", []);
            echo "
                                </p>
                            </div>

                            <div class=\"item-folio__caption\">
                                <p>";
            // line 41
            echo $this->getAttribute($context["item"], "description", []);
            echo "</p>
                            </div>
                        </div>

                        <a href=\"";
            // line 45
            echo $this->getAttribute($context["item"], "link", []);
            echo "\" target=\"_blank\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"fa fa-link\"></i>
                        </a>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        </div>
    </div> <!-- end masonry -->

</section> <!-- end works -->

<div aria-hidden=\"true\" class=\"pswp\" role=\"dialog\" tabindex=\"-1\">

    <div class=\"pswp__bg\"></div>
    <div class=\"pswp__scroll-wrap\">

        <div class=\"pswp__container\">
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
        </div>

        <div class=\"pswp__ui pswp__ui--hidden\">
            <div class=\"pswp__top-bar\">
                <div class=\"pswp__counter\"></div>
                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
                <button class=\"pswp__button pswp__button--share\" title=\"Share\"></button>
                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>
                <div class=\"pswp__preloader\">
                    <div class=\"pswp__preloader__icn\">
                        <div class=\"pswp__preloader__cut\">
                            <div class=\"pswp__preloader__donut\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                <div class=\"pswp__share-tooltip\"></div>
            </div>
            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>
            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>
            <div class=\"pswp__caption\">
                <div class=\"pswp__caption__center\"></div>
            </div>
        </div>

    </div>

</div> <!-- end photoSwipe background -->

<div id=\"preloader\">
    <div id=\"loader\"></div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  122 => 45,  115 => 41,  107 => 36,  101 => 33,  89 => 26,  85 => 25,  81 => 24,  73 => 18,  69 => 17,  59 => 10,  54 => 8,  50 => 7,  42 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/works.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\themes\\hola\\templates\\modular\\works.html.twig");
    }
}
