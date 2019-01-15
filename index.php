<!doctype html>
<html lang="en">
  <head>
    <title>Xquotic Mas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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


    <!-- Bootstrap CSS -->
    <link href="./stylesheet/css/bootstrap-grid.css" rel="stylesheet">
    <link href="./stylesheet/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="./stylesheet/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="./stylesheet/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="./stylesheet/css/bootstrap.css" rel="stylesheet">
    <link href="./stylesheet/css/bootstrap.min.css" rel="stylesheet">

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
    
  </head>

  <body>
    

	<br>
	<br>
	<br>
	<br>
	<br>
    <!-- Logo Image -->
    <div class="container">
  		<img src="./assets/Mas.png" id="exotic" alt="exotic" style="width: 650px; position: absolute;   margin: auto; right: 0; left: 0;">
	</div>

	<div class="container">
  		<h1 style="width: 650px; position: relative; margin: auto; margin-top: 340px; padding-left: 1em; right: 0; left: 0;">Are you of legal age to party with Xquotic ? </h1>

		<br>
		<br>
		<br>
	    <form action="./src/pages/index.php" method="POST" enctype="multipart/form-data" style="width: 1000px; position: absolute; margin: auto; padding-left: 13.5em; right: 0; left: 0;">
<!-- 	      <label for="date">Your Birth Date:</label> -->
	      	<font size="5">Your Birth Date:</font>
	        <select id="year" name="year" required>
	          <option value="year">year</option>
	        </select>
	        <select id="day" name="day" required>
	          <option value="month">month</option>
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
	        <select id="day" name="day" required>
	          <option value="day">day</option>
	          <option value="Headley Facey">Headley Facey</option>
	          <option value="Raymour Wilson">Raymour Wilson</option>
	          <option value="Courtney Barrett">Courtney Barrett</option>
	          <option value="Carlyle Ruddock">Carlyle Ruddock</option>
	        </select>
	        <br>
	        <br>  
	      <button type="submit" class="btn btn-outline-info" style="width: 250px; right: 0; left: 0; margin-left: 200px;">Enter</button>
	    </form>
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
 <!--  <footer style="width: 650px; position: absolute;   margin: auto; bottom: 4; right: 0; left: 0;"> <strong>Digicel Group</strong> ©2016 Roamtech  - <strong> Version 1.0.0</strong></footer> -->
</html>