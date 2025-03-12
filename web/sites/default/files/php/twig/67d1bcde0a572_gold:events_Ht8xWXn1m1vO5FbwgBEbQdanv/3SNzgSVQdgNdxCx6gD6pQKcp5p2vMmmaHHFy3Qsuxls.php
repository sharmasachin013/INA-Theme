<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* gold:events */
class __TwigTemplate_16ab48032d0d9fa4a374dea77789d216 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.gold--events"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "gold:events"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "gold:events"));
        yield "<div class=\"container-fluid blog pb-5\">
    <div class=\"container pb-5\">
        <div class=\"pb-5\">
            <h4 class=\"text-secondary sub-title fw-bold wow fadeInUp\" data-wow-delay=\"0.1s\"
                style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;\">Events</h4>
            <h1 class=\"display-2 mb-0 wow fadeInUp\" data-wow-delay=\"0.3s\"
                style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">Recent Events at INA</h1>
        </div>
        <div class=\"blog-carousel owl-carousel pt-5 wow fadeInUp\" data-wow-delay=\"0.1s\" id=\"events\">
            <div class=\"blog-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"blog-img rounded-top\">
                    <img src=\"https://varundrupaltheme.lndo.site/sites/default/files/2025-03/ADMIRAL%20CUP%203_1.jpeg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"bg-light rounded-bottom p-4\">
                    <div class=\"d-flex justify-content-between mb-4\">
                        <a href=\"#\" class=\"text-muted\"><i class=\"fa fa-calendar-alt text-primary\"></i> 9 Dec 2024</a>
                        <a href=\"#\" class=\"text-muted\"><span class=\"fa fa-comments text-primary\"></span> 13 Comments</a>
                    </div>
                    <a href=\"#\" class=\"h4 mb-3 d-block\">001  Edition of Admiral’s Cup Regatta</a>
                    <p class=\"mb-3\">The 13th edition of Admiral’s Cup Sailing Regatta 2024 got underway at Indian Naval
                        Academy(INA).</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Read More</a>
                </div>
            </div>
         
 
        </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gold:events";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "gold:events", "themes/gold/components/events/events.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
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
