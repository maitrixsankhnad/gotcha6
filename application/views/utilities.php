<?php
  function check_empty_fields($required_fields_array)
  {
    $form_errors = array();
    foreach($required_fields_array as $name_of_field)
    {
      if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL)
      {
        $form_errors[] = $name_of_field . " is a required field";
      }
    }
    return $form_errors;
  }

  function _token()
  {
    $randomToken = base64_encode(openssl_random_pseudo_bytes(32));
    return $_SESSION['token'] = $randomToken;
  }

  function validate_token($requestToken)
  {
    if(isset($_SESSION['token']) && $requestToken == $_SESSION['token'])
    {
      unset($_SESSION['token']);
      return true;
    }
    return false;
  }

	function guard()
  {
    $isValid = true;
    $inactive = 60 * 20;
    $fingerprint = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);

    if((isset($_SESSION['last_active']) && (time() - $_SESSION['last_active']) > $inactive))
    {
			//echo "<script type='text/javascript>alert('hello')</script>";
      $isValid = false;
      //require 'signout.php';
    }
    else
    {
      $_SESSION['last_active'] = time();
    }
    return $isValid;
  }
  
  function check_email($data)
  {
    $form_errors = array();
    $key = 'email';
    $key = filter_var($key, FILTER_SANITIZE_EMAIL);
    if(!filter_var($_POST[$key], FILTER_VALIDATE_EMAIL))
    {
      $form_errors[] = $key . " is not a valid email address";
    }
    return $form_errors;
  }

  function flashMessage($message, $passOrFail = "Fail")
  {
    if($passOrFail == "Pass")
    {
      $data = "<p style='padding: 20px; border: 1px solid grey; color: green;'>{$message}</p>";
    }
    else
    {
      $data = "<p style='padding: 20px; border: 1px solid grey; color: red;'>{$message}</p>";
    }
    return $data;
  }

  /* function is_session_started()
  {
    return function_exists('session_status') ? (PHP_SESSION_ACTIVE == session_status()) : (!empty (session_id()));
  } */

	function gohome()
	{
		header('Location: index.php');
	}

?>
