<?php
	
	//Gets the connection to the db up and running
	require_once('../mysqli_charts_connect.php');

  if (isset($_GET['keyz'])) 
  {
    //Make a vairable to catch the value of edit
    $id = $_GET['keyz'];
    //Query the database for the row you want
    $query = "DELETE FROM `iqc` WHERE `keyz`= ".$id." LIMIT 1 ";
    //Generate a response from the data base
    $response = @mysqli_query($abc, $query);
    //The row that is returned
    $row = mysqli_fetch_array($response);
    echo "Record deleted successfully";
    header("Location: http://172.27.27.192:1234/roamtechportal/iqc/index.php");
    exit();
  }


?>