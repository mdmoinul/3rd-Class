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

			echo $result;
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