<?php
	
	$pdo = new PDO('mysql:host = localhost; dbname=modulo_08/2', 'root', '');

	$pdo->exec("LOCK TABLES `cliente` WRITE");
	sleep(10);
?>

