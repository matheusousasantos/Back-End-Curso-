<?php

	function myAutoLoad($class){
		$class = str_ireplace('\\', '/', $class); /* Resolver o problema da barra invertida no Linux */
		echo $class;
		if(file_exists('classes/'.$class.'.php')){
			include('classes/'.$class.'.php');
		}
	}

	spl_autoload_register('myAutoLoad');
?>