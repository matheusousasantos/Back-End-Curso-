<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

	/*
	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");
	$sql->execute(array($_GET['categoria_id']));

	$info = $sql->fetchAll(); //Pega todas as informações da tabela.

	
	foreach ($info as $key => $value) {
		echo 'Título: '.$value['titulo'];
		echo '<br/>';
		echo 'Notícia: '.$value['conteudo'];
		echo '<hr>';
	}
	

	for($i = 0; $i < count($info); $i++){
		echo 'Título: '.$info[$i]['titulo'];
		echo '<br/>';
		echo 'Notícia: '.$info[$i]['conteudo'];
		echo '<hr>';
	}
	*/


	$sql = $pdo->prepare("SELECT * FROM `posts` p INNER JOIN `categorias` c ON p.categoria_id = c.id");
	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		echo 'Título: '.$value['titulo'];
		echo '<br/>';
		echo 'Notícia: '.$value['conteudo'];
		echo '<hr>';
	}
?>