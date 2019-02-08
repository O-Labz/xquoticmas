<!doctype html>
<html lang="en">
  <head>
    <title>Xquatic Mas: Home</title>
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

    <script type="text/javascript" src="/Xquoticmas/stylesheet/js/lightbox-plus-jquery.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>

  <body>
	<br>
	<!-- Logo Nav Bar -->

	<style type="text/css">
		a{
			font-size: 1.9em;
			font-family: Baskerville;
			font-weight: bold;
			color: #620365;
		}
		a:hover{
		    transform: scale(1.1);
		    color: #3e0444;
		}
		.con {
		    position:fixed;
		    top:0;
		    bottom:0;
		    left:0;
		    right:0;
		    object-fit: fill;
		}
		.container{
		  width: 90%;
		  position: relative;
/*		  left: 0;
		  right: 0;*/
		  margin-top: 15%;
		}
		th{
			background-color: #620365;
			color: #ffffff;
		}
	</style>

	<header>
		<img src="/Xquoticmas/assets/MasLogo.png" id="exotic" alt="exotic" style="width: 25%; position: fixed; right: 0; left: 0;">
		<div class="container fixed-top" style="position: fixed; margin-top: 10.5%; padding-left: 5em;">
			<div class="row justify-content-md-center">
				    <div class="col-md-auto">
				    		<a class="nav-link active" href="index.php?page=home">Home</a>
					</div>
					<div class="col-md-auto">
				    		<a class="nav-link" href="index.php?page=about">About Us</a>
					</div>
				    <div class="col-md-auto">
				    		<a class="nav-link" href="index.php?page=gallery">Gallery</a>
			    	</div>
			    	<div class="col-md-auto">
				    		<a class="nav-link" href="index.php?page=package">Packages</a>
			    	</div>
			    	<div class="col-md-auto">
				    		<a class="nav-link" href="index.php?page=contact">Contact Us</a>
			    	</div>
				</div>
			</div>
		</div>
	</header>

	<?php
		// Get a connection for the database
		require_once('./src/config/conf.php');

		//Get data from market view table
		$query = "SELECT * FROM `orders`";


		// Get a response from the database by sending the connection
		// and the query
		$response = @mysqli_query($abc, $query);
	?>





	<div class="container">
	<label for="clist"">Select The Table You want to Edit List:</label>
	<br>
	<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		<option value="<?php echo($Welcome_link); ?>" selected>Welcome</option>
		<option value="<?php echo($reg_link); ?>">Registered Customers</option>
		<option value="<?php echo($comments_link); ?>">Comments</option>
		<option value="<?php echo($drinks_link); ?>">Drinks only Orders</option>
		<option value="<?php echo($tshirt_link); ?>">T-Shirt and Drinks</option>
		<option value="<?php echo($costume_link); ?>">Costume and Drinks Orders</option>
		<option value="<?php echo($basicd_link); ?>">Basic T-Shirt Package</option>
		<option value="<?php echo($basicc_link); ?>">Basic Costume Package</option>
		<option value="<?php echo($premiums_link); ?>">Premium T-Shirt Package</option>
		<option value="<?php echo($costumed_link); ?>">Costume and Drinks Orders</option>
		<option value="<?php echo($premiumc_link); ?>">Premium Costume Package</option>
		<option value="<?php echo($costomo_link); ?>">Custom Orders</option>
	</select>
	<br>
	<br>
	  <h2>Orders Table</h2>
	  <table class="table table-bordered table-sm table-striped table-hover" style="overflow-y: auto;">
	    <thead class="thead-inverse">
	      <tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Nationality</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Quantity</th>
			<th>Package</th>
			<th>Subpackage</th>
			<th>Payment Type</th>
			<th>Jouvert</th>
			<th>Shirtstyle</th>
			<th>Shirtsize</th>
			<th>Shirtcolor</th>
			<th>Shortssize</th>
			<th>Costumename</th>
			<th>Bust</th>
			<th>Waist</th>
			<th>Hip</th>
			<th>Neck</th>
			<th>Navel</th>
			<th>Shoulder</th>
			<th>Breast</th>
			<th>Bra</th>
			<th>Panty</th>
			<th>Order Total</th>
			<th>Order Status</th>
			<th>Payment Status</th>
			<th>Invoice Number</th>
	      </tr>
	    </thead>
	    <tbody>

			<?php while($row = mysqli_fetch_array($response)):?>
			<tr>
			    <td><?php echo $row['firstname'];?></td>
			    <td><?php echo $row['lastname'];?></td>
			    <td><?php echo $row['email'];?></td>
			    <td><?php echo $row['phone'];?></td>
			    <td><?php echo $row['nationality'];?></td> 
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['age'];?></td>
				<td><?php echo $row['quantity'];?></td>
				<td><?php echo $row['package'];?></td>
				<td><?php echo $row['subpackage'];?></td> 
				<td><?php echo $row['paymenttype'];?></td>
				<td><?php echo $row['jouvert'];?></td>
				<td><?php echo $row['shirtstyle'];?></td>
				<td><?php echo $row['shirtsize'];?></td>
				<td><?php echo $row['shirtcolor'];?></td> 
				<td><?php echo $row['shirtsize'];?></td>
				<td><?php echo $row['costumename'];?></td>
				<td><?php echo $row['bust'];?></td>
				<td><?php echo $row['waist'];?></td>
				<td><?php echo $row['hip'];?></td> 
				<td><?php echo $row['neck'];?></td>
				<td><?php echo $row['navel'];?></td>
				<td><?php echo $row['shoulder'];?></td>
				<td><?php echo $row['breast'];?></td>
				<td><?php echo $row['bra'];?></td> 
				<td><?php echo $row['panty'];?></td>
				<td><?php echo $row['ordertotal'];?></td>
				<td><?php echo $row['orderstatus'];?></td>
				<td><?php echo $row['paymentstatus'];?></td>
				<td><?php echo $row['invoicenumber'];?></td>               
			</tr>
			<?php endwhile ;?>

	    </tbody>
	  </table>
	</div>

	<?php mysqli_close($abc); ?>
	<br>
	<br>
  </body>
	<div class="container-fluid fixed-bottom" style="background-color: #efefef; width: 100%; position: fixed; opacity: .9;">
		<div class="row justify-content-md-center">
			    <div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<a href="#">
					  	<img src="/Xquoticmas/assets/social/fb.png" alt="facebook" style="width:30px;height:30px;border:0; margin: 2px 5px; position:relative;">
					  </a>
				      <a href="#">
					  	<img src="/Xquoticmas/assets/social/insta.png" alt="instagram" style="width:30px;height:30px;border:0; margin: 2px 5px; position:relative;">
					  </a>
				    <strong>Be Exquisite; Live Exotic…</strong>
				    <a href="#">
				  	<img src="/Xquoticmas/assets/social/twitter.png" alt="twitter" style="width:30px;height:30px;border:0; margin: 2px 5px; position:relative;">
				  </a>
			      <a href="#">
				  	<img src="/Xquoticmas/assets/social/snap.png" alt="snapchat" style="width:30px;height:30px;border:0; margin: 2px 5px; position:relative;">
				  </a>
				</div>
			    <div class="col-sm-4">
		    	</div>
			</div>
		</div>
	</div>
</html>