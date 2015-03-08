<?php 

	/*
		Filename: config.php
		Author: Alangi Derick
		Description: This file is always required when issues with databases are concerned.
					 It creates a connection to the database, and selects the required 
					 table.
	*/

	/*$HOST = "localhost";
	$USER = "459732";
	$PASSWORD = "derick01";
	$DATABASE = "459732";*/

	$HOST = "localhost";
	$USER = "root";
	$PASSWORD = "kulachen";
	$DATABASE = "PhoneBookApplication";

	//create a connection to the database server.
	$connection = mysql_connect($HOST, $USER, $PASSWORD);

	if(!$connection){
		//this is a test to see that the connection is not
		// successful
		die("Connection Failure. " . mysql_error());
	}

	//selects the required table.
	$database_connect = mysql_select_db($DATABASE);

	if(!$database_connect){
		// this is when the selection of the database fails
		die("Selection of Database Failed" . mysql_error());
	}
?>