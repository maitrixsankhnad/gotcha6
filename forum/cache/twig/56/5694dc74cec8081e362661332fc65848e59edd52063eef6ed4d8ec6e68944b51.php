<?php

/* widgets/forumpermissions.html */
class __TwigTemplate_c4352e724404c63d7955829b00eab33cb741375b2b5b0e67add4b5b6648f370e extends Twig_Template
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
        if (((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) && ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ST_SECTION", array()) == "forum"))) {
            // line 2
            echo "<div class=\"sidebar-widget forum-permissions\">
\t<div class=\"widget-header\">
\t\t<i class=\"widget-icon fi fi-lock\"></i>
\t  \t";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
            echo "
  \t</div>
\t<div class=\"widget-content\">
\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo "<div class=\"forum-permissions__rule\">";
                echo $this->getAttribute($context["rules"], "RULE", array());
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "widgets/forumpermissions.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_DISPLAY_POST_INFO && $ST_SECTION == 'forum' -->*/
/* <div class="sidebar-widget forum-permissions">*/
/* 	<div class="widget-header">*/
/* 		<i class="widget-icon fi fi-lock"></i>*/
/* 	  	{L_FORUM_PERMISSIONS}*/
/*   	</div>*/
/* 	<div class="widget-content">*/
/* 		<!-- BEGIN rules --><div class="forum-permissions__rule">{rules.RULE}</div><!-- END rules -->*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
