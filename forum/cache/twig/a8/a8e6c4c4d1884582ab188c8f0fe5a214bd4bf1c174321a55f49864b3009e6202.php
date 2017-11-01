<?php

/* components/analytics.html */
class __TwigTemplate_998dbe57ac14f5aacc3e0df5f45d6afad275b9c0fe36dc81ad341598a6dc2dc6 extends Twig_Template
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
            echo "#Reference
Google Analytics ID: ";
            // line 3
            echo (isset($context["ST_g_analytics_ID"]) ? $context["ST_g_analytics_ID"] : null);
            echo "
Clicky Analytics ID: ";
            // line 4
            echo (isset($context["ST_c_analytics_ID"]) ? $context["ST_c_analytics_ID"] : null);
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["ST_g_analytics_ID"]) ? $context["ST_g_analytics_ID"] : null)) {
            // line 8
            echo "\t<script>
\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

\t\tga('create', '";
            // line 14
            echo (isset($context["ST_g_analytics_ID"]) ? $context["ST_g_analytics_ID"] : null);
            echo "', 'auto');
\t\tga('send', 'pageview');
\t</script>
";
        }
        // line 18
        echo "
";
        // line 19
        if ((isset($context["ST_c_analytics_ID"]) ? $context["ST_c_analytics_ID"] : null)) {
            // line 20
            echo "\t<script type=\"text/javascript\">
\tvar clicky_site_ids = clicky_site_ids || [];
\tclicky_site_ids.push('";
            // line 22
            echo (isset($context["ST_c_analytics_ID"]) ? $context["ST_c_analytics_ID"] : null);
            echo "');
\t(function() {
\t  var s = document.createElement('script');
\t  s.type = 'text/javascript';
\t  s.async = true;
\t  s.src = '//static.getclicky.com/js';
\t  ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
\t})();
\t</script>
\t<noscript><p><img alt=\"Clicky\" width=\"1\" height=\"1\" src=\"//in.getclicky.com/";
            // line 31
            echo (isset($context["ST_c_analytics_ID"]) ? $context["ST_c_analytics_ID"] : null);
            echo "ns.gif\" /></p></noscript>
";
        }
    }

    public function getTemplateName()
    {
        return "components/analytics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  62 => 22,  58 => 20,  56 => 19,  53 => 18,  46 => 14,  38 => 8,  36 => 7,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF 0 -->*/
/* #Reference*/
/* Google Analytics ID: {ST_g_analytics_ID}*/
/* Clicky Analytics ID: {ST_c_analytics_ID}*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF ST_g_analytics_ID -->*/
/* 	<script>*/
/* 		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/* 		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/* 		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/* 		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/* 		ga('create', '{ST_g_analytics_ID}', 'auto');*/
/* 		ga('send', 'pageview');*/
/* 	</script>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF ST_c_analytics_ID -->*/
/* 	<script type="text/javascript">*/
/* 	var clicky_site_ids = clicky_site_ids || [];*/
/* 	clicky_site_ids.push('{ST_c_analytics_ID}');*/
/* 	(function() {*/
/* 	  var s = document.createElement('script');*/
/* 	  s.type = 'text/javascript';*/
/* 	  s.async = true;*/
/* 	  s.src = '//static.getclicky.com/js';*/
/* 	  ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );*/
/* 	})();*/
/* 	</script>*/
/* 	<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/{ST_c_analytics_ID}ns.gif" /></p></noscript>*/
/* <!-- ENDIF -->*/
/* */
