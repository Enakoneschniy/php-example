<?
	spl_autoload_register(function($class){
		$file = "classes/$class.php";
		include $file;
	});