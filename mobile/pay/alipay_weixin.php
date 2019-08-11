<?php


if(strpos($_SERVER['HTTP_USER_AGENT'],'MicroMessenger'))
{
		define('IN_ECS', true);
		require_once("../includes/init.php");
		$smarty->display('new.dwt');
		exit;
}else{


$url=$_GET['code'];

$url=urldecode($url);

header('Location:'.$url);




}


?>