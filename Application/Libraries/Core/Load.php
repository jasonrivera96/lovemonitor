<?php 

	$controller = ucwords($controller); //Para que la primera letra del controlador se reconozca en MAYÚSCULA
	
	$controllerFile = "Application/Controllers/".$controller.".php";
	if(file_exists($controllerFile))
	{
		require_once($controllerFile);
		$controller = new $controller();
		if(method_exists($controller, $method))
		{
			$controller->{$method}($params);
		}else{
			require_once("Application/Controllers/Error.php");
		}
	}else{
		require_once("Application/Controllers/Error.php");
	}

?>