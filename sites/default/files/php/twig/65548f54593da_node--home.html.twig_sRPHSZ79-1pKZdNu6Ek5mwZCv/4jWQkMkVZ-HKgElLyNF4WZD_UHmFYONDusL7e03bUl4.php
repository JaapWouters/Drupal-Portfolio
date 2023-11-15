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
class __TwigTemplate_1905283936eac10505aefd178d0ea1d4 extends Template
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
                <img class=\"header-image\" src=\"/drupal/themes/custom/jaapw/images/Homepage-image.svg\" alt=\"\">
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
        <div class=\"col-8 offset-4\">
            <h2>About me</h2>
        </div>
    </div>
        <div class=\"row\">
            <div class=\"col-4 col-image\">
                <div class=\"aboutme-image\">
                </div>
                <!-- <img class=\"aboutme-image\" src=\"/drupal/themes/custom/jaapw/images/aboutme.jpg\" alt=\"\"> -->
            </div>
            <div class=\"col-8 about-me\">
                <img class=\"flower\" src=\"/drupal/themes/custom/jaapw/images/flower.svg\" alt=\"flower\">
                <p class=\"paragraph-text\">
                    My name is Jaap Wouters👋, I am 22 years old and I study ICT & Media Design at the Fontys University of Applied Sciences in Eindhoven. 
                    <br><br>
                    Before doing HBO, I got my diploma in ICT Management level 4 at my MBO study🎓. After this study I was looking for something in ICT again, so I ended up at Fontys. I chose to specify in the field of media because i’ve always liked creating stuff that is visually appealing🎨. My main interest lies in designing, photo and video editing, AI tools and a bit of developing.
                    <br><br>
                    In my free time, I enjoy playing sports or going to the gym, listening to music, gaming and doing fun things with my friends. Like going to the movies, I can really appreciate a good movie. Besides that I’m a bit of a tech fan📱💻, so when talking about computers, phones or other gadgets I’m listening.
                </p>
                <p class=\"skills\">
                    Skills
                    <br>
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Photoshop.svg\" alt=\"Photoshop\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Lightroom.svg\" alt=\"Lightroom\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Premiere Pro.svg\" alt=\"Premiere Pro\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/InDesign.svg\" alt=\"InDesign\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Figma.svg\" alt=\"Figma\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Drupal.svg\" alt=\"Drupal\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Hubspot.svg\" alt=\"HubSpot\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Bootstrap.svg\" alt=\"Bootstrap\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/HTML.svg\" alt=\"HTML\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Sass.svg\" alt=\"Sass\">
                    <img class=\"skill-icon\" src=\"/drupal/themes/custom/jaapw/images/skills/Git.svg\" alt=\"Git\">
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"section--learningoutcomes\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"lo-title\">
                <h2>Learning Goals</h2>
                <p>
                    The learning goals I want to focus on for this semester
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-4 learning-card\">
                <div class=\"learning-icon\"><i class=\"bi bi-bar-chart-fill\"></i></div>
                <h3>Web Analysis</h3>
                <p class=\"learning-body\">By the end of the semester, I want to be able to apply web analytics to my portfolio so that I can understand where visitors are coming from and how they interact with my websites.
                <br><br>I plan to use Google Analytics to collect and analyze this data. My goal is to be able to apply these analytical skills to multiple websites in the future to gain valuable insights into online visitor behavior.</p>
            </div>
            <div class=\"col-4 learning-card\">
                <div class=\"learning-icon\"><i class=\"bi bi-brush-fill\"></i></div>
                <h3>Content Creation & Design</h3>
                <p class=\"learning-body\">By the end of the semester, I want to be better able to work with professional Adobe software to create designs and drafts for various purposes.
                <br><br>I want to create concepts for social media posts, advertising videos, web designs and other types of media releases. I will focus primarily on mastering Illustrator, After Effects and Premiere Pro. I hope to achieve this through self-study and online tutorials to achieve my goal and improve my skills.</p>
            </div>
            <div class=\"col-4 learning-card\">
                <div class=\"learning-icon\"><i class=\"bi bi-person-fill-up\"></i></div>
                <h3>Self-Development</h3>
                <p class=\"learning-body\">At the end of the semester, I want to improve my communication skills with experts and professionals. 
                <br><br>I want to achieve this by taking a leadership role or acting as an intermediary between technical and non-technical teams. Moreover, I want to challenge myself and actively engage with stakeholders to respond more effectively to their needs and expectations.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-4\">
                
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
        return new Source("", "themes/custom/jaapw/templates/node--home.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\jaapw\\templates\\node--home.html.twig");
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
