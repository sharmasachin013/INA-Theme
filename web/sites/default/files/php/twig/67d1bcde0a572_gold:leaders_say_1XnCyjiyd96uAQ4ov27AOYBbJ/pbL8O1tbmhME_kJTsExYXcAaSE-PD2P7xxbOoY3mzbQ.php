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

/* gold:leaders_say */
class __TwigTemplate_9e668b0ae9257499b10e1b253e31dc0d extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.gold--leaders_say"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "gold:leaders_say"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "gold:leaders_say"));
        yield "<!-- Leaders Message Start -->
<div class=\"container-fluid testimonial pb-5\">
    <div class=\"container pb-5\">
        <div class=\"pb-5\">
            <h4 class=\"text-secondary sub-title fw-bold wow fadeInUp\" data-wow-delay=\"0.1s\">Leaders Message</h4>
            <h1 class=\"display-2 mb-0 wow fadeInUp\" data-wow-delay=\"0.3s\">What Our Leaders Say</h1>
        </div>
        <div class=\"owl-carousel testimonial-carousel pt-5 wow fadeInUp\" data-wow-delay=\"0.2s\" id=\"leaders-say\">
            <div class=\"testimonial-item border text-center rounded\">
                <div class=\"rounded-circle position-absolute\"
                    style=\"width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);\">
                    <img class=\"img-fluid rounded-circle\" src=\"img/president.jpg\" alt=\"img\">
                </div>
                <div class=\"position-relative\" style=\"margin-top: 140px;\">
                    <h5 class=\"mb-0\">Smt Droupadi Murmu</h5>
                    <p>President of India</p>
                </div>
                <div class=\"testimonial-content p-4\">
                    <p class=\"fs-5 mb-0\">At the core of the transformation, we have been witnessing in healthcare,
                        education, economy as well as a number of related areas is the stress on good governance. When
                        work is done with the spirit of 'Nation First', it is bound to reflect in every decision and
                        every sector. This is also reflected in India's standing in the world. Jai Hind!
                    </p>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- Leaders Message End -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gold:leaders_say";
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
        return new Source("", "gold:leaders_say", "themes/gold/components/leaders_say/leaders_say.twig");
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
