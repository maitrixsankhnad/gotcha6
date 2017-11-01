<?php

/* components/navigation.html */
class __TwigTemplate_14d1482529db863f29f0948a73963e471a3e79d68f4af3632fde224cc395ca91 extends Twig_Template
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
        echo "<a href=\"javascript:void(0)\" class=\"offcanvas-toggle offcanvas-navigation-toggle\">
    <span class=\"icon-menu-bars\"><span class=\"bar-1\"></span><span class=\"bar-2\"></span><span class=\"bar-3\"></span></span>
</a>

<ul class=\"navigation top-nav list-unstyled\">

    <li class=\"nav-item quick-links dd-container\">
\t\t<a href=\"javascript:void(0)\" id=\"quickLinksdrop\" title=\"";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "\" class=\"quick-links-dropdown-trigger\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"icon-menu-bars\"><span class=\"bar-1\"></span><span class=\"bar-2\"></span><span class=\"bar-3\"></span></span>
\t\t\t<span class=\"quick-links-label\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</span>
        </a>
        <ul class=\"quick-links-dropdown dropdown-menu\" role=\"menu\" aria-labelledby=\"quickLinksdrop\">
            ";
        // line 13
        // line 14
        echo "
            ";
        // line 15
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 16
            echo "                ";
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 17
                echo "\t\t\t\t<li role=\"presentation\"><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\" tabindex=\"-1\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t";
            }
            // line 19
            echo "
                ";
            // line 20
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 21
                echo "\t\t\t\t<li role=\"presentation\"><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\" tabindex=\"-1\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t";
            }
            // line 23
            echo "
                ";
            // line 24
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 25
                echo "\t\t\t\t<li role=\"presentation\"><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\" tabindex=\"-1\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t<li role=\"presentation\"><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\" tabindex=\"-1\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t<li role=\"presentation\"><a href=\"";
            // line 28
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\" tabindex=\"-1\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
                <li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t<li role=\"presentation\"><a href=\"";
            // line 30
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\" tabindex=\"-1\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t\t";
        }
        // line 32
        echo "
            <!--<li role=\"presentation\"><a href=\"";
        // line 33
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\" tabindex=\"-1\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>-->

            ";
        // line 35
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 36
            echo "\t\t\t\t";
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li role=\"presentation\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\" tabindex=\"-1\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 37
            echo "\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li role=\"presentation\"><a tabindex=\"-1\" href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\" tabindex=\"-1\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 38
            echo "\t\t\t";
        }
        // line 39
        echo "
            ";
        // line 40
        // line 41
        echo "        </ul>
\t</li>

    ";
        // line 44
        // line 45
        echo "    ";
        $location = "custom/navlinks.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/navlinks.html", "components/navigation.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 46
        echo "\t";
        // line 47
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "components/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 47,  161 => 46,  148 => 45,  147 => 44,  142 => 41,  141 => 40,  138 => 39,  135 => 38,  126 => 37,  117 => 36,  115 => 35,  106 => 33,  103 => 32,  96 => 30,  89 => 28,  82 => 27,  74 => 25,  72 => 24,  69 => 23,  61 => 21,  59 => 20,  56 => 19,  48 => 17,  45 => 16,  43 => 15,  40 => 14,  39 => 13,  33 => 10,  28 => 8,  19 => 1,);
    }
}
/* <a href="javascript:void(0)" class="offcanvas-toggle offcanvas-navigation-toggle">*/
/*     <span class="icon-menu-bars"><span class="bar-1"></span><span class="bar-2"></span><span class="bar-3"></span></span>*/
/* </a>*/
/* */
/* <ul class="navigation top-nav list-unstyled">*/
/* */
/*     <li class="nav-item quick-links dd-container">*/
/* 		<a href="javascript:void(0)" id="quickLinksdrop" title="{L_QUICK_LINKS}" class="quick-links-dropdown-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*             <span class="icon-menu-bars"><span class="bar-1"></span><span class="bar-2"></span><span class="bar-3"></span></span>*/
/* 			<span class="quick-links-label">{L_QUICK_LINKS}</span>*/
/*         </a>*/
/*         <ul class="quick-links-dropdown dropdown-menu" role="menu" aria-labelledby="quickLinksdrop">*/
/*             <!-- EVENT navbar_header_quick_links_before -->*/
/* */
/*             <!-- IF S_DISPLAY_SEARCH -->*/
/*                 <!-- IF S_REGISTERED_USER -->*/
/* 				<li role="presentation"><a href="{U_SEARCH_SELF}" role="menuitem" tabindex="-1">{L_SEARCH_SELF}</a></li>*/
/* 				<!-- ENDIF -->*/
/* */
/*                 <!-- IF S_USER_LOGGED_IN -->*/
/* 				<li role="presentation"><a href="{U_SEARCH_NEW}" role="menuitem" tabindex="-1">{L_SEARCH_NEW}</a></li>*/
/* 				<!-- ENDIF -->*/
/* */
/*                 <!-- IF S_LOAD_UNREADS -->*/
/* 				<li role="presentation"><a href="{U_SEARCH_UNREAD}" role="menuitem" tabindex="-1">{L_SEARCH_UNREAD}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<li role="presentation"><a href="{U_SEARCH_UNANSWERED}" role="menuitem" tabindex="-1">{L_SEARCH_UNANSWERED}</a></li>*/
/* 				<li role="presentation"><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem" tabindex="-1">{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/*                 <li role="presentation" class="divider"></li>*/
/* 				<li role="presentation"><a href="{U_SEARCH}" role="menuitem" tabindex="-1">{L_SEARCH}</a></li>*/
/* 			<!-- ENDIF -->*/
/* */
/*             <!--<li role="presentation"><a href="{U_FAQ}" rel="help" title="{L_FAQ_EXPLAIN}" role="menuitem" tabindex="-1">{L_FAQ}</a></li>-->*/
/* */
/*             <!-- IF not S_IS_BOT and (S_DISPLAY_MEMBERLIST or U_TEAM) -->*/
/* 				<!-- IF S_DISPLAY_MEMBERLIST --><li role="presentation"><a href="{U_MEMBERLIST}" role="menuitem" tabindex="-1">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 				<!-- IF U_TEAM --><li role="presentation"><a tabindex="-1" href="{U_TEAM}" role="menuitem" tabindex="-1">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/*             <!-- EVENT navbar_header_quick_links_after -->*/
/*         </ul>*/
/* 	</li>*/
/* */
/*     <!-- EVENT overall_header_navigation_prepend -->*/
/*     <!-- INCLUDE custom/navlinks.html -->*/
/* 	<!-- EVENT overall_header_navigation_append -->*/
/* </ul>*/
/* */
