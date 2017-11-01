<?php

/* slickpanel/inc.html */
class __TwigTemplate_29de5234529fb9a75d7c0d99fb21eb469336aea49a1cece8e843998ffb7c8ea7 extends Twig_Template
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
        if ((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null)) {
            // line 2
            $value = ".logo h1";
            $context['definition']->set('SELECTOR__textlogo', $value);
            // line 3
            $value = ".logo h1 img";
            $context['definition']->set('SELECTOR__imagelogo', $value);
            // line 4
            echo "
";
            // line 5
            $value = ".itemlist__item--colbar,.cp-main h3, #tabs, .st-section__header,.btn-primary, .thead, .category-header, .section-header";
            $context['definition']->set('SELECTOR__colors__primary_bg', $value);
            // line 6
            $value = ".forum-icon";
            $context['definition']->set('SELECTOR__colors__primary_text', $value);
            // line 7
            $value = "";
            $context['definition']->set('SELECTOR__colors__primary_border', $value);
            // line 8
            echo "
";
            // line 9
            $value = ".quicksearch fieldset";
            $context['definition']->set('SELECTOR__search', $value);
            // line 10
            $value = ".quicksearch__placeholder";
            $context['definition']->set('SELECTOR__search_placeholder', $value);
            // line 11
            $value = ".quicksearch--focus";
            $context['definition']->set('SELECTOR__search_focus', $value);
            // line 12
            echo "
";
            // line 13
            $value = ".container, .layout-boxed #wrap, .breadcrumbs-bar.detached, .layout-stretched .nav-breadcrumbs";
            $context['definition']->set('SELECTOR__container_width', $value);
            // line 14
            echo "
";
            // line 15
            $value = "#page-footer";
            $context['definition']->set('SELECTOR__footer', $value);
            // line 16
            $value = ".layout-boxed #wrap, .container, .layout-stretched .nav-breadcrumbs, .layout-stretched .breadcrumbs-bar.detached";
            $context['definition']->set('SELECTOR__container', $value);
            // line 17
            echo "
";
            // line 18
            $value = ".main-header";
            $context['definition']->set('SELECTOR__mainheader', $value);
        }
    }

    public function getTemplateName()
    {
        return "slickpanel/inc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF SLICKPANEL_INSTALLED -->*/
/* <!-- DEFINE $SELECTOR__textlogo = '.logo h1' -->*/
/* <!-- DEFINE $SELECTOR__imagelogo = '.logo h1 img' -->*/
/* */
/* <!-- DEFINE $SELECTOR__colors__primary_bg = '.itemlist__item--colbar,.cp-main h3, #tabs, .st-section__header,.btn-primary, .thead, .category-header, .section-header' -->*/
/* <!-- DEFINE $SELECTOR__colors__primary_text = '.forum-icon' -->*/
/* <!-- DEFINE $SELECTOR__colors__primary_border = '' -->*/
/* */
/* <!-- DEFINE $SELECTOR__search = '.quicksearch fieldset' -->*/
/* <!-- DEFINE $SELECTOR__search_placeholder = '.quicksearch__placeholder' -->*/
/* <!-- DEFINE $SELECTOR__search_focus = '.quicksearch--focus' -->*/
/* */
/* <!-- DEFINE $SELECTOR__container_width = '.container, .layout-boxed #wrap, .breadcrumbs-bar.detached, .layout-stretched .nav-breadcrumbs' -->*/
/* */
/* <!-- DEFINE $SELECTOR__footer = '#page-footer' -->*/
/* <!-- DEFINE $SELECTOR__container = '.layout-boxed #wrap, .container, .layout-stretched .nav-breadcrumbs, .layout-stretched .breadcrumbs-bar.detached' -->*/
/* */
/* <!-- DEFINE $SELECTOR__mainheader = '.main-header' -->*/
/* <!-- ENDIF -->*/
