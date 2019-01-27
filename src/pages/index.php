<!-- Dynamically adjust site -->

<?php

  	$link = $_GET['page'];

  	switch ($link) {
  		case 'home':
  			# code...
  			include 'home.php';
  		break;
  		case 'about':
			# code...
  			include 'header.php';
  			include 'about.php';
		break;
	  	case 'gallery':
			# code...
	  		include 'header.php';
	  		include 'gallery.php';
		break;
	  	case 'package':
			# code...
	  		include 'header.php';
	  		include 'package.php';
		break;
	  	case 'registration':
			# code...
	  		include 'header.php';
	  		include 'registration.php';
		break;
		case 'registrationdone':
			# code...
			include 'header.php';
	  		include 'registration.php';
		break;
	  	case 'contact':
			# code...
	  		include 'header.php';
	  		include 'contact.php';
		break;
		case 'contactdone':
			# code...
			include 'header.php';
	  		include 'contact.php';
		break;
  		default:
  			# code...
  			include 'header.php';
  			include 'home.php';
  		break;
  	}
?>

<?php include 'footer.php'; ?>