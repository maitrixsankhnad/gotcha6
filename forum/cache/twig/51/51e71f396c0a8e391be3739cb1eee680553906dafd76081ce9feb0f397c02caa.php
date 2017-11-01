<?php

/* components/quicklogin.html */
class __TwigTemplate_49c6b94d059da3da9e0ca3973fbf811ed50cbb746f7f3f10eefb8920522fc0c5 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" class=\"quicklogin-form\">

  ";
        // line 3
        // line 4
        echo "  
  <div class=\"input-group\">
\t<span class=\"input-group-addon\"><i class=\"fi fi-account\"></i></span>
\t<input type=\"text\" name=\"username\" id=\"QL_username\" class=\"quicklogin__username-input form-control\" />
  </div>
\t
  <div class=\"input-group\">
\t<span class=\"input-group-addon\"><i class=\"fi fi-key\"></i></span>
\t<input type=\"password\" name=\"password\" id=\"QL_password\" class=\"quicklogin__password-input form-control\" />
  </div>
  
  ";
        // line 15
        if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
            // line 16
            echo "  <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\" name=\"autologin\"> ";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
            echo "
    </label>
  </div>
  ";
        }
        // line 22
        echo "  
  <input type=\"submit\" name=\"login\" value=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" class=\"quicklogin__login-btn btn btn-success\" />
  
  ";
        // line 25
        if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
            // line 26
            echo "  <a class=\"quicklogin__forgot\" href=\"";
            echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
            echo "</a>
  ";
        }
        // line 28
        echo "  
  ";
        // line 29
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
  
</form>";
    }

    public function getTemplateName()
    {
        return "components/quicklogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  70 => 28,  62 => 26,  60 => 25,  55 => 23,  52 => 22,  45 => 18,  41 => 16,  39 => 15,  26 => 4,  25 => 3,  19 => 1,);
    }
}
/* <form method="post" action="{S_LOGIN_ACTION}" class="quicklogin-form">*/
/* */
/*   <!-- EVENT st_oneall_quicklogin_hook -->*/
/*   */
/*   <div class="input-group">*/
/* 	<span class="input-group-addon"><i class="fi fi-account"></i></span>*/
/* 	<input type="text" name="username" id="QL_username" class="quicklogin__username-input form-control" />*/
/*   </div>*/
/* 	*/
/*   <div class="input-group">*/
/* 	<span class="input-group-addon"><i class="fi fi-key"></i></span>*/
/* 	<input type="password" name="password" id="QL_password" class="quicklogin__password-input form-control" />*/
/*   </div>*/
/*   */
/*   <!-- IF S_AUTOLOGIN_ENABLED -->*/
/*   <div class="checkbox">*/
/*     <label>*/
/*       <input type="checkbox" name="autologin"> {L_LOG_ME_IN}*/
/*     </label>*/
/*   </div>*/
/*   <!-- ENDIF -->*/
/*   */
/*   <input type="submit" name="login" value="{L_LOGIN}" class="quicklogin__login-btn btn btn-success" />*/
/*   */
/*   <!-- IF U_SEND_PASSWORD -->*/
/*   <a class="quicklogin__forgot" href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a>*/
/*   <!-- ENDIF -->*/
/*   */
/*   {S_LOGIN_REDIRECT}*/
/*   */
/* </form>*/
