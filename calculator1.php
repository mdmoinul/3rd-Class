<?php 

	$var1	= $_POST['number1'];
	$var2	= $_POST['number2'];
	$submit = $_POST['submit'];

	$result = $_POST['$result'];


	function AddNumbers($num1,$num2){

		$addition = $num1+$num2;
		return $addition;
	}

	function SubstractNumber($num3,$num4){

		$substract = $num3-$num4;

		return $substract;
	}

	function Multiply($num5,$num6){

		$multi = $num5*$num6;

		return $multi;
	}

	function Divide($num7,$num8){

		$division = $num7/$num8;

		return $division;
	}

	function Modulus($num9,$num10){

		$modus = $num9%$num10;

		return $modus;
	}

	echo $var1." ".$submit." ".$var2." = ".$result;

	if ($_POST['submit'] == "+"){

		echo AddNumbers($var1,$var2);

		
	}



	if ($_POST['submit'] == "-"){

		$result= SubstractNumber($var1,$var2);

		echo $result;
	}

	if ($_POST['submit'] == "*"){

		echo Multiply($var1,$var2);

		
	}

	if ($_POST['submit'] == "/"){

		$result= Divide($var1,$var2);

		echo $result;
	}

	if ($submit == "%"){

		$result= Modulus($var1,$var2);

		echo $result;
	}

	?>