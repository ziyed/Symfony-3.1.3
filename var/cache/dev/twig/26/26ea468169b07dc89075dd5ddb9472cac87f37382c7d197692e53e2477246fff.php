<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_e6fd789c47ca33ddd22f79019f0f821cb5db9d2a3e2fedb8e3b156a4e9923432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (("unknown" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array()))) {
            // line 5
            echo "        ";
            $context["block_status"] = "";
            // line 6
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "    ";
        } elseif (("eol" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array()))) {
            // line 8
            echo "        ";
            $context["block_status"] = "red";
            // line 9
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "    ";
        } elseif (("eom" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array()))) {
            // line 11
            echo "        ";
            $context["block_status"] = "yellow";
            // line 12
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "    ";
        } elseif (("dev" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array()))) {
            // line 14
            echo "        ";
            $context["block_status"] = "yellow";
            // line 15
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["block_status"] = "";
            // line 18
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        ob_start();
        // line 22
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array())) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationversion", array()), "html", null, true);
            echo "</span>
        ";
        } elseif ($this->getAttribute(        // line 25
(isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array(), "any", true, true)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">
                ";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            ";
        // line 35
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array())) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array()), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationversion", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 45
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : null)) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "token", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "token", array()), "html", null, true);
            echo "
                    ";
        }
        // line 50
        echo "                </span>
            </div>

            ";
        // line 53
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "appname", array()))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "appname", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "env", array()))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "env", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 66
        echo "
            ";
        // line 67
        if ( !("n/a" === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "debug", array()))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "debug", array())) ? ("green") : ("red"));
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "phpversion", array()), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 97
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array(), "any", true, true)) {
            // line 98
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        ";
            // line 101
            if (("Silex" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array()))) {
                // line 102
                echo "                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        ";
            } else {
                // line 106
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array()), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array()), "html", null, true);
                echo " Docs
                            </a>
                        ";
            }
            // line 110
            echo "                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
        }
        // line 121
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 123
        echo "
    ";
        // line 124
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => (isset($context["block_status"]) ? $context["block_status"] : null), "additional_classes" => "sf-toolbar-block-right"));
        echo "
";
    }

    // line 127
    public function block_menu($context, array $blocks = array())
    {
        // line 128
        echo "    <span class=\"label label-status-";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array()) == "eol")) ? ("red") : (((twig_in_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array()), array(0 => "eom", 1 => "dev"))) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 129
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
    }

    // line 134
    public function block_panel($context, array $blocks = array())
    {
        // line 135
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array())) {
            // line 136
            echo "        ";
            // line 137
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array()), "html", null, true);
            echo "</a>
        </p>
    ";
        } else {
            // line 155
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>

            ";
            // line 163
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "appname", array()))) {
                // line 164
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "appname", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>
            ";
            }
            // line 169
            echo "
            ";
            // line 170
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "env", array()))) {
                // line 171
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "env", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>
            ";
            }
            // line 176
            echo "
            ";
            // line 177
            if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "debug", array()))) {
                // line 178
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 179
                echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "debug", array())) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>
            ";
            }
            // line 183
            echo "        </div>
    ";
        }
        // line 185
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "phpversion", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 195
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 200
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasxdebug", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 207
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "haszendopcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 212
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasapc", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 217
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasxcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 222
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "haseaccelerator", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 228
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 231
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "bundles", array())) {
            // line 232
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "bundles", array())), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "bundles", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 242
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 243
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "bundles", array()), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "            </tbody>
        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 247,  513 => 244,  509 => 243,  506 => 242,  502 => 241,  489 => 232,  487 => 231,  481 => 228,  472 => 222,  464 => 217,  456 => 212,  448 => 207,  438 => 200,  430 => 195,  422 => 190,  415 => 185,  411 => 183,  404 => 179,  401 => 178,  399 => 177,  396 => 176,  389 => 172,  386 => 171,  384 => 170,  381 => 169,  374 => 165,  371 => 164,  369 => 163,  362 => 159,  356 => 155,  350 => 152,  341 => 146,  333 => 141,  327 => 137,  325 => 136,  322 => 135,  319 => 134,  311 => 129,  306 => 128,  303 => 127,  297 => 124,  294 => 123,  290 => 121,  277 => 110,  271 => 107,  266 => 106,  260 => 102,  258 => 101,  253 => 98,  251 => 97,  243 => 92,  235 => 87,  231 => 86,  222 => 80,  218 => 79,  210 => 73,  202 => 70,  198 => 68,  196 => 67,  193 => 66,  187 => 63,  183 => 61,  181 => 60,  178 => 59,  172 => 56,  168 => 54,  166 => 53,  161 => 50,  155 => 48,  147 => 46,  145 => 45,  139 => 41,  133 => 38,  129 => 37,  126 => 36,  124 => 35,  121 => 34,  119 => 33,  116 => 32,  113 => 31,  108 => 29,  103 => 27,  100 => 26,  98 => 25,  94 => 24,  89 => 23,  86 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if 'unknown' == collector.symfonyState %}*/
/*         {% set block_status = '' %}*/
/*         {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}*/
/*     {% elseif 'eol' == collector.symfonyState %}*/
/*         {% set block_status = 'red' %}*/
/*         {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}*/
/*     {% elseif 'eom' == collector.symfonyState %}*/
/*         {% set block_status = 'yellow' %}*/
/*         {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}*/
/*     {% elseif 'dev' == collector.symfonyState %}*/
/*         {% set block_status = 'yellow' %}*/
/*         {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}*/
/*     {% else %}*/
/*         {% set block_status = '' %}*/
/*         {% set symfony_version_status = '' %}*/
/*     {% endif %}*/
/* */
/*     {% set icon %}*/
/*         {% if collector.applicationname %}*/
/*             <span class="sf-toolbar-label">{{ collector.applicationname }}</span>*/
/*             <span class="sf-toolbar-value">{{ collector.applicationversion }}</span>*/
/*         {% elseif collector.symfonyState is defined %}*/
/*             <span class="sf-toolbar-label">*/
/*                 {{ include('@WebProfiler/Icon/symfony.svg') }}*/
/*             </span>*/
/*             <span class="sf-toolbar-value">{{ collector.symfonyversion }}</span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-group">*/
/*             {% if collector.applicationname %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>{{ collector.applicationname }}</b>*/
/*                     <span>{{ collector.applicationversion }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Profiler token</b>*/
/*                 <span>*/
/*                     {% if profiler_url %}*/
/*                         <a href="{{ profiler_url }}">{{ collector.token }}</a>*/
/*                     {% else %}*/
/*                         {{ collector.token }}*/
/*                     {% endif %}*/
/*                 </span>*/
/*             </div>*/
/* */
/*             {% if 'n/a' is not same as(collector.appname) %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Kernel name</b>*/
/*                     <span>{{ collector.appname }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if 'n/a' is not same as(collector.env) %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Environment</b>*/
/*                     <span>{{ collector.env }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if 'n/a' is not same as(collector.debug) %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Debug</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}">{{ collector.debug ? 'enabled' : 'disabled' }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="sf-toolbar-info-group">*/
/*             <div class="sf-toolbar-info-piece sf-toolbar-info-php">*/
/*                 <b>PHP version</b>*/
/*                 <span>*/
/*                     {{ collector.phpversion }}*/
/*                     &nbsp; <a href="{{ path('_profiler_phpinfo') }}">View phpinfo()</a>*/
/*                 </span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece sf-toolbar-info-php-ext">*/
/*                 <b>PHP Extensions</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}">xdebug</span>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}">accel</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>PHP SAPI</b>*/
/*                 <span>{{ collector.sapiName }}</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="sf-toolbar-info-group">*/
/*             {% if collector.symfonyversion is defined %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Resources</b>*/
/*                     <span>*/
/*                         {% if 'Silex' == collector.applicationname %}*/
/*                             <a href="http://silex.sensiolabs.org/documentation" rel="help">*/
/*                                 Read Silex Docs*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <a href="https://symfony.com/doc/{{ collector.symfonyversion }}/index.html" rel="help">*/
/*                                 Read Symfony {{ collector.symfonyversion }} Docs*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </span>*/
/*                 </div>*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Help</b>*/
/*                     <span>*/
/*                         <a href="http://symfony.com/support">*/
/*                             Symfony Support Channels*/
/*                         </a>*/
/*                     </span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right' }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/config.svg') }}</span>*/
/*         <strong>Configuration</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if collector.applicationname %}*/
/*         {# this application is not the Symfony framework #}*/
/*         <h2>Project Configuration</h2>*/
/* */
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.applicationname }}</span>*/
/*                 <span class="label">Application name</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.applicationversion }}</span>*/
/*                 <span class="label">Application version</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <p>*/
/*             Based on <a class="text-bold" href="https://symfony.com">Symfony {{ collector.symfonyversion }}</a>*/
/*         </p>*/
/*     {% else %}*/
/*         <h2>Symfony Configuration</h2>*/
/* */
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.symfonyversion }}</span>*/
/*                 <span class="label">Symfony version</span>*/
/*             </div>*/
/* */
/*             {% if 'n/a' != collector.appname %}*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.appname }}</span>*/
/*                     <span class="label">Application name</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if 'n/a' != collector.env %}*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.env }}</span>*/
/*                     <span class="label">Environment</span>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if 'n/a' != collector.debug %}*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.debug ? 'enabled' : 'disabled' }}</span>*/
/*                     <span class="label">Debug</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <h2>PHP Configuration</h2>*/
/* */
/*     <div class="metrics">*/
/*         <div class="metric">*/
/*             <span class="value">{{ collector.phpversion }}</span>*/
/*             <span class="label">PHP version</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.hasaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">PHP acceleration</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">Xdebug</span>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="metrics metrics-horizontal">*/
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">OPcache</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.hasapc ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">APC</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.hasxcache ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">XCache</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.haseaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*             <span class="label">EAccelerator</span>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <p>*/
/*         <a href="{{ path('_profiler_phpinfo') }}">View full PHP configuration</a>*/
/*     </p>*/
/* */
/*     {% if collector.bundles %}*/
/*         <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th class="key">Name</th>*/
/*                     <th>Path</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for name in collector.bundles|keys|sort %}*/
/*                 <tr>*/
/*                     <th scope="row" class="font-normal">{{ name }}</th>*/
/*                     <td class="font-normal">{{ collector.bundles[name] }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
