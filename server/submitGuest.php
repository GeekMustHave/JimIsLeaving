<?php
/* file to add Json object to the exisiting Json File */
	$json = $_POST['params'];	

	$inp = file_get_contents('guests.json');
	$tempArray = json_decode($inp);
	array_push($tempArray, $json);
	
	$jsonData = json_encode($tempArray);
	file_put_contents('guests.json', $jsonData);
	
	
?>