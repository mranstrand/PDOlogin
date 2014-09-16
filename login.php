<?php
session_start();

//Ta emot värden från formuläret
$username = $_POST['username'];
$password = $_POST['password'];

// Variabler för databaskoppling
$dbhost 	= "localhost";
$dbname		= "PDOlogin";
$dbuser		= "root";
$dbpass		= "";

// Koppla upp mot db
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);


// Välj felhantering (här felsökningsläge)
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


?>