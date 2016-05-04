<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lesson 3</title>
</head>
<body>
	<form action="" method="post">
		<p>
			<input type="text" name="name" placeholder="Имя">
		</p>
		<p>
			<input type="text" name="age" placeholder="Возраст">
		</p>
		<p>
			<input type="submit" name="submit" value="Send">
		</p>
	</form>

	<?php
		ini_set('display_errors', 'on');
		if($_REQUEST['submit'] == 'Send'){
			echo "Вас зовут ".$_REQUEST['name']."<br>";
			echo "Ваш возраст ".$_REQUEST['age']." года.";
		}
	?>

	<form action="" method="post">
		<p>
			<input type="text" name="a" required placeholder="A" value="<?=isset($_REQUEST['a']) ? $_REQUEST['a'] : ''?>">
		</p>
		<p>
			<input type="text" name="b" required placeholder="B" value="<?=isset($_REQUEST['b']) ? $_REQUEST['b'] : ''?>">
		</p>
		<p>
			<input type="text" name="c" required placeholder="C" value="<?=isset($_REQUEST['c']) ? $_REQUEST['c'] : ''?>">
		</p>
		<p>
			<input type="submit" name="submit" value="Calc">
		</p>
	</form>

	<?php
		if(isset($_REQUEST['submit'])){
			$a = $_REQUEST['a'];
			$b = $_REQUEST['b'];
			$c = $_REQUEST['c'];
			$x = null;

			if($a < $c){
				$x = $a + $b / $c * $a;
			}elseif($a > $c){
				$x = $c * 3 * $b + $c / $c * sqrt($c);
			}else{
				$x = 100;
			}

			echo  $x;
		}
	?>
</body>
</html>

