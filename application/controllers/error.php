<?php

class Error extends Controller {
	
	function index()
	{
		$this->error404();
	}
	
	function error404()
	{
		echo '<h1>404 Page Not Found</h1>';
	}
    
}

?>
