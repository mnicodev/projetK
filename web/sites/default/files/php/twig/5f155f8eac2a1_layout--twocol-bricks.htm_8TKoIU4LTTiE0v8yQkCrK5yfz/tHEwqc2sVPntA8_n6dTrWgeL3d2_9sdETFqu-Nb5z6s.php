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

/* core/themes/stable/templates/layout/layout--twocol-bricks.html.twig */
class __TwigTemplate_a58706bb3b42dad9ab722d743e69f7408397f4e35de62bb7abfe702a4878b91b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 15, "if" => 20];
        $filters = ["escape" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/stable/templates/layout/layout--twocol-bricks.html.twig"));

        // line 15
        $context["classes"] = [0 => "layout", 1 => "layout--twocol-bricks"];
        // line 20
        if (($context["content"] ?? null)) {
            // line 21
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
    ";
            // line 22
            if ($this->getAttribute(($context["content"] ?? null), "top", [])) {
                // line 23
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top", []), "addClass", [0 => "layout__region", 1 => "layout__region--top"], "method")), "html", null, true);
                echo ">
        ";
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if ($this->getAttribute(($context["content"] ?? null), "first_above", [])) {
                // line 29
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "first_above", []), "addClass", [0 => "layout__region", 1 => "layout__region--first-above"], "method")), "html", null, true);
                echo ">
        ";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "first_above", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ($this->getAttribute(($context["content"] ?? null), "second_above", [])) {
                // line 35
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "second_above", []), "addClass", [0 => "layout__region", 1 => "layout__region--second-above"], "method")), "html", null, true);
                echo ">
        ";
                // line 36
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "second_above", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 39
            echo "
    ";
            // line 40
            if ($this->getAttribute(($context["content"] ?? null), "middle", [])) {
                // line 41
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "middle", []), "addClass", [0 => "layout__region", 1 => "layout__region--middle"], "method")), "html", null, true);
                echo ">
        ";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if ($this->getAttribute(($context["content"] ?? null), "first_below", [])) {
                // line 47
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "first_below", []), "addClass", [0 => "layout__region", 1 => "layout__region--first-below"], "method")), "html", null, true);
                echo ">
        ";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "first_below", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 51
            echo "
    ";
            // line 52
            if ($this->getAttribute(($context["content"] ?? null), "second_below", [])) {
                // line 53
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "second_below", []), "addClass", [0 => "layout__region", 1 => "layout__region--second-below"], "method")), "html", null, true);
                echo ">
        ";
                // line 54
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "second_below", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 57
            echo "
    ";
            // line 58
            if ($this->getAttribute(($context["content"] ?? null), "bottom", [])) {
                // line 59
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom", []), "addClass", [0 => "layout__region", 1 => "layout__region--bottom"], "method")), "html", null, true);
                echo ">
        ";
                // line 60
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "bottom", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 63
            echo "  </div>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/layout/layout--twocol-bricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  170 => 60,  165 => 59,  163 => 58,  160 => 57,  154 => 54,  149 => 53,  147 => 52,  144 => 51,  138 => 48,  133 => 47,  131 => 46,  128 => 45,  122 => 42,  117 => 41,  115 => 40,  112 => 39,  106 => 36,  101 => 35,  99 => 34,  96 => 33,  90 => 30,  85 => 29,  83 => 28,  80 => 27,  74 => 24,  69 => 23,  67 => 22,  62 => 21,  60 => 20,  58 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/layout/layout--twocol-bricks.html.twig", "/home/nico/projetK/web/core/themes/stable/templates/layout/layout--twocol-bricks.html.twig");
    }
}
