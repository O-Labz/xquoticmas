<?php
	// Opens a connection to the database
	// Since it is a php file it won't open in a browser 
	// It should be saved outside of the main web documents folder
	// and imported when needed
	 
	DEFINE('DB_USER', 'xauticuser');
	DEFINE('DB_PASSWORD', 'partnerdata@1##');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_NAME', 'xautic');

	DEFINE('DB_ROOTUSER', 'root');
	DEFINE('DB_ROOTPASSWORD', 'turtledove@1##');

	DEFINE('CONTACT_LINK', 'Location: http://localhost:1234/xauticmas/src/pages/index.php?page=contact');
	DEFINE('REGISTER_LINK', 'Location: http://localhost:1234/xauticmas/src/pages/index.php?page=registration');
	DEFINE('DONE_LINK', 'Location: http://localhost:1234/xauticmas/src/pages/done.php?page=done');

	$abc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Could not connect to MYSQL: ".mysqli_connect_error());

	$rootuser = DB_ROOTUSER;
	$rootpassword = DB_ROOTPASSWORD;
	$rootconnect = DB_HOST;

	$contact_link = CONTACT_LINK;
	$done_link=DONE_LINK;
	$register_link = REGISTER_LINK;

?>