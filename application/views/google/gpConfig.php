<?php
//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '28233038422-k06654adb846mn5nqo1v5u5rpnla8568.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'MIlzmaY0AChsGQt5JLJMExPZ'; //Google client secret
$redirectURL = base_url().'login/google'; //Callback URL



//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to '.LOGO_NAME);
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>