<?php

/* custom/complex_footer.php */
class __TwigTemplate_a45023b660606a391ed33fcec1226590aaa194b1fa8018535db38307f960f710 extends Twig_Template
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
        echo "<div class=\"footer-block col-xs-6 col-sm-2 footer-navlist\">
\t<ul class=\"nav-list list-unstyled\" role=\"menu\">
\t  <li class=\"heading\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("FORUM");
        echo "</li>
\t\t";
        // line 4
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 5
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 6
            echo "\t\t";
        }
        // line 7
        echo "\t\t";
        // line 8
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 9
        echo "\t\t";
        // line 10
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 11
        echo "\t</ul>
</div>

<div class=\"footer-block col-xs-6 col-sm-2 footer-navlist\">
\t<ul class=\"nav-list list-unstyled\" role=\"menu\">
\t  <li class=\"heading\">Quick Links</li>
\t  <li><a href=\"http://maitrix4demo.in/gotcha6/about\" role=\"menuitem\">About</a></li>
\t  <li><a href=\"http://maitrix4demo.in/gotcha6/services\" role=\"menuitem\">Services</a></li>
\t  <li><a href=\"http://maitrix4demo.in/gotcha6/plan\" role=\"menuitem\">Plan</a></li>
\t  <li><a href=\"http://maitrix4demo.in/gotcha6/contract\" role=\"menuitem\">Contract</a></li>
\t  <li><a href=\"http://maitrix4demo.in/gotcha6/contact\" role=\"menuitem\">Contact</a></li>
\t</ul>
</div>

<div class=\"footer-block col-xs-6 col-sm-2 footer-navlist\">
\t<ul class=\"nav-list list-unstyled\" role=\"menu\">
\t  <li class=\"heading\">Navigation</li>
\t  <li><a href=\"http://maitrix4demo.in/gotcha6/\" role=\"menuitem\">Home</a></li>
\t  <li><a href=\"http://maitrix4demo.in/gotcha6/forum/\" role=\"menuitem\">Forum</a></li>
\t  <li><a href=\"http://maitrix4demo.in/gotcha6/forum/faq.php\" role=\"menuitem\">FAQs</a></li>
\t  <li><a href=\"#\" role=\"menuitem\">consectetur</a></li>
\t  <li><a href=\"#\" role=\"menuitem\">ullamco</a></li>
\t</ul>
</div>


<div class=\"footer-block col-xs-6 col-sm-2 footer-navlist\">
\t<ul class=\"nav-list list-unstyled\" role=\"menu\">
\t  <li class=\"heading\">Social</li>
\t  <li><a href=\"#\" role=\"menuitem\">Facebook</a></li>
\t  <li><a href=\"#\" role=\"menuitem\">LinkedIn</a></li>
\t  <li><a href=\"#\" role=\"menuitem\">Twitter</a></li>
\t  <li><a href=\"#\" role=\"menuitem\">Google+</a></li>
\t</ul>
</div>

<div class=\"footer-block col-xs-12 col-sm-4 footer-aboutus\">
\t<h4 class=\"heading\">About us</h4>
\t<p>
\t  Gotcha-6 Technologies combines the convenience of the Uber experience with an on demand incident management system that will provide organizations access to industry experts and an alternative to costly support contracts covering a multitude of higher service offerings. Gotcha-6 will provide access to Resource Managers that will assemble the proper Subject Matter expertise within hours and possibly minutes and drive your complex issues to completion in real time. 
\t</p>
</div>
<div id=\"sb_widget\"></div>";
    }

    public function getTemplateName()
    {
        return "custom/complex_footer.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  56 => 10,  54 => 9,  45 => 8,  43 => 7,  40 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="footer-block col-xs-6 col-sm-2 footer-navlist">*/
/* 	<ul class="nav-list list-unstyled" role="menu">*/
/* 	  <li class="heading">{L_FORUM}</li>*/
/* 		<!-- IF not S_IS_BOT -->*/
/* 			<!-- IF S_DISPLAY_MEMBERLIST --><li class="small-icon icon-members rightside" data-last-responsive="true"><a href="{U_MEMBERLIST}" title="{L_MEMBERLIST_EXPLAIN}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT overall_footer_teamlink_before -->*/
/* 		<!-- IF U_TEAM --><li class="small-icon icon-team rightside" data-last-responsive="true"><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 		<!-- EVENT overall_footer_teamlink_after -->*/
/* 		<!-- IF U_CONTACT_US --><li class="small-icon icon-contact rightside" data-last-responsive="true"><a href="{U_CONTACT_US}" role="menuitem">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/* 	</ul>*/
/* </div>*/
/* */
/* <div class="footer-block col-xs-6 col-sm-2 footer-navlist">*/
/* 	<ul class="nav-list list-unstyled" role="menu">*/
/* 	  <li class="heading">Quick Links</li>*/
/* 	  <li><a href="http://maitrix4demo.in/gotcha6/about" role="menuitem">About</a></li>*/
/* 	  <li><a href="http://maitrix4demo.in/gotcha6/services" role="menuitem">Services</a></li>*/
/* 	  <li><a href="http://maitrix4demo.in/gotcha6/plan" role="menuitem">Plan</a></li>*/
/* 	  <li><a href="http://maitrix4demo.in/gotcha6/contract" role="menuitem">Contract</a></li>*/
/* 	  <li><a href="http://maitrix4demo.in/gotcha6/contact" role="menuitem">Contact</a></li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* <div class="footer-block col-xs-6 col-sm-2 footer-navlist">*/
/* 	<ul class="nav-list list-unstyled" role="menu">*/
/* 	  <li class="heading">Navigation</li>*/
/* 	  <li><a href="http://maitrix4demo.in/gotcha6/" role="menuitem">Home</a></li>*/
/* 	  <li><a href="http://maitrix4demo.in/gotcha6/forum/" role="menuitem">Forum</a></li>*/
/* 	  <li><a href="http://maitrix4demo.in/gotcha6/forum/faq.php" role="menuitem">FAQs</a></li>*/
/* 	  <li><a href="#" role="menuitem">consectetur</a></li>*/
/* 	  <li><a href="#" role="menuitem">ullamco</a></li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* */
/* <div class="footer-block col-xs-6 col-sm-2 footer-navlist">*/
/* 	<ul class="nav-list list-unstyled" role="menu">*/
/* 	  <li class="heading">Social</li>*/
/* 	  <li><a href="#" role="menuitem">Facebook</a></li>*/
/* 	  <li><a href="#" role="menuitem">LinkedIn</a></li>*/
/* 	  <li><a href="#" role="menuitem">Twitter</a></li>*/
/* 	  <li><a href="#" role="menuitem">Google+</a></li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* <div class="footer-block col-xs-12 col-sm-4 footer-aboutus">*/
/* 	<h4 class="heading">About us</h4>*/
/* 	<p>*/
/* 	  Gotcha-6 Technologies combines the convenience of the Uber experience with an on demand incident management system that will provide organizations access to industry experts and an alternative to costly support contracts covering a multitude of higher service offerings. Gotcha-6 will provide access to Resource Managers that will assemble the proper Subject Matter expertise within hours and possibly minutes and drive your complex issues to completion in real time. */
/* 	</p>*/
/* </div>*/
/* <div id="sb_widget"></div>*/
