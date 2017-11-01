<?php

/* pagination.html */
class __TwigTemplate_1657f2138a27f22b142e1ab06d9b9cbddef1d35521a7a3053f8957924d31c704 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            echo " 
<ul class=\"pagination\">
\t
\t";
            // line 4
            if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
                // line 5
                echo "\t\t<li class=\"dd-container dropdown-page-jump page-jump\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
                // line 6
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE_CLICK");
                echo "\" data-toggle=\"dropdown\" role=\"button\"><i class=\"fi fi-arrow-up\"></i></a>
\t\t\t<div class=\"dropdown-menu page-jump-form\" role=\"menu\">
\t\t\t\t";
                // line 8
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "
\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
                // line 9
                echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
                echo "\" class=\"inputbox tiny\" data-per-page=\"";
                echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
                echo "\" data-base-url=\"";
                echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
                echo "\" data-start-name=\"";
                echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
                echo "\" />
\t\t\t\t<input class=\"button2\" value=\"";
                // line 10
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" type=\"button\" />
\t\t\t</div>
\t\t</li>
\t";
            }
            // line 14
            echo "\t
\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                // line 16
                echo "\t\t";
                if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                    // line 17
                    echo "\t\t<li class=\"previous\"><a href=\"";
                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                    echo "\" rel=\"prev\" role=\"button\"><i class=\"fi fi-chevron-double-";
                    echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                    echo "\"></i></a></li>
\t\t";
                } elseif ($this->getAttribute(                // line 18
$context["pagination"], "S_IS_CURRENT", array())) {
                    // line 19
                    echo "\t\t<li class=\"active\"><span>";
                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                    echo "</span></li>
\t\t";
                } elseif ($this->getAttribute(                // line 20
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                    // line 21
                    echo "\t\t<li class=\"ellipsis\" role=\"separator\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                    echo "</span></li>
\t\t";
                } elseif ($this->getAttribute(                // line 22
$context["pagination"], "S_IS_NEXT", array())) {
                    // line 23
                    echo "\t\t<li class=\"next\"><a href=\"";
                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                    echo "\" rel=\"next\" role=\"button\"><i class=\"fi fi-chevron-double-";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo "\"></i></a></li>
\t\t";
                } else {
                    // line 25
                    echo "\t\t<li><a href=\"";
                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                    echo "\" role=\"button\">";
                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                    echo "</a></li>
\t\t";
                }
                // line 27
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  106 => 27,  98 => 25,  90 => 23,  88 => 22,  83 => 21,  81 => 20,  76 => 19,  74 => 18,  67 => 17,  64 => 16,  60 => 15,  57 => 14,  50 => 10,  40 => 9,  35 => 8,  30 => 6,  27 => 5,  25 => 4,  19 => 1,);
    }
}
/* <!-- IF .pagination --> */
/* <ul class="pagination">*/
/* 	*/
/* 	<!-- IF BASE_URL and TOTAL_PAGES > 6 -->*/
/* 		<li class="dd-container dropdown-page-jump page-jump">*/
/* 			<a href="#" class="dropdown-trigger" title="{L_JUMP_TO_PAGE_CLICK}" data-toggle="dropdown" role="button"><i class="fi fi-arrow-up"></i></a>*/
/* 			<div class="dropdown-menu page-jump-form" role="menu">*/
/* 				{L_JUMP_TO_PAGE}{L_COLON}*/
/* 				<input type="number" name="page-number" min="1" maxlength="6" title="{L_JUMP_PAGE}" class="inputbox tiny" data-per-page="{PER_PAGE}" data-base-url="{BASE_URL|e('html_attr')}" data-start-name="{START_NAME}" />*/
/* 				<input class="button2" value="{L_GO}" type="button" />*/
/* 			</div>*/
/* 		</li>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* 	<!-- BEGIN pagination -->*/
/* 		<!-- IF pagination.S_IS_PREV -->*/
/* 		<li class="previous"><a href="{pagination.PAGE_URL}" rel="prev" role="button"><i class="fi fi-chevron-double-{S_CONTENT_FLOW_BEGIN}"></i></a></li>*/
/* 		<!-- ELSEIF pagination.S_IS_CURRENT -->*/
/* 		<li class="active"><span>{pagination.PAGE_NUMBER}</span></li>*/
/* 		<!-- ELSEIF pagination.S_IS_ELLIPSIS -->*/
/* 		<li class="ellipsis" role="separator"><span>{L_ELLIPSIS}</span></li>*/
/* 		<!-- ELSEIF pagination.S_IS_NEXT -->*/
/* 		<li class="next"><a href="{pagination.PAGE_URL}" rel="next" role="button"><i class="fi fi-chevron-double-{S_CONTENT_FLOW_END}"></i></a></li>*/
/* 		<!-- ELSE -->*/
/* 		<li><a href="{pagination.PAGE_URL}" role="button">{pagination.PAGE_NUMBER}</a></li>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- END pagination -->*/
/* 	*/
/* </ul>*/
/* <!-- ENDIF -->*/
