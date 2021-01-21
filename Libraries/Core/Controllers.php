<?php

/**
* 
*/
class Controllers
{
	public function __construct() {
		$this->views = new Views();
		$this->loadModel();
	}

	public function loadModel() {
		// (PHP 4, PHP 5, PHP 7)
		// get_class — Devuelve el nombre de la clase de un objeto
		$modelo 		= get_class($this)."Model";
		$routClass 	= "model/".$modelo.".php";
		if (file_exists($routClass)) {
			require_once($routClass);
			$this->modelo = new $modelo();
		}
	}
}