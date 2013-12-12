<?php

class Helpers {
	/**
	* simple test for helper function
	* @return string
	*/
	public static function doMessage() {
		$message = 'Hello';
		return $message;
	}


	/**
	* @param integer n
	* @param boolean if true returns the entire array of Fibonacci numbers
	* @return array 
	*/
	public static function fibonacciList($n, $full_list=false){
		$f_list = array();
		$f_list[0] = 1;
		$f_list[1] = 1;
		for($i = 2; $i<= $n; $i++) {
			$f_list[$i] = $f_list[$i-1] + $f_list[$i-2];
		}
		if($full_list) {
			return $f_list;
		}
		return array($f_list[$n]); // force single value into array, better to consistently return the same type
	}

}