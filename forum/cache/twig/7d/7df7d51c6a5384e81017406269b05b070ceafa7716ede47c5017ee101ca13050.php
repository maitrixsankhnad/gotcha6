<?php

/* components/footerjs.html */
class __TwigTemplate_91a5f5655eac86885a06726acdce86749acad031e7740860a2a0d75ea4a98a0a extends Twig_Template
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
        echo "
<script>
(function(){
\tvar styleTag = document.getElementById('elementState_restore');

\t//restore alert states
\tfor (var key in localStorage) {
\t\tif (key.indexOf('st_canvas_Alert_') == 0) {

\t\t\tvar hidden \t= (localStorage[key]) ? true:false,
\t\t\t\t\telm \t\t= document.getElementById(key.replace('st_canvas_Alert_',''));

\t\t\tif (elm && hidden) {
\t\t\t\telm.style.display = 'none'
\t\t\t\t\$(elm).data('hidden', true);
\t\t\t}

\t\t}
\t}
\t\$('#page-body > .container > .alert').each(function(){
\t\tif (!\$(this).data('hidden')) {
\t\t\t\$(this).show();
\t\t}
\t})

\tif (\$('body').hasClass('section-index')) {
\t\tvar
\t\tcatHead \t= \$('.category-header'),
\t\tdelay \t\t= parseFloat(catHead.css('transition-duration')) * 1000;

\t\t//animation-less collapse
\t\tcatHead.css('transition','0s');
\t\tsetTimeout(function(){
\t\t\tcatHead.css('transition','')
\t\t},delay+100);

\t\tfor(var key in localStorage){
\t\t\tif (key.indexOf('st_canvas_collapsible_') == 0) {
\t\t\t\tvar \$this = \$('#'+key.replace('st_canvas_collapsible_', ''));

\t\t\t\tif (localStorage[key] == 'hidden') {
\t\t\t\t\t\$this.removeClass('in').parent().addClass('collapsed');
\t\t\t\t}
\t\t\t\telse if (localStorage[key] == 'visible') {
\t\t\t\t\t\$this.addClass('in').parent().removeClass('collapsed')
\t\t\t\t}
\t\t\t}
\t\t}

\t}

\t//import phpbb template variables ===========
\tphpbb.SCRIPT_NAME \t\t\t\t= \"";
        // line 53
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo "\".split('/')[0];
\t\$('body').addClass('section-'+phpbb.SCRIPT_NAME)
\tphpbb.PER_PAGE \t\t\t\t\t\t= \"";
        // line 55
        echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
        echo "\";
\tphpbb.ON_PAGE \t\t\t\t\t\t= \"";
        // line 56
        echo (isset($context["ON_PAGE"]) ? $context["ON_PAGE"] : null);
        echo "\";
\tphpbb.PAGE_NUMBER \t\t\t\t= \"";
        // line 57
        echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
        echo "\";
\t_st.themePath \t\t\t\t\t\t= \"";
        // line 58
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "\";
\t_st.THEMEPANEL_INSTALLED \t= ";
        // line 59
        if ((isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
\t_st.THEMEPANEL_LINK \t\t\t= \"";
        // line 60
        echo (isset($context["SLICKPANEL_LINK"]) ? $context["SLICKPANEL_LINK"] : null);
        echo "\";
\t_st.THEMEPANEL_PAGE_LINK \t= \"";
        // line 61
        echo (isset($context["SLICKPANEL_PAGE_LINK"]) ? $context["SLICKPANEL_PAGE_LINK"] : null);
        echo "\";
\t_st.TOPIC_SOLVED_STYLE = '";
        // line 62
        echo (isset($context["TOPIC_SOLVED_STYLE"]) ? $context["TOPIC_SOLVED_STYLE"] : null);
        echo "';
\t_st.TOPIC_SOLVED_TITLE = \"";
        // line 63
        echo (isset($context["TOPIC_SOLVED_TITLE"]) ? $context["TOPIC_SOLVED_TITLE"] : null);
        echo "\";

\t//import language strings
\t_st.lang = {
\t\ttopic: '";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("TOPIC");
        echo "',
\t\ttopics: '";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("TOPICS");
        echo "',
\t\ttopic_solved: '";
        // line 69
        echo $this->env->getExtension('phpbb')->lang("TOPIC_SOLVED");
        echo "'
\t};
\t_st.fpermissions = {
\t\tRULES_ATTACH_CAN: '";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("RULES_ATTACH_CAN");
        echo "',
\t\tRULES_DELETE_CAN: '";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("RULES_DELETE_CAN");
        echo "',
\t\tRULES_DOWNLOAD_CAN: '";
        // line 74
        echo $this->env->getExtension('phpbb')->lang("RULES_DOWNLOAD_CAN");
        echo "',
\t\tRULES_EDIT_CAN: '";
        // line 75
        echo $this->env->getExtension('phpbb')->lang("RULES_EDIT_CAN");
        echo "',
\t\tRULES_LOCK_CAN: '";
        // line 76
        echo $this->env->getExtension('phpbb')->lang("RULES_LOCK_CAN");
        echo "',
\t\tRULES_POST_CAN: '";
        // line 77
        echo $this->env->getExtension('phpbb')->lang("RULES_POST_CAN");
        echo "',
\t\tRULES_REPLY_CAN: '";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("RULES_REPLY_CAN");
        echo "',
\t\tRULES_VOTE_CAN: '";
        // line 79
        echo $this->env->getExtension('phpbb')->lang("RULES_VOTE_CAN");
        echo "'
\t}
\t\$(document).on('ready', function(){
\t\t_st.init({
\t\t\tstickyheader: \"";
        // line 83
        echo (isset($context["ST_stickyheader"]) ? $context["ST_stickyheader"] : null);
        echo "\",
\t\t\ttimestamps: \"";
        // line 84
        echo (isset($context["ST_timestamps"]) ? $context["ST_timestamps"] : null);
        echo "\",
\t\t\tfastclick: \"";
        // line 85
        echo (isset($context["ST_fastclick"]) ? $context["ST_fastclick"] : null);
        echo "\",
\t\t\twysiwyg: \"";
        // line 86
        echo (isset($context["ST_wysiwyg"]) ? $context["ST_wysiwyg"] : null);
        echo "\",
\t\t\tquickscroll: \"";
        // line 87
        echo (isset($context["ST_quickscroll"]) ? $context["ST_quickscroll"] : null);
        echo "\"
\t\t});
\t})

})();
</script>";
    }

    public function getTemplateName()
    {
        return "components/footerjs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  163 => 79,  159 => 78,  155 => 77,  151 => 76,  147 => 75,  143 => 74,  139 => 73,  135 => 72,  129 => 69,  125 => 68,  121 => 67,  114 => 63,  110 => 62,  106 => 61,  102 => 60,  94 => 59,  90 => 58,  86 => 57,  82 => 56,  78 => 55,  73 => 53,  19 => 1,);
    }
}
/* */
/* <script>*/
/* (function(){*/
/* 	var styleTag = document.getElementById('elementState_restore');*/
/* */
/* 	//restore alert states*/
/* 	for (var key in localStorage) {*/
/* 		if (key.indexOf('st_canvas_Alert_') == 0) {*/
/* */
/* 			var hidden 	= (localStorage[key]) ? true:false,*/
/* 					elm 		= document.getElementById(key.replace('st_canvas_Alert_',''));*/
/* */
/* 			if (elm && hidden) {*/
/* 				elm.style.display = 'none'*/
/* 				$(elm).data('hidden', true);*/
/* 			}*/
/* */
/* 		}*/
/* 	}*/
/* 	$('#page-body > .container > .alert').each(function(){*/
/* 		if (!$(this).data('hidden')) {*/
/* 			$(this).show();*/
/* 		}*/
/* 	})*/
/* */
/* 	if ($('body').hasClass('section-index')) {*/
/* 		var*/
/* 		catHead 	= $('.category-header'),*/
/* 		delay 		= parseFloat(catHead.css('transition-duration')) * 1000;*/
/* */
/* 		//animation-less collapse*/
/* 		catHead.css('transition','0s');*/
/* 		setTimeout(function(){*/
/* 			catHead.css('transition','')*/
/* 		},delay+100);*/
/* */
/* 		for(var key in localStorage){*/
/* 			if (key.indexOf('st_canvas_collapsible_') == 0) {*/
/* 				var $this = $('#'+key.replace('st_canvas_collapsible_', ''));*/
/* */
/* 				if (localStorage[key] == 'hidden') {*/
/* 					$this.removeClass('in').parent().addClass('collapsed');*/
/* 				}*/
/* 				else if (localStorage[key] == 'visible') {*/
/* 					$this.addClass('in').parent().removeClass('collapsed')*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 	}*/
/* */
/* 	//import phpbb template variables ===========*/
/* 	phpbb.SCRIPT_NAME 				= "{SCRIPT_NAME}".split('/')[0];*/
/* 	$('body').addClass('section-'+phpbb.SCRIPT_NAME)*/
/* 	phpbb.PER_PAGE 						= "{PER_PAGE}";*/
/* 	phpbb.ON_PAGE 						= "{ON_PAGE}";*/
/* 	phpbb.PAGE_NUMBER 				= "{PAGE_NUMBER}";*/
/* 	_st.themePath 						= "{T_THEME_PATH}";*/
/* 	_st.THEMEPANEL_INSTALLED 	= <!-- IF SLICKPANEL_INSTALLED -->true<!-- ELSE -->false<!-- ENDIF -->;*/
/* 	_st.THEMEPANEL_LINK 			= "{SLICKPANEL_LINK}";*/
/* 	_st.THEMEPANEL_PAGE_LINK 	= "{SLICKPANEL_PAGE_LINK}";*/
/* 	_st.TOPIC_SOLVED_STYLE = '{TOPIC_SOLVED_STYLE}';*/
/* 	_st.TOPIC_SOLVED_TITLE = "{TOPIC_SOLVED_TITLE}";*/
/* */
/* 	//import language strings*/
/* 	_st.lang = {*/
/* 		topic: '{L_TOPIC}',*/
/* 		topics: '{L_TOPICS}',*/
/* 		topic_solved: '{L_TOPIC_SOLVED}'*/
/* 	};*/
/* 	_st.fpermissions = {*/
/* 		RULES_ATTACH_CAN: '{L_RULES_ATTACH_CAN}',*/
/* 		RULES_DELETE_CAN: '{L_RULES_DELETE_CAN}',*/
/* 		RULES_DOWNLOAD_CAN: '{L_RULES_DOWNLOAD_CAN}',*/
/* 		RULES_EDIT_CAN: '{L_RULES_EDIT_CAN}',*/
/* 		RULES_LOCK_CAN: '{L_RULES_LOCK_CAN}',*/
/* 		RULES_POST_CAN: '{L_RULES_POST_CAN}',*/
/* 		RULES_REPLY_CAN: '{L_RULES_REPLY_CAN}',*/
/* 		RULES_VOTE_CAN: '{L_RULES_VOTE_CAN}'*/
/* 	}*/
/* 	$(document).on('ready', function(){*/
/* 		_st.init({*/
/* 			stickyheader: "{ST_stickyheader}",*/
/* 			timestamps: "{ST_timestamps}",*/
/* 			fastclick: "{ST_fastclick}",*/
/* 			wysiwyg: "{ST_wysiwyg}",*/
/* 			quickscroll: "{ST_quickscroll}"*/
/* 		});*/
/* 	})*/
/* */
/* })();*/
/* </script>*/
