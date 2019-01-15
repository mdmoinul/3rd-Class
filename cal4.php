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