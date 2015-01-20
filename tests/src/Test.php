<?php 

use \Wobeto\String\String;

class Test extends \PHPUnit_Framework_Testcase
{
	private $String;
	
	public function __construct(){
		$this->String = new String('Only a test');
	}

	public function testLen(){
		$this->assertEquals(11, $this->String->len());
	}

	public function testMd5(){
		$this->assertEquals('01b4d95ee89dedc229e3d6753a16cf91', $this->String->md5());
	}

	public function testReverse(){
		$this->assertEquals('tset a ylnO', $this->String->reverse());	
	}

	public function testToLower(){
		$this->assertEquals('only a test', $this->String->toLower());
	}

	public function testToUpper(){
		$this->assertEquals('ONLY A TEST', $this->String->toUpper());
	}

	public function testTrim(){
		$string = new String('  Only a test  ');
		$this->assertEquals('Only a test', $string->trim());
	}

	public function testUcFirst(){
		$string = new String('only a test');
		$this->assertEquals('Only a test', $string->ucFirst());	
	}

	public function testUcWords(){
		$this->assertEquals('Only A Test', $this->String->ucWords());
	}

	public function testSubstr(){
		$this->assertEquals('ly a tes', $this->String->substr(2,8));
	}

	public function testReplace(){
		$this->assertEquals('One more test', $this->String->replace('Only a', 'One more'));
	}

	public function testSplit(){
		$this->assertInternalType('array', $this->String->split());
		$this->assertEquals(11, count($this->String->split()));

		$this->assertInternalType('array', $this->String->split(2));
		$this->assertEquals(6, count($this->String->split(2)));		
	}

	public function testExplode(){
		$explode = $this->String->explode(' ');
		$this->assertInternalType('array', $explode);
		$this->assertEquals(3, count($explode));
	}

}