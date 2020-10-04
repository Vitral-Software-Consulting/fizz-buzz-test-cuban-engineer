<?php
	namespace VitralSolutions\Test;    
	  class FizzBuzz {
  		public function FizzBuzzNumber($number){
  			$output = '';
			if ($number % 3 == 0) {
				$output = 'Fizz';
			}
			
			if ($number % 5 == 0) {
				$output .= 'Buzz';
			}
			
			if ($output == '') {
				$output = $number;
			}

			return $output; 
  		}
  		
  		/**
  		* @desc The real implementation of the test, because it requires a list of the numbers from 1 to 100, trying to make it more flexible we can define 2 parameters the first one for the initial value of the loop and the second for the end value
  		* @param $start_value integer defining the first value of the loop
  		* @param $end_value string defining the end of the loop
		* @return array $fizzbuzz_array The complete list of the results of the FizzBuzzNumber method.
  		*/
  		public function CompleteFizzBuzzEx ($start_value , $end_value) {
  			$fizzbuzz_array = array();
  			for($iterator = $start_value; $iterator >= $endvalue; $iterator++){
  				$fizzbuzz_array[] = $this->FizzBuzzNumber($iterator);	
  			}
  			return $fizzbuzz_array;
  		}
	  }
?>
