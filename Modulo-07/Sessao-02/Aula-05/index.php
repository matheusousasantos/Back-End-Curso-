<?php
	include('interface1.php'); /*Incluindo a interface*/

	class Teste implements interface1 {

		public function mostrar($par){
			echo $par;
		}

	}

	$teste = new Teste;
	$teste->mostrar('Olá, Mundo');
?>