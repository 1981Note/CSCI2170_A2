<?php
	/* 
	* CSCI 2170: Assignment 2
	* The database connection info file for the example
	* Author: Raghav V. Sampangi (raghav@cs.dal.ca)
	* 
	* If you want to re-use any of this code, you may only do so WITH PERMISSION.
	*/

	// Connecting to the DB - using MySQLi

	//in my situation my localhost is 3307
	//Learned knowledge about different port
	//I sent a email for help (The port number is different , and localhost tries to connect to the DB at port 3306 by default)
	//From: Raghav V. Sampangi (raghav@cs.dal.ca)
	//Date: 7 October 2021
	//Therefore, my $host = "localhost:3307";
	$host = "localhost:3307";
	$username = "root";
	$password = "root";
	$dbname = "jedisearch";
	

	$dbconn = new mysqli($host, $username, $password, $dbname);

	if ($dbconn->connect_error) {
		die("Noooooooooo!<br>" . $dbconn->connect_error . "<br>" . $dbconn->connect_errno);
	}
	/*
	else {
	 	echo "<p>Connected!</p>";
	}
	*/

	

?>