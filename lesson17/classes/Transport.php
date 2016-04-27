<?php
	class Transport{
		protected $speed = null;
		protected $people_cnt = null;
		protected $weight = null;
		protected $speed_val = null;

		public function __construct($speed, $people_cnt, $weight){
			$this->speed = $speed;
			$this->people_cnt = $people_cnt;
			$this->weight = $weight;
		}

		public function getFormatSpeed(){
			return $this->speed." ".$this->speed_val;
		}

	}


