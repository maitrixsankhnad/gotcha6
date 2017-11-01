<?php

/* notification_dropdown.html */
class __TwigTemplate_c664ffe83615cc9ca156b7f438528cbc531914d4fd8ae47e273dbabb10fb0031 extends Twig_Template
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
        echo "<ul id=\"notification_list\" class=\"dropdown-menu notifications-dropdown\" role=\"menu\">
\t<li class=\"dropdown-header clearfix\">
\t\t<span class=\"pull-right notifications-toplinks\">
\t\t\t<a href=\"";
        // line 4
        echo (isset($context["U_NOTIFICATION_SETTINGS"]) ? $context["U_NOTIFICATION_SETTINGS"] : null);
        echo "\" role=\"menuitem\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("SETTINGS");
        echo "\"><i class=\"fi fi-settings\"></i></a>
\t\t\t";
        // line 5
        if ((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
            // line 6
            echo "\t\t\t<span id=\"mark_all_notifications\"><a href=\"";
            echo (isset($context["U_MARK_ALL_NOTIFICATIONS"]) ? $context["U_MARK_ALL_NOTIFICATIONS"] : null);
            echo "\" role=\"menuitem\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL_READ");
            echo "\" data-ajax=\"notification.mark_all_read\"><i class=\"fi fi-check-all\"></i></a></span>
\t\t\t";
        }
        // line 8
        echo "\t\t</span>
\t\t<strong>";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
        echo "</strong>
\t</li>
\t
\t<li role=\"presentation\">

\t\t<ul class=\"list-unstyled notifications-list\" tabindex=\"-1\">
\t\t
\t\t\t";
        // line 16
        if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()))) {
            // line 17
            echo "\t\t\t\t<li class=\"notification-item no-notifications no_notifications\">
\t\t\t\t\t";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        // line 21
        echo "\t\t\t
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 23
            echo "\t\t\t\t<li class=\"notification-item";
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                echo " bg2";
            }
            if ($this->getAttribute($context["notifications"], "STYLING", array())) {
                echo " ";
                echo $this->getAttribute($context["notifications"], "STYLING", array());
            }
            if ( !$this->getAttribute($context["notifications"], "URL", array())) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t";
            // line 24
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                // line 25
                echo "\t\t\t\t\t\t<a role=\"menu-item\" class=\"notification-block\" href=\"";
                if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                    echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute($context["notifications"], "URL", array());
                } else {
                    echo $this->getAttribute($context["notifications"], "URL", array());
                }
                echo "\">
\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t<div class=\"notification-block\">
\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "AVATAR", array())) {
                echo "<span class=\"avatar\">";
                echo $this->getAttribute($context["notifications"], "AVATAR", array());
                echo "</span>";
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/no_avatar.jpg\" class=\"avatar no-avatar\" alt=\"";
                echo $this->env->getExtension('phpbb')->lang("USER_AVATAR");
                echo "\" />";
            }
            // line 30
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 31
            echo $this->getAttribute($context["notifications"], "FORMATTED_TITLE", array());
            echo "</p>
\t\t\t\t\t\t\t";
            // line 32
            if ($this->getAttribute($context["notifications"], "REFERENCE", array())) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute($context["notifications"], "REFERENCE", array());
                echo "</p>";
            }
            // line 33
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "FORUM", array())) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute($context["notifications"], "FORUM", array());
                echo "</p>";
            }
            // line 34
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "REASON", array())) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute($context["notifications"], "REASON", array());
                echo "</p>";
            }
            // line 35
            echo "\t\t\t\t\t\t\t<div class=\"notification-time\"><span class=\"timestamp\">";
            echo $this->getAttribute($context["notifications"], "TIME", array());
            echo "</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 37
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                // line 38
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                echo "\" class=\"notification-mark-read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                echo "\"><i class=\"fi fi-check\"></i></a>
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                // line 41
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t
\t\t</ul>
\t\t
\t</li>
\t
\t<li class=\"dropdown-footer\">
\t\t<a role=\"menuitem\" href=\"";
        // line 53
        echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
        echo "\">
\t\t\t<span>";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("SEE_ALL");
        echo "</span>
\t\t</a>
\t</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  185 => 53,  177 => 47,  170 => 45,  166 => 43,  162 => 41,  159 => 40,  151 => 38,  149 => 37,  143 => 35,  136 => 34,  129 => 33,  123 => 32,  119 => 31,  116 => 30,  103 => 29,  99 => 27,  87 => 25,  85 => 24,  71 => 23,  67 => 22,  64 => 21,  58 => 18,  55 => 17,  53 => 16,  43 => 9,  40 => 8,  32 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* <ul id="notification_list" class="dropdown-menu notifications-dropdown" role="menu">*/
/* 	<li class="dropdown-header clearfix">*/
/* 		<span class="pull-right notifications-toplinks">*/
/* 			<a href="{U_NOTIFICATION_SETTINGS}" role="menuitem" title="{L_SETTINGS}"><i class="fi fi-settings"></i></a>*/
/* 			<!-- IF NOTIFICATIONS_COUNT -->*/
/* 			<span id="mark_all_notifications"><a href="{U_MARK_ALL_NOTIFICATIONS}" role="menuitem" title="{L_MARK_ALL_READ}" data-ajax="notification.mark_all_read"><i class="fi fi-check-all"></i></a></span>*/
/* 			<!-- ENDIF -->*/
/* 		</span>*/
/* 		<strong>{L_NOTIFICATIONS}</strong>*/
/* 	</li>*/
/* 	*/
/* 	<li role="presentation">*/
/* */
/* 		<ul class="list-unstyled notifications-list" tabindex="-1">*/
/* 		*/
/* 			<!-- IF not .notifications -->*/
/* 				<li class="notification-item no-notifications no_notifications">*/
/* 					{L_NO_NOTIFICATIONS}*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			*/
/* 			<!-- BEGIN notifications -->*/
/* 				<li class="notification-item<!-- IF notifications.UNREAD --> bg2<!-- ENDIF --><!-- IF notifications.STYLING --> {notifications.STYLING}<!-- ENDIF --><!-- IF not notifications.URL --> no-url<!-- ENDIF -->">*/
/* 					<!-- IF notifications.URL -->*/
/* 						<a role="menu-item" class="notification-block" href="<!-- IF notifications.UNREAD -->{notifications.U_MARK_READ}" data-real-url="{notifications.URL}<!-- ELSE -->{notifications.URL}<!-- ENDIF -->">*/
/* 					<!-- ELSE -->*/
/* 						<div class="notification-block">*/
/* 					<!-- ENDIF -->*/
/* 						<!-- IF notifications.AVATAR --><span class="avatar">{notifications.AVATAR}</span><!-- ELSE --><img src="{T_THEME_PATH}/images/no_avatar.jpg" class="avatar no-avatar" alt="{L_USER_AVATAR}" /><!-- ENDIF -->*/
/* 						<div class="notification_text">*/
/* 							<p class="notification-title">{notifications.FORMATTED_TITLE}</p>*/
/* 							<!-- IF notifications.REFERENCE --><p class="notification-reference">{notifications.REFERENCE}</p><!-- ENDIF -->*/
/* 							<!-- IF notifications.FORUM --><p class="notification-forum">{notifications.FORUM}</p><!-- ENDIF -->*/
/* 							<!-- IF notifications.REASON --><p class="notification-reason">{notifications.REASON}</p><!-- ENDIF -->*/
/* 							<div class="notification-time"><span class="timestamp">{notifications.TIME}</span></div>*/
/* 						</div>*/
/* 						<!-- IF notifications.UNREAD -->*/
/* 							<a href="{notifications.U_MARK_READ}" class="notification-mark-read icon-mark" data-ajax="notification.mark_read" title="{L_MARK_READ}"><i class="fi fi-check"></i></a>*/
/* 						<!-- ENDIF -->*/
/* 					<!-- IF notifications.URL -->*/
/* 						</a>*/
/* 					<!-- ELSE -->*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 				</li>*/
/* 			<!-- END notifications -->*/
/* 		*/
/* 		</ul>*/
/* 		*/
/* 	</li>*/
/* 	*/
/* 	<li class="dropdown-footer">*/
/* 		<a role="menuitem" href="{U_VIEW_ALL_NOTIFICATIONS}">*/
/* 			<span>{L_SEE_ALL}</span>*/
/* 		</a>*/
/* 	</li>*/
/* </ul>*/
/* */
