<?php

/* overall_header.html */
class __TwigTemplate_ca6d91dba82636092e8f047abb2b64f3d3c2c167a45861c6a7e5113387a84e72 extends Twig_Template
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
        // line 2
        $location = "components/inc.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("components/inc.html", "overall_header.html", 2)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 3
        if ((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null)) {
            // line 4
            echo "\t";
            $location = "slickpanel/inc.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("slickpanel/inc.html", "overall_header.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "<html class=\"slickthemes no-js ";
        if ((isset($context["ST_timestamps"]) ? $context["ST_timestamps"] : null)) {
            echo "timestamps ";
        }
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
        // line 12
        if ((isset($context["ST_pinchzoom"]) ? $context["ST_pinchzoom"] : null)) {
            // line 13
            echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=3\" />
\t";
        } else {
            // line 15
            echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" />";
        }
        // line 16
        echo "
\t";
        // line 17
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "

\t<title>";
        // line 19
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

\t";
        // line 21
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 22
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
            // line 23
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
            // line 24
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
            // line 25
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
            // line 26
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
            // line 27
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
            // line 28
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
            // line 29
            echo "\t";
        }
        // line 30
        echo "
\t";
        // line 31
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 32
            echo "\t\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\" />
\t";
        }
        // line 34
        echo "
\t";
        // line 35
        if ((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null)) {
            // line 36
            echo "\t<style type=\"text/css\">
\t\thtml.slickthemes {
\t\t\toverflow-y: scroll;
\t\t\tbackground-attachment: fixed;
\t\t}
\t\thtml.slickthemes, #st-bgimg {
\t\t\tbackground-color: ";
            // line 42
            echo (isset($context["ST_body__bgcolor"]) ? $context["ST_body__bgcolor"] : null);
            echo ";

\t\t\t";
            // line 44
            if ((isset($context["ST_body__bgimg_url"]) ? $context["ST_body__bgimg_url"] : null)) {
                // line 45
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
\t\t\t";
            }
            // line 47
            echo "
\t\t\t";
            // line 48
            if ((isset($context["ST_body__bgimg_pos"]) ? $context["ST_body__bgimg_pos"] : null)) {
                // line 49
                echo "\t\t\t\tbackground-position: ";
                echo (isset($context["ST_body__bgimg_pos"]) ? $context["ST_body__bgimg_pos"] : null);
                echo ";
\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\tbackground-position: 0 0;
\t\t\t";
            }
            // line 53
            echo "
\t\t\t";
            // line 54
            if ((isset($context["ST_body__bgimg_size"]) ? $context["ST_body__bgimg_size"] : null)) {
                // line 55
                echo "\t\t\tbackground-size: ";
                echo (isset($context["ST_body__bgimg_size"]) ? $context["ST_body__bgimg_size"] : null);
                echo ";
\t\t\t-webkit-background-size: ";
                // line 56
                echo (isset($context["ST_body__bgimg_size"]) ? $context["ST_body__bgimg_size"] : null);
                echo ";
\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\tbackground-size: cover;
\t\t\t";
            }
            // line 60
            echo "\t\t}
\t\t";
            // line 61
            if ((isset($context["ST_body__bgimg_url"]) ? $context["ST_body__bgimg_url"] : null)) {
                // line 62
                echo "\t\t#st-bgimg {
\t\t\tbackface-visibility: hidden;
\t\t\t-ms-backface-visibility: hidden;
\t\t\t-webkit-backface-visibility: hidden;
\t\t}
\t\t";
            }
            // line 68
            echo "\t</style>
\t";
        }
        // line 70
        echo "
\t";
        // line 71
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 72
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/css/main_rtl.min.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
\t";
        } else {
            // line 74
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/css/main.min.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";
        }
        // line 75
        echo "
\t<link href=\"";
        // line 76
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/print.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" title=\"printonly\" />

\t";
        // line 78
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 79
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";
        }
        // line 80
        echo "
\t";
        // line 81
        // line 82
        echo "
\t";
        // line 83
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

\t";
        // line 85
        if ((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null)) {
            // line 86
            echo "\t";
            $location = "slickpanel/css.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("slickpanel/css.html", "overall_header.html", 86)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 87
        echo "
\t";
        // line 88
        if (((isset($context["U_ACP"]) ? $context["U_ACP"] : null) && (isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null))) {
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
\t";
        // line 95
        $location = "custom/extra_css.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/extra_css.html", "overall_header.html", 95)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 96
        echo "\t<style type=\"text/css\">
\t";
        // line 97
        $location = "custom/custom.css";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/custom.css", "overall_header.html", 97)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 98
        echo "\t</style>

\t<style id=\"elementState_restore\" type=\"text/css\"></style>
\t<script type=\"text/javascript\">
\t\twindow._st = window._st || {};
\t\t_st.onloadfunctions = _st.onloadfunctions || [];
\t\t_st.utils = {};
\t</script>

</head>
<body id=\"phpbb\" class=\"section-";
        // line 108
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
        if ((isset($context["ST_grayscale_icons"]) ? $context["ST_grayscale_icons"] : null)) {
            echo " grayscaleForumIcons";
        }
        echo "\">


\t<link href=\"";
        // line 111
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/css/mdi.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

<div id=\"st-bgimg\"></div>
<!-- skip to content -->
<a href=\"#start__content\" class=\"skiplink\" style=\"display: none\">";
        // line 115
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a>

";
        // line 117
        // line 118
        echo "
<div class=\"offcanvas-wrapper\">
<div class=\"offcanvas-content\">
\t<a href=\"javascript:void(0)\" class=\"offcanvas-toggle offcanvas-backlink\">
\t\t<i class=\"fi fi-arrow-";
        // line 122
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo "\"></i>
\t</a>
\t";
        // line 124
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 125
            echo "\t";
            $location = "components/quicksearch.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/quicksearch.html", "overall_header.html", 125)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 126
            echo "\t";
            $location = "components/navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/navigation.html", "overall_header.html", 126)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 127
            echo "\t";
        }
        // line 128
        echo "</div>

<div class=\"oncanvas-content\">
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>

\t";
        // line 134
        if (((isset($context["ST_navbar__pos"]) ? $context["ST_navbar__pos"] : null) != "h-nb")) {
            // line 135
            echo "\t<div class=\"utility-bar";
            if ((isset($context["ST_dark_navbar"]) ? $context["ST_dark_navbar"] : null)) {
                echo " navbar-dark";
            }
            echo " clearfix stickyItem\" role=\"menubar\">
\t\t<div class=\"container\">
\t\t\t";
            // line 137
            $location = "components/navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/navigation.html", "overall_header.html", 137)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 138
            echo "\t\t\t";
            $location = "components/user-area.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/user-area.html", "overall_header.html", 138)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 139
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 142
        echo "
\t<header class=\"main-header";
        // line 143
        if ((isset($context["ST_header__transparent"]) ? $context["ST_header__transparent"] : null)) {
            echo " transparent";
        }
        echo "\">
\t\t<div class=\"container\">

\t\t\t\t<!-- Branding: LOGO -->
\t\t\t\t<div class=\"branding\">
\t\t\t\t\t\t<a class=\"logo\" href=\"";
        // line 148
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\">
\t\t\t\t\t\t";
        // line 149
        if (((isset($context["ST_logo__type"]) ? $context["ST_logo__type"] : null) == "image")) {
            // line 150
            echo "\t\t\t\t\t\t<h1><img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/";
            echo (isset($context["ST_logo__image_filename"]) ? $context["ST_logo__image_filename"] : null);
            echo "\" alt=\"";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo "\" /></h1>
\t\t\t\t\t\t";
        } else {
            // line 152
            echo "\t\t\t\t\t\t<h1>";
            if ((isset($context["ST_logo__text"]) ? $context["ST_logo__text"] : null)) {
                echo (isset($context["ST_logo__text"]) ? $context["ST_logo__text"] : null);
            } else {
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            }
            echo "</h1>
\t\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\"site-description\">";
        // line 155
        echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        echo "</p>
\t\t\t\t</div>

\t\t\t\t<!-- QuickSearch -->
\t\t\t\t";
        // line 159
        $location = "components/quicksearch.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("components/quicksearch.html", "overall_header.html", 159)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 160
        echo "
\t\t</div>
\t</header>

\t";
        // line 164
        if (((isset($context["ST_navbar__pos"]) ? $context["ST_navbar__pos"] : null) == "h-nb")) {
            // line 165
            echo "\t<div class=\"utility-bar";
            if ((isset($context["ST_dark_navbar"]) ? $context["ST_dark_navbar"] : null)) {
                echo " navbar-dark";
            }
            echo " clearfix\" role=\"menubar\">
\t\t<div class=\"container\">
\t\t\t";
            // line 167
            $location = "components/navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/navigation.html", "overall_header.html", 167)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 168
            echo "\t\t\t";
            $location = "components/user-area.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/user-area.html", "overall_header.html", 168)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 169
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 172
        echo "
\t";
        // line 173
        // line 174
        echo "

\t<div id=\"page-body\">

\t\t";
        // line 178
        $value = "top";
        $context['definition']->set('breadcrumbsPos', $value);
        // line 179
        echo "\t\t";
        $location = "components/breadcrumbs.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("components/breadcrumbs.html", "overall_header.html", 179)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 180
        echo "
\t\t<div class=\"container\">

\t\t";
        // line 183
        if (((isset($context["ST_oneall__header"]) ? $context["ST_oneall__header"] : null) != "0")) {
            // line 184
            echo "\t\t\t";
            // line 185
            echo "\t\t";
        }
        // line 186
        echo "
\t\t";
        // line 187
        // line 188
        echo "
\t\t<a id=\"start__content\" class=\"anchor\"></a>
\t\t";
        // line 190
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 191
            echo "\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t<strong>";
            // line 192
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t</div>
\t\t";
        }
        // line 195
        echo "
\t\t<!-- Global Alerts -->
\t\t";
        // line 197
        $location = "custom/alerts_global.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/alerts_global.html", "overall_header.html", 197)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  733 => 197,  729 => 195,  720 => 192,  717 => 191,  715 => 190,  711 => 188,  710 => 187,  707 => 186,  704 => 185,  702 => 184,  700 => 183,  695 => 180,  682 => 179,  679 => 178,  673 => 174,  672 => 173,  669 => 172,  664 => 169,  651 => 168,  639 => 167,  631 => 165,  629 => 164,  623 => 160,  611 => 159,  604 => 155,  601 => 154,  591 => 152,  581 => 150,  579 => 149,  565 => 148,  555 => 143,  552 => 142,  547 => 139,  534 => 138,  522 => 137,  514 => 135,  512 => 134,  504 => 128,  501 => 127,  488 => 126,  475 => 125,  473 => 124,  468 => 122,  462 => 118,  461 => 117,  456 => 115,  447 => 111,  429 => 108,  417 => 98,  405 => 97,  402 => 96,  390 => 95,  387 => 94,  386 => 93,  383 => 92,  378 => 90,  373 => 89,  371 => 88,  368 => 87,  354 => 86,  352 => 85,  347 => 83,  344 => 82,  343 => 81,  340 => 80,  333 => 79,  331 => 78,  324 => 76,  321 => 75,  314 => 74,  306 => 72,  304 => 71,  301 => 70,  297 => 68,  289 => 62,  287 => 61,  284 => 60,  280 => 58,  275 => 56,  270 => 55,  268 => 54,  265 => 53,  261 => 51,  255 => 49,  253 => 48,  250 => 47,  236 => 45,  234 => 44,  229 => 42,  221 => 36,  219 => 35,  216 => 34,  210 => 32,  208 => 31,  205 => 30,  202 => 29,  185 => 28,  170 => 27,  159 => 26,  148 => 25,  137 => 24,  126 => 23,  115 => 22,  113 => 21,  88 => 19,  83 => 17,  80 => 16,  77 => 15,  73 => 13,  71 => 12,  50 => 6,  36 => 4,  34 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!-- INCLUDE components/inc.html -->*/
/* <!-- IF SLICKPANEL_INSTALLED -->*/
/* 	<!-- INCLUDE slickpanel/inc.html -->*/
/* <!-- ENDIF -->*/
/* <html class="slickthemes no-js <!-- IF ST_timestamps -->timestamps <!-- ENDIF --><!-- IF ST_pinchzoom -->pinchZoom<!-- ELSE -->no-pinchZoom<!-- ENDIF -->" dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* */
/* 	<meta charset="UTF-8" />*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />*/
/* */
/* 	<!-- IF ST_pinchzoom -->*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3" />*/
/* 	<!-- ELSE -->*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /><!-- ENDIF -->*/
/* */
/* 	{META}*/
/* */
/* 	<title><!-- IF UNREAD_NOTIFICATIONS_COUNT -->({UNREAD_NOTIFICATIONS_COUNT}) <!-- ENDIF --><!-- IF not S_VIEWTOPIC and not S_VIEWFORUM -->{SITENAME} - <!-- ENDIF --><!-- IF S_IN_MCP -->{L_MCP} - <!-- ELSEIF S_IN_UCP -->{L_UCP} - <!-- ENDIF -->{PAGE_TITLE}<!-- IF S_VIEWTOPIC or S_VIEWFORUM --> - {SITENAME}<!-- ENDIF --></title>*/
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
/* 		html.slickthemes {*/
/* 			overflow-y: scroll;*/
/* 			background-attachment: fixed;*/
/* 		}*/
/* 		html.slickthemes, #st-bgimg {*/
/* 			background-color: {ST_body__bgcolor};*/
/* */
/* 			<!-- IF ST_body__bgimg_url -->*/
/* 			background-image: <!-- IF ST_body__bgimg_url == 'none' -->none<!-- ELSE -->url("{T_THEME_PATH}/images/backgrounds/{ST_body__bgimg_url}")<!-- ENDIF -->;*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF ST_body__bgimg_pos -->*/
/* 				background-position: {ST_body__bgimg_pos};*/
/* 			<!-- ELSE -->*/
/* 				background-position: 0 0;*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF ST_body__bgimg_size -->*/
/* 			background-size: {ST_body__bgimg_size};*/
/* 			-webkit-background-size: {ST_body__bgimg_size};*/
/* 			<!-- ELSE -->*/
/* 				background-size: cover;*/
/* 			<!-- ENDIF -->*/
/* 		}*/
/* 		<!-- IF ST_body__bgimg_url -->*/
/* 		#st-bgimg {*/
/* 			backface-visibility: hidden;*/
/* 			-ms-backface-visibility: hidden;*/
/* 			-webkit-backface-visibility: hidden;*/
/* 		}*/
/* 		<!-- ENDIF -->*/
/* 	</style>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 		<link href="{T_THEME_PATH}/css/main_rtl.min.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" />*/
/* 	<!-- ELSE -->*/
/* 		<link href="{T_THEME_PATH}/css/main.min.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" /><!-- ENDIF -->*/
/* */
/* 	<link href="{T_THEME_PATH}/print.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="print" title="printonly" />*/
/* */
/* 	<!-- IF S_PLUPLOAD -->*/
/* 		<link href="{T_THEME_PATH}/plupload.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" /><!-- ENDIF -->*/
/* */
/* 	<!-- EVENT overall_header_head_append -->*/
/* */
/* 	{$STYLESHEETS}*/
/* */
/* 	<!-- IF SLICKPANEL_INSTALLED -->*/
/* 	<!-- INCLUDE slickpanel/css.html --><!-- ENDIF -->*/
/* */
/* 	<!-- IF U_ACP and SLICKPANEL_INSTALLED -->*/
/* 		<link href="{T_THEME_PATH}/css/spectrum/spectrum.css" rel="stylesheet" type="text/css" />*/
/* 		<link href="{T_THEME_PATH}/css/themepanel.css" rel="stylesheet" type="text/css" />*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT overall_header_stylesheets_after -->*/
/* */
/* 	<!-- INCLUDE custom/extra_css.html -->*/
/* 	<style type="text/css">*/
/* 	<!-- INCLUDE custom/custom.css -->*/
/* 	</style>*/
/* */
/* 	<style id="elementState_restore" type="text/css"></style>*/
/* 	<script type="text/javascript">*/
/* 		window._st = window._st || {};*/
/* 		_st.onloadfunctions = _st.onloadfunctions || [];*/
/* 		_st.utils = {};*/
/* 	</script>*/
/* */
/* </head>*/
/* <body id="phpbb" class="section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {BODY_CLASS}{$ST_post_authorAlign}{$ST_container__type}{$ST_roundAvatars} {ST_navbar__pos}<!-- IF ST_grayscale_icons --> grayscaleForumIcons<!-- ENDIF -->">*/
/* */
/* */
/* 	<link href="{T_THEME_PATH}/css/mdi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css">*/
/* */
/* <div id="st-bgimg"></div>*/
/* <!-- skip to content -->*/
/* <a href="#start__content" class="skiplink" style="display: none">{L_SKIP}</a>*/
/* */
/* <!-- EVENT overall_header_body_before -->*/
/* */
/* <div class="offcanvas-wrapper">*/
/* <div class="offcanvas-content">*/
/* 	<a href="javascript:void(0)" class="offcanvas-toggle offcanvas-backlink">*/
/* 		<i class="fi fi-arrow-{S_CONTENT_FLOW_BEGIN}"></i>*/
/* 	</a>*/
/* 	<!-- IF not S_IS_BOT -->*/
/* 	<!-- INCLUDE components/quicksearch.html -->*/
/* 	<!-- INCLUDE components/navigation.html -->*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* */
/* <div class="oncanvas-content">*/
/* <div id="wrap">*/
/* 	<a id="top" class="anchor" accesskey="t"></a>*/
/* */
/* 	<!-- IF ST_navbar__pos != 'h-nb' -->*/
/* 	<div class="utility-bar<!-- IF ST_dark_navbar --> navbar-dark<!-- ENDIF --> clearfix stickyItem" role="menubar">*/
/* 		<div class="container">*/
/* 			<!-- INCLUDE components/navigation.html -->*/
/* 			<!-- INCLUDE components/user-area.html -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<header class="main-header<!-- IF ST_header__transparent --> transparent<!-- ENDIF -->">*/
/* 		<div class="container">*/
/* */
/* 				<!-- Branding: LOGO -->*/
/* 				<div class="branding">*/
/* 						<a class="logo" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->" title="<!-- IF U_SITE_HOME -->{L_SITE_HOME}<!-- ELSE -->{L_INDEX}<!-- ENDIF -->">*/
/* 						<!-- IF ST_logo__type == 'image' -->*/
/* 						<h1><img src="{T_THEME_PATH}/images/{ST_logo__image_filename}" alt="{SITENAME}" /></h1>*/
/* 						<!-- ELSE -->*/
/* 						<h1><!-- IF ST_logo__text -->{ST_logo__text}<!-- ELSE -->{SITENAME}<!-- ENDIF --></h1>*/
/* 						<!-- ENDIF -->*/
/* 						</a>*/
/* 						<p class="site-description">{SITE_DESCRIPTION}</p>*/
/* 				</div>*/
/* */
/* 				<!-- QuickSearch -->*/
/* 				<!-- INCLUDE components/quicksearch.html -->*/
/* */
/* 		</div>*/
/* 	</header>*/
/* */
/* 	<!-- IF ST_navbar__pos == 'h-nb' -->*/
/* 	<div class="utility-bar<!-- IF ST_dark_navbar --> navbar-dark<!-- ENDIF --> clearfix" role="menubar">*/
/* 		<div class="container">*/
/* 			<!-- INCLUDE components/navigation.html -->*/
/* 			<!-- INCLUDE components/user-area.html -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT overall_header_page_body_before -->*/
/* */
/* */
/* 	<div id="page-body">*/
/* */
/* 		<!-- DEFINE $breadcrumbsPos = 'top' -->*/
/* 		<!-- INCLUDE components/breadcrumbs.html -->*/
/* */
/* 		<div class="container">*/
/* */
/* 		<!-- IF ST_oneall__header != '0' -->*/
/* 			<!-- EVENT st_oneall_hook -->*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_header_content_before -->*/
/* */
/* 		<a id="start__content" class="anchor"></a>*/
/* 		<!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN and (U_MCP or U_ACP) -->*/
/* 		<div class="alert alert-warning" role="alert">*/
/* 			<strong>{L_INFORMATION}{L_COLON}</strong> {L_BOARD_DISABLED}*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- Global Alerts -->*/
/* 		<!-- INCLUDE custom/alerts_global.html -->*/
/* */
