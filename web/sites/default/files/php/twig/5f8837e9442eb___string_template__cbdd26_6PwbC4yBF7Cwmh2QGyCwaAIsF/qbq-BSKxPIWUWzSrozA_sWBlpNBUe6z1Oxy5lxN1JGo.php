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

/* __string_template__cbdd26367a96ab2c8b2bbf8beea614565253bfde3242cfdeaf2b2aca4833573c */
class __TwigTemplate_2ec149fa7283cdaa45d3bf43d1b0798d1be577a1442bcaecdec5d91ec2a57a2f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__cbdd26367a96ab2c8b2bbf8beea614565253bfde3242cfdeaf2b2aca4833573c"));

        // line 1
        echo "<div class=\"dropbutton-wrapper\"><div class=\"dropbutton-widget\"><ul class=\"dropbutton\"><li class=\"edit\"><a href=\"/node/";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null)), "html", null, true);
        echo "/edit?destination=/admin/adherent/";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["raw_arguments"] ?? null), "field_adherent_target_id", [])), "html", null, true);
        echo "&adherent=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["raw_arguments"] ?? null), "field_adherent_target_id", [])), "html", null, true);
        echo "\" hreflang=\"fr\" >Editer</a></li><li class=\"delete\"><a href=\"/node/";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null)), "html", null, true);
        echo "/delete?destination=/admin/adherent/";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["raw_arguments"] ?? null), "field_adherent_target_id", [])), "html", null, true);
        echo "\" hreflang=\"fr\" class=\"use-ajax\" data-dialog-options=\"{&quot;width&quot;:600}\" data-dialog-type=\"modal\">Supprimer</a></li></ul></div></div>  

";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__cbdd26367a96ab2c8b2bbf8beea614565253bfde3242cfdeaf2b2aca4833573c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"dropbutton-wrapper\"><div class=\"dropbutton-widget\"><ul class=\"dropbutton\"><li class=\"edit\"><a href=\"/node/{{ nid }}/edit?destination=/admin/adherent/{{ raw_arguments.field_adherent_target_id }}&adherent={{ raw_arguments.field_adherent_target_id }}\" hreflang=\"fr\" >Editer</a></li><li class=\"delete\"><a href=\"/node/{{ nid }}/delete?destination=/admin/adherent/{{ raw_arguments.field_adherent_target_id }}\" hreflang=\"fr\" class=\"use-ajax\" data-dialog-options=\"{&quot;width&quot;:600}\" data-dialog-type=\"modal\">Supprimer</a></li></ul></div></div>  

", "__string_template__cbdd26367a96ab2c8b2bbf8beea614565253bfde3242cfdeaf2b2aca4833573c", "");
    }
}
