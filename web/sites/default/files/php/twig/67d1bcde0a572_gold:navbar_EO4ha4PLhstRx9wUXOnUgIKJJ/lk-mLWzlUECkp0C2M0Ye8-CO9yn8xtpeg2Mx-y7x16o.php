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

/* gold:navbar */
class __TwigTemplate_f7356a57c2c6b5e6ef0e1aa0456780ac extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.gold--navbar"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "gold:navbar"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "gold:navbar"));
        yield "<!-- Navbar & Hero Start -->
<div class=\"container-fluid position-relative p-0\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0\">
        <a href=\"#\" class=\"navbar-brand p-0\">
            <img src=\"https://varundrupaltheme.lndo.site/sites/default/files/2025-03/logo.jpg\" alt=\"Logo\" style=\"width: 100%;\">
        </a>
        <!--<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>-->
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
          
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
<div class=\"header-carousel owl-carousel\" id=\"slider\" >
    ";
        // line 32
        yield "</div>
<!-- Marquee Start -->
<div class=\"container-fluid bg-secondary wow zoomInDown\"  style=\"background-color:#f28b00 !important;\" data-wow-delay=\"0.1s\"
    style=\"visibility: visible; animation-delay: 0.1s; animation-name: zoomInDown;\" >
    <div class=\"container\">
        <div class=\"main\">
            <marquee class=\"marq\" bgcolor=\"LightGray\" direction=\"left\" loop=\"\">
                <div class=\"geek1\">
                    *Kindly note: User Manual for <b>MMS/FMS</b> uploaded in <b>IT KNOWLEDGE</b>.
                </div>
            </marquee>
        </div>
    </div>
</div>
<!-- Marquee End -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gold:navbar";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  65 => 32,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "gold:navbar", "themes/gold/components/navbar/navbar.twig");
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
