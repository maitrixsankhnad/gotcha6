<?php

/* search_results.html */
class __TwigTemplate_376e42809cfc60bd24b90bfb08a3ddcab236b97c1b141a04567f97a9563a3a59 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"searchresults-title\">";
        // line 5
        if ((isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null)) {
            echo (isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null);
        } else {
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        }
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <a href=\"";
            echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
            echo "\">";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 6
        if ((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null);
            echo "</strong></p>";
        }
        // line 7
        if ((isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null);
            echo "</strong></p>";
        }
        // line 8
        if ((isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null)) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 9
        echo "
";
        // line 10
        if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 11
            echo "\t<p class=\"return-link\"><a class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        }
        // line 13
        echo "
";
        // line 14
        // line 15
        echo "
";
        // line 16
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 17
            echo "\t<div class=\"action-bar top\">

\t";
            // line 19
            if (((isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null) > 0)) {
                // line 20
                echo "\t\t<div class=\"search-box search-box--full\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 21
                echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 23
                echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" title=\"";
                // line 24
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\"><i class=\"fi fi-magnify\"></i></button>
\t\t\t\t<a href=\"";
                // line 25
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\" class=\"btn btn-default\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\"><i class=\"fi fi-settings\"></i></a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 30
            echo "
\t\t";
            // line 31
            // line 32
            echo "
\t\t<div class=\"right-side\">
\t\t\t";
            // line 34
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "search_results.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 35
            echo "\t\t</div>
\t</div>
";
        }
        // line 38
        echo "
";
        // line 39
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 40
            echo "
\t";
            // line 41
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) {
                // line 42
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<div class=\"section-header\">
\t\t\t<span>";
                // line 46
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</span>
\t\t</div>
\t\t\t
\t\t<ul class=\"itemlist itemlist--topics itemlist--topics--full itemlist--topics--searchresults itemlist--has-colbar\">

\t\t";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 52
                    echo "\t\t\t";
                    // line 53
                    echo "\t\t\t<li class=\"itemlist__item ";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_IMG_STYLE", array());
                    echo "\">
\t\t\t<div class=\"item-inner\">

\t\t\t\t<div class=\"item-col-icon\"";
                    // line 56
                    if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_TOPIC_MOVED", array())) {
                        echo " title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_MOVED");
                        echo "\"";
                    }
                    echo ">
\t\t\t\t\t<i class=\"fi item-icon\"></i>
\t\t\t\t\t";
                    // line 58
                    if (($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("VIEW_NEWEST_POST");
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 59
                    echo "\t\t\t\t</div>
\t\t\t\t<div class=\"item-col-main\">
\t\t\t\t\t";
                    // line 61
                    // line 62
                    echo "
\t\t\t\t\t";
                    // line 63
                    if (($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                        echo "<img class=\"topic-icon-img\" src=\"";
                        echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                        echo "\">";
                    }
                    // line 64
                    echo "\t\t\t\t\t";
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        echo "<span class=\"item-ti item-ti--locked has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED_SHORT");
                        echo "\"><i class=\"fi fi-lock\"></i></span>";
                    }
                    // line 65
                    echo "
\t\t\t\t\t<a href=\"";
                    // line 66
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"item-title\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fi fi-attachment has-tooltip\" style=\"font-size: 17px;\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOTAL_ATTACHMENTS");
                        echo "\"></i>";
                    }
                    // line 67
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        // line 68
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" class=\"item-ti item-ti--unapproved has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\"><i class=\"fi fi-flag\"></i></a>
\t\t\t\t\t";
                    }
                    // line 70
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", array())) {
                        // line 71
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" class=\"item-ti item-ti--deleted has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_DELETED");
                        echo "\"><i class=\"fi fi-recycle\"></i></a>
\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        // line 74
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\" class=\"item-ti item-ti--reported has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_REPORTED");
                        echo "\"><i class=\"fi fi-alert\"></i></a>
\t\t\t\t\t";
                    }
                    // line 76
                    echo "\t\t\t\t\t


\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t";
                    // line 80
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        echo "<span class=\"item-info__icon has-tooltip\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPIC_POLL");
                        echo "\"><i class=\"fi fi-poll\"></i></span>";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " <span class=\"topic-info-time\"><span class=\"timestamp\">";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", array());
                    echo "</span></span>
\t\t\t\t\t\t&raquo; ";
                    // line 82
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a class=\"globaltopic-parentforum\" href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a>

\t\t\t\t\t\t";
                    // line 84
                    // line 85
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 86
                    // line 87
                    echo "
\t\t\t\t\t";
                    // line 88
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        // line 89
                        echo "\t\t\t\t\t\t<div class=\"item-lastpost--inline\">
\t\t\t\t\t\t\t<span class=\"reply-counter";
                        // line 90
                        if (($this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array()) == 0)) {
                            echo " reply-counter--zero";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t<span class=\"formatted-numcounter\">";
                        // line 91
                        echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                        echo "</span>
\t\t\t\t\t\t\t\t<i class=\"fi fi-message-text-outline\"></i>
\t\t\t\t\t\t\t</span>
\t
\t\t\t\t\t\t\t";
                        // line 95
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "
\t\t\t\t\t\t\t";
                        // line 96
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo "
\t\t\t\t\t\t\t";
                        // line 97
                        echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo "
\t\t\t\t\t\t\t<a href=\"";
                        // line 98
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\" class=\"topic-lastpost-time\"><span class=\"timestamp\">";
                        echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                        echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item-stats--inline\">
\t\t\t\t\t\t\t<span class=\"item-stat item-stat--posts\">
\t\t\t\t\t\t\t\t<span class=\"topic-posts-count\"><span class=\"formatted-numcounter\">";
                        // line 102
                        echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                        echo "</span></span>
\t\t\t\t\t\t\t\t<span class=\"topic-posts-label\">";
                        // line 103
                        echo $this->env->getExtension('phpbb')->lang("REPLIES");
                        echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"item-stat item-stat--views\">
\t\t\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                        // line 106
                        echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                        echo "</span></span>
\t\t\t\t\t\t\t\t<span class=\"item-stat__label\">";
                        // line 107
                        echo $this->env->getExtension('phpbb')->lang("VIEWS");
                        echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 111
                    echo "
\t\t\t\t</div>

\t\t\t\t<!-- PAGINATION BLOCK -->
\t\t\t\t<div class=\"item-col-pagination\">
\t\t\t\t\t";
                    // line 116
                    if ($this->getAttribute($context["searchresults"], "pagination", array())) {
                        // line 117
                        echo "\t\t\t\t\t\t<ul class=\"pagination pagination-xs\">
\t\t\t\t\t\t\t";
                        // line 118
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 119
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                // line 120
                                echo "\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                echo "<li class=\"active\"><span>";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</span></li>
\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 121
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 122
$context["pagination"], "S_IS_NEXT", array())) {
                                // line 123
                                echo "\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</a></li>
\t\t\t\t\t\t\t\t";
                            }
                            // line 125
                            echo "\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 126
                        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- STAT BLOCK -->
\t\t\t\t";
                    // line 131
                    if (((isset($context["ST_modern_item_stats"]) ? $context["ST_modern_item_stats"] : null) === "0")) {
                        // line 132
                        echo "\t\t\t\t<div class=\"item-col-stats\">
\t\t\t\t\t<span class=\"item-stat item-stat--posts\">
\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                        // line 134
                        echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                        echo "</span></span>
\t\t\t\t\t\t<span class=\"item-stat__label\">";
                        // line 135
                        echo $this->env->getExtension('phpbb')->lang("REPLIES");
                        echo "</span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"item-stat item-stat--views\">
\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                        // line 138
                        echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                        echo "</span></span>
\t\t\t\t\t\t<span class=\"item-stat__label\">";
                        // line 139
                        echo $this->env->getExtension('phpbb')->lang("VIEWS");
                        echo "</span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t";
                    } else {
                        // line 143
                        echo "\t\t\t\t<div class=\"item-col-stats\">
\t\t\t\t\t<span class=\"item-stat--v2 item-stat--views\">
\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                        // line 145
                        echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                        echo "</span></span>
\t\t\t\t\t\t<span class=\"item-stat__label\">";
                        // line 146
                        echo $this->env->getExtension('phpbb')->lang("VIEWS");
                        echo "</span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"item-stat--v2 item-stat--posts has-tooltip\" data-placement=\"left\" title=\"";
                        // line 148
                        echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("REPLIES");
                        echo "\">
\t\t\t\t\t\t<span class=\"item-stat__label\"><i class=\"fi fi-comment-multiple-outline\"></i></span>
\t\t\t\t\t\t<span class=\"item-stat__count\"><span class=\"formatted-numcounter\">";
                        // line 150
                        echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                        echo "</span></span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 154
                    echo "
\t\t\t\t<!-- LASTPOST BLOCK -->
\t\t\t\t<div class=\"item-col-lastpost";
                    // line 156
                    if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "AVATAR_IMG", array())) {
                        echo " has-avatar";
                    }
                    echo "\">
\t\t\t\t\t<span class=\"hidden\">";
                    // line 157
                    echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                    echo "</span> ";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t\t\t<br />
\t\t\t\t\t<a href=\"";
                    // line 159
                    echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                    echo "\" class=\"item-lastpost__time\"><span class=\"timestamp\">";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                    echo "</span></a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t</li>
\t\t\t";
                    // line 164
                    // line 165
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 171
                echo "\t\t<div class=\"st-panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 177
            echo "
";
        } else {
            // line 179
            echo "
\t";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 181
                echo "\t\t";
                // line 182
                echo "\t\t<div class=\"search post ";
                if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 185
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 186
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 187
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t</div>
\t";
                } else {
                    // line 190
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 191
                    // line 192
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 193
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "</dd>
\t\t\t<dd>";
                    // line 194
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 195
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 196
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 197
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</strong></dd>
\t\t\t";
                    // line 198
                    // line 199
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 202
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 203
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</div>
\t\t</div>
\t";
                }
                // line 206
                echo "
\t";
                // line 207
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 208
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li ><a href=\"";
                    // line 209
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\" class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></li>
\t\t</ul>
\t";
                }
                // line 212
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 215
                // line 216
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 217
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 219
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 224
        echo "
";
        // line 225
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) || (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null))) {
            // line 226
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">

\t<fieldset class=\"display-options\">
\t\t";
            // line 229
            if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null))) {
                // line 230
                echo "\t\t\t<label>";
                if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label><label>";
                }
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                if ((isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) {
                    echo "</label> <label>";
                    echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                    echo "</label>
\t\t\t<label>";
                    // line 231
                    echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                }
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 232
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 234
            echo "\t</fieldset>

\t</form>
";
        }
        // line 238
        echo "
";
        // line 239
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 240
            echo "<div class=\"action-bar bottom\">
\t<div class=\"right-side\">
\t\t";
            // line 242
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "search_results.html", 242)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 243
            echo "\t</div>
</div>
";
        }
        // line 246
        echo "
";
        // line 247
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 247)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 248
        echo "
";
        // line 249
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 249)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  787 => 249,  784 => 248,  772 => 247,  769 => 246,  764 => 243,  752 => 242,  748 => 240,  746 => 239,  743 => 238,  737 => 234,  732 => 232,  727 => 231,  712 => 230,  710 => 229,  703 => 226,  701 => 225,  698 => 224,  687 => 219,  683 => 217,  678 => 216,  677 => 215,  672 => 212,  662 => 209,  659 => 208,  657 => 207,  654 => 206,  648 => 203,  642 => 202,  637 => 199,  636 => 198,  629 => 197,  622 => 196,  613 => 195,  604 => 194,  600 => 193,  593 => 192,  592 => 191,  589 => 190,  583 => 187,  580 => 186,  578 => 185,  564 => 182,  562 => 181,  557 => 180,  554 => 179,  550 => 177,  543 => 173,  539 => 171,  532 => 166,  526 => 165,  525 => 164,  515 => 159,  508 => 157,  502 => 156,  498 => 154,  491 => 150,  484 => 148,  479 => 146,  475 => 145,  471 => 143,  464 => 139,  460 => 138,  454 => 135,  450 => 134,  446 => 132,  444 => 131,  439 => 128,  435 => 126,  429 => 125,  419 => 123,  417 => 122,  411 => 121,  404 => 120,  401 => 119,  397 => 118,  394 => 117,  392 => 116,  385 => 111,  378 => 107,  374 => 106,  368 => 103,  364 => 102,  355 => 98,  350 => 97,  346 => 96,  342 => 95,  335 => 91,  329 => 90,  326 => 89,  324 => 88,  321 => 87,  320 => 86,  317 => 85,  316 => 84,  307 => 82,  295 => 81,  289 => 80,  283 => 76,  275 => 74,  272 => 73,  264 => 71,  261 => 70,  253 => 68,  250 => 67,  240 => 66,  237 => 65,  230 => 64,  221 => 63,  218 => 62,  217 => 61,  213 => 59,  205 => 58,  196 => 56,  189 => 53,  187 => 52,  183 => 51,  175 => 46,  169 => 42,  167 => 41,  164 => 40,  162 => 39,  159 => 38,  154 => 35,  142 => 34,  138 => 32,  137 => 31,  134 => 30,  124 => 25,  120 => 24,  116 => 23,  111 => 21,  108 => 20,  106 => 19,  102 => 17,  100 => 16,  97 => 15,  96 => 14,  93 => 13,  83 => 11,  81 => 10,  78 => 9,  72 => 8,  63 => 7,  54 => 6,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT search_results_header_before -->*/
/* */
/* <h2 class="searchresults-title"><!-- IF SEARCH_TITLE -->{SEARCH_TITLE}<!-- ELSE -->{SEARCH_MATCHES}<!-- ENDIF --><!-- IF SEARCH_WORDS -->{L_COLON} <a href="{U_SEARCH_WORDS}">{SEARCH_WORDS}</a><!-- ENDIF --></h2>*/
/* <!-- IF SEARCHED_QUERY --> <p>{L_SEARCHED_QUERY}{L_COLON} <strong>{SEARCHED_QUERY}</strong></p><!-- ENDIF -->*/
/* <!-- IF IGNORED_WORDS --> <p>{L_IGNORED_TERMS}{L_COLON} <strong>{IGNORED_WORDS}</strong></p><!-- ENDIF -->*/
/* <!-- IF PHRASE_SEARCH_DISABLED --> <p><strong>{L_PHRASE_SEARCH_DISABLED}</strong></p><!-- ENDIF -->*/
/* */
/* <!-- IF SEARCH_TOPIC -->*/
/* 	<p class="return-link"><a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH_TOPIC}">{L_RETURN_TO_TOPIC}</a></p>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT search_results_header_after -->*/
/* */
/* <!-- IF .pagination or SEARCH_MATCHES or TOTAL_MATCHES or PAGE_NUMBER -->*/
/* 	<div class="action-bar top">*/
/* */
/* 	<!-- IF TOTAL_MATCHES > 0 -->*/
/* 		<div class="search-box search-box--full" role="search">*/
/* 			<form method="post" action="{S_SEARCH_ACTION}">*/
/* 			<fieldset>*/
/* 				<input class="inputbox search tiny" type="search" name="add_keywords" id="add_keywords" value="" placeholder="{L_SEARCH_IN_RESULTS}" />*/
/* 				<button class="btn btn-default" type="submit" title="{L_SEARCH}"><i class="fi fi-magnify"></i></button>*/
/* 				<a href="{U_SEARCH}" class="btn btn-default" title="{L_SEARCH_ADV}"><i class="fi fi-settings"></i></a>*/
/* 			</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT search_results_searchbox_after -->*/
/* */
/* 		<div class="right-side">*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SHOW_TOPICS -->*/
/* */
/* 	<!-- IF .searchresults -->*/
/* 	<div class="forumbg">*/
/* */
/* 		<div class="inner">*/
/* 		<div class="section-header">*/
/* 			<span>{L_TOPICS}</span>*/
/* 		</div>*/
/* 			*/
/* 		<ul class="itemlist itemlist--topics itemlist--topics--full itemlist--topics--searchresults itemlist--has-colbar">*/
/* */
/* 		<!-- BEGIN searchresults -->*/
/* 			<!-- EVENT search_results_topic_before -->*/
/* 			<li class="itemlist__item {searchresults.TOPIC_IMG_STYLE}">*/
/* 			<div class="item-inner">*/
/* */
/* 				<div class="item-col-icon"<!-- IF topicrow.S_TOPIC_MOVED --> title="{L_TOPIC_MOVED}"<!-- ENDIF -->>*/
/* 					<i class="fi item-icon"></i>*/
/* 					<!-- IF topicrow.S_UNREAD_TOPIC and not S_IS_BOT --><a href="{searchresults.U_NEWEST_POST}" title="{L_VIEW_NEWEST_POST}" class="icon-link"></a><!-- ENDIF -->*/
/* 				</div>*/
/* 				<div class="item-col-main">*/
/* 					<!-- EVENT topiclist_row_prepend -->*/
/* */
/* 					<!-- IF searchresults.TOPIC_ICON_IMG and S_TOPIC_ICONS --><img class="topic-icon-img" src="{T_ICONS_PATH}{searchresults.TOPIC_ICON_IMG}" alt="{searchresults.TOPIC_FOLDER_IMG_ALT}"><!-- ENDIF -->*/
/* 					<!-- IF not S_IS_BOT --><span class="item-ti item-ti--locked has-tooltip" title="{L_TOPIC_LOCKED_SHORT}"><i class="fi fi-lock"></i></span><!-- ENDIF -->*/
/* */
/* 					<a href="{searchresults.U_VIEW_TOPIC}" class="item-title">{searchresults.TOPIC_TITLE}</a> <!-- IF searchresults.ATTACH_ICON_IMG --><i class="fi fi-attachment has-tooltip" style="font-size: 17px;" title="{L_TOTAL_ATTACHMENTS}"></i><!-- ENDIF -->*/
/* 					<!-- IF searchresults.S_TOPIC_UNAPPROVED or searchresults.S_POSTS_UNAPPROVED -->*/
/* 						<a href="{searchresults.U_MCP_QUEUE}" class="item-ti item-ti--unapproved has-tooltip" title="{L_POSTS_UNAPPROVED_FORUM}"><i class="fi fi-flag"></i></a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF searchresults.S_TOPIC_DELETED -->*/
/* 						<a href="{searchresults.U_MCP_QUEUE}" class="item-ti item-ti--deleted has-tooltip" title="{L_TOPIC_DELETED}"><i class="fi fi-recycle"></i></a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF searchresults.S_TOPIC_REPORTED -->*/
/* 						<a href="{searchresults.U_MCP_REPORT}" class="item-ti item-ti--reported has-tooltip" title="{L_TOPIC_REPORTED}"><i class="fi fi-alert"></i></a>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* */
/* */
/* 					<div class="item-info">*/
/* 						<!-- IF searchresults.S_HAS_POLL --><span class="item-info__icon has-tooltip" title="{L_TOPIC_POLL}"><i class="fi fi-poll"></i></span><!-- ENDIF -->*/
/* 						{L_POSTED} {L_POST_BY_AUTHOR} {searchresults.TOPIC_AUTHOR_FULL}{L_COMMA_SEPARATOR} <span class="topic-info-time"><span class="timestamp">{searchresults.FIRST_POST_TIME}</span></span>*/
/* 						&raquo; {L_IN} <a class="globaltopic-parentforum" href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a>*/
/* */
/* 						<!-- EVENT topiclist_row_append -->*/
/* 					</div>*/
/* 						<!-- EVENT topiclist_row_append -->*/
/* */
/* 					<!-- IF not S_IS_BOT -->*/
/* 						<div class="item-lastpost--inline">*/
/* 							<span class="reply-counter<!-- IF searchresults.TOPIC_REPLIES == 0 --> reply-counter--zero<!-- ENDIF -->">*/
/* 								<span class="formatted-numcounter">{searchresults.TOPIC_REPLIES}</span>*/
/* 								<i class="fi fi-message-text-outline"></i>*/
/* 							</span>*/
/* 	*/
/* 							{L_LAST_POST}*/
/* 							{L_POST_BY_AUTHOR}*/
/* 							{searchresults.LAST_POST_AUTHOR_FULL}{L_COMMA_SEPARATOR}*/
/* 							<a href="{searchresults.U_LAST_POST}" class="topic-lastpost-time"><span class="timestamp">{searchresults.LAST_POST_TIME}</span></a>*/
/* 						</div>*/
/* 						<div class="item-stats--inline">*/
/* 							<span class="item-stat item-stat--posts">*/
/* 								<span class="topic-posts-count"><span class="formatted-numcounter">{searchresults.TOPIC_REPLIES}</span></span>*/
/* 								<span class="topic-posts-label">{L_REPLIES}</span>*/
/* 							</span>*/
/* 							<span class="item-stat item-stat--views">*/
/* 								<span class="item-stat__count"><span class="formatted-numcounter">{searchresults.TOPIC_VIEWS}</span></span>*/
/* 								<span class="item-stat__label">{L_VIEWS}</span>*/
/* 							</span>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* */
/* 				</div>*/
/* */
/* 				<!-- PAGINATION BLOCK -->*/
/* 				<div class="item-col-pagination">*/
/* 					<!-- IF searchresults.pagination -->*/
/* 						<ul class="pagination pagination-xs">*/
/* 							<!-- BEGIN pagination -->*/
/* 								<!-- IF searchresults.pagination.S_IS_PREV -->*/
/* 								<!-- ELSEIF searchresults.pagination.S_IS_CURRENT --><li class="active"><span>{searchresults.pagination.PAGE_NUMBER}</span></li>*/
/* 								<!-- ELSEIF searchresults.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 								<!-- ELSEIF searchresults.pagination.S_IS_NEXT -->*/
/* 								<!-- ELSE --><li><a href="{searchresults.pagination.PAGE_URL}">{searchresults.pagination.PAGE_NUMBER}</a></li>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- END pagination -->*/
/* 						</ul>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				*/
/* 				<!-- STAT BLOCK -->*/
/* 				<!-- IF ST_modern_item_stats === '0' -->*/
/* 				<div class="item-col-stats">*/
/* 					<span class="item-stat item-stat--posts">*/
/* 						<span class="item-stat__count"><span class="formatted-numcounter">{searchresults.TOPIC_REPLIES}</span></span>*/
/* 						<span class="item-stat__label">{L_REPLIES}</span>*/
/* 					</span>*/
/* 					<span class="item-stat item-stat--views">*/
/* 						<span class="item-stat__count"><span class="formatted-numcounter">{searchresults.TOPIC_VIEWS}</span></span>*/
/* 						<span class="item-stat__label">{L_VIEWS}</span>*/
/* 					</span>*/
/* 				</div>*/
/* 				<!-- ELSE -->*/
/* 				<div class="item-col-stats">*/
/* 					<span class="item-stat--v2 item-stat--views">*/
/* 						<span class="item-stat__count"><span class="formatted-numcounter">{searchresults.TOPIC_VIEWS}</span></span>*/
/* 						<span class="item-stat__label">{L_VIEWS}</span>*/
/* 					</span>*/
/* 					<span class="item-stat--v2 item-stat--posts has-tooltip" data-placement="left" title="{searchresults.TOPIC_REPLIES} {L_REPLIES}">*/
/* 						<span class="item-stat__label"><i class="fi fi-comment-multiple-outline"></i></span>*/
/* 						<span class="item-stat__count"><span class="formatted-numcounter">{searchresults.TOPIC_REPLIES}</span></span>*/
/* 					</span>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				<!-- LASTPOST BLOCK -->*/
/* 				<div class="item-col-lastpost<!-- IF topicrow.AVATAR_IMG --> has-avatar<!-- ENDIF -->">*/
/* 					<span class="hidden">{L_LAST_POST}</span> {searchresults.LAST_POST_AUTHOR_FULL}*/
/* 					<br />*/
/* 					<a href="{searchresults.U_LAST_POST}" class="item-lastpost__time"><span class="timestamp">{searchresults.LAST_POST_TIME}</span></a>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			</li>*/
/* 			<!-- EVENT search_results_topic_after -->*/
/* 		<!-- END searchresults -->*/
/* 		</ul>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ELSE -->*/
/* 		<div class="st-panel">*/
/* 			<div class="inner">*/
/* 			<strong>{L_NO_SEARCH_RESULTS}</strong>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<!-- BEGIN searchresults -->*/
/* 		<!-- EVENT search_results_post_before -->*/
/* 		<div class="search post <!-- IF searchresults.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF searchresults.S_POST_REPORTED --> reported<!-- ENDIF -->">*/
/* 			<div class="inner">*/
/* */
/* 	<!-- IF searchresults.S_IGNORE_POST -->*/
/* 		<div class="postbody">*/
/* 			{searchresults.L_IGNORE_POST}*/
/* 		</div>*/
/* 	<!-- ELSE -->*/
/* 		<dl class="postprofile">*/
/* 			<!-- EVENT search_results_postprofile_before -->*/
/* 			<dt class="author">{L_POST_BY_AUTHOR} {searchresults.POST_AUTHOR_FULL}</dt>*/
/* 			<dd class="search-result-date">{searchresults.POST_DATE}</dd>*/
/* 			<dd>{L_FORUM}{L_COLON} <a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a></dd>*/
/* 			<dd>{L_TOPIC}{L_COLON} <a href="{searchresults.U_VIEW_TOPIC}">{searchresults.TOPIC_TITLE}</a></dd>*/
/* 			<dd>{L_REPLIES}{L_COLON} <strong>{searchresults.TOPIC_REPLIES}</strong></dd>*/
/* 			<dd>{L_VIEWS}{L_COLON} <strong>{searchresults.TOPIC_VIEWS}</strong></dd>*/
/* 			<!-- EVENT search_results_postprofile_after -->*/
/* 		</dl>*/
/* */
/* 		<div class="postbody">*/
/* 			<h3><a href="{searchresults.U_VIEW_POST}">{searchresults.POST_SUBJECT}</a></h3>*/
/* 			<div class="content">{searchresults.MESSAGE}</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not searchresults.S_IGNORE_POST -->*/
/* 		<ul class="searchresults">*/
/* 			<li ><a href="{searchresults.U_VIEW_POST}" class="arrow-{S_CONTENT_FLOW_END}">{L_JUMP_TO_POST}</a></li>*/
/* 		</ul>*/
/* 	<!-- ENDIF -->*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<!-- EVENT search_results_post_after -->*/
/* 	<!-- BEGINELSE -->*/
/* 		<div class="panel">*/
/* 			<div class="inner">*/
/* 			<strong>{L_NO_SEARCH_RESULTS}</strong>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- END searchresults -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF .pagination or .searchresults or S_SELECT_SORT_KEY or S_SELECT_SORT_DAYS -->*/
/* 	<form method="post" action="{S_SEARCH_ACTION}">*/
/* */
/* 	<fieldset class="display-options">*/
/* 		<!-- IF S_SELECT_SORT_DAYS or S_SELECT_SORT_KEY -->*/
/* 			<label><!-- IF S_SHOW_TOPICS -->{L_DISPLAY_POSTS}<!-- ELSE -->{L_SORT_BY}</label><label><!-- ENDIF --> {S_SELECT_SORT_DAYS}<!-- IF S_SELECT_SORT_KEY --></label> <label>{S_SELECT_SORT_KEY}</label>*/
/* 			<label>{S_SELECT_SORT_DIR}<!-- ENDIF --></label>*/
/* 			<input type="submit" name="sort" value="{L_GO}" class="button2" />*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* */
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF .pagination or .searchresults or PAGE_NUMBER -->*/
/* <div class="action-bar bottom">*/
/* 	<div class="right-side">*/
/* 		<!-- INCLUDE pagination.html -->*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
