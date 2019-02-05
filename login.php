<?php
   // include("config.php");
   // session_start();
   
   // if($_SERVER["REQUEST_METHOD"] == "POST") {
   //    // username and password sent from form 
      
   //    $myusername = mysqli_real_escape_string($db,$_POST['username']);
   //    $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
   //    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
   //    $result = mysqli_query($db,$sql);
   //    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   //    $active = $row['active'];
      
   //    $count = mysqli_num_rows($result);
      
   //    // If result matched $myusername and $mypassword, table row must be 1 row
		
   //    if($count == 1) {
   //       session_register("myusername");
   //       $_SESSION['login_user'] = $myusername;
         
   //       header("location: welcome.php");
   //    }else {
   //       $error = "Your Login Name or Password is invalid";
   //    }
   // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Xquatic: Admin</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->   
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicon/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicon/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicon/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicon/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicon/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicon/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192"  href="./assets/favicon/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicon/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
   <link rel="manifest" href="./assets/favicon/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="./assets/favicon/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
<!--===============================================================================================-->   
   <link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./stylesheet/css/util.css">
   <link rel="stylesheet" type="text/css" href="./stylesheet/css/main.css">
<!--===============================================================================================-->
</head>
<body>
   
   <div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
               <img src="./assets/Mas.png" alt="IMG">
            </div>

            <form action = "" method = "post" class="login100-form validate-form">
               <span class="login100-form-title">
                  Xquatic Admin Login
               </span>

               <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                  <input class="input100" type="text" name="username" placeholder="User Name">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
                  </span>
               </div>

               <div class="wrap-input100 validate-input" data-validate = "Password is required">
                  <input class="input100" type="password" name="password" placeholder="Password">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                     <i class="fa fa-lock" aria-hidden="true"></i>
                  </span>
               </div>
               
               <div class="container-login100-form-btn">
                  <button type = "submit" value = " Submit " class="login100-form-btn">
                     Login
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
   
   

   
<!--===============================================================================================-->   
   <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
   <script src="./vendor/bootstrap/js/popper.js"></script>
   <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
   <script src="./vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
   <script src="./vendor/tilt/tilt.jquery.min.js"></script>
   <script >
      $('.js-tilt').tilt({
         scale: 1.1
      })
   </script>
<!--===============================================================================================-->
   <script src="./stylesheet/js/main.js"></script>

</body>
</html>