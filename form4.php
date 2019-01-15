<!DOCTYPE html>
<html>
<head>
	<title>Form 4</title>
</head>
<body>

<style type="text/css">
	form, fieldset{
		margin-left: 200px;
		margin-top:20px;
	}
</style>

<form method="POST" action="">
	<fieldset><legend>Calculator</legend>

	<label>Enter first number</label><br>
	<input type="text" name="num1"><br><br>

	<label>Enter 2nd number</label><br>
	<input type="text" name="num2"><br><br>
	<input type="submit" name="submit" value="add">
	<input type="submit" name="submit" value="minus">
	<input type="submit" name="submit" value="multiply"><br>
	<input type="submit" name="submit" value="divide">
	<input type="submit" name="submit" value="modulus"><br><br>

	<input type="text" name="output" value= <?php echo $output; ?>>



	

</form>



</body>
</html>




<?php 
	
	$output = 0;

	$number1 = $_POST['num1'];
	$number2 = $_POST['num2'];
	$submit = $_POST['submit'];
	$output = $_POST['output'];


	if (isset($submit)) 
	{
		$output = $number1+$number2;
	}



 ?>