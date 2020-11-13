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

/* modules/contrib/webform/templates/webform-codemirror.html.twig */
class __TwigTemplate_6ba7649a531d62a14d36ba410ca7e95de47375271b4c1a835dc250ddc199c1e4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 18];
        $filters = ["escape" => 19];
        $functions = ["attach_library" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-codemirror.html.twig"));

        // line 18
        if ((($context["type"] ?? null) == "html")) {
            // line 19
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform/webform.element.codemirror.html"), "html", null, true);
            echo "
";
        } elseif ((        // line 20
($context["type"] ?? null) == "yaml")) {
            // line 21
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform/webform.element.codemirror.yaml"), "html", null, true);
            echo "
";
        } else {
            // line 23
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform/webform.element.codemirror.text"), "html", null, true);
            echo "
";
        }
        // line 25
        echo "<pre class=\"js-webform-codemirror-runmode webform-codemirror-runmode\" data-webform-codemirror-mode=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mode"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["code"] ?? null)), "html", null, true);
        echo "</pre>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-codemirror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  73 => 23,  67 => 21,  65 => 20,  60 => 19,  58 => 18,);
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
 * Theme implementation for 'CodeMirror' code.
 *
 * Available variables
 * - code: The code.
 * - type: The type of code.
 * - mode: The CodeMirror mode used to format the code.
 *
 * @see http://codemirror.net/doc/manual.html#option_mode
 * @see \\Drupal\\webform\\Element\\WebformCodeMirror()
 * @see template_preprocess_webform_codemirror()
 *
 * @ingroup themeable
 */
#}
{% if type == 'html' %}
  {{ attach_library('webform/webform.element.codemirror.html') }}
{% elseif type == 'yaml' %}
  {{ attach_library('webform/webform.element.codemirror.yaml') }}
{% else %}
  {{ attach_library('webform/webform.element.codemirror.text') }}
{% endif %}
<pre class=\"js-webform-codemirror-runmode webform-codemirror-runmode\" data-webform-codemirror-mode=\"{{ mode }}\">{{ code }}</pre>
", "modules/contrib/webform/templates/webform-codemirror.html.twig", "/home/nico/projetK/web/modules/contrib/webform/templates/webform-codemirror.html.twig");
    }
}
