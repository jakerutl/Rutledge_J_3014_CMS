<?php
	// Set up connection credentials
	$user = "root";
	$pass = "root";
	$url = "localhost";
	$db = "db_cms";

	// $user = "jake";
	// $pass = "rutledge12";
	// $url = "jakerutledgecom.domaincommysql.com";
	// $db = "db_movies2";


	// $link = mysqli_connect($url, $user, $pass, $db);
	$link = mysqli_connect($url, $user, $pass, $db, "8889"); //Mac
	// $link = mysqli_connect($url, $user, $pass, $db); //PC

	/* check connection */
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
