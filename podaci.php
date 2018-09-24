<?php

	header("Content-type:application/json");

	$con = mysqli_connect("localhost","root","","pets");

	if(!$con) {
		die('Greska u konekciji: ' . mysqli_error());
	}

	$result = mysqli_query($con, "SELECT * FROM breeds");

	while ($row = mysqli_fetch_assoc($result)) {
		print(json_encode($row, JSON_PRETTY_PRINT));
	}

	
	

	mysqli_close($con);

?>