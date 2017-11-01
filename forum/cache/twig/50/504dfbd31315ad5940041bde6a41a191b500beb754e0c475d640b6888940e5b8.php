<?php

/* widgets/whoisonline.html */
class __TwigTemplate_cb8ad075f64e5bd58ad136665686d1bccc59e7bb4fd6315e53a9e153404ac033 extends Twig_Template
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
        if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "st_widgetshown_wol", array())) {
            // line 2
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 3
                echo "  <div class=\"sidebar-widget online-list\">
\t<div class=\"widget-header\">
\t  <i class=\"widget-icon fi fi-earth\"></i>
\t  ";
                // line 6
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</a>
\t  ";
                } else {
                    // line 7
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                }
                // line 8
                echo "\t  <span class=\"online-list-total\"><span class=\"formatted-numcounter\">";
                echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
                echo "</span></span>

\t</div>
\t<div class=\"widget-content collapse in\" id=\"widget-onlineList\">
\t  ";
                // line 12
                // line 13
                echo "\t  ";
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "
\t  <em class=\"wol-explain\">";
                // line 14
                echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
                echo "</em>
\t  ";
                // line 15
                if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                    echo "<div class=\"rank-legend\">";
                    echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                    echo "</div>";
                }
                // line 16
                echo "\t  <!--<div class=\"block-section\">
\t\t";
                // line 17
                echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
                echo "
\t  </div>-->
\t  ";
                // line 19
                // line 20
                echo "\t</div>
  </div>
";
            }
            // line 23
            $value = true;
            $context['definition']->set('st_widgetshown_wol', $value);
        }
    }

    public function getTemplateName()
    {
        return "widgets/whoisonline.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  73 => 20,  72 => 19,  67 => 17,  64 => 16,  58 => 15,  54 => 14,  49 => 13,  48 => 12,  40 => 8,  37 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not $st_widgetshown_wol -->*/
/* <!-- IF S_DISPLAY_ONLINE_LIST  -->*/
/*   <div class="sidebar-widget online-list">*/
/* 	<div class="widget-header">*/
/* 	  <i class="widget-icon fi fi-earth"></i>*/
/* 	  <!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a>*/
/* 	  <!-- ELSE -->{L_WHO_IS_ONLINE}<!-- ENDIF -->*/
/* 	  <span class="online-list-total"><span class="formatted-numcounter">{TOTAL_USERS_ONLINE}</span></span>*/
/* */
/* 	</div>*/
/* 	<div class="widget-content collapse in" id="widget-onlineList">*/
/* 	  <!-- EVENT index_body_block_online_prepend -->*/
/* 	  {LOGGED_IN_USER_LIST}*/
/* 	  <em class="wol-explain">{L_ONLINE_EXPLAIN}</em>*/
/* 	  <!-- IF LEGEND --><div class="rank-legend">{LEGEND}</div><!-- ENDIF -->*/
/* 	  <!--<div class="block-section">*/
/* 		{RECORD_USERS}*/
/* 	  </div>-->*/
/* 	  <!-- EVENT index_body_block_online_append -->*/
/* 	</div>*/
/*   </div>*/
/* <!-- ENDIF -->*/
/* <!-- DEFINE $st_widgetshown_wol = true -->*/
/* <!-- ENDIF -->*/
/* */
