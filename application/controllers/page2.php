<?php

class Page2 extends Controller {
	
	function index()
	{
		$data2 = array('heading' => 'My Heading',
              		   'message' => 'My Message'
              		   );
		$template = $this->loadView('page2',$data2);
		$template->render();
	}
    
}

?>
