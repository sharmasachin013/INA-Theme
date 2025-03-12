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

/* gold:lead_nia */
class __TwigTemplate_4b4230747a1db172e8a0a4977fbd44a3 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.gold--lead_nia"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "gold:lead_nia"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "gold:lead_nia"));
        yield "<!-- We Lead INA Start -->
<div class=\"container-fluid class bg-light py-5\">
    <div class=\"container py-5\">
        <div class=\"pb-5\">
            <h4 class=\"text-secondary sub-title fw-bold wow fadeInUp\" data-wow-delay=\"0.1s\">Leaders</h4>
            <h1 class=\"display-2 mb-0 wow fadeInUp\" data-wow-delay=\"0.3s\">We Lead INA</h1>
        </div>
        <div class=\"class-carousel owl-carousel pt-5 wow fadeInUp\" data-wow-delay=\"0.1s\" id=\"lead-nia\">
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt D Mohindra, NM, VSM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt Madhvendra Singh</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt M V Karnik</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt MS Bedi</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt O P Bansal, VSM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt K Mohan Rao, VSM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt N P Mehta</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt K P Mathew</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt J S Bedi</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Cmde N K Verma</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Cmde N Venugopal,VSM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Cmde R F Contractor</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt SPS Cheema,NM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt KS Aiyappa</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Cmde NN Rao</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Capt MA Hampiholi</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm M. P. Muralidharan</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm Anurag G Thapliyal</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm Pradeep Chauhan</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm Ajit Kumar P, AVSM,VSM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm Soonil Bhokare</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Vadm RB Pandit</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm Dinesh K Tripathi</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm MA Hampiholi, AVSM, NM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm Puneet K Bahl, AVSM, VSM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">VAdm Vineet Mccarty, AVSM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral Kapil Gupta</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral LVS Babu</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral GV Ravindran</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral M D Suresh NM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral Puneet Chadha, VSM</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral Tarun Sobti</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral AN Pramod</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral Ajay D Theophilus</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">Rear Admiral Prakash Gopalan</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">RAdm Andre Aroume</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">RAdm HS Bhakta Vatsala</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">RAdm KB Mehta</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">RAdm KS Venugopal</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">RAdm Amit Vikram</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">RAdm KS Noor</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">RAdm Rajvir Singh</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
            <div class=\"class-item bg-white rounded wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"class-img rounded-top\">
                    <img src=\"img/clients/ajaydtheophilus.jpg\" class=\"img-fluid rounded-top w-100\" alt=\"Image\">
                </div>
                <div class=\"rounded-bottom p-4\">
                    <p class=\"mb-3\">RAdm G Rambabu</p>
                    <a class=\"btn btn-primary rounded-pill text-white py-2 px-4\" href=\"#\">Explore Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- We Lead INA End -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gold:lead_nia";
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
        return new Source("", "gold:lead_nia", "themes/gold/components/lead_nia/lead_nia.twig");
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
