<?php

$myVal = $_POST['getValue'];
// make array
$current_data = file_get_contents('current.json');  
$array = json_decode($current_data, true);

// loop through array
unset($array['entries'][$myVal]);

// make json again

    $current_data = json_encode($array, JSON_PRETTY_PRINT);  
	file_put_contents('current.json', $current_data);

		                header("Location: index.html", true, 303);
						exit();


?>