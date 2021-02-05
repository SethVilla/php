<?php

if(isset($_POST['submit'])){
	
	$temperature = $_POST['temperature'];
	$units = $_POST['units'];
	$accuracy = $_POST['accuracy'];
	
	if($units == "C"){
		$result = round(($temperature * 9 / 5 + 32),$accuracy);
	} else {
		$result = round((($temperature - 32) * 5 / 9),$accuracy);
	}
	
	echo "The converted temperature is " . $result;
}