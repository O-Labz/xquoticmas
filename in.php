<!doctype html>
<html lang="en">
  <head>
    <title>Xquotic Mas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="./Xquoticmas/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./Xquoticmas/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./Xquoticmas/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./Xquoticmas/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./Xquoticmas/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./Xquoticmas/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./Xquoticmas/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./Xquoticmas/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./Xquoticmas/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="./Xquoticmas/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./Xquoticmas/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./Xquoticmas/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./Xquoticmas/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="./Xquoticmas/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="./Xquoticmas/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">


    <!-- Bootstrap CSS -->
    <link href="./Xquoticmas/stylesheet/css/bootstrap-grid.css" rel="stylesheet">
    <link href="./Xquoticmas/stylesheet/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="./Xquoticmas/stylesheet/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="./Xquoticmas/stylesheet/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="./Xquoticmas/stylesheet/css/bootstrap.css" rel="stylesheet">
    <link href="./Xquoticmas/stylesheet/css/bootstrap.min.css" rel="stylesheet">

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


    <style>
		body, html {
		  height: 100%;
		  margin: auto;
		}

		.background {
		  /* The image used */
		  background-image: url("./Xquoticmas/assets/LandingBackGroungtwo.png");

		  /* Full height */
		  height: 100%; 

		  /* Center and scale the image nicely */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: 100% 100%;
		}

		.caption {
		  position: absolute;
		  left: 0;
		  top: 78%;
		  width: 100%;
		  text-align: center;
/*		  color: #000;*/
		}

		.caption span.bdd {
		  padding: 18px;
		  font-weight: bold;
		  padding-left: 7em;
		  font-size: 27px;
		  letter-spacing: 8px;
		}

		.caption span.bd {
		  padding: 18px;
		  padding-left: 2em;
		  font-size: 20px;
		  letter-spacing: 5px;
		}

	</style>

  </head>

  <body>
  	<div class="background">
  		<div class="caption">
  			  <div class="row justify-content-center">
    			<div class="col-9">
			       <span class="bdd"><center>Are you of legal age to party with Xquotic ?</center></span>
			    </div>
			  </div>
			  <div class="row justify-content-center">
					<div class="col-9">
				  	<form action="./Xquoticmas/src/pages/bday.php" method="POST" enctype="multipart/form-data">
	<!-- 	      <label for="date">Your Birth Date:</label> -->
		      	<span class="bd">Your Birth Date</span>
		      	<br>
		        <select id="year" name="year" required>
		          <option value="year">year</option>
		        </select>
		        <select id="month" name="month" required>
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
		        <br>
		        <br>
		      <button type="submit" class="btn btn-outline-info" style="width: 300px;">Enter</button>
	    </form>
					</div>
			  </div>
		</div>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>