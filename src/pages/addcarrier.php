<?php

	// Get a connection for the database
	require_once('../mysqli_charts_connect.php');


	//To get values from the index.php file to add to the DB
    $carrier = $_POST['carrier'];
	$switch = $_POST['switch'];
	$trunk_name = $_POST['trunk_name'];
	$trunk_id = $_POST['trunk_id'];
    $mcc = $_POST['mcc'];
	$fqdns = $_POST['fqdns'];
	$receiving_ip = $_POST['receiving_ip'];
	$sending_ip = $_POST['sending_ip'];
    $media_ip = $_POST['media_ip'];
	$veraz_ip = $_POST['veraz_ip'];
	$port_numb = $_POST['port_numb'];
	$rules_incoming = $_POST['rules_incoming'];
    $rules_outgoing = $_POST['rules_outgoing'];
	$mcc_set = $_POST['mcc_set'];
	$special_req = $_POST['special_req'];
	$admin_state = $_POST['admin_state'];
	

	// THIS CODE CHECKS THE DATABASES CONNECTION
	$link = mysql_connect('localhost', 'root', 'carleato21');
	if (!$link) 
	{
	    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('charts') or die( "Unable to select database");



	$query = "INSERT INTO iqc (carrier, switch, trunk_name, trunk_id, mcc, fqdns, receiving_ip, sending_ip, media_ip, veraz_ip, port_numb, rules_incoming, rules_outgoing, mcc_set, special_req, admin_state) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($abc, $query);


    //Bind statement with outputs from form
    mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $carrier, $switch, $trunk_name, $trunk_id, $mcc, $fqdns, $receiving_ip, $sending_ip, $media_ip, $veraz_ip, $port_numb, $rules_incoming, $rules_outgoing, $mcc_set, $special_req, $admin_state);
    
    mysqli_stmt_execute($stmt);

    //echo "Form info Added";
    
    mysqli_stmt_close($stmt);

    
    mysqli_close($abc);

    header("Location: http://172.27.27.192:1234/roamtechportal/iqc/index.php");
    exit();

?>
