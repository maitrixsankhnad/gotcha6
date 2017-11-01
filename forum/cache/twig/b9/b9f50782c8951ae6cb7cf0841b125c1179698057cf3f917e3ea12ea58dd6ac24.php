<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_ae2e6c915ab47cad44c557091bee917d35797232d0f435ca3069575ce4a2ec48 extends Twig_Template
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
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 2
            echo "\t<div class=\"dd-container topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" data-toggle=\"dropdown\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\"><i class=\"fi fi-settings\"></i></span>
\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t";
            // line 5
            // line 6
            echo "\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 7
                echo "\t\t\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t<a href=\"";
                // line 8
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ( !(isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 11
            echo "\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 12
                echo "\t\t\t\t<li class=\"small-icon\">
\t\t\t\t\t<a href=\"";
                // line 13
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link fi fi-bookmark\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\">";
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 16
            echo "\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\"><i class=\"fi fi-arrow-up\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 17
            echo "\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\"><i class=\"fi fi-email\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 18
            echo "\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\"><i class=\"fi fi-printer\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t";
            // line 20
            echo "\t\t</ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 20,  115 => 19,  104 => 18,  93 => 17,  82 => 16,  70 => 13,  67 => 12,  64 => 11,  44 => 8,  35 => 7,  32 => 6,  31 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not S_IS_BOT and (U_WATCH_TOPIC or U_BOOKMARK_TOPIC or U_BUMP_TOPIC or U_EMAIL_TOPIC or U_PRINT_TOPIC or S_DISPLAY_TOPIC_TOOLS) -->*/
/* 	<div class="dd-container topic-tools">*/
/* 		<span title="{L_TOPIC_TOOLS}" data-toggle="dropdown" class="btn btn-default" title="{L_TOPIC_TOOLS}"><i class="fi fi-settings"></i></span>*/
/* 		<ul class="dropdown-menu" role="menu">*/
/* 			<!-- EVENT viewtopic_topic_tools_before -->*/
/* 			<!-- IF U_WATCH_TOPIC -->*/
/* 				<li class="small-icon icon-<!-- IF S_WATCHING_TOPIC -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->">*/
/* 					<a href="{U_WATCH_TOPIC}" class="watch-topic-link" title="{S_WATCH_TOPIC_TITLE}" data-ajax="toggle_link" data-toggle-class="small-icon icon-<!-- IF not S_WATCHING_TOPIC -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-text="{S_WATCH_TOPIC_TOGGLE}" data-toggle-url="{U_WATCH_TOPIC_TOGGLE}" data-update-all=".watch-topic-link">{S_WATCH_TOPIC_TITLE}</a>*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_BOOKMARK_TOPIC -->*/
/* 				<li class="small-icon">*/
/* 					<a href="{U_BOOKMARK_TOPIC}" class="bookmark-link fi fi-bookmark" title="{L_BOOKMARK_TOPIC}" data-ajax="alt_text" data-alt-text="{S_BOOKMARK_TOGGLE}" data-update-all=".bookmark-link">{S_BOOKMARK_TOPIC}</a>*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_BUMP_TOPIC --><li class="small-icon icon-bump"><a href="{U_BUMP_TOPIC}" title="{L_BUMP_TOPIC}" data-ajax="true"><i class="fi fi-arrow-up"></i> {L_BUMP_TOPIC}</a></li><!-- ENDIF -->*/
/* 			<!-- IF U_EMAIL_TOPIC --><li class="small-icon icon-sendemail"><a href="{U_EMAIL_TOPIC}" title="{L_EMAIL_TOPIC}"><i class="fi fi-email"></i> {L_EMAIL_TOPIC}</a></li><!-- ENDIF -->*/
/* 			<!-- IF U_PRINT_TOPIC --><li class="small-icon icon-print"><a href="{U_PRINT_TOPIC}" title="{L_PRINT_TOPIC}" accesskey="p"><i class="fi fi-printer"></i> {L_PRINT_TOPIC}</a></li><!-- ENDIF -->*/
/* 			<!-- EVENT viewtopic_topic_tools_after -->*/
/* 		</ul>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
