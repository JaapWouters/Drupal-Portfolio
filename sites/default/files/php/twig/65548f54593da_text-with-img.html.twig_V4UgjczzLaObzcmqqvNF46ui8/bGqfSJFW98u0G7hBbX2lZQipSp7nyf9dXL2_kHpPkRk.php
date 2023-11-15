<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/jaapw/templates/partials/paragraphs/text-with-img.html.twig */
class __TwigTemplate_7a1ffa4ca20b61e3a6afa5f03a7a44e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"section--paragraph\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 5), "field_text", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5), 5, $this->source));
        echo "
            </div>
            <div class=\"col-5 offset-1\">
                ";
        // line 8
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 8), "field_media", [], "any", false, false, true, 8)) > 1)) {
            // line 9
            echo "                <div class=\"owl-carousel owl-theme carousel--media col--img--full\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 10), "field_media", [], "any", false, false, true, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 11
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "entity", [], "any", false, false, true, 11), "field_media_oembed_video", [], "any", false, false, true, 11)) {
                    // line 12
                    echo "                        <iframe class=\"refrence-image\" src=\"https://www.youtube.com/embed/";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "entity", [], "any", false, false, true, 12), "field_media_oembed_video", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), 17), "html", null, true);
                    echo "&autoplay=1&loop=1&mute=1&controls=0&rel=0&enablejsapi=1\"></iframe>
                    ";
                }
                // line 14
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "entity", [], "any", false, false, true, 14), "field_media_image", [], "any", false, false, true, 14)) {
                    // line 15
                    echo "                        <img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "entity", [], "any", false, false, true, 15), "field_media_image", [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "uri", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source), "basic"), "html", null, true);
                    echo "\" alt=\"\">
                    ";
                }
                // line 17
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </div>
                ";
        } else {
            // line 20
            echo "                <div class=\"col--img--full\">
                    ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 21), "field_media", [], "any", false, false, true, 21), "entity", [], "any", false, false, true, 21), "field_media_oembed_video", [], "any", false, false, true, 21)) {
                // line 22
                echo "                        <iframe class=\"refrence-image\" src=\"https://www.youtube.com/embed/";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 22), "field_media", [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22), "field_media_oembed_video", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), 17), "html", null, true);
                echo "\"></iframe>
                    ";
            }
            // line 24
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 24), "field_media", [], "any", false, false, true, 24), "entity", [], "any", false, false, true, 24), "field_media_image", [], "any", false, false, true, 24)) {
                // line 25
                echo "                        <img class=\"refrence-image\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 25), "field_media", [], "any", false, false, true, 25), "entity", [], "any", false, false, true, 25), "field_media_image", [], "any", false, false, true, 25), "entity", [], "any", false, false, true, 25), "uri", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source), "basic"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 27
            echo "                </div>
                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/jaapw/templates/partials/paragraphs/text-with-img.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  108 => 27,  102 => 25,  99 => 24,  93 => 22,  91 => 21,  88 => 20,  84 => 18,  78 => 17,  72 => 15,  69 => 14,  63 => 12,  60 => 11,  56 => 10,  53 => 9,  51 => 8,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jaapw/templates/partials/paragraphs/text-with-img.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\partials\\paragraphs\\text-with-img.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "for" => 10);
        static $filters = array("raw" => 5, "length" => 8, "escape" => 12, "slice" => 12, "image_style" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw', 'length', 'escape', 'slice', 'image_style'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
