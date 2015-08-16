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
	
}