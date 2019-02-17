<?php
  //Gets the connection to the db up and running
  require_once('./src/config/conf.php');

  ob_start();
  ob_clean();

  $id = $_POST['submit'];
  $delete = $_POST['delete'];

  $sql = "UPDATE `orders` SET `discard` = '$delete' WHERE `id` = ".$id."";


  $response = @mysqli_query($abc, $sql);
  if ($response)
  {
    echo "Record updated successfully";
    exit(header('Location: http://www.xquoticmas.com/Xquoticmas/drinks.php'));
  }
  else
  {
    echo "Error updating record: " . mysqli_error($abc);
    exit(header('Location: http://www.xquoticmas.com/Xquoticmas/drinks.php'));
  }
  mysqli_close($abc);
?>
