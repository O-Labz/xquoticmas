<?php

	// Get a connection for the database
	require_once('../mysqli_charts_connect.php');


	//To get values from the index.php file to add to the DB
    $carrier = $_POST['carrier'];
	$specdetails = $_POST['specdetails'];
	$pnumber = $_POST['pnumber'];
	$email = $_POST['email'];
    $mail = $_POST['mail'];
	$site = $_POST['site'];
	$usname = $_POST['usname'];
	$pw = $_POST['pw'];
    $escalation = $_POST['escalation'];
	$escalationtwo = $_POST['escalationtwo'];
	$details = $_POST['details'];
	

	// THIS CODE CHECKS THE DATABASES CONNECTION
	$link = mysql_connect('localhost', 'root', 'carleato21');
	if (!$link) 
	{
	    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('charts') or die( "Unable to select database");



	$query = "INSERT INTO iqcc2 (carrier, specdetails, pnumber, email, mail, site, usname, pw, escalation, escalationtwo, details) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($abc, $query);


    //Bind statement with outputs from form
    mysqli_stmt_bind_param($stmt, "sssssssssss", $carrier, $specdetails, $pnumber, $email, $mail, $site, $usname, $pw, $escalation, $escalationtwo, $details);
    
    mysqli_stmt_execute($stmt);

    //echo "Form info Added";
    
    mysqli_stmt_close($stmt);

    
    mysqli_close($abc);

    header("Location: http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts2.php");
    exit();

?>
