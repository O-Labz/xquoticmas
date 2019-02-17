<!DOCTYPE html>
<html lang="en">
<head>
   <title>Xquatic Mas: Welcome</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=0.1">
<!--===============================================================================================-->   
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/Xquoticmas/assets/favicon/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="/Xquoticmas/assets/favicon/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="/Xquoticmas/assets/favicon/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="/Xquoticmas/assets/favicon/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="/Xquoticmas/assets/favicon/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="/Xquoticmas/assets/favicon/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="/Xquoticmas/assets/favicon/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="/Xquoticmas/assets/favicon/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="/Xquoticmas/assets/favicon/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192"  href="/Xquoticmas/assets/favicon/android-icon-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/Xquoticmas/assets/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="96x96" href="/Xquoticmas/assets/favicon/favicon-96x96.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/Xquoticmas/assets/favicon/favicon-16x16.png">
   <link rel="manifest" href="/Xquoticmas/assets/favicon/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="/Xquoticmas/assets/favicon/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">
<!--===============================================================================================-->
    <!-- Bootstrap CSS -->
    <link href="/Xquoticmas/stylesheet/css/bootstrap-grid.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/bootstrap.css" rel="stylesheet">
    <link href="/Xquoticmas/stylesheet/css/bootstrap.min.css" rel="stylesheet">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/Xquoticmas/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/Xquoticmas/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/Xquoticmas/vendor/animate/animate.css">
<!--===============================================================================================-->   
   <link rel="stylesheet" type="text/css" href="/Xquoticmas/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/Xquoticmas/vendor/select2/select2.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="/Xquoticmas/stylesheet/css/util.css">
   <link rel="stylesheet" type="text/css" href="/Xquoticmas/stylesheet/css/main.css">
<!--===============================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            var nowY = new Date().getFullYear(),options = "";

         for(var Y=nowY; Y>=1968; Y--) {
           options += "<option>"+ Y +"</option>";
         }

         $("#year").append( options );
      });
    </script>
<!--===============================================================================================-->
</head>
<body> 
   <div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
               <!-- <img src="/Xquoticmas/assets/MasLogo.png" alt="IMG"> -->
            </div>

            <form action="/Xquoticmas/src/pages/bday.php" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
               <span class="login100-form-title">
                  Are you of legal age to party with Xquotic ?
               </span>

               <h5 style="margin-left: 3em;">Enter your Birth Date</h5>
               <br>
               <div class="wrap-input100 validate-input">
                 <select class="input100" id="year" name="year" required>
                   <option value="" disabled selected>Year</option>
                 </select>
               </div>

               <div class="wrap-input100 validate-input">
                  <select class="input100" id="month" name="month" required>
                     <option value="" disabled selected>Month</option>
                     <option value='1'>Janaury</option>
                     <option value='2'>February</option>
                     <option value='3'>March</option>
                     <option value='4'>April</option>
                     <option value='5'>May</option>
                     <option value='6'>June</option>
                     <option value='7'>July</option>
                     <option value='8'>August</option>
                     <option value='9'>September</option>
                     <option value='10'>October</option>
                     <option value='11'>November</option>
                     <option value='12'>December</option>
                  </select> 
               </div>


               <div class="wrap-input100 validate-input" data-validate = "Password is required">
                 <select class="input100" id="day" name="day" required>
                     <option value="" disabled selected>Day</option>
                     <option value='1'>1</option>
                     <option value='2'>2</option>
                     <option value='3'>3</option>
                     <option value='4'>4</option>
                     <option value='5'>5</option>
                     <option value='6'>6</option>
                     <option value='7'>7</option>
                     <option value='8'>8</option>
                     <option value='9'>9</option>
                     <option value='10'>10</option>
                     <option value='11'>11</option>
                     <option value='12'>12</option>
                     <option value='13'>13</option>
                     <option value='14'>14</option>
                     <option value='15'>15</option>
                     <option value='16'>16</option>
                     <option value='17'>17</option>
                     <option value='18'>18</option>
                     <option value='19'>19</option>
                     <option value='20'>20</option>
                     <option value='21'>21</option>
                     <option value='22'>22</option>
                     <option value='23'>23</option>
                     <option value='24'>24</option>
                     <option value='25'>25</option>
                     <option value='26'>26</option>
                     <option value='27'>27</option>
                     <option value='28'>28</option>
                     <option value='29'>29</option>
                     <option value='30'>30</option>
                     <option value='31'>31</option>
                 </select>
               </div>
               
               <div class="container-login100-form-btn">
                  <button type="submit" class="btn btn-outline-info" style="width: 300px;">Enter</button>
               </div>
            </form>
         </div>
      </div>
   </div>
<!--===============================================================================================-->   
   <script src="/Xquoticmas/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
   <script src="/Xquoticmas/vendor/bootstrap/js/popper.js"></script>
   <script src="/Xquoticmas/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
   <script src="/Xquoticmas/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
   <script src="/Xquoticmas/vendor/tilt/tilt.jquery.min.js"></script>
   <script >
      $('.js-tilt').tilt({
         scale: 1.1
      })
   </script>
<!--===============================================================================================-->
   <script src="/Xquoticmas/stylesheet/js/main.js"></script>

</body>
</html>