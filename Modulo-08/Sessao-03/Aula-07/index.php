<!DOCTYPE html>
<html>
<head>
	<title>Aula 07</title>
	<meta charset="UTF-8"/>
</head>
<body>

</body>
</html>
<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08/2','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Mostra os erro do PDO

	$sql = $pdo->prepare("SELECT * FROM `cliente` LEFT JOIN `cargo` ON `cliente`.`cargo` = `cargo`.`id`");
	$sql->execute();
	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		echo 'Nome: '.$value['nome'];
		echo ', Cargo: '.$value['nome_cargo'];
		echo '<hr/>';
	}
?>