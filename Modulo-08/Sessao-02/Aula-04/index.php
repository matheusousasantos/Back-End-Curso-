<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

	$id = 4;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
	if($sql->execute(array($id))){
		echo 'Cliente deletado com sucesso!';
	}
?>