<?php
	/*Não pode ser insânciada*/
	abstract class Teste { 
		
		public function fun1(){
			echo 'F1';
		}

		abstract function fun2();

	}

	class Principal extends Teste {

		public function fun2(){
			echo 'Função implementada';
		}

		public static function metodoStatic(){
			echo 'metodo estático';
		}

	}

	$principal = new Principal;
	$principal->fun2();
	$principal->fun1();

	Principal::metodoStatic();

?>