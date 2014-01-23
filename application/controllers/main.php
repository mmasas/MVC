<?php

class Main extends Controller {
	
	function index()
	{


		$example = $this->loadModel('Example_model');
    	$id = $example->getSomething(7);

		$data1 = array('title' => 'My Page Title');
		$header = $this->loadView('header',$data1);
		$header->render();


		$data2 = array('heading' => 'My Heading',
              		   'message' => 'My Message',
              		   'id' 	 => $id
              		   );
		$template = $this->loadView('main_view',$data2);
		$template->render();


		$data3 = array('analyticsID' => 'UA-AABBCCDD-11');
		$footer = $this->loadView('footer',$data3);
		$footer->render();

	}
    
}

?>
