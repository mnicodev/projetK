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

/* themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig */
class __TwigTemplate_ed5553a825e24d4b2cc2dd404050d82af3c27f93bcd9245b9a74d019a83ac1e5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'my_content' => [$this, 'block_my_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 62, "trans" => 99, "block" => 168];
        $filters = ["escape" => 61, "date" => 99];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'block'],
                ['escape', 'date'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig"));

        // line 51
        echo "
<style>
  [dir=\"rtl\"] .user-panel-custom .pull-left{
    float:right !important;
  }
</style>

<header class=\"main-header header-2\">
  <!-- Logo -->

  <a href=\"";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" id=\"logo\" class=\"logo\" rel=\"home\">
      ";
        // line 62
        if (($context["relative_logo_url"] ?? null)) {
            // line 63
            echo "        <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["relative_logo_url"] ?? null)), "html", null, true);
            echo "\" alt=\"Site Logo\" style=\"max-width:100%;height:auto;max-height: 100%;\">
      ";
        } else {
            // line 65
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "
      ";
        }
        // line 67
        echo "
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 73
            echo "    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </a>
    ";
        }
        // line 80
        echo "    <!-- User Account: style can be found in dropdown.less -->
    <div class=\"navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">
        ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "navbar_right_notifications", [])) {
            // line 84
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_right_notifications", [])), "html", null, true);
            echo "
        ";
        }
        // line 86
        echo "        ";
        if ($this->getAttribute(($context["user"] ?? null), "uid", [])) {
            // line 87
            echo "          ";
            if ($this->getAttribute(($context["user"] ?? null), "picture", [])) {
                // line 88
                echo "          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <img src=\"";
                // line 90
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "picture", [])), "html", null, true);
                echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "name", [])), "html", null, true);
                echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
                // line 96
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "picture", [])), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\">
                <p>
                  ";
                // line 98
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "name", [])), "html", null, true);
                echo "
                  <small>";
                // line 99
                echo t("Member since", array());
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "created", [])), "M. Y"), "html", null, true);
                echo "</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"";
                // line 105
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
                echo "user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "uid", [])), "html", null, true);
                echo "/edit\" class=\"btn btn-default btn-flat\">";
                echo t("My account", array());
                echo "</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"";
                // line 108
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
                echo "user/logout\" class=\"btn btn-default btn-flat\">";
                echo t("Log out", array());
                echo "</a>
                </div>
              </li>
            </ul>
          </li>
          ";
            } else {
                // line 114
                echo "            <li>
              <a href=\"";
                // line 115
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
                echo "user/";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "uid", [])), "html", null, true);
                echo "/edit\">
              ";
                // line 116
                echo t("My account", array());
                // line 117
                echo "              </a>
            </li>
            <li><a href=\"";
                // line 119
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
                echo "user/logout\">";
                echo t("Log out", array());
                echo "</a></li>
          ";
            }
            // line 121
            echo "        ";
        } else {
            // line 122
            echo "          <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
            echo "user/login\">";
            echo t("Log in", array());
            echo "</a></li>
        ";
        }
        // line 124
        echo "        
      </ul>
    </div>
  </nav>
</header>

<!-- =============================================== -->

";
        // line 132
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 133
            echo "  <!-- Left side column. contains the sidebar -->
  <aside class=\"main-sidebar\">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class=\"sidebar\">
    ";
            // line 137
            if (($context["logged_in"] ?? null)) {
                // line 138
                echo "      <div class=\"user-panel user-panel-custom\">
        <div class=\"pull-left image\">
          <img src=\"";
                // line 140
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "picture", [])), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>";
                // line 143
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "name", [])), "html", null, true);
                echo "</p>
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div>
    ";
            }
            // line 148
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
  </section>
  <!-- /.sidebar -->
  </aside>
";
        }
        // line 153
        echo "
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">

  <!-- Content Header (Page header) -->
  ";
        // line 160
        if ($this->getAttribute(($context["page"] ?? null), "top", [])) {
            // line 161
            echo "    <section class=\"content-header\">
      ";
            // line 162
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top", [])), "html", null, true);
            echo "
    </section>
  ";
        }
        // line 165
        echo "
  <!-- Main content -->
  <section class=\"content\">
    ";
        // line 168
        $this->displayBlock('my_content', $context, $blocks);
        // line 173
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "bottom", [])) {
            // line 174
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom", [])), "html", null, true);
            echo "
    ";
        }
        // line 176
        echo "  </section><!-- /.content -->

</div><!-- /.content-wrapper -->

";
        // line 180
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 181
            echo "  <footer class=\"main-footer\">
    ";
            // line 182
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
  </footer>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 168
    public function block_my_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "my_content"));

        // line 169
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 170
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
      ";
        }
        // line 172
        echo "    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 172,  330 => 170,  327 => 169,  321 => 168,  310 => 182,  307 => 181,  305 => 180,  299 => 176,  293 => 174,  290 => 173,  288 => 168,  283 => 165,  277 => 162,  274 => 161,  272 => 160,  263 => 153,  254 => 148,  246 => 143,  240 => 140,  236 => 138,  234 => 137,  228 => 133,  226 => 132,  216 => 124,  208 => 122,  205 => 121,  198 => 119,  194 => 117,  192 => 116,  186 => 115,  183 => 114,  172 => 108,  162 => 105,  151 => 99,  147 => 98,  142 => 96,  134 => 91,  130 => 90,  126 => 88,  123 => 87,  120 => 86,  114 => 84,  112 => 83,  107 => 80,  98 => 73,  96 => 72,  89 => 67,  83 => 65,  77 => 63,  75 => 62,  71 => 61,  59 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig", "/home/nico/projetK/web/themes/contrib/druadmin_lte_theme/templates/layout/page.html.twig");
    }
}
