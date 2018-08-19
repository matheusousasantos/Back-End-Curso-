<?php

	include('Class1.php');

	$pessoa = new Class1('Matheus',24);
	echo $pessoa->getNome();
	echo $pessoa->getIdade();

?>