<?php
	require 'authentication.php';
  class GoogleAuth
  {
    private $client;
    public function __construct(Google_Client $googleClient)
    {
      $this->client = $googleClient;
      $this->client->setClientId('534533501953-tpd6vm1algid15ilguj16jt5frdbg3ds.apps.googleusercontent.com');
      $this->client->setClientSecret('tw7syabfS5_yl5rJnhOcwj32');
      $this->client->setRedirectUri('http://www.gotcha6tech.com/index2.php');
      $this->client->setScopes('email');
    }

    public function checkToken()
    {
      if(isset($_SESSION['access_token']) && !empty($_SESSION['access_token']))
      {
        $this->client->setAccessToken($_SESSION['access_token']);
      }
      else
      {
        return $this->client->createAuthUrl();
      }
      return '';
    }

    public function login()
    {
			if(isset($_GET['code']))
      {
    		//session_start();
				try
				{
					$this->client->setHttpClient(new GuzzleHttp\Client(['verify' => false]));
        	$this->client->authenticate($_GET['code']);
					$oauth2 = new Google_Service_Oauth2($this->client);
					$userInfo = $oauth2->userinfo->get();
					$_SESSION['access_token'] = $this->client->getAccessToken();
					$_SESSION['insession'] = "yes";
					$_SESSION['first_name'] = $userInfo['givenName'];
					$_SESSION['last_name'] = $userInfo['familyName'];
					$_SESSION['display_name'] = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
					$_SESSION['googlesignin'] = true;
					$_SESSION['fingerprint'] = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
					$_SESSION['last_active'] = time();
					$payload = $this->getPayload();
					$email = $payload['email'];
					$password = $payload['sub'];
					$user = new Authentication();
					$success = $user->signin($email, $password);
					if(!$success)
					{
						$success = $user->signup($email, $password);
						if($success)
						{
							$user->registeruser($_SESSION['first_name'], '' , $_SESSION['last_name'], '', '', 'customer', '');
							header("Location: registration.html");
						}
					}
					else
					{
						$user->userinfo();
					}
					return true;
				}
				catch(Exception $ex){}
			}
			return false;
    }

    public function logout()
    {
			session_start();
			//echo "<script type='text/javascript'>alert("$_SESSION['access_token'];")</script>";
			/*unset($_SESSION['access_token']);
			unset($_SESSION['insession']);
			unset($_SESSION['first_name']);
			unset($_SESSION['last_name']);*/
			$_SESSION = [];
			session_unset();
			session_destroy();
    }

    public function getPayload()
    {
      return $this->client->verifyIdToken();
    }
  }
?>