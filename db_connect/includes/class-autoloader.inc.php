<?php
spl_autoload_register('myAutoLoader');
	
	//function to autoload classes 
	function myAutoLoader($className) {		
		
		
		
		//making the fullpath variable with the extension and path for class folder
		$path = "classes/";
		$ext = ".class.php";
		$fileName = $path.$className.$ext;
		
		//checking if the file exists
		if(!file_exists($fileName)){
			return false;			
		}
		
		require_once $fileName;
	}

?>