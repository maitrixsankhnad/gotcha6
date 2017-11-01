<?php

/* widgets/birthdays.html */
class __TwigTemplate_03039f59f2b95f59d86d6d7077bb87f7df27b4a316fa98d409a31dafa710f998 extends Twig_Template
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
        if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "st_widgetshown_birthdays", array())) {
            // line 2
            if (((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array())))) {
                // line 3
                echo "  <div class=\"sidebar-widget birthday-list\">
\t<div class=\"widget-header\">
\t  <i class=\"widget-icon fi fi-cake\"></i>
\t  ";
                // line 6
                echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
                echo "
\t  <span class=\"close\" data-toggle=\"collapse\" data-target=\"#widget-birthdayList\"></span>
\t</div>
\t<div class=\"widget-content collapse in\" id=\"widget-birthdayList\">
\t\t\t";
                // line 10
                // line 11
                echo "\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                    echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                        echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                        if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                            echo " (";
                            echo $this->getAttribute($context["birthdays"], "AGE", array());
                            echo ")";
                        }
                        if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                            echo ", ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</strong>
\t\t\t";
                } else {
                    // line 12
                    echo "<span class=\"text-muted\">";
                    echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
                    echo "</span>";
                }
                // line 13
                echo "\t\t\t";
                // line 14
                echo "\t</div>
  </div>
";
            }
            // line 17
            $value = true;
            $context['definition']->set('st_widgetshown_birthdays', $value);
        }
    }

    public function getTemplateName()
    {
        return "widgets/birthdays.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  68 => 14,  66 => 13,  61 => 12,  36 => 11,  35 => 10,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not $st_widgetshown_birthdays -->*/
/* <!-- IF S_DISPLAY_BIRTHDAY_LIST and .birthdays -->*/
/*   <div class="sidebar-widget birthday-list">*/
/* 	<div class="widget-header">*/
/* 	  <i class="widget-icon fi fi-cake"></i>*/
/* 	  {L_BIRTHDAYS}*/
/* 	  <span class="close" data-toggle="collapse" data-target="#widget-birthdayList"></span>*/
/* 	</div>*/
/* 	<div class="widget-content collapse in" id="widget-birthdayList">*/
/* 			<!-- EVENT index_body_block_birthday_prepend -->*/
/* 			<!-- IF .birthdays -->{L_CONGRATULATIONS}{L_COLON} <strong><!-- BEGIN birthdays -->{birthdays.USERNAME}<!-- IF birthdays.AGE !== '' --> ({birthdays.AGE})<!-- ENDIF --><!-- IF not birthdays.S_LAST_ROW -->, <!-- ENDIF --><!-- END birthdays --></strong>*/
/* 			<!-- ELSE --><span class="text-muted">{L_NO_BIRTHDAYS}</span><!-- ENDIF -->*/
/* 			<!-- EVENT index_body_block_birthday_append -->*/
/* 	</div>*/
/*   </div>*/
/* <!-- ENDIF -->*/
/* <!-- DEFINE $st_widgetshown_birthdays = true -->*/
/* <!-- ENDIF -->*/
/* */
