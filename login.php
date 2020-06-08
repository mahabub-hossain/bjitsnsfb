<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once __DIR__ .('/src/Facebook/FacebookLogin.php');
$config = include('config.php');
$faceBook = new \BJIT\Facebook\FacebookLogin($config);
$url = $faceBook->getUrl();
//echo $url;
?>
<a href="<?php echo $url;?>">FacebookLogin</a>


