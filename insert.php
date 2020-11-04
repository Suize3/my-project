<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'store');
	$text_zaprosa_vstavit = "INSERT INTO items (tittle, description, price, img) VALUES ('" . $_GET["tittle"] . "','" . $_GET["description"] . "', '" . $_GET["price"] . "', '" . $_GET["img"] . "')";
	$zapros_vstavit = mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location: index.php');
 ?>