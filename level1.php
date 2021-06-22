<?php

require_once "functions.php";
session_start();

$echo1 = '*********** *EMPTY* ************';
$echo2 = 'Выбери ответ';


$f = fopen("right_tmp.txt", "r");
$right = fread($f, filesize("right_tmp.txt"));
fclose($f);
$f = fopen("wrong_tmp.txt", "r");
$wrong = fread($f, filesize("wrong_tmp.txt"));
fclose($f);






if (isset($_SESSION['select'])) {
	if ($_SESSION['select'] == "Выбирай...") {
		$echo2 = "Выбери ответ";
	}else{
		$echo3 = $_SESSION['select'];
		$f = fopen("temp.txt", "r");
		$tmp = fread($f, filesize("temp.txt"));
		fclose($f);
		if ($_SESSION['select'] == $tmp) {
			$echo2 = 'ПРАВИЛЬНО ';
			$f = fopen("right_tmp.txt", "r");
			$right = fread($f, filesize("right_tmp.txt"));
			fclose($f);
			$right++;
			$f = fopen("right_tmp.txt", "w");
			fwrite($f, $right);
			fclose($f);
		}else{
			$echo2 = 'НЕВЕРНО!';
			$f = fopen("wrong_tmp.txt", "r");
			$wrong = fread($f, filesize("wrong_tmp.txt"));
			fclose($f);
			$wrong++;
			$f = fopen("wrong_tmp.txt", "w");
			fwrite($f, $wrong);
			fclose($f);
			
		}
	}
}
examp_simple();
$echo3 = $result;
$echo1 = $ab_str;

session_destroy();
session_write_close();

get_level_template('Уровень 1', 'lvl1+shadow.png', $echo1, $echo2);
?>


