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

/* __string_template__1114a4ee7f00306740c28c00bd84603170271aae9ade1fe05465356cb4017cc7 */
class __TwigTemplate_6e4527f827e8f6c630abfcb7180b5560d611117d0cadf40d6a2d5566df61ddf0 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__1114a4ee7f00306740c28c00bd84603170271aae9ade1fe05465356cb4017cc7"));

        // line 1
        echo "<div class=\"dropbutton-wrapper\"><div class=\"dropbutton-widget\"><ul class=\"dropbutton\"><li class=\"edit\"><a href=\"/node/";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null)), "html", null, true);
        echo "/edit?destination=/admin/publicites\" hreflang=\"fr\">Editer</a></li><li class=\"delete\"><a href=\"/node/";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null)), "html", null, true);
        echo "/delete?destination=/admin/publicites\" hreflang=\"fr\" class=\"use-ajax\" data-dialog-options=\"{&quot;width&quot;:600}\" data-dialog-type=\"modal\">Supprimer</a></li></ul></div></div>  
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__1114a4ee7f00306740c28c00bd84603170271aae9ade1fe05465356cb4017cc7";
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
        return new Source("{# inline_template_start #}<div class=\"dropbutton-wrapper\"><div class=\"dropbutton-widget\"><ul class=\"dropbutton\"><li class=\"edit\"><a href=\"/node/{{ nid }}/edit?destination=/admin/publicites\" hreflang=\"fr\">Editer</a></li><li class=\"delete\"><a href=\"/node/{{ nid }}/delete?destination=/admin/publicites\" hreflang=\"fr\" class=\"use-ajax\" data-dialog-options=\"{&quot;width&quot;:600}\" data-dialog-type=\"modal\">Supprimer</a></li></ul></div></div>  
", "__string_template__1114a4ee7f00306740c28c00bd84603170271aae9ade1fe05465356cb4017cc7", "");
    }
}
