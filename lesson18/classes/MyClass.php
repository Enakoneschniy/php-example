<?php

	class MyClass {
		private $logger;

		public function __construct(ILogger $logger){
			$this->logger = $logger;
		}

		public function sum($a, $b){
			$sum = $a + $b;
			$this->logger->log('sum = '.$sum);
			return $sum;
		}
		
	}