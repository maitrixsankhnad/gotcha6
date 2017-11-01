<?php

/* index_body.html */
class __TwigTemplate_21d25c2be90c1239928e0093f18a295c78d49a3e898cdbeef6ee45adb3d57a75 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<!-- Index Alerts -->
";
        // line 4
        $location = "custom/alerts_index.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/alerts_index.html", "index_body.html", 4)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 5
        echo "
<div class=\"big-grid";
        // line 6
        if ( !(isset($context["ST_sidebar__index"]) ? $context["ST_sidebar__index"] : null)) {
            echo " no-sidebar";
        }
        echo "\">
\t\t<div class=\"col-maincontent\">
\t\t";
        // line 8
        // line 9
        echo "\t\t";
        // line 10
        echo "\t\t";
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        echo "\t\t";
        // line 12
        echo "\t\t</div>
\t\t";
        // line 13
        if (((isset($context["ST_sidebar__index"]) ? $context["ST_sidebar__index"] : null) !== "0")) {
            // line 14
            echo "\t\t<div class=\"col-sidebar\">
\t\t";
            // line 15
            // line 16
            echo "\t\t";
            $location = "custom/sidebar_blocks.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("custom/sidebar_blocks.html", "index_body.html", 16)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 17
            echo "\t\t";
            // line 18
            echo "\t\t</div>
\t\t";
        }
        // line 20
        echo "</div>

";
        // line 22
        // line 23
        echo "
<!-- Who is online -->
";
        // line 25
        $location = "widgets/whoisonline.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("widgets/whoisonline.html", "index_body.html", 25)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 26
        echo "
<!-- Statistics (shows only on index) -->
";
        // line 28
        $location = "widgets/statistics.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("widgets/statistics.html", "index_body.html", 28)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 29
        echo "
<!-- Birthdays -->
";
        // line 31
        $location = "widgets/birthdays.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("widgets/birthdays.html", "index_body.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 32
        echo "
";
        // line 33
        // line 34
        echo "
";
        // line 35
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 35)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 35,  160 => 34,  159 => 33,  156 => 32,  144 => 31,  140 => 29,  128 => 28,  124 => 26,  112 => 25,  108 => 23,  107 => 22,  103 => 20,  99 => 18,  97 => 17,  84 => 16,  83 => 15,  80 => 14,  78 => 13,  75 => 12,  73 => 11,  60 => 10,  58 => 9,  57 => 8,  50 => 6,  47 => 5,  35 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- Index Alerts -->*/
/* <!-- INCLUDE custom/alerts_index.html -->*/
/* */
/* <div class="big-grid<!-- IF not ST_sidebar__index --> no-sidebar<!-- ENDIF -->">*/
/* 		<div class="col-maincontent">*/
/* 		<!-- EVENT index_body_forumlist_body_before -->*/
/* 		<!-- EVENT recent_topics_include -->*/
/* 		<!-- INCLUDE forumlist_body.html -->*/
/* 		<!-- EVENT index_body_forumlist_body_after -->*/
/* 		</div>*/
/* 		<!-- IF ST_sidebar__index !== '0' -->*/
/* 		<div class="col-sidebar">*/
/* 		<!-- EVENT st_sidebar_before -->*/
/* 		<!-- INCLUDE custom/sidebar_blocks.html -->*/
/* 		<!-- EVENT st_sidebar_after -->*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* </div>*/
/* */
/* <!-- EVENT index_body_stat_blocks_before -->*/
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
/* <!-- EVENT index_body_stat_blocks_after -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
