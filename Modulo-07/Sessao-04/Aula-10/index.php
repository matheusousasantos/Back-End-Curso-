<?php 
	/* SIMPLE FACTORY OU APENA FACTORY DESIGN PATTERN *********** */

	class Cachorro {
		
		function __construct() {
			echo 'Classe Cachorro';
		}
	}

	/**
	 * 
	 */
	class Gato {
		function __construct() {
			echo 'Classe Gato';
		}
	}

	class Animal {
		
		public static function build($nomeClasse){
			return new $nomeClasse;
		}
	}


	new Cachorro();
	Animal::build('gato');

	/* *********************************************************** */

?>