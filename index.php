<?php
$echo1 = '*********** *EMPTY* ************';
$f = fopen("right_tmp.txt", "w");
fwrite($f, 0);
fclose($f);
$f = fopen("wrong_tmp.txt", "w");
fwrite($f, 0);
fclose($f);
require_once "statements.php";
require_once "functions.php";

$statement = get_statement();

 ?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>*МАТЕМАТИКА*</title>
 <link rel="stylesheet" type="text/css" href="/template1.css">
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body class="body-level" style="background-color: #222">
	<div style="margin-top: 30px">
		<image src="baldi_welcome+shadow.png" width="160" height="308" class="leftimg"></image>
		<div style="statement" class="statement" role="alert"><h2><span  ><?php echo $statement; ?></span></h2></div>

		<div style="margin-top: 150px "><h3><span  class="alert alert-info index_buttons grey_shadow statement" role="alert">Выберите уровень сложности</span></h3></div>

		<div class="index_buttons" style="">
			<a class="btn btn-outline-light btn-lg grey_shadow" href="level1.php" title="Для Малышей" role="button">Уровень 1</a>
			<a class="btn btn-outline-light btn-lg grey_shadow" href="level2.php" title="Осваиваем ГОРШОК" role="button">Уровень 2</a>
			<a class="btn btn-outline-danger btn-lg red_shadow red_text" href="#" title="Сюда пока рано!!!" role="button">Уровень 3</a>
		
		</div>
	</div>	
	<!-- <p><?=$echo1 ?></p>
 -->


</body>
</html>