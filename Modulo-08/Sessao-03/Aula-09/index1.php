<?php
	
	$pdo = new PDO('mysql:host = localhost; dbname=modulo_08/2', 'root', '');
	
	$sql = $pdo->prepare("SELECT * FROM `cliente`");
	$sql->execute();

	$clientes = $sql->fetchAll();

	foreach ($clientes as $key => $value) {
		echo $value['nome']; //Mostre-me o valor na posição nome.
		echo '<hr>';
	}
?>