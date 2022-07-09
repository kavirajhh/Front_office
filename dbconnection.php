<?php
	/*$host="localhost";
	$user="root";
	$pword="";*/


		$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "maxdb";

	$connection = new mysqli($servername, $username, $password, $dbname);


	/*$connection=mysql_connect($host,$user,$pword) 
	or die("Could not Connect to database server");
	mysql_select_db("maxdb") 
	or die("Could not select the database");*/
?>