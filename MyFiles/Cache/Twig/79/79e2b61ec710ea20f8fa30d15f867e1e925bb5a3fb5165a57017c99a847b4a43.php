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

/* Master/ListController.html.twig */
class __TwigTemplate_8105836e5bba34ecbb228a2ff08a1bc8969337664eb71767471bbea012596409 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Master/ListController.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    ";
        // line 24
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24);
        // line 25
        echo "    <div class=\"container-fluid mb-3 d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                ";
        // line 29
        echo "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 34)) {
            // line 35
            echo "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 36)], "method", false, false, false, 36), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 39
        echo "                        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</li>
                    </ol>
                </nav>
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 43), "html", null, true);
        echo "\"
                       title=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 44), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "name", [], "any", false, false, false, 47) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 47), "homepage", [], "any", false, false, false, 47))) {
            // line 48
            echo "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 48), "html", null, true);
            echo "?defaultPage=FALSE\"
                           title=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 49), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 53
            echo "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 53), "html", null, true);
            echo "?defaultPage=TRUE\"
                           title=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 54), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 58
        echo "                </div>
                ";
        // line 60
        echo "                <div class=\"btn-group\">
                    <div class=\"dropdown\">
                        <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 64), "html", null, true);
        echo "
                        </button>
                        <div class=\"dropdown-menu\">
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 68
            echo "                                <a class=\"dropdown-item\"
                                   href=\"EditPageOption?code=";
            // line 69
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "&url=";
            echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "model", [], "any", false, false, false, 69), "url", [], "method", false, false, false, 69)), "html", null, true);
            echo "\">
                                    <i class=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 70), "html", null, true);
            echo " fa-fw\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 text-right\">
                <h1 class=\"h4 mb-0 d-none d-md-inline-block\">
                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 79), "html", null, true);
        echo "<i class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 79), "html", null, true);
        echo " ml-3\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    ";
        // line 85
        echo "    <ul class=\"nav nav-tabs d-print-none\" id=\"mainTabs\" role=\"tablist\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 87
            echo "            <li class=\"nav-item\">
                ";
            // line 88
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 88))) ? (" active") : (""));
            // line 89
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" class=\"nav-link";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" role=\"tab\"
                   aria-controls=\"";
            // line 90
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\">
                    <i class=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 91), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
                    ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 93) > 0)) {
                // line 94
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 94), "numbers", [], "method", false, false, false, 94), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 94), 1 => 0], "method", false, false, false, 94), "html", null, true);
                echo "</span>
                    ";
            }
            // line 96
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "    </ul>
";
    }

    // line 102
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 105
        echo "    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 106));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 107
            echo "            ";
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 107))) ? (" show active") : (""));
            // line 108
            echo "            <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\">
                ";
            // line 109
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 109);
            // line 110
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 110));
            echo "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "    </div>
";
    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            if (document.location.hash) {
                \$(\".nav-tabs a[href=\\\\\" + document.location.hash + \"]\").tab('show');
            }
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input[name='query']:visible\").focus();
            }
            \$('.nav-tabs a').click(function (e) {
                \$(this).tab('show');
                var scrollmem = \$('body').scrollTop();
                window.location.hash = this.hash;
                \$('html,body').scrollTop(scrollmem);
            });
            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                    \$(\"input[name='query']:visible\").focus();
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Master/ListController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 117,  302 => 116,  297 => 113,  279 => 110,  277 => 109,  270 => 108,  267 => 107,  250 => 106,  247 => 105,  242 => 103,  238 => 102,  233 => 99,  225 => 96,  219 => 94,  217 => 93,  213 => 92,  209 => 91,  205 => 90,  198 => 89,  196 => 88,  193 => 87,  189 => 86,  186 => 85,  176 => 79,  168 => 73,  157 => 70,  151 => 69,  148 => 68,  144 => 67,  138 => 64,  132 => 60,  129 => 58,  122 => 54,  117 => 53,  110 => 49,  105 => 48,  103 => 47,  97 => 44,  93 => 43,  85 => 39,  79 => 36,  76 => 35,  74 => 34,  69 => 32,  64 => 29,  59 => 25,  57 => 24,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListController.html.twig", "C:\\xampp\\htdocs\\facturascripts\\Dinamic\\View\\Master\\ListController.html.twig");
    }
}
