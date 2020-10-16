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

/* modules/custom/kidiklik_newsletter/templates/kidiklik-newsletter.html.twig */
class __TwigTemplate_e6fc159b3459689c457d16772336a203fee2c7eb35770d3696fbcef6201a1e42 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 60, "for" => 61, "if" => 64];
        $filters = ["escape" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/custom/kidiklik_newsletter/templates/kidiklik-newsletter.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
            /*Media Queries*/
            @media screen and (max-width: 480px) {
                .left-sidebar.item .left,
                .left-sidebar.item .right,
                .right-sidebar .left,
                .right-sidebar .right
                {
                    max-width: 100% !important;
                }
            }

            @media screen and (max-width: 620px) {
                .immanquable.left-sidebar .left,
                .immanquable.left-sidebar .right,
                .immanquable.right-sidebar .left,
                .immanquable.right-sidebar .right
                {
                    max-width: 100% !important;
                }
            }
        </style>
        <center class=\"wrapper\" style=\"width: 100%; table-layout: fixed; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;\">
            <div class=\"webkit\" style=\"max-width: 600px;\">
                <!--[if (gte mso 9)|(IE)]>
                <table width=\"600\" align=\"center\">
                <tr>
                <td>
                <![endif]-->
                <table class=\"outer\" align=\"center\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c; Margin: 0 auto; width: 100%; max-width: 600px;\">
                    <tr>
                        <td class=\"one-column\">
\t\t\t\t\t\t\t<table style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c;\" width=\"100%\">
                                <tbody><tr>
                                    <td class=\"inner contents entete\" style=\"padding: 15px 10px 15px 10px; width: 100%; padding-top: 15px; text-align: center; color: #000;\">
                                        <p style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px;\">
                                            ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["entete"] ?? null), "texte", [])), "html", null, true);
        echo "
                                        </p>
                                    </td>
                                </tr>
\t\t\t\t\t\t\t\t</tbody>
                            </table>
                        </td>
                     </tr>
                     <!-- pub -->
                     <tr>
                        <td class=\"one-column\">
\t\t\t\t\t\t\t<table style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c;\" width=\"100%\">
                                <tbody><tr>
                                    <td class=\"inner contents entete\" style=\"padding: 15px 10px 15px 10px; width: 100%; padding-top: 15px; text-align: center; color: #000;\">
                                        <p style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px;\">
                                            <img src=\"";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["entete"] ?? null), "pub", [])), "html", null, true);
        echo "\" />
                                        </p>
                                    </td>
                                </tr>
\t\t\t\t\t\t\t\t</tbody>
                            </table>
                        </td>
                     </tr>
                     ";
        // line 60
        $context["cpt"] = 0;
        // line 61
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bloc"]) {
            // line 62
            echo "                     <tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 64
            if (((($context["cpt"] ?? null) % 2) == 0)) {
                // line 65
                echo "\t\t\t\t\t\t\t   
\t\t                                <table width=\"100%\">
\t\t                                <tr>
\t\t                                <td width=\"265\">
\t\t                       
\t\t                                <table class=\"column left\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #000000; width: 100%; display: inline-block; vertical-align: middle; max-width: 335px;\">
\t\t                                    <tbody><tr>
\t\t                                        <td class=\"inner contents\" style=\"padding: 15px 10px 15px 10px; width: 100%; font-size: 14px; text-align: left;\">
\t\t                                            <p class=\"h2\" style=\"Margin: 0; font-weight: bold; Margin-bottom: 9px; line-height: 18px; font-size: 18px; color: #000000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 74
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "lien", [])), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #000000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 75
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "titre", [])), "html", null, true);
                echo "</a></p>
\t\t                                            <p style=\"Margin: 0;\">
\t\t                                                <a href=\"h";
                // line 77
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "lien", [])), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #000000;\">
\t\t                                                    ";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "texte", [])), "html", null, true);
                echo "
\t\t                                                </a>
\t\t                                            </p>
\t\t                                        </td>
\t\t                                    </tr>
\t\t                                </tbody></table>
\t\t                       
\t\t                                </td><td width=\"335\">
\t\t                       
\t\t                                <table class=\"column right\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #000000; width: 100%; display: inline-block; vertical-align: middle; max-width: 259px;\">
\t\t                                    <tbody><tr>
\t\t                                        <td class=\"inner full-width-image\" style=\"padding: 0;\">
\t\t                                            <a href=\"";
                // line 90
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "lien", [])), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #000000;\">
\t\t\t\t\t\t\t\t                        <img src=\"";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "image", [])), "html", null, true);
                echo "\" alt=\"Dossier spécial Vacances de Toussaint dans le Loiret\" style=\"border: 0; width: 100%; height: auto;\" width=\"265\">
\t\t\t\t\t\t\t\t\t\t                                            </a>
\t\t                                        </td>
\t\t                                    </tr>
\t\t                                </tbody></table>
\t\t                       
\t\t                                </td>
\t\t                                </tr>
\t\t                                </table>
\t\t                       
\t\t                    ";
            } else {
                // line 102
                echo "\t\t                    
\t\t                                <table width=\"100%\">
\t\t                                <tr>
\t\t                                <td width=\"265\">
\t\t                    
\t\t                                <table class=\"column left\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #000000; width: 100%; display: inline-block; vertical-align: middle; max-width: 259px;\">
\t\t                                    <tbody><tr>
\t\t                                        <td class=\"inner full-width-image\" style=\"padding: 0;\">
\t\t                                            <a href=\"";
                // line 110
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "lien", [])), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #000000;\">
\t\t\t\t\t\t\t\t                         <img src=\"";
                // line 111
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "image", [])), "html", null, true);
                echo "\" alt=\"Dossier spécial Vacances de Toussaint dans le Loiret\" style=\"border: 0; width: 100%; height: auto;\" width=\"265\">
\t\t\t\t\t\t\t\t\t\t                                            </a>
\t\t                                        </td>
\t\t                                    </tr>
\t\t                                </tbody></table>
\t\t                    
\t\t                                </td><td width=\"335\">
\t\t                    
\t\t                                <table class=\"column right\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #000000; width: 100%; display: inline-block; vertical-align: middle; max-width: 335px;\">
\t\t                                    <tbody><tr>
\t\t                                        <td class=\"inner contents\" style=\"padding: 15px 10px 15px 10px; width: 100%; font-size: 14px; text-align: left;\">
\t\t                                            <p class=\"h2\" style=\"Margin: 0; font-weight: bold; Margin-bottom: 9px; line-height: 18px; font-size: 18px; color: #000000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 123
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "lien", [])), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #000000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 124
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "titre", [])), "html", null, true);
                echo "</a></p>
\t\t                                            <p style=\"Margin: 0;\">
\t\t                                                <a href=\"h";
                // line 126
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "lien", [])), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #000000;\">
\t\t                                                    ";
                // line 127
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["bloc"], "texte", [])), "html", null, true);
                echo "
\t\t                                                </a>
\t\t                                            </p>
\t\t                                        </td>
\t\t                                    </tr>
\t\t                                </tbody></table>
\t\t                    
\t\t                                </td>
\t\t                                </tr>
\t\t                                </table>
\t\t                    
\t\t                    ";
            }
            // line 139
            echo "\t\t\t\t\t\t</td>
                     </tr>
                     ";
            // line 141
            $context["cpt"] = (($context["cpt"] ?? null) + 1);
            // line 142
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bloc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                     <tr>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t <table class=\"column cont-footer\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c; margin: 0 auto; padding-top: 20px; border-top: 1px solid #ccc;\" align=\"center\">
                                <tbody><tr>
                                    <td class=\"left-sidebar footer\" style=\"padding: 0; text-align: center; font-size: 0;\">
                                        
                                        <table width=\"100%\">
                                        <tr>
                                        <td width=\"100\">
                                        
                                        <table class=\"column left\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c; width: 100%; display: inline-block; vertical-align: middle; max-width: 100px;\">
                                            <tbody><tr>
                                                <td class=\"inner full-width-image\" style=\"padding: 15px 10px 15px 10px;\">
                                                    <a href=\"https://45.kidiklik.fr\" style=\"text-decoration: none; color: #8c8c8c;\">
                                                        <img src=\"https://45.kidiklik.fr/images/newsletters/piaf.png\" alt=\"Aller sur le site kidiklik 45\" style=\"border: 0; width: 100%; height: auto;\" width=\"100\">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                       
                                        </td><td width=\"100\">
                                       
                                        <table class=\"column right\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c; width: 100%; display: inline-block; vertical-align: middle; max-width: 100px;\">
                                            <tbody><tr>
                                                <td class=\"inner contents\" style=\"padding: 15px 10px 15px 10px; width: 100%; text-align: left; font-size: 14px;\">
                                                    <p style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px; margin-bottom: 0;\">
                                                        <a href=\"https://45.kidiklik.fr\" style=\"text-decoration: none; color: #f00; text-transform: uppercase; font-size: 13px; font-weight: bold;\">
                                                            Aller sur le site kidiklik ";
        // line 170
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["entete"] ?? null), "dep", []), "getName", [], "method")), "html", null, true);
        echo "
                                                        </a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                       
                                        </td>
                                        </tr>
                                        </table>
                                       
                                    </td>
                                </tr>
                            </tbody></table>
\t\t\t\t\t\t </td>
                     </tr>
                     <tr>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t  <table style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c;\" width=\"100%\">
                                <tbody><tr>
                                    <td class=\"inner contents rs\" style=\"padding: 15px 10px 15px 10px; width: 100%; padding-bottom: 0; text-align: left;\">
                                        <p style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px; text-align: center; color: #000;\">
                                            Suivez-nous pour découvrir toutes nos bonnes idées
                                        </p>
                                        <p class=\"cont-rs\" style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px; text-align: center; color: #000; margin-bottom: 0;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["entete"] ?? null), "dep", []), "get", [0 => "field_reseaux_sociaux2"], "method"), "getIterator", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 196
            echo "\t\t\t\t\t\t\t\t\t\t\t
                                                  <a href=\"https://www.facebook.com/kidiklik45\" style=\"color: #ee6a56; text-decoration: none;\">
                                                    <img src=\"https://45.kidiklik.fr/images/newsletters/rs/";
            // line 198
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["rs"], "get", [0 => "social"], "method"), "value", [])), "html", null, true);
            echo ".png\" alt=\"Facebook Kidiklik 45\" style=\"border: 0;\">
                                                </a>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                                                       
                                            
                                        </p>
                                    </td>
                                </tr>
                            </tbody></table>
\t\t\t\t\t\t </td>
                     </tr>
                     
                     <tr>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t </td>
                     </tr>
                     <tr>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t    <table width=\"100%\">
                                <tbody><tr>
                                    <td class=\"one-column\" style=\"padding: 0;\">
                                        <table style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c;\" width=\"100%\">
                                            <tbody><tr>
                                                <td class=\"inner contents mentions\" style=\"padding: 15px 10px 15px 10px; width: 100%; text-align: left;\">
                                                    <p style=\"Margin: 0; font-size: 11px; Margin-bottom: 10px; text-align: center; color: #000000;font-weight:bold\">
\t\t\t\t\t\tSUJET : \tUn gros dossier plein de sorties pour les vacances !
                                                    </p>
\t\t\t\t\t\t\t
                                                    <p style=\"Margin: 0; font-size: 11px; Margin-bottom: 10px; text-align: center; color: #000000;\">
                                                        Si vous ne parvenez pas à afficher cet e-mail, veuillez consulter la version en <a href=\"https://45.kidiklik.fr/newsletters/330-2020-octobre-12-18.html\" style=\"color: #000000; text-decoration: underline; font-size: 11px;\">ligne.</a>
                                                    </p>
                                                    <p style=\"Margin: 0; font-size: 11px; Margin-bottom: 10px; text-align: center; color: #000000;\">
                                                        Si vous ne souhaitez plus recevoir de newsletter de la part de Kidiklik, ce serait bien dommage mais cliquez sur <a href=\"[[UNSUB_LINK_FR]]\" style=\"color: #000000; text-decoration: underline; font-size: 11px;\">desinscription</a> et vous ne recevrez plus nos bonnes idées.
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
\t\t\t\t\t\t </td>
                     </tr>
                </table>
             </div>
        </center>
     
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/custom/kidiklik_newsletter/templates/kidiklik-newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 201,  329 => 198,  325 => 196,  321 => 195,  293 => 170,  264 => 143,  258 => 142,  256 => 141,  252 => 139,  237 => 127,  233 => 126,  228 => 124,  224 => 123,  209 => 111,  205 => 110,  195 => 102,  181 => 91,  177 => 90,  162 => 78,  158 => 77,  153 => 75,  149 => 74,  138 => 65,  136 => 64,  132 => 62,  127 => 61,  125 => 60,  114 => 52,  96 => 37,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
            /*Media Queries*/
            @media screen and (max-width: 480px) {
                .left-sidebar.item .left,
                .left-sidebar.item .right,
                .right-sidebar .left,
                .right-sidebar .right
                {
                    max-width: 100% !important;
                }
            }

            @media screen and (max-width: 620px) {
                .immanquable.left-sidebar .left,
                .immanquable.left-sidebar .right,
                .immanquable.right-sidebar .left,
                .immanquable.right-sidebar .right
                {
                    max-width: 100% !important;
                }
            }
        </style>
        <center class=\"wrapper\" style=\"width: 100%; table-layout: fixed; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;\">
            <div class=\"webkit\" style=\"max-width: 600px;\">
                <!--[if (gte mso 9)|(IE)]>
                <table width=\"600\" align=\"center\">
                <tr>
                <td>
                <![endif]-->
                <table class=\"outer\" align=\"center\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c; Margin: 0 auto; width: 100%; max-width: 600px;\">
                    <tr>
                        <td class=\"one-column\">
\t\t\t\t\t\t\t<table style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c;\" width=\"100%\">
                                <tbody><tr>
                                    <td class=\"inner contents entete\" style=\"padding: 15px 10px 15px 10px; width: 100%; padding-top: 15px; text-align: center; color: #000;\">
                                        <p style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px;\">
                                            {{ entete.texte }}
                                        </p>
                                    </td>
                                </tr>
\t\t\t\t\t\t\t\t</tbody>
                            </table>
                        </td>
                     </tr>
                     <!-- pub -->
                     <tr>
                        <td class=\"one-column\">
\t\t\t\t\t\t\t<table style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c;\" width=\"100%\">
                                <tbody><tr>
                                    <td class=\"inner contents entete\" style=\"padding: 15px 10px 15px 10px; width: 100%; padding-top: 15px; text-align: center; color: #000;\">
                                        <p style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px;\">
                                            <img src=\"{{ entete.pub }}\" />
                                        </p>
                                    </td>
                                </tr>
\t\t\t\t\t\t\t\t</tbody>
                            </table>
                        </td>
                     </tr>
                     {% set cpt=0 %}
                     {% for bloc in blocs %}
                     <tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if cpt%2 == 0 %}
\t\t\t\t\t\t\t   
\t\t                                <table width=\"100%\">
\t\t                                <tr>
\t\t                                <td width=\"265\">
\t\t                       
\t\t                                <table class=\"column left\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #000000; width: 100%; display: inline-block; vertical-align: middle; max-width: 335px;\">
\t\t                                    <tbody><tr>
\t\t                                        <td class=\"inner contents\" style=\"padding: 15px 10px 15px 10px; width: 100%; font-size: 14px; text-align: left;\">
\t\t                                            <p class=\"h2\" style=\"Margin: 0; font-weight: bold; Margin-bottom: 9px; line-height: 18px; font-size: 18px; color: #000000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ bloc.lien }}\" style=\"text-decoration: none; color: #000000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ bloc.titre }}</a></p>
\t\t                                            <p style=\"Margin: 0;\">
\t\t                                                <a href=\"h{{ bloc.lien }}\" style=\"text-decoration: none; color: #000000;\">
\t\t                                                    {{ bloc.texte }}
\t\t                                                </a>
\t\t                                            </p>
\t\t                                        </td>
\t\t                                    </tr>
\t\t                                </tbody></table>
\t\t                       
\t\t                                </td><td width=\"335\">
\t\t                       
\t\t                                <table class=\"column right\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #000000; width: 100%; display: inline-block; vertical-align: middle; max-width: 259px;\">
\t\t                                    <tbody><tr>
\t\t                                        <td class=\"inner full-width-image\" style=\"padding: 0;\">
\t\t                                            <a href=\"{{ bloc.lien }}\" style=\"text-decoration: none; color: #000000;\">
\t\t\t\t\t\t\t\t                        <img src=\"{{ bloc.image }}\" alt=\"Dossier spécial Vacances de Toussaint dans le Loiret\" style=\"border: 0; width: 100%; height: auto;\" width=\"265\">
\t\t\t\t\t\t\t\t\t\t                                            </a>
\t\t                                        </td>
\t\t                                    </tr>
\t\t                                </tbody></table>
\t\t                       
\t\t                                </td>
\t\t                                </tr>
\t\t                                </table>
\t\t                       
\t\t                    {% else %}
\t\t                    
\t\t                                <table width=\"100%\">
\t\t                                <tr>
\t\t                                <td width=\"265\">
\t\t                    
\t\t                                <table class=\"column left\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #000000; width: 100%; display: inline-block; vertical-align: middle; max-width: 259px;\">
\t\t                                    <tbody><tr>
\t\t                                        <td class=\"inner full-width-image\" style=\"padding: 0;\">
\t\t                                            <a href=\"{{ bloc.lien }}\" style=\"text-decoration: none; color: #000000;\">
\t\t\t\t\t\t\t\t                         <img src=\"{{ bloc.image }}\" alt=\"Dossier spécial Vacances de Toussaint dans le Loiret\" style=\"border: 0; width: 100%; height: auto;\" width=\"265\">
\t\t\t\t\t\t\t\t\t\t                                            </a>
\t\t                                        </td>
\t\t                                    </tr>
\t\t                                </tbody></table>
\t\t                    
\t\t                                </td><td width=\"335\">
\t\t                    
\t\t                                <table class=\"column right\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #000000; width: 100%; display: inline-block; vertical-align: middle; max-width: 335px;\">
\t\t                                    <tbody><tr>
\t\t                                        <td class=\"inner contents\" style=\"padding: 15px 10px 15px 10px; width: 100%; font-size: 14px; text-align: left;\">
\t\t                                            <p class=\"h2\" style=\"Margin: 0; font-weight: bold; Margin-bottom: 9px; line-height: 18px; font-size: 18px; color: #000000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ bloc.lien }}\" style=\"text-decoration: none; color: #000000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ bloc.titre }}</a></p>
\t\t                                            <p style=\"Margin: 0;\">
\t\t                                                <a href=\"h{{ bloc.lien }}\" style=\"text-decoration: none; color: #000000;\">
\t\t                                                    {{ bloc.texte }}
\t\t                                                </a>
\t\t                                            </p>
\t\t                                        </td>
\t\t                                    </tr>
\t\t                                </tbody></table>
\t\t                    
\t\t                                </td>
\t\t                                </tr>
\t\t                                </table>
\t\t                    
\t\t                    {% endif %}
\t\t\t\t\t\t</td>
                     </tr>
                     {% set cpt=cpt+1 %}
                     {% endfor %}
                     <tr>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t <table class=\"column cont-footer\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c; margin: 0 auto; padding-top: 20px; border-top: 1px solid #ccc;\" align=\"center\">
                                <tbody><tr>
                                    <td class=\"left-sidebar footer\" style=\"padding: 0; text-align: center; font-size: 0;\">
                                        
                                        <table width=\"100%\">
                                        <tr>
                                        <td width=\"100\">
                                        
                                        <table class=\"column left\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c; width: 100%; display: inline-block; vertical-align: middle; max-width: 100px;\">
                                            <tbody><tr>
                                                <td class=\"inner full-width-image\" style=\"padding: 15px 10px 15px 10px;\">
                                                    <a href=\"https://45.kidiklik.fr\" style=\"text-decoration: none; color: #8c8c8c;\">
                                                        <img src=\"https://45.kidiklik.fr/images/newsletters/piaf.png\" alt=\"Aller sur le site kidiklik 45\" style=\"border: 0; width: 100%; height: auto;\" width=\"100\">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                       
                                        </td><td width=\"100\">
                                       
                                        <table class=\"column right\" style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c; width: 100%; display: inline-block; vertical-align: middle; max-width: 100px;\">
                                            <tbody><tr>
                                                <td class=\"inner contents\" style=\"padding: 15px 10px 15px 10px; width: 100%; text-align: left; font-size: 14px;\">
                                                    <p style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px; margin-bottom: 0;\">
                                                        <a href=\"https://45.kidiklik.fr\" style=\"text-decoration: none; color: #f00; text-transform: uppercase; font-size: 13px; font-weight: bold;\">
                                                            Aller sur le site kidiklik {{ entete.dep.getName() }}
                                                        </a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                       
                                        </td>
                                        </tr>
                                        </table>
                                       
                                    </td>
                                </tr>
                            </tbody></table>
\t\t\t\t\t\t </td>
                     </tr>
                     <tr>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t  <table style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c;\" width=\"100%\">
                                <tbody><tr>
                                    <td class=\"inner contents rs\" style=\"padding: 15px 10px 15px 10px; width: 100%; padding-bottom: 0; text-align: left;\">
                                        <p style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px; text-align: center; color: #000;\">
                                            Suivez-nous pour découvrir toutes nos bonnes idées
                                        </p>
                                        <p class=\"cont-rs\" style=\"Margin: 0; font-size: 14px; Margin-bottom: 10px; text-align: center; color: #000; margin-bottom: 0;\">
\t\t\t\t\t\t\t\t\t\t\t{% for rs in entete.dep.get(\"field_reseaux_sociaux2\").getIterator() %}
\t\t\t\t\t\t\t\t\t\t\t
                                                  <a href=\"https://www.facebook.com/kidiklik45\" style=\"color: #ee6a56; text-decoration: none;\">
                                                    <img src=\"https://45.kidiklik.fr/images/newsletters/rs/{{ rs.get('social').value }}.png\" alt=\"Facebook Kidiklik 45\" style=\"border: 0;\">
                                                </a>
                                            {% endfor %}
                                                       
                                            
                                        </p>
                                    </td>
                                </tr>
                            </tbody></table>
\t\t\t\t\t\t </td>
                     </tr>
                     
                     <tr>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t </td>
                     </tr>
                     <tr>
\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t    <table width=\"100%\">
                                <tbody><tr>
                                    <td class=\"one-column\" style=\"padding: 0;\">
                                        <table style=\"border-spacing: 0; font-family: Arial, Helvetica, sans-serif; color: #8c8c8c;\" width=\"100%\">
                                            <tbody><tr>
                                                <td class=\"inner contents mentions\" style=\"padding: 15px 10px 15px 10px; width: 100%; text-align: left;\">
                                                    <p style=\"Margin: 0; font-size: 11px; Margin-bottom: 10px; text-align: center; color: #000000;font-weight:bold\">
\t\t\t\t\t\tSUJET : \tUn gros dossier plein de sorties pour les vacances !
                                                    </p>
\t\t\t\t\t\t\t
                                                    <p style=\"Margin: 0; font-size: 11px; Margin-bottom: 10px; text-align: center; color: #000000;\">
                                                        Si vous ne parvenez pas à afficher cet e-mail, veuillez consulter la version en <a href=\"https://45.kidiklik.fr/newsletters/330-2020-octobre-12-18.html\" style=\"color: #000000; text-decoration: underline; font-size: 11px;\">ligne.</a>
                                                    </p>
                                                    <p style=\"Margin: 0; font-size: 11px; Margin-bottom: 10px; text-align: center; color: #000000;\">
                                                        Si vous ne souhaitez plus recevoir de newsletter de la part de Kidiklik, ce serait bien dommage mais cliquez sur <a href=\"[[UNSUB_LINK_FR]]\" style=\"color: #000000; text-decoration: underline; font-size: 11px;\">desinscription</a> et vous ne recevrez plus nos bonnes idées.
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
\t\t\t\t\t\t </td>
                     </tr>
                </table>
             </div>
        </center>
     
", "modules/custom/kidiklik_newsletter/templates/kidiklik-newsletter.html.twig", "/home/nico/projetK/web/modules/custom/kidiklik_newsletter/templates/kidiklik-newsletter.html.twig");
    }
}
