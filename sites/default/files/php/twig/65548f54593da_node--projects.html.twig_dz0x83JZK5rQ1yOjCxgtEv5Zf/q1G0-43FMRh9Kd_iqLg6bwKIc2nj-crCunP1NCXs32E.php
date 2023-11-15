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

/* themes/custom/jaapw/templates/node--projects.html.twig */
class __TwigTemplate_011d6f7852ea0e3d750e1c666f9fb52e extends Template
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
        echo "<section class=\"section--projects\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2>
                    All Projects
                </h2>
                <p>
                    Projects I've worked on this semester and previous semesters
                </p>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "views_block__projects_block_1", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
            <!-- <div class=\"col-4 project-card\">
                <img class=\"card-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
                <div class=\"card-text\">   
                    <h3>PSV</h3>
                    <h4>Brainport Experience Box</h4>
                    <p>The Brainport Experience Box is a unique innovative tribune where guests can learn about innovative technologies on game days.</p>
                    <a href=\"\"><button class=\"btn btn-primary\">Learn more <i class=\"bi bi-arrow-right\"></i></button></a>
                </div>
            </div>
            <div class=\"col-4 project-card\">
                <img class=\"card-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
                <div class=\"card-text\">   
                    <h3>Portfolio</h3>
                    <h4>Project showcase</h4>
                    <p>Designing and developing my own portfolio to showcase the projects I have been working on this semester and last semesters.</p>
                    <a href=\"\"><button class=\"btn btn-primary\">Learn more <i class=\"bi bi-arrow-right\"></i></button></a>
                </div>
            </div>
            <div class=\"col-4 project-card\">
                <img class=\"card-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
                <div class=\"card-text\">   
                    <h3>Lorem Ipsum</h3>
                    <h4>Lorem</h4>
                    <p>Lorem ipsum dolor sit amet consectetur. Pretium viverra facilisis sodales eget quis consectetur. Quis morbi cursus in </p>
                    <a href=\"\"><button class=\"btn btn-primary\">Learn more <i class=\"bi bi-arrow-right\"></i></button></a>
                </div>
            </div>

            <div class=\"col-4 project-card\">
                <img class=\"card-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
                <div class=\"card-text\">   
                    <h3>PSV</h3>
                    <h4>Brainport Experience Box</h4>
                    <p>The Brainport Experience Box is a unique innovative tribune where guests can learn about innovative technologies on game days.</p>
                    <a href=\"\"><button class=\"btn btn-primary\">Learn more <i class=\"bi bi-arrow-right\"></i></button></a>
                </div>
            </div>
            <div class=\"col-4 project-card\">
                <img class=\"card-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
                <div class=\"card-text\">   
                    <h3>Portfolio</h3>
                    <h4>Project showcase</h4>
                    <p>Designing and developing my own portfolio to showcase the projects I have been working on this semester and last semesters.</p>
                    <a href=\"\"><button class=\"btn btn-primary\">Learn more <i class=\"bi bi-arrow-right\"></i></button></a>
                </div>
            </div>
            <div class=\"col-4 project-card\">
                <img class=\"card-image\" src=\"https://picsum.photos/2000/3000\" alt=\"\">
                <div class=\"card-text\">   
                    <h3>Lorem Ipsum</h3>
                    <h4>Lorem</h4>
                    <p>Lorem ipsum dolor sit amet consectetur. Pretium viverra facilisis sodales eget quis consectetur. Quis morbi cursus in </p>
                    <a href=\"\"><button class=\"btn btn-primary\">Learn more <i class=\"bi bi-arrow-right\"></i></button></a>
                </div>
            </div> -->
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/jaapw/templates/node--projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jaapw/templates/node--projects.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\node--projects.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
