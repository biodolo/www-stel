<?php 
include 'header.php';

if(isset($_GET["area"])){
	$base = 'areas/' . $_GET["area"] . '/' ;
	include($base . 'content.php');
}else {
	include('home.php');
}

include 'footer.php'; 
?>
