<?php 
session_start();

$_SESSION['select'] = $_POST['select'];

header("Location: ". $_SERVER["HTTP_REFERER"]);
exit;

 ?>