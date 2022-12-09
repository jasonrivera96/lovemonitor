<?php 

	spl_autoload_register(function($class){
		if(file_exists("Application/Libraries/".'Core/'.$class.".php")){
			require_once("Application/Libraries/".'Core/'.$class.".php");
		}
	});
	
?>