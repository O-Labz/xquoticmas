<?php
	// Opens a connection to the database
	// Since it is a php file it won't open in a browser 
	// It should be saved outside of the main web documents folder
	// and imported when needed
	 
	DEFINE('DB_USER', 'omrihops_xauticu');
	DEFINE('DB_PASSWORD', 'partnerdata@1##');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_NAME', 'omrihops_xautic');

	DEFINE('DB_ROOTUSER', 'omrihops_xauticu');
	DEFINE('DB_ROOTPASSWORD', 'partnerdata@1##');

	DEFINE('CONTACT_LINK', 'Location: http://www.xquoticmas.com/Xquoticmas/src/pages/index.php?page=contactdone');
	DEFINE('REGISTER_LINK', 'Location: http://www.xquoticmas.com/Xquoticmas/src/pages/index.php?page=registrationdone');
	DEFINE('ADMIN_LINK', 'Location: http://www.xquoticmas.com/Xquoticmas/index.php');

	DEFINE('WELCOME_LINK','http://www.xquoticmas.com/Xquoticmas/customorder.php');
	DEFINE('REG_LINK','http://www.xquoticmas.com/Xquoticmas/registered.php');
	DEFINE('COMMENTS_LINK','http://www.xquoticmas.com/Xquoticmas/comments.php');
	DEFINE('DRINKS_LINK','http://www.xquoticmas.com/Xquoticmas/drinks.php');
	DEFINE('TSHIRT_LINK','http://www.xquoticmas.com/Xquoticmas/tshirtndrinks.php');
	DEFINE('COSTUME_LINK','http://www.xquoticmas.com/Xquoticmas/costumendrinks.php');
	DEFINE('BASICD_LINK','http://www.xquoticmas.com/Xquoticmas/basicshirt.php');
	DEFINE('BASICC_LINK','http://www.xquoticmas.com/Xquoticmas/basiccostume.php');
	DEFINE('PREMIUMS_LINK','http://www.xquoticmas.com/Xquoticmas/premiumshirt.php');
	DEFINE('COSTUMED_LINK','http://www.xquoticmas.com/Xquoticmas/costumendrinks.php');
	DEFINE('PREMIUMC_LINK','http://www.xquoticmas.com/Xquoticmas/premiumcostume.php');
	DEFINE('CUSTOMO_LINK','http://www.xquoticmas.com/Xquoticmas/customeorders.php');

	$abc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Could not connect to MYSQL: ".mysqli_connect_error());

	$rootuser = DB_ROOTUSER;
	$rootpassword = DB_ROOTPASSWORD;
	$rootconnect = DB_HOST;
	$rootname = DB_NAME;

	$contact_link = CONTACT_LINK;
	$register_link = REGISTER_LINK;
	$admin_link = ADMIN_LINK;

	$welcome_link = WELCOME_LINK;
	$reg_link = REG_LINK;
	$comments_link = COMMENTS_LINK;
	$drinks_link = DRINKS_LINK;
	$tshirt_link = TSHIRT_LINK;
	$costume_link = COSTUME_LINK;
	$basicd_link = BASICD_LINK;
	$basicc_link = BASICC_LINK;
	$premiums_link = PREMIUMS_LINK;
	$costumed_link = COSTUMED_LINK;
	$premiumc_link = PREMIUMC_LINK;
	$costomo_link = CUSTOMO_LINK;


?>