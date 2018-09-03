<?php
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');
	//$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'Matheus','Sousa','2018-09-01 12:00:00')");
	//$sql->execute();

	if(isset($_POST['acao'])){ /* Verifica se a variável está definida */
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$momento_registro = date('Y:m:d H:i:s');

		$sql = $pdo->prepare("INSERT INTO `clientes` VALUES(null,?,?,?)");
		$sql->execute(array($nome,$sobrenome,$momento_registro));
		echo 'Ação realizada';
		echo 'Cliente inserido com sucesso!';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Aula 02</title>
</head>
<body>
	<form method="post"> 
		<input type="text" name="nome" required/>
		<input type="text" name="sobrenome" required/>
		<input type="submit" name="acao" value="Enviar"/>


	</form>
</body>
</html>