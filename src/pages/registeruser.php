

<?php

	// Get a connection for the database
	require_once('../config/conf.php');


	// populate table
	$required = array('firstname', 'lastname', 'email', 'phone', 'nationality', 'gender', 'age', 'quantity', 'package', 'paymenttype', 'shirtsize', 'shirtcolor', 'costumename', 'bust', 'waist', 'hip', 'neck', 'navel', 'shoulder', 'breast', 'bra', 'panty', 'ordertotal', 'orderstatus', 'paymentstatus', 'invoicenumber');

	// Loop over field names, make sure each one exists and is not empty
	foreach($required as $field) {
	  if (isset($_POST[$field])) {
	    $$field = $_POST[$field];
	    echo $field;
	  }
	  else{
	  	$$field = 'N/A ';
	  	echo $field;
	  }
	}

	

	// THIS CODE CHECKS THE DATABASES CONNECTION
	$link = mysql_connect($rootconnect, $rootuser, $rootpassword);
	if (!$link) 
	{
	    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('xautic') or die( "Unable to select database");



	$query = "INSERT INTO orders (firstname, lastname, email, phone, nationality, gender, age, quantity, package, paymenttype, shirtsize, shirtcolor, costumename, bust, waist, hip, neck, navel, shoulder, breast, bra, panty, ordertotal, orderstatus, paymentstatus, invoicenumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($abc, $query);


    //Bind statement with outputs from form
    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssss", $firstname, $lastname, $email, $phone, $nationality, $gender, $age, $quantity, $package, $paymenttype, $shirtsize, $shirtcolor, $costumename, $bust, $waist, $hip, $neck, $navel, $shoulder, $breast, $bra, $panty, $ordertotal, $orderstatus, $paymentstatus, $invoicenumber);
    
    mysqli_stmt_execute($stmt);

    //echo "Form info Added";
    
    mysqli_stmt_close($stmt);

    
    mysqli_close($abc);

    header($register_link);

    exit();

?>

