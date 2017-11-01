<?php

/* memberlist_view.html */
class __TwigTemplate_9791313374d7a9abe5d7308c3dd17f3315e706eb9a39ce21a7e93c39833dd35c extends Twig_Template
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
        echo "
";
        // line 2
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 2)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 3
        echo "
<h2 class=\"memberlist-title userprofile-title page-title hidden\">";
        // line 4
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>

";
        // line 6
        // line 7
        echo "
<form method=\"post\" action=\"";
        // line 8
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" id=\"viewprofile\">
<div class=\"row\">
\t<div class=\"col-md-5\">
\t<div class=\"userprofile-panel userprofile-info ";
        // line 11
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
\t\t<div class=\"userprofile-blurbox-overlay\"></div>
\t\t";
        // line 13
        if ((isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null)) {
            echo "<a class=\"has-tooltip userprofile-edit\" data-placement=\"left\" href=\"";
            echo (isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EDIT_PROFILE");
            echo "\"><i class=\"fi fi-pencil-box\"></i></a>";
        }
        // line 14
        echo "\t\t
\t\t<div class=\"userprofile-avatar\">
\t\t\t";
        // line 16
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 17
            echo "\t\t\t";
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "
\t\t\t";
        } else {
            // line 19
            echo "\t\t\t<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.jpg\" alt=\"";
            echo $this->env->getExtension('phpbb')->lang("USER_AVATAR");
            echo "\" />
\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t\t
\t\t<span class=\"userprofile-details\">
\t\t\t<h3 class=\"userprofile-username\" style=\"color:";
        // line 24
        echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
        echo "\">
\t\t\t\t";
        // line 25
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo " <span title=\"";
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("ONLINE");
        } else {
            echo $this->env->getExtension('phpbb')->lang("OFFLINE");
        }
        echo "\" class=\"has-tooltip user-status-indicator\"></span>
\t\t\t</h3>
\t\t\t
\t\t\t";
        // line 28
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "\t\t<span class=\"userprofile-ranktitle\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</span>";
        }
        // line 29
        echo "\t\t\t";
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "\t\t<span class=\"userprofile-rankimg\">";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</span>";
        }
        // line 30
        echo "\t\t\t\t
\t\t\t<div class=\"userprofile-customfields\">
\t\t\t\t";
        // line 32
        if (((isset($context["AGE"]) ? $context["AGE"] : null) !== "")) {
            // line 33
            echo "\t\t\t\t<span class=\"userprofile-customfield\">
\t\t\t\t\t<span class=\"userprofile-customfield-label\">";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span>
\t\t\t\t\t<span class=\"userprofile-customfield-value\">";
            // line 35
            echo (isset($context["AGE"]) ? $context["AGE"] : null);
            echo "</span>
\t\t\t\t</span>
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t
\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 40
            echo "\t\t\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 41
                echo "\t\t\t\t\t\t<span class=\"userprofile-customfield\">
\t\t\t\t\t\t\t<span class=\"userprofile-customfield-label\">";
                // line 42
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</span>
\t\t\t\t\t\t\t<span class=\"userprofile-customfield-value\">";
                // line 43
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</div>
\t\t\t
\t\t\t";
        // line 49
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_ZEBRA"]) ? $context["S_ZEBRA"] : null))) {
            // line 50
            echo "\t\t\t<div class=\"userprofile-zebra zebra\">
\t\t\t\t";
            // line 51
            if ((isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null)) {
                // line 52
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null);
                echo "\" data-ajax=\"zebra\" class=\"zebra-remove-friend btn btn-sm\"><i class=\"fa fa-user-times\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FRIEND");
                echo "</a>
\t\t\t\t";
            } elseif (            // line 53
(isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null)) {
                // line 54
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null);
                echo "\" data-ajax=\"zebra\" class=\"zebra-remove-foe btn btn-sm\"><i class=\"fa fa-user-times\"></i>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FOE");
                echo "</a>
\t\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t\t";
                if ((isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null)) {
                    // line 57
                    echo "\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null);
                    echo "\" data-ajax=\"zebra\" class=\"zebra-add-friend btn btn-sm\"><i class=\"fa fa-user-plus\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FRIEND");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t";
                if ((isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null)) {
                    // line 60
                    echo "\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null);
                    echo "\" data-ajax=\"zebra\" class=\"zebra-add-foe btn btn-sm\"><i class=\"fa fa-user-plus\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FOE");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t";
            }
            // line 63
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 65
        echo "\t\t</span>
\t</div>
\t
\t";
        // line 68
        if ((isset($context["S_USER_INACTIVE"]) ? $context["S_USER_INACTIVE"] : null)) {
            // line 69
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t<span class=\"alert-title\">";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo "</span>
\t\t\t";
            // line 71
            echo (isset($context["USER_INACTIVE_REASON"]) ? $context["USER_INACTIVE_REASON"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 74
        echo "\t
\t<div class=\"userprofile-panel userprofile-tools\">
\t\t";
        // line 76
        if ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</a>";
        }
        // line 77
        echo "\t\t";
        if ((isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-ban\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("USER_BAN");
            echo "</a>";
        }
        // line 78
        echo "\t\t";
        if ((isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-key\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
            echo "</a>";
        }
        // line 79
        echo "\t\t
\t\t";
        // line 80
        if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
            // line 81
            echo "\t\t<div class=\"input-group userprofile-usergroup\">
\t\t\t<span class=\"input-group-addon\" id=\"usergroup\">";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
            echo "</span>
\t\t\t<select name=\"g\" class=\"form-control\" aria-describedby=\"usergroup\">";
            // line 83
            echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
            echo "</select>
\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button type=\"submit\" name=\"submit\" value=\"";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "</button>
\t\t\t</span>
\t\t</div>
\t\t";
        }
        // line 89
        echo "\t\t
\t\t </dd>
\t</div>
\t";
        // line 92
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 93
            echo "\t<div class=\"userprofile-panel userprofile-signature\">
\t\t<h3>";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE");
            echo "</h3>
\t\t<div class=\"signature standalone\">";
            // line 95
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t</div>
\t";
        }
        // line 98
        echo "\t
\t</div>
\t<div class=\"col-md-7\">
\t<div class=\"userprofile-panel userprofile-stats\">
\t\t<h3>";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 104
        // line 105
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd><span class=\"timestamp\">";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</span></dd>
\t\t\t<dt>";
        // line 106
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd><span class=\"timestamp\">";
        echo (isset($context["LAST_ACTIVE"]) ? $context["LAST_ACTIVE"] : null);
        echo "</span></dd>
\t\t\t";
        // line 107
        if ((isset($context["S_WARNINGS"]) ? $context["S_WARNINGS"] : null)) {
            // line 108
            echo "\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 109
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "</strong>";
            if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                echo " <a href=\"";
                echo (isset($context["U_NOTES"]) ? $context["U_NOTES"] : null);
                echo "\" class=\"has-tooltip\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                echo "\"><i class=\"fi fi-clipboard-text\"></i></a>";
            }
            echo " ";
            if ((isset($context["U_WARN"]) ? $context["U_WARN"] : null)) {
                echo "<a class=\"has-tooltip\" href=\"";
                echo (isset($context["U_WARN"]) ? $context["U_WARN"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                echo "\"><i class=\"fi fi-alert\"></i></a>";
            }
            echo "</dd>
\t\t\t";
        }
        // line 111
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 112
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo " ";
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            echo "<strong><a href=\"";
            echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 113
        echo "\t\t\t\t\t";
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo "<br />(";
            echo (isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null);
            echo " / ";
            echo (isset($context["POSTS_DAY"]) ? $context["POSTS_DAY"] : null);
            echo ")";
        }
        // line 114
        echo "\t\t\t\t\t";
        if (((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null) && (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null))) {
            echo "<br />(<a href=\"";
            echo (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif ((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null)) {
            echo "<br />(";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 115
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 116
        if (((isset($context["S_SHOW_ACTIVITY"]) ? $context["S_SHOW_ACTIVITY"] : null) && (isset($context["POSTS"]) ? $context["POSTS"] : null))) {
            // line 117
            echo "\t\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
                echo "<strong><a href=\"";
                echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
                echo "</a></strong><br />(";
                echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 118
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
                echo "<strong><a href=\"";
                echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
                echo "</a></strong><br />(";
                echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 120
        echo "\t\t\t";
        // line 121
        echo "\t\t</dl>
\t</div>
\t
\t<div class=\"userprofile-panel userprofile-contact\">
\t\t<h3>";
        // line 125
        echo $this->env->getExtension('phpbb')->lang("CONTACT_USER");
        echo "</h3>

\t\t<dl class=\"details\">
\t\t";
        // line 128
        if ((isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 129
        echo "\t\t";
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("PM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 130
        echo "\t\t";
        if (((isset($context["U_JABBER"]) ? $context["U_JABBER"] : null) && (isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_JABBER"]) ? $context["U_JABBER"] : null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif ((isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null);
            echo "</dd>";
        }
        // line 131
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 132
            echo "\t\t\t";
            if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 133
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 134
                if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                    // line 135
                    echo "\t\t\t\t\t<dd><a href=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 137
                    echo "\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t\t";
                }
                // line 139
                echo "\t\t\t";
            }
            // line 140
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t";
        if ((isset($context["S_PROFILE_FIELD1"]) ? $context["S_PROFILE_FIELD1"] : null)) {
            // line 142
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 143
            echo (isset($context["PROFILE_FIELD1_NAME"]) ? $context["PROFILE_FIELD1_NAME"] : null);
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["PROFILE_FIELD1_VALUE"]) ? $context["PROFILE_FIELD1_VALUE"] : null);
            echo "</dd>
\t\t";
        }
        // line 145
        echo "\t\t</dl>
\t</div>
\t
\t</div>
\t
</div>

";
        // line 152
        // line 153
        echo "
";
        // line 154
        // line 155
        echo "


</form>

";
        // line 160
        // line 161
        echo "
";
        // line 162
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 162)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 163
        echo "
";
        // line 164
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 164)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 164,  609 => 163,  597 => 162,  594 => 161,  593 => 160,  586 => 155,  585 => 154,  582 => 153,  581 => 152,  572 => 145,  564 => 143,  561 => 142,  558 => 141,  552 => 140,  549 => 139,  543 => 137,  535 => 135,  533 => 134,  527 => 133,  524 => 132,  519 => 131,  500 => 130,  488 => 129,  477 => 128,  471 => 125,  465 => 121,  463 => 120,  443 => 118,  423 => 117,  421 => 116,  418 => 115,  405 => 114,  396 => 113,  386 => 112,  380 => 111,  359 => 109,  353 => 108,  351 => 107,  344 => 106,  336 => 105,  335 => 104,  330 => 102,  324 => 98,  318 => 95,  314 => 94,  311 => 93,  309 => 92,  304 => 89,  295 => 85,  290 => 83,  286 => 82,  283 => 81,  281 => 80,  278 => 79,  269 => 78,  260 => 77,  252 => 76,  248 => 74,  242 => 71,  238 => 70,  235 => 69,  233 => 68,  228 => 65,  224 => 63,  221 => 62,  213 => 60,  210 => 59,  202 => 57,  199 => 56,  191 => 54,  189 => 53,  182 => 52,  180 => 51,  177 => 50,  175 => 49,  171 => 47,  165 => 46,  159 => 43,  154 => 42,  151 => 41,  148 => 40,  144 => 39,  141 => 38,  135 => 35,  130 => 34,  127 => 33,  125 => 32,  121 => 30,  114 => 29,  108 => 28,  96 => 25,  92 => 24,  87 => 21,  79 => 19,  73 => 17,  71 => 16,  67 => 14,  59 => 13,  52 => 11,  46 => 8,  43 => 7,  42 => 6,  37 => 4,  34 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="memberlist-title userprofile-title page-title hidden">{PAGE_TITLE}</h2>*/
/* */
/* <!-- EVENT memberlist_view_content_prepend -->*/
/* */
/* <form method="post" action="{S_PROFILE_ACTION}" id="viewprofile">*/
/* <div class="row">*/
/* 	<div class="col-md-5">*/
/* 	<div class="userprofile-panel userprofile-info <!-- IF S_ONLINE --> online<!-- ENDIF -->">*/
/* 		<div class="userprofile-blurbox-overlay"></div>*/
/* 		<!-- IF U_EDIT_SELF --><a class="has-tooltip userprofile-edit" data-placement="left" href="{U_EDIT_SELF}" title="{L_EDIT_PROFILE}"><i class="fi fi-pencil-box"></i></a><!-- ENDIF -->*/
/* 		*/
/* 		<div class="userprofile-avatar">*/
/* 			<!-- IF AVATAR_IMG -->*/
/* 			{AVATAR_IMG}*/
/* 			<!-- ELSE -->*/
/* 			<img src="{T_THEME_PATH}/images/no_avatar.jpg" alt="{L_USER_AVATAR}" />*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		*/
/* 		<span class="userprofile-details">*/
/* 			<h3 class="userprofile-username" style="color:{USER_COLOR}">*/
/* 				{USERNAME} <span title="<!-- IF S_ONLINE -->{L_ONLINE}<!-- ELSE -->{L_OFFLINE}<!-- ENDIF -->" class="has-tooltip user-status-indicator"></span>*/
/* 			</h3>*/
/* 			*/
/* 			<!-- IF RANK_TITLE -->		<span class="userprofile-ranktitle">{RANK_TITLE}</span><!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG -->		<span class="userprofile-rankimg">{RANK_IMG}</span><!-- ENDIF -->*/
/* 				*/
/* 			<div class="userprofile-customfields">*/
/* 				<!-- IF AGE !== '' -->*/
/* 				<span class="userprofile-customfield">*/
/* 					<span class="userprofile-customfield-label">{L_AGE}{L_COLON}</span>*/
/* 					<span class="userprofile-customfield-value">{AGE}</span>*/
/* 				</span>*/
/* 				<!-- ENDIF -->*/
/* 				*/
/* 				<!-- BEGIN custom_fields -->*/
/* 					<!-- IF not custom_fields.S_PROFILE_CONTACT -->*/
/* 						<span class="userprofile-customfield">*/
/* 							<span class="userprofile-customfield-label">{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</span>*/
/* 							<span class="userprofile-customfield-value">{custom_fields.PROFILE_FIELD_VALUE}</span>*/
/* 						</span>*/
/* 					<!-- ENDIF -->*/
/* 				<!-- END custom_fields -->*/
/* 			</div>*/
/* 			*/
/* 			<!-- IF S_USER_LOGGED_IN and S_ZEBRA -->*/
/* 			<div class="userprofile-zebra zebra">*/
/* 				<!-- IF U_REMOVE_FRIEND -->*/
/* 				<a href="{U_REMOVE_FRIEND}" data-ajax="zebra" class="zebra-remove-friend btn btn-sm"><i class="fa fa-user-times"></i> {L_REMOVE_FRIEND}</a>*/
/* 				<!-- ELSEIF U_REMOVE_FOE -->*/
/* 				<a href="{U_REMOVE_FOE}" data-ajax="zebra" class="zebra-remove-foe btn btn-sm"><i class="fa fa-user-times"></i>{L_REMOVE_FOE}</a>*/
/* 				<!-- ELSE -->*/
/* 					<!-- IF U_ADD_FRIEND -->*/
/* 					<a href="{U_ADD_FRIEND}" data-ajax="zebra" class="zebra-add-friend btn btn-sm"><i class="fa fa-user-plus"></i>{L_ADD_FRIEND}</a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF U_ADD_FOE -->*/
/* 					<a href="{U_ADD_FOE}" data-ajax="zebra" class="zebra-add-foe btn btn-sm"><i class="fa fa-user-plus"></i>{L_ADD_FOE}</a>*/
/* 					<!-- ENDIF -->*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 			<!-- ENDIF -->*/
/* 		</span>*/
/* 	</div>*/
/* 	*/
/* 	<!-- IF S_USER_INACTIVE -->*/
/* 		<div class="alert alert-danger">*/
/* 			<span class="alert-title">{L_USER_IS_INACTIVE}</span>*/
/* 			{USER_INACTIVE_REASON}*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	<div class="userprofile-panel userprofile-tools">*/
/* 		<!-- IF U_USER_ADMIN --><a href="{U_USER_ADMIN}" class="btn btn-default">{L_USER_ADMIN}</a><!-- ENDIF -->*/
/* 		<!-- IF U_USER_BAN --><a href="{U_USER_BAN}" class="btn btn-default"><i class="fa fa-ban"></i> {L_USER_BAN}</a><!-- ENDIF -->*/
/* 		<!-- IF U_SWITCH_PERMISSIONS --><a href="{U_SWITCH_PERMISSIONS}" class="btn btn-default"><i class="fa fa-key"></i> {L_USE_PERMISSIONS}</a><!-- ENDIF -->*/
/* 		*/
/* 		<!-- IF S_GROUP_OPTIONS -->*/
/* 		<div class="input-group userprofile-usergroup">*/
/* 			<span class="input-group-addon" id="usergroup">{L_USERGROUPS}</span>*/
/* 			<select name="g" class="form-control" aria-describedby="usergroup">{S_GROUP_OPTIONS}</select>*/
/* 			<span class="input-group-btn">*/
/* 				<button type="submit" name="submit" value="{L_GO}" class="btn btn-default">{L_GO}</button>*/
/* 			</span>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		 </dd>*/
/* 	</div>*/
/* 	<!-- IF SIGNATURE -->*/
/* 	<div class="userprofile-panel userprofile-signature">*/
/* 		<h3>{L_SIGNATURE}</h3>*/
/* 		<div class="signature standalone">{SIGNATURE}</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	</div>*/
/* 	<div class="col-md-7">*/
/* 	<div class="userprofile-panel userprofile-stats">*/
/* 		<h3>{L_USER_FORUM}</h3>*/
/* 		<dl class="details">*/
/* 			<!-- EVENT memberlist_view_user_statistics_before -->*/
/* 			<dt>{L_JOINED}{L_COLON}</dt> <dd><span class="timestamp">{JOINED}</span></dd>*/
/* 			<dt>{L_LAST_ACTIVE}{L_COLON}</dt> <dd><span class="timestamp">{LAST_ACTIVE}</span></dd>*/
/* 			<!-- IF S_WARNINGS -->*/
/* 			<dt>{L_WARNINGS}{L_COLON} </dt>*/
/* 			<dd><strong>{WARNINGS}</strong><!-- IF U_NOTES --> <a href="{U_NOTES}" class="has-tooltip" title="{L_VIEW_NOTES}"><i class="fi fi-clipboard-text"></i></a><!-- ENDIF --> <!-- IF U_WARN --><a class="has-tooltip" href="{U_WARN}" title="{L_WARN_USER}"><i class="fi fi-alert"></i></a><!-- ENDIF --></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<dt>{L_TOTAL_POSTS}{L_COLON}</dt>*/
/* 				<dd>{POSTS} <!-- IF S_DISPLAY_SEARCH --><strong><a href="{U_SEARCH_USER}">{L_SEARCH_USER_POSTS}</a></strong><!-- ENDIF -->*/
/* 					<!-- IF POSTS_PCT --><br />({POSTS_PCT} / {POSTS_DAY})<!-- ENDIF -->*/
/* 					<!-- IF POSTS_IN_QUEUE and U_MCP_QUEUE --><br />(<a href="{U_MCP_QUEUE}">{L_POSTS_IN_QUEUE}</a>)<!-- ELSEIF POSTS_IN_QUEUE --><br />({L_POSTS_IN_QUEUE})<!-- ENDIF -->*/
/* 				</dd>*/
/* 			<!-- IF S_SHOW_ACTIVITY and POSTS -->*/
/* 				<dt>{L_ACTIVE_IN_FORUM}{L_COLON}</dt> <dd><!-- IF ACTIVE_FORUM != '' --><strong><a href="{U_ACTIVE_FORUM}">{ACTIVE_FORUM}</a></strong><br />({ACTIVE_FORUM_POSTS} / {ACTIVE_FORUM_PCT})<!-- ELSE --> - <!-- ENDIF --></dd>*/
/* 				<dt>{L_ACTIVE_IN_TOPIC}{L_COLON}</dt> <dd><!-- IF ACTIVE_TOPIC != '' --><strong><a href="{U_ACTIVE_TOPIC}">{ACTIVE_TOPIC}</a></strong><br />({ACTIVE_TOPIC_POSTS} / {ACTIVE_TOPIC_PCT})<!-- ELSE --> - <!-- ENDIF --></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_user_statistics_after -->*/
/* 		</dl>*/
/* 	</div>*/
/* 	*/
/* 	<div class="userprofile-panel userprofile-contact">*/
/* 		<h3>{L_CONTACT_USER}</h3>*/
/* */
/* 		<dl class="details">*/
/* 		<!-- IF U_EMAIL --><dt>{L_EMAIL_ADDRESS}{L_COLON}</dt> <dd><a href="{U_EMAIL}">{L_SEND_EMAIL_USER}</a></dd><!-- ENDIF -->*/
/* 		<!-- IF U_PM --><dt>{L_PM}{L_COLON}</dt> <dd><a href="{U_PM}">{L_SEND_PRIVATE_MESSAGE}</a></dd><!-- ENDIF -->*/
/* 		<!-- IF U_JABBER and S_JABBER_ENABLED --><dt>{L_JABBER}{L_COLON}</dt> <dd><a href="{U_JABBER}" onclick="popup(this.href, 750, 320); return false;">{L_SEND_JABBER_MESSAGE}</a></dd><!-- ELSEIF USER_JABBER --><dt>{L_JABBER}{L_COLON}</dt> <dd>{USER_JABBER}</dd><!-- ENDIF -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dt>{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</dt>*/
/* 				<!-- IF custom_fields.PROFILE_FIELD_CONTACT -->*/
/* 					<dd><a href="{custom_fields.PROFILE_FIELD_CONTACT}">{custom_fields.PROFILE_FIELD_DESC}</a></dd>*/
/* 				<!-- ELSE -->*/
/* 					<dd>{custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- IF S_PROFILE_FIELD1 -->*/
/* 			<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 			<dt>{PROFILE_FIELD1_NAME}{L_COLON}</dt> <dd>{PROFILE_FIELD1_VALUE}</dd>*/
/* 		<!-- ENDIF -->*/
/* 		</dl>*/
/* 	</div>*/
/* 	*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* */
/* <!-- EVENT memberlist_view_contact_before -->*/
/* */
/* <!-- EVENT memberlist_view_contact_after -->*/
/* */
/* */
/* */
/* </form>*/
/* */
/* <!-- EVENT memberlist_view_content_append -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
