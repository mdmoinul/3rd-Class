
<!-- <?php 

$number1 = $_POST['num1'];
$number2 = $_POST['num2'];

if (isset($_POST['submit'])) {
	
	if (is_numeric($number1) && is_numeric($number2)) 
	{
		
		if (isset($_POST['option'])) 
		{
			$operation = $_POST['option'];
			switch ($operation) 
			{
				case '+':
					$result = $number1+$number2;
					break;
				
				case '-':
					$result = $number1-$number2;
					break;
				case '*':
					$result = $number1*$number2;
					break;
				case '/':
					$result = $number1/$number2;
					break;
				case '%':
					$result = $number1%$number2;
					break;
			}


		} 
		else
		{
			echo "<h3>Please select operation</h3>";
		}


	} 
	else{

		echo "<h2>please enter numeric values only!</h2> <br>";

	}



} 

else {

}

 ?> -->


 <?php 

$number1 = $_POST['num1'];
$number2 = $_POST['num2'];
$submit = $_POST['submit'];
$option = $_POST['option'];

if (isset($submit)) 
{
	if (is_numeric($number1) && is_numeric($number2)) 
	{
		if (isset($option)) 
		{
			switch ($option) 
			{
				case '+':
					$result = $number1+$number2;
					break;
				
				case '-':
					$result = $number1-$number2;
					break;
				case '*':
					$result = $number1*$number2;
					break;
				case '/':
					$result = $number1/$number2;
					break;
				case '%':
					$result = $number1%$number2;
					break;
			}

			// echo $result;
		}
		else
		{
			echo "please select an option";
		}
	}
	else
	{
		echo "enter numeric value only";
	}

}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Form 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST" action="form3.php">
		<br>
		<br>
		<br>
		Enter 1st number: <input style="font-family:verdana; color: green; cursor:copy;" type="text" name="num1" value=""><br><br>
		Enter 2nd number: <input style="font-family:verdana; color: green; cursor:copy;" type="text" name="num2" value=""><br><br>

		Select Operation: <br><br>
		<input type="radio" name="option" value="+">Addition <br>
		<input type="radio" name="option" value="-">Subtraction <br>
		<input type="radio" name="option" value="*">Multiply <br>
		<input type="radio" name="option" value="/">Divide <br>
		<input type="radio" name="option" value="%">Modulus <br><br>
		<input style="border:2px dotted; border-radius: 1px; padding:4px; font-size: 20px;font-family:verdana; color: green; cursor: pointer;" type="submit" name="submit" value="submit">

		<h2 style="color: red">Output: <?php echo $number1." ".$operation." ".$number2." = ".$result; ?></h2>


	</form>
</body>
</html>