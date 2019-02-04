

<?php

	// Get a connection for the database
	require_once('../config/conf.php');


	// populate table
	$required = array('firstname', 'lastname', 'email', 'phone', 'nationality', 'gender', 'age', 'quantity', 'package', 'subpackage', 'paymenttype', 'jouvert', 'shirtstyle', 'shirtsize', 'shirtcolor', 'shortssize', 'costumename', 'bust', 'waist', 'hip', 'neck', 'navel', 'shoulder', 'breast', 'bra', 'panty', 'ordertotal', 'orderstatus', 'paymentstatus', 'invoicenumber');

	// Loop over field names, make sure each one exists and is not empty
	foreach($required as $field) {
	  if (isset($_POST[$field])) {
	    $$field = $_POST[$field];
	  }
	  else{
	  	$$field = 'N/A ';
	  }
	}

	$packageprice = '';

	//Get data from market view table
	$query = "SELECT * FROM `packages` WHERE `name` = '$package'";


	// Get a response from the database by sending the connection
	// and the query
	$response = @mysqli_query($abc, $query);


	// If the query executed properly proceed
	if($response){

		// <!-- populate table from mysql database -->
		while ($row = mysqli_fetch_array($response)) 
		{
		$packagename = $row['name'];
		$packageprice = $row['price'];
	}
	} else {

		echo "Couldn't issue database query<br />";

		echo mysqli_error($abc);

	}


	$package = $packagename;
	$ordertotal = $packageprice * $quantity;

	

	// THIS CODE CHECKS THE DATABASES CONNECTION
	$link = mysql_connect($rootconnect, $rootuser, $rootpassword);
	if (!$link) 
	{
	    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('xautic') or die( "Unable to select database");



	$query = "INSERT INTO orders (firstname, lastname, email, phone, nationality, gender, age, quantity, package, subpackage, paymenttype, jouvert, shirtstyle shirtsize, shirtcolor, shortssize, costumename, bust, waist, hip, neck, navel, shoulder, breast, bra, panty, ordertotal, orderstatus, paymentstatus, invoicenumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($abc, $query);


    //Bind statement with outputs from form
    mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssss", $firstname, $lastname, $email, $phone, $nationality, $gender, $age, $quantity, $package, $subpackage, $paymenttype, $jouvert, $shirtstyle, $shirtsize, $shirtcolor, $shortssize, $costumename, $bust, $waist, $hip, $neck, $navel, $shoulder, $breast, $bra, $panty, $ordertotal, $orderstatus, $paymentstatus, $invoicenumber);
    
    mysqli_stmt_execute($stmt);

    //echo "Form info Added";
    
    mysqli_stmt_close($stmt);

    
    mysqli_close($abc);

    header($register_link);

    exit();

?>

