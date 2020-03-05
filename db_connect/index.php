<?php 

//include the autoload class

include "includes/class-autoloader.inc.php";

?>

<!DOCTYPE html>

<html lang = "en">

<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<meta http-equiv = "X-UA-Compatible" content = "ie=edge">
	<title>	Document </title>
</head>

<body>
	<?php
		
		// creating an object based upon the view and controller class
		$userObj = new UsersView();
		$userObj2 = new UsersContr();
		
		// we can call methods inside the class using the object like below
		
		$userObj->showUser("John");
		$userObj2->createUser("Jane" , "Doe" , "1954-12-01");
	?>
</body>
</html>