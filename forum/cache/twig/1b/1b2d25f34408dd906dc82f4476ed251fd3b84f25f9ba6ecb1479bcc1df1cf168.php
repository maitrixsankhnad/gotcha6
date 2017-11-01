<?php

/* components/footer_complex.html */
class __TwigTemplate_f4e4ec264968d79c7c772767ec7eca3a39980dfb39905a633943eafdfdc532f6 extends Twig_Template
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
        echo "<div class=\"page-footer__before\">
\t<div class=\"container\">
    <div class=\"dropup footer-links-dropdown\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
            <span class=\"icon-menu-bars\"><span class=\"bar-1\"></span><span class=\"bar-2\"></span><span class=\"bar-3\"></span></span>
        </a>
        <ul class=\"dropdown-menu\" role=\"menu\">
            ";
        // line 8
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 9
            echo "                <li><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"slickthemes.resetStorage\" data-refresh=\"true\" role=\"menuitem\"><i class=\"fi fi-close\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
                ";
            // line 10
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 11
            echo "            ";
        }
        // line 12
        echo "            
            ";
        // line 13
        // line 14
        echo "            ";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 15
        echo "            ";
        // line 16
        echo "            ";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 17
        echo "        </ul>
    </div>
    
    <ul class=\"footer-links\" role=\"menu\">

        ";
        // line 22
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 23
            echo "            <li><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"slickthemes.resetStorage\" data-refresh=\"true\" role=\"menuitem\"><i class=\"fi fi-close\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
            ";
            // line 24
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "        
        ";
        // line 27
        // line 28
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 29
        echo "\t\t";
        // line 30
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 31
        echo "    </ul>
    
\t<span class=\"socialicons\">
\t  ";
        // line 34
        if ((isset($context["ST_social_fb"]) ? $context["ST_social_fb"] : null)) {
            // line 35
            echo "\t\t<a href=\"";
            echo (isset($context["ST_social_fb"]) ? $context["ST_social_fb"] : null);
            echo "\"><i class=\"fi fi-facebook-box\"></i></a>";
        }
        // line 36
        echo "\t  ";
        if ((isset($context["ST_social_twitter"]) ? $context["ST_social_twitter"] : null)) {
            // line 37
            echo "\t\t<a href=\"";
            echo (isset($context["ST_social_twitter"]) ? $context["ST_social_twitter"] : null);
            echo "\"><i class=\"fi fi-twitter-box\"></i></a>";
        }
        // line 38
        echo "\t  ";
        if ((isset($context["ST_social_gplus"]) ? $context["ST_social_gplus"] : null)) {
            // line 39
            echo "\t\t<a href=\"";
            echo (isset($context["ST_social_gplus"]) ? $context["ST_social_gplus"] : null);
            echo "\"><i class=\"fi fi-google-plus-box\"></i></a>";
        }
        // line 40
        echo "\t  ";
        if ((isset($context["ST_social_youtube"]) ? $context["ST_social_youtube"] : null)) {
            // line 41
            echo "\t\t<a href=\"";
            echo (isset($context["ST_social_youtube"]) ? $context["ST_social_youtube"] : null);
            echo "\"><i class=\"fi fi-youtube-play\"></i></a>";
        }
        // line 42
        echo "\t</span>
\t
  </div>
</div>

<div class=\"page-footer__inner container\">
  
  ";
        // line 49
        $location = "custom/complex_footer.php";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/complex_footer.php", "components/footer_complex.html", 49)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 50
        echo "  
</div>
";
    }

    public function getTemplateName()
    {
        return "components/footer_complex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 50,  172 => 49,  163 => 42,  158 => 41,  155 => 40,  150 => 39,  147 => 38,  142 => 37,  139 => 36,  134 => 35,  132 => 34,  127 => 31,  118 => 30,  116 => 29,  107 => 28,  106 => 27,  103 => 26,  100 => 25,  90 => 24,  83 => 23,  81 => 22,  74 => 17,  65 => 16,  63 => 15,  54 => 14,  53 => 13,  50 => 12,  47 => 11,  37 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="page-footer__before">*/
/* 	<div class="container">*/
/*     <div class="dropup footer-links-dropdown">*/
/*         <a href="javascript:void(0)" data-toggle="dropdown">*/
/*             <span class="icon-menu-bars"><span class="bar-1"></span><span class="bar-2"></span><span class="bar-3"></span></span>*/
/*         </a>*/
/*         <ul class="dropdown-menu" role="menu">*/
/*             <!-- IF not S_IS_BOT -->*/
/*                 <li><a href="{U_DELETE_COOKIES}" data-ajax="slickthemes.resetStorage" data-refresh="true" role="menuitem"><i class="fi fi-close"></i> {L_DELETE_COOKIES}</a></li>*/
/*                 <!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" title="{L_MEMBERLIST_EXPLAIN}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/*             <!-- ENDIF -->*/
/*             */
/*             <!-- EVENT overall_footer_teamlink_before -->*/
/*             <!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/*             <!-- EVENT overall_footer_teamlink_after -->*/
/*             <!-- IF U_CONTACT_US --><li><a href="{U_CONTACT_US}" role="menuitem">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/*         </ul>*/
/*     </div>*/
/*     */
/*     <ul class="footer-links" role="menu">*/
/* */
/*         <!-- IF not S_IS_BOT -->*/
/*             <li><a href="{U_DELETE_COOKIES}" data-ajax="slickthemes.resetStorage" data-refresh="true" role="menuitem"><i class="fi fi-close"></i> {L_DELETE_COOKIES}</a></li>*/
/*             <!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" title="{L_MEMBERLIST_EXPLAIN}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/*         <!-- ENDIF -->*/
/*         */
/*         <!-- EVENT overall_footer_teamlink_before -->*/
/* 		<!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 		<!-- EVENT overall_footer_teamlink_after -->*/
/* 		<!-- IF U_CONTACT_US --><li><a href="{U_CONTACT_US}" role="menuitem">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/*     </ul>*/
/*     */
/* 	<span class="socialicons">*/
/* 	  <!-- IF ST_social_fb -->*/
/* 		<a href="{ST_social_fb}"><i class="fi fi-facebook-box"></i></a><!-- ENDIF -->*/
/* 	  <!-- IF ST_social_twitter -->*/
/* 		<a href="{ST_social_twitter}"><i class="fi fi-twitter-box"></i></a><!-- ENDIF -->*/
/* 	  <!-- IF ST_social_gplus -->*/
/* 		<a href="{ST_social_gplus}"><i class="fi fi-google-plus-box"></i></a><!-- ENDIF -->*/
/* 	  <!-- IF ST_social_youtube -->*/
/* 		<a href="{ST_social_youtube}"><i class="fi fi-youtube-play"></i></a><!-- ENDIF -->*/
/* 	</span>*/
/* 	*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="page-footer__inner container">*/
/*   */
/*   <!-- INCLUDE custom/complex_footer.php -->*/
/*   */
/* </div>*/
/* */
