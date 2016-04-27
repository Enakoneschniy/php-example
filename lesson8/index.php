<?
//session_save_path($_SERVER['DOCUMENT_ROOT'].'/session');
session_start();

echo $_SESSION['user'];
$user = 'Admin';
//$_SESSION['user'] = $user;
//$_SESSION['name'] = 'ddddd';
//echo $user;
/*var_dump($_SESSION);
var_dump($_COOKIE);
$ses =  json_encode($_SESSION);

var_dump($ses);
$arSes = (array)json_decode($ses);
var_dump($arSes);*/

setcookie('fff','dfdfdf');

var_dump($_COOKIE);