<?php

/* viewtopic_body.html */
class __TwigTemplate_da2a8e6e8847c35ca1a88ed89e02c11d7e1d5aa9ea5a95364ca6d6821cb9d14f extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"big-grid\">
<div class=\"col-maincontent\">
<div class=\"page-header\">
\t<div class=\"page-header-inner\">
\t\t<h2 class=\"page-title\">";
        // line 6
        echo "<a href=\"";
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a>";
        echo "</h2>
\t</div>
\t<!--<div class=\"action-bar\">-->
\t
\t<!--</div>-->
</div>

";
        // line 13
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            // line 14
            echo "<p>
\t<strong>";
            // line 15
            if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
            echo "
</p>
";
        }
        // line 18
        echo "
";
        // line 19
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 20
            echo "\t<div class=\"rules";
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">
\t\t
\t\t";
            // line 23
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 24
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 26
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 27
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "
\t\t";
            }
            // line 29
            echo "\t\t
\t\t</div>
\t</div>
";
        }
        // line 33
        echo "
<div class=\"action-bar top\">

\t<div class=\"buttons\">
\t\t";
        // line 37
        // line 38
        echo "
\t\t";
        // line 39
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 40
            echo "\t\t\t";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 41
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" class=\"btn btn-danger btn-createnew\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
                echo "\">
\t\t\t\t<i class=\"fi fi-lock\"></i> ";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
                echo "
\t\t\t</a>
\t\t\t";
            } else {
                // line 45
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" class=\"btn btn-success btn-createnew\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
                echo "\">
\t\t\t\t<i class=\"fi fi-plus\"></i> ";
                // line 46
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
                echo "
\t\t\t</a>
\t\t\t";
            }
            // line 49
            echo "\t\t";
        }
        // line 50
        echo "\t\t
\t\t";
        // line 51
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 52
        echo "
\t\t";
        // line 53
        // line 54
        echo "\t</div>

\t
\t";
        // line 57
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 58
            echo "\t\t<div class=\"search-box\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 59
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input class=\"search form-control\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" title=\"";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\"><i class=\"fi fi-arrow-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo "\"></i></button>
\t\t\t\t<a href=\"";
            // line 64
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\"><i class=\"fi fi-settings\"></i></a>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t";
            // line 67
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 71
        echo "
\t";
        // line 72
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 73
            echo "\t\t<div class=\"right-side\">
\t\t\t";
            // line 74
            if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                echo "\" class=\"btn btn-default mark\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                echo " <i class=\"fi fi-arrow-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\"></i></a>";
            }
            // line 75
            echo "\t\t\t<!--";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo "-->
\t\t\t";
            // line 76
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 76)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 77
            echo "\t\t</div>
\t";
        }
        // line 79
        echo "\t";
        // line 80
        echo "</div>

";
        // line 82
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 83
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_POLL_ACTION"]) ? $context["S_POLL_ACTION"] : null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll ";
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                echo "result-hidden";
            }
            echo "\">
\t\t<div class=\"topic-poll\">
\t\t\t
\t\t\t<div class=\"poll-header\">
\t\t\t\t<h2 class=\"poll-title\">";
            // line 87
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h2>
\t\t\t\t<p class=\"poll-info\">
\t\t\t\t\t";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
            echo "
\t\t\t\t\t";
            // line 90
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 91
                echo "\t\t\t\t\t\t";
                if ((isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null)) {
                    echo "<br>";
                }
                // line 92
                echo "\t\t\t\t\t\t<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
                echo "</span>
\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t</p>
\t\t\t</div>
\t\t\t
\t\t\t<fieldset class=\"polls\">
\t\t\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 99
                echo "\t\t\t\t";
                // line 100
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo "voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t<dt>";
                // line 101
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                }
                echo "</dt>
\t\t\t\t\t";
                // line 102
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<dd class=\"poll_option_select\">";
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 103
                echo "\t\t\t\t\t
\t\t\t\t\t<dd class=\"resultbar\" ";
                // line 104
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " style=\"display: none\"";
                }
                echo ">
\t\t\t\t\t\t<!-- Progress bar -->
\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" style=\"width:";
                // line 107
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT_REL", array());
                echo "\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dd>
\t\t\t\t\t
\t\t\t\t\t<dd class=\"poll_option_percent\"";
                // line 111
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " style=\"display: none;\"";
                }
                echo ">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                    echo " (";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                    echo ")";
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 113
                // line 114
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t
\t\t\t\t<!-- Total vote counter -->
\t\t\t\t<dl class=\"poll_total_votes\"";
            // line 117
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><i class=\"fi fi-chart-bar\"></i> ";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo (isset($context["TOTAL_VOTES"]) ? $context["TOTAL_VOTES"] : null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t\t";
            // line 122
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 123
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">
\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"update\" value=\"";
                // line 126
                echo $this->env->getExtension('phpbb')->lang("SUBMIT_VOTE");
                echo "\" />
\t\t\t\t\t\t";
                // line 127
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo "<span class=\"poll_view_results\"><a class=\"btn btn-default\" href=\"";
                    echo (isset($context["U_VIEW_RESULTS"]) ? $context["U_VIEW_RESULTS"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_RESULTS");
                    echo "</a></span>";
                }
                // line 128
                echo "\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 131
            echo "
\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted\" style=\"display: none;\">";
            // line 133
            echo $this->env->getExtension('phpbb')->lang("VOTE_SUBMITTED");
            echo "</div>
\t
\t\t";
            // line 135
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t";
            // line 136
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t</div>

\t</form>
";
        }
        // line 141
        echo "<div class=\"postlist\">
";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 143
            echo "\t";
            // line 144
            echo "\t<div class=\"post has-profile";
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                echo " unapproved";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array()))) {
                echo " online";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            echo "\">
\t\t<a class=\"st-anchor\" id=\"p";
            // line 145
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">&nbsp;</a>
\t\t";
            // line 146
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                // line 147
                echo "\t\t\t<a id=\"unread\" class=\"st-anchor\"";
                if ((isset($context["S_UNREAD_VIEW"]) ? $context["S_UNREAD_VIEW"] : null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
\t\t";
            }
            // line 149
            echo "\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 151
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t
\t\t\t<dt class=\"avatar-container\">
\t\t\t\t";
            // line 154
            // line 155
            echo "\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 156
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</span>";
                }
                // line 157
                echo "\t\t\t\t";
            } else {
                // line 158
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NO_AVATAR", array());
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NO_AVATAR", array());
                    echo "</span>";
                }
                // line 159
                echo "\t\t\t\t";
            }
            // line 160
            echo "\t\t\t\t";
            // line 161
            echo "\t\t\t</dt>
\t\t\t
\t\t\t<dt class=\"profile-main ";
            // line 163
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo "\">
\t\t\t\t";
            // line 164
            // line 165
            echo "\t\t\t\t";
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo "<strong>";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                echo "</strong>";
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            echo "<span class=\"has-tooltip user-status-indicator\" title=\"";
            if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                echo $this->env->getExtension('phpbb')->lang("ONLINE");
            } else {
                echo $this->env->getExtension('phpbb')->lang("OFFLINE");
            }
            echo "\"></span>
\t\t\t\t";
            // line 166
            // line 167
            echo "\t\t\t\t
\t\t\t\t";
            // line 168
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "<div class=\"profile-rank\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                    echo "<br />";
                }
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</div>";
            }
            // line 169
            echo "\t\t\t</dt>

\t\t\t";
            // line 171
            if ((((isset($context["ST_topicAuthorLabel"]) ? $context["ST_topicAuthorLabel"] : null) != "0") && ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array()) && ($this->getAttribute($context["postrow"], "POST_AUTHOR", array()) == (isset($context["TOPIC_AUTHOR"]) ? $context["TOPIC_AUTHOR"] : null))))) {
                // line 172
                echo "\t\t\t\t<div class=\"topic-author-label\"><span class=\"label label-info\">";
                if ((isset($context["ST_topicAuthorLabel__text"]) ? $context["ST_topicAuthorLabel__text"] : null)) {
                    echo (isset($context["ST_topicAuthorLabel__text"]) ? $context["ST_topicAuthorLabel__text"] : null);
                } else {
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("AUTHOR");
                }
                echo "</span></div>
\t\t\t";
            }
            // line 174
            echo "
\t\t";
            // line 175
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
                    echo "\">";
                }
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 176
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <span class=\"timestamp\">";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</span></dd>";
            }
            // line 177
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                echo "</dd>";
            }
            // line 178
            echo "
\t\t";
            // line 179
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                // line 180
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 181
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                echo "</dd>
\t\t";
            }
            // line 183
            echo "
\t\t";
            // line 184
            // line 185
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 186
                echo "\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 187
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                    echo "\"><strong>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t";
                }
                // line 189
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t";
            // line 191
            echo "
\t\t";
            // line 192
            // line 193
            echo "\t\t";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                // line 194
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 195
                echo $this->env->getExtension('phpbb')->lang("CONTACT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"><span class=\"imageset icon_contact\" title=\"";
                // line 197
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", array());
                echo "\">";
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", array());
                echo "</span></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 201
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                    // line 203
                    echo "\t\t\t\t\t\t\t\t";
                    $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 204
                    echo "\t\t\t\t\t\t\t\t";
                    if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                        // line 205
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "\"";
                    if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_LAST_CELL", array())) {
                        echo " class=\"last-cell\"";
                    }
                    if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 208
                    echo $this->getAttribute($context["contact"], "ID", array());
                    echo "-icon\">";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 210
                    if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 213
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 219
            echo "\t\t";
            // line 220
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 224
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                // line 225
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                    // line 226
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 227
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 228
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute(                // line 230
$context["postrow"], "S_IGNORE_POST", array())) {
                    // line 231
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 232
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 233
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 236
                echo "\t\t\t";
            }
            // line 237
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t<h3 ";
            // line 239
            if ($this->getAttribute($context["postrow"], "S_FIRST_ROW", array())) {
                echo "class=\"first\"";
            }
            echo ">";
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3>

\t\t";
            // line 241
            // line 242
            echo "\t\t";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 243
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t\t";
                // line 244
                // line 245
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                    // line 246
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 247
                    echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                    echo "\" class=\"button has-tooltip icon-button edit-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_EDIT");
                    echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 250
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                    // line 251
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 252
                    echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo "\" class=\"button has-tooltip icon-button delete-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 255
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                    // line 256
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 257
                    echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                    echo "\" class=\"button has-tooltip icon-button report-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                    echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 260
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                    // line 261
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 262
                    echo $this->getAttribute($context["postrow"], "U_WARN", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "\" class=\"button has-tooltip icon-button warn-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 265
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                    // line 266
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 267
                    echo $this->getAttribute($context["postrow"], "U_INFO", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                    echo "\" class=\"button has-tooltip icon-button info-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                    echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 270
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                    // line 271
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 272
                    echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                    echo "\" class=\"button has-tooltip icon-button quote-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 275
                echo "\t\t\t\t";
                // line 276
                echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"icon_post_target\" href=\"#p";
                // line 277
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST");
                echo " #";
                echo $this->getAttribute($context["postrow"], "POST_NUMBER", array());
                echo "\">#";
                echo $this->getAttribute($context["postrow"], "POST_NUMBER", array());
                echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t";
            }
            // line 281
            echo "\t\t";
            // line 282
            echo "
\t\t\t";
            // line 283
            // line 284
            echo "\t\t\t<p class=\"author\"><span class=\"timestamp\">";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "</span></p>
\t\t\t";
            // line 285
            // line 286
            echo "
\t\t\t";
            // line 287
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 288
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\" value=\"";
                // line 290
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" name=\"action[approve]\"><i class=\"fi fi-check\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" value=\"";
                // line 291
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\"><i class=\"fi fi-close\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "</button>
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 292
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 293
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute(            // line 296
$context["postrow"], "S_POST_DELETED", array())) {
                // line 297
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 299
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 300
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 301
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 302
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 303
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 307
            echo "
\t\t\t";
            // line 308
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 309
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 310
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 313
            echo "
\t\t\t<div class=\"content\">";
            // line 314
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 316
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 317
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 319
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 321
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 322
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 324
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 326
            echo "
\t\t\t";
            // line 327
            // line 328
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 329
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "DELETE_REASON", array()))) {
                // line 330
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 331
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 332
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 333
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute(            // line 334
$context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array()))) {
                // line 335
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 336
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 337
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 338
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 340
            echo "
\t\t\t";
            // line 341
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array())) {
                echo "<div class=\"notice\"><br /><br />";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "</div>";
            }
            // line 342
            echo "\t\t\t";
            // line 343
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                echo "<div id=\"sig";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>";
            }
            // line 344
            echo "
\t\t\t";
            // line 345
            // line 346
            echo "\t\t\t</div>

\t\t</div>

\t\t<div class=\"back2top\"><a href=\"#top\" class=\"top\" title=\"";
            // line 350
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></div>

\t\t</div>
\t</div>
\t
\t";
            // line 355
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "</div>

";
        // line 359
        if ((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null)) {
            // line 360
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 360)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 362
        echo "
";
        // line 363
        if ((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())))) {
            // line 364
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo (isset($context["S_TOPIC_ACTION"]) ? $context["S_TOPIC_ACTION"] : null);
            echo "\">
\t<fieldset class=\"display-options\" style=\"margin-top: 0; \">
\t\t";
            // line 366
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 367
                echo "\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label>
\t\t<label>";
                // line 368
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label> <label>";
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t<button type=\"submit\" name=\"sort\" value=\"";
                // line 369
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"btn btn-link\"><i class=\"fi fi-arrow-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\"></i></button>
\t\t";
            }
            // line 371
            echo "\t</fieldset>
\t</form>
";
        }
        // line 374
        echo "
";
        // line 375
        // line 376
        echo "<div class=\"action-bar bottom\">
\t<div class=\"buttons\">
\t\t";
        // line 378
        // line 379
        echo "\t
\t\t";
        // line 380
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 381
            echo "\t\t\t";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 382
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" class=\"btn btn-danger btn-createnew\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
                echo "\">
\t\t\t\t<i class=\"fi fi-lock\"></i> ";
                // line 383
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
                echo "
\t\t\t</a>
\t\t\t";
            } else {
                // line 386
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" class=\"btn btn-success btn-createnew\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
                echo "\">
\t\t\t\t<i class=\"fi fi-plus\"></i> ";
                // line 387
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
                echo "
\t\t\t</a>
\t\t\t";
            }
            // line 390
            echo "\t\t";
        }
        // line 391
        echo "
\t\t";
        // line 392
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 392)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 393
        echo "
\t\t";
        // line 394
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()))) {
            // line 395
            echo "\t\t\t<div class=\"dropup\" id=\"quickmod\">
\t\t\t\t<span title=\"";
            // line 396
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "\" data-toggle=\"dropdown\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo " <i class=\"fi fi-menu-up\"></i></span>
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 399
                echo "\t\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 400
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", array());
                echo "\"";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", array());
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 402
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 405
        echo "\t\t
\t\t";
        // line 406
        // line 407
        echo "\t</div>

\t";
        // line 409
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 410
            echo "\t\t<div class=\"right-side\">
\t\t\t";
            // line 411
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 411)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 412
            echo "\t\t</div>
\t";
        }
        // line 414
        echo "</div>

";
        // line 416
        // line 417
        echo "
";
        // line 418
        if (( !(isset($context["ST_sidebar__topic"]) ? $context["ST_sidebar__topic"] : null) && (isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null))) {
            // line 419
            echo "<div class=\"hoverbox online-list\">
\t<h3 class=\"block-header\"><i class=\"fi fi-earth\"></i> ";
            // line 420
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
            // line 421
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "</div>
</div>
";
        }
        // line 424
        echo "</div>
";
        // line 425
        if ((isset($context["ST_sidebar__topic"]) ? $context["ST_sidebar__topic"] : null)) {
            // line 426
            echo "<div class=\"col-sidebar\">
";
            // line 427
            // line 428
            $location = "custom/sidebar_blocks.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom/sidebar_blocks.html", "viewtopic_body.html", 428)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 429
            // line 430
            echo "</div>
";
        }
        // line 432
        echo "</div>

";
        // line 434
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 434)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1487 => 434,  1483 => 432,  1479 => 430,  1478 => 429,  1466 => 428,  1465 => 427,  1462 => 426,  1460 => 425,  1457 => 424,  1451 => 421,  1439 => 420,  1436 => 419,  1434 => 418,  1431 => 417,  1430 => 416,  1426 => 414,  1422 => 412,  1410 => 411,  1407 => 410,  1405 => 409,  1401 => 407,  1400 => 406,  1397 => 405,  1392 => 402,  1377 => 400,  1373 => 399,  1369 => 398,  1362 => 396,  1359 => 395,  1357 => 394,  1354 => 393,  1342 => 392,  1339 => 391,  1336 => 390,  1330 => 387,  1323 => 386,  1317 => 383,  1310 => 382,  1307 => 381,  1305 => 380,  1302 => 379,  1301 => 378,  1297 => 376,  1296 => 375,  1293 => 374,  1288 => 371,  1281 => 369,  1273 => 368,  1265 => 367,  1263 => 366,  1257 => 364,  1255 => 363,  1252 => 362,  1238 => 360,  1236 => 359,  1232 => 357,  1227 => 355,  1217 => 350,  1211 => 346,  1210 => 345,  1207 => 344,  1198 => 343,  1196 => 342,  1190 => 341,  1187 => 340,  1183 => 338,  1174 => 337,  1170 => 336,  1167 => 335,  1165 => 334,  1162 => 333,  1153 => 332,  1149 => 331,  1146 => 330,  1143 => 329,  1136 => 328,  1135 => 327,  1132 => 326,  1128 => 324,  1119 => 322,  1115 => 321,  1110 => 319,  1106 => 317,  1104 => 316,  1099 => 314,  1096 => 313,  1088 => 310,  1085 => 309,  1083 => 308,  1080 => 307,  1073 => 303,  1069 => 302,  1065 => 301,  1061 => 300,  1057 => 299,  1051 => 297,  1049 => 296,  1043 => 293,  1039 => 292,  1033 => 291,  1027 => 290,  1021 => 288,  1019 => 287,  1016 => 286,  1015 => 285,  1010 => 284,  1009 => 283,  1006 => 282,  1004 => 281,  991 => 277,  988 => 276,  986 => 275,  976 => 272,  973 => 271,  970 => 270,  960 => 267,  957 => 266,  954 => 265,  944 => 262,  941 => 261,  938 => 260,  928 => 257,  925 => 256,  922 => 255,  912 => 252,  909 => 251,  906 => 250,  896 => 247,  893 => 246,  890 => 245,  889 => 244,  886 => 243,  883 => 242,  882 => 241,  860 => 239,  850 => 237,  847 => 236,  841 => 233,  837 => 232,  832 => 231,  830 => 230,  825 => 228,  821 => 227,  816 => 226,  813 => 225,  811 => 224,  805 => 220,  803 => 219,  796 => 214,  790 => 213,  786 => 211,  784 => 210,  777 => 208,  759 => 207,  755 => 205,  752 => 204,  748 => 203,  745 => 202,  741 => 201,  732 => 197,  726 => 195,  723 => 194,  720 => 193,  719 => 192,  716 => 191,  714 => 190,  708 => 189,  697 => 187,  694 => 186,  689 => 185,  688 => 184,  685 => 183,  677 => 181,  674 => 180,  672 => 179,  669 => 178,  659 => 177,  649 => 176,  632 => 175,  629 => 174,  617 => 172,  615 => 171,  611 => 169,  601 => 168,  598 => 167,  597 => 166,  580 => 165,  579 => 164,  571 => 163,  567 => 161,  565 => 160,  562 => 159,  549 => 158,  546 => 157,  533 => 156,  530 => 155,  529 => 154,  519 => 151,  515 => 149,  505 => 147,  503 => 146,  499 => 145,  477 => 144,  475 => 143,  471 => 142,  468 => 141,  460 => 136,  456 => 135,  451 => 133,  447 => 131,  442 => 128,  434 => 127,  430 => 126,  425 => 123,  423 => 122,  414 => 119,  407 => 117,  403 => 115,  397 => 114,  396 => 113,  380 => 111,  373 => 107,  365 => 104,  362 => 103,  336 => 102,  324 => 101,  306 => 100,  304 => 99,  300 => 98,  294 => 94,  288 => 92,  283 => 91,  281 => 90,  277 => 89,  272 => 87,  260 => 83,  258 => 82,  254 => 80,  252 => 79,  248 => 77,  236 => 76,  231 => 75,  221 => 74,  218 => 73,  216 => 72,  213 => 71,  206 => 67,  198 => 64,  192 => 63,  187 => 61,  182 => 59,  179 => 58,  177 => 57,  172 => 54,  171 => 53,  168 => 52,  156 => 51,  153 => 50,  150 => 49,  144 => 46,  137 => 45,  131 => 42,  124 => 41,  121 => 40,  119 => 39,  116 => 38,  115 => 37,  109 => 33,  103 => 29,  98 => 27,  93 => 26,  85 => 24,  83 => 23,  74 => 20,  72 => 19,  69 => 18,  56 => 15,  53 => 14,  51 => 13,  37 => 6,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <div class="big-grid">*/
/* <div class="col-maincontent">*/
/* <div class="page-header">*/
/* 	<div class="page-header-inner">*/
/* 		<h2 class="page-title"><!-- EVENT viewtopic_topic_title_prepend --><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><!-- EVENT viewtopic_topic_title_append --></h2>*/
/* 	</div>*/
/* 	<!--<div class="action-bar">-->*/
/* 	*/
/* 	<!--</div>-->*/
/* </div>*/
/* */
/* <!-- IF MODERATORS -->*/
/* <p>*/
/* 	<strong><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->{L_COLON}</strong> {MODERATORS}*/
/* </p>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_FORUM_RULES -->*/
/* 	<div class="rules<!-- IF U_FORUM_RULES --> rules-link<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* 		*/
/* 		<!-- IF U_FORUM_RULES -->*/
/* 			<a href="{U_FORUM_RULES}">{L_FORUM_RULES}</a>*/
/* 		<!-- ELSE -->*/
/* 			<strong>{L_FORUM_RULES}</strong><br />*/
/* 			{FORUM_RULES}*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <div class="action-bar top">*/
/* */
/* 	<div class="buttons">*/
/* 		<!-- EVENT viewtopic_buttons_top_before -->*/
/* */
/* 		<!-- IF not S_IS_BOT and S_DISPLAY_REPLY_INFO -->*/
/* 			<!-- IF S_IS_LOCKED -->*/
/* 			<a href="{U_POST_REPLY_TOPIC}" class="btn btn-danger btn-createnew" title="{L_TOPIC_LOCKED}">*/
/* 				<i class="fi fi-lock"></i> {L_BUTTON_TOPIC_LOCKED}*/
/* 			</a>*/
/* 			<!-- ELSE -->*/
/* 			<a href="{U_POST_REPLY_TOPIC}" class="btn btn-success btn-createnew" title="{L_POST_REPLY}">*/
/* 				<i class="fi fi-plus"></i> {L_BUTTON_POST_REPLY}*/
/* 			</a>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		<!-- INCLUDE viewtopic_topic_tools.html -->*/
/* */
/* 		<!-- EVENT viewtopic_buttons_top_after -->*/
/* 	</div>*/
/* */
/* 	*/
/* 	<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 		<div class="search-box">*/
/* 			<form method="get" id="topic-search" action="{S_SEARCHBOX_ACTION}">*/
/* 			<div class="input-group">*/
/* 				<input class="search form-control" type="search" name="keywords" id="search_keywords" size="20" placeholder="{L_SEARCH_TOPIC}" />*/
/* 				<span class="input-group-btn">*/
/* 				<button class="btn btn-default" type="submit" title="{L_SEARCH}"><i class="fi fi-arrow-{S_CONTENT_FLOW_END}"></i></button>*/
/* 				<a href="{U_SEARCH}" class="btn btn-default" title="{L_SEARCH_ADV}"><i class="fi fi-settings"></i></a>*/
/* 				</span>*/
/* 			</div>*/
/* 			{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 			</form>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF .pagination or TOTAL_POSTS -->*/
/* 		<div class="right-side">*/
/* 			<!-- IF U_VIEW_UNREAD_POST and not S_IS_BOT --><a href="{U_VIEW_UNREAD_POST}" class="btn btn-default mark">{L_VIEW_UNREAD_POST} <i class="fi fi-arrow-{S_CONTENT_FLOW_END}"></i></a><!-- ENDIF -->*/
/* 			<!--{TOTAL_POSTS}-->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT viewtopic_body_pagination_top_after -->*/
/* </div>*/
/* */
/* <!-- IF S_HAS_POLL -->*/
/* 	<form method="post" action="{S_POLL_ACTION}" data-ajax="vote_poll" class="topic_poll <!-- IF not S_DISPLAY_RESULTS -->result-hidden<!-- ENDIF -->">*/
/* 		<div class="topic-poll">*/
/* 			*/
/* 			<div class="poll-header">*/
/* 				<h2 class="poll-title"><!-- EVENT viewtopic_body_poll_question_prepend -->{POLL_QUESTION}<!-- EVENT viewtopic_body_poll_question_append --></h2>*/
/* 				<p class="poll-info">*/
/* 					{L_POLL_LENGTH}*/
/* 					<!-- IF S_CAN_VOTE -->*/
/* 						<!-- IF L_POLL_LENGTH --><br><!-- ENDIF -->*/
/* 						<span class="poll_max_votes">{L_MAX_VOTES}</span>*/
/* 					<!-- ENDIF -->*/
/* 				</p>*/
/* 			</div>*/
/* 			*/
/* 			<fieldset class="polls">*/
/* 				<!-- BEGIN poll_option -->*/
/* 				<!-- EVENT viewtopic_body_poll_option_before -->*/
/* 				<dl class="<!-- IF poll_option.POLL_OPTION_VOTED -->voted<!-- ENDIF --><!-- IF poll_option.POLL_OPTION_MOST_VOTES --> most-votes<!-- ENDIF -->"<!-- IF poll_option.POLL_OPTION_VOTED --> title="{L_POLL_VOTED_OPTION}"<!-- ENDIF --> data-poll-option-id="{poll_option.POLL_OPTION_ID}">*/
/* 					<dt><!-- IF S_CAN_VOTE --><label for="vote_{poll_option.POLL_OPTION_ID}">{poll_option.POLL_OPTION_CAPTION}</label><!-- ELSE -->{poll_option.POLL_OPTION_CAPTION}<!-- ENDIF --></dt>*/
/* 					<!-- IF S_CAN_VOTE --><dd class="poll_option_select"><!-- IF S_IS_MULTI_CHOICE --><input type="checkbox" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ELSE --><input type="radio" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ENDIF --></dd><!-- ENDIF -->*/
/* 					*/
/* 					<dd class="resultbar" <!-- IF not S_DISPLAY_RESULTS --> style="display: none"<!-- ENDIF -->>*/
/* 						<!-- Progress bar -->*/
/* 						<div class="progress">*/
/* 							<div class="progress-bar progress-bar-primary" role="progressbar" style="width:{poll_option.POLL_OPTION_PERCENT_REL}"></div>*/
/* 						</div>*/
/* 					</dd>*/
/* 					*/
/* 					<dd class="poll_option_percent"<!-- IF not S_DISPLAY_RESULTS --> style="display: none;"<!-- ENDIF -->><!-- IF poll_option.POLL_OPTION_RESULT == 0 -->{L_NO_VOTES}<!-- ELSE -->{poll_option.POLL_OPTION_RESULT} ({poll_option.POLL_OPTION_PERCENT})<!-- ENDIF --></dd>*/
/* 				</dl>*/
/* 				<!-- EVENT viewtopic_body_poll_option_after -->*/
/* 				<!-- END poll_option -->*/
/* 			*/
/* 				<!-- Total vote counter -->*/
/* 				<dl class="poll_total_votes"<!-- IF not S_DISPLAY_RESULTS --> style="display: none;"<!-- ENDIF -->>*/
/* 					<dt>&nbsp;</dt>*/
/* 					<dd class="resultbar"><i class="fi fi-chart-bar"></i> {L_TOTAL_VOTES}{L_COLON} <span class="poll_total_vote_cnt">{TOTAL_VOTES}</span></dd>*/
/* 				</dl>*/
/* */
/* 				<!-- IF S_CAN_VOTE -->*/
/* 				<dl style="border-top: none;" class="poll_vote">*/
/* 					<dt>&nbsp;</dt>*/
/* 					<dd class="resultbar">*/
/* 						<input class="btn btn-default" type="submit" name="update" value="{L_SUBMIT_VOTE}" />*/
/* 						<!-- IF not S_DISPLAY_RESULTS --><span class="poll_view_results"><a class="btn btn-default" href="{U_VIEW_RESULTS}">{L_VIEW_RESULTS}</a></span><!-- ENDIF -->*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<!-- ENDIF -->*/
/* */
/* 			</fieldset>*/
/* 			<div class="vote-submitted" style="display: none;">{L_VOTE_SUBMITTED}</div>*/
/* 	*/
/* 		{S_FORM_TOKEN}*/
/* 		{S_HIDDEN_FIELDS}*/
/* 		</div>*/
/* */
/* 	</form>*/
/* <!-- ENDIF -->*/
/* <div class="postlist">*/
/* <!-- BEGIN postrow -->*/
/* 	<!-- EVENT viewtopic_body_postrow_post_before -->*/
/* 	<div class="post has-profile<!-- IF postrow.S_POST_UNAPPROVED --> unapproved<!-- ENDIF --><!-- IF postrow.S_UNREAD_POST --> unreadpost<!-- ENDIF --><!-- IF postrow.S_POST_REPORTED --> reported<!-- ENDIF --><!-- IF postrow.S_POST_DELETED --> deleted<!-- ENDIF --><!-- IF postrow.S_ONLINE and not postrow.S_POST_HIDDEN --> online<!-- ENDIF --><!-- IF postrow.POSTER_WARNINGS --> warned<!-- ENDIF -->">*/
/* 		<a class="st-anchor" id="p{postrow.POST_ID}">&nbsp;</a>*/
/* 		<!-- IF postrow.S_FIRST_UNREAD -->*/
/* 			<a id="unread" class="st-anchor"<!-- IF S_UNREAD_VIEW --> data-url="{postrow.U_MINI_POST}"<!-- ENDIF -->></a>*/
/* 		<!-- ENDIF -->*/
/* 		<div class="inner">*/
/* */
/* 		<dl class="postprofile" id="profile{postrow.POST_ID}"<!-- IF postrow.S_POST_HIDDEN --> style="display: none;"<!-- ENDIF -->>*/
/* 			*/
/* 			<dt class="avatar-container">*/
/* 				<!-- EVENT viewtopic_body_avatar_before -->*/
/* 				<!-- IF postrow.POSTER_AVATAR -->*/
/* 					<!-- IF postrow.U_POST_AUTHOR --><a href="{postrow.U_POST_AUTHOR}" class="avatar">{postrow.POSTER_AVATAR}</a><!-- ELSE --><span class="avatar">{postrow.POSTER_AVATAR}</span><!-- ENDIF -->*/
/* 				<!-- ELSE -->*/
/* 					<!-- IF postrow.U_POST_AUTHOR --><a href="{postrow.U_POST_AUTHOR}" class="avatar">{$NO_AVATAR}</a><!-- ELSE --><span class="avatar">{$NO_AVATAR}</span><!-- ENDIF -->*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT viewtopic_body_avatar_after -->*/
/* 			</dt>*/
/* 			*/
/* 			<dt class="profile-main <!-- IF postrow.RANK_TITLE or postrow.RANK_IMG -->has-profile-rank<!-- ELSE -->no-profile-rank<!-- ENDIF -->">*/
/* 				<!-- EVENT viewtopic_body_post_author_before -->*/
/* 				<!-- IF not postrow.U_POST_AUTHOR --><strong>{postrow.POST_AUTHOR_FULL}</strong><!-- ELSE -->{postrow.POST_AUTHOR_FULL}<!-- ENDIF --><span class="has-tooltip user-status-indicator" title="<!-- IF postrow.S_ONLINE -->{L_ONLINE}<!-- ELSE -->{L_OFFLINE}<!-- ENDIF -->"></span>*/
/* 				<!-- EVENT viewtopic_body_post_author_after -->*/
/* 				*/
/* 				<!-- IF postrow.RANK_TITLE or postrow.RANK_IMG --><div class="profile-rank">{postrow.RANK_TITLE}<!-- IF postrow.RANK_TITLE and postrow.RANK_IMG --><br /><!-- ENDIF -->{postrow.RANK_IMG}</div><!-- ENDIF -->*/
/* 			</dt>*/
/* */
/* 			<!-- IF ST_topicAuthorLabel != '0' and (postrow.U_POST_AUTHOR and postrow.POST_AUTHOR == TOPIC_AUTHOR) -->*/
/* 				<div class="topic-author-label"><span class="label label-info"><!-- IF ST_topicAuthorLabel__text -->{ST_topicAuthorLabel__text}<!-- ELSE -->{L_TOPIC} {L_AUTHOR}<!-- ENDIF --></span></div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 		<!-- IF postrow.POSTER_POSTS != '' --><dd class="profile-posts"><strong>{L_POSTS}{L_COLON}</strong> <!-- IF postrow.U_SEARCH !== '' --><a href="{postrow.U_SEARCH}"><!-- ENDIF -->{postrow.POSTER_POSTS}<!-- IF postrow.U_SEARCH !== '' --></a><!-- ENDIF --></dd><!-- ENDIF -->*/
/* 		<!-- IF postrow.POSTER_JOINED --><dd class="profile-joined"><strong>{L_JOINED}{L_COLON}</strong> <span class="timestamp">{postrow.POSTER_JOINED}</span></dd><!-- ENDIF -->*/
/* 		<!-- IF postrow.POSTER_WARNINGS --><dd class="profile-warnings"><strong>{L_WARNINGS}{L_COLON}</strong> {postrow.POSTER_WARNINGS}</dd><!-- ENDIF -->*/
/* */
/* 		<!-- IF postrow.S_PROFILE_FIELD1 -->*/
/* 			<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 			<dd><strong>{postrow.PROFILE_FIELD1_NAME}{L_COLON}</strong> {postrow.PROFILE_FIELD1_VALUE}</dd>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT viewtopic_body_postrow_custom_fields_before -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF not postrow.custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dd class="profile-custom-field profile-{postrow.custom_fields.PROFILE_FIELD_IDENT}"><strong>{postrow.custom_fields.PROFILE_FIELD_NAME}{L_COLON}</strong> {postrow.custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- EVENT viewtopic_body_postrow_custom_fields_after -->*/
/* */
/* 		<!-- EVENT viewtopic_body_contact_fields_before -->*/
/* 		<!-- IF not S_IS_BOT and .postrow.contact -->*/
/* 			<dd class="profile-contact">*/
/* 				<strong>{L_CONTACT}{L_COLON}</strong>*/
/* 				<div class="dropdown-container dropdown-left">*/
/* 					<a href="#" class="dropdown-trigger"><span class="imageset icon_contact" title="{postrow.CONTACT_USER}">{postrow.CONTACT_USER}</span></a>*/
/* 					<div class="dropdown hidden">*/
/* 						<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 						<div class="dropdown-contents contact-icons">*/
/* 							<!-- BEGIN contact -->*/
/* 								{% set REMAINDER = postrow.contact.S_ROW_COUNT % 4 %}*/
/* 								<!-- DEFINE $S_LAST_CELL = ((REMAINDER eq 3) or (postrow.contact.S_LAST_ROW and postrow.contact.S_NUM_ROWS < 4)) -->*/
/* 								<!-- IF REMAINDER eq 0 -->*/
/* 									<div>*/
/* 								<!-- ENDIF -->*/
/* 									<a href="<!-- IF postrow.contact.U_CONTACT -->{postrow.contact.U_CONTACT}<!-- ELSE -->{postrow.U_POST_AUTHOR}<!-- ENDIF -->" title="{postrow.contact.NAME}"<!-- IF $S_LAST_CELL --> class="last-cell"<!-- ENDIF --><!-- IF postrow.contact.ID eq 'jabber' --> onclick="popup(this.href, 750, 320); return false;"<!-- ENDIF -->>*/
/* 										<span class="contact-icon {postrow.contact.ID}-icon">{postrow.contact.NAME}</span>*/
/* 									</a>*/
/* 								<!-- IF REMAINDER eq 3 or postrow.contact.S_LAST_ROW -->*/
/* 									</div>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- END contact -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</dd>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT viewtopic_body_contact_fields_after -->*/
/* */
/* 		</dl>*/
/* */
/* 		<div class="postbody">*/
/* 			<!-- IF postrow.S_POST_HIDDEN -->*/
/* 				<!-- IF postrow.S_POST_DELETED -->*/
/* 					<div class="ignore" id="post_hidden{postrow.POST_ID}">*/
/* 						{postrow.L_POST_DELETED_MESSAGE}<br />*/
/* 						{postrow.L_POST_DISPLAY}*/
/* 					</div>*/
/* 				<!-- ELSEIF postrow.S_IGNORE_POST -->*/
/* 					<div class="ignore" id="post_hidden{postrow.POST_ID}">*/
/* 						{postrow.L_IGNORE_POST}<br />*/
/* 						{postrow.L_POST_DISPLAY}*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<div id="post_content{postrow.POST_ID}"<!-- IF postrow.S_POST_HIDDEN --> style="display: none;"<!-- ENDIF -->>*/
/* */
/* 			<h3 <!-- IF postrow.S_FIRST_ROW -->class="first"<!-- ENDIF -->><!-- IF postrow.POST_ICON_IMG --><img src="{T_ICONS_PATH}{postrow.POST_ICON_IMG}" width="{postrow.POST_ICON_IMG_WIDTH}" height="{postrow.POST_ICON_IMG_HEIGHT}" alt="" /> <!-- ENDIF --><a href="#p{postrow.POST_ID}">{postrow.POST_SUBJECT}</a></h3>*/
/* */
/* 		<!-- EVENT viewtopic_body_post_buttons_list_before -->*/
/* 		<!-- IF not S_IS_BOT -->*/
/* 			<ul class="post-buttons">*/
/* 				<!-- EVENT viewtopic_body_post_buttons_before -->*/
/* 				<!-- IF postrow.U_EDIT -->*/
/* 					<li>*/
/* 						<a href="{postrow.U_EDIT}" title="{L_EDIT_POST}" class="button has-tooltip icon-button edit-icon"><span>{L_BUTTON_EDIT}</span></a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF postrow.U_DELETE -->*/
/* 					<li>*/
/* 						<a href="{postrow.U_DELETE}" title="{L_DELETE_POST}" class="button has-tooltip icon-button delete-icon"><span>{L_DELETE_POST}</span></a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF postrow.U_REPORT -->*/
/* 					<li>*/
/* 						<a href="{postrow.U_REPORT}" title="{L_REPORT_POST}" class="button has-tooltip icon-button report-icon"><span>{L_REPORT_POST}</span></a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF postrow.U_WARN -->*/
/* 					<li>*/
/* 						<a href="{postrow.U_WARN}" title="{L_WARN_USER}" class="button has-tooltip icon-button warn-icon"><span>{L_WARN_USER}</span></a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF postrow.U_INFO -->*/
/* 					<li>*/
/* 						<a href="{postrow.U_INFO}" title="{L_INFORMATION}" class="button has-tooltip icon-button info-icon"><span>{L_INFORMATION}</span></a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF postrow.U_QUOTE -->*/
/* 					<li>*/
/* 						<a href="{postrow.U_QUOTE}" title="{L_REPLY_WITH_QUOTE}" class="button has-tooltip icon-button quote-icon"><span>{L_QUOTE}</span></a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT viewtopic_body_post_buttons_after -->*/
/* 				<li>*/
/* 					<a class="icon_post_target" href="#p{postrow.POST_ID}" title="{L_POST} #{postrow.POST_NUMBER}">#{postrow.POST_NUMBER}</a>*/
/* 				</li>*/
/* 			</ul>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT viewtopic_body_post_buttons_list_after -->*/
/* */
/* 			<!-- EVENT viewtopic_body_postrow_post_details_before -->*/
/* 			<p class="author"><span class="timestamp">{postrow.POST_DATE}</span></p>*/
/* 			<!-- EVENT viewtopic_body_postrow_post_details_after -->*/
/* */
/* 			<!-- IF postrow.S_POST_UNAPPROVED -->*/
/* 			<form method="post" class="mcp_approve" action="{postrow.U_APPROVE_ACTION}">*/
/* 				<p class="post-notice unapproved">*/
/* 					<button type="submit" class="btn btn-success" value="{L_APPROVE}" name="action[approve]"><i class="fi fi-check"></i> {L_APPROVE}</button>*/
/* 					<button type="submit" class="btn btn-default" value="{L_DISAPPROVE}" name="action[disapprove]"><i class="fi fi-close"></i> {L_DISAPPROVE}</button>*/
/* 					<input type="hidden" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 					{S_FORM_TOKEN}*/
/* 				</p>*/
/* 			</form>*/
/* 			<!-- ELSEIF postrow.S_POST_DELETED -->*/
/* 			<form method="post" class="mcp_approve" action="{postrow.U_APPROVE_ACTION}">*/
/* 				<p class="post-notice deleted">*/
/* 					<strong>{L_POST_DELETED_ACTION}</strong>*/
/* 					<input class="button2" type="submit" value="{L_DELETE}" name="action[disapprove]" />*/
/* 					<input class="button1" type="submit" value="{L_RESTORE}" name="action[restore]" />*/
/* 					<input type="hidden" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 					{S_FORM_TOKEN}*/
/* 				</p>*/
/* 			</form>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF postrow.S_POST_REPORTED -->*/
/* 			<p class="post-notice reported">*/
/* 				<a href="{postrow.U_MCP_REPORT}"><strong>{L_POST_REPORTED}</strong></a>*/
/* 			</p>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<div class="content">{postrow.MESSAGE}</div>*/
/* */
/* 			<!-- IF postrow.S_HAS_ATTACHMENTS -->*/
/* 				<dl class="attachbox">*/
/* 					<dt>*/
/* 						{L_ATTACHMENTS}*/
/* 					</dt>*/
/* 					<!-- BEGIN attachment -->*/
/* 						<dd>{postrow.attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 					<!-- END attachment -->*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- EVENT viewtopic_body_postrow_post_notices_before -->*/
/* 			<!-- IF postrow.S_DISPLAY_NOTICE --><div class="rules">{L_DOWNLOAD_NOTICE}</div><!-- ENDIF -->*/
/* 			<!-- IF postrow.DELETED_MESSAGE or postrow.DELETE_REASON -->*/
/* 				<div class="notice post_deleted_msg">*/
/* 					{postrow.DELETED_MESSAGE}*/
/* 					<!-- IF postrow.DELETE_REASON --><br /><strong>{L_REASON}{L_COLON}</strong> <em>{postrow.DELETE_REASON}</em><!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ELSEIF postrow.EDITED_MESSAGE or postrow.EDIT_REASON -->*/
/* 				<div class="notice">*/
/* 					{postrow.EDITED_MESSAGE}*/
/* 					<!-- IF postrow.EDIT_REASON --><br /><strong>{L_REASON}{L_COLON}</strong> <em>{postrow.EDIT_REASON}</em><!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF postrow.BUMPED_MESSAGE --><div class="notice"><br /><br />{postrow.BUMPED_MESSAGE}</div><!-- ENDIF -->*/
/* 			<!-- EVENT viewtopic_body_postrow_post_notices_after -->*/
/* 			<!-- IF postrow.SIGNATURE --><div id="sig{postrow.POST_ID}" class="signature">{postrow.SIGNATURE}</div><!-- ENDIF -->*/
/* */
/* 			<!-- EVENT viewtopic_body_postrow_post_content_footer -->*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="back2top"><a href="#top" class="top" title="{L_BACK_TO_TOP}">{L_BACK_TO_TOP}</a></div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<!-- EVENT viewtopic_body_postrow_post_after -->*/
/* <!-- END postrow -->*/
/* </div>*/
/* */
/* <!-- IF S_QUICK_REPLY -->*/
/* 	<!-- INCLUDE quickreply_editor.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_NUM_POSTS > 1 or .pagination -->*/
/* 	<form id="viewtopic" method="post" action="{S_TOPIC_ACTION}">*/
/* 	<fieldset class="display-options" style="margin-top: 0; ">*/
/* 		<!-- IF not S_IS_BOT -->*/
/* 		<label>{L_DISPLAY_POSTS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 		<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label> <label>{S_SELECT_SORT_DIR}</label>*/
/* 		<button type="submit" name="sort" value="{L_GO}" class="btn btn-link"><i class="fi fi-arrow-{S_CONTENT_FLOW_END}"></i></button>*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewtopic_body_topic_actions_before -->*/
/* <div class="action-bar bottom">*/
/* 	<div class="buttons">*/
/* 		<!-- EVENT viewtopic_buttons_bottom_before -->*/
/* 	*/
/* 		<!-- IF not S_IS_BOT and S_DISPLAY_REPLY_INFO -->*/
/* 			<!-- IF S_IS_LOCKED -->*/
/* 			<a href="{U_POST_REPLY_TOPIC}" class="btn btn-danger btn-createnew" title="{L_TOPIC_LOCKED}">*/
/* 				<i class="fi fi-lock"></i> {L_BUTTON_TOPIC_LOCKED}*/
/* 			</a>*/
/* 			<!-- ELSE -->*/
/* 			<a href="{U_POST_REPLY_TOPIC}" class="btn btn-success btn-createnew" title="{L_POST_REPLY}">*/
/* 				<i class="fi fi-plus"></i> {L_BUTTON_POST_REPLY}*/
/* 			</a>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- INCLUDE viewtopic_topic_tools.html -->*/
/* */
/* 		<!-- IF .quickmod -->*/
/* 			<div class="dropup" id="quickmod">*/
/* 				<span title="{L_QUICK_MOD}" data-toggle="dropdown" class="btn btn-default">{L_QUICK_MOD} <i class="fi fi-menu-up"></i></span>*/
/* 				<ul class="dropdown-menu">*/
/* 					<!-- BEGIN quickmod -->*/
/* 						<!-- DEFINE $QUICKMOD_AJAX = (quickmod.VALUE in ['lock', 'unlock', 'delete_topic', 'restore_topic', 'make_normal', 'make_sticky', 'make_announce', 'make_global']) -->*/
/* 						<li><a href="{quickmod.LINK}"<!-- IF $QUICKMOD_AJAX --> data-ajax="true" data-refresh="true"<!-- ENDIF -->>{quickmod.TITLE}</a></li>*/
/* 					<!-- END quickmod -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 		<!-- EVENT viewtopic_buttons_bottom_after -->*/
/* 	</div>*/
/* */
/* 	<!-- IF .pagination or TOTAL_POSTS -->*/
/* 		<div class="right-side">*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* */
/* <!-- EVENT viewtopic_body_footer_before -->*/
/* */
/* <!-- IF not ST_sidebar__topic && S_DISPLAY_ONLINE_LIST -->*/
/* <div class="hoverbox online-list">*/
/* 	<h3 class="block-header"><i class="fi fi-earth"></i> <!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a><!-- ELSE -->{L_WHO_IS_ONLINE}<!-- ENDIF --></h3>*/
/* 	<div class="block-content">{LOGGED_IN_USER_LIST}</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* </div>*/
/* <!-- IF ST_sidebar__topic -->*/
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
