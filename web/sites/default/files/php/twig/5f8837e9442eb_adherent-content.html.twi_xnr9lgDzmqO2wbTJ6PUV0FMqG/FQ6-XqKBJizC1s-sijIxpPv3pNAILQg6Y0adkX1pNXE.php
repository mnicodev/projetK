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

/* modules/custom/kidiklik_admin/templates/adherent-content.html.twig */
class __TwigTemplate_b05438c8c2e6b74614f01b7f11c09f8cb9350f966d761f20af6318bb57e7b034 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/custom/kidiklik_admin/templates/adherent-content.html.twig"));

        // line 1
        echo "<h1>Contenus de l'adhérent ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["adherent"] ?? null)), "html", null, true);
        echo "</h1>
<form method=\"post\" class=\"filtre-content-adherent\">
<div class=\"row\">
\t
\t\t<div class=\"col-md-4\">
\t\t\t<label>Date de début</label>
\t\t\t<input type=\"date\" name=\"date_deb\" class=\"form-control\" value=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date_deb"] ?? null)), "html", null, true);
        echo "\" />
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<label>Date de fin</label>
\t\t\t<input type=\"date\" name=\"date_fin\" class=\"form-control\" value=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date_fin"] ?? null)), "html", null, true);
        echo "\"  />
\t\t</div>
\t\t<div class=\"col-md-4\" style=\"margin-top: 25px\">
\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Filtrer\"  />
\t\t</div>
\t
</div>
</form>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/custom/kidiklik_admin/templates/adherent-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  68 => 7,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Contenus de l'adhérent {{ adherent }}</h1>
<form method=\"post\" class=\"filtre-content-adherent\">
<div class=\"row\">
\t
\t\t<div class=\"col-md-4\">
\t\t\t<label>Date de début</label>
\t\t\t<input type=\"date\" name=\"date_deb\" class=\"form-control\" value=\"{{ date_deb }}\" />
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<label>Date de fin</label>
\t\t\t<input type=\"date\" name=\"date_fin\" class=\"form-control\" value=\"{{ date_fin }}\"  />
\t\t</div>
\t\t<div class=\"col-md-4\" style=\"margin-top: 25px\">
\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Filtrer\"  />
\t\t</div>
\t
</div>
</form>
", "modules/custom/kidiklik_admin/templates/adherent-content.html.twig", "/home/nico/projetK/web/modules/custom/kidiklik_admin/templates/adherent-content.html.twig");
    }
}
