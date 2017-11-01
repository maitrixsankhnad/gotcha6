<?php

/* forumlist_body.html */
class __TwigTemplate_4e4c237e775a55faf9e47bd2d9a0944a19a0be7879df06c83cba9c7fd5fa946c extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 4
                echo "\t\t</ol>
\t\t</div><!-- category-inner END -->
\t</div><!-- category-wrapper END -->
\t";
            }
            // line 8
            echo "
\t";
            // line 9
            // line 10
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 11
                echo "\t<div class=\"category-wrapper\">
\t\t<div class=\"category-header\">
\t\t\t";
                // line 13
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a class=\"category-title\" href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUMS");
                }
                // line 14
                echo "\t\t\t<a href=\"javascript:void(0)\" class=\"close\" data-toggle=\"collapse\" data-target=\"#forum-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\" aria-expanded=\"true\" aria-controls=\"forum-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\"></a>
\t\t</div>
\t\t
\t\t<div class=\"category-inner collapse in\" id=\"forum-";
                // line 17
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\">
\t\t<ol class=\"itemlist itemlist--forums itemlist--forums--full\">
\t";
            }
            // line 20
            echo "\t";
            // line 21
            echo "
\t";
            // line 22
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 23
                echo "\t\t";
                // line 24
                echo "\t\t\t<li class=\"itemlist__item ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                echo " ";
                if ($this->getAttribute($context["forumrow"], "AVATAR_IMG", array())) {
                    echo "has-lastpostavatar";
                }
                echo "\">
\t\t\t\t<div class=\"item-inner\">
\t\t\t\t";
                // line 26
                // line 27
                echo "\t\t\t\t
\t\t\t\t";
                // line 28
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    // line 29
                    echo "\t\t\t\t<div class=\"item-col-icon forum-image\" title=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t";
                    // line 30
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "
\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t<div class=\"item-col-icon\" title=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t<i class=\"fi item-icon\"></i>
\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 36
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 37
                echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"item-col-main\">
\t\t\t\t\t
\t\t\t\t\t<a class=\"item-title\" href=\"";
                // line 41
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t";
                // line 42
                if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                    // line 43
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                    echo "\" class=\"item-ti item-ti--unapproved2 has-tooltip\" data-placement=\"right\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS_UNAPPROVED");
                    echo "\"><i class=\"fi fi-alert\"></i></a>
\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 44
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                    // line 45
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                    echo "\" class=\"item-ti item-ti--unapproved2 has-tooltip\" data-placement=\"right\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POSTS_UNAPPROVED_FORUM");
                    echo "\"><i class=\"fi fi-alert\"></i></a>
\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 48
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 49
                    echo "\t\t\t\t\t\t<div class=\"subforums\">
\t\t\t\t\t\t\t";
                    // line 50
                    // line 51
                    echo "\t\t\t\t\t\t\t<span class=\"subforum-stem\" title=\"";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo "\"></span>
\t\t\t\t\t\t\t";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 54
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "\t\t\t\t\t\t\t";
                    // line 56
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 59
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    // line 60
                    echo "\t\t\t\t\t<span class=\"item-info\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                    echo "</span>
\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 63
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 64
                    echo "\t\t\t\t\t\t<span class=\"item-info--inline\">";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <span class=\"formatted-numcounter\">";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></span>
\t\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 65
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 66
                    echo "\t\t\t\t\t
\t\t\t\t\t\t<span class=\"item-lastpost--inline\">
\t\t\t\t\t\t\t";
                    // line 68
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t<span class=\"lastpost-label-inline\">";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "<!--";
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "--></span>
\t\t\t\t\t\t\t\t<!--<a href=\"";
                        // line 70
                        echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                        echo "\" class=\"lastsubject-inline\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                        echo "</a>-->
\t\t\t\t\t\t\t\t";
                        // line 71
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo "
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 72
                        echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                        echo "\"><span class=\"timestamp\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "</span></a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "
\t\t\t\t\t\t\t";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"item-stats--inline\">
\t\t\t\t\t\t\t<span class=\"item-stat item-stat--topics\">
\t\t\t\t\t\t\t\t<span class=\"item-stat__count formatted-numcounter\">";
                    // line 80
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo "</span>
\t\t\t\t\t\t\t\t<span class=\"item-stat__label\">";
                    // line 81
                    if (($this->getAttribute($context["forumrow"], "TOPICS", array()) == 1)) {
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    }
                    echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"item-stat item-stat--posts\">
\t\t\t\t\t\t\t\t<span class=\"item-stat__count formatted-numcounter\">";
                    // line 84
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo "</span>
\t\t\t\t\t\t\t\t<span class=\"item-stat__label\">";
                    // line 85
                    if (($this->getAttribute($context["forumrow"], "POSTS", array()) == 1)) {
                        echo $this->env->getExtension('phpbb')->lang("POST");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                    }
                    echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
                // line 91
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 92
                    echo "\t\t\t\t\t<span class=\"forum-moderators\"><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "</span>
\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
                // line 97
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    // line 98
                    echo "\t\t\t\t<a class=\"item-col-feed\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\"><i class=\"fi fi-rss\"></i></a>
\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t
\t\t\t\t";
                // line 101
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 102
                    echo "\t\t\t\t<!--<div class=\"forum-stats\"></div>-->
\t\t\t\t<div class=\"item-col-lastpost\">
\t\t\t\t\t<span class=\"redirect-counter\">";
                    // line 104
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <span class=\"formatted-numcounter\">";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></span>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 107
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 108
                    echo "\t\t\t\t<div class=\"item-col-stats\">
\t\t\t\t\t";
                    // line 109
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        // line 110
                        echo "\t\t\t\t\t<span class=\"item-stat item-stat--topics\">
\t\t\t\t\t\t<span class=\"item-stat__count formatted-numcounter\">";
                        // line 111
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo "</span>
\t\t\t\t\t\t<span class=\"item-stat__label\">";
                        // line 112
                        if (($this->getAttribute($context["forumrow"], "TOPICS", array()) == 1)) {
                            echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        }
                        echo "</span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"item-stat item-stat--posts\">
\t\t\t\t\t\t<span class=\"item-stat__count formatted-numcounter\">";
                        // line 115
                        echo $this->getAttribute($context["forumrow"], "POSTS", array());
                        echo "</span>
\t\t\t\t\t\t<span class=\"item-stat__label\">";
                        // line 116
                        if (($this->getAttribute($context["forumrow"], "POSTS", array()) == 1)) {
                            echo $this->env->getExtension('phpbb')->lang("POST");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("POSTS");
                        }
                        echo "</span>
\t\t\t\t\t</span>
\t\t\t\t\t";
                    }
                    // line 119
                    echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"item-col-lastpost\">
\t\t\t\t\t
\t\t\t\t\t";
                    // line 123
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        // line 124
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                            // line 125
                            echo "\t\t\t\t\t\t\t";
                            // line 126
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                            echo "\" class=\"item-lastpost__title\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a>
\t\t\t\t\t\t";
                        }
                        // line 128
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"item-lastpost__info\">
\t\t\t\t\t\t\t";
                        // line 130
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t\t<span class=\"item-lastpost__time timestamp\">";
                        // line 131
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } else {
                        // line 134
                        echo "\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "
\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
                }
                // line 139
                echo "\t\t\t";
                // line 140
                echo "\t\t\t</div>
\t\t\t</li>
\t\t";
                // line 142
                // line 143
                echo "\t";
            }
            // line 144
            echo "
\t";
            // line 145
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 146
                echo "\t\t</ol>
\t\t</div><!-- category-inner END -->
\t</div><!-- category-wrapper END -->
\t";
                // line 149
                // line 150
                echo "\t";
            }
            // line 151
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 153
            echo "<div class=\"panel panel-default no-forums\">
\t\t<div class=\"panel-body\">
\t\t\t\t<strong>";
            // line 155
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 155,  477 => 153,  471 => 151,  468 => 150,  467 => 149,  462 => 146,  460 => 145,  457 => 144,  454 => 143,  453 => 142,  449 => 140,  447 => 139,  442 => 136,  436 => 134,  430 => 131,  424 => 130,  420 => 128,  410 => 126,  408 => 125,  405 => 124,  403 => 123,  397 => 119,  387 => 116,  383 => 115,  373 => 112,  369 => 111,  366 => 110,  364 => 109,  361 => 108,  359 => 107,  350 => 104,  346 => 102,  344 => 101,  341 => 100,  329 => 98,  327 => 97,  322 => 94,  313 => 92,  311 => 91,  307 => 89,  296 => 85,  292 => 84,  282 => 81,  278 => 80,  272 => 76,  266 => 74,  259 => 72,  252 => 71,  244 => 70,  237 => 69,  235 => 68,  231 => 66,  229 => 65,  221 => 64,  219 => 63,  216 => 62,  210 => 60,  208 => 59,  205 => 58,  201 => 56,  199 => 55,  193 => 54,  172 => 53,  168 => 52,  163 => 51,  162 => 50,  159 => 49,  157 => 48,  154 => 47,  146 => 45,  144 => 44,  137 => 43,  135 => 42,  129 => 41,  123 => 37,  117 => 36,  114 => 35,  107 => 32,  102 => 30,  97 => 29,  95 => 28,  92 => 27,  91 => 26,  81 => 24,  79 => 23,  77 => 22,  74 => 21,  72 => 20,  66 => 17,  57 => 14,  47 => 13,  43 => 11,  40 => 10,  39 => 9,  36 => 8,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <!-- BEGIN forumrow -->*/
/* 	<!-- IF (forumrow.S_IS_CAT and not forumrow.S_FIRST_ROW) or forumrow.S_NO_CAT  -->*/
/* 		</ol>*/
/* 		</div><!-- category-inner END -->*/
/* 	</div><!-- category-wrapper END -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT forumlist_body_category_header_before -->*/
/* 	<!-- IF forumrow.S_IS_CAT or forumrow.S_FIRST_ROW  or forumrow.S_NO_CAT  -->*/
/* 	<div class="category-wrapper">*/
/* 		<div class="category-header">*/
/* 			<!-- IF forumrow.S_IS_CAT --><a class="category-title" href="{forumrow.U_VIEWFORUM}">{forumrow.FORUM_NAME}</a><!-- ELSE -->{L_FORUMS}<!-- ENDIF -->*/
/* 			<a href="javascript:void(0)" class="close" data-toggle="collapse" data-target="#forum-{forumrow.FORUM_ID}" aria-expanded="true" aria-controls="forum-{forumrow.FORUM_ID}"></a>*/
/* 		</div>*/
/* 		*/
/* 		<div class="category-inner collapse in" id="forum-{forumrow.FORUM_ID}">*/
/* 		<ol class="itemlist itemlist--forums itemlist--forums--full">*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT forumlist_body_category_header_after -->*/
/* */
/* 	<!-- IF not forumrow.S_IS_CAT -->*/
/* 		<!-- EVENT forumlist_body_forum_row_before -->*/
/* 			<li class="itemlist__item {forumrow.FORUM_IMG_STYLE} <!-- IF forumrow.AVATAR_IMG -->has-lastpostavatar<!-- ENDIF -->">*/
/* 				<div class="item-inner">*/
/* 				<!-- EVENT forumlist_body_forum_row_prepend -->*/
/* 				*/
/* 				<!-- IF forumrow.FORUM_IMAGE -->*/
/* 				<div class="item-col-icon forum-image" title="{forumrow.FORUM_FOLDER_IMG_ALT}">*/
/* 					{forumrow.FORUM_IMAGE}*/
/* 				<!-- ELSE -->*/
/* 				<div class="item-col-icon" title="{forumrow.FORUM_FOLDER_IMG_ALT}">*/
/* 					<i class="fi item-icon"></i>*/
/* 				<!-- ENDIF -->*/
/* 					*/
/* 					<!-- IF forumrow.S_UNREAD_FORUM --><a href="{forumrow.U_VIEWFORUM}" class="icon-link"></a><!-- ENDIF -->*/
/* 				</div>*/
/* 				*/
/* 				<div class="item-col-main">*/
/* 					*/
/* 					<a class="item-title" href="{forumrow.U_VIEWFORUM}">{forumrow.FORUM_NAME}</a>*/
/* 					<!-- IF forumrow.U_UNAPPROVED_TOPICS -->*/
/* 					<a href="{forumrow.U_UNAPPROVED_TOPICS}" class="item-ti item-ti--unapproved2 has-tooltip" data-placement="right" title="{L_TOPICS_UNAPPROVED}"><i class="fi fi-alert"></i></a>*/
/* 					<!-- ELSEIF forumrow.U_UNAPPROVED_POSTS -->*/
/* 					<a href="{forumrow.U_UNAPPROVED_POSTS}" class="item-ti item-ti--unapproved2 has-tooltip" data-placement="right" title="{L_POSTS_UNAPPROVED_FORUM}"><i class="fi fi-alert"></i></a>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 					<!-- IF .forumrow.subforum and forumrow.S_LIST_SUBFORUMS -->*/
/* 						<div class="subforums">*/
/* 							<!-- EVENT forumlist_body_subforums_before -->*/
/* 							<span class="subforum-stem" title="{forumrow.L_SUBFORUM_STR}"></span>*/
/* 							<!-- BEGIN subforum -->*/
/* 								<a href="{forumrow.subforum.U_SUBFORUM}" class="subforum<!-- IF forumrow.subforum.S_UNREAD --> unread<!-- ELSE --> read<!-- ENDIF -->" title="<!-- IF forumrow.subforum.S_UNREAD -->{L_UNREAD_POSTS}<!-- ELSE -->{L_NO_UNREAD_POSTS}<!-- ENDIF -->">{forumrow.subforum.SUBFORUM_NAME}</a><!-- IF not forumrow.subforum.S_LAST_ROW -->{L_COMMA_SEPARATOR}<!-- ENDIF -->*/
/* 							<!-- END subforum -->*/
/* 							<!-- EVENT forumlist_body_subforums_after -->*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 					<!-- IF forumrow.FORUM_DESC -->*/
/* 					<span class="item-info">{forumrow.FORUM_DESC}</span>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 					<!-- IF forumrow.CLICKS -->*/
/* 						<span class="item-info--inline">{L_REDIRECTS}{L_COLON} <span class="formatted-numcounter">{forumrow.CLICKS}</span></span>*/
/* 					<!-- ELSEIF not forumrow.S_IS_LINK -->*/
/* 					*/
/* 						<span class="item-lastpost--inline">*/
/* 							<!-- IF forumrow.LAST_POST_TIME -->*/
/* 								<span class="lastpost-label-inline">{L_LAST_POST}<!--{L_COLON}--></span>*/
/* 								<!--<a href="{forumrow.U_LAST_POST}" title="{forumrow.LAST_POST_SUBJECT}" class="lastsubject-inline">{forumrow.LAST_POST_SUBJECT_TRUNCATED}</a>-->*/
/* 								{L_POST_BY_AUTHOR} {forumrow.LAST_POSTER_FULL}{L_COMMA_SEPARATOR}*/
/* 								<a href="{forumrow.U_LAST_POST}"><span class="timestamp">{forumrow.LAST_POST_TIME}</span></a>*/
/* 							<!-- ELSE -->*/
/* 								{L_NO_POSTS}*/
/* 							<!-- ENDIF -->*/
/* 						</span>*/
/* 					*/
/* 						<div class="item-stats--inline">*/
/* 							<span class="item-stat item-stat--topics">*/
/* 								<span class="item-stat__count formatted-numcounter">{forumrow.TOPICS}</span>*/
/* 								<span class="item-stat__label"><!-- IF forumrow.TOPICS == 1 -->{L_TOPIC}<!-- ELSE -->{L_TOPICS}<!-- ENDIF --></span>*/
/* 							</span>*/
/* 							<span class="item-stat item-stat--posts">*/
/* 								<span class="item-stat__count formatted-numcounter">{forumrow.POSTS}</span>*/
/* 								<span class="item-stat__label"><!-- IF forumrow.POSTS == 1 -->{L_POST}<!-- ELSE -->{L_POSTS}<!-- ENDIF --></span>*/
/* 							</span>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 					*/
/* 					<!-- IF forumrow.MODERATORS -->*/
/* 					<span class="forum-moderators"><strong>{forumrow.L_MODERATOR_STR}{L_COLON}</strong> {forumrow.MODERATORS}</span>*/
/* 					<!-- ENDIF -->*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				<!-- IF S_ENABLE_FEEDS and forumrow.S_FEED_ENABLED -->*/
/* 				<a class="item-col-feed" title="{L_FEED} - {forumrow.FORUM_NAME}" href="{U_FEED}?f={forumrow.FORUM_ID}"><i class="fi fi-rss"></i></a>*/
/* 				<!-- ENDIF -->*/
/* 				*/
/* 				<!-- IF forumrow.CLICKS -->*/
/* 				<!--<div class="forum-stats"></div>-->*/
/* 				<div class="item-col-lastpost">*/
/* 					<span class="redirect-counter">{L_REDIRECTS}{L_COLON} <span class="formatted-numcounter">{forumrow.CLICKS}</span></span>*/
/* 				</div>*/
/* 				*/
/* 				<!-- ELSEIF not forumrow.S_IS_LINK -->*/
/* 				<div class="item-col-stats">*/
/* 					<!-- IF forumrow.LAST_POST_TIME -->*/
/* 					<span class="item-stat item-stat--topics">*/
/* 						<span class="item-stat__count formatted-numcounter">{forumrow.TOPICS}</span>*/
/* 						<span class="item-stat__label"><!-- IF forumrow.TOPICS == 1 -->{L_TOPIC}<!-- ELSE -->{L_TOPICS}<!-- ENDIF --></span>*/
/* 					</span>*/
/* 					<span class="item-stat item-stat--posts">*/
/* 						<span class="item-stat__count formatted-numcounter">{forumrow.POSTS}</span>*/
/* 						<span class="item-stat__label"><!-- IF forumrow.POSTS == 1 -->{L_POST}<!-- ELSE -->{L_POSTS}<!-- ENDIF --></span>*/
/* 					</span>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				*/
/* 				<div class="item-col-lastpost">*/
/* 					*/
/* 					<!-- IF forumrow.LAST_POST_TIME -->*/
/* 						<!-- IF forumrow.S_DISPLAY_SUBJECT -->*/
/* 							<!-- EVENT forumlist_body_last_post_title_prepend -->*/
/* 							<a href="{forumrow.U_LAST_POST}" title="{forumrow.LAST_POST_SUBJECT}" class="item-lastpost__title">{forumrow.LAST_POST_SUBJECT_TRUNCATED}</a>*/
/* 						<!-- ENDIF -->*/
/* 						*/
/* 						<div class="item-lastpost__info">*/
/* 							{L_POST_BY_AUTHOR} {forumrow.LAST_POSTER_FULL}*/
/* 							<span class="item-lastpost__time timestamp">{forumrow.LAST_POST_TIME}</span>*/
/* 						</div>*/
/* 					<!-- ELSE -->*/
/* 					{L_NO_POSTS}*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				*/
/* 				<!-- ENDIF -->*/
/* 			<!-- EVENT forumlist_body_forum_row_append -->*/
/* 			</div>*/
/* 			</li>*/
/* 		<!-- EVENT forumlist_body_forum_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF forumrow.S_LAST_ROW -->*/
/* 		</ol>*/
/* 		</div><!-- category-inner END -->*/
/* 	</div><!-- category-wrapper END -->*/
/* 	<!-- EVENT forumlist_body_last_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* <div class="panel panel-default no-forums">*/
/* 		<div class="panel-body">*/
/* 				<strong>{L_NO_FORUMS}</strong>*/
/* 		</div>*/
/* </div>*/
/* <!-- END forumrow -->*/
