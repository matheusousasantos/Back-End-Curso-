<?php
	
	$pdo = new PDO('mysql:host = localhost; dbname=modulo_08/2', 'root', '');
	//$sql = $pdo->prepare("SELECT * FROM cliente WHERE id IN(1,3)");

	$sql = $pdo->prepare("SELECT * FROM cliente WHERE id BETWEEN'1' AND '3'");
	$sql->execute();

	$clientes = $sql->fetchAll();

	foreach ($clientes as $key => $value) {
		
		echo $value['nome'];
		echo $value['cargo'];
		echo '<hr>';
		

	}

?>

