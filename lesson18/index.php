<?
	ini_set('display_errors', 'on');
	include 'init.php';

	$obj = new MyClass(new FileLogger());
	$sum = $obj->sum(2, 3);

	echo "<hr>";

	$obj1 = new MyClass(new DBLogger());
	$sum = $obj1->sum(34, 3);