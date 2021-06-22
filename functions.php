<?php 
// require_once "statements.php";

$a=0;
$b=0;
$ab_str = '';
$result = 0;
$global_title = '';
$global_image = '';


function minus_plus() {
	$sigh = '+';
	$rand_sign = rand(1,2);
	if ($rand_sign == 1) {
		$sign = '+';
	}else{
		$sign = '-';
	}
	return $sign;
}

function examp_simple() {
	global $a;
	global $b;
	global $ab_str;
	global $result;

	$a = rand(0,9);
	$b = rand(0,9);
	$sign = minus_plus();

	//подбор чисел, чтобы сумма была не больше 10
	if ($sign == '+') {
		if(($a + $b) > 10){
			do {
				$a = rand(0,9);
				$b = rand(0,9);
			} while ( ($a + $b) > 10);
		}
		$result = $a + $b;
		$f = fopen("temp.txt", "w");
		fwrite($f, $result);

	}
	
	

	//прверка на отрицательность результата
	if ($sign == '-') {
		if ($b > $a) {
			$x = $a;
			$a = $b;
			$b = $x;
		}
		$result = $a - $b;
		$f = fopen("temp.txt", "w");
		fwrite($f, $result);
		fclose($f);
	}
	$ab_str = "$a $sign $b = "; 
}

function examp()
{
	global $a;
	global $b;
	global $ab_str;
	global $result;

	$a = rand(0,10);
	$b = rand(0,10);
	$sign = minus_plus();

	//подбор чисел, чтобы сумма была не больше 10
	if ($sign == '+') {
		$result = $a + $b;
		$f = fopen("temp.txt", "w");
		fwrite($f, $result);
	}
	
	

	//прверка на отрицательность результата
	if ($sign == '-') {
		if ($b > $a) {
			$x = $a;
			$a = $b;
			$b = $x;
		}
		$result = $a - $b;
		$f = fopen("temp.txt", "w");
		fwrite($f, $result);
		fclose($f);
	}
	$ab_str = "$a $sign $b = "; 
}

function answer() {
	global $a;
	global $b;


}

function get_statement() {
	global $statements;
	return $statements[rand(0, count($statements) - 1)];
}

function get_level_template($title, $image, $e1, $e2){
	global $global_title;
	global $global_image;
	global $echo1;
	global $echo2;
	$global_title = $title;
	$global_image = $image;
	$echo1 = $e1;
	$echo2 = $e2;
	include "level_template.php";
}

 ?>