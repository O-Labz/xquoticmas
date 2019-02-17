

<?php

	// Get a connection for the database
	require_once('../config/conf.php');
	require_once('/home2/omrihopson/public_html/Xquoticmas/mailer.php');


	// populate table
	$required = array('firstname', 'lastname', 'email', 'phone', 'nationality', 'gender', 'age', 'quantity', 'package', 'subpackage', 'paymenttype', 'jouvert', 'shirtstyle', 'shirtsize', 'shirtcolor', 'shortssize', 'mug', 'jar', 'tote', 'wrag', 'phonecase', 'ring', 'mardi', 'costumename', 'bust', 'waist', 'hip', 'neck', 'navel', 'shoulder', 'breast', 'bra', 'panty', 'ordertotal', 'orderstatus', 'paymentstatus', 'invoicenumber','dte','discard');

	// Loop over field names, make sure each one exists and is not empty
	foreach($required as $field) {
	  if (isset($_POST[$field])) {
	    $$field = $_POST[$field];
	  }
	  else{
	  	$$field = ' ';
	  }
	}

	$packageprice = '';
	$packagename = '';
	$paymentmessage = '';
	$discard ='N';

	//Get data from market view table
	$quer = "SELECT * FROM `packages` WHERE `name` = '$package'";


	// Get a response from the database by sending the connection
	// and the query
	$response = @mysqli_query($abc, $quer);


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

	if ($package == 'costumeandrinks' && $subpackage == 'basicandrosfront') {
		$packageprice = 4000;
	}if ($package == 'costumeandrinks' && $subpackage == 'basicandrosback') {
		$packageprice = 4000;
	}
	if ($package == 'costumeandrinks' && $subpackage == 'basicparadisefront') {
		$packageprice = 4500;
	}
	if ($package == 'costumeandrinks' && $subpackage == 'basicparadiseback') {
		$packageprice = 4500;
	}
	if ($package == 'costumeandrinks' && $subpackage == 'basicbasicexuma') {
		$packageprice = 6000;
	}
	if ($package == 'basiccostume' && $subpackage == 'basicandrosfront') {
		$packageprice = 6000;
	}if ($package == 'basiccostume' && $subpackage == 'basicandrosback') {
		$packageprice = 6000;
	}
	if ($package == 'basiccostume' && $subpackage == 'basicparadisefront') {
		$packageprice = 6500;
	}
	if ($package == 'basiccostume' && $subpackage == 'basicparadiseback') {
		$packageprice = 6500;
	}
	if ($package == 'basiccostume' && $subpackage == 'basicbasicexuma') {
		$packageprice = 8000;
	}
	if ($package == 'premiumcostume' && $subpackage == 'premiumandrosfront') {
		$packageprice = 8000;
	}if ($package == 'premiumcostume' && $subpackage == 'premiumandrosback') {
		$packageprice = 8000;
	}
	if ($package == 'premiumcostume' && $subpackage == 'premiumparadisefront') {
		$packageprice = 8500;
	}
	if ($package == 'premiumcostume' && $subpackage == 'premiumparadiseback') {
		$packageprice = 8500;
	}
	if ($package == 'premiumcostume' && $subpackage == 'premiumexuma') {
		$packageprice = 10000;
	}

	$ordertotal = $packageprice * $quantity;

	$invoicenumber = uniqid();

	$orderstatus = 'placed';

	$dte = date("Y/m/d");

	if ($paymenttype == 'facetoface' || $paymenttype == 'bank') {
		$paymentstatus = 'unpaid';
	}



	// THIS CODE CHECKS THE DATABASES CONNECTION
	$link = mysqli_connect($rootconnect, $rootuser, $rootpassword,$rootname);
	if (!$link)
	{
	    die('Could not connect: ' . mysql_error());
	}
	mysqli_select_db($link, "omrihops_xautic") or die( "Unable to select database");



	$query = "INSERT INTO orders (firstname, lastname, email, phone, nationality, gender, age, quantity, package, subpackage, paymenttype, jouvert, shirtstyle, shirtsize, shirtcolor, shortssize, mug, jar, tote, wrag, phonecase, ring, mardi, costumename, bust, waist, hip, neck, navel, shoulder, breast, bra, panty, ordertotal, orderstatus, paymentstatus, invoicenumber, dte) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($abc, $query);


    //Bind statement with outputs from form
    mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssssssssssss", $firstname, $lastname, $email, $phone, $nationality, $gender, $age, $quantity, $package, $subpackage, $paymenttype, $jouvert, $shirtstyle, $shirtsize, $shirtcolor, $shortssize, $mug, $jar, $tote, $wrag, $phonecase, $ring, $mardi, $costumename, $bust, $waist, $hip, $neck, $navel, $shoulder, $breast, $bra, $panty, $ordertotal, $orderstatus, $paymentstatus, $invoicenumber, $dte, $discard);

    mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);


    mysqli_close($abc);

    sendEmail($email,$firstname,$lastname,$phone,$invoicenumber,$dte,$quantity,$package,$subpackage,$ordertotal,$paymenttype);

    //header($register_link);

    // exit();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/Xquoticmas/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/Xquoticmas/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/Xquoticmas/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/Xquoticmas/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/Xquoticmas/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/Xquoticmas/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/Xquoticmas/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/Xquoticmas/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/Xquoticmas/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/Xquoticmas/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/Xquoticmas/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/Xquoticmas/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/Xquoticmas/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="/Xquoticmas/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/Xquoticmas/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link href="/Xquoticmas/stylesheet/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/lightbox.min.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/homestyle.css" rel="stylesheet">


    <?php
    	if ($subpackage == 'N/A') {
    		$subpackage = '';
    	}
    	if ($paymenttype == 'bank') {
    		$paymentmessage = 'Your choice of payment was to do a bank deposite. A member from the Xquotic team will be contacting you shortly with more details.';
    	}else{
    		$paymentmessage = 'Your choice of payment was to meet face to face. A member from the Xquotic team will be contacting you shortly with more details.';
    	}
    ?>

</head>
<body>
<img src="/Xquoticmas/assets/MasLogo.png" id="exotic" alt="exotic" style="width: 25%; position: fixed; right: 0; left: 0; top: 0;">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container" style="right: 0; left: 0;"><a style="width: 300px;" href="http://www.xquoticmas.com/Xquoticmas/src/pages/index.php?page=registrationdone" class="btn btn-outline-info" role="button" aria-disabled="true">Get Back to Exquotic</a></div>
            <br>
            <br>


            <div class="container" style="position: relative; right: 0; left: 0; top: 0; bottom: 0; border: 2px; border-radius: 8px; ">
                <p style="font-size:160%;">Hi <?php echo $firstname; ?> ,</p>
                <br>
                Thank you for choosing Xquotic Mas! If you have any questions with regard to your order please visit our website and contact us as soon as possible.
                <br>
                <br>
                In the event that we need to reach you we will contact you using the number or email below.
                <br>
                <h1 style="font-size:300%;">Invoice</h1>
                <p style="font-size:160%;">Name on Order: <?php echo $firstname, ' ',  $lastname; ?></p>
                <p style="font-size:160%;">Call back Number: <?php echo $phone; ?></p>
                <br>
                <h1>Order Details</h1>
                <p style="font-size:160%;">Order : <?php echo $invoicenumber; ?></p>
                <p style="font-size:160%;">Date: <?php echo $dte; ?></p>
                <p style="font-size:160%;">Payment Choice: <?php echo $paymentmessage; ?></p>

				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">Quantity</th>
				      <th scope="col">Purchase Description</th>
				      <th scope="col">Order Amount</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td><?php echo $quantity; ?></td>
				      <td><?php echo $package, ' ',  $subpackage; ?></td>
				      <td><?php echo $ordertotal; ?> JMD</td>
				    </tr>
				  </tbody>
				</table>

                <hr>
				<br>
				<br>
			</div>
</body>
</html>
