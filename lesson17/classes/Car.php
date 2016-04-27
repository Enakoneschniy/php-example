<?php

	class Car extends Transport
	{
		private $body_type = null;
		protected $speed_val = 'km/h';

		public function __construct($speed, $people_cnt, $weight, $body_type)
		{
			parent::__construct($speed, $people_cnt, $weight);
			$this->body_type = $body_type;
		}

		final public function getFormatSpeed()
		{
			return "Car speed: ".parent::getFormatSpeed();
		}

		public function __get($name)
		{
			if(property_exists(__CLASS__, $name)){
				return $this->$name;
			}else{
				return 'Error';
			}

		}

		public function __set($name, $value)
		{

		}

		public function __call($name, $arguments)
		{
			echo $name;
			var_dump($arguments);
		}

		public function __toString()
		{
			return 'This is Car '.$this->speed." ".$this->speed_val;
		}

		public function __invoke()
		{
		}
	}