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

/* themes/custom/jaapw/templates/partials/paragraphs.html.twig */
class __TwigTemplate_df552b2e677b1e8f08a09f361533f1b7 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_content", [], "any", false, false, true, 1)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_content", [], "any", false, false, true, 2));
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
            foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
                // line 3
                echo "    ";
                $context["paragraphType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paragraph"], "entity", [], "any", false, false, true, 3), "type", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3), 0, [], "any", false, false, true, 3), "target_id", [], "any", false, false, true, 3);
                // line 4
                echo "
    ";
                // line 5
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paragraph"], "entity", [], "any", false, false, true, 5), "field_hidden", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5) == "1")) {
                    // line 6
                    echo "
    ";
                } else {
                    // line 8
                    echo "      ";
                    if ((($context["paragraphType"] ?? null) == "text_with_image")) {
                        // line 9
                        echo "        ";
                        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/paragraphs/text-with-img.html.twig"), "themes/custom/jaapw/templates/partials/paragraphs.html.twig", 9)->display($context);
                        // line 10
                        echo "      ";
                    }
                    // line 11
                    echo "      ";
                    if ((($context["paragraphType"] ?? null) == "text_with_image_left")) {
                        // line 12
                        echo "        ";
                        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/paragraphs/text-with-img-left.html.twig"), "themes/custom/jaapw/templates/partials/paragraphs.html.twig", 12)->display($context);
                        // line 13
                        echo "      ";
                    }
                    // line 14
                    echo "      ";
                    if ((($context["paragraphType"] ?? null) == "text")) {
                        // line 15
                        echo "        ";
                        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/paragraphs/text.html.twig"), "themes/custom/jaapw/templates/partials/paragraphs.html.twig", 15)->display($context);
                        // line 16
                        echo "      ";
                    }
                    // line 17
                    echo "      ";
                    if ((($context["paragraphType"] ?? null) == "img")) {
                        // line 18
                        echo "        ";
                        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/paragraphs/img.html.twig"), "themes/custom/jaapw/templates/partials/paragraphs.html.twig", 18)->display($context);
                        // line 19
                        echo "      ";
                    }
                    // line 20
                    echo "    ";
                }
                // line 21
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
";
        }
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/jaapw/templates/partials/paragraphs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  124 => 22,  110 => 21,  107 => 20,  104 => 19,  101 => 18,  98 => 17,  95 => 16,  92 => 15,  89 => 14,  86 => 13,  83 => 12,  80 => 11,  77 => 10,  74 => 9,  71 => 8,  67 => 6,  65 => 5,  62 => 4,  59 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if node.field_content %}
  {% for paragraph in node.field_content %}
    {% set paragraphType = paragraph.entity.type.value.0.target_id %}

    {% if paragraph.entity.field_hidden.value == '1' %}

    {% else %}
      {% if paragraphType == 'text_with_image' %}
        {% include directory ~ '/templates/partials/paragraphs/text-with-img.html.twig' %}
      {% endif %}
      {% if paragraphType == 'text_with_image_left' %}
        {% include directory ~ '/templates/partials/paragraphs/text-with-img-left.html.twig' %}
      {% endif %}
      {% if paragraphType == 'text' %}
        {% include directory ~ '/templates/partials/paragraphs/text.html.twig' %}
      {% endif %}
      {% if paragraphType == 'img' %}
        {% include directory ~ '/templates/partials/paragraphs/img.html.twig' %}
      {% endif %}
    {% endif %}
  {% endfor %}

{% endif %}

", "themes/custom/jaapw/templates/partials/paragraphs.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\partials\\paragraphs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 2, "set" => 3, "include" => 9);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'include'],
                [],
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
