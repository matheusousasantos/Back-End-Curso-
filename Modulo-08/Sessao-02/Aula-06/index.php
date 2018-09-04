<!DOCTYPE html>
<html>
<head>
	<title>Aula 06</title>
	<meta charset="UTF-8"/>
</head>
<body>

</body>
</html>
<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08/2','root','');
	$sql = $pdo->prepare("SELECT * FROM `cliente` GROUP BY `cliente`.`cargo`");
	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		echo 'Nome: '.$value['nome'];
		echo'<hr>';
	}
?>