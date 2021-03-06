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

/* themes/contrib/business_responsive_theme/templates/layout/page.html.twig */
class __TwigTemplate_ae84a55b647fd988da0e1e6529b1e63d19e23e59c497e720d2e66f9191d737de extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 67, "for" => 138];
        $filters = ["escape" => 68, "raw" => 139];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/business_responsive_theme/templates/layout/page.html.twig"));

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        ";
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 68
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "

          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        
        ";
        }
        // line 78
        echo "      </div>

      ";
        // line 80
        if ((($context["show_social_icon"] ?? null) || $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 81
            echo "        <div class=\"col-sm-8 col-md-9\">

          ";
            // line 83
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 84
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
          ";
            }
            // line 86
            echo "          
          ";
            // line 87
            if (($context["show_social_icon"] ?? null)) {
                // line 88
                echo "            <div class=\"social-media\">
              ";
                // line 89
                if (($context["facebook_url"] ?? null)) {
                    // line 90
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
              ";
                }
                // line 92
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 93
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
              ";
                }
                // line 95
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 96
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
              ";
                }
                // line 98
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 99
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
              ";
                }
                // line 101
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 102
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
              ";
                }
                // line 104
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 105
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fas fa-rss\"></i></a>
              ";
                }
                // line 107
                echo "            </div>
          ";
            }
            // line 109
            echo "
        </div>
      ";
        }
        // line 112
        echo "
    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  <div class=\"row\">
    <div class=\"navbar-header col-md-12\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
        

        ";
        // line 125
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 126
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
        ";
        }
        // line 128
        echo "      </nav>
    </div>
  </div>
</div>


";
        // line 134
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 135
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 139
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 145
        echo "

<!--Highlighted-->
  ";
        // line 148
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 149
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 157
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 161
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 162
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
                // line 163
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 169
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 170
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                    // line 171
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                    echo "
            ";
                }
                // line 173
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 176
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 177
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                    // line 178
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                    echo "
            ";
                }
                // line 180
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 183
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 184
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                    // line 185
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                    echo "
            ";
                }
                // line 187
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 194
        echo "<!--End Top Widget -->


<!-- Start Middle Widget -->
";
        // line 198
        if ((($this->getAttribute(($context["page"] ?? null), "middle_first", []) || $this->getAttribute(($context["page"] ?? null), "middle_second", [])) || $this->getAttribute(($context["page"] ?? null), "middle_third", []))) {
            // line 199
            echo "  <div class=\"middlewidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = ";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 206
            if ($this->getAttribute(($context["page"] ?? null), "middle_first", [])) {
                // line 207
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "middle_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 209
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = ";
            // line 212
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 213
            if ($this->getAttribute(($context["page"] ?? null), "middle_second", [])) {
                // line 214
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "middle_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 216
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = ";
            // line 219
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_third_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 220
            if ($this->getAttribute(($context["page"] ?? null), "middle_third", [])) {
                // line 221
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "middle_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 223
            echo "        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
";
        }
        // line 229
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 233
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 234
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 238
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 243
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 252
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 253
            echo "        <div class=\"row\">
          ";
            // line 254
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 257
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 261
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 266
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 267
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 268
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " >
            ";
            // line 269
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 273
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 276
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 277
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 278
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 279
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 283
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 286
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 287
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 288
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 289
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 293
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 299
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 300
            echo "      <div class=\"row\">
        ";
            // line 301
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 304
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->


<!-- Start: Price table widgets -->

";
        // line 312
        if ((($this->getAttribute(($context["page"] ?? null), "pricetable_first", []) || $this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) || $this->getAttribute(($context["page"] ?? null), "pricetable_third", []))) {
            // line 313
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 319
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])) {
                // line 320
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 321
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 323
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 327
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) {
                // line 328
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 329
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 331
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 335
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])) {
                // line 336
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 337
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 339
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 343
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])) {
                // line 344
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 345
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 347
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 355
        echo "
<!--End: Price table widgets -->


<!-- start: bottom -->
";
        // line 360
        if ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", []))) {
            // line 361
            echo "  <div class=\"bottomwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start bottom First Region -->
        <div class = ";
            // line 367
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 368
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 369
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 371
            echo "        </div>
        <!-- End bottom First Region -->

        <!-- Start bottom Second Region -->
        <div class = ";
            // line 375
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 376
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 377
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 379
            echo "        </div>
        <!-- End bottom Second Region -->

        <!-- Start bottom third Region -->
        <div class = ";
            // line 383
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 384
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 385
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 387
            echo "        </div>
        <!-- End bottom Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 393
        echo "<!--End bottom -->


<!-- start: Footer -->
";
        // line 397
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 398
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 404
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 405
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 406
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          ";
            }
            // line 408
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 412
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 413
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 414
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          ";
            }
            // line 416
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 420
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 421
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 422
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          ";
            }
            // line 424
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 430
        echo "<!--End Footer -->


<!-- Start Footer Menu -->
";
        // line 434
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 435
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 439
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 446
        echo "<!-- End Footer Menu -->


";
        // line 449
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 450
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 456
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 457
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null)), "html", null, true);
                echo "</p>        
        ";
            }
            // line 459
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 463
            if (($context["show_credit_link"] ?? null)) {
                // line 464
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 468
            echo "      <!-- End Credit link -->
            
    </div>
  </div>
</div>
";
        }
        // line 474
        echo "
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/business_responsive_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  843 => 474,  835 => 468,  829 => 464,  827 => 463,  821 => 459,  816 => 457,  812 => 456,  804 => 450,  802 => 449,  797 => 446,  787 => 439,  781 => 435,  779 => 434,  773 => 430,  765 => 424,  759 => 422,  757 => 421,  753 => 420,  747 => 416,  741 => 414,  739 => 413,  735 => 412,  729 => 408,  723 => 406,  721 => 405,  717 => 404,  709 => 398,  707 => 397,  701 => 393,  693 => 387,  687 => 385,  685 => 384,  681 => 383,  675 => 379,  669 => 377,  667 => 376,  663 => 375,  657 => 371,  651 => 369,  649 => 368,  645 => 367,  637 => 361,  635 => 360,  628 => 355,  618 => 347,  612 => 345,  607 => 344,  605 => 343,  599 => 339,  593 => 337,  588 => 336,  586 => 335,  580 => 331,  574 => 329,  569 => 328,  567 => 327,  561 => 323,  555 => 321,  550 => 320,  548 => 319,  540 => 313,  538 => 312,  528 => 304,  522 => 301,  519 => 300,  517 => 299,  509 => 293,  502 => 289,  498 => 288,  495 => 287,  493 => 286,  488 => 283,  481 => 279,  477 => 278,  474 => 277,  472 => 276,  467 => 273,  460 => 269,  456 => 268,  453 => 267,  451 => 266,  443 => 261,  437 => 257,  431 => 254,  428 => 253,  426 => 252,  415 => 243,  407 => 238,  401 => 234,  399 => 233,  393 => 229,  385 => 223,  379 => 221,  377 => 220,  373 => 219,  368 => 216,  362 => 214,  360 => 213,  356 => 212,  351 => 209,  345 => 207,  343 => 206,  339 => 205,  331 => 199,  329 => 198,  323 => 194,  314 => 187,  308 => 185,  306 => 184,  302 => 183,  297 => 180,  291 => 178,  289 => 177,  285 => 176,  280 => 173,  274 => 171,  272 => 170,  268 => 169,  260 => 163,  258 => 162,  254 => 161,  248 => 157,  240 => 152,  235 => 149,  233 => 148,  228 => 145,  222 => 141,  213 => 139,  209 => 138,  204 => 135,  202 => 134,  194 => 128,  188 => 126,  186 => 125,  171 => 112,  166 => 109,  162 => 107,  156 => 105,  153 => 104,  147 => 102,  144 => 101,  138 => 99,  135 => 98,  129 => 96,  126 => 95,  120 => 93,  117 => 92,  111 => 90,  109 => 89,  106 => 88,  104 => 87,  101 => 86,  95 => 84,  93 => 83,  89 => 81,  87 => 80,  83 => 78,  69 => 68,  67 => 67,  58 => 60,);
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
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        {% if page.header %}
          {{ page.header }}

          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        
        {% endif %}
      </div>

      {% if show_social_icon or page.search %}
        <div class=\"col-sm-8 col-md-9\">

          {% if page.search %}
            {{ page.search }}
          {% endif %}
          
          {% if show_social_icon %}
            <div class=\"social-media\">
              {% if facebook_url %}
                <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
              {% endif %}
              {% if google_plus_url %}
                <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
              {% endif %}
              {% if twitter_url %}
                <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
              {% endif %}
              {% if linkedin_url %}
                <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
              {% endif %}
              {% if pinterest_url %}
                <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
              {% endif %}
              {% if rss_url %}
                <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fas fa-rss\"></i></a>
              {% endif %}
            </div>
          {% endif %}

        </div>
      {% endif %}

    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  <div class=\"row\">
    <div class=\"navbar-header col-md-12\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
        

        {% if page.primary_menu %}
          {{ page.primary_menu }}
        {% endif %}
      </nav>
    </div>
  </div>
</div>


{% if is_front and show_slideshow%}
  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        {% for slider_contents in slider_content %}
          {{ slider_contents | raw }}
        {% endfor %}
      </ul>
    </div>
  </div>
{% endif %}


<!--Highlighted-->
  {% if page.highlighted %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.highlighted }}
        </div>
      </div>
    </div>
  {% endif %}
<!--End Highlighted-->


<!-- Start Top Widget -->
{% if is_front %}  
  {% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}
    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = {{ topwidget_class }}>
            {% if page.topwidget_first %}
              {{ page.topwidget_first }}
            {% endif %}
          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = {{ topwidget_class }}>
            {% if page.topwidget_second %}
              {{ page.topwidget_second }}
            {% endif %}
          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = {{ topwidget_third_class }}>
            {% if page.topwidget_third %}
              {{ page.topwidget_third }}
            {% endif %}
          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  {% endif %}
{% endif %}
<!--End Top Widget -->


<!-- Start Middle Widget -->
{% if page.middle_first or page.middle_second or page.middle_third %}
  <div class=\"middlewidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = {{ middle_class }}>
          {% if page.middle_first %}
            {{ page.middle_first }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = {{ middle_class }}>
          {% if page.middle_second %}
            {{ page.middle_second }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = {{ middle_third_class }}>
          {% if page.middle_third %}
            {{ page.middle_third }}
          {% endif %}
        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
{% endif %}
<!--End Top Widget -->


<!-- Page Title -->
{%  if page.page_title and not is_front %}
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        {{ page.page_title }}
      </div>
    </div>
  </div>
{% endif %}
<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      {% if page.content_top %}
        <div class=\"row\">
          {{ page.content_top }}
        </div>
      {% endif %}
    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      {% if page.sidebar_first %}
        <div class=\"sidebar\" >
          <div class = {{sidebarfirst}} >
            {{ page.sidebar_first }}
          </div>
        </div>
      {% endif %}
      <!---End Right SideBar -->

      <!--- Start content -->
      {% if page.content %}
        <div class=\"content_layout\">
          <div class={{contentlayout}}>
            {{ page.content }}
          </div>
        </div>
      {% endif %}
      <!---End content -->

      <!--- Start Right SideBar -->
      {% if page.sidebar_second %}
        <div class=\"sidebar\">
          <div class={{sidebarsecond}}>
            {{ page.sidebar_second }}
          </div>
        </div>
      {% endif %}
      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    {% if page.content_bottom %}
      <div class=\"row\">
        {{ page.content_bottom }}
      </div>
    {% endif %}
    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->


<!-- Start: Price table widgets -->

{% if page.pricetable_first or page.pricetable_second or page.pricetable_third %}

  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        {% if page.pricetable_first %}
          <div class = {{ pricetable_class }}>
            {{ page.pricetable_first }}
          </div>
        {% endif %}          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        {% if page.pricetable_second %}
          <div class = {{ pricetable_class }}>
            {{ page.pricetable_second }}
          </div>
        {% endif %}          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        {% if page.pricetable_third %}
          <div class = {{ pricetable_class }}>
            {{ page.pricetable_third }}
          </div>
        {% endif %}          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        {% if page.pricetable_forth %}
          <div class = {{ pricetable_class }}>
            {{ page.pricetable_forth }}
          </div>
        {% endif %}          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

{% endif %}

<!--End: Price table widgets -->


<!-- start: bottom -->
{% if page.bottom_first or page.bottom_second or page.bottom_third %}
  <div class=\"bottomwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start bottom First Region -->
        <div class = {{ bottom_class }}>
          {% if page.bottom_first %}
            {{ page.bottom_first }}
          {% endif %}
        </div>
        <!-- End bottom First Region -->

        <!-- Start bottom Second Region -->
        <div class = {{ bottom_class }}>
          {% if page.bottom_second %}
            {{ page.bottom_second }}
          {% endif %}
        </div>
        <!-- End bottom Second Region -->

        <!-- Start bottom third Region -->
        <div class = {{ bottom_class }}>
          {% if page.bottom_third %}
            {{ page.bottom_third }}
          {% endif %}
        </div>
        <!-- End bottom Third Region -->
      </div>
    </div>
  </div>
{% endif %}
<!--End bottom -->


<!-- start: Footer -->
{% if page.footer_first or page.footer_second or page.footer_third %}
  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_first %}
            {{ page.footer_first }}
          {% endif %}
        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_second %}
            {{ page.footer_second }}
          {% endif %}
        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = {{ footer_class }}>
          {% if page.footer_third %}
            {{ page.footer_third }}
          {% endif %}
        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
{% endif %}
<!--End Footer -->


<!-- Start Footer Menu -->
{% if page.footer_menu %}
  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          {{ page.footer_menu }}
        </div>
        
      </div>
    </div>
  </div>
{% endif %}
<!-- End Footer Menu -->


{% if copyright_text or show_credit_link %}
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        {% if copyright_text %}        
          <p>{{copyright_text}}</p>        
        {% endif %}
      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      {% if show_credit_link %}
        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      {% endif %}
      <!-- End Credit link -->
            
    </div>
  </div>
</div>
{% endif %}

", "themes/contrib/business_responsive_theme/templates/layout/page.html.twig", "/home/nico/projetK/web/themes/contrib/business_responsive_theme/templates/layout/page.html.twig");
    }
}
