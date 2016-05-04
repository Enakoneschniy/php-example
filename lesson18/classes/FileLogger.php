<?php
	
	/**
	 * Created by PhpStorm.
	 * User: evgeniy
	 * Date: 30/04/16
	 * Time: 14:55
	 */
	class FileLogger implements ILogger
	{
		
		public function log($text)
		{
			echo "File: ".$text;
		}
	}