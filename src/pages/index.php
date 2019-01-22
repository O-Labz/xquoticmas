<?php include 'header.php'; ?>


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
  			include 'about.php';
		break;
	  	case 'gallery':
			# code...
	  		include 'gallery.php';
		break;
	  	case 'package':
			# code...
	  		include 'package.php';
		break;
	  	case 'registration':
			# code...
	  		include 'registration.php';
		break;
	  	case 'contact':
			# code...
	  		include 'contact.php';
		break;
  		default:
  			# code...
  			include 'home.php';
  		break;
  	}
?>

<?php include 'footer.php'; ?>