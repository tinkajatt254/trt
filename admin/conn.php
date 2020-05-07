<?php

	$db_name = "trtdb";

	$conn = mysqli_connect("localhost", "root", "");

	if (!$conn) {
		echo "database connection error";
	}

	if (!mysqli_select_db($conn, $db_name)) {
		$sql = "CREATE DATABASE ".$db_name;
		if ($conn->query($sql) === false) {
			echo "database not created";
		}
	}




?>