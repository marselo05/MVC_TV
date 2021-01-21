<?php

/**
* 
*/
class Views
{
	
	function getView($controller, $view, $data="")
	{
		$controller = get_class($controller);
		$view = ($controller == "Home") ? $view : $controller."/".$view;
		require_once("Views/".$view.".php");
	}
}