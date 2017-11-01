<?php

/* components/breadcrumbs.html */
class __TwigTemplate_ced84f0b75efee26740ca95992c89a39883021e81c68f27c4c7405832a832249 extends Twig_Template
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
        // line 2
        echo "<div class=\"breadcrumbs-bar breadcrumbs-bar--";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "breadcrumbsPos", array());
        echo " ";
        if ((isset($context["ST_breadcrumbs__detach"]) ? $context["ST_breadcrumbs__detach"] : null)) {
            echo "detached";
        }
        echo "\">
    ";
        // line 3
        if ((((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index")) && ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "breadcrumbsPos", array()) == "top"))) {
            // line 4
            echo "    \t<a href=\"";
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\" class=\"btn btn-bare mark-read mark-read--index\" accesskey=\"m\" data-ajax=\"mark_forums_read\"><i class=\"fi fi-check-all\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a>
    ";
        }
        // line 6
        echo "<ol class=\"nav-breadcrumbs\">
    
  ";
        // line 8
        if (((((((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) || (isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) || (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) || (isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 9
            echo "\t<li class=\"quick-nav-link dd-container jumpbox\">
\t\t<a href=\"javascript:void(0)\" data-toggle=\"dropdown\" title=\"";
            // line 10
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo "\">
\t\t\t<i class=\"fi fi-open-in-new\"></i>
\t\t</a>

\t\t<ul class=\"dropdown-menu jumpbox-dropdown\" role=\"menu\">
\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 16
                echo "\t\t\t\t";
                if (($this->getAttribute($context["jumpbox_forums"], "FORUM_ID", array()) !=  -1)) {
                    // line 17
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
                // line 19
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t</ul>
\t</li>
\t";
        }
        // line 23
        echo "
  ";
        // line 24
        $value = "itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope";
        $context['definition']->set('MICRODATA', $value);
        // line 25
        echo "
  ";
        // line 26
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 27
            echo "  <li class=\"crumb crumb--home\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo ">
\t<a href=\"";
            // line 28
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" itemprop=\"url\" data-navbar-reference=\"home\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a>
  </li>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        // line 33
        echo "
  <li class=\"crumb";
        // line 34
        if ( !(isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo " crumb--home";
        }
        echo "\" ";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo ">
\t<a href=\"";
        // line 35
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" itemprop=\"url\" accesskey=\"h\" data-navbar-reference=\"index\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a>
  </li>

  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 39
            echo "\t";
            // line 40
            echo "\t<li class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo ">
\t  <a href=\"";
            // line 41
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\" title=\"";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a>
\t</li>
\t";
            // line 43
            // line 44
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  ";
        // line 46
        // line 47
        echo "</ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/breadcrumbs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 47,  181 => 46,  179 => 45,  173 => 44,  172 => 43,  163 => 41,  154 => 40,  152 => 39,  148 => 38,  138 => 35,  130 => 34,  127 => 33,  126 => 32,  123 => 31,  113 => 28,  108 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  92 => 20,  86 => 19,  69 => 17,  66 => 16,  62 => 15,  48 => 10,  45 => 9,  43 => 8,  39 => 6,  31 => 4,  29 => 3,  20 => 2,  19 => 1,);
    }
}
/* <!-- EVENT overall_header_breadcrumbs_before -->*/
/* <div class="breadcrumbs-bar breadcrumbs-bar--{$breadcrumbsPos} <!-- IF ST_breadcrumbs__detach -->detached<!-- ENDIF -->">*/
/*     <!-- IF U_MARK_FORUMS && SCRIPT_NAME == "index" && $breadcrumbsPos == "top" -->*/
/*     	<a href="{U_MARK_FORUMS}" class="btn btn-bare mark-read mark-read--index" accesskey="m" data-ajax="mark_forums_read"><i class="fi fi-check-all"></i> {L_MARK_FORUMS_READ}</a>*/
/*     <!-- ENDIF -->*/
/* <ol class="nav-breadcrumbs">*/
/*     */
/*   <!-- IF (S_VIEWTOPIC or S_VIEWFORUM or SEARCH_TOPIC or S_SEARCH_ACTION or S_DISPLAY_JUMPBOX) and not S_IS_BOT -->*/
/* 	<li class="quick-nav-link dd-container jumpbox">*/
/* 		<a href="javascript:void(0)" data-toggle="dropdown" title="<!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF -->">*/
/* 			<i class="fi fi-open-in-new"></i>*/
/* 		</a>*/
/* */
/* 		<ul class="dropdown-menu jumpbox-dropdown" role="menu">*/
/* 			<!-- BEGIN jumpbox_forums -->*/
/* 				<!-- IF jumpbox_forums.FORUM_ID neq -1 -->*/
/* 					<li <!-- BEGIN level -->class="jumpbox-subforum"<!-- END level -->><a href="{jumpbox_forums.LINK}" role="menuitem" tabindex="-1"><span>{jumpbox_forums.FORUM_NAME}</span></a></li>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- END jumpbox_forums -->*/
/* 		</ul>*/
/* 	</li>*/
/* 	<!-- ENDIF -->*/
/* */
/*   <!-- DEFINE $MICRODATA = 'itemtype="http://data-vocabulary.org/Breadcrumb" itemscope' -->*/
/* */
/*   <!-- IF U_SITE_HOME -->*/
/*   <li class="crumb crumb--home" {$MICRODATA}>*/
/* 	<a href="{U_SITE_HOME}" itemprop="url" data-navbar-reference="home" title="{L_SITE_HOME}"><span itemprop="title">{L_SITE_HOME}</span></a>*/
/*   </li>*/
/*   <!-- ENDIF -->*/
/* */
/*   <!-- EVENT overall_header_breadcrumb_prepend -->*/
/* */
/*   <li class="crumb<!-- IF not U_SITE_HOME --> crumb--home<!-- ENDIF -->" {$MICRODATA}>*/
/* 	<a href="{U_INDEX}" itemprop="url" accesskey="h" data-navbar-reference="index" title="{L_INDEX}"><span itemprop="title">{L_INDEX}</span></a>*/
/*   </li>*/
/* */
/*   <!-- BEGIN navlinks -->*/
/* 	<!-- EVENT overall_header_navlink_prepend -->*/
/* 	<li class="crumb" {$MICRODATA}<!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->>*/
/* 	  <a href="{navlinks.U_VIEW_FORUM}" itemprop="url" title="{navlinks.FORUM_NAME}"><span itemprop="title">{navlinks.FORUM_NAME}</span></a>*/
/* 	</li>*/
/* 	<!-- EVENT overall_header_navlink_append -->*/
/*   <!-- END navlinks -->*/
/*   <!-- EVENT overall_header_breadcrumb_append -->*/
/* <!-- EVENT overall_header_breadcrumbs_after -->*/
/* </ol>*/
/* </div>*/
/* */
