<?php

/* components/quicksearch.html */
class __TwigTemplate_0078ee60a2bdff9094737279d5b0f7ccda560126a322abe440e066fd1315513a extends Twig_Template
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
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 2
            echo "  <div id=\"search-box\" class=\"quicksearch\">
\t<form action=\"";
            // line 3
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" method=\"get\" id=\"search\">
\t  <fieldset>
\t\t<div class=\"quicksearch__placeholder\">";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
            echo "</div>
\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"form-control\" size=\"20\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" />
\t\t<button class=\"btn btn-default quicksearch-go hidden\" type=\"submit\" title=\"";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t<a href=\"";
            // line 8
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-link quicksearch-advanced hidden\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i></a>
\t\t";
            // line 9
            echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
            echo "
\t  </fieldset>
\t</form>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/quicksearch.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 8,  39 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH-->*/
/*   <div id="search-box" class="quicksearch">*/
/* 	<form action="{U_SEARCH}" method="get" id="search">*/
/* 	  <fieldset>*/
/* 		<div class="quicksearch__placeholder">{L_SEARCH_MINI}</div>*/
/* 		<input name="keywords" id="keywords" type="search" maxlength="128" title="{L_SEARCH_KEYWORDS}" class="form-control" size="20" value="{SEARCH_WORDS}" />*/
/* 		<button class="btn btn-default quicksearch-go hidden" type="submit" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 		<a href="{U_SEARCH}" class="btn btn-link quicksearch-advanced hidden" title="{L_SEARCH_ADV}"><i class="glyphicon glyphicon-cog"></i></a>*/
/* 		{S_SEARCH_HIDDEN_FIELDS}*/
/* 	  </fieldset>*/
/* 	</form>*/
/*   </div>*/
/* <!-- ENDIF -->*/
