<?php

	class DBLogger implements ILogger
	{
		
		public function log($text)
		{
			echo "DataBase: ".$text;
		}
	}