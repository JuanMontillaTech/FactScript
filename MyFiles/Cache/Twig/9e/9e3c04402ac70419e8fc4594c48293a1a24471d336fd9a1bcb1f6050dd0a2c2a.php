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

/* Master/ListView.html.twig */
class __TwigTemplate_c620e46425fb103b713d01327bdee9d06e5942b68eedd1ac545b152fcf2e3a52 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["formName"] = ("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 21));
        // line 22
        echo "
<script type=\"text/javascript\">
    var listViewDeleteCancel = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var listViewDeleteConfirm = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var listViewDeleteMessage = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 26), "html", null, true);
        echo "\";
    var listViewDeleteTitle = \"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 27), "html", null, true);
        echo "\";
</script>

<form id=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 32), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"loadfilter\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 33), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 34), "newToken", [], "method", false, false, false, 34), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"offset\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"order\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 36), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 37
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 37), "card", [], "any", false, false, false, 37)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 38
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 38), "card", [], "any", false, false, false, 38)) ? ("container-fluid pt-3") : ("container-fluid"));
        echo "\">
            <div class=\"form-row\">
                ";
        // line 41
        echo "                <div class=\"col mb-2\">
                    <div class=\"btn-group\">
                        ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "btnNew", [], "any", false, false, false, 43)) {
            // line 44
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 44), "modalInsert", [], "any", false, false, false, 44)) {
                // line 45
                echo "                                <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\"
                                        data-target=\"#modal";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 46), "modalInsert", [], "any", false, false, false, 46), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                </button>
                            ";
            } else {
                // line 50
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-success\"
                                   title=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 51), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                </a>
                            ";
            }
            // line 55
            echo "                        ";
        }
        // line 56
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 56), "btnDelete", [], "any", false, false, false, 56)) {
            // line 57
            echo "                            <button type=\"button\" class=\"btn btn-danger\"
                                    onclick=\"listViewDelete('";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 58), "html", null, true);
            echo "');\"
                                    title=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 59), "html", null, true);
            echo "\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
        }
        // line 63
        echo "                    </div>
                    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 64), "btnPrint", [], "any", false, false, false, 64)) {
            // line 65
            echo "                        <div class=\"btn-group\">
                            ";
            // line 66
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["i18n"] ?? null)], 66, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 69
        echo "                    ";
        // line 70
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 70), "render", [0 => true, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 70)], "method", false, false, false, 70);
        echo "
                    ";
        // line 72
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 72), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 72);
        echo "
                </div>
                <div class=\"col-sm mb-2\">
                    ";
        // line 76
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 76, $context, $this->getSourceContext());
        echo "
                </div>
                <div class=\"col-md text-right mb-2\">
                    ";
        // line 80
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 80, $context, $this->getSourceContext());
        echo "
                    ";
        // line 82
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_colorsButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 82, $context, $this->getSourceContext());
        echo "
                    ";
        // line 84
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 84, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
            ";
        // line 88
        echo "            ";
        $context["divFiltersStyle"] = ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 88)) ? ("") : ("display: none;"));
        // line 89
        echo "            <div id=\"form";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 89), "html", null, true);
        echo "Filters\" class=\"form-row align-items-center border-bottom\"
                 style=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["divFiltersStyle"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 92
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 92);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </div>
            ";
        // line 96
        echo "            <div class=\"row\">
                ";
        // line 97
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 97), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 97), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 97);
        echo "
            </div>
        </div>
        ";
        // line 101
        echo "        <div class=\"table-responsive\">
            ";
        // line 102
        $context["tableClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 102), "appSettings", [], "method", false, false, false, 102), "get", [0 => "default", 1 => "tablesize"], "method", false, false, false, 102) == "small")) ? ("table-sm") : (""));
        // line 103
        echo "            <table class=\"table table-hover mb-0 ";
        echo twig_escape_filter($this->env, ($context["tableClass"] ?? null), "html", null, true);
        echo "\">
                <thead>
                <tr>
                    ";
        // line 106
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 106)) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 106), "checkBoxes", [], "any", false, false, false, 106))) {
            // line 107
            echo "                        <th width=\"50\">
                            <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                <input class=\"form-check-input listActionCB\" type=\"checkbox\"
                                       onclick=\"listViewCheckboxes('";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 110), "html", null, true);
            echo "');\"/>
                            </div>
                        </th>
                    ";
        }
        // line 114
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 115
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "tableHeader", [], "method", false, false, false, 115);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                </tr>
                </thead>
                <tbody>
                ";
        // line 120
        $context["rowStatus"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 120);
        // line 121
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 121));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 122
            echo "                    ";
            $context["trClass"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 122), "clickable", [], "any", false, false, false, 122)) ? (("clickableRow " . twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 122))) : (twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 122)));
            // line 123
            echo "                    ";
            $context["trTitle"] = twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trTitle", [0 => $context["model"]], "method", false, false, false, 123);
            // line 124
            echo "                    <tr class=\"";
            echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["trTitle"] ?? null), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 124)]), "html", null, true);
            echo "\">
                        ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 125), "checkBoxes", [], "any", false, false, false, 125)) {
                // line 126
                echo "                            <td class=\"cancelClickable\">
                                <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                    <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\"
                                           value=\"";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 129), "html", null, true);
                echo "\"/>
                                </div>
                            </td>
                        ";
            }
            // line 133
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 134
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "tableCell", [0 => $context["model"]], "method", false, false, false, 134);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 138
            echo "                    <tr class=\"table-warning\">
                        <td colspan=\"";
            // line 139
            echo twig_escape_filter($this->env, (1 + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 139))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 139), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 146
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 146))) {
            // line 147
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-sm table-hover mb-0\">
                    <thead>
                    <tr>
                        <th>
                        </th>
                        ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 153));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 154
                echo "                            <th class=\"text-right text-capitalize\">
                                ";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 155)], "method", false, false, false, 155), "html", null, true);
                echo "
                            </th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class=\"text-right\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "page-total-amount"], "method", false, false, false, 162), "html", null, true);
            echo "</td>
                        ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 163));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 164
                echo "                            <td class=\"text-right\">
                                ";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 165), "numbers", [], "method", false, false, false, 165), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 165)], "method", false, false, false, 165), "html", null, true);
                echo "
                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                    </tr>
                    <tr>
                        <td class=\"text-right\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total-amount"], "method", false, false, false, 170), "html", null, true);
            echo "</td>
                        ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 171));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 172
                echo "                            <td class=\"text-right\">
                                ";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 173), "numbers", [], "method", false, false, false, 173), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 173)], "method", false, false, false, 173), "html", null, true);
                echo "
                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                    </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 181
        echo "        ";
        // line 182
        echo "        ";
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 182);
        // line 183
        echo "        ";
        if ((twig_length_filter($this->env, ($context["pages"] ?? null)) > 0)) {
            // line 184
            echo "            <div class=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 184), "card", [], "any", false, false, false, 184)) ? ("card-footer text-center") : ("pt-3 text-center"));
            echo "\">
                <div class=\"btn-group\">
                    ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 186));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 187
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 187)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 188
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\"
                                onclick=\"listViewSetOffset('";
                // line 189
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 189), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 189), "html", null, true);
                echo "');\">
                            ";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 190), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "                </div>
            </div>
        ";
        }
        // line 196
        echo "    </div>
    <br/>
    ";
        // line 199
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 201
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 201), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 201), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 201);
        echo "
        </div>
    </div>
    ";
        // line 205
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 205)) {
            // line 206
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_filterSaveModal", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 206, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 208
        echo "</form>

";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 211));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 212
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 212), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 212)], "method", false, false, false, 212);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "
";
        // line 259
        echo "
";
        // line 297
        echo "
";
        // line 318
        echo "
";
        // line 345
        echo "
";
        // line 361
        echo "
";
    }

    // line 216
    public function macro_filterButton($__currentView__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 217
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 217))) {
                // line 218
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 218);
                // line 219
                echo "        ";
                $context["saveFilters"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilters", [], "any", false, false, false, 219);
                // line 220
                echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewShowFilters('";
                // line 221
                echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                echo "');\">
                <i class=\"fas fa-filter fa-fw\" aria-hidden=\"true\"></i> ";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "filters"], "method", false, false, false, 222), "html", null, true);
                echo "
            </button>
            ";
                // line 224
                if ( !twig_test_empty(($context["saveFilters"] ?? null))) {
                    // line 225
                    echo "                <button type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"sr-only\"></span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                    // line 230
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["saveFilters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pageFilter"]) {
                        // line 231
                        echo "                        ";
                        $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 231) == twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 231))) ? (" active") : (""));
                        // line 232
                        echo "                        ";
                        $context["icon"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "nick", [], "any", false, false, false, 232))) ? ("fa-users") : ("fa-user"));
                        // line 233
                        echo "                        <a class=\"dropdown-item";
                        echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                        echo "\" href=\"#\"
                           onclick=\"listViewSetLoadFilter('";
                        // line 234
                        echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 234), "html", null, true);
                        echo "');\">
                            <i class=\"fas ";
                        // line 235
                        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 235), "html", null, true);
                        echo "
                        </a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 238
                    echo "                </div>
            ";
                }
                // line 240
                echo "        </div>
        ";
                // line 241
                if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 241)) {
                    // line 242
                    echo "            <div class=\"btn-group ml-1\">
                <a href=\"";
                    // line 243
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 243), "html", null, true);
                    echo "?activetab=";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "\" class=\"btn btn-warning\">
                    <i class=\"fas fa-times fa-fw\"></i>
                </a>
                <button type=\"button\" class=\"btn btn-danger\" title=\"";
                    // line 246
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "remove-filter"], "method", false, false, false, 246), "html", null, true);
                    echo "\"
                        onclick=\"listViewSetAction('";
                    // line 247
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "', 'delete-filter');\">
                    <i class=\"fas fa-trash-alt fa-fw\"></i>
                </button>
            </div>
        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 251
($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 251)) {
                    // line 252
                    echo "            <button type=\"button\" class=\"btn btn-info ml-1\" data-toggle=\"modal\" data-target=\"#savefilter";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "\"
                    title=\"";
                    // line 253
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 253), "html", null, true);
                    echo "\">
                <i class=\"fas fa-save fa-fw\"></i>
            </button>
        ";
                }
                // line 257
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 260
    public function macro_filterSaveModal($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 261
            echo "    ";
            $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 261);
            // line 262
            echo "    <div class=\"modal\" id=\"savefilter";
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 267), "html", null, true);
            echo "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 277), "html", null, true);
            echo "</label>
                                <input type=\"text\" name=\"filter-description\" class=\"form-control noEnterKey\"
                                       autofocus=\"\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                        ";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 286), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\"
                            onclick=\"listViewSetAction('";
            // line 289
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "', 'save-filter');\">
                        ";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "accept"], "method", false, false, false, 290), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 298
    public function macro_colorsButton($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 299
            echo "    ";
            $context["legend"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 299), "legend", [], "method", false, false, false, 299);
            // line 300
            echo "    ";
            if (($context["legend"] ?? null)) {
                // line 301
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 301);
                // line 302
                echo "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                        aria-expanded=\"false\">
                    <i class=\"fas fa-fill-drip fa-fw\" aria-hidden=\"true\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right pb-0\">
                    <h6 class=\"dropdown-header\">
                        ";
                // line 310
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "colors"], "method", false, false, false, 310), "html", null, true);
                echo "
                    </h6>
                    ";
                // line 312
                echo ($context["legend"] ?? null);
                echo "
                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 319
    public function macro_printButton($__fsc__ = null, $__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 320
            echo "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 326), "options", [], "method", false, false, false, 326));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 327
                echo "                <a href=\"#\" class=\"dropdown-item\"
                   onclick=\"listViewPrintAction('";
                // line 328
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 328), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');\">
                    <i class=\"";
                // line 329
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 329), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 330
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 330)], "method", false, false, false, 330), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 333), "tools", [], "any", false, false, false, 333))) {
                // line 334
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 335), "tools", [], "method", false, false, false, 335));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 336
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 336)]), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 337
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 337), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 338
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 338)], "method", false, false, false, 338), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 341
                echo "            ";
            }
            // line 342
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 346
    public function macro_searchControl($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 347
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 347))) {
                // line 348
                echo "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 350
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 350), "html", null, true);
                echo "\" autocomplete=\"off\"
                       placeholder=\"";
                // line 351
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 351), "html", null, true);
                echo "\"/>
                <span class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 362
    public function macro_sortButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 363
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 363))) {
                // line 364
                echo "        <div class=\"btn-group\">
            <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"true\">
                ";
                // line 367
                $context["icon"] = ((((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 367)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 367)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == "ASC")) ? ("fas fa-sort-amount-down-alt") : ("fas fa-sort-amount-down"));
                // line 368
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-lg-inline\">";
                // line 369
                echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 369)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 369)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["label"] ?? null) : null), "html", null, true);
                echo "</span>
                <span class=\"caret\"></span>
            </button>
            <div class=\"dropdown-menu dropdown-menu-right\">
                ";
                // line 373
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 373));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 374
                    echo "                    ";
                    $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 374) == $context["key"])) ? (" active") : (""));
                    // line 375
                    echo "                    ";
                    $context["icon"] = (((twig_get_attribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 375) == "ASC")) ? ("fas fa-sort-amount-down-alt") : ("fas fa-sort-amount-down"));
                    // line 376
                    echo "                    <a class=\"dropdown-item";
                    echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                    echo "\" href=\"#\"
                       onclick=\"listViewSetOrder('";
                    // line 377
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 377), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "');\">
                        <i class=\"";
                    // line 378
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 378), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                echo "            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/ListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1013 => 381,  1002 => 378,  996 => 377,  991 => 376,  988 => 375,  985 => 374,  981 => 373,  974 => 369,  969 => 368,  967 => 367,  962 => 364,  959 => 363,  946 => 362,  927 => 351,  923 => 350,  919 => 348,  916 => 347,  902 => 346,  891 => 342,  888 => 341,  879 => 338,  875 => 337,  870 => 336,  866 => 335,  863 => 334,  860 => 333,  851 => 330,  847 => 329,  841 => 328,  838 => 327,  834 => 326,  826 => 320,  811 => 319,  796 => 312,  791 => 310,  781 => 302,  778 => 301,  775 => 300,  772 => 299,  758 => 298,  742 => 290,  738 => 289,  732 => 286,  720 => 277,  707 => 267,  698 => 262,  695 => 261,  681 => 260,  671 => 257,  664 => 253,  659 => 252,  657 => 251,  650 => 247,  646 => 246,  638 => 243,  635 => 242,  633 => 241,  630 => 240,  626 => 238,  615 => 235,  609 => 234,  604 => 233,  601 => 232,  598 => 231,  594 => 230,  587 => 225,  585 => 224,  580 => 222,  576 => 221,  573 => 220,  570 => 219,  567 => 218,  564 => 217,  549 => 216,  544 => 361,  541 => 345,  538 => 318,  535 => 297,  532 => 259,  529 => 214,  520 => 212,  516 => 211,  512 => 208,  506 => 206,  503 => 205,  497 => 201,  493 => 199,  489 => 196,  484 => 193,  475 => 190,  469 => 189,  464 => 188,  461 => 187,  457 => 186,  451 => 184,  448 => 183,  445 => 182,  443 => 181,  436 => 176,  427 => 173,  424 => 172,  420 => 171,  416 => 170,  412 => 168,  403 => 165,  400 => 164,  396 => 163,  392 => 162,  386 => 158,  377 => 155,  374 => 154,  370 => 153,  362 => 147,  359 => 146,  354 => 142,  343 => 139,  340 => 138,  334 => 136,  325 => 134,  320 => 133,  313 => 129,  308 => 126,  306 => 125,  297 => 124,  294 => 123,  291 => 122,  285 => 121,  283 => 120,  278 => 117,  269 => 115,  264 => 114,  257 => 110,  252 => 107,  250 => 106,  243 => 103,  241 => 102,  238 => 101,  232 => 97,  229 => 96,  226 => 94,  217 => 92,  213 => 91,  209 => 90,  204 => 89,  201 => 88,  194 => 84,  189 => 82,  184 => 80,  177 => 76,  170 => 72,  165 => 70,  163 => 69,  157 => 66,  154 => 65,  152 => 64,  149 => 63,  142 => 59,  138 => 58,  135 => 57,  132 => 56,  129 => 55,  122 => 51,  117 => 50,  110 => 46,  107 => 45,  104 => 44,  102 => 43,  98 => 41,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  64 => 30,  58 => 27,  54 => 26,  50 => 25,  46 => 24,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListView.html.twig", "C:\\xampp\\htdocs\\facturascripts\\Dinamic\\View\\Master\\ListView.html.twig");
    }
}
