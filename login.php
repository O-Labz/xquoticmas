<?php
   include("./src/config/conf.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($abc,$_POST['username']);
      $mypassword = mysqli_real_escape_string($abc,$_POST['password']); 
      
      $query = "SELECT `id` FROM `admin` WHERE `username` = '$myusername' and `password` = '$mypassword'";
      $result = @mysqli_query($abc,$query);
      $count = 0;

      // If the query executed properly proceed
      if($result){

         // <!-- populate table from mysql database -->
         while ($row = mysqli_fetch_array($result)) 
         {   
            $count = mysqli_num_rows($result);
         }
      } else {

         echo "Couldn't issue database query<br />";

         echo mysqli_error($abc);

      }
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         // header($admin_link);
      }else {
         // $error = "Your Login Name or Password is invalid";
         echo "Your Login Name or Password is invalid";
         echo $count;
      }
   }
?>