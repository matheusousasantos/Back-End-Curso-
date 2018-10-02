<?php
	
	$pdo = new PDO('mysql:host = localhost; dbname=modulo_08/2', 'root', '');
	/*
	$tabelas = $pdo->query("SHOW TABLES");

	$tabelas = $tabelas->fetchAll();

	echo '<pre>';
	print_r($tabelas);
	echo '</pre>';
	*/

	$sql = 'CREATE TABLE cursos(
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nome_curo VARCHAR(255) NOT NULL
	)';

	$pdo->exec($sql);

?>

