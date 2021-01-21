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

/* core/themes/stable/templates/admin/update-project-status.html.twig */
class __TwigTemplate_7e9a92320eaa356f6574a9a5f2b9d8b3ea5901a79d26eb7c4f4b0499f4a01258 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "if" => 38, "for" => 61, "trans" => 88];
        $filters = ["escape" => 37, "join" => 83, "t" => 85, "placeholder" => 89];
        $functions = ["constant" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'trans'],
                ['escape', 'join', 't', 'placeholder'],
                ['constant']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/update-project-status.html.twig"));

        // line 29
        $context["status_classes"] = [0 => ((($this->getAttribute(        // line 30
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), 1 => ((($this->getAttribute(        // line 31
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-update__status--revoked") : ("")), 2 => ((($this->getAttribute(        // line 32
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), 3 => ((($this->getAttribute(        // line 33
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), 4 => ((($this->getAttribute(        // line 34
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::CURRENT"))) ? ("project-update__status--current") : (""))];
        // line 37
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["status"] ?? null), "attributes", []), "addClass", [0 => "project-update__status", 1 => ($context["status_classes"] ?? null)], "method")), "html", null, true);
        echo ">";
        // line 38
        if ($this->getAttribute(($context["status"] ?? null), "label", [])) {
            // line 39
            echo "<span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status"] ?? null), "label", [])), "html", null, true);
            echo "</span>";
        } else {
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status"] ?? null), "reason", [])), "html", null, true);
        }
        // line 43
        echo "  <span class=\"project-update__status-icon\">
    ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status"] ?? null), "icon", [])), "html", null, true);
        echo "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 49
        if (($context["url"] ?? null)) {
            // line 50
            echo "<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</a>";
        } else {
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        }
        // line 54
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["existing_version"] ?? null)), "html", null, true);
        echo "
  ";
        // line 55
        if (((($context["install_type"] ?? null) == "dev") && ($context["datestamp"] ?? null))) {
            // line 56
            echo "    <span class=\"project-update__version-date\">(";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["datestamp"] ?? null)), "html", null, true);
            echo ")</span>
  ";
        }
        // line 58
        echo "</div>

";
        // line 60
        if (($context["versions"] ?? null)) {
            // line 61
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 62
                echo "    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["version"]), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 65
        echo "
";
        // line 67
        $context["extra_classes"] = [0 => ((($this->getAttribute(        // line 68
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-not-secure") : ("")), 1 => ((($this->getAttribute(        // line 69
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-revoked") : ("")), 2 => ((($this->getAttribute(        // line 70
($context["project"] ?? null), "status", []) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-not-supported") : (""))];
        // line 73
        echo "<div class=\"project-updates__details\">
  ";
        // line 74
        if (($context["extras"] ?? null)) {
            // line 75
            echo "    <div class=\"extra\">
      ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extras"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 77
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["extra"], "attributes", []), "addClass", [0 => ($context["extra_classes"] ?? null)], "method")), "html", null, true);
                echo ">
          ";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["extra"], "label", [])), "html", null, true);
                echo ": ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["extra"], "data", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    </div>
  ";
        }
        // line 83
        echo "  ";
        $context["includes"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["includes"] ?? null)), ", ");
        // line 84
        echo "  ";
        if (($context["disabled"] ?? null)) {
            // line 85
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Includes:"));
            echo "
    <ul>
      <li>
        ";
            // line 88
            echo t("Enabled: %includes", array("%includes" =>             // line 89
($context["includes"] ?? null), ));
            // line 91
            echo "      </li>
      <li>
        ";
            // line 93
            $context["disabled"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null)), ", ");
            // line 94
            echo "        ";
            echo t("Disabled: %disabled", array("%disabled" =>             // line 95
($context["disabled"] ?? null), ));
            // line 97
            echo "      </li>
    </ul>
  ";
        } else {
            // line 100
            echo "    ";
            echo t("Includes: %includes", array("%includes" =>             // line 101
($context["includes"] ?? null), ));
            // line 103
            echo "  ";
        }
        // line 104
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/update-project-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 104,  210 => 103,  208 => 101,  206 => 100,  201 => 97,  199 => 95,  197 => 94,  195 => 93,  191 => 91,  189 => 89,  188 => 88,  181 => 85,  178 => 84,  175 => 83,  171 => 81,  160 => 78,  155 => 77,  151 => 76,  148 => 75,  146 => 74,  143 => 73,  141 => 70,  140 => 69,  139 => 68,  138 => 67,  135 => 65,  125 => 62,  120 => 61,  118 => 60,  114 => 58,  108 => 56,  106 => 55,  101 => 54,  98 => 52,  91 => 50,  89 => 49,  82 => 44,  79 => 43,  76 => 41,  71 => 39,  69 => 38,  65 => 37,  63 => 34,  62 => 33,  61 => 32,  60 => 31,  59 => 30,  58 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the project status report.
 *
 * Available variables:
 * - title: The project title.
 * - url: The project url.
 * - status: The project status.
 *   - label: The project status label.
 *   - attributes: HTML attributes for the project status.
 *   - reason: The reason you should update the project.
 *   - icon: The project status version indicator icon.
 * - existing_version: The version of the installed project.
 * - versions: The available versions of the project.
 * - install_type: The type of project (e.g., dev).
 * - datestamp: The date/time of a project version's release.
 * - extras: HTML attributes and additional information about the project.
 *   - attributes: HTML attributes for the extra item.
 *   - label: The label for an extra item.
 *   - data: The data about an extra item.
 * - includes: The projects within the project.
 * - disabled: The currently disabled projects in the project.
 *
 * @see template_preprocess_update_project_status()
 */
#}
{%
  set status_classes = [
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SECURE') ? 'project-update__status--security-error',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::REVOKED') ? 'project-update__status--revoked',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SUPPORTED') ? 'project-update__status--not-supported',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_CURRENT') ? 'project-update__status--not-current',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::CURRENT') ? 'project-update__status--current',
  ]
%}
<div{{ status.attributes.addClass('project-update__status', status_classes) }}>
  {%- if status.label -%}
    <span>{{ status.label }}</span>
  {%- else -%}
    {{ status.reason }}
  {%- endif %}
  <span class=\"project-update__status-icon\">
    {{ status.icon }}
  </span>
</div>

<div class=\"project-update__title\">
  {%- if url -%}
    <a href=\"{{ url }}\">{{ title }}</a>
  {%- else -%}
    {{ title }}
  {%- endif %}
  {{ existing_version }}
  {% if install_type == 'dev' and datestamp %}
    <span class=\"project-update__version-date\">({{ datestamp }})</span>
  {% endif %}
</div>

{% if versions %}
  {% for version in versions %}
    {{ version }}
  {% endfor %}
{% endif %}

{%
  set extra_classes = [
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SECURE') ? 'project-not-secure',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::REVOKED') ? 'project-revoked',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SUPPORTED') ? 'project-not-supported',
  ]
%}
<div class=\"project-updates__details\">
  {% if extras %}
    <div class=\"extra\">
      {% for extra in extras %}
        <div{{ extra.attributes.addClass(extra_classes) }}>
          {{ extra.label }}: {{ extra.data }}
        </div>
      {% endfor %}
    </div>
  {% endif %}
  {% set includes = includes|join(', ') %}
  {% if disabled %}
    {{ 'Includes:'|t }}
    <ul>
      <li>
        {% trans %}
          Enabled: {{ includes|placeholder }}
        {% endtrans %}
      </li>
      <li>
        {% set disabled = disabled|join(', ') %}
        {% trans %}
          Disabled: {{ disabled|placeholder }}
        {% endtrans %}
      </li>
    </ul>
  {% else %}
    {% trans %}
      Includes: {{ includes|placeholder }}
    {% endtrans %}
  {% endif %}
</div>
", "core/themes/stable/templates/admin/update-project-status.html.twig", "/var/www/html/web/core/themes/stable/templates/admin/update-project-status.html.twig");
    }
}
