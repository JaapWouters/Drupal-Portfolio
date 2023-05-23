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

/* themes/custom/jaapw/templates/partials/paragraphs/text-with-img-left.html.twig */
class __TwigTemplate_b8ab44ddae2c1052a982e99bb1466c6f extends Template
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
            <div class=\"col-5\">
                <img class=\"refrence-image\" src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 5), "field_media_left", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "field_media_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5), 5, $this->source), "basic"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"col-6 offset-1\">
                ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "entity", [], "any", false, false, true, 8), "field_text", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), 8, $this->source));
        echo "
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/jaapw/templates/partials/paragraphs/text-with-img-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section--paragraph\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-5\">
                <img class=\"refrence-image\" src=\"{{ paragraph.entity.field_media_left.entity.field_media_image.entity.uri.value | image_style('basic') }}\" alt=\"\">
            </div>
            <div class=\"col-6 offset-1\">
                {{ paragraph.entity.field_text.value | raw }}
            </div>
        </div>
    </div>
</section>", "themes/custom/jaapw/templates/partials/paragraphs/text-with-img-left.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\partials\\paragraphs\\text-with-img-left.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5, "image_style" => 5, "raw" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'image_style', 'raw'],
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
