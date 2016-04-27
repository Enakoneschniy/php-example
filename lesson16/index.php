<?
	include 'init.php';


	$animal = new Animal(3);

	$myAnimal = new Animal(5);

	echo $animal->getWeight(), "<br>";

	$animal->weight = 45.66;

	echo $animal->weight, '<br>';

	$cat = new Cat();

	echo $cat->weight, "<br>";

	echo $cat->name;

	$cat->name = "Byte";


	echo $cat->name;
	/*

		$myCat = new Cat();*/


	$file = new File('text.txt');

	echo 'File content: <br>', $file->read();

	$file->write('Hello World');

	echo 'File content: <br>', $file->read();

	unset($file);

	echo "sdsdsdsd";

