<?php 

namespace Wobeto\String;

class String{

	private $string;

	function __construct($string = ''){
		$this->string = $string;
	}

	public static function factory($string = ''){
		return new self($string);
	}

	public function explode($delimiter){
		$explode = explode($delimiter, $this->string);
		return array_map(function($value){
			return String::factory($value);
		}, $explode);
	}

	public function md5(){
		return md5($this->string);
	}

	public function len(){
		return strlen($this->string);
	}

	public function rev(){
		return String::factory(strrev($this->string));
	}

	public function toLower(){
		return String::factory(strtolower($this->string));
	}

	public function toUpper(){
		return String::factory(strtoupper($this->string));
	}

	public function trim(){
		return String::factory(trim($this->string));
	}

	public function ucfirst(){
		return String::factory(ucfirst($this->string));
	}

	public function ucwords(){
		return String::factory(ucwords($this->string));
	}

	public function substr($start = 0, $length = null){
		if(!is_null($length)){
			return String::factory(substr($this->string, $start, $length));	
		}
		return String::factory(substr($this->string, $start));
	}

	public function __toString(){
		return $this->string;
	}

}