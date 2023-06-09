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

/* themes/custom/jaapw/templates/node--home.html.twig */
class __TwigTemplate_20f0c8667404155efe0b417e9e9aef8f extends Template
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
        echo "<section class=\"section--landing\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 col-landing\">
                <p class=\"intro\">
                    Hello I'm
                </p>
                <h1 class=\"firstname\">
                    Jaap
                </h1>
                <h1 class=\"lastname\">
                    Wouters
                </h1>
                <div class=\"container--badges\">
                    <span class=\"badge\">Graphic Design</span>
                    <span class=\"badge\">UI/UX Design</span>
                    <span class=\"badge\">Junior Developer</span>
                </div>
            </div>
            <div class=\"col-4\">
                <img class=\"header-image\" src=\"/drupal/themes/custom/jaapw/images/homepagefoto.png\" alt=\"\">
            </div>
        </div>
    </div>
</section>

<section class=\"section--recentprojects\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 title-center\">
                <h2>
                    Recent projects
                </h2>
                <p class=\"title-text\">
                    Projects I've worked on this semester and previous semesters
                </p>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "views_block__projects_block_2", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
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
            </div> -->
        </div>
    </div>
</section>

<section class=\"section--aboutme\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-4\">
                <img class=\"aboutme-image\" src=\"/drupal/themes/custom/jaapw/images/homepagefoto.png\" alt=\"\">
            </div>
            <div class=\"col-8 about-me\">
                <h2>About me</h2>
                <p class=\"paragraph-title\">Introduction</p>
                <p class=\"paragraph-text\">
                    My name is Jaap Wouters, I am 22 years old and I study ICT & Media Design at the Fontys University of Applied Sciences in Eindhoven. 
                    <br><br>
                    In semester 1, we were given a few different profiles to choose from, from which I chose media. The reason I chose Media is because I have always been interested in design, editing and styling. So I already had a little bit of experience with this as opposed to creating websites, which I didn’t know much about. In during my time at Fontys I learned a lot about website creation using HTML, CSS and a little JavaScript. This is mostly because of my portfolio website that I had to create to show my progression on.
                    <br><br>
                    I enjoy skiing, gaming, listening to music and chilling with my friends. Besides that I’m a bit of a tech fan, so when talking about computers, phones or other gadgets I’m listening.
                </p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/jaapw/templates/node--home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section--landing\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 col-landing\">
                <p class=\"intro\">
                    Hello I'm
                </p>
                <h1 class=\"firstname\">
                    Jaap
                </h1>
                <h1 class=\"lastname\">
                    Wouters
                </h1>
                <div class=\"container--badges\">
                    <span class=\"badge\">Graphic Design</span>
                    <span class=\"badge\">UI/UX Design</span>
                    <span class=\"badge\">Junior Developer</span>
                </div>
            </div>
            <div class=\"col-4\">
                <img class=\"header-image\" src=\"/drupal/themes/custom/jaapw/images/homepagefoto.png\" alt=\"\">
            </div>
        </div>
    </div>
</section>

<section class=\"section--recentprojects\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 title-center\">
                <h2>
                    Recent projects
                </h2>
                <p class=\"title-text\">
                    Projects I've worked on this semester and previous semesters
                </p>
            </div>
        </div>
        <div class=\"row\">
            {{ content.views_block__projects_block_2 }}
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
            </div> -->
        </div>
    </div>
</section>

<section class=\"section--aboutme\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-4\">
                <img class=\"aboutme-image\" src=\"/drupal/themes/custom/jaapw/images/homepagefoto.png\" alt=\"\">
            </div>
            <div class=\"col-8 about-me\">
                <h2>About me</h2>
                <p class=\"paragraph-title\">Introduction</p>
                <p class=\"paragraph-text\">
                    My name is Jaap Wouters, I am 22 years old and I study ICT & Media Design at the Fontys University of Applied Sciences in Eindhoven. 
                    <br><br>
                    In semester 1, we were given a few different profiles to choose from, from which I chose media. The reason I chose Media is because I have always been interested in design, editing and styling. So I already had a little bit of experience with this as opposed to creating websites, which I didn’t know much about. In during my time at Fontys I learned a lot about website creation using HTML, CSS and a little JavaScript. This is mostly because of my portfolio website that I had to create to show my progression on.
                    <br><br>
                    I enjoy skiing, gaming, listening to music and chilling with my friends. Besides that I’m a bit of a tech fan, so when talking about computers, phones or other gadgets I’m listening.
                </p>
            </div>
        </div>
    </div>
</section>", "themes/custom/jaapw/templates/node--home.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\node--home.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 40);
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
