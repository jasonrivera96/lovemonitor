<?php 
	
	class Views
	{
		function getView($controller,$view,$data="")
		{
			$controller = get_class($controller);
			if($controller == "Home"){
				$view = "Application/Views/".$view.".php";
			}else{
				$view = "Application/Views/".$controller."/".$view.".php";
			}
			require_once ($view);
		}
	}

?>