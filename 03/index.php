<?php
	$a = 0;
	$b = 0;

	if($a == $b && $a > 0 ){//и
		echo "one";
	}elseif($a > 0){
		echo "two";
	}

	echo "<hr>";

	if($a == $b || $a > 0 || $a != 0){//или
		echo "one";
	}elseif($a == 0){
		echo "two";
	}

	echo "<hr>";
	$a = 2;
	$b = -2;
	if(($a == $b || $a > 0) && $b != 0){//или
		echo "one";
	}elseif($a == 0){
		echo "two";
	}

	echo "<hr>";

	$day = date("N");

	switch($day){
		case 1:
			echo "Понедельник";
			break;
		case 2:
			echo "Вторник";
			break;
		case 3:
			echo "Среда";
			break;
		case 4:
			echo "Четверг";
			break;
		case 5:
			echo "Пятница";
			break;
		case 6:
			echo "Суббота";
			break;
		case 7:
			echo "Воскресенье";
			break;
	}

	echo "<hr>";

	$day = date("N");

	switch($day){
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo "Рабочий день";
			break;
		case 6:
		case 7:
			echo "Выходные";
			break;
	}

	echo "<hr>";

	$day = "xcsscsd";

	switch($day){
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo "Рабочий день";
			break;
		case 6:
		case 7:
			echo "Выходные";
			break;

		default:
			echo "Ошибка!!";
			break;
	}

	echo "<hr>";
	//так нельзя делать!!!!!
	$day = date("N");
	switch(true){
		case $day == 1:
			echo "one";
			break;
		case $day == 6:
			echo "Суббота";
			break;
	}

	echo "<hr>";

	$i = 0;
	$n = 10;
	while($i < $n){
		echo "Число: $i<br>";
		$i++;
	}
	echo "<hr>";
	$i = 0;
	$n = 10;
	?>
	<ul>
		<?while($i < $n):?>
			<li>Item <?=$i++?></li>
		<?endwhile?>
	</ul>

	<?
	echo "<hr>";
	$i = 0;
	$n = 10;
	do{
		echo "Число: $i<br>";
		$i++;
	}while($i < $n);

	echo "<hr>";

	$i = 10;
	$n = 10;
	do{
		echo "Число: $i<br>";
		$i++;
	}while($i < $n);

	echo "<hr>";
	$i = 0;
	for(;$i < $n; $i++){
		echo "Число: $i<br>";
	}

	echo "<hr>";

	$a = 1 + 1;
	for($i = $a; $i < $n; $i++){
		echo "Число: $i<br>";
	}
