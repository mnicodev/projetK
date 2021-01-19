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

/* modules/custom/kidiklik_front/kidiklik_front_publicite/templates/publicite-block.html.twig */
class __TwigTemplate_cff51d45b7ae916f11906a00471018db291e928e6197262559881f261d238161 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 11, "if" => 16];
        $filters = ["escape" => 15, "raw" => 17];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/custom/kidiklik_front/kidiklik_front_publicite/templates/publicite-block.html.twig"));

        // line 11
        $context["classes"] = [0 => "clear-both"];
        // line 14
        echo "<div id=\"bloc-publicite\">
\t<div class=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "class", [])), "html", null, true);
        echo "\">
\t\t\t";
        // line 16
        if ($this->getAttribute(($context["content"] ?? null), "script", [])) {
            // line 17
            echo "\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "script", [])));
            echo "
\t\t\t";
        } elseif ($this->getAttribute(        // line 18
($context["content"] ?? null), "img", [])) {
            // line 19
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "url", [])), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "img", [])), "html", null, true);
            echo "\" data-nid=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "nid", [])), "html", null, true);
            echo "\"/>
\t\t\t</a>
\t\t\t";
        }
        // line 23
        echo "\t</div>
</div>
<script>
\$ = jQuery;
\$(function() {
\t\$.ajax({
\t\turl: \"";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path_stat"] ?? null)), "html", null, true);
        echo "\",
\t\tdata: \"nid=";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "nid", [])), "html", null, true);
        echo "\",
\t\ttype: \"POST\",
\t\tsuccess: function(result, statut) {
\t\t\tconsole.log(result)
\t\t},
\t});
});
</script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/custom/kidiklik_front/kidiklik_front_publicite/templates/publicite-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  97 => 29,  89 => 23,  81 => 20,  76 => 19,  74 => 18,  69 => 17,  67 => 16,  63 => 15,  60 => 14,  58 => 11,);
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
* Default theme implementation to display a block.
*
* @see template_preprocess_block()
*
* @ingroup themeable
*/
#}
{% set classes = [
    'clear-both',
] %}
<div id=\"bloc-publicite\">
\t<div class=\"{{ content.class }}\">
\t\t\t{% if content.script %}
\t\t\t{{ content.script|raw }}
\t\t\t{% elseif content.img %}
\t\t\t<a href=\"{{ content.url }}\">
\t\t\t\t<img src=\"{{ content.img }}\" data-nid=\"{{ content.nid }}\"/>
\t\t\t</a>
\t\t\t{% endif %}
\t</div>
</div>
<script>
\$ = jQuery;
\$(function() {
\t\$.ajax({
\t\turl: \"{{ path_stat }}\",
\t\tdata: \"nid={{ content.nid }}\",
\t\ttype: \"POST\",
\t\tsuccess: function(result, statut) {
\t\t\tconsole.log(result)
\t\t},
\t});
});
</script>
", "modules/custom/kidiklik_front/kidiklik_front_publicite/templates/publicite-block.html.twig", "/var/www/html/web/modules/custom/kidiklik_front/kidiklik_front_publicite/templates/publicite-block.html.twig");
    }
}
