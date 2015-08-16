<?php

namespace ForVista ;

require_once('app/PrimeFinder.php') ;

class PrimeFinderTest extends \PHPUnit_Framework_TestCase {
	
	public $test ;
	
	public function setup(){
		
		$this->test = new PrimeFinder(10) ;
		
	}
	
	public function testList(){
		
		$list = $this->test->getListOfPrimeNumbers() ;
		
		$this->assertEquals($list,Array(2,3,5,7,11,13,17,19,23,29));
		
	}
	
	public function testList100 (){
		
		unset($this->test) ; 

		$this->test = new PrimeFinder(100) ;
		
		$list = $this->test->getListOfPrimeNumbers() ;
		
		$this->assertEquals($list,Array(
				2,      3,      5,      7,      11,     13,     17,     19,     23,     29,
				31,     37,     41,     43,     47,     53,     59,     61,     67,     71,
				73,     79,     83,     89,     97,     101,    103,    107,    109,    113,
				127,    131,    137,    139,    149,    151,    157,    163,    167,    173,
				179,    181,    191,    193,    197,    199,    211,    223,    227,    229,
				233,    239,    241,    251,    257,    263,    269,    271,    277,    281,
				283,    293,    307,    311,    313,    317,    331,    337,    347,    349,
				353,    359,    367,    373,    379,    383,    389,    397,    401,    409,
				419,    421,    431,    433,    439,    443,    449,    457,    461,    463,
				467,    479,    487,    491,    499,    503,    509,    521,    523,    541
				));
		
	}
	
	public function tearDown() {
		
		unset($this->test) ;
		
	}
	
}