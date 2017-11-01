<?php

/* simple_header.html */
class __TwigTemplate_b0abb569d38b22310fd5f8d035ca9d5955691e87430ec286bb99bd93f9d69f72 extends Twig_Template
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
        echo "<!DOCTYPE html>

";
        // line 3
        $location = "components/inc.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("components/inc.html", "simple_header.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        if ((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null)) {
            $location = "slickpanel/inc.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("slickpanel/inc.html", "simple_header.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 5
        echo "<html class=\"slickthemes no-js ";
        if ((isset($context["ST_pinchzoom"]) ? $context["ST_pinchzoom"] : null)) {
            echo "pinchZoom";
        } else {
            echo "no-pinchZoom";
        }
        echo "\" dir=\"";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>

\t<meta charset=\"UTF-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\" />

\t";
        // line 11
        if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic"))) {
            // line 12
            echo "\t<meta name=\"description\" content=\"";
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "\" />";
        }
        // line 13
        echo "
\t";
        // line 14
        if ((isset($context["ST_pinchzoom"]) ? $context["ST_pinchzoom"] : null)) {
            // line 15
            echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=3\" />
\t";
        } else {
            // line 17
            echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" />";
        }
        // line 18
        echo "
\t";
        // line 19
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
\t<title>
\t\t\t";
        // line 21
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        // line 22
        echo "\t\t\t";
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        // line 23
        echo "\t\t\t";
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        // line 24
        echo "\t\t\t";
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "
\t\t\t";
        // line 25
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        // line 26
        echo "\t</title>

\t";
        // line 28
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 29
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\" />";
            }
            // line 30
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\" />";
            }
            // line 31
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\" />";
            }
            // line 32
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\" />";
            }
            // line 33
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\" />";
            }
            // line 34
            echo "\t\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\" />";
            }
            // line 35
            echo "\t\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\" />";
            }
            // line 36
            echo "\t";
        }
        // line 37
        echo "
\t";
        // line 38
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 39
            echo "\t\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\" />
\t";
        }
        // line 41
        echo "
\t";
        // line 42
        if ((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null)) {
            // line 43
            echo "\t<style type=\"text/css\">
\t    html.slickthemes {
\t\t\toverflow-y: scroll;
\t\t  ";
            // line 46
            if ((isset($context["ST_body__bgimg_url"]) ? $context["ST_body__bgimg_url"] : null)) {
                // line 47
                echo "\t\t\tbackground-image: ";
                if (((isset($context["ST_body__bgimg_url"]) ? $context["ST_body__bgimg_url"] : null) == "none")) {
                    echo "none";
                } else {
                    echo "url(\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/backgrounds/";
                    echo (isset($context["ST_body__bgimg_url"]) ? $context["ST_body__bgimg_url"] : null);
                    echo "\")";
                }
                echo ";
\t\t  ";
            }
            // line 49
            echo "
\t\t  ";
            // line 50
            if ((isset($context["ST_body__bgimg_pos"]) ? $context["ST_body__bgimg_pos"] : null)) {
                // line 51
                echo "\t\t  \tbackground-position: ";
                echo (isset($context["ST_body__bgimg_pos"]) ? $context["ST_body__bgimg_pos"] : null);
                echo ";
\t\t  ";
            } else {
                // line 53
                echo "\t\t  \tbackground-position: 0 0;
\t\t  ";
            }
            // line 55
            echo "
\t\t  ";
            // line 56
            if ((isset($context["ST_body__bgimg_size"]) ? $context["ST_body__bgimg_size"] : null)) {
                // line 57
                echo "\t\t\tbackground-size: ";
                echo (isset($context["ST_body__bgimg_size"]) ? $context["ST_body__bgimg_size"] : null);
                echo ";
\t\t  ";
            } else {
                // line 59
                echo "\t\t  \tbackground-size: cover;
\t\t  ";
            }
            // line 61
            echo "\t\t\tbackground-color: ";
            echo (isset($context["ST_body__bgcolor"]) ? $context["ST_body__bgcolor"] : null);
            echo ";
\t\t\tbackground-attachment: fixed;
\t\t}
\t</style>
\t";
        }
        // line 66
        echo "
\t";
        // line 67
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 68
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/css/main_rtl.min.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
\t";
        } else {
            // line 70
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/css/main.min.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";
        }
        // line 71
        echo "
\t<link href=\"";
        // line 72
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/css/mdi.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

\t<link href=\"";
        // line 74
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/print.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" title=\"printonly\" />

\t";
        // line 76
        if ((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null)) {
            // line 77
            echo "\t";
            $location = "slickpanel/css.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("slickpanel/css.html", "simple_header.html", 77)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 78
        echo "
\t";
        // line 79
        $location = "custom/extra_css.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/extra_css.html", "simple_header.html", 79)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 80
        echo "
\t";
        // line 81
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 82
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
\t";
        }
        // line 84
        echo "
\t";
        // line 85
        // line 86
        echo "
\t";
        // line 87
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "
\t";
        // line 88
        if (((isset($context["U_ACP"]) ? $context["U_ACP"] : null) && (isset($context["THEMEPANEL_INSTALLED"]) ? $context["THEMEPANEL_INSTALLED"] : null))) {
            // line 89
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/css/spectrum/spectrum.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
            // line 90
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/css/themepanel.css\" rel=\"stylesheet\" type=\"text/css\" />
\t";
        }
        // line 92
        echo "
\t";
        // line 93
        // line 94
        echo "
\t<style id=\"elementState_restore\" type=\"text/css\"></style>
\t<script type=\"text/javascript\">
\t\twindow._st = window._st || {};
\t\t_st.onloadfunctions = _st.onloadfunctions || [];
\t\t_st.utils = {};
\t</script>

</head>
<body id=\"phpbb\" class=\"section-";
        // line 103
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ST_post_authorAlign", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ST_container__type", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ST_roundAvatars", array());
        echo " ";
        echo (isset($context["ST_navbar__pos"]) ? $context["ST_navbar__pos"] : null);
        echo "\">
<div id=\"st-bgimg\"></div>
";
    }

    public function getTemplateName()
    {
        return "simple_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 103,  405 => 94,  404 => 93,  401 => 92,  396 => 90,  391 => 89,  389 => 88,  385 => 87,  382 => 86,  381 => 85,  378 => 84,  370 => 82,  368 => 81,  365 => 80,  353 => 79,  350 => 78,  336 => 77,  334 => 76,  327 => 74,  320 => 72,  317 => 71,  310 => 70,  302 => 68,  300 => 67,  297 => 66,  288 => 61,  284 => 59,  278 => 57,  276 => 56,  273 => 55,  269 => 53,  263 => 51,  261 => 50,  258 => 49,  244 => 47,  242 => 46,  237 => 43,  235 => 42,  232 => 41,  226 => 39,  224 => 38,  221 => 37,  218 => 36,  201 => 35,  186 => 34,  175 => 33,  164 => 32,  153 => 31,  142 => 30,  131 => 29,  129 => 28,  125 => 26,  120 => 25,  115 => 24,  106 => 23,  100 => 22,  94 => 21,  89 => 19,  86 => 18,  83 => 17,  79 => 15,  77 => 14,  74 => 13,  69 => 12,  67 => 11,  49 => 5,  35 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <!-- INCLUDE components/inc.html -->*/
/* <!-- IF SLICKPANEL_INSTALLED --><!-- INCLUDE slickpanel/inc.html --><!-- ENDIF -->*/
/* <html class="slickthemes no-js <!-- IF ST_pinchzoom -->pinchZoom<!-- ELSE -->no-pinchZoom<!-- ENDIF -->" dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* */
/* 	<meta charset="UTF-8" />*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />*/
/* */
/* 	<!-- IF SCRIPT_NAME == 'viewforum' or SCRIPT_NAME == 'viewtopic' -->*/
/* 	<meta name="description" content="{FORUM_DESC}" /><!-- ENDIF -->*/
/* */
/* 	<!-- IF ST_pinchzoom -->*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />*/
/* 	<!-- ELSE -->*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /><!-- ENDIF -->*/
/* */
/* 	{META}*/
/* 	<title>*/
/* 			<!-- IF UNREAD_NOTIFICATIONS_COUNT -->({UNREAD_NOTIFICATIONS_COUNT}) <!-- ENDIF -->*/
/* 			<!-- IF not S_VIEWTOPIC and not S_VIEWFORUM -->{SITENAME} - <!-- ENDIF -->*/
/* 			<!-- IF S_IN_MCP -->{L_MCP} - <!-- ELSEIF S_IN_UCP -->{L_UCP} - <!-- ENDIF -->*/
/* 			{PAGE_TITLE}*/
/* 			<!-- IF S_VIEWTOPIC or S_VIEWFORUM --> - {SITENAME}<!-- ENDIF -->*/
/* 	</title>*/
/* */
/* 	<!-- IF S_ENABLE_FEEDS -->*/
/* 		<!-- IF S_ENABLE_FEEDS_OVERALL --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {SITENAME}" href="{U_FEED}" /><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_NEWS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_NEWS}" href="{U_FEED}?mode=news" /><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_FORUMS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_ALL_FORUMS}" href="{U_FEED}?mode=forums" /><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_TOPICS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_NEW}" href="{U_FEED}?mode=topics" /><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}" href="{U_FEED}?mode=topics_active" /><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}" href="{U_FEED}?f={S_FORUM_ID}" /><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}" href="{U_FEED}?f={S_FORUM_ID}&amp;t={S_TOPIC_ID}" /><!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF U_CANONICAL -->*/
/* 		<link rel="canonical" href="{U_CANONICAL}" />*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF SLICKPANEL_INSTALLED -->*/
/* 	<style type="text/css">*/
/* 	    html.slickthemes {*/
/* 			overflow-y: scroll;*/
/* 		  <!-- IF ST_body__bgimg_url -->*/
/* 			background-image: <!-- IF ST_body__bgimg_url == 'none' -->none<!-- ELSE -->url("{T_THEME_PATH}/images/backgrounds/{ST_body__bgimg_url}")<!-- ENDIF -->;*/
/* 		  <!-- ENDIF -->*/
/* */
/* 		  <!-- IF ST_body__bgimg_pos -->*/
/* 		  	background-position: {ST_body__bgimg_pos};*/
/* 		  <!-- ELSE -->*/
/* 		  	background-position: 0 0;*/
/* 		  <!-- ENDIF -->*/
/* */
/* 		  <!-- IF ST_body__bgimg_size -->*/
/* 			background-size: {ST_body__bgimg_size};*/
/* 		  <!-- ELSE -->*/
/* 		  	background-size: cover;*/
/* 		  <!-- ENDIF -->*/
/* 			background-color: {ST_body__bgcolor};*/
/* 			background-attachment: fixed;*/
/* 		}*/
/* 	</style>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 		<link href="{T_THEME_PATH}/css/main_rtl.min.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" />*/
/* 	<!-- ELSE -->*/
/* 		<link href="{T_THEME_PATH}/css/main.min.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" /><!-- ENDIF -->*/
/* */
/* 	<link href="{T_THEME_PATH}/css/mdi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css">*/
/* */
/* 	<link href="{T_THEME_PATH}/print.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="print" title="printonly" />*/
/* */
/* 	<!-- IF SLICKPANEL_INSTALLED -->*/
/* 	<!-- INCLUDE slickpanel/css.html --><!-- ENDIF -->*/
/* */
/* 	<!-- INCLUDE custom/extra_css.html -->*/
/* */
/* 	<!-- IF S_PLUPLOAD -->*/
/* 		<link href="{T_THEME_PATH}/plupload.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen, projection" />*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT overall_header_head_append -->*/
/* */
/* 	{$STYLESHEETS}*/
/* 	<!-- IF U_ACP and THEMEPANEL_INSTALLED -->*/
/* 		<link href="{T_THEME_PATH}/css/spectrum/spectrum.css" rel="stylesheet" type="text/css" />*/
/* 		<link href="{T_THEME_PATH}/css/themepanel.css" rel="stylesheet" type="text/css" />*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT overall_header_stylesheets_after -->*/
/* */
/* 	<style id="elementState_restore" type="text/css"></style>*/
/* 	<script type="text/javascript">*/
/* 		window._st = window._st || {};*/
/* 		_st.onloadfunctions = _st.onloadfunctions || [];*/
/* 		_st.utils = {};*/
/* 	</script>*/
/* */
/* </head>*/
/* <body id="phpbb" class="section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {BODY_CLASS}{$ST_post_authorAlign}{$ST_container__type}{$ST_roundAvatars} {ST_navbar__pos}">*/
/* <div id="st-bgimg"></div>*/
/* */
