<?php

class Controller {
	
	public function loadModel($name)
	{
		require(APP_DIR .'models/'. strtolower($name) .'.php');
		$model = new $name;
		return $model;
	}
	
	public function loadView($name,$data)
	{
		$view = new View($name,$data);
		return $view;
	}

}

?>