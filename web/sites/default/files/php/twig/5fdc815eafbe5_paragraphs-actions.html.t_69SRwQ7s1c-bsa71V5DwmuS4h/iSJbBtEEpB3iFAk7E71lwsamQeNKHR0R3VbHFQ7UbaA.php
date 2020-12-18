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

/* modules/contrib/paragraphs/templates/paragraphs-actions.html.twig */
class __TwigTemplate_dccc6b6f88359780da1aa60776343b9520b0569b60db7fb30b52f6ab56965bab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 20, "if" => 21, "trans" => 23];
        $filters = ["escape" => 16];
        $functions = ["render_var" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
                ['render_var']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/paragraphs/templates/paragraphs-actions.html.twig"));

        // line 15
        echo "<div class=\"paragraphs-actions\">
  ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actions"] ?? null)), "html", null, true);
        echo "
  ";
        // line 20
        echo "  ";
        $context["dropdown_actions_output"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["dropdown_actions"] ?? null)));
        // line 21
        echo "  ";
        if (($context["dropdown_actions_output"] ?? null)) {
            // line 22
            echo "    <div class=\"paragraphs-dropdown\">
      <button class=\"paragraphs-dropdown-toggle\"><span class=\"visually-hidden\">";
            // line 23
            echo t("Toggle Actions", array());
            echo "</span></button>
      <div class=\"paragraphs-dropdown-actions\">
        ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dropdown_actions_output"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 29
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/paragraphs/templates/paragraphs-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  79 => 25,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  61 => 16,  58 => 15,);
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
 * Default theme implementation for a paragraphs actions component.
 *
 * Available variables:
 * - actions - default actions, always visible and not in dropdown.
 * - dropdown_actions - actions for dropdown subcomponent.
 *
 * @see template_preprocess()
 *
 * @ingroup themeable
 */
#}
<div class=\"paragraphs-actions\">
  {{ actions }}
  {# We are still using access attribute on some places to disable dropdown
     actions and that is why we will first render dropdown_actions and then
     render dropdown subcomoponent if needed. #}
  {% set dropdown_actions_output = render_var(dropdown_actions) %}
  {% if dropdown_actions_output %}
    <div class=\"paragraphs-dropdown\">
      <button class=\"paragraphs-dropdown-toggle\"><span class=\"visually-hidden\">{% trans %}Toggle Actions{% endtrans %}</span></button>
      <div class=\"paragraphs-dropdown-actions\">
        {{ dropdown_actions_output }}
      </div>
    </div>
  {% endif %}
</div>
", "modules/contrib/paragraphs/templates/paragraphs-actions.html.twig", "/home/nico/projetK/web/modules/contrib/paragraphs/templates/paragraphs-actions.html.twig");
    }
}
