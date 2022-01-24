<?php
session_start();

$numberString = $_POST['numberString'];
$numberStringLenhgt = strlen($numberString);

if($numberStringLenhgt > 0){
  require_once('index.php');
  $_SESSION['numberString'] = $numberString;
}


?>
