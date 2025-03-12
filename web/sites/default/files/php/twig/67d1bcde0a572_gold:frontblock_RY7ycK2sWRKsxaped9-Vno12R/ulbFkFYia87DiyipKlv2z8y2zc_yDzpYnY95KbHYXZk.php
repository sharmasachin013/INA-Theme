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

/* gold:frontblock */
class __TwigTemplate_49eaa5de09dd98f642f64da6eba4d761 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.gold--frontblock"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "gold:frontblock"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "gold:frontblock"));
        yield "<!-- INA Flag Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-5 wow fadeInLeft\" data-wow-delay=\"0.1s\"
                style=\"visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;\">
                <div class=\"border bg-secondary rounded\">
                    <img src=\"https://varundrupaltheme.lndo.site/sites/default/files/2025-03/theinaflag.png\" class=\"img-fluid w-100 rounded\" alt=\"Image\">
                </div>
            </div>
            <div class=\"col-lg-7 wow fadeInRight\" data-wow-delay=\"0.3s\"
                style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;\">
                <h4 class=\"text-secondary sub-title fw-bold\">भा. नौ. अ. का झंडा / The INA Flag</h4>
                <!--<h1 class=\"display-3 mb-4\"><strong class=\"text-primary\">INA Flag</strong>, The two colours symbolize the raison d^etre of the Indian Naval Academy</h1>-->
                <p>The foundation colours of the INA Flag are the two identifying colours of the Indian Navy-navy blue
                    and white, which occupy the opposite quadrants of the flag.
                </p>
                <p class=\"mb-4\">The two colours symbolize the raison d^etre of the Indian Naval Academy, which is to
                    provide a common controlled foundation to all officers joining the Indian Navy and the Indian Coast
                    Guard.
                </p>
                <p class=\"mb-4\">The crest of the INA (explained in the section the crest) is superimposed on the
                    foundation colours and placed in the centre of the flag, signifying the abiding centrality of the
                    Indian Naval Academy in the Indian Navy's pursuit of excellence.
                </p>
                <!--<a class=\"btn btn-primary rounded-pill text-white py-3 px-5\" href=\"#\">Learn More</a>-->
            </div>
        </div>
    </div>
</div>
<!-- INA Flag End -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gold:frontblock";
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
        return new Source("", "gold:frontblock", "themes/gold/components/frontblock/frontblock.twig");
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
