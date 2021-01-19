<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/kidiklik_admin/templates/compteur-pub.html.twig */
class __TwigTemplate_86e0655f9e36a505ba9fc9623110bb0536701d01acd8f3952d2e7dc37bf7d303 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10, "for" => 15];
        $filters = ["escape" => 1, "length" => 13, "replace" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'replace'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/custom/kidiklik_admin/templates/compteur-pub.html.twig"));

        // line 1
        echo "<h1>Liste des publicités pour le mois de ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["periode"] ?? null)), "html", null, true);
        echo "</h1>
<br>
<div class=\"row\">
<div class=\"col-xs-12\">
<a href=\"/admin/publicites/compteur?mois=";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mois"] ?? null)), "html", null, true);
        echo "&delta=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["delta"] ?? null) - 1), "html", null, true);
        echo "\" class=\"btn btn-warning align-left\">Mois précédent</a>
<a href=\"/admin/publicites/compteur?mois=";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mois"] ?? null)), "html", null, true);
        echo "&delta=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["delta"] ?? null) + 1), "html", null, true);
        echo "\" class=\"btn btn-warning align-right\">Mois suivant</a>
</div>
</div>
<br>
";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "<div class=\"alert alert-error\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["error"] ?? null)), "html", null, true);
            echo "</div>
";
        }
        // line 13
        if (twig_length_filter($this->env, ($context["pub"] ?? null))) {
            // line 14
            echo "<table class=\"periode-tab views-table views-view-table cols-10 sticky-enabled table table-bordered  responsive\">
";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pub"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["line"]) {
                // line 16
                echo "<tr class=\"periode\">
<td colspan='4' >du ";
                // line 17
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed($context["key"]), ["_" => " au "]), "html", null, true);
                echo "</td>
</tr>

    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["line"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 21
                    echo "    <tr class=\"line\">
    <td>";
                    // line 22
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo "</td>
    <td>";
                    // line 23
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "format", [])), "html", null, true);
                    echo "</td>
    <td>";
                    // line 24
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "date_deb", [])), "html", null, true);
                    echo "</td>
    <td>";
                    // line 25
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "date_fin", [])), "html", null, true);
                    echo "</td>
    </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t<tr colspan='4' height=\"10\"><td></td></tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "</table>
";
        }
        // line 32
        echo "<div class=\"row\">
<div class=\"col-xs-12\">
<a href=\"/admin/publicites/compteur?mois=";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mois"] ?? null)), "html", null, true);
        echo "&delta=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["delta"] ?? null) - 1), "html", null, true);
        echo "\" class=\"btn btn-warning align-left\">Mois précédent</a>
<a href=\"/admin/publicites/compteur?mois=";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mois"] ?? null)), "html", null, true);
        echo "&delta=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["delta"] ?? null) + 1), "html", null, true);
        echo "\" class=\"btn btn-warning align-right\">Mois suivant</a>
</div>
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/custom/kidiklik_admin/templates/compteur-pub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 35,  150 => 34,  146 => 32,  142 => 30,  135 => 28,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  111 => 21,  107 => 20,  101 => 17,  98 => 16,  94 => 15,  91 => 14,  89 => 13,  83 => 11,  81 => 10,  72 => 6,  66 => 5,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Liste des publicités pour le mois de {{ periode }}</h1>
<br>
<div class=\"row\">
<div class=\"col-xs-12\">
<a href=\"/admin/publicites/compteur?mois={{ mois }}&delta={{ delta-1 }}\" class=\"btn btn-warning align-left\">Mois précédent</a>
<a href=\"/admin/publicites/compteur?mois={{ mois }}&delta={{ delta+1 }}\" class=\"btn btn-warning align-right\">Mois suivant</a>
</div>
</div>
<br>
{% if error %}
<div class=\"alert alert-error\">{{ error }}</div>
{% endif %}
{% if pub|length %}
<table class=\"periode-tab views-table views-view-table cols-10 sticky-enabled table table-bordered  responsive\">
{% for key,line in pub %}
<tr class=\"periode\">
<td colspan='4' >du {{ key|replace({\"_\":\" au \"}) }}</td>
</tr>

    {% for item in line %}
    <tr class=\"line\">
    <td>{{ item.title }}</td>
    <td>{{ item.format }}</td>
    <td>{{ item.date_deb }}</td>
    <td>{{ item.date_fin }}</td>
    </tr>
    {% endfor %}
\t<tr colspan='4' height=\"10\"><td></td></tr>
{% endfor %}
</table>
{% endif %}
<div class=\"row\">
<div class=\"col-xs-12\">
<a href=\"/admin/publicites/compteur?mois={{ mois }}&delta={{ delta-1 }}\" class=\"btn btn-warning align-left\">Mois précédent</a>
<a href=\"/admin/publicites/compteur?mois={{ mois }}&delta={{ delta+1 }}\" class=\"btn btn-warning align-right\">Mois suivant</a>
</div>
</div>
", "modules/custom/kidiklik_admin/templates/compteur-pub.html.twig", "/var/www/html/web/modules/custom/kidiklik_admin/templates/compteur-pub.html.twig");
    }
}
