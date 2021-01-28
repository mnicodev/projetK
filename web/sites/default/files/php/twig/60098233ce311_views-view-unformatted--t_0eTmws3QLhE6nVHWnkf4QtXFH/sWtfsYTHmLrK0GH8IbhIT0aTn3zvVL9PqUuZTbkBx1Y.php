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

/* themes/contrib/business_responsive_theme/templates/views/views-view-unformatted--taxonomy-term.html.twig */
class __TwigTemplate_71813af9f8cdd4c2c55701fdacc64c743ab23f429ab014f52750e2e045c63598 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 18, "set" => 21, "for" => 23];
        $filters = ["escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/business_responsive_theme/templates/views/views-view-unformatted--taxonomy-term.html.twig"));

        // line 18
        if (($context["title"] ?? null)) {
            // line 19
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 21
        $context["cpt"] = 1;
        // line 22
        $context["cpt_pub"] = 0;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "  ";
            // line 25
            $context["row_classes"] = [0 => ((            // line 26
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 29
            echo "
  
  <div";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            // line 33
            echo "</div>
  ";
            // line 34
            if ((($context["cpt"] ?? null) == 5)) {
                // line 35
                echo "  <div><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pub"] ?? null), ($context["cpt_pub"] ?? null), [], "array"), "url", [])), "html", null, true);
                echo "\" target=\"blank\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pub"] ?? null), ($context["cpt_pub"] ?? null), [], "array"), "img", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["pub"] ?? null), ($context["cpt_pub"] ?? null), [], "array"), "title", [])), "html", null, true);
                echo "\" /></a></div>
  ";
                // line 36
                $context["cpt"] = 0;
                // line 37
                echo "  ";
                $context["cpt_pub"] = (($context["cpt_pub"] ?? null) + 1);
                // line 38
                echo "
  ";
            }
            // line 40
            echo "  ";
            $context["cpt"] = (($context["cpt"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/business_responsive_theme/templates/views/views-view-unformatted--taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  107 => 38,  104 => 37,  102 => 36,  93 => 35,  91 => 34,  88 => 33,  86 => 32,  83 => 31,  79 => 29,  77 => 26,  76 => 25,  74 => 24,  70 => 23,  68 => 22,  66 => 21,  60 => 19,  58 => 18,);
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
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
{% set cpt = 1 %}
{% set cpt_pub=0 %}
{% for row in rows %}
  {%
    set row_classes = [
      default_row_class ? 'views-row',
    ]
  %}

  
  <div{{ row.attributes.addClass(row_classes) }}>
    {{- row.content -}}
  </div>
  {% if cpt == 5 %}
  <div><a href=\"{{ pub[cpt_pub].url }}\" target=\"blank\"><img src=\"{{ pub[cpt_pub].img }}\" title=\"{{ pub[cpt_pub].title }}\" /></a></div>
  {% set cpt = 0 %}
  {% set cpt_pub = cpt_pub + 1 %}

  {% endif %}
  {% set cpt = cpt + 1 %}
{% endfor %}
", "themes/contrib/business_responsive_theme/templates/views/views-view-unformatted--taxonomy-term.html.twig", "/var/www/html/web/themes/contrib/business_responsive_theme/templates/views/views-view-unformatted--taxonomy-term.html.twig");
    }
}
