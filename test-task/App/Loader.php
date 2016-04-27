<?php
/**
 * Created by PhpStorm.
 * User: evgeniy
 * Date: 07/04/16
 * Time: 00:41
 */

namespace App;



class Loader{
	protected $_libraryDirectoryPath = array();

	public function __construct(){
		$this->libraryDirectoryPath     = LPATH;

		spl_autoload_register(array($this,'load_library'));
	}


	public function load_library($library, $param = null)
	{
		if (is_string($library)) {
			return $this->initialize_class($library);
		}
		if (is_array($library)) {
			foreach ($library as $key) {
				return $this->initialize_class($library);
			}
		}
	}


	public function initialize_class($library)
	{
		try {
			if (is_array($library)) {
				foreach($library as $class) {
					$arrayObject =  new $class;
				}
				return $this;
			}
			if (is_string($library)) {
				$stringObject = new $library;
			}else {
				throw new ISException('Class name must be string.');
			}
			if (null == $library) {
				throw new ISException('You must enter the name of the class.');
			}
		} catch(Exception $exception) {
			echo $exception;
		}
	}

	/**
	 * Autoload Controller class
	 *
	 * @param  string $class
	 * @return object
	 */

	public function load_controller($controller)
	{
		if ($controller) {
			set_include_path($this->controllerDirectoryPath);
			spl_autoload_extensions('.php');
			spl_autoload($class);
		}
	}


	/**
	 * Autoload Model class
	 *
	 * @param  string $class
	 * @return object
	 */

	public function load_models($model)
	{
		if ($model) {
			set_include_path($this->modelDirectoryPath);
			spl_autoload_extensions('.php');
			spl_autoload($class);
		}
	}

	/**
	 * Autoload Library class
	 *
	 * @param  string $class
	 * @return object
	 */

	public function load_library($library)
	{
		if ($library) {
			set_include_path($this->libraryDirectoryPath);
			spl_autoload_extensions('.php');
			spl_autoload($class);
		}
	}



}