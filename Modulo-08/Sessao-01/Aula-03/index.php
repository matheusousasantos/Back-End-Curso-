<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

	$id = 3;

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Sandra' WHERE id=$id");
	if($sql->execute()){
		echo 'Cliente atualizado com sucesso!';
	}
?>