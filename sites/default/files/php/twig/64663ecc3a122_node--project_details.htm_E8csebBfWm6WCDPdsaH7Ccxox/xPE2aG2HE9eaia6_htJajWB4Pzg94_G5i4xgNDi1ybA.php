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

/* themes/custom/jaapw/templates/node--project_details.html.twig */
class __TwigTemplate_475918f05c41bd6800a0c7a63769c1fb extends Template
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
            <div class=\"col-6\">
                <img class=\"project-image\" src=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_media", [], "any", false, false, true, 13), "entity", [], "any", false, false, true, 13), "field_media_image", [], "any", false, false, true, 13), "entity", [], "any", false, false, true, 13), "uri", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source), "basic"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</section>

<section class=\"section--intro\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <div class=\"row\">
                    <h3>Introduction</h3>
                    ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_introduction", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source));
        echo "
                    </div>
                <div class=\"row\">
                    <h3>Research Questions</h3>
                    ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_research_questions", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source));
        echo "
                </div>
                <div class=\"row\">
                <h3>CMD Methods</h3>
                    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cmd_methods", [], "any", false, false, true, 33)) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cmd_methods", [], "any", false, false, true, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
                // line 35
                echo "                    ";
                $context["paragraphType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paragraph"], "entity", [], "any", false, false, true, 35), "type", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), 0, [], "any", false, false, true, 35), "target_id", [], "any", false, false, true, 35);
                // line 36
                echo "                
                    ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paragraph"], "entity", [], "any", false, false, true, 37), "field_hidden", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37) == "1")) {
                    // line 38
                    echo "                    ";
                } else {
                    // line 39
                    echo "                        ";
                    if ((($context["paragraphType"] ?? null) == "cmd_method")) {
                        // line 40
                        echo "                        <div class=\"col-12 col-dot\">
                            <div class=\"dot-content\">
                            ";
                        // line 42
                        $context["type"] = twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paragraph"], "entity", [], "any", false, false, true, 42), "field_cmd_methods", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source), ":", 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 42, $this->source));
                        // line 43
                        echo "                            ";
                        $context["method"] = (($__internal_compile_1 = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paragraph"], "entity", [], "any", false, false, true, 43), "field_cmd_methods", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), 43, $this->source), ":", 2)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null);
                        // line 44
                        echo "                            <img class=\"dot-img\" src=\"/drupal/themes/custom/jaapw/images/logo-";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 44, $this->source), "html", null, true);
                        echo ".png\" alt=\"\">
                            <h5 class=\"dot-title\" style=\"color: var(--";
                        // line 45
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 45, $this->source), [" " => ""]), "html", null, true);
                        echo ")\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 45, $this->source))), "html", null, true);
                        echo " ";
                        if ((($context["type"] ?? null) == "other")) {
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paragraph"], "entity", [], "any", false, false, true, 45), "field_text", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source)), "html", null, true);
                        }
                        echo "</h5>
                            </div>
                            ";
                        // line 47
                        if ((($context["type"] ?? null) != "other")) {
                            // line 48
                            echo "                        ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paragraph"], "entity", [], "any", false, false, true, 48), "field_text", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48), 48, $this->source));
                            echo "
                            ";
                        }
                        // line 50
                        echo "                        </div>
                        ";
                    }
                    // line 52
                    echo "                    ";
                }
                // line 53
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                
                ";
        }
        // line 56
        echo "                </div>
            </div>
            <div class=\"col-5 offset-1\">
                <img class=\"refrence-image\" src=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_intro_image", [], "any", false, false, true, 59), "entity", [], "any", false, false, true, 59), "field_media_image", [], "any", false, false, true, 59), "entity", [], "any", false, false, true, 59), "uri", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), 59, $this->source), "basic"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</section>

";
        // line 65
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/paragraphs.html.twig"), "themes/custom/jaapw/templates/node--project_details.html.twig", 65)->display($context);
        // line 66
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/jaapw/templates/node--project_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  173 => 65,  164 => 59,  159 => 56,  155 => 54,  149 => 53,  146 => 52,  142 => 50,  136 => 48,  134 => 47,  123 => 45,  118 => 44,  115 => 43,  113 => 42,  109 => 40,  106 => 39,  103 => 38,  101 => 37,  98 => 36,  95 => 35,  90 => 34,  88 => 33,  81 => 29,  74 => 25,  59 => 13,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section--project-details\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h2>
                   {{ node.title.value | raw }}
                </h2>
                <p>
                    {{ node.field_intro.value | raw }}
                </p>
            </div>
            <div class=\"col-6\">
                <img class=\"project-image\" src=\"{{ node.field_media.entity.field_media_image.entity.uri.value | image_style('basic')}}\" alt=\"\">
            </div>
        </div>
    </div>
</section>

<section class=\"section--intro\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <div class=\"row\">
                    <h3>Introduction</h3>
                    {{ node.field_introduction.value | raw }}
                    </div>
                <div class=\"row\">
                    <h3>Research Questions</h3>
                    {{ node.field_research_questions.value | raw }}
                </div>
                <div class=\"row\">
                <h3>CMD Methods</h3>
                    {% if node.field_cmd_methods %}
                    {% for paragraph in node.field_cmd_methods %}
                    {% set paragraphType = paragraph.entity.type.value.0.target_id %}
                
                    {% if paragraph.entity.field_hidden.value == '1' %}
                    {% else %}
                        {% if paragraphType == 'cmd_method' %}
                        <div class=\"col-12 col-dot\">
                            <div class=\"dot-content\">
                            {% set type = paragraph.entity.field_cmd_methods.value | split(':', 2)[0] | lower %}
                            {% set method = paragraph.entity.field_cmd_methods.value | split(':', 2)[1] %}
                            <img class=\"dot-img\" src=\"/drupal/themes/custom/jaapw/images/logo-{{ type }}.png\" alt=\"\">
                            <h5 class=\"dot-title\" style=\"color: var(--{{ type | replace({' ':''})}})\">{{ method | trim | capitalize}} {% if type == 'other' %}{{ paragraph.entity.field_text.value | raw | striptags}}{% endif %}</h5>
                            </div>
                            {% if type != 'other' %}
                        {{ paragraph.entity.field_text.value | raw }}
                            {% endif %}
                        </div>
                        {% endif %}
                    {% endif %}
                    {% endfor %}
                
                {% endif %}
                </div>
            </div>
            <div class=\"col-5 offset-1\">
                <img class=\"refrence-image\" src=\"{{ node.field_intro_image.entity.field_media_image.entity.uri.value | image_style('basic')}}\" alt=\"\">
            </div>
        </div>
    </div>
</section>

{% include directory ~ '/templates/partials/paragraphs.html.twig' %}

{# 
<section class=\"section--1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h3>
                    Introduction
                </h3>
                <p>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                </p>
                <br>
                <h3>
                    Research Questions
                </h3>
                <p>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                </p>
                <br>
                <h3>
                    CMD Methods
                </h3>
                <p>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                </p>
                <img class=\"cmd-icon\" src=\"/drupal/themes/custom/jaapw/images/logo-library.png\" alt=\"\">
                <img class=\"cmd-icon\" src=\"/drupal/themes/custom/jaapw/images/logo-field.png\" alt=\"\">
                <img class=\"cmd-icon\" src=\"/drupal/themes/custom/jaapw/images/logo-lab.png\" alt=\"\">
                <img class=\"cmd-icon\" src=\"/drupal/themes/custom/jaapw/images/logo-showroom.png\" alt=\"\">
                <img class=\"cmd-icon\" src=\"/drupal/themes/custom/jaapw/images/logo-workshop.png\" alt=\"\">
                <img class=\"cmd-icon\" src=\"/drupal/themes/custom/jaapw/images/logo-stepping-stones.png\" alt=\"\">
            </div>
            <div class=\"col-5 offset-1\">
                <img class=\"refrence-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
            </div>
        </div>
    </div>
</section>

<section class=\"section--2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-5\">
                <img class=\"refrence-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
            </div>
            <div class=\"col-6 offset-1\">
                <h3>
                    Explanation
                </h3>
                <p>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                    <br><br>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                    <br><br>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                    <br><br>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                    <br><br>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"section--1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h3>
                    Conclusion
                </h3>
                <p>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                </p>
                <br>
                <h3>
                    Reflection
                </h3>
                <p>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                </p>
                <br>
                <h3>
                    What will I do differently next time?
                </h3>
                <p>
                    Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac.
                </p>
            </div>
            <div class=\"col-5 offset-1\">
                <img class=\"refrence-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
            </div>
        </div>
    </div>
</section> #}", "themes/custom/jaapw/templates/node--project_details.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\node--project_details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "for" => 34, "set" => 35, "include" => 65);
        static $filters = array("raw" => 6, "escape" => 13, "image_style" => 13, "lower" => 42, "split" => 42, "replace" => 45, "capitalize" => 45, "trim" => 45, "striptags" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'include'],
                ['raw', 'escape', 'image_style', 'lower', 'split', 'replace', 'capitalize', 'trim', 'striptags'],
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
