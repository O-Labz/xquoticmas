<?php

  //Gets the connection to the db up and running
  require_once('./src/config/conf.php');


  $id = $_POST['submit'];
  $orderstat = $_POST['orderstatus'];
  $paymentstat = $_POST['paymentstatus'];

  $sql = "UPDATE `orders` SET `orderstatus` = '$orderstat', `paymentstatus` = '$paymentstat' WHERE `id` = ".$id."";


  $response = @mysqli_query($abc, $sql);
  if ($response) 
  {
    echo "Record updated successfully";
    header("Location: http://localhost:1234/Xquoticmas/drinks.php");
    exit();
  }
  else 
  {
    echo "Error updating record: " . mysqli_error($abc);
  }

  mysqli_close($abc);


?>