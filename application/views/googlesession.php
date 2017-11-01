<?php
  require_once 'vendor/autoload.php';
  require 'GoogleAuth.php';
  $googleClient = new Google_Client;
  $auth = new GoogleAuth($googleClient);
	$auth->login();
?>