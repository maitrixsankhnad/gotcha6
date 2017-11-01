<?php

/* custom/custom.js */
class __TwigTemplate_a17c19cc9e408d84389c10224feec2147e20b18ab14f3b7e8b72538fda4798ef extends Twig_Template
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
        echo "/* Google webfont loader */
WebFontConfig = {
  google: { families: [ 'Roboto:400,500,400italic,300,700:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  //s.parentNode.insertBefore(wf, s);
})();

//Put your custom javascript here
//This is executed after other scripts
";
    }

    public function getTemplateName()
    {
        return "custom/custom.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /* Google webfont loader *//* */
/* WebFontConfig = {*/
/*   google: { families: [ 'Roboto:400,500,400italic,300,700:latin' ] }*/
/* };*/
/* (function() {*/
/*   var wf = document.createElement('script');*/
/*   wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +*/
/*     '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';*/
/*   wf.type = 'text/javascript';*/
/*   wf.async = 'true';*/
/*   var s = document.getElementsByTagName('script')[0];*/
/*   //s.parentNode.insertBefore(wf, s);*/
/* })();*/
/* */
/* //Put your custom javascript here*/
/* //This is executed after other scripts*/
/* */
