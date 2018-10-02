<?php
	
	$pdo = new PDO('mysql:host = localhost; dbname=modulo_08/2', 'root', '');

	$sql = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo");

	$sql->execute();
	echo '<pre>';
	print_r($sql->fetchAll());
	echo '</pre>';
?>

