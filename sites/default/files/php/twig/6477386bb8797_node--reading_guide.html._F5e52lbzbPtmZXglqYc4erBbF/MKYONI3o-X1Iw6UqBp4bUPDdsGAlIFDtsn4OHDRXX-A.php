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

/* themes/custom/jaapw/templates/node--reading_guide.html.twig */
class __TwigTemplate_2ac21c4b36ee55dca9dac402b670f9c0 extends Template
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

";
        // line 19
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/paragraphs.html.twig"), "themes/custom/jaapw/templates/node--reading_guide.html.twig", 19)->display($context);
        // line 20
        echo "
";
        // line 22
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table\">
                <tr>
                    <th class=\"learning--outcome\">Learning Outcome</th>
                    <th class=\"description\">Description</th>
                    <th class=\"proof-title\">Proof</th>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">User Interaction (analysis & advice)</th>
                    <td class=\"description\">You analyse the user, the interaction, and the user experience, also taking state of the art interactive technologies into account. You select a suitable design process to be able to advise on UX interventions based on a validated UX design.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"/drupal/node/5\">Research Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Interview%20responses.pdf\">Interview Responses</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">User Interaction (execution & validation)</th>
                    <td class=\"description\">You execute and evaluate the user experience of an interactive product. You document the development process for the stakeholders.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://www.figma.com/file/jgyNdJ3lkO4I9eoE4rgHwp/Portfolio-design?type=design&node-id=0%3A1&t=vFqJwKWYAJm5Rbya-1\">Design Portfolio</a>
                            <br>
                            <a href=\"https://www.figma.com/file/2o6zdMI7FyL20Dp3TRNUsh/Untitled?type=design&node-id=0%3A1&t=tXr6h66UOG4ggXJH-1\">Design WoonBedrijf App</a>
                            <br>
                            <a href=\"https://youtu.be/DuPJNnyU1l4\">Video WoonBedrijf</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/LOT%20Community%20Handover%20Document%20.pdf\">Handover WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">Software Design</th>
                    <td class=\"description\">You design and evaluate a software system with existing components or libraries using predetermined quality criteria.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://github.com/JaapWouters/Drupal-Portfolio.git\">GitHub Portfolio</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Future-oriented Organisation</th>
                    <td class=\"description\">You carry out a problem analysis and on that basis, you determine the definitive problem and elaborate on this in a project plan.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Project%20plan%20Portfolio.pdf\">Project Plan Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Ideas%20for%20Woonbedrijf.pdf\">Brainstorm WoonBedrijf</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/International%20Project%20Document.pdf\">Design Thinking WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Investigative Problem Solving</th>
                    <td class=\"description\">You formulate sub-questions pertaining to the primary question and answer these using relevant research methods. You use the conclusions of the sub-questions to justify (design) choices.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Project%20plan%20Portfolio.pdf\">Project Plan Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/International%20Project%20Document.pdf\">Design Thinking WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Personal Leadership </th>
                    <td class=\"description\">You methodically reflect on your professional identity and personal development.  </td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Stakeholder%20feedback.pdf\">Stakeholder Feedback</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Goal-oriented Interaction</th>
                    <td class=\"description\">You communicate with different stakeholders and team members about the ICT assignment, taking into account an international context. </td>
                    <td class=\"proof\">
                       <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Cultural%20differences.pdf\">Group Cultures</a>
                            <br>
                            <a href=\"https://www.figma.com/file/NOwRu6O9Ifz2InBEN4wjhJ/International-poster?type=design&node-id=0%3A1&t=7s35TnOPLRbIHprn-1\">Poster Design</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/SDG%20Trends%20and%20Consequences.pdf\">SDG's</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
              </table>
        </div>
    </div>
</div>

";
        // line 316
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/jaapw/templates/node--reading_guide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 316,  73 => 22,  70 => 20,  68 => 19,  59 => 13,  52 => 9,  46 => 6,  39 => 1,);
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

{% include directory ~ '/templates/partials/paragraphs.html.twig' %}

{# {{content.views_block__projects_block_3}} #}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table\">
                <tr>
                    <th class=\"learning--outcome\">Learning Outcome</th>
                    <th class=\"description\">Description</th>
                    <th class=\"proof-title\">Proof</th>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">User Interaction (analysis & advice)</th>
                    <td class=\"description\">You analyse the user, the interaction, and the user experience, also taking state of the art interactive technologies into account. You select a suitable design process to be able to advise on UX interventions based on a validated UX design.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"/drupal/node/5\">Research Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Interview%20responses.pdf\">Interview Responses</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">User Interaction (execution & validation)</th>
                    <td class=\"description\">You execute and evaluate the user experience of an interactive product. You document the development process for the stakeholders.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://www.figma.com/file/jgyNdJ3lkO4I9eoE4rgHwp/Portfolio-design?type=design&node-id=0%3A1&t=vFqJwKWYAJm5Rbya-1\">Design Portfolio</a>
                            <br>
                            <a href=\"https://www.figma.com/file/2o6zdMI7FyL20Dp3TRNUsh/Untitled?type=design&node-id=0%3A1&t=tXr6h66UOG4ggXJH-1\">Design WoonBedrijf App</a>
                            <br>
                            <a href=\"https://youtu.be/DuPJNnyU1l4\">Video WoonBedrijf</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/LOT%20Community%20Handover%20Document%20.pdf\">Handover WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">Software Design</th>
                    <td class=\"description\">You design and evaluate a software system with existing components or libraries using predetermined quality criteria.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://github.com/JaapWouters/Drupal-Portfolio.git\">GitHub Portfolio</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Future-oriented Organisation</th>
                    <td class=\"description\">You carry out a problem analysis and on that basis, you determine the definitive problem and elaborate on this in a project plan.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Project%20plan%20Portfolio.pdf\">Project Plan Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Ideas%20for%20Woonbedrijf.pdf\">Brainstorm WoonBedrijf</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/International%20Project%20Document.pdf\">Design Thinking WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Investigative Problem Solving</th>
                    <td class=\"description\">You formulate sub-questions pertaining to the primary question and answer these using relevant research methods. You use the conclusions of the sub-questions to justify (design) choices.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Project%20plan%20Portfolio.pdf\">Project Plan Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/International%20Project%20Document.pdf\">Design Thinking WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Personal Leadership </th>
                    <td class=\"description\">You methodically reflect on your professional identity and personal development.  </td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Stakeholder%20feedback.pdf\">Stakeholder Feedback</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Goal-oriented Interaction</th>
                    <td class=\"description\">You communicate with different stakeholders and team members about the ICT assignment, taking into account an international context. </td>
                    <td class=\"proof\">
                       <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Cultural%20differences.pdf\">Group Cultures</a>
                            <br>
                            <a href=\"https://www.figma.com/file/NOwRu6O9Ifz2InBEN4wjhJ/International-poster?type=design&node-id=0%3A1&t=7s35TnOPLRbIHprn-1\">Poster Design</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/SDG%20Trends%20and%20Consequences.pdf\">SDG's</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
              </table>
        </div>
    </div>
</div>

{# <div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table\">
                <tr>
                    <th class=\"learning--outcome\">Learning Outcome</th>
                    <th class=\"description\">Description</th>
                    <th class=\"proof-title\">Proof</th>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">User Interaction (analysis & advice)</th>
                    <td class=\"description\">You analyse the user, the interaction, and the user experience, also taking state of the art interactive technologies into account. You select a suitable design process to be able to advise on UX interventions based on a validated UX design.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/Research%20document%20portfolio.pdf\">Research Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Interview%20responses.pdf\">Interview Responses</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">User Interaction (execution & validation)</th>
                    <td class=\"description\">You execute and evaluate the user experience of an interactive product. You document the development process for the stakeholders.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://www.figma.com/file/jgyNdJ3lkO4I9eoE4rgHwp/Portfolio-design?type=design&node-id=0%3A1&t=vFqJwKWYAJm5Rbya-1\">Design Portfolio</a>
                            <br>
                            <a href=\"https://www.figma.com/file/2o6zdMI7FyL20Dp3TRNUsh/Untitled?type=design&node-id=0%3A1&t=tXr6h66UOG4ggXJH-1\">Design WoonBedrijf App</a>
                            <br>
                            <a href=\"https://youtu.be/DuPJNnyU1l4\">Video WoonBedrijf</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/LOT%20Community%20Handover%20Document%20.pdf\">Handover WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class=\"learning--outcome\">Software Design</th>
                    <td class=\"description\">You design and evaluate a software system with existing components or libraries using predetermined quality criteria.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://github.com/JaapWouters/Drupal-Portfolio.git\">GitHub Portfolio</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Future-oriented Organisation</th>
                    <td class=\"description\">You carry out a problem analysis and on that basis, you determine the definitive problem and elaborate on this in a project plan.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Project%20plan%20Portfolio.pdf\">Project Plan Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Ideas%20for%20Woonbedrijf.pdf\">Brainstorm WoonBedrijf</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/International%20Project%20Document.pdf\">Design Thinking WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Investigative Problem Solving</th>
                    <td class=\"description\">You formulate sub-questions pertaining to the primary question and answer these using relevant research methods. You use the conclusions of the sub-questions to justify (design) choices.</td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Project%20plan%20Portfolio.pdf\">Project Plan Portfolio</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/International%20Project%20Document.pdf\">Design Thinking WoonBedrijf</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Personal Leadership </th>
                    <td class=\"description\">You methodically reflect on your professional identity and personal development.  </td>
                    <td class=\"proof\">
                        <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Stakeholder%20feedback.pdf\">Stakeholder Feedback</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th class=\"learning--outcome\">Goal-oriented Interaction</th>
                    <td class=\"description\">You communicate with different stakeholders and team members about the ICT assignment, taking into account an international context. </td>
                    <td class=\"proof\">
                       <div class=\"d-flex flex-wrap\">
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/Cultural%20differences.pdf\">Group Cultures</a>
                            <br>
                            <a href=\"https://www.figma.com/file/NOwRu6O9Ifz2InBEN4wjhJ/International-poster?type=design&node-id=0%3A1&t=7s35TnOPLRbIHprn-1\">Poster Design</a>
                            <br>
                            <a href=\"https://i461858.hera.fhict.nl/FilesSem6/SDG%20Trends%20and%20Consequences.pdf\">SDG's</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                            <br>
                            <a href=\"google.com\">Test</a>
                        </div>
                    </td>
                  </tr>
              </table>
        </div>
    </div>
</div> #}


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
</section> #}", "themes/custom/jaapw/templates/node--reading_guide.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\node--reading_guide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 19);
        static $filters = array("raw" => 6, "escape" => 13, "image_style" => 13);
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
