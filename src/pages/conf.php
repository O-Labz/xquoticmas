<?php
// Opens a connection to the database
// Since it is a php file it won't open in a browser 
// It should be saved outside of the main web documents folder
// and imported when needed
 
DEFINE('DB_USER', 'partnerdata');
DEFINE('DB_PASSWORD', 'carleato21');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'opdata');

DEFINE('DB_CONNECT', 'localhost');
DEFINE('DB_ROOTUSER', 'root');
DEFINE('DB_ROOTPASSWORD', 'turtledove@1##');

$abc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Could not connect to MYSQL: ".mysqli_connect_error());

$rootuser = DB_ROOTUSER;
$rootpassword = DB_ROOTPASSWORD;
$rootconnect = DB_CONNECT;


?>