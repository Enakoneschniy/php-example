<?
	ini_set('display_errors', 'on');

	class Human
	{
		public static $eyes = 2;
		private static $religion = 'XXXX';
		const PI = 3.14;

		public $age = 23;
		public $name = 'Evgeniy';

		public static function getReligion()
		{
			return self::$religion;
		}

		public static function setReligion($value)
		{
			self::$religion = $value;
		}
	}

	echo Human::$eyes, '<br>';

	Human::$eyes = 1;

	echo Human::$eyes, '<br>';

	echo Human::getReligion(), '<br>';
	Human::setReligion('ggggg');
	echo Human::getReligion(), '<br>';

	$human1 = new Human;
	$human2 = new Human;

	echo $human1->age, '<br>';
	$human1->age = 22;
	echo $human1->age, '<br>';


	echo $human2->age, '<br>';

	echo $human2::$eyes, '<br>';
	$human2::$eyes = 3;
	echo $human1::$eyes, '<br>';
	echo $human1::PI, '<br>';

	define('PI', 44);

	const HHH = 345;

	class FS
	{
		public static function read_file($path)
		{

		}
	}

	$arr = [ 1, 2, 3, 4 ];