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
	* 
	*/
	public static function fibonacci($n, $first=0, $second=0) {
		if( $n > 0 ) {
			$sum = $first + $second;
			$first = $second;
			$second = $sum;
			print $sum;
			self::fibonacci($n-1, $first, $second);
		}
	}

	
	public static function fib($n, $all=0){
		$f = array();
		$f[0] = 1;
		$f[1] = 1;
		for($i = 2; $i<= $n; $i++) $f[$i] = $f[$i-1]+$f[$i-2];
		if($all) return $f;
		return $f[$n];
	}

}