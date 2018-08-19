<?php
	class ClasseTeste {
		const VALOR = 300;

		public function __construct() {
			echo self::VALOR;
		}
	}

	new ClasseTeste();
	echo ClasseTeste::VALOR;

?>