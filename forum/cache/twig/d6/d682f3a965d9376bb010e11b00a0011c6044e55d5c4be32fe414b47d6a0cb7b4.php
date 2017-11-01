<?php

/* overall_footer.html */
class __TwigTemplate_2fd4560a58f2d540a49fc379008ba923708657c7511346f2e7a76db815f56849 extends Twig_Template
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
\t";
        // line 2
        // line 3
        echo "
\t</div><!-- .container END -->

\t";
        // line 6
        $value = "bottom";
        $context['definition']->set('breadcrumbsPos', $value);
        // line 7
        echo "\t";
        $location = "components/breadcrumbs.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("components/breadcrumbs.html", "overall_footer.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
</div><!-- #page-body END -->

";
        // line 11
        // line 12
        echo "
\t";
        // line 13
        if ((isset($context["ST_complex_footer"]) ? $context["ST_complex_footer"] : null)) {
            // line 14
            echo "\t<footer id=\"page-footer\" class=\"page-footer page-footer--complex\">
\t\t";
            // line 15
            $location = "components/footer_complex.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/footer_complex.html", "overall_footer.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 16
            echo "\t";
        } else {
            // line 17
            echo "\t<footer id=\"page-footer\" class=\"page-footer page-footer--basic\">
\t\t";
            // line 18
            $location = "components/footer_basic.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("components/footer_basic.html", "overall_footer.html", 18)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 19
            echo "\t";
        }
        // line 20
        echo "
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">

\t\t\t<div class=\"pull-left\">
\t\t\t";
        // line 25
        // line 26
        echo "\t\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t\t";
        // line 27
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 28
        echo "\t\t\t";
        // line 29
        echo "\t\t\t</div>

\t\t\t<div class=\"slickthemes-footerlink\">
\t\t\t\t<a target=\"_blank\" href=\"http://maitrixinfotech.com\">
\t\t\t\t\tDesign by Maitrix Infotech
\t\t\t\t</a>
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t";
        // line 39
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<!--<br /><strong><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>-->";
        }
        // line 40
        echo "\t</footer>

\t";
        // line 42
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<div class=\"debug-info\"><div class=\"container\">";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
            echo "</div></div>";
        }
        // line 43
        echo "</div><!-- #wrap END -->
</div><!-- .oncanvas-content END -->
</div><!-- .offcanvas-wrapper END -->

<div class=\"hidden\">
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 49
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 50
        echo "</div>

<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
</div>

<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
</div>

<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"javascript:void(0)\" class=\"alert_close close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></a>
\t\t<div class=\"alert_text\"></div>
</div>

";
        // line 66
        if (((isset($context["U_ACP"]) ? $context["U_ACP"] : null) && (isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null))) {
            // line 67
            echo "<div id=\"themepanel-modalbox\" data-loaded=\"false\">
\t<div class=\"tpmb-header\">
\t\t<a href=\"javascript:void(0)\" class=\"tpmb-close\"><i class=\"fi fi-window-close\"></i></a>
\t\t<a href=\"";
            // line 70
            echo (isset($context["SLICKPANEL_LINK"]) ? $context["SLICKPANEL_LINK"] : null);
            echo "\" title=\"Open slickpanel in full page\" class=\"tpmb-maximize\"><i class=\"fi fi-window-maximize\"></i></a>
\t\t<img class=\"st-logo\" src=\"";
            // line 71
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/slickthemes/slickthemes.png\" alt=\"Slickthemes\" />
\t</div>
\t<div class=\"tpmb-container\"></div>
</div>
";
        }
        // line 76
        echo "
<script type=\"text/javascript\" src=\"";
        // line 77
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/js/modernizr.custom.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 79
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/bower_components/jquery/dist/jquery.min.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>

";
        // line 81
        if (((isset($context["ST_wysiwyg"]) ? $context["ST_wysiwyg"] : null) != 0)) {
            // line 82
            echo "\t<script type=\"text/javascript\" src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/js/sceditor/jquery.sceditor.bbcode.min.js\"></script>
\t";
            // line 83
            if (((((isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null) != "en-gb") && ((isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null) != "en-us")) && ((isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null) != "en"))) {
                // line 84
                echo "\t<script type=\"text/javascript\" src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/js/sceditor/languages/";
                echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
                echo ".js\"></script>
\t";
            }
        }
        // line 87
        echo "
<script type=\"text/javascript\" src=\"";
        // line 88
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>

";
        // line 90
        if (((isset($context["U_ACP"]) ? $context["U_ACP"] : null) && (isset($context["SLICKPANEL_INSTALLED"]) ? $context["SLICKPANEL_INSTALLED"] : null))) {
            // line 91
            echo "\t<script type=\"text/javascript\" src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/js/slickpanel.js\"></script>
\t<script type=\"text/javascript\" src=\"";
            // line 92
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/js/spectrum/spectrum.js\"></script>
\t<script type=\"text/javascript\" src=\"";
            // line 93
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/js/tab.js\"></script>
";
        }
        // line 95
        echo "
";
        // line 96
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('11');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 97
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('11');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 98
        echo "<script src=\"../assets/js/chat/SendBird.min.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
<script src=\"../assets/js/chat/build/widget.SendBird.js?assets_version=";
        // line 99
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>

<script>
var appId = '3912DE58-6A54-4A47-90FF-C2AC9088A72B';
var userId = 'sankhnad';
var nickname = 'sankhnad';
sbWidget.startWithConnect(appId, userId, nickname, function() {\t
});
</script>

<script src=\"";
        // line 109
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/js/main.min.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>

";
        // line 111
        $location = "components/footerjs.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("components/footerjs.html", "overall_footer.html", 111)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 112
        echo "
";
        // line 113
        // line 114
        echo "
";
        // line 115
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 115)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 116
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

";
        // line 118
        $location = "custom/extra_js.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/extra_js.html", "overall_footer.html", 118)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 119
        echo "<script type=\"text/javascript\">
";
        // line 120
        $location = "custom/custom.js";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("custom/custom.js", "overall_footer.html", 120)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 121
        echo "</script>


";
        // line 124
        $location = "components/analytics.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("components/analytics.html", "overall_footer.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 125
        echo "
";
        // line 126
        // line 127
        echo "


</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 127,  410 => 126,  407 => 125,  395 => 124,  390 => 121,  378 => 120,  375 => 119,  363 => 118,  358 => 116,  344 => 115,  341 => 114,  340 => 113,  337 => 112,  325 => 111,  318 => 109,  305 => 99,  300 => 98,  285 => 97,  270 => 96,  267 => 95,  262 => 93,  258 => 92,  253 => 91,  251 => 90,  244 => 88,  241 => 87,  232 => 84,  230 => 83,  225 => 82,  223 => 81,  216 => 79,  209 => 77,  206 => 76,  198 => 71,  194 => 70,  189 => 67,  187 => 66,  172 => 56,  157 => 52,  153 => 50,  149 => 49,  141 => 43,  135 => 42,  131 => 40,  123 => 39,  111 => 29,  109 => 28,  104 => 27,  99 => 26,  98 => 25,  91 => 20,  88 => 19,  76 => 18,  73 => 17,  70 => 16,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  49 => 11,  44 => 8,  31 => 7,  28 => 6,  23 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* 	<!-- EVENT overall_footer_content_after -->*/
/* */
/* 	</div><!-- .container END -->*/
/* */
/* 	<!-- DEFINE $breadcrumbsPos = 'bottom' -->*/
/* 	<!-- INCLUDE components/breadcrumbs.html -->*/
/* */
/* </div><!-- #page-body END -->*/
/* */
/* <!-- EVENT overall_footer_page_body_after -->*/
/* */
/* 	<!-- IF ST_complex_footer -->*/
/* 	<footer id="page-footer" class="page-footer page-footer--complex">*/
/* 		<!-- INCLUDE components/footer_complex.html -->*/
/* 	<!-- ELSE -->*/
/* 	<footer id="page-footer" class="page-footer page-footer--basic">*/
/* 		<!-- INCLUDE components/footer_basic.html -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<div class="copyright">*/
/* 			<div class="container">*/
/* */
/* 			<div class="pull-left">*/
/* 			<!-- EVENT overall_footer_copyright_prepend -->*/
/* 			{CREDIT_LINE}*/
/* 			<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 			<!-- EVENT overall_footer_copyright_append -->*/
/* 			</div>*/
/* */
/* 			<div class="slickthemes-footerlink">*/
/* 				<a target="_blank" href="http://maitrixinfotech.com">*/
/* 					Design by Maitrix Infotech*/
/* 				</a>*/
/* 			</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 		<!-- IF U_ACP --><!--<br /><strong><a href="{U_ACP}">{L_ACP}</a></strong>--><!-- ENDIF -->*/
/* 	</footer>*/
/* */
/* 	<!-- IF DEBUG_OUTPUT --><div class="debug-info"><div class="container">{DEBUG_OUTPUT}</div></div><!-- ENDIF -->*/
/* </div><!-- #wrap END -->*/
/* </div><!-- .oncanvas-content END -->*/
/* </div><!-- .offcanvas-wrapper END -->*/
/* */
/* <div class="hidden">*/
/* 	<a id="bottom" class="anchor" accesskey="z"></a>*/
/* 	<!-- IF not S_IS_BOT -->{RUN_CRON_TASK}<!-- ENDIF -->*/
/* </div>*/
/* */
/* <div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 		<div id="darken">&nbsp;</div>*/
/* </div>*/
/* */
/* <div id="phpbb_alert" class="phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 		<a href="#" class="alert_close"></a>*/
/* 		<h3 class="alert_title">&nbsp;</h3><p class="alert_text"></p>*/
/* </div>*/
/* */
/* <div id="phpbb_confirm" class="phpbb_alert">*/
/* 		<a href="javascript:void(0)" class="alert_close close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>*/
/* 		<div class="alert_text"></div>*/
/* </div>*/
/* */
/* <!-- IF U_ACP and SLICKPANEL_INSTALLED -->*/
/* <div id="themepanel-modalbox" data-loaded="false">*/
/* 	<div class="tpmb-header">*/
/* 		<a href="javascript:void(0)" class="tpmb-close"><i class="fi fi-window-close"></i></a>*/
/* 		<a href="{SLICKPANEL_LINK}" title="Open slickpanel in full page" class="tpmb-maximize"><i class="fi fi-window-maximize"></i></a>*/
/* 		<img class="st-logo" src="{T_THEME_PATH}/images/slickthemes/slickthemes.png" alt="Slickthemes" />*/
/* 	</div>*/
/* 	<div class="tpmb-container"></div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <script type="text/javascript" src="{T_THEME_PATH}/js/modernizr.custom.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* */
/* <script type="text/javascript" src="{T_THEME_PATH}/bower_components/jquery/dist/jquery.min.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* */
/* <!-- IF ST_wysiwyg != 0 -->*/
/* 	<script type="text/javascript" src="{T_THEME_PATH}/js/sceditor/jquery.sceditor.bbcode.min.js"></script>*/
/* 	<!-- IF S_USER_LANG != 'en-gb' and S_USER_LANG != 'en-us' and S_USER_LANG != 'en' -->*/
/* 	<script type="text/javascript" src="{T_THEME_PATH}/js/sceditor/languages/{S_USER_LANG}.js"></script>*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
/* <script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* */
/* <!-- IF U_ACP and SLICKPANEL_INSTALLED -->*/
/* 	<script type="text/javascript" src="{T_THEME_PATH}/js/slickpanel.js"></script>*/
/* 	<script type="text/javascript" src="{T_THEME_PATH}/js/spectrum/spectrum.js"></script>*/
/* 	<script type="text/javascript" src="{T_THEME_PATH}/js/tab.js"></script>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDEJS forum_fn.js -->*/
/* <!-- INCLUDEJS ajax.js -->*/
/* <script src="../assets/js/chat/SendBird.min.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* <script src="../assets/js/chat/build/widget.SendBird.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* */
/* <script>*/
/* var appId = '3912DE58-6A54-4A47-90FF-C2AC9088A72B';*/
/* var userId = 'sankhnad';*/
/* var nickname = 'sankhnad';*/
/* sbWidget.startWithConnect(appId, userId, nickname, function() {	*/
/* });*/
/* </script>*/
/* */
/* <script src="{T_THEME_PATH}/js/main.min.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* */
/* <!-- INCLUDE components/footerjs.html -->*/
/* */
/* <!-- EVENT overall_footer_after -->*/
/* */
/* <!-- IF S_PLUPLOAD --><!-- INCLUDE plupload.html --><!-- ENDIF -->*/
/* {$SCRIPTS}*/
/* */
/* <!-- INCLUDE custom/extra_js.html -->*/
/* <script type="text/javascript">*/
/* <!-- INCLUDE custom/custom.js -->*/
/* </script>*/
/* */
/* */
/* <!-- INCLUDE components/analytics.html -->*/
/* */
/* <!-- EVENT overall_footer_body_after -->*/
/* */
/* */
/* */
/* </body>*/
/* </html>*/
/* */
