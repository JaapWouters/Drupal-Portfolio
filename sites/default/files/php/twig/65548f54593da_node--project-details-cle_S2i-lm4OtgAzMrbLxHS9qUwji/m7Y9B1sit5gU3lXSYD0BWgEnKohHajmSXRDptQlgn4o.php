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

/* themes/custom/jaapw/templates/node--project-details-clean.html.twig */
class __TwigTemplate_58a4a77653c95784d3760fa81d3082a6 extends Template
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
        echo "<section class=\"section--project-details\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h2>
                   ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source));
        echo "
                </h2>
                <p>
                    ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_intro", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source));
        echo "
                </p>
            </div>
            ";
        // line 21
        echo "            <div class=\"col-6\">
                <img class=\"project-image\" src=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_media", [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22), "field_media_image", [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22), "uri", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "basic"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</section>

";
        // line 28
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/paragraphs.html.twig"), "themes/custom/jaapw/templates/node--project-details-clean.html.twig", 28)->display($context);
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/jaapw/templates/node--project-details-clean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  70 => 28,  61 => 22,  58 => 21,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jaapw/templates/node--project-details-clean.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\node--project-details-clean.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 28);
        static $filters = array("raw" => 6, "escape" => 22, "image_style" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['raw', 'escape', 'image_style'],
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
