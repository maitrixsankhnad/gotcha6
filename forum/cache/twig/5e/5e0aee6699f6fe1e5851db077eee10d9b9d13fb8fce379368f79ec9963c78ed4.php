<?php

/* components/user-area.html */
class __TwigTemplate_cd49950bf61f7cb460be1725d43cb000358cb4863b3ee5460255f884b4b3c290 extends Twig_Template
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
        echo "<div class=\"user-area\">
  ";
        // line 2
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 3
            echo "  <div class=\"user-view\" role=\"menu\">
\t  
\t";
            // line 5
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 6
                echo "\t  <div class=\"dd-container user-view-notifications";
                if (((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null) > 0)) {
                    echo " has-unread";
                }
                echo "\" role=\"menuitem\" aria-label=\"(";
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo ") ";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "\">
\t\t<a id=\"notification_list_button\" href=\"";
                // line 7
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" data-placement=\"right\" data-toggle=\"dropdown\" title=\"";
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "\">
\t\t  ";
                // line 8
                if (((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null) > 0)) {
                    // line 9
                    echo "\t\t  <strong class=\"notification-count\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</strong>
\t\t  ";
                }
                // line 11
                echo "\t\t  <i class=\"fi fi-bell\"></i>
\t\t</a>
\t\t";
                // line 13
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "components/user-area.html", 13)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 14
                echo "\t  </div>
\t";
            }
            // line 16
            echo "

\t";
            // line 18
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 19
                echo "\t  <div class=\"user-view-pm";
                if (((isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null) > 0)) {
                    echo " has-unread";
                }
                echo "\" role=\"menuitem\" aria-label=\"(";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo ") ";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo "\">
\t\t<a href=\"";
                // line 20
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" data-placement=\"left\" title=\"";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo "\">
\t\t  ";
                // line 21
                if (((isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null) > 0)) {
                    // line 22
                    echo "\t\t\t<span class=\"notification-count\">";
                    echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                    echo "</span>
\t\t  ";
                }
                // line 24
                echo "\t\t  <i class=\"fi fi-email\"></i>
\t\t</a>
\t  </div>
\t";
            }
            // line 28
            echo "\t
\t<div class=\"user-view-dropdown-wrapper dd-container drop-arrow\">
\t  <a href=\"";
            // line 30
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" class=\"user-view-dropdown avatar\" data-toggle=\"dropdown\">
\t\t";
            // line 31
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "
\t\t";
            } else {
                // line 32
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NO_AVATAR", array());
            }
            // line 33
            echo "\t\t<span class=\"user-view-username\">";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "</span>
\t  </a>
\t  <ul class=\"dropdown-menu user-view-dropdown-menu\" role=\"menu\">
\t\t";
            // line 36
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fi fi-undo\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 37
            echo "\t\t
\t\t";
            // line 38
            if ((((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null) && (isset($context["U_ACP"]) ? $context["U_ACP"] : null)) && ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SLICKPANEL_ONPAGE", array()) != 1))) {
                // line 39
                echo "\t\t<li>
\t\t  <a href=\"";
                // line 40
                echo (isset($context["SLICKPANEL_LINK"]) ? $context["SLICKPANEL_LINK"] : null);
                echo "\" title=\"Theme Panel\" class=\"themepanel-link\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fi fi-palette\"></i> SlickPanel</a>
\t\t</li>
\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t";
            }
            // line 44
            echo "\t\t
\t\t";
            // line 45
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                // line 46
                echo "\t\t<li class=\"small-icon icon-acp\">
\t\t  <a href=\"";
                // line 47
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "\" role=\"menuitem\" tabindex=\"-1\" target=\"_blank\"><i class=\"fi fi-settings\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "</a>
\t\t</li>
\t\t";
            }
            // line 50
            echo "\t\t";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                // line 51
                echo "\t\t<li class=\"small-icon icon-mcp\">
\t\t  <a href=\"";
                // line 52
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MCP");
                echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fi fi-gavel\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("MCP");
                echo "</a>
\t\t</li>
\t\t";
            }
            // line 55
            echo "\t\t
\t\t";
            // line 56
            // line 57
            echo "\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fi fi-settings\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 58
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fi fi-account\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t\t";
            // line 59
            // line 60
            echo "\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t<li class=\"user-view-logout\"><a href=\"";
            // line 61
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fi fi-power\"></i>";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t  </ul>
\t</div>
  </div>
  ";
        } else {
            // line 66
            echo "  <ul class=\"guest-view list-unstyled ";
            if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                echo "has-register";
            }
            echo "\">
\t
\t
\t";
            // line 69
            if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 70
                echo "\t<li class=\"guest-register\"><a class=\"btn btn-link\" href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>";
            }
            // line 71
            echo "\t
\t";
            // line 72
            if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 73
                echo "\t<li class=\"guest-login quicklogin dd-container\">
\t  <a class=\"btn btn-link\" href=\"";
                // line 74
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\" data-toggle=\"dropdown\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "\" accesskey=\"x\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a>
\t  <div class=\"quicklogin-dropdown dropdown-menu\" role=\"menu\">
\t\t";
                // line 76
                $location = "components/quicklogin.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("components/quicklogin.html", "components/user-area.html", 76)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 77
                echo "\t  </div>
\t</li>
\t";
            }
            // line 80
            echo "\t
\t";
            // line 81
            // line 82
            echo "  </ul>
  ";
        }
        // line 84
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "components/user-area.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 84,  290 => 82,  289 => 81,  286 => 80,  281 => 77,  269 => 76,  260 => 74,  257 => 73,  255 => 72,  252 => 71,  245 => 70,  243 => 69,  234 => 66,  222 => 61,  219 => 60,  218 => 59,  210 => 58,  201 => 57,  200 => 56,  197 => 55,  187 => 52,  184 => 51,  181 => 50,  171 => 47,  168 => 46,  166 => 45,  163 => 44,  156 => 40,  153 => 39,  151 => 38,  148 => 37,  140 => 36,  133 => 33,  130 => 32,  124 => 31,  120 => 30,  116 => 28,  110 => 24,  104 => 22,  102 => 21,  94 => 20,  83 => 19,  81 => 18,  77 => 16,  73 => 14,  61 => 13,  57 => 11,  51 => 9,  49 => 8,  41 => 7,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="user-area">*/
/*   <!-- IF S_REGISTERED_USER -->*/
/*   <div class="user-view" role="menu">*/
/* 	  */
/* 	<!-- IF S_NOTIFICATIONS_DISPLAY -->*/
/* 	  <div class="dd-container user-view-notifications<!-- IF NOTIFICATIONS_COUNT gt 0 --> has-unread<!-- ENDIF -->" role="menuitem" aria-label="({NOTIFICATIONS_COUNT}) {L_NOTIFICATIONS}">*/
/* 		<a id="notification_list_button" href="{U_VIEW_ALL_NOTIFICATIONS}" data-placement="right" data-toggle="dropdown" title="{NOTIFICATIONS_COUNT} {L_NOTIFICATIONS}">*/
/* 		  <!-- IF NOTIFICATIONS_COUNT gt 0 -->*/
/* 		  <strong class="notification-count">{NOTIFICATIONS_COUNT}</strong>*/
/* 		  <!-- ENDIF -->*/
/* 		  <i class="fi fi-bell"></i>*/
/* 		</a>*/
/* 		<!-- INCLUDE notification_dropdown.html -->*/
/* 	  </div>*/
/* 	<!-- ENDIF -->*/
/* */
/* */
/* 	<!-- IF S_DISPLAY_PM -->*/
/* 	  <div class="user-view-pm<!-- IF PRIVATE_MESSAGE_COUNT gt 0 --> has-unread<!-- ENDIF -->" role="menuitem" aria-label="({PRIVATE_MESSAGE_COUNT}) {L_PRIVATE_MESSAGES}">*/
/* 		<a href="{U_PRIVATEMSGS}" data-placement="left" title="{PRIVATE_MESSAGE_COUNT} {L_PRIVATE_MESSAGES}">*/
/* 		  <!-- IF PRIVATE_MESSAGE_COUNT gt 0 -->*/
/* 			<span class="notification-count">{PRIVATE_MESSAGE_COUNT}</span>*/
/* 		  <!-- ENDIF -->*/
/* 		  <i class="fi fi-email"></i>*/
/* 		</a>*/
/* 	  </div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	<div class="user-view-dropdown-wrapper dd-container drop-arrow">*/
/* 	  <a href="{U_PROFILE}" class="user-view-dropdown avatar" data-toggle="dropdown">*/
/* 		<!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR}*/
/* 		<!-- ELSE -->{$NO_AVATAR}<!-- ENDIF -->*/
/* 		<span class="user-view-username">{CURRENT_USERNAME_SIMPLE}</span>*/
/* 	  </a>*/
/* 	  <ul class="dropdown-menu user-view-dropdown-menu" role="menu">*/
/* 		<!-- IF U_RESTORE_PERMISSIONS --><li class="small-icon icon-restore-permissions"><a href="{U_RESTORE_PERMISSIONS}" role="menuitem" tabindex="-1"><i class="fi fi-undo"></i> {L_RESTORE_PERMISSIONS}</a></li><!-- ENDIF -->*/
/* 		*/
/* 		<!-- IF SLICKPANEL_INSTALLED and U_ACP and $SLICKPANEL_ONPAGE != 1 -->*/
/* 		<li>*/
/* 		  <a href="{SLICKPANEL_LINK}" title="Theme Panel" class="themepanel-link" role="menuitem" tabindex="-1"><i class="fi fi-palette"></i> SlickPanel</a>*/
/* 		</li>*/
/* 		<li role="presentation" class="divider"></li>*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		<!-- IF U_ACP -->*/
/* 		<li class="small-icon icon-acp">*/
/* 		  <a href="{U_ACP}" title="{L_ACP}" role="menuitem" tabindex="-1" target="_blank"><i class="fi fi-settings"></i> {L_ACP}</a>*/
/* 		</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF U_MCP -->*/
/* 		<li class="small-icon icon-mcp">*/
/* 		  <a href="{U_MCP}" title="{L_MCP}" role="menuitem" tabindex="-1"><i class="fi fi-gavel"></i> {L_MCP}</a>*/
/* 		</li>*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		<!-- EVENT navbar_header_profile_list_before -->*/
/* 		<li class="small-icon icon-ucp"><a href="{U_PROFILE}" title="{L_PROFILE}" role="menuitem" tabindex="-1"><i class="fi fi-settings"></i> {L_PROFILE}</a></li>*/
/* 		<li class="small-icon icon-profile"><a href="{U_USER_PROFILE}" title="{L_READ_PROFILE}" role="menuitem" tabindex="-1"><i class="fi fi-account"></i> {L_READ_PROFILE}</a></li>*/
/* 		<!-- EVENT navbar_header_profile_list_after -->*/
/* 		<li role="presentation" class="divider"></li>*/
/* 		<li class="user-view-logout"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem" tabindex="-1"><i class="fi fi-power"></i>{L_LOGIN_LOGOUT}</a></li>*/
/* 	  </ul>*/
/* 	</div>*/
/*   </div>*/
/*   <!-- ELSE -->*/
/*   <ul class="guest-view list-unstyled <!-- IF S_REGISTER_ENABLED and not (S_SHOW_COPPA or S_REGISTRATION) -->has-register<!-- ENDIF -->">*/
/* 	*/
/* 	*/
/* 	<!-- IF S_REGISTER_ENABLED and not (S_SHOW_COPPA or S_REGISTRATION) -->*/
/* 	<li class="guest-register"><a class="btn btn-link" href="{U_REGISTER}" role="menuitem">{L_REGISTER}</a></li><!-- ENDIF -->*/
/* 	*/
/* 	<!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* 	<li class="guest-login quicklogin dd-container">*/
/* 	  <a class="btn btn-link" href="{U_LOGIN_LOGOUT}" data-toggle="dropdown" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem">{L_LOGIN_LOGOUT}</a>*/
/* 	  <div class="quicklogin-dropdown dropdown-menu" role="menu">*/
/* 		<!-- INCLUDE components/quicklogin.html -->*/
/* 	  </div>*/
/* 	</li>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	<!-- EVENT navbar_header_logged_out_content -->*/
/*   </ul>*/
/*   <!-- ENDIF -->*/
/* </div>*/
