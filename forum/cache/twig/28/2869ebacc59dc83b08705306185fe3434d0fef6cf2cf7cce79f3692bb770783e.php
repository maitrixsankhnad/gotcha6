<?php

/* viewforum_body.html */
class __TwigTemplate_82b0ac09fca02c183a69fadfe0d5ecefa8a4fd628a2fd7f56bab8a69f94385d4 extends Twig_Template
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
        $value = "forum";
        $context['definition']->set('ST_SECTION', $value);
        // line 2
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 2)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 3
        echo "<div class=\"big-grid\">
<div class=\"col-maincontent\">
<div class=\"page-header\">
\t<div class=\"page-header-inner\">
\t\t";
        // line 7
        if ((isset($context["FORUM_IMAGE"]) ? $context["FORUM_IMAGE"] : null)) {
            // line 8
            echo "\t\t\t\t\t\t<span class=\"forum-image\">";
            echo (isset($context["FORUM_IMAGE"]) ? $context["FORUM_IMAGE"] : null);
            echo "</span>
\t\t\t\t\t";
        }
        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a>";
        echo "</h2>
\t\t\t";
        // line 12
        // line 13
        echo "\t\t";
        if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
            echo "<p class=\"forum-description\">";
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "</p>";
        }
        // line 14
        echo "\t</div>

\t<div class=\"action-bar\">
\t\t";
        // line 17
        if ((((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
            // line 18
            echo "\t\t<a href=\"";
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\" class=\"btn btn-default mark-read\" data-ajax=\"mark_forums_read\"><i class=\"fi fi-check\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
            echo "</a>
\t\t";
        }
        // line 20
        echo "\t\t";
        if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 21
            echo "\t\t\t<span class=\"icon-";
            if ( !(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "subscribe";
            } else {
                echo "unsubscribe";
            }
            echo "\">
\t\t\t<a href=\"";
            // line 22
            echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon-";
            if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "subscribe";
            } else {
                echo "unsubscribe";
            }
            echo "\" data-toggle-text=\"";
            echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
            echo "\" data-toggle-url=\"";
            echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
            echo "\">";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "</a>
\t\t\t</span>
\t\t";
        }
        // line 25
        echo "
\t\t";
        // line 26
        if (((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) || ((isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) || (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null))) {
            // line 27
            echo "\t\t<span class=\"dd-container dropdown--options\">
\t\t<i class=\"fi fi-dots-vertical\" data-toggle=\"dropdown\"></i>
\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t";
            // line 30
            if ((((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                // line 31
                echo "\t\t\t<li><a href=\"";
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" data-ajax=\"mark_forums_read\"><i class=\"fi fi-check\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                echo "</a></li>
\t\t\t";
            }
            // line 33
            echo "\t\t\t";
            if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 34
                echo "\t\t\t\t<li class=\"icon-";
                if ( !(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "subscribe";
                } else {
                    echo "unsubscribe";
                }
                echo "\">
\t\t\t\t<a href=\"";
                // line 35
                echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
                echo "\" title=\"";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon-";
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "subscribe";
                } else {
                    echo "unsubscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
                echo "\">";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 38
            echo "\t\t\t";
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                echo "<li>
\t\t\t<a href=\"";
                // line 39
                echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                echo "\" accesskey=\"m\" data-ajax=\"mark_topics_read\"><i class=\"fi fi-check-all\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a>
\t\t\t</li>";
            }
            // line 41
            echo "\t\t</ul>
\t\t</span>
\t\t";
        }
        // line 44
        echo "\t</div>
</div>

";
        // line 47
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            // line 48
            echo "<div class=\"forum-moderators--block\">
\t<strong class=\"forum-moderators__label\">";
            // line 49
            if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MODERATORS");
            }
            echo "</strong>
\t<span class=\"forum-moderators__list\">";
            // line 50
            echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
            echo "</span>
</div>
";
        }
        // line 53
        echo "
";
        // line 54
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 55
            echo "\t<div class=\"rules";
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 58
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 59
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 61
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 62
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "
\t\t";
            }
            // line 64
            echo "
\t\t</div>
\t</div>
";
        }
        // line 68
        echo "
";
        // line 69
        if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
            // line 70
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 70)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 72
        echo "

";
        // line 74
        if (((((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
            // line 75
            echo "\t<div class=\"action-bar top\">

\t";
            // line 77
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 78
                echo "\t\t<div class=\"buttons\">
\t\t\t";
                // line 79
                // line 80
                echo "
\t\t\t";
                // line 81
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    // line 82
                    echo "\t\t\t<a href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" class=\"btn btn-danger btn-createnew locked\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                    echo "\">
\t\t\t\t<i class=\"fi fi-lock\"></i> ";
                    // line 83
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_FORUM_LOCKED");
                    echo "
\t\t\t</a>
\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t<a href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" class=\"btn btn-success btn-createnew\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                    echo "\">
\t\t\t\t<i class=\"fi fi-plus\"></i> ";
                    // line 87
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_NEW_TOPIC");
                    echo "
\t\t\t</a>
\t\t\t";
                }
                // line 90
                echo "
\t\t\t";
                // line 91
                // line 92
                echo "\t\t</div>
\t";
            }
            // line 94
            echo "
\t";
            // line 95
            if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
                // line 96
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 97
                echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
                echo "\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input class=\"search form-control\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 99
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" title=\"";
                // line 101
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\"><i class=\"fi ";
                if (((isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null) == "right")) {
                    echo "fi-arrow-right";
                } else {
                    echo "fi-magnify";
                }
                echo "\"></i></button>
\t\t\t\t<a href=\"";
                // line 102
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\" class=\"btn btn-default\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\"><i class=\"fi fi-settings\"></i></a>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t";
                // line 105
                echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 109
            echo "
\t<div class=\"right-side\">
\t\t";
            // line 111
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                echo "<a href=\"";
                echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                echo "\" class=\"btn mark btn-default mark-read\" accesskey=\"m\" data-ajax=\"mark_topics_read\"><i class=\"fi fi-check-all\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a> ";
            }
            // line 112
            echo "\t\t<!--";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "-->
\t\t";
            // line 113
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 114
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 114)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 115
                echo "\t\t";
            }
            // line 116
            echo "\t</div>

\t</div>
";
        }
        // line 120
        echo "
";
        // line 121
        if ((isset($context["S_NO_READ_ACCESS"]) ? $context["S_NO_READ_ACCESS"] : null)) {
            // line 122
            echo "
\t<div class=\"panel\">
\t\t<strong>";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("NO_READ_ACCESS");
            echo "</strong>
\t</div>

\t";
            // line 127
            if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 128
                echo "
\t\t<form action=\"";
                // line 129
                echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 135
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 139
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 140
                echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
                echo "\" class=\"form-control inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 143
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t\t";
                // line 145
                if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 146
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 150
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 152
                echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 162
            echo "
";
        }
        // line 164
        echo "
";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 166
            echo "
\t";
            // line 167
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 168
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 172
            echo "
\t";
            // line 173
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 174
                echo "\t\t<div class=\"forumbg";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo " announcements";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<div class=\"section-header\">
\t\t\t<span";
                // line 177
                if ((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null)) {
                    echo " id=\"active_topics\"";
                }
                echo ">";
                if ((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                }
                echo "</span>

\t\t\t";
                // line 179
                if ( !($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()))) {
                    // line 180
                    echo "\t\t\t<span class=\"topic-count\">";
                    echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                    echo "</span>
\t\t\t";
                }
                // line 182
                echo "\t\t</div>
\t\t<ul class=\"itemlist itemlist--topics itemlist--topics--full itemlist--has-colbar\">
\t\t";
                // line 184
                if (0) {
                    // line 185
                    echo "\t\t<li class=\"itemlist__item itemlist__item--colbar\">
\t\t\t<div class=\"item-inner\">
\t\t\t\t<div class=\"item-col-icon\"></div>
\t\t\t\t<div class=\"item-col-main\">";
                    // line 188
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo "</div>
\t\t\t\t<div class=\"item-col-stats item-col-stats--two\"></div>
\t\t\t\t<div class=\"item-col-lastpost\">";
                    // line 190
                    echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                    echo "</div>
\t\t\t</div>
\t\t</li>
\t\t";
                }
                // line 194
                echo "\t";
            }
            // line 195
            echo "\t\t<li data-topic-id=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
            echo "\" class=\"itemlist__item ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", array());
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t<div class=\"item-inner\">

\t\t\t\t<div class=\"item-col-icon\"";
            // line 198
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_MOVED", array())) {
                echo " title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_MOVED");
                echo "\"";
            }
            echo ">
\t\t\t\t\t<i class=\"fi item-icon\"></i>
\t\t\t\t\t";
            // line 200
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NEWEST_POST");
                echo "\" class=\"icon-link\"></a>";
            }
            // line 201
            echo "\t\t\t\t</div>

\t\t\t\t<div class=\"item-col-main\">
\t\t\t\t\t";
            // line 204
            // line 205
            echo "
\t\t\t\t\t";
            // line 206
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                echo "<img class=\"topic-icon-img\" src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\">";
            }
            // line 207
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_LOCKED", array())) {
                echo "<span class=\"item-ti item-ti--locked has-tooltip\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED_SHORT");
                echo "\"><i class=\"fi fi-lock\"></i></span>";
            }
            // line 208
            echo "
\t\t\t\t\t<a href=\"";
            // line 209
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"item-title\">";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</a>

\t\t\t\t\t";
            // line 211
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                // line 212
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" class=\"item-ti item-ti--unapproved has-tooltip\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POSTS_UNAPPROVED_FORUM");
                echo "\"><i class=\"fi fi-flag\"></i></a>
\t\t\t\t\t";
            }
            // line 214
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                // line 215
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" class=\"item-ti item-ti--deleted has-tooltip\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_DELETED");
                echo "\"><i class=\"fi fi-recycle\"></i></a>
\t\t\t\t\t";
            }
            // line 217
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                // line 218
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" class=\"item-ti item-ti--reported has-tooltip\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REPORTED");
                echo "\"><i class=\"fi fi-alert\"></i></a>
\t\t\t\t\t";
            }
            // line 220
            echo "

\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t";
            // line 223
            echo $this->env->getExtension('phpbb')->lang("POSTED");
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            echo " <span class=\"topic-info-time\"><span class=\"timestamp\">";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "</span></span>
\t\t\t\t\t\t";
            // line 224
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo " <a class=\"globaltopic-parentforum\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a>";
            }
            // line 225
            echo "
\t\t\t\t\t\t";
            // line 226
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                echo "<span class=\"item-info__icon has-tooltip\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_POLL");
                echo "\"><i class=\"fi fi-poll\"></i></span>";
            }
            // line 227
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                echo "<span class=\"item-info__icon has-tooltip\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "\"><i class=\"fi fi-attachment\"></i></span>";
            }
            // line 228
            echo "
\t\t\t\t\t\t";
            // line 229
            // line 230
            echo "\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 232
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 233
                echo "\t\t\t\t\t\t<div class=\"item-lastpost--inline\">
\t\t\t\t\t\t\t<span class=\"reply-counter";
                // line 234
                if (($this->getAttribute($context["topicrow"], "REPLIES", array()) == 0)) {
                    echo " reply-counter--zero";
                }
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"formatted-numcounter\">";
                // line 235
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo "</span>
\t\t\t\t\t\t\t\t<i class=\"fi fi-message-text-outline\"></i>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t";
                // line 239
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "
\t\t\t\t\t\t\t";
                // line 240
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo "
\t\t\t\t\t\t\t";
                // line 241
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                echo "
\t\t\t\t\t\t\t<a href=\"";
                // line 242
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" class=\"topic-lastpost-time\"><span class=\"timestamp\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item-stats--inline\">
\t\t\t\t\t\t\t<span class=\"item-stat item-stat--posts\">
\t\t\t\t\t\t\t\t<span class=\"topic-posts-count\"><span class=\"formatted-numcounter\">";
                // line 246
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo "</span></span>
\t\t\t\t\t\t\t\t<span class=\"topic-posts-label\">";
                // line 247
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"item-stat item-stat--views\">
\t\t\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                // line 250
                echo $this->getAttribute($context["topicrow"], "VIEWS", array());
                echo "</span></span>
\t\t\t\t\t\t\t\t<span class=\"item-stat__label\">";
                // line 251
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 255
            echo "
\t\t\t\t</div>

\t\t\t\t<!-- PAGINATION BLOCK -->
\t\t\t\t<div class=\"item-col-pagination\">
\t\t\t\t\t";
            // line 260
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                // line 261
                echo "\t\t\t\t\t\t<ul class=\"pagination pagination-xs\">
\t\t\t\t\t\t\t";
                // line 262
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 263
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 264
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 265
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 266
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 267
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 269
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 270
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 272
            echo "\t\t\t\t</div>

\t\t\t\t<!-- STAT BLOCK -->
\t\t\t\t";
            // line 275
            if (((isset($context["ST_modern_item_stats"]) ? $context["ST_modern_item_stats"] : null) === "0")) {
                // line 276
                echo "\t\t\t\t<div class=\"item-col-stats\">
\t\t\t\t\t<span class=\"item-stat item-stat--posts\">
\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                // line 278
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo "</span></span>
\t\t\t\t\t\t<span class=\"item-stat__label\">";
                // line 279
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"item-stat item-stat--views\">
\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                // line 282
                echo $this->getAttribute($context["topicrow"], "VIEWS", array());
                echo "</span></span>
\t\t\t\t\t\t<span class=\"item-stat__label\">";
                // line 283
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 287
                echo "\t\t\t\t<div class=\"item-col-stats\">
\t\t\t\t\t<span class=\"item-stat--v2 item-stat--views\">
\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                // line 289
                echo $this->getAttribute($context["topicrow"], "VIEWS", array());
                echo "</span></span>
\t\t\t\t\t\t<span class=\"item-stat__label\">";
                // line 290
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"item-stat--v2 item-stat--posts has-tooltip\" data-placement=\"left\" title=\"";
                // line 292
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "\">
\t\t\t\t\t\t<span class=\"item-stat__label\"><i class=\"fi fi-comment-multiple-outline\"></i></span>
\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                // line 294
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo "</span></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 298
            echo "
\t\t\t\t<!-- LASTPOST BLOCK -->
\t\t\t\t<div class=\"item-col-lastpost";
            // line 300
            if ($this->getAttribute($context["topicrow"], "AVATAR_IMG", array())) {
                echo " has-avatar";
            }
            echo "\">
\t\t\t\t\t<span class=\"hidden\">";
            // line 301
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</span> ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t<br />
\t\t\t\t\t<a href=\"";
            // line 303
            echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
            echo "\" class=\"item-lastpost__time\"><span class=\"timestamp\">";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "</span></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>

\t";
            // line 308
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 309
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 313
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 315
            echo "\t";
            if ((isset($context["S_IS_POSTABLE"]) ? $context["S_IS_POSTABLE"] : null)) {
                // line 316
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 318
                echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "
";
        // line 324
        if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) &&  !(isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null))) {
            // line 325
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_FORUM_ACTION"]) ? $context["S_FORUM_ACTION"] : null);
            echo "\">
\t\t<fieldset class=\"display-options\">
\t";
            // line 327
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 328
                echo "\t\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_TOPICS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label>
\t\t\t<label>";
                // line 329
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label>
\t\t\t<label>";
                // line 330
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t\t<button type=\"submit\" title=\"";
                // line 331
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"btn btn-link\"><i class=\"fi fi-arrow-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\"></i></button>
\t";
            }
            // line 333
            echo "\t\t</fieldset>
\t</form>
";
        }
        // line 336
        echo "
";
        // line 337
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) &&  !(isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null))) {
            // line 338
            echo "\t<div class=\"action-bar bottom\">
\t\t";
            // line 339
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 340
                echo "\t\t\t<div class=\"buttons\">
\t\t\t\t";
                // line 341
                // line 342
                echo "
\t\t\t\t";
                // line 343
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    // line 344
                    echo "\t\t\t\t<a href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" class=\"btn btn-danger btn-createnew locked\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                    echo "\">
\t\t\t\t\t<i class=\"fi fi-lock\"></i> ";
                    // line 345
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_FORUM_LOCKED");
                    echo "
\t\t\t\t</a>
\t\t\t\t";
                } else {
                    // line 348
                    echo "\t\t\t\t<a href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" class=\"btn btn-success btn-createnew\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                    echo "\">
\t\t\t\t\t<i class=\"fi fi-plus\"></i> ";
                    // line 349
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_NEW_TOPIC");
                    echo "
\t\t\t\t</a>
\t\t\t\t";
                }
                // line 352
                echo "
\t\t\t\t";
                // line 353
                // line 354
                echo "\t\t\t</div>
\t\t";
            }
            // line 356
            echo "
\t\t<div class=\"right-side\">
\t\t\t";
            // line 358
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                echo "<a href=\"";
                echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                echo "\" class=\"btn mark-read btn-default\" data-ajax=\"mark_topics_read\"><i class=\"fi fi-check-all\"></i>  ";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a> ";
            }
            // line 359
            echo "\t\t\t<!--";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "-->
\t\t\t";
            // line 360
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 361
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 361)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 362
                echo "\t\t\t";
            }
            // line 363
            echo "\t\t</div>
\t</div>
";
        }
        // line 366
        echo "
";
        // line 367
        if (( !(isset($context["ST_sidebar__forum"]) ? $context["ST_sidebar__forum"] : null) && ((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) && (isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)))) {
            // line 368
            echo "<div class=\"row\">
\t
\t";
            // line 370
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 371
                echo "\t<div class=\"col-md-6\">
\t<div class=\"hoverbox online-list\">
\t\t<h3 class=\"block-header\"><i class=\"fi fi-earth\"></i> ";
                // line 373
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                }
                echo "</h3>
\t\t<div class=\"block-content\">";
                // line 374
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "</div>
\t</div>
\t</div>
\t";
            }
            // line 378
            echo "\t
\t";
            // line 379
            if ((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null)) {
                // line 380
                echo "\t<div class=\"col-md-6\">
\t<div class=\"hoverbox forum-permissions\">
\t\t<h3 class=\"block-header\">";
                // line 382
                echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
                echo "</h3>
\t\t<div class=\"block-content\">
\t\t\t";
                // line 384
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo "<div class=\"forum-permissions__rule\">";
                    echo $this->getAttribute($context["rules"], "RULE", array());
                    echo "</div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 385
                echo "\t\t</div>
\t</div>
\t</div>
\t";
            }
            // line 389
            echo "\t
</div>

";
        } else {
            // line 393
            echo "
";
            // line 394
            if (( !(isset($context["ST_sidebar__forum"]) ? $context["ST_sidebar__forum"] : null) && (isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null))) {
                // line 395
                echo "<div class=\"hoverbox online-list\">
\t<h3 class=\"block-header\"><i class=\"fi fi-earth\"></i> ";
                // line 396
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                }
                echo "</h3>
\t<div class=\"block-content\">";
                // line 397
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "</div>
</div>
";
            }
            // line 400
            echo "
";
            // line 401
            if (( !(isset($context["ST_sidebar__forum"]) ? $context["ST_sidebar__forum"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 402
                echo "<div class=\"hoverbox forum-permissions\">
\t<h3 class=\"block-header\">";
                // line 403
                echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
                echo "</h3>
\t<div class=\"block-content\">";
                // line 404
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo $this->getAttribute($context["rules"], "RULE", array());
                    echo "<br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
</div>
";
            }
            // line 407
            echo "\t
";
        }
        // line 409
        echo "</div>
";
        // line 410
        if ((isset($context["ST_sidebar__forum"]) ? $context["ST_sidebar__forum"] : null)) {
            // line 411
            echo "<div class=\"col-sidebar\">
";
            // line 412
            // line 413
            $location = "custom/sidebar_blocks.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom/sidebar_blocks.html", "viewforum_body.html", 413)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 414
            // line 415
            echo "</div>
";
        }
        // line 417
        echo "</div>

";
        // line 419
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 419)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1258 => 419,  1254 => 417,  1250 => 415,  1249 => 414,  1237 => 413,  1236 => 412,  1233 => 411,  1231 => 410,  1228 => 409,  1224 => 407,  1210 => 404,  1206 => 403,  1203 => 402,  1201 => 401,  1198 => 400,  1192 => 397,  1180 => 396,  1177 => 395,  1175 => 394,  1172 => 393,  1166 => 389,  1160 => 385,  1149 => 384,  1144 => 382,  1140 => 380,  1138 => 379,  1135 => 378,  1128 => 374,  1116 => 373,  1112 => 371,  1110 => 370,  1106 => 368,  1104 => 367,  1101 => 366,  1096 => 363,  1093 => 362,  1080 => 361,  1078 => 360,  1073 => 359,  1065 => 358,  1061 => 356,  1057 => 354,  1056 => 353,  1053 => 352,  1047 => 349,  1040 => 348,  1034 => 345,  1027 => 344,  1025 => 343,  1022 => 342,  1021 => 341,  1018 => 340,  1016 => 339,  1013 => 338,  1011 => 337,  1008 => 336,  1003 => 333,  996 => 331,  992 => 330,  986 => 329,  978 => 328,  976 => 327,  970 => 325,  968 => 324,  965 => 323,  954 => 318,  950 => 316,  947 => 315,  941 => 313,  935 => 309,  933 => 308,  923 => 303,  916 => 301,  910 => 300,  906 => 298,  899 => 294,  892 => 292,  887 => 290,  883 => 289,  879 => 287,  872 => 283,  868 => 282,  862 => 279,  858 => 278,  854 => 276,  852 => 275,  847 => 272,  843 => 270,  837 => 269,  827 => 267,  825 => 266,  819 => 265,  812 => 264,  809 => 263,  805 => 262,  802 => 261,  800 => 260,  793 => 255,  786 => 251,  782 => 250,  776 => 247,  772 => 246,  763 => 242,  758 => 241,  754 => 240,  750 => 239,  743 => 235,  737 => 234,  734 => 233,  732 => 232,  728 => 230,  727 => 229,  724 => 228,  717 => 227,  711 => 226,  708 => 225,  698 => 224,  687 => 223,  682 => 220,  674 => 218,  671 => 217,  663 => 215,  660 => 214,  652 => 212,  650 => 211,  643 => 209,  640 => 208,  633 => 207,  624 => 206,  621 => 205,  620 => 204,  615 => 201,  607 => 200,  598 => 198,  586 => 195,  583 => 194,  576 => 190,  571 => 188,  566 => 185,  564 => 184,  560 => 182,  554 => 180,  552 => 179,  537 => 177,  528 => 174,  526 => 173,  523 => 172,  517 => 168,  515 => 167,  512 => 166,  507 => 165,  504 => 164,  500 => 162,  487 => 152,  482 => 150,  474 => 146,  468 => 145,  462 => 143,  456 => 140,  451 => 139,  434 => 135,  425 => 129,  422 => 128,  420 => 127,  414 => 124,  410 => 122,  408 => 121,  405 => 120,  399 => 116,  396 => 115,  383 => 114,  381 => 113,  376 => 112,  368 => 111,  364 => 109,  357 => 105,  349 => 102,  339 => 101,  334 => 99,  329 => 97,  326 => 96,  324 => 95,  321 => 94,  317 => 92,  316 => 91,  313 => 90,  307 => 87,  300 => 86,  294 => 83,  287 => 82,  285 => 81,  282 => 80,  281 => 79,  278 => 78,  276 => 77,  272 => 75,  270 => 74,  266 => 72,  252 => 70,  250 => 69,  247 => 68,  241 => 64,  236 => 62,  231 => 61,  223 => 59,  221 => 58,  212 => 55,  210 => 54,  207 => 53,  201 => 50,  193 => 49,  190 => 48,  188 => 47,  183 => 44,  178 => 41,  171 => 39,  166 => 38,  146 => 35,  137 => 34,  134 => 33,  126 => 31,  124 => 30,  119 => 27,  117 => 26,  114 => 25,  94 => 22,  85 => 21,  82 => 20,  74 => 18,  72 => 17,  67 => 14,  60 => 13,  59 => 12,  50 => 11,  48 => 10,  42 => 8,  40 => 7,  34 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- DEFINE $ST_SECTION = 'forum' -->*/
/* <!-- INCLUDE overall_header.html -->*/
/* <div class="big-grid">*/
/* <div class="col-maincontent">*/
/* <div class="page-header">*/
/* 	<div class="page-header-inner">*/
/* 		<!-- IF FORUM_IMAGE -->*/
/* 						<span class="forum-image">{FORUM_IMAGE}</span>*/
/* 					<!-- ENDIF -->*/
/* 		<!-- EVENT viewforum_forum_title_before -->*/
/* 		<h2 class="forum-title"><!-- EVENT viewforum_forum_name_prepend --><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a><!-- EVENT viewforum_forum_name_append --></h2>*/
/* 			<!-- EVENT viewforum_forum_title_after -->*/
/* 		<!-- IF FORUM_DESC --><p class="forum-description">{FORUM_DESC}</p><!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	<div class="action-bar">*/
/* 		<!-- IF S_HAS_SUBFORUM and not S_IS_BOT and U_MARK_FORUMS -->*/
/* 		<a href="{U_MARK_FORUMS}" class="btn btn-default mark-read" data-ajax="mark_forums_read"><i class="fi fi-check"></i> {L_MARK_SUBFORUMS_READ}</a>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT -->*/
/* 			<span class="icon-<!-- IF not S_WATCHING_FORUM -->subscribe<!-- ELSE -->unsubscribe<!-- ENDIF -->">*/
/* 			<a href="{U_WATCH_FORUM_LINK}" class="btn btn-default" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-class="icon-<!-- IF S_WATCHING_FORUM -->subscribe<!-- ELSE -->unsubscribe<!-- ENDIF -->" data-toggle-text="{S_WATCH_FORUM_TOGGLE}" data-toggle-url="{U_WATCH_FORUM_TOGGLE}">{S_WATCH_FORUM_TITLE}</a>*/
/* 			</span>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF not S_IS_BOT and (S_HAS_SUBFORUM and U_MARK_FORUMS) or (U_MARK_TOPICS and .topicrow) or U_WATCH_FORUM_LINK -->*/
/* 		<span class="dd-container dropdown--options">*/
/* 		<i class="fi fi-dots-vertical" data-toggle="dropdown"></i>*/
/* 		<ul class="dropdown-menu" role="menu">*/
/* 			<!-- IF S_HAS_SUBFORUM and not S_IS_BOT and U_MARK_FORUMS -->*/
/* 			<li><a href="{U_MARK_FORUMS}" data-ajax="mark_forums_read"><i class="fi fi-check"></i> {L_MARK_SUBFORUMS_READ}</a></li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT -->*/
/* 				<li class="icon-<!-- IF not S_WATCHING_FORUM -->subscribe<!-- ELSE -->unsubscribe<!-- ENDIF -->">*/
/* 				<a href="{U_WATCH_FORUM_LINK}" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-class="icon-<!-- IF S_WATCHING_FORUM -->subscribe<!-- ELSE -->unsubscribe<!-- ENDIF -->" data-toggle-text="{S_WATCH_FORUM_TOGGLE}" data-toggle-url="{U_WATCH_FORUM_TOGGLE}">{S_WATCH_FORUM_TITLE}</a>*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow --><li>*/
/* 			<a href="{U_MARK_TOPICS}" accesskey="m" data-ajax="mark_topics_read"><i class="fi fi-check-all"></i> {L_MARK_TOPICS_READ}</a>*/
/* 			</li><!-- ENDIF -->*/
/* 		</ul>*/
/* 		</span>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF MODERATORS -->*/
/* <div class="forum-moderators--block">*/
/* 	<strong class="forum-moderators__label"><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF --></strong>*/
/* 	<span class="forum-moderators__list">{MODERATORS}</span>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_FORUM_RULES -->*/
/* 	<div class="rules<!-- IF U_FORUM_RULES --> rules-link<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* */
/* 		<!-- IF U_FORUM_RULES -->*/
/* 			<a href="{U_FORUM_RULES}">{L_FORUM_RULES}</a>*/
/* 		<!-- ELSE -->*/
/* 			<strong>{L_FORUM_RULES}</strong><br />*/
/* 			{FORUM_RULES}*/
/* 		<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_HAS_SUBFORUM -->*/
/* 	<!-- INCLUDE forumlist_body.html -->*/
/* <!-- ENDIF -->*/
/* */
/* */
/* <!-- IF S_DISPLAY_POST_INFO or .pagination or TOTAL_POSTS or TOTAL_TOPICS -->*/
/* 	<div class="action-bar top">*/
/* */
/* 	<!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/* 		<div class="buttons">*/
/* 			<!-- EVENT viewforum_buttons_top_before -->*/
/* */
/* 			<!-- IF S_IS_LOCKED -->*/
/* 			<a href="{U_POST_NEW_TOPIC}" class="btn btn-danger btn-createnew locked" title="{L_FORUM_LOCKED}">*/
/* 				<i class="fi fi-lock"></i> {L_BUTTON_FORUM_LOCKED}*/
/* 			</a>*/
/* 			<!-- ELSE -->*/
/* 			<a href="{U_POST_NEW_TOPIC}" class="btn btn-success btn-createnew" title="{L_POST_TOPIC}">*/
/* 				<i class="fi fi-plus"></i> {L_BUTTON_NEW_TOPIC}*/
/* 			</a>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- EVENT viewforum_buttons_top_after -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 		<div class="search-box" role="search">*/
/* 			<form method="get" id="forum-search" action="{S_SEARCHBOX_ACTION}">*/
/* 			<div class="input-group">*/
/* 				<input class="search form-control" type="search" name="keywords" id="search_keywords" size="20" placeholder="{L_SEARCH_FORUM}" />*/
/* 				<span class="input-group-btn">*/
/* 				<button class="btn btn-default" type="submit" title="{L_SEARCH}"><i class="fi <!-- IF S_CONTENT_FLOW_END == 'right' -->fi-arrow-right<!-- ELSE -->fi-magnify<!-- ENDIF -->"></i></button>*/
/* 				<a href="{U_SEARCH}" class="btn btn-default" title="{L_SEARCH_ADV}"><i class="fi fi-settings"></i></a>*/
/* 				</span>*/
/* 			</div>*/
/* 			{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 			</form>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<div class="right-side">*/
/* 		<!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow --><a href="{U_MARK_TOPICS}" class="btn mark btn-default mark-read" accesskey="m" data-ajax="mark_topics_read"><i class="fi fi-check-all"></i> {L_MARK_TOPICS_READ}</a> <!-- ENDIF -->*/
/* 		<!--{TOTAL_TOPICS}-->*/
/* 		<!-- IF .pagination -->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_NO_READ_ACCESS -->*/
/* */
/* 	<div class="panel">*/
/* 		<strong>{L_NO_READ_ACCESS}</strong>*/
/* 	</div>*/
/* */
/* 	<!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* */
/* 		<form action="{S_LOGIN_ACTION}" method="post">*/
/* */
/* 		<div class="panel">*/
/* 			<div class="inner">*/
/* */
/* 			<div class="content">*/
/* 				<h3><a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a><!-- IF S_REGISTER_ENABLED -->&nbsp; &bull; &nbsp;<a href="{U_REGISTER}">{L_REGISTER}</a><!-- ENDIF --></h3>*/
/* */
/* 				<fieldset class="fields1">*/
/* 				<dl>*/
/* 					<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 					<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="{USERNAME}" class="form-control inputbox autowidth" /></dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt><label for="password">{L_PASSWORD}{L_COLON}</label></dt>*/
/* 					<dd><input type="password" tabindex="2" id="password" name="password" size="25" class="inputbox autowidth" /></dd>*/
/* 					<!-- IF S_AUTOLOGIN_ENABLED --><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="3" /> {L_LOG_ME_IN}</label></dd><!-- ENDIF -->*/
/* 					<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="4" /> {L_HIDE_ME}</label></dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt>&nbsp;</dt>*/
/* 					<dd><input type="submit" name="login" tabindex="5" value="{L_LOGIN}" class="button1" /></dd>*/
/* 				</dl>*/
/* 				{S_LOGIN_REDIRECT}*/
/* 				</fieldset>*/
/* 			</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 		</form>*/
/* */
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- BEGIN topicrow -->*/
/* */
/* 	<!-- IF not topicrow.S_TOPIC_TYPE_SWITCH and not topicrow.S_FIRST_ROW -->*/
/* 		</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF topicrow.S_FIRST_ROW or not topicrow.S_TOPIC_TYPE_SWITCH -->*/
/* 		<div class="forumbg<!-- IF topicrow.S_TOPIC_TYPE_SWITCH and (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) --> announcements<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* 		<div class="section-header">*/
/* 			<span<!-- IF S_DISPLAY_ACTIVE --> id="active_topics"<!-- ENDIF -->><!-- IF S_DISPLAY_ACTIVE -->{L_ACTIVE_TOPICS}<!-- ELSEIF topicrow.S_TOPIC_TYPE_SWITCH and (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) -->{L_ANNOUNCEMENTS}<!-- ELSE -->{L_TOPICS}<!-- ENDIF --></span>*/
/* */
/* 			<!-- IF not (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) -->*/
/* 			<span class="topic-count">{TOTAL_TOPICS}</span>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<ul class="itemlist itemlist--topics itemlist--topics--full itemlist--has-colbar">*/
/* 		<!-- IF 0 -->*/
/* 		<li class="itemlist__item itemlist__item--colbar">*/
/* 			<div class="item-inner">*/
/* 				<div class="item-col-icon"></div>*/
/* 				<div class="item-col-main">{L_TOPIC}</div>*/
/* 				<div class="item-col-stats item-col-stats--two"></div>*/
/* 				<div class="item-col-lastpost">{L_LAST_POST}</div>*/
/* 			</div>*/
/* 		</li>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 		<li data-topic-id="{topicrow.TOPIC_ID}" class="itemlist__item {topicrow.TOPIC_IMG_STYLE}<!-- IF topicrow.S_TOPIC_REPORTED --> reported<!-- ENDIF -->">*/
/* 			<div class="item-inner">*/
/* */
/* 				<div class="item-col-icon"<!-- IF topicrow.S_TOPIC_MOVED --> title="{L_TOPIC_MOVED}"<!-- ENDIF -->>*/
/* 					<i class="fi item-icon"></i>*/
/* 					<!-- IF topicrow.S_UNREAD_TOPIC and not S_IS_BOT --><a href="{topicrow.U_NEWEST_POST}" title="{L_VIEW_NEWEST_POST}" class="icon-link"></a><!-- ENDIF -->*/
/* 				</div>*/
/* */
/* 				<div class="item-col-main">*/
/* 					<!-- EVENT topiclist_row_prepend -->*/
/* */
/* 					<!-- IF topicrow.TOPIC_ICON_IMG and S_TOPIC_ICONS --><img class="topic-icon-img" src="{T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}" alt="{topicrow.TOPIC_FOLDER_IMG_ALT}"><!-- ENDIF -->*/
/* 					<!-- IF topicrow.S_TOPIC_LOCKED --><span class="item-ti item-ti--locked has-tooltip" title="{L_TOPIC_LOCKED_SHORT}"><i class="fi fi-lock"></i></span><!-- ENDIF -->*/
/* */
/* 					<a href="{topicrow.U_VIEW_TOPIC}" class="item-title">{topicrow.TOPIC_TITLE}</a>*/
/* */
/* 					<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED -->*/
/* 						<a href="{topicrow.U_MCP_QUEUE}" class="item-ti item-ti--unapproved has-tooltip" title="{L_POSTS_UNAPPROVED_FORUM}"><i class="fi fi-flag"></i></a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF topicrow.S_TOPIC_DELETED -->*/
/* 						<a href="{topicrow.U_MCP_QUEUE}" class="item-ti item-ti--deleted has-tooltip" title="{L_TOPIC_DELETED}"><i class="fi fi-recycle"></i></a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF topicrow.S_TOPIC_REPORTED -->*/
/* 						<a href="{topicrow.U_MCP_REPORT}" class="item-ti item-ti--reported has-tooltip" title="{L_TOPIC_REPORTED}"><i class="fi fi-alert"></i></a>*/
/* 					<!-- ENDIF -->*/
/* */
/* */
/* 					<div class="item-info">*/
/* 						{L_POSTED} {L_POST_BY_AUTHOR} {topicrow.TOPIC_AUTHOR_FULL}{L_COMMA_SEPARATOR} <span class="topic-info-time"><span class="timestamp">{topicrow.FIRST_POST_TIME}</span></span>*/
/* 						<!-- IF topicrow.S_POST_GLOBAL and FORUM_ID != topicrow.FORUM_ID --> &raquo; {L_IN} <a class="globaltopic-parentforum" href="{topicrow.U_VIEW_FORUM}">{topicrow.FORUM_NAME}</a><!-- ENDIF -->*/
/* */
/* 						<!-- IF topicrow.S_HAS_POLL --><span class="item-info__icon has-tooltip" title="{L_TOPIC_POLL}"><i class="fi fi-poll"></i></span><!-- ENDIF -->*/
/* 						<!-- IF topicrow.ATTACH_ICON_IMG --><span class="item-info__icon has-tooltip" title="{L_ATTACHMENTS}"><i class="fi fi-attachment"></i></span><!-- ENDIF -->*/
/* */
/* 						<!-- EVENT topiclist_row_append -->*/
/* 					</div>*/
/* */
/* 					<!-- IF not S_IS_BOT -->*/
/* 						<div class="item-lastpost--inline">*/
/* 							<span class="reply-counter<!-- IF topicrow.REPLIES == 0 --> reply-counter--zero<!-- ENDIF -->">*/
/* 								<span class="formatted-numcounter">{topicrow.REPLIES}</span>*/
/* 								<i class="fi fi-message-text-outline"></i>*/
/* 							</span>*/
/* */
/* 							{L_LAST_POST}*/
/* 							{L_POST_BY_AUTHOR}*/
/* 							{topicrow.LAST_POST_AUTHOR_FULL}{L_COMMA_SEPARATOR}*/
/* 							<a href="{topicrow.U_LAST_POST}" class="topic-lastpost-time"><span class="timestamp">{topicrow.LAST_POST_TIME}</span></a>*/
/* 						</div>*/
/* 						<div class="item-stats--inline">*/
/* 							<span class="item-stat item-stat--posts">*/
/* 								<span class="topic-posts-count"><span class="formatted-numcounter">{topicrow.REPLIES}</span></span>*/
/* 								<span class="topic-posts-label">{L_REPLIES}</span>*/
/* 							</span>*/
/* 							<span class="item-stat item-stat--views">*/
/* 								<span class="item-stat__count"><span class="formatted-numcounter">{topicrow.VIEWS}</span></span>*/
/* 								<span class="item-stat__label">{L_VIEWS}</span>*/
/* 							</span>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* */
/* 				</div>*/
/* */
/* 				<!-- PAGINATION BLOCK -->*/
/* 				<div class="item-col-pagination">*/
/* 					<!-- IF .topicrow.pagination -->*/
/* 						<ul class="pagination pagination-xs">*/
/* 							<!-- BEGIN pagination -->*/
/* 								<!-- IF topicrow.pagination.S_IS_PREV -->*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_CURRENT --><li class="active"><span>{topicrow.pagination.PAGE_NUMBER}</span></li>*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_NEXT -->*/
/* 								<!-- ELSE --><li><a href="{topicrow.pagination.PAGE_URL}">{topicrow.pagination.PAGE_NUMBER}</a></li>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- END pagination -->*/
/* 						</ul>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* */
/* 				<!-- STAT BLOCK -->*/
/* 				<!-- IF ST_modern_item_stats === '0' -->*/
/* 				<div class="item-col-stats">*/
/* 					<span class="item-stat item-stat--posts">*/
/* 						<span class="item-stat__count"><span class="formatted-numcounter">{topicrow.REPLIES}</span></span>*/
/* 						<span class="item-stat__label">{L_REPLIES}</span>*/
/* 					</span>*/
/* 					<span class="item-stat item-stat--views">*/
/* 						<span class="item-stat__count"><span class="formatted-numcounter">{topicrow.VIEWS}</span></span>*/
/* 						<span class="item-stat__label">{L_VIEWS}</span>*/
/* 					</span>*/
/* 				</div>*/
/* 				<!-- ELSE -->*/
/* 				<div class="item-col-stats">*/
/* 					<span class="item-stat--v2 item-stat--views">*/
/* 						<span class="item-stat__count"><span class="formatted-numcounter">{topicrow.VIEWS}</span></span>*/
/* 						<span class="item-stat__label">{L_VIEWS}</span>*/
/* 					</span>*/
/* 					<span class="item-stat--v2 item-stat--posts has-tooltip" data-placement="left" title="{topicrow.REPLIES} {L_REPLIES}">*/
/* 						<span class="item-stat__label"><i class="fi fi-comment-multiple-outline"></i></span>*/
/* 						<span class="item-stat__count"><span class="formatted-numcounter">{topicrow.REPLIES}</span></span>*/
/* 					</span>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<!-- LASTPOST BLOCK -->*/
/* 				<div class="item-col-lastpost<!-- IF topicrow.AVATAR_IMG --> has-avatar<!-- ENDIF -->">*/
/* 					<span class="hidden">{L_LAST_POST}</span> {topicrow.LAST_POST_AUTHOR_FULL}*/
/* 					<br />*/
/* 					<a href="{topicrow.U_LAST_POST}" class="item-lastpost__time"><span class="timestamp">{topicrow.LAST_POST_TIME}</span></a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</li>*/
/* */
/* 	<!-- IF topicrow.S_LAST_ROW -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* 	<!-- IF S_IS_POSTABLE -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<strong>{L_NO_TOPICS}</strong>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* <!-- END topicrow -->*/
/* */
/* <!-- IF S_SELECT_SORT_DAYS and not S_DISPLAY_ACTIVE -->*/
/* 	<form method="post" action="{S_FORUM_ACTION}">*/
/* 		<fieldset class="display-options">*/
/* 	<!-- IF not S_IS_BOT -->*/
/* 			<label>{L_DISPLAY_TOPICS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 			<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label>*/
/* 			<label>{S_SELECT_SORT_DIR}</label>*/
/* 			<button type="submit" title="{L_GO}" class="btn btn-link"><i class="fi fi-arrow-{S_CONTENT_FLOW_END}"></i></button>*/
/* 	<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF .topicrow and not S_DISPLAY_ACTIVE -->*/
/* 	<div class="action-bar bottom">*/
/* 		<!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/* 			<div class="buttons">*/
/* 				<!-- EVENT viewforum_buttons_bottom_before -->*/
/* */
/* 				<!-- IF S_IS_LOCKED -->*/
/* 				<a href="{U_POST_NEW_TOPIC}" class="btn btn-danger btn-createnew locked" title="{L_FORUM_LOCKED}">*/
/* 					<i class="fi fi-lock"></i> {L_BUTTON_FORUM_LOCKED}*/
/* 				</a>*/
/* 				<!-- ELSE -->*/
/* 				<a href="{U_POST_NEW_TOPIC}" class="btn btn-success btn-createnew" title="{L_POST_TOPIC}">*/
/* 					<i class="fi fi-plus"></i> {L_BUTTON_NEW_TOPIC}*/
/* 				</a>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<!-- EVENT viewforum_buttons_bottom_after -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<div class="right-side">*/
/* 			<!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow --><a href="{U_MARK_TOPICS}" class="btn mark-read btn-default" data-ajax="mark_topics_read"><i class="fi fi-check-all"></i>  {L_MARK_TOPICS_READ}</a> <!-- ENDIF -->*/
/* 			<!--{TOTAL_TOPICS}-->*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF not ST_sidebar__forum && (S_DISPLAY_POST_INFO and S_DISPLAY_ONLINE_LIST) -->*/
/* <div class="row">*/
/* 	*/
/* 	<!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 	<div class="col-md-6">*/
/* 	<div class="hoverbox online-list">*/
/* 		<h3 class="block-header"><i class="fi fi-earth"></i> <!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a><!-- ELSE -->{L_WHO_IS_ONLINE}<!-- ENDIF --></h3>*/
/* 		<div class="block-content">{LOGGED_IN_USER_LIST}</div>*/
/* 	</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	<!-- IF S_DISPLAY_POST_INFO -->*/
/* 	<div class="col-md-6">*/
/* 	<div class="hoverbox forum-permissions">*/
/* 		<h3 class="block-header">{L_FORUM_PERMISSIONS}</h3>*/
/* 		<div class="block-content">*/
/* 			<!-- BEGIN rules --><div class="forum-permissions__rule">{rules.RULE}</div><!-- END rules -->*/
/* 		</div>*/
/* 	</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* </div>*/
/* */
/* <!-- ELSE -->*/
/* */
/* <!-- IF not ST_sidebar__forum && S_DISPLAY_ONLINE_LIST -->*/
/* <div class="hoverbox online-list">*/
/* 	<h3 class="block-header"><i class="fi fi-earth"></i> <!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a><!-- ELSE -->{L_WHO_IS_ONLINE}<!-- ENDIF --></h3>*/
/* 	<div class="block-content">{LOGGED_IN_USER_LIST}</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF not ST_sidebar__forum && S_DISPLAY_POST_INFO -->*/
/* <div class="hoverbox forum-permissions">*/
/* 	<h3 class="block-header">{L_FORUM_PERMISSIONS}</h3>*/
/* 	<div class="block-content"><!-- BEGIN rules -->{rules.RULE}<br /><!-- END rules --></div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* 	*/
/* <!-- ENDIF -->*/
/* </div>*/
/* <!-- IF ST_sidebar__forum -->*/
/* <div class="col-sidebar">*/
/* <!-- EVENT st_sidebar_before -->*/
/* <!-- INCLUDE custom/sidebar_blocks.html -->*/
/* <!-- EVENT st_sidebar_after -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* </div>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
