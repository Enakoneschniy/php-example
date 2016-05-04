<?php

	abstract class Model
	{
		public  $prop1;
		protected $prop2;

		public function __construct($p1, $p2)
		{
			$this->prop1 = $p1;
			$this->prop2 = $p2;
		}

		abstract public function show($a, $b);

		public function sayHello(){
			echo 'Hello '.$this->prop1;
		}
	}