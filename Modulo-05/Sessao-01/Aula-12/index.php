<?php
	
	final class Filha(){

		public function mostrarOla(){

			echo 'Olá Mundo';
		}
	}

	final class Pai(){

		public function mostrarThau(){

			echo 'Tchau mundo!';
		}

	}


	/* Aqui, como se fosse o Main do Java*/

	$pai = new Pai; /*Instânciando*/
	pai->mostrarTchau();
?>