<!doctype html>
<html lang="en">
  <head>
    <title>Xquatic Mas: Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/xauticmas/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/xauticmas/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/xauticmas/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/xauticmas/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/xauticmas/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/xauticmas/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/xauticmas/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/xauticmas/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/xauticmas/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/xauticmas/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/xauticmas/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/xauticmas/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/xauticmas/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="/xauticmas/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/xauticmas/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link href="/xauticmas/stylesheet/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/xauticmas/stylesheet/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="/xauticmas/stylesheet/css/bootstrap.min.css" rel="stylesheet">
    <link href="/xauticmas/stylesheet/css/lightbox.min.css" rel="stylesheet">
    <link href="/xauticmas/stylesheet/css/homestyle.css" rel="stylesheet">

    <script type="text/javascript" src="/xauticmas/stylesheet/js/lightbox-plus-jquery.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>

  <body>
  	<div class="con" style=" text-align: center; right: 0; left: 0; position: absolute;">
		<div class="w3-content w3-section" style="width:100%; height: 100%;">
		  <img class="mySlides" src="/xauticmas/assets/gallery/pic1.jpg" style="width:100%;">
		  <img class="mySlides" src="/xauticmas/assets/gallery/pic2.jpg" style="width:100%">
		  <img class="mySlides" src="/xauticmas/assets/gallery/pic4.jpg" style="width:100%">
		</div>
	</div>
    
	<br>
	<!-- Logo Nav Bar -->

	<style type="text/css">
		a{
			font-size: 1.9em;
			font-family: Baskerville;
			font-weight: bold;
			color: #ffffff;
		}
		a:hover{
		    transform: scale(1.1);
		    color: #ffffff;
		}
	</style>

	<header>
		<img src="/xauticmas/assets/MasLogo.png" id="exotic" alt="exotic" style="width: 25%; position: fixed; right: 0; left: 0;">
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
	





<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(carousel, 2000); // Change image every 2 seconds
	}
</script>