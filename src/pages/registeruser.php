<?php

	// Get a connection for the database
	require_once('../config/conf.php');


	//To get values from the index.php file to add to the DB
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
	

	// THIS CODE CHECKS THE DATABASES CONNECTION
	$link = mysql_connect($rootconnect, $rootuser, $rootpassword);
	if (!$link) 
	{
	    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('xautic') or die( "Unable to select database");



	$query = "INSERT INTO user (firstname, lastname, email, phone, nationality, gender, age) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($abc, $query);


    //Bind statement with outputs from form
    mysqli_stmt_bind_param($stmt, "sssssss", $firstname, $lastname, $email, $phone, $nationality, $gender, $age);
    
    mysqli_stmt_execute($stmt);

    //echo "Form info Added";
    
    mysqli_stmt_close($stmt);

    
    mysqli_close($abc);

    include 'done.php';

    exit();

?>
