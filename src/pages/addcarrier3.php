<?php

	// Get a connection for the database
	require_once('../mysqli_charts_connect.php');


	//To get values from the index.php file to add to the DB
    $market = $_POST['market'];
	$switchemail = $_POST['switchemail'];
	$pcontact = $_POST['pcontact'];
	$pcnumber = $_POST['pcnumber'];
    $escalation = $_POST['escalation'];
	$escalnumber = $_POST['escalnumber'];
	

	// THIS CODE CHECKS THE DATABASES CONNECTION
	$link = mysql_connect('localhost', 'root', 'carleato21');
	if (!$link) 
	{
	    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('charts') or die( "Unable to select database");



	$query = "INSERT INTO iqcc3 (market, switchemail, pcontact, pcnumber, escalation, escalnumber) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($abc, $query);


    //Bind statement with outputs from form
    mysqli_stmt_bind_param($stmt, "ssssss", $market, $switchemail, $pcontact, $pcnumber, $escalation, $escalnumber);
    
    mysqli_stmt_execute($stmt);

    //echo "Form info Added";
    
    mysqli_stmt_close($stmt);

    
    mysqli_close($abc);

    header("Location: http://172.27.27.192:1234/roamtechportal/iqc/iqccontacts3.php");
    exit();

?>
