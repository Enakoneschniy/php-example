<?php
namespace App;
use App\Exception\FileNotExistsException;
class Config{
    private $_data = null;
    private static $file = 'dbconf.json';
    private static $object = null;
    private $get_arr = null;

    public static function conf(){
        $file = DIR.SEP.self::$file;
        echo $file;
        $json = is_file($file) ? file_get_contents($file) : null;
        if(!is_null($json)){
            if(is_null(self::$object)){
                self::$object = new self();
                self::$object->_data = json_decode($json);
            }
        }else{
            throw new FileNotExistsException($file);
        }
        return self::$object;
    }
    public function __get($name) {
        if($name === 'data')
            return $this->_data;
        $this->get_arr[] = $name;
        return self::conf();
    }

    public function __call($name, $arguments) {
        if(count($arguments) > 1)
            return null;
        if(property_exists($this, $name)){
            if(count($arguments) !== 1)
                return null;
            $this->$name = $arguments[0];
            return self::conf();
        }else{
            $this->get_arr[] = $name;
            $result = $this->_data;
            foreach ($this->get_arr as $name) {
                if (!is_array($result))
                    return null;
                $result = $result[$name];
            }
            $this->get_arr = null;
            return isset($arg[0]) && is_array($result) ?  $result[$arg[0]] : $result;
        }
    }

    public function __destruct() {
        $this->_data = null;
    }
}