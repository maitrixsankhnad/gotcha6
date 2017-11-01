<?php

/* message_body.html */
class __TwigTemplate_15917fddd6b23863d1544c5143d9bab6b8e5cbfddd45c2438494f3f174f36e36 extends Twig_Template
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
        $location = "simple_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_header.html", "message_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"simplepage__box\" id=\"message\">
\t<h2 class=\"page-title\">";
        // line 3
        echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
        echo "</h2>
\t<p class=\"simplepage__message\">";
        // line 4
        echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
        echo "</p>
\t";
        // line 5
        if ((((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "search") &&  !(isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null)) &&  !(isset($context["S_NO_SEARCH"]) ? $context["S_NO_SEARCH"] : null)) && (isset($context["L_RETURN_TO_SEARCH_ADV"]) ? $context["L_RETURN_TO_SEARCH_ADV"] : null))) {
            echo "<p><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>";
        }
        // line 6
        echo "\t
\t";
        // line 7
        if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "search")) {
            $location = "components/quicksearch.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/quicksearch.html", "message_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 8
        echo "</div>

";
        // line 10
        $location = "simple_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_footer.html", "message_body.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "message_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  69 => 8,  55 => 7,  52 => 6,  42 => 5,  38 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE simple_header.html -->*/
/* <div class="simplepage__box" id="message">*/
/* 	<h2 class="page-title">{MESSAGE_TITLE}</h2>*/
/* 	<p class="simplepage__message">{MESSAGE_TEXT}</p>*/
/* 	<!-- IF SCRIPT_NAME == "search" and not S_BOARD_DISABLED and not S_NO_SEARCH and L_RETURN_TO_SEARCH_ADV --><p><a href="{U_SEARCH}" class="arrow-{S_CONTENT_FLOW_BEGIN}">{L_GO_TO_SEARCH_ADV}</a></p><!-- ENDIF -->*/
/* 	*/
/* 	<!-- IF SCRIPT_NAME == "search" --><!-- INCLUDE components/quicksearch.html --><!-- ENDIF -->*/
/* </div>*/
/* */
/* <!-- INCLUDE simple_footer.html -->*/
/* */
