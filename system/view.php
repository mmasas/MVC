<?php

class View {

	private $pageVars = array();
	private $template;
	//private $data;

	public function __construct($template,$data)
	{
		$this->template = APP_DIR .'views/'. $template .'.php';
		$this->pageVars = $data;	
	}

	public function set($var, $val)
	{
		$this->pageVars[$var] = $val;
	}

	public function render()
	{
		//extract all vars to the view
		extract($this->pageVars);	
		ob_start();
		require($this->template);
		echo ob_get_clean();
	}
    
}

?>