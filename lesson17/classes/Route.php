<?php
	
	/**
	 * Created by PhpStorm.
	 * User: evgeniy
	 * Date: 27/04/16
	 * Time: 21:00
	 */
	class Route
	{
		public function __call($name, $arguments)
		{
			$method = strtolower($_SERVER['REQUEST_METHOD']);
			$name = strtolower($name);

			if($method === $name){

			}

		}
	}