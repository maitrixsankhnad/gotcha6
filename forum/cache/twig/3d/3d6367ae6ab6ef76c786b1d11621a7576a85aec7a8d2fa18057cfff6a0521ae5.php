<?php

/* jumpbox.html */
class __TwigTemplate_f9012e8726ed424c9d05576c1a655f74572a91828dfc7a2de692f79d4c31d73b extends Twig_Template
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
        if ((((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null) || (isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) || (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null))) {
            // line 2
            echo "<div class=\"panel-bare\">
\t";
            // line 3
            if (((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null) && (isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null))) {
                // line 4
                echo "\t<div class=\"dd-container jumpbox-container\" id=\"jumpbox\">
\t\t<a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-default\" title=\"";
                // line 5
                if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                    echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
                }
                echo "\">
\t\t\t";
                // line 6
                if ((isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
                    echo "
\t\t\t";
                } else {
                    // line 7
                    echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
                    echo "
\t\t\t";
                }
                // line 9
                echo "\t\t\t<i class=\"fi fi-menu-up\"></i>
\t\t</a>
\t\t
\t\t<ul class=\"dropdown-menu jumpbox-dropdown\" role=\"menu\">
\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                    // line 14
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["jumpbox_forums"], "FORUM_ID", array()) !=  -1)) {
                        // line 15
                        echo "\t\t\t\t\t<li ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                            echo "class=\"jumpbox-subforum\"";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "><a href=\"";
                        echo $this->getAttribute($context["jumpbox_forums"], "LINK", array());
                        echo "\" role=\"menuitem\" tabindex=\"-1\"><span>";
                        echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", array());
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 17
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t\t</ul>
\t</div>
\t";
            }
            // line 21
            echo "
\t";
            // line 22
            if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
                // line 23
                echo "\t\t<p class=\"jumpbox-return\"><a class=\"btn btn-link\" href=\"";
                echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
                echo "\" accesskey=\"r\"><i class=\"fi fi-chevron-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
                echo "</a></p>
\t";
            } elseif (            // line 24
(isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
                // line 25
                echo "\t\t<p class=\"jumpbox-return\"><a class=\"btn btn-link\" href=\"";
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\" accesskey=\"r\"><i class=\"fi fi-chevron-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
                echo "</a></p>
\t";
            }
            // line 27
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  105 => 25,  103 => 24,  94 => 23,  92 => 22,  89 => 21,  84 => 18,  78 => 17,  61 => 15,  58 => 14,  54 => 13,  48 => 9,  43 => 7,  37 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF SEARCH_TOPIC or S_IN_MCP or S_SEARCH_ACTION -->*/
/* <div class="panel-bare">*/
/* 	<!-- IF S_DISPLAY_JUMPBOX && S_IN_MCP -->*/
/* 	<div class="dd-container jumpbox-container" id="jumpbox">*/
/* 		<a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-default" title="<!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSE -->{L_MODERATE_FORUM}<!-- ENDIF -->">*/
/* 			<!-- IF S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}*/
/* 			<!-- ELSE -->{L_MODERATE_FORUM}*/
/* 			<!-- ENDIF -->*/
/* 			<i class="fi fi-menu-up"></i>*/
/* 		</a>*/
/* 		*/
/* 		<ul class="dropdown-menu jumpbox-dropdown" role="menu">*/
/* 			<!-- BEGIN jumpbox_forums -->*/
/* 				<!-- IF jumpbox_forums.FORUM_ID neq -1 -->*/
/* 					<li <!-- BEGIN level -->class="jumpbox-subforum"<!-- END level -->><a href="{jumpbox_forums.LINK}" role="menuitem" tabindex="-1"><span>{jumpbox_forums.FORUM_NAME}</span></a></li>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- END jumpbox_forums -->*/
/* 		</ul>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF SEARCH_TOPIC -->*/
/* 		<p class="jumpbox-return"><a class="btn btn-link" href="{U_SEARCH_TOPIC}" accesskey="r"><i class="fi fi-chevron-{S_CONTENT_FLOW_BEGIN}"></i> {L_RETURN_TO_TOPIC}</a></p>*/
/* 	<!-- ELSEIF S_SEARCH_ACTION -->*/
/* 		<p class="jumpbox-return"><a class="btn btn-link" href="{U_SEARCH}" title="{L_SEARCH_ADV}" accesskey="r"><i class="fi fi-chevron-{S_CONTENT_FLOW_BEGIN}"></i> {L_GO_TO_SEARCH_ADV}</a></p>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
