<?php

class HomeController{
	
	public function __construct() {

	}
			
	public function run(){	
		
		# Un contrôleur se termine en écrivant une vue
		require_once(VIEW_PATH . 'home.php');
	}
	
}
