<?php
	
	/**
	 * Created by PhpStorm.
	 * User: evgeniy
	 * Date: 23/04/16
	 * Time: 15:09
	 */
	class File
	{
		private $handler = null;
		private $length = null;
		private $buffer = null;

		public function __construct($path)
		{
			$this->handler = fopen($path, 'a+');
			$this->length = filesize($path);
			echo "<br>construct<br>";
		}

		public function read(){
			if($this->buffer == null){
				$this->buffer = fread($this->handler, $this->length);
			}
			return $this->buffer;
		}

		public function write($text){
			$this->buffer .= $text;
			fwrite($this->handler, $this->buffer);
		}

		public function __destruct()
		{
			echo "<br>destruct<br>";
			fclose($this->handler);
		}
	}