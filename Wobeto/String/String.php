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

	public function reverse(){
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

	public function ucFirst(){
		return String::factory(ucfirst($this->string));
	}

	public function ucWords(){
		return String::factory(ucwords($this->string));
	}

	public function substr($start = 0, $length = null){
		if(!is_null($length)){
			return String::factory(substr($this->string, $start, $length));	
		}
		return String::factory(substr($this->string, $start));
	}

	public function replace($search, $replace){
		return String::factory(str_replace($search, $replace, $this->string));
	}

	public function split($split_length = 1){
		return array_map(function($value){
			return String::factory($value);
		}, str_split($this->string, $split_length));
	}

	public function shuffle(){
		return String::factory(str_shuffle($this->string));
	}

	public function nl2br(){
		return String::factory(nl2br($this->string));
	}

	public function format(){
		$args = func_get_args();
		if(count($args) == 1){
			if(is_array($args[0])){
				$args = $args[0];
			}
		}
		return String::factory(vsprintf($this->string, $args));
	}

	public function __toString(){
		return $this->string;
	}

}