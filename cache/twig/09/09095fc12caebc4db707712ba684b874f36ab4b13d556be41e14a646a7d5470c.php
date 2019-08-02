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

/* modular/contact.html.twig */
class __TwigTemplate_4aee0353b819f19903c4b12c3aa686992dfb61bbe7e0aeaec74c6b9a41698b77 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/contact.html.twig"));

        // line 1
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-contact target-section\"
         style=\"background: url(";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), [], "array"), "url", []);
        echo ");background-position: center;\">

    <div class=\"overlay\" style=\"opacity:";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "opacity", []);
        echo ";\"></div>

    <div class=\"row narrow section-intro\">
        <div class=\"col-full\">
            <h3>";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>

            <p class=\"lead\">";
        // line 12
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</p>
        </div>
    </div>

    <div class=\"row contact__main\">
        <div class=\"col-eight tab-full contact__form\">
            ";
        // line 18
        $this->loadTemplate("forms/form.html.twig", "modular/contact.html.twig", 18)->display($context);
        // line 19
        echo "            <!-- contact-warning -->
            <div class=\"message-warning\">
                Something went wrong. Please try again.
            </div>

            <!-- contact-success -->
            <div class=\"message-success\">
                Your message was sent, thank you!<br>
            </div>

        </div>
        <div class=\"col-four tab-full contact__infos\">
            <h4 class=\"h06\">";
        // line 31
        echo $this->getAttribute(($context["header"] ?? null), "phoneTitle", []);
        echo "</h4>
            <p>";
        // line 32
        echo $this->getAttribute(($context["header"] ?? null), "phonePhone", []);
        echo "<br>
                ";
        // line 33
        echo $this->getAttribute(($context["header"] ?? null), "phoneMobile", []);
        echo "<br>
                ";
        // line 34
        echo $this->getAttribute(($context["header"] ?? null), "phoneFax", []);
        echo "
            </p>

            <h4 class=\"h06\">";
        // line 37
        echo $this->getAttribute(($context["header"] ?? null), "emailTitle", []);
        echo "</h4>
            <p>";
        // line 38
        echo twig_replace_filter($this->getAttribute(($context["header"] ?? null), "emailAddress", []), ["," => "<br>"]);
        echo "
            </p>

            <h4 class=\"h06\">";
        // line 41
        echo $this->getAttribute(($context["header"] ?? null), "addressTitle", []);
        echo "</h4>
            <p>
                ";
        // line 43
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["header"] ?? null), "addressDetails", []));
        echo "
            </p>
        </div>

    </div>

    <script>
        \$(document).ready(function () {
            var form = \$('.contact__main form');
            form.submit(function (e) {
                // prevent form submission
                e.preventDefault();
                // submit the form via Ajax
                \$.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    dataType: 'html',
                    data: form.serialize(),
                    success: function (result) {
                        // Inject the result in the HTML
                        \$('.message-success').show();
                        \$('.message-success').html(result);
                    }
                });
            });
        });
    </script>

</section>
<!-- end s-contact -->";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 43,  117 => 41,  111 => 38,  107 => 37,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  75 => 19,  73 => 18,  64 => 12,  59 => 10,  55 => 9,  48 => 5,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/contact.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\themes\\hola\\templates\\modular\\contact.html.twig");
    }
}
