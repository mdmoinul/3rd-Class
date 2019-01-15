<?php 
	
	$length = 100;
	$width = 200;



	function FeetToInch($feet){

		$inch = $feet*12;

		return $inch;


	}


	$len_inch = FeetToInch($length);

	echo $len_inch;

	echo "<br>";

	print(FeetToInch($width));

 ?>