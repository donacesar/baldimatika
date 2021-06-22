<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>*<?=$global_title ?>*</title>
 
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/template1.css">

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body class="body-level" style="background-color: #222">

<div class="C_of_P main-block">
	<div class="red_shadow" style="font-size: 50%; padding-left:40px;"><span><?=$global_title ?></span></div>

	<div style="margin-top: 30px">
		
		<image src="<?=$global_image ?>" width="260" height="260" class="leftimg"></image>


		<div style="margin-top: 10px"><h2><span class="alert alert-success C_of_P" role="alert"><?=$echo1 ?> ?</span></h2>
		</div>

		<div style="margin-top: 70px"><h2><span class="alert alert-warning grey_shadow" role="alert"><?=$echo2 ?></span></h2></div>


		
	</div>
	<div style="margin-top: 50px">
		<form action="request.php" class="form-inline" method="POST">
		  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="select">
		    <option selected>Выбирай...</option>
		    <option value="0">0</option>
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
		    <option value="9">9</option>
		    <option value="10">10</option>
		    <option value="11">11</option>
		    <option value="12">12</option>
		    <option value="13">13</option>
		    <option value="14">14</option>
		    <option value="15">15</option>
		    <option value="16">16</option>
		    <option value="17">17</option>
		    <option value="18">18</option>
		    <option value="19">19</option>
		    <option value="20">20</option>
		  </select>
	
			  <button type="submit" class="btn btn-success my-1" title="Нажимай!"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-spreadsheet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6h-3v2h3V7zm0 3h-3v2h3v-2zm0 3h-3v2h2a1 1 0 0 0 1-1v-1zm-4 2v-2H6v2h3zm-4 0v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2zm3-2v2h3V7H6zm3 3H6v2h3v-2z"/>
</svg> Проверим</button>
		</form>	
	</div>

	<?php require "transport.php" ?>
</div>

</body>
</html>