<?
	ini_set('display_errors','on');
	include 'init.php';

	//$transport = new Transport(100, 5, 5);

	$car1 = new Car(100, 5, 2, 'sedan');
	$car2 = new Car(300, 5, 3, 'hatchback');

	$ship = new Ship(34, 15, 30, 100);

	var_dump($car1);

	echo $car1->getFormatSpeed(),'<br>';
	echo $ship->getFormatSpeed(),'<br>';

	echo "<hr>";

	//echo $car1->body_type,'<br>';

	//$car1->body_type = 'ddd';

	//echo $car1->body_type,'<br>';

	echo "<hr>";

	$car1->new_prop = '3333';

	echo $car1->new_prop, "<br>";
	echo "<hr>";
	$car1->getDistance(1,3,4,5);

	echo "<hr>";

	echo $car1;
	echo "<hr>";

	$car1();

