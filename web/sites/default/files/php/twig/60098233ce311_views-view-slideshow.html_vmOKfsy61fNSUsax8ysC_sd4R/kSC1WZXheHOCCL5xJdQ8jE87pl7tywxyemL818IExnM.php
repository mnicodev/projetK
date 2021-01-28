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

/* modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig */
class __TwigTemplate_d35ea71f032a2494d90a7407d556c13f0973d8701b454c2b529a45bbee87830c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig"));

        // line 17
        if (($context["slideshow"] ?? null)) {
            // line 18
            echo "  <div class=\"skin-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["skin"] ?? null)), "html", null, true);
            echo "\">
    ";
            // line 19
            if (($context["top_widget_rendered"] ?? null)) {
                // line 20
                echo "      <div class=\"views-slideshow-controls-top clearfix\">
        ";
                // line 21
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_widget_rendered"] ?? null)), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 24
            echo "
    ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideshow"] ?? null)), "html", null, true);
            echo "

    ";
            // line 27
            if (($context["bottom_widget_rendered"] ?? null)) {
                // line 28
                echo "      <div class=\"views-slideshow-controls-bottom clearfix\">
        ";
                // line 29
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_widget_rendered"] ?? null)), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 32
            echo "    </div>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  89 => 29,  86 => 28,  84 => 27,  79 => 25,  76 => 24,  70 => 21,  67 => 20,  65 => 19,  60 => 18,  58 => 17,);
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
 * Default theme implementation for a views slideshow.
 *
 * Available variables:
 * - bottom_widget_rendered: Widget under the slideshow with controls/data.
 * - skin: The skin being applied to the slideshow.
 * - slideshow: The slideshow.
 * - top_widget_rendered: Widget above the slideshow with controls/data.
 *
 * @see _views_slideshow_preprocess_views_view_slideshow()
 *
 * @ingroup vss_templates
 */
#}
{% if slideshow %}
  <div class=\"skin-{{ skin }}\">
    {% if top_widget_rendered %}
      <div class=\"views-slideshow-controls-top clearfix\">
        {{ top_widget_rendered }}
      </div>
    {% endif %}

    {{ slideshow }}

    {% if bottom_widget_rendered %}
      <div class=\"views-slideshow-controls-bottom clearfix\">
        {{ bottom_widget_rendered }}
      </div>
    {% endif %}
    </div>
{% endif %}
", "modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig", "/var/www/html/web/modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig");
    }
}
