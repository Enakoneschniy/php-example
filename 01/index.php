<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lesson 2</title>
</head>
<body>
<?php
	$a = 2;
	$A = null;

	$ageHuman = 23;
	$ageAnimal = 23;
	$sidebarWidth = 100;

	$Возраст = 49;//это не верно

	//это строчный комментарий

	/*
	 *
	 * Это блочный комментарий
	 *
	 * */

	$a = 2;
	$b = 3;

	echo "<strong>Hello world</strong>";

	echo "<hr>";

	$sum = $a + $b;
	echo $sum;

	echo "<hr>";

	$mul = $a * $b;

	$a = 4.6;

	$sum = $a + $b;
	echo $sum, "<br>";

	$sum = $sum + 4 * $sum;//$sum += 4 * $sum;

	$res = sqrt($sum);

	echo $res, "<br>";

	$round = round($res, 2);

	echo $round, "<br>";

	$floor = floor($res);

	echo $floor, "<br>";

	$ceil = ceil($res);

	echo $ceil, "<br>";

	echo "<hr>";

	$str = 'Это строка!<br>';
	echo $str;

	$a = 4;
	$pow = 3;
	$res = pow($a, $pow);

	/*$a++;
	$a--;
	++$a;*/
	echo $a++,"<br>";
	echo $a;

	echo ++$a,"<br>";
	//echo $a;

	$a = 99;
	$b = 9;
	$c = 5;

	$c = $a++/$b++ + ++$b;
	echo $c, "<br>";

	//echo '$a вo $pow степени равно $res';

	define('PI', 3.14);

	$name = "1234";
	echo strlen($name), "<br>";
	echo "ssdsd", "<br>";
?>

</body>
</html>