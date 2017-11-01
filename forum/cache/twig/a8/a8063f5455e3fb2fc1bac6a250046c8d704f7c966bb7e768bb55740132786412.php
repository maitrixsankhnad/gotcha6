<?php

/* custom/sidebar_blocks.html */
class __TwigTemplate_535c1288e16b2721e0ef2f025db2802beb6e9bf3df84aac0c1186357aeefbb0a extends Twig_Template
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
        if (0) {
            // line 2
            echo "## Hi there! This is where you define/modify sidebar blocks.
## Feel free to re-order or remove the existing blocks if you wish
## NOTE: Some widgets only show on certain pages
";
        }
        // line 6
        echo "
<!-- OneAll widget: only shows when enabled from slickpanel -->
";
        // line 8
        // line 9
        echo "
<!-- Who is online -->
";
        // line 11
        $location = "widgets/whoisonline.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("widgets/whoisonline.html", "custom/sidebar_blocks.html", 11)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 12
        echo "
<!-- Statistics (shows only on index) -->
";
        // line 14
        $location = "widgets/statistics.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("widgets/statistics.html", "custom/sidebar_blocks.html", 14)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 15
        echo "
<!-- Birthdays -->
";
        // line 17
        $location = "widgets/birthdays.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("widgets/birthdays.html", "custom/sidebar_blocks.html", 17)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 18
        echo "
<!-- Forum permissions (shows only on forum) -->
";
        // line 20
        $location = "widgets/forumpermissions.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("widgets/forumpermissions.html", "custom/sidebar_blocks.html", 20)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "custom/sidebar_blocks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  80 => 18,  68 => 17,  64 => 15,  52 => 14,  48 => 12,  36 => 11,  32 => 9,  31 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF 0 -->*/
/* ## Hi there! This is where you define/modify sidebar blocks.*/
/* ## Feel free to re-order or remove the existing blocks if you wish*/
/* ## NOTE: Some widgets only show on certain pages*/
/* <!-- ENDIF -->*/
/* */
/* <!-- OneAll widget: only shows when enabled from slickpanel -->*/
/* <!-- EVENT st_oneall_sidebar_hook -->*/
/* */
/* <!-- Who is online -->*/
/* <!-- INCLUDE widgets/whoisonline.html -->*/
/* */
/* <!-- Statistics (shows only on index) -->*/
/* <!-- INCLUDE widgets/statistics.html -->*/
/* */
/* <!-- Birthdays -->*/
/* <!-- INCLUDE widgets/birthdays.html -->*/
/* */
/* <!-- Forum permissions (shows only on forum) -->*/
/* <!-- INCLUDE widgets/forumpermissions.html -->*/
/* */
