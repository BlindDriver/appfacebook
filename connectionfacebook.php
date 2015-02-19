<?php
// Id et secret de l'app test
$appId = '844667202256546';
$appSecret = 'ce672625fef858a3c04d2adc73e04274';
$redirectUrl = 'https://appwebfacebook.herokuapp.com';
//$permissions = array ('email', 'user_birthday');
$permissions = array ();
//Session
session_start();

//Autoload the required files
require_once('facebook-php-sdk-v4-4.0-dev/autoload.php');

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

//Initialiser le SDK
FacebookSession::setDefaultApplication($appId, $appSecret);

$helper = new FacebookRedirectLoginHelper($redirectUrl);

//$loginUrl = $helper->getLoginUrl($permissions);
$loginUrl = $helper->getLoginUrl();

//echo $loginUrl; // sur la sortie qu'on aura, à la fin il y a scope = ? qui correspond au contenu de $permissions
?>

<div>	<a href="<?php echo $loginUrl;?>"> Connection </a> </div>

