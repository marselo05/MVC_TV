<?php
	$controllerFile = 'Controllers/'.$controller.'.php';
	if (file_exists($controllerFile)) 
	{
		// echo "<p style=color:red>".$method."</p>";		
		require_once($controllerFile);
		$controller = new $controller();

		// $controller->[$method][$params];
		if ( method_exists($controller, $method) ) 
			$controller->$method($params);
		else
			require_once("Controllers/Error.php");
	}
	else
		require_once("Controllers/Error.php");