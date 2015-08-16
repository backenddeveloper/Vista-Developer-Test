<?php

namespace ForVista ;

final class PrimeFinder {
	
	private $numberOfPrimesRequired ;
	
	private $listOfPrimeNumbers = Array() ;	
	
	public function __construct($numberOfPrimesRequired){
		
		if(is_int($numberOfPrimesRequired) && $numberOfPrimesRequired > 0){
			
			$this->numberOfPrimesRequired = $numberOfPrimesRequired ;

		} else {
			
			throw new \InvalidArgumentException("A non-valid input was entered, expected an integer") ;
			
		}
		
		$this->buildListOfPrimeNumbers() ;
		
	}
	
	private function buildListOfPrimeNumbers(){
		
		$numberToTest = 2 ; //The number 'one' is not defined as a prime number.

		while(count($this->listOfPrimeNumbers) < $this->numberOfPrimesRequired){
			
			if($this->isPrime($numberToTest)){

				array_push($this->listOfPrimeNumbers, $numberToTest) ;
				
			}
			
			$numberToTest++ ;
			
		}				

	}
	
	private function isPrime($numberToTest){
		
		for($divisor = 2 ; $divisor <= sqrt($numberToTest) ; $divisor++){
			
			if($numberToTest % $divisor == 0){
				
				return false ;
				
			}
			
		}
		
		return true ;
		
	}
	
	public Function getListOfPrimeNumbers(){
		
		return $this->listOfPrimeNumbers ;
		
	}
	
}