<?php
spl_autoload_register('myAutoLoader');
	
	//function to autoload classes 
	function myAutoLoader($className) {
		
		//variable $url getting info about the header and the URI from the current request
		$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		
		//if statement to verify if the path is the class folder
		if(strpos($url,'includes')!== false){
			$path = '../classes/';
		}
		else {
			$path = "classes/";
		}
		
		//making the fullpath variable with the extension and path for class folder
		$ext = ".class.php";
		$fullPath = $path.$className.$ext;
		
		//checking if the file exists
		if(!file_exists($fullPath)){
			return false;
			
		}
		
		require_once $fullPath;
	}

?>