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

/* gold:footer */
class __TwigTemplate_14fb63eed17faf9dc350c8986591c996 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.gold--footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "gold:footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "gold:footer"));
        yield "<!-- Footer Start -->
<div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\" id=\"other-link\">
                    
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\">
                    <h4 class=\"text-white mb-4\">Address</h4>
                    <div class=\"d-flex align-items-center mb-3\">
                        <a class=\"btn btn-lg-square btn-primary rounded-circle mx-2\" href=\"\"><i
                                class=\"fas fa-map-marker-alt\"></i></a>
                        <div class=\"text-white ms-2\">
                            <p class=\"mb-0\">INA, Ezhimala, Kannur 670310</p>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center mb-3\">
                        <a class=\"btn btn-lg-square btn-primary rounded-circle mx-2\" href=\"\"><i
                                class=\"fa fa-phone-alt\"></i></a>
                        <div class=\"text-white ms-2\">
                            <p class=\"mb-0\">04985-225999</p>
                            <p class=\"mb-0\">04985-225444</p>
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a class=\"btn btn-lg-square btn-primary rounded-circle mx-2\" href=\"\"><i
                                class=\"fas fa-envelope\"></i></a>
                        <div class=\"text-white ms-2\">
                            <p class=\"mb-0\">ina(at)navy.gov.in</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\" >
                <div class=\"footer-item d-flex flex-column\" id=\"footer-external\">
                    
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">The Crest</h4>
                        <img src=\"https://varundrupaltheme.lndo.site/sites/default/files/2025-03/logo.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class=\"container-fluid copyright py-4\">
    <div class=\"container\">
        <div class=\"row g-4 align-items-center\">
            <div class=\"col-md-6 text-center text-md-start mb-md-0\">
                <span class=\"text-white\"><a href=\"#\" class=\"border-bottom text-white\"><i
                            class=\"fas fa-copyright text-light me-2\"></i>INA NUD Website</a>, All right reserved.</span>
            </div>
            <div class=\"col-md-6 text-center text-md-end text-white\">
                Designed By <a class=\"border-bottom text-white\" href=\"#\">IT Cell, INA</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary btn-lg-square back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gold:footer";
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
        return new Source("", "gold:footer", "themes/gold/components/footer/footer.twig");
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
