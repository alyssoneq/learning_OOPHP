<?php
	//"strict_types = 1" makes functions to only work with the type of variables it was declared to them
	declare(strict_types = 1);
	//including the autoload function
	include 'includes/class-autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>calculator</title>
	</head>
	<body>
	
	//calling the calculator calc.inc.php
	<form action = "includes/calc.inc.php" method = "post">
		<p>	My own calculator!!	</p>
		<input type = "number" name="num1" placeholder="First number" >
		<select name="oper">
			<option value="add">Addition</option>
			<option value="sub">Subtraction</option>
			<option value="div">Division</option>
			<option value="mul">Multiplication</option>
		</select>
		<input typpe="number" name="num2" placeholder="Second number">
		<button type="submit" name="submit">Calculate</button>
	</form>
	
		<?php
		
			
			
			
		?>
	</body>
</html>
