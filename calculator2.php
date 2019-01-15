<?php 

$op = $_GET['submit'];
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$result = $_GET['result'];


echo $num1," " ,$op," ", $num2, " = ", $result;
echo "<br>";
echo "<br>";
	

switch ($op) {
	case 'plus':
		$result = $num1+$num2;
		// echo $result;
		break;
	case 'minus':
		$result = $num1-$num2;
		break;

	case 'multiply':
		$result = $num1*$num2;
		break;

	case 'divide':
		$result = $num1/$num2;
		break;

	case 'modulus':
		$result = $num1%$num2;
		break;
}

echo $result;
 ?>