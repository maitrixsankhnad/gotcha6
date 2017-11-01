<?php

/* slickpanel/css.html */
class __TwigTemplate_baf23af6754b350d5e61da7bf2aa540151b741d4ed7601844ef2df55f8518f21 extends Twig_Template
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
        echo "<style type=\"text/css\" id=\"st_userconfig_CSS\">
  /* slickpanel overrides. please do not eat */
  
  /* Typography */
  ";
        // line 5
        if ((isset($context["ST_type__body_fontfamily"]) ? $context["ST_type__body_fontfamily"] : null)) {
            // line 6
            echo "  body {
\tfont-family: ";
            // line 7
            echo (isset($context["ST_type__body_fontfamily"]) ? $context["ST_type__body_fontfamily"] : null);
            echo ";
  }
  ";
        }
        // line 10
        echo "  
  ";
        // line 11
        if ((isset($context["ST_container__width"]) ? $context["ST_container__width"] : null)) {
            // line 12
            echo "  ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__container_width", array());
            echo " {
\tmax-width: ";
            // line 13
            echo (isset($context["ST_container__width"]) ? $context["ST_container__width"] : null);
            echo "px;
  }
  ";
        }
        // line 16
        echo "  
  ";
        // line 17
        if ((isset($context["ST_type__navbar_fontfamily"]) ? $context["ST_type__navbar_fontfamily"] : null)) {
            // line 18
            echo "  .navigation > li > a {
\tfont-family: ";
            // line 19
            echo (isset($context["ST_type__navbar_fontfamily"]) ? $context["ST_type__navbar_fontfamily"] : null);
            echo ";
  }
  ";
        }
        // line 22
        echo "  
  .postbody .content {
\t";
        // line 24
        if ((isset($context["ST_type__content_fontfamily"]) ? $context["ST_type__content_fontfamily"] : null)) {
            // line 25
            echo "\tfont-family: ";
            echo (isset($context["ST_type__content_fontfamily"]) ? $context["ST_type__content_fontfamily"] : null);
            echo ";
\t";
        }
        // line 27
        echo "\t";
        if ((isset($context["ST_type__content_fontsize"]) ? $context["ST_type__content_fontsize"] : null)) {
            // line 28
            echo "\tfont-size: ";
            echo (isset($context["ST_type__content_fontsize"]) ? $context["ST_type__content_fontsize"] : null);
            echo "px;
\t";
        }
        // line 30
        echo "  }
  
  /* text logo */
  ";
        // line 33
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__textlogo", array());
        echo " {
\t";
        // line 34
        if ((isset($context["ST_logo__fontfamily"]) ? $context["ST_logo__fontfamily"] : null)) {
            // line 35
            echo "\tfont-family: ";
            echo (isset($context["ST_logo__fontfamily"]) ? $context["ST_logo__fontfamily"] : null);
            echo ";";
        }
        // line 36
        echo "\tcolor: ";
        echo (isset($context["ST_logo__color"]) ? $context["ST_logo__color"] : null);
        echo ";
\t";
        // line 37
        if ((isset($context["ST_logo__fontsize"]) ? $context["ST_logo__fontsize"] : null)) {
            // line 38
            echo "\tfont-size: ";
            echo (isset($context["ST_logo__fontsize"]) ? $context["ST_logo__fontsize"] : null);
            echo "px;
\t";
        }
        // line 40
        echo "\t";
        if ((isset($context["ST_logo__fontweight"]) ? $context["ST_logo__fontweight"] : null)) {
            // line 41
            echo "\tfont-weight: ";
            echo (isset($context["ST_logo__fontweight"]) ? $context["ST_logo__fontweight"] : null);
            echo ";
\t";
        }
        // line 43
        echo "  }
  
  /* image logo */
  ";
        // line 46
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__imagelogo", array());
        echo " {
\tmax-width: ";
        // line 47
        echo (isset($context["ST_logo__image_width"]) ? $context["ST_logo__image_width"] : null);
        echo "px;
  }
  
  /* colors */
  ";
        // line 51
        if ((isset($context["ST_colors__primary"]) ? $context["ST_colors__primary"] : null)) {
            // line 52
            echo "  ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__colors__primary_bg", array());
            echo " {
\tbackground-color: ";
            // line 53
            echo (isset($context["ST_colors__primary"]) ? $context["ST_colors__primary"] : null);
            echo "
  }
  ";
            // line 55
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__colors__primary_text", array());
            echo " {
\tcolor: ";
            // line 56
            echo (isset($context["ST_colors__primary"]) ? $context["ST_colors__primary"] : null);
            echo "
  } 
  ";
            // line 58
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__colors__primary_border", array());
            echo " {
\tborder-color: ";
            // line 59
            echo (isset($context["ST_colors__primary"]) ? $context["ST_colors__primary"] : null);
            echo "
  }
  ";
        }
        // line 62
        echo "
  /* header */
  ";
        // line 64
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__mainheader", array());
        echo " {
\tbackground-color: ";
        // line 65
        echo (isset($context["ST_header__bgcolor"]) ? $context["ST_header__bgcolor"] : null);
        echo ";
\t
\t";
        // line 67
        if ((isset($context["ST_header__bgimg_url"]) ? $context["ST_header__bgimg_url"] : null)) {
            // line 68
            echo "\tbackground-image: ";
            if (((isset($context["ST_header__bgimg_url"]) ? $context["ST_header__bgimg_url"] : null) == "none")) {
                echo "none";
            } else {
                echo "url(\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/backgrounds/";
                echo (isset($context["ST_header__bgimg_url"]) ? $context["ST_header__bgimg_url"] : null);
                echo "\")";
            }
            echo ";
\t";
        }
        // line 70
        echo "\t
\t";
        // line 71
        if ((isset($context["ST_header__height"]) ? $context["ST_header__height"] : null)) {
            // line 72
            echo "\theight: ";
            echo (isset($context["ST_header__height"]) ? $context["ST_header__height"] : null);
            echo "px;
\t";
        }
        // line 74
        echo "\t
\tbackground-position: ";
        // line 75
        echo (isset($context["ST_header__bgimg_pos"]) ? $context["ST_header__bgimg_pos"] : null);
        echo ";
\t
\t";
        // line 77
        if ((isset($context["ST_header__bgimg_size"]) ? $context["ST_header__bgimg_size"] : null)) {
            // line 78
            echo "\tbackground-size: ";
            echo (isset($context["ST_header__bgimg_size"]) ? $context["ST_header__bgimg_size"] : null);
            echo ";
\t";
        }
        // line 80
        echo "  }
  
  /* Search */
  ";
        // line 83
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__search", array());
        echo " {
\tbackground-color: ";
        // line 84
        echo (isset($context["ST_search__bgcolor"]) ? $context["ST_search__bgcolor"] : null);
        echo ";
\tcolor: ";
        // line 85
        echo (isset($context["ST_search__color"]) ? $context["ST_search__color"] : null);
        echo ";
  }
  ";
        // line 87
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__search_placeholder", array());
        echo " {
\tcolor: ";
        // line 88
        echo (isset($context["ST_search__placeholder"]) ? $context["ST_search__placeholder"] : null);
        echo ";
  }
  .quicksearch ";
        // line 90
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__search_focus", array());
        echo " {
\tbackground-color: ";
        // line 91
        echo (isset($context["ST_search__focusbgcolor"]) ? $context["ST_search__focusbgcolor"] : null);
        echo ";
  }
  
  /* footer */
  ";
        // line 95
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SELECTOR__footer", array());
        echo " {
\tbackground-color: ";
        // line 96
        echo (isset($context["ST_footer__bgcolor"]) ? $context["ST_footer__bgcolor"] : null);
        echo ";
\t
\t";
        // line 98
        if ((isset($context["ST_footer__bgimg_url"]) ? $context["ST_footer__bgimg_url"] : null)) {
            // line 99
            echo "\tbackground-image: ";
            if (((isset($context["ST_footer__bgimg_url"]) ? $context["ST_footer__bgimg_url"] : null) == "none")) {
                echo "none";
            } else {
                echo "url(\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/backgrounds/";
                echo (isset($context["ST_footer__bgimg_url"]) ? $context["ST_footer__bgimg_url"] : null);
                echo "\")";
            }
            echo ";
\t";
        }
        // line 101
        echo "\t
\tbackground-position: ";
        // line 102
        echo (isset($context["ST_footer__bgimg_pos"]) ? $context["ST_footer__bgimg_pos"] : null);
        echo ";
\t
\t";
        // line 104
        if ((isset($context["ST_footer__bgimg_size"]) ? $context["ST_footer__bgimg_size"] : null)) {
            // line 105
            echo "\tbackground-size: ";
            echo (isset($context["ST_footer__bgimg_size"]) ? $context["ST_footer__bgimg_size"] : null);
            echo ";
\t";
        }
        // line 107
        echo "  }

  /* Post Author Label */
  .topic-author-label .label {
  \tbackground-color: ";
        // line 111
        echo (isset($context["ST_topicAuthorLabel__bg"]) ? $context["ST_topicAuthorLabel__bg"] : null);
        echo ";
  }
  
</style>";
    }

    public function getTemplateName()
    {
        return "slickpanel/css.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 111,  307 => 107,  301 => 105,  299 => 104,  294 => 102,  291 => 101,  277 => 99,  275 => 98,  270 => 96,  266 => 95,  259 => 91,  255 => 90,  250 => 88,  246 => 87,  241 => 85,  237 => 84,  233 => 83,  228 => 80,  222 => 78,  220 => 77,  215 => 75,  212 => 74,  206 => 72,  204 => 71,  201 => 70,  187 => 68,  185 => 67,  180 => 65,  176 => 64,  172 => 62,  166 => 59,  162 => 58,  157 => 56,  153 => 55,  148 => 53,  143 => 52,  141 => 51,  134 => 47,  130 => 46,  125 => 43,  119 => 41,  116 => 40,  110 => 38,  108 => 37,  103 => 36,  98 => 35,  96 => 34,  92 => 33,  87 => 30,  81 => 28,  78 => 27,  72 => 25,  70 => 24,  66 => 22,  60 => 19,  57 => 18,  55 => 17,  52 => 16,  46 => 13,  41 => 12,  39 => 11,  36 => 10,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <style type="text/css" id="st_userconfig_CSS">*/
/*   /* slickpanel overrides. please do not eat *//* */
/*   */
/*   /* Typography *//* */
/*   <!-- IF ST_type__body_fontfamily -->*/
/*   body {*/
/* 	font-family: {ST_type__body_fontfamily};*/
/*   }*/
/*   <!-- ENDIF -->*/
/*   */
/*   <!-- IF ST_container__width -->*/
/*   {$SELECTOR__container_width} {*/
/* 	max-width: {ST_container__width}px;*/
/*   }*/
/*   <!-- ENDIF -->*/
/*   */
/*   <!-- IF ST_type__navbar_fontfamily -->*/
/*   .navigation > li > a {*/
/* 	font-family: {ST_type__navbar_fontfamily};*/
/*   }*/
/*   <!-- ENDIF -->*/
/*   */
/*   .postbody .content {*/
/* 	<!-- IF ST_type__content_fontfamily -->*/
/* 	font-family: {ST_type__content_fontfamily};*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF ST_type__content_fontsize -->*/
/* 	font-size: {ST_type__content_fontsize}px;*/
/* 	<!-- ENDIF -->*/
/*   }*/
/*   */
/*   /* text logo *//* */
/*   {$SELECTOR__textlogo} {*/
/* 	<!-- IF ST_logo__fontfamily -->*/
/* 	font-family: {ST_logo__fontfamily};<!-- ENDIF -->*/
/* 	color: {ST_logo__color};*/
/* 	<!-- IF ST_logo__fontsize -->*/
/* 	font-size: {ST_logo__fontsize}px;*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF ST_logo__fontweight -->*/
/* 	font-weight: {ST_logo__fontweight};*/
/* 	<!-- ENDIF -->*/
/*   }*/
/*   */
/*   /* image logo *//* */
/*   {$SELECTOR__imagelogo} {*/
/* 	max-width: {ST_logo__image_width}px;*/
/*   }*/
/*   */
/*   /* colors *//* */
/*   <!-- IF ST_colors__primary -->*/
/*   {$SELECTOR__colors__primary_bg} {*/
/* 	background-color: {ST_colors__primary}*/
/*   }*/
/*   {$SELECTOR__colors__primary_text} {*/
/* 	color: {ST_colors__primary}*/
/*   } */
/*   {$SELECTOR__colors__primary_border} {*/
/* 	border-color: {ST_colors__primary}*/
/*   }*/
/*   <!-- ENDIF -->*/
/* */
/*   /* header *//* */
/*   {$SELECTOR__mainheader} {*/
/* 	background-color: {ST_header__bgcolor};*/
/* 	*/
/* 	<!-- IF ST_header__bgimg_url -->*/
/* 	background-image: <!-- IF ST_header__bgimg_url == 'none' -->none<!-- ELSE -->url("{T_THEME_PATH}/images/backgrounds/{ST_header__bgimg_url}")<!-- ENDIF -->;*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	<!-- IF ST_header__height -->*/
/* 	height: {ST_header__height}px;*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	background-position: {ST_header__bgimg_pos};*/
/* 	*/
/* 	<!-- IF ST_header__bgimg_size -->*/
/* 	background-size: {ST_header__bgimg_size};*/
/* 	<!-- ENDIF -->*/
/*   }*/
/*   */
/*   /* Search *//* */
/*   {$SELECTOR__search} {*/
/* 	background-color: {ST_search__bgcolor};*/
/* 	color: {ST_search__color};*/
/*   }*/
/*   {$SELECTOR__search_placeholder} {*/
/* 	color: {ST_search__placeholder};*/
/*   }*/
/*   .quicksearch {$SELECTOR__search_focus} {*/
/* 	background-color: {ST_search__focusbgcolor};*/
/*   }*/
/*   */
/*   /* footer *//* */
/*   {$SELECTOR__footer} {*/
/* 	background-color: {ST_footer__bgcolor};*/
/* 	*/
/* 	<!-- IF ST_footer__bgimg_url -->*/
/* 	background-image: <!-- IF ST_footer__bgimg_url == 'none' -->none<!-- ELSE -->url("{T_THEME_PATH}/images/backgrounds/{ST_footer__bgimg_url}")<!-- ENDIF -->;*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	background-position: {ST_footer__bgimg_pos};*/
/* 	*/
/* 	<!-- IF ST_footer__bgimg_size -->*/
/* 	background-size: {ST_footer__bgimg_size};*/
/* 	<!-- ENDIF -->*/
/*   }*/
/* */
/*   /* Post Author Label *//* */
/*   .topic-author-label .label {*/
/*   	background-color: {ST_topicAuthorLabel__bg};*/
/*   }*/
/*   */
/* </style>*/
