<?php

/* components/inc.html */
class __TwigTemplate_a4fdf32e0821b559aeffab2acbbddbb3eeceb98f5ed1f865715cccb9b4459092 extends Twig_Template
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
        echo "<!--
  _   _      _ _         _   _                   _ 
 | | | | ___| | | ___   | |_| |__   ___ _ __ ___| |
 | |_| |/ _ \\ | |/ _ \\  | __| '_ \\ / _ \\ '__/ _ \\ |
 |  _  |  __/ | | (_) | | |_| | | |  __/ | |  __/_|
 |_| |_|\\___|_|_|\\___/   \\__|_| |_|\\___|_|  \\___(_)
      
phpBB style name: Canvas
Author:  Tushar Singh (slickthemes.net)
-->
<!-- Here be dragons -->
";
        // line 12
        $value = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/images/no_avatar.jpg");
        $context['definition']->set('NO_AVATAR_URL', $value);
        // line 13
        $value = (((("<img src=\"" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/images/no_avatar.jpg\" alt=\"") . (isset($context["L_USER_AVATAR"]) ? $context["L_USER_AVATAR"] : null)) . "\" />");
        $context['definition']->set('NO_AVATAR', $value);
        // line 14
        if ((isset($context["ST_post_authorAlign"]) ? $context["ST_post_authorAlign"] : null)) {
            // line 15
            echo "    ";
            $value = ((" " . (isset($context["ST_post_authorAlign"]) ? $context["ST_post_authorAlign"] : null)) . "");
            $context['definition']->set('ST_post_authorAlign', $value);
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $value = " postAuthorAlign-left";
            $context['definition']->set('ST_post_authorAlign', $value);
        }
        // line 18
        echo "
";
        // line 19
        if ((isset($context["ST_container__type"]) ? $context["ST_container__type"] : null)) {
            // line 20
            echo "    ";
            $value = ((" layout-" . (isset($context["ST_container__type"]) ? $context["ST_container__type"] : null)) . "");
            $context['definition']->set('ST_container__type', $value);
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $value = " layout-boxed";
            $context['definition']->set('ST_container__type', $value);
        }
        // line 23
        echo "
";
        // line 24
        if ((isset($context["ST_roundAvatars"]) ? $context["ST_roundAvatars"] : null)) {
            // line 25
            echo "    ";
            $value = " roundAvatars-enabled";
            $context['definition']->set('ST_roundAvatars', $value);
        }
    }

    public function getTemplateName()
    {
        return "components/inc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  72 => 24,  69 => 23,  64 => 22,  61 => 21,  57 => 20,  55 => 19,  52 => 18,  47 => 17,  44 => 16,  40 => 15,  38 => 14,  35 => 13,  32 => 12,  19 => 1,);
    }
}
/* <!--*/
/*   _   _      _ _         _   _                   _ */
/*  | | | | ___| | | ___   | |_| |__   ___ _ __ ___| |*/
/*  | |_| |/ _ \ | |/ _ \  | __| '_ \ / _ \ '__/ _ \ |*/
/*  |  _  |  __/ | | (_) | | |_| | | |  __/ | |  __/_|*/
/*  |_| |_|\___|_|_|\___/   \__|_| |_|\___|_|  \___(_)*/
/*       */
/* phpBB style name: Canvas*/
/* Author:  Tushar Singh (slickthemes.net)*/
/* -->*/
/* <!-- Here be dragons -->*/
/* <!-- DEFINE $NO_AVATAR_URL = '{T_THEME_PATH}/images/no_avatar.jpg' -->*/
/* <!-- DEFINE $NO_AVATAR = '<img src="{T_THEME_PATH}/images/no_avatar.jpg" alt="{L_USER_AVATAR}" />' -->*/
/* <!-- IF ST_post_authorAlign -->*/
/*     <!-- DEFINE $ST_post_authorAlign = ' {ST_post_authorAlign}' -->*/
/*     <!-- ELSE -->*/
/*     <!-- DEFINE $ST_post_authorAlign = ' postAuthorAlign-left' --><!-- ENDIF -->*/
/* */
/* <!-- IF ST_container__type -->*/
/*     <!-- DEFINE $ST_container__type = ' layout-{ST_container__type}' -->*/
/*     <!-- ELSE -->*/
/*     <!-- DEFINE $ST_container__type = ' layout-boxed' --><!-- ENDIF -->*/
/* */
/* <!-- IF ST_roundAvatars -->*/
/*     <!-- DEFINE $ST_roundAvatars = ' roundAvatars-enabled' --><!-- ENDIF -->*/
