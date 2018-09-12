<?php
	
	$pdo = new PDO('mysql:host = localhost; dbname=modulo_08/2', 'root', '');
	$sql = $pdo->prepare("SELECT * FROM cliente WHERE nome LIKE '%a%'");
	$sql->execute();

	$clientes = $sql->fetchAll();

	foreach ($clientes as $key => $value) {
		
		echo $value['nome'];
		echo $value['cargo'];
		echo '<hr>';
		

	}

?>

