<!doctype html>
<html lang="en">
  <head>
    <title>Xquatic Mas: Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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


    <script type="text/javascript" src="/Xquoticmas/stylesheet/js/lightbox-plus-jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="/Xquoticmas/stylesheet/js/lightbox-plus-jquery.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
	$('#exampleModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('whatever') // Extract info from data-* attributes
	  var recipients = button.data('bad')
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('New message to ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	  modal.find('.modal-body input lastname').val(recipients)
	})
</script>

  </head>

  <body>
	<br>
	<!-- Logo Nav Bar -->

	<style type="text/css">
		.headerPicture {
			width: 25%;
		}

		.navigation {
			left:0;
		    right:0;
		    overflow: hidden;
		    text-align: center;
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		.nav-link{
			font-size: 1.9em;
			font-family: Baskerville;
			font-weight: bold;
			padding: 14px 16px;
			display: inline-block;
			text-align: center;
			color: #620365;
		}

		.nav-link:hover{
		    transform: scale(1.1);
		    color: #620365;
		}
		.con {
		    position:fixed;
		    top:0;
		    bottom:0;
		    left:0;
		    right:0;
		    z-index: -1;
		    object-fit: fill;
		}
	</style>

	<div align="middle">
		<img class="headerPicture" src="/Xquoticmas/assets/MasLogo.png" id="exotic" alt="exotic">
	</div>

	<div class="navigation">
		  <a class="nav-link" href="index.php?page=home">Home</a>
		  <a class="nav-link" href="index.php?page=about">About Us</a>
		  <a class="nav-link" href="index.php?page=gallery">Gallery</a>
		  <a class="nav-link" href="index.php?page=package">Packages</a>
		  <a class="nav-link" href="index.php?page=contact">Contact Us</a>
	</div>
