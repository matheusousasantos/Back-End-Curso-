<?php

	class Pai {

		public function mostrarTchau(){

			echo 'Tchau mundo!';
		}

	}
	
	final class Filha extends Pai {

		public function mostrarTchau(){
			parent::mostrarTchau();
			echo '</br>';
			echo 'Tchau Amor';
		}

		public function mostrarOla(){

			echo 'Olá Mundo';
		}
	}




	/* Aqui, como se fosse o Main do Java*/

	$pai = new Pai; /*Instânciando*/

	$filha = new Filha;
	$filha->mostrarOla();

	$filha->mostrarTchau();
?>