<?php

/* widgets/statistics.html */
class __TwigTemplate_6faf18b105441ebdefbaa63bb2263f3b4f55e9dcf3ddce48097226cd3a627850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "st_widgetshown_stats", array())) {
            // line 2
            if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index")) {
                // line 3
                echo "<div class=\"sidebar-widget statistics\">
<div class=\"widget-header\">
  <i class=\"widget-icon fi fi-chart-bar\"></i>
  ";
                // line 6
                echo $this->env->getExtension('phpbb')->lang("STATISTICS");
                echo "
</div>
<div class=\"widget-content collapse in\" id=\"widget-statistics\">
\t\t";
                // line 9
                // line 10
                echo "\t\t";
                if ((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null)) {
                    echo "<p><i class=\"fa fa-comment\"></i>";
                    echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                    echo "</p>";
                }
                // line 11
                echo "\t\t";
                if ((isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) {
                    echo "<p><i class=\"fa fa-comments\"></i>";
                    echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
                    echo "</p>";
                }
                // line 12
                echo "\t\t";
                if ((isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null)) {
                    echo "<p><i class=\"fa fa-users\"></i>";
                    echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
                    echo "</p>";
                }
                // line 13
                echo "\t\t";
                if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
                    echo "<p><i class=\"fa fa-user\"></i>";
                    echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
                    echo "</p>";
                }
                // line 14
                echo "\t\t";
                // line 15
                echo "</div>
</div>
";
            }
            // line 18
            $value = true;
            $context['definition']->set('st_widgetshown_stats', $value);
        }
    }

    public function getTemplateName()
    {
        return "widgets/statistics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  65 => 15,  63 => 14,  56 => 13,  49 => 12,  42 => 11,  35 => 10,  34 => 9,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not $st_widgetshown_stats -->*/
/* <!-- IF SCRIPT_NAME == 'index' -->*/
/* <div class="sidebar-widget statistics">*/
/* <div class="widget-header">*/
/*   <i class="widget-icon fi fi-chart-bar"></i>*/
/*   {L_STATISTICS}*/
/* </div>*/
/* <div class="widget-content collapse in" id="widget-statistics">*/
/* 		<!-- EVENT index_body_block_stats_prepend -->*/
/* 		<!-- IF TOTAL_TOPICS --><p><i class="fa fa-comment"></i>{TOTAL_TOPICS}</p><!-- ENDIF -->*/
/* 		<!-- IF TOTAL_POSTS --><p><i class="fa fa-comments"></i>{TOTAL_POSTS}</p><!-- ENDIF -->*/
/* 		<!-- IF TOTAL_USERS --><p><i class="fa fa-users"></i>{TOTAL_USERS}</p><!-- ENDIF -->*/
/* 		<!-- IF NEWEST_USER --><p><i class="fa fa-user"></i>{NEWEST_USER}</p><!-- ENDIF -->*/
/* 		<!-- EVENT index_body_block_stats_append -->*/
/* </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- DEFINE $st_widgetshown_stats = true -->*/
/* <!-- ENDIF -->*/
/* */
