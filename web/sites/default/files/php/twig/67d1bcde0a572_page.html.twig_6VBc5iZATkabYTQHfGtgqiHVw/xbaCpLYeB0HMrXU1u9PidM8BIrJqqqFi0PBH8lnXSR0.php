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

/* themes/gold/templates/page/page.html.twig */
class __TwigTemplate_426fc1cd165b92857891e97f68cf3210 extends Template
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
        // line 38
        if (($context["items"] ?? null)) {
            // line 39
            yield "<nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    <";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield " id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env,             // line 41
($context["pagination_heading_level"] ?? null), "html", null, true);
            yield ">
    <ul class=\"pager__items js-pager__items\">
        ";
            // line 44
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44)) {
                // line 45
                yield "        <li class=\"pager__item pager__item--action pager__item--first\">
            <a href=\"";
                // line 46
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 46), "href", [], "any", false, false, true, 46), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 47
($context["items"] ?? null), "first", [], "any", false, false, true, 47), "attributes", [], "any", false, false, true, 47), "href", "title"), "addClass", ["pager__link", "pager__link--action-link"], "method", false, false, true, 47), "html", null, true);
                // line 48
                yield ">
                <span class=\"visually-hidden\">";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
                <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
                    ";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 51), "text", [], "any", true, true, true, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 51), "text", [], "any", false, false, true, 51), t("First"))) : (t("First"))), ["«" => ""]), "html", null, true);
                yield "
                </span>
            </a>
        </li>
        ";
            }
            // line 56
            yield "
        ";
            // line 58
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 58)) {
                // line 59
                yield "        <li class=\"pager__item pager__item--action pager__item--previous\">
            <a href=\"";
                // line 60
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 60), "href", [], "any", false, false, true, 60), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 61
($context["items"] ?? null), "previous", [], "any", false, false, true, 61), "attributes", [], "any", false, false, true, 61), "href", "title", "rel"), "addClass", ["pager__link", "pager__link--action-link"], "method", false, false, true, 61), "html", null, true);
                // line 62
                yield ">
                <span class=\"visually-hidden\">";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
                <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
                    ";
                // line 65
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 65), "text", [], "any", true, true, true, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 65), "text", [], "any", false, false, true, 65), t("Previous"))) : (t("Previous"))), ["‹" => ""]), "html", null, true);
                yield "
                </span>
            </a>
        </li>
        ";
            }
            // line 70
            yield "
        ";
            // line 72
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 72)) {
                // line 73
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
        ";
            }
            // line 75
            yield "
        ";
            // line 77
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 77));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 78
                yield "        <li class=\"pager__item";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                yield " pager__item--number\">
            ";
                // line 79
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 80
                    yield "            ";
                    $context["title"] = t("Current page");
                    // line 81
                    yield "            ";
                } else {
                    // line 82
                    yield "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 83
                    yield "            ";
                }
                // line 84
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 84), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 84), "href", "title"), "addClass", [["pager__link", (((                // line 85
($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""))]], "method", false, false, true, 84), "html", null, true);
                yield ">
                <span class=\"visually-hidden\">
                    ";
                // line 87
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                yield "
                </span>
                ";
                // line 89
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                yield "
            </a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "
        ";
            // line 95
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 95)) {
                // line 96
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
        ";
            }
            // line 98
            yield "
        ";
            // line 100
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 100)) {
                // line 101
                yield "        <li class=\"pager__item pager__item--action pager__item--next\">
            <a href=\"";
                // line 102
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 102), "href", [], "any", false, false, true, 102), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 103
($context["items"] ?? null), "next", [], "any", false, false, true, 103), "attributes", [], "any", false, false, true, 103), "href", "title", "rel"), "addClass", ["pager__link", "pager__link--action-link"], "method", false, false, true, 103), "html", null, true);
                // line 104
                yield ">
                <span class=\"visually-hidden\">";
                // line 105
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
                <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
                    ";
                // line 107
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 107), "text", [], "any", true, true, true, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 107), "text", [], "any", false, false, true, 107), t("Next"))) : (t("Next"))), ["›" => ""]), "html", null, true);
                yield "
                </span>
            </a>
        </li>
        ";
            }
            // line 112
            yield "
        ";
            // line 114
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 114)) {
                // line 115
                yield "        <li class=\"pager__item pager__item--action pager__item--last\">
            <a href=\"";
                // line 116
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 116), "href", [], "any", false, false, true, 116), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 117
($context["items"] ?? null), "last", [], "any", false, false, true, 117), "attributes", [], "any", false, false, true, 117), "href", "title"), "addClass", ["pager__link", "pager__link--action-link"], "method", false, false, true, 117), "html", null, true);
                yield ">
                <span class=\"visually-hidden\">";
                // line 118
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
                <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
                    ";
                // line 120
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 120), "text", [], "any", true, true, true, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 120), "text", [], "any", false, false, true, 120), t("Last"))) : (t("Last"))), ["»" => ""]), "html", null, true);
                yield "
                </span>
            </a>
        </li>
        ";
            }
            // line 125
            yield "    </ul>
</nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level", "ellipses", "current"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/gold/templates/page/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  260 => 125,  252 => 120,  247 => 118,  243 => 117,  238 => 116,  235 => 115,  232 => 114,  229 => 112,  221 => 107,  216 => 105,  213 => 104,  211 => 103,  206 => 102,  203 => 101,  200 => 100,  197 => 98,  193 => 96,  190 => 95,  187 => 93,  177 => 89,  172 => 87,  167 => 85,  161 => 84,  158 => 83,  155 => 82,  152 => 81,  149 => 80,  147 => 79,  142 => 78,  137 => 77,  134 => 75,  130 => 73,  127 => 72,  124 => 70,  116 => 65,  111 => 63,  108 => 62,  106 => 61,  101 => 60,  98 => 59,  95 => 58,  92 => 56,  84 => 51,  79 => 49,  76 => 48,  74 => 47,  69 => 46,  66 => 45,  63 => 44,  58 => 41,  51 => 40,  46 => 39,  44 => 38,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/gold/templates/page/page.html.twig", "/app/web/themes/gold/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 38, "for" => 77, "set" => 80];
        static $filters = ["escape" => 39, "t" => 40, "without" => 47, "replace" => 51, "default" => 51];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't', 'without', 'replace', 'default'],
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
