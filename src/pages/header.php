<!doctype html>
<html lang="en">
  <head>
    <title>Xquatic Mas</title>
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
    <link href="/Xquoticmas/stylesheet/css/strap_style.css" rel="stylesheet">

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


    <img src="/Xquoticmas/assets/MasLogo.png" id="exotic" alt="exotic" style="width: 20%; position: absolute;">

    <style type="text/css">

		nav .navbar-nav li a:hover{
		    transform: scale(1.1);
		}
    </style>



  </head>

  <body>
    
	<br>
	<!-- Logo Nav Bar -->

	<header>
		<nav class="navbar navbar-expand-lg navbar-light" style="width: 60%; position: absolute; margin: auto;  padding-left: 2em; margin-top: 5%; right: 0; left: 0; font-size: 1.9em; font-family: Baskerville; font-weight: bold; ">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
			  <li class="nav-item">
			    <a class="nav-link active" href="index.php?page=home" style="color: #620365;">Home</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="index.php?page=about" style="color: #620365;">About Us</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="index.php?page=gallery" style="color: #620365;">Gallery</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="index.php?page=package" style="color: #620365;">Packages</a>
			  </li>
<!-- 			  <li class="nav-item">
			    <a class="nav-link" href="index.php?page=registration" style="color: #620365;">Registration</a>
			  </li> -->
			  <li class="nav-item">
			    <a class="nav-link" href="index.php?page=contact" style="color: #620365;">Contact Us</a>
			  </li>
		    </ul>
		  </div>
		</nav>
	</header>