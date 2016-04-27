<?php

	class Animal{

		public  $canRun = true;
		//public  $weight = 0;

		public function __construct($weight){
			$this->weight = $weight;

			echo "Hello Animal, Weight: ".$this->weight." <br>";
		}

		public function getWeight(){
			return $this->weight;
		}
	}