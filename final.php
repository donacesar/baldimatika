<?php
$echo1 = '';
$f = fopen("right_tmp.txt", "r");
$right = fread($f, filesize("right_tmp.txt"));
fclose($f);
$f = fopen("wrong_tmp.txt", "r");
$wrong = fread($f, filesize("wrong_tmp.txt"));
fclose($f);

if (($right + $wrong) == 0) {
	$echo1 = 'Сначала решите примеры!!!!';
}elseif($right == 0) {
		$echo1 = "Ваша оценка : 2";
}elseif ($wrong == 0) {
		$echo1 = "Ваша оценка : 5";
}elseif ($right == $wrong) {
	$echo1 = "Ваша оценка : 3";
}else{
	$final = $right / $wrong;
	if ($final > 0.5) {
		$echo1 = "Ваша оценка : 4";
	}
	if ($final <= 0.5) {
		$echo1 = "Ваша оценка : 3";
	}
}
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
	<div class="C_of_P final-block" style="margin-top: 30px">
		<image src="lvl2+shadow.png" width="260" height="260" class="leftimg"></image>
		<div style="margin-left: 200px">
			<div style="margin-top: 30px"><h2><span class="alert alert-success grey_shadow" role="alert">Правильных ответов : <?=$right ?>	</span></h2></div>	
	
			<div style="margin-top: 50px"><h2><span class="alert alert-success grey_shadow" role="alert">Неправильных ответов : <?=$wrong 	?></span></h2></div>	
	
	
			<div style="margin-top: 100px"><h3><span style="margin-top: 350px " class="alert alert-info grey_shadow" role="alert"><blink><?=$echo1	 ?></blink></span></h3></div>	
	
				
		</div>
		<div style="margin-top: 90px">
					<a class="btn btn-outline-light btn-lg red_shadow" href="index.php" role="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
</svg> Назад</a>
				</div>	
	</div>
		
	<!-- <p><?=$echo1 ?></p>
 -->


</body>
</html>