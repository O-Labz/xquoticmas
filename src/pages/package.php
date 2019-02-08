<?php

  $trigger = $_GET['page'];
  if ($trigger  == 'registrationdone') {
    # code...
    echo '<script type="text/javascript">';
    echo 'swal("Registration Complete!", "Please check your email for order details", "success")';
    echo '</script>';
  }
?>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style type="text/css">
	.my-gallery{
	  margin: 10px 50px;
	  padding-top: 200px;
	}

	.my-gallery .card .title-body .card-head{
	  text-align: center;
	  color: #ffff;
	  font-family: Baskerville;
	  font-weight: bold;
	}

	.my-gallery .card .title-body{
	  /*background-color: #007bff;*/
	  background-color: #7f43ad;
	}

	.my-gallery img{
	  width: 300px;
	  height: 230px;
	  padding: 5px;
	  transition: 1s;
	}

	.my-gallery .card{
	  margin: 10px 30px;
	  transition: 1s;
	  width: 19rem;
	}

	.my-gallery img:hover{
	  filter: grayscale(0%);
	  transform: scale(1.1);
	}
	a:hover{
		transform: scale(1.1);
		color: #000000;
	}
</style>



<div class="my-gallery">
	<div class="row">
		<div class="card">
			<div class="title-body"><h4 class="card-head">Build-A-Package</h4></div>
	  		<img class="card-img-top" src="/Xquoticmas/assets/gallery/pic8.jpg" alt="Card image cap">
	  		<div class="card-body">
	    		<h5 class="card-title">Package Contents</h5>
	    		<p class="card-text">Here you have the option to fully customize your xquotic experience by selecting any of our products.</p>
	    		<br>
	    		<hr>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#buildModal" data-title="Build-A-Package" data-picture="/Xquoticmas/assets/gallery/pic8.jpg" data-ordertotal="2000.00 JMD" >Customize Now</button>
	  		</div>
		</div>
		<div class="card">
			<div class="title-body"><h4 class="card-head">Drinks Only Package</h4></div>
	  		<img class="card-img-top" src="/Xquoticmas/assets/gallery/pic1.jpg" alt="Card image cap">
	  		<div class="card-body">
	    		<h5 class="card-title">Package Contents</h5>
				<li>Xquotic Mug</li>
				<li>Premium Mixed Drinks</li>
				<br>
				<br>
				<br>
	    		<hr>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#drinksModal" data-title="Drinks Only Package" data-picture="/Xquoticmas/assets/gallery/pic1.jpg" data-ordertotal="2000.00 JMD" >Register Now</button>
	  		</div>
		</div>
		<div class="card">
			<div class="title-body"><h4 class="card-head">T-Shirt &amp; Drinks Package</h4></div>
	  		<img class="card-img-top" src="/Xquoticmas/assets/gallery/pic2.jpg" alt="Card image cap">
	  		<div class="card-body">
	    		<h5 class="card-title">Package Contents</h5>
				<li>Xquotic Mug</li>
				<li>Premium Mixed Drinks</li>
				<li>Xquotic Shirt</li>
				<br>
				<br>
	    		<hr>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#drinksModal" data-title="T-Shirt &amp; Drinks Package" data-picture="/Xquoticmas/assets/gallery/pic2.jpg" data-ordertotal="4000.00 JMD" >Register Now</button>
	  		</div>
		</div>
		<div class="card">
			<div class="title-body"><h4 class="card-head">Costume &amp; Drinks Package</h4></div>
	  		<img class="card-img-top" src="/Xquoticmas/assets/gallery/pic3.jpg" alt="Card image cap">
	  		<div class="card-body">
	    		<h5 class="card-title">Package Contents</h5>
				<li>Xquotic Mug</li>
				<li>Premium Mixed Drinks</li>
				<li>Xquotic Costume</li>
				<br>
	    		<hr>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#drinksModal" data-title="Costume &amp; Drinks Package" data-picture="/Xquoticmas/assets/gallery/pic3.jpg" data-ordertotal="2000.00" >Register Now</button>
	  		</div>
		</div>
		<div class="card">
			<div class="title-body"><h4 class="card-head">Basic T-Shirt Package</h4></div>
	  		<img class="card-img-top" src="/Xquoticmas/assets/gallery/pic4.jpg" alt="Card image cap">
	  		<div class="card-body">
	    		<h5 class="card-title">Package Contents</h5>
				<li>Xquotic Mason Jar</li>
				<li>Premium Mixed Drinks</li>
				<li>Xquotic Shirt</li>
				<li>Xquotic Tote Bag</li>
				<li>Xquotic Wave Rag</li>
				<li>Xquotic Waterproof Phone Case</li>
				<li>Mardi Gras</li>
				<br>
				<br>
	    		<hr>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#drinksModal" data-title="Basic T-Shirt Package" data-picture="/Xquoticmas/assets/gallery/pic4.jpg" data-ordertotal="2000.00" >Register Now</button>
	  		</div>
		</div>
		<div class="card">
			<div class="title-body"><h4 class="card-head">Basic Costume Package</h4></div>
	  		<img class="card-img-top" src="/Xquoticmas/assets/gallery/pic5.jpg" alt="Card image cap">
	  		<div class="card-body">
	    		<h5 class="card-title">Package Contents</h5>
				<li>Xquotic Mason Jar</li>
				<li>Premium Mixed Drinks</li>
				<li>Xquotic Costume</li>
				<li>Xquotic Tote Bag</li>
				<li>Xquotic Wave Rag</li>
				<li>Xquotic Waterproof Phone Case</li>
				<li>Mardi Gras</li>
				<br>
				<br>
	    		<hr>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#drinksModal" data-title="Basic Costume Package" data-picture="/Xquoticmas/assets/gallery/pic5.jpg" data-ordertotal="2000.00" >Register Now</button>
	  		</div>
		</div>
		<div class="card">
			<div class="title-body"><h4 class="card-head">Premium T-Shirt Package</h4></div>
	  		<img class="card-img-top" src="/Xquoticmas/assets/gallery/pic6.jpg" alt="Card image cap">
	  		<div class="card-body">
	    		<h5 class="card-title">Package Contents</h5>
				<li>Xquotic Mason Jar</li>
				<li>Premium Mixed Drinks</li>
				<li>Xquotic Road March Shirt</li>
				<li>Xquotic J&#39;Ouvert Shirt</li>
				<li>Xquotic Shorts</li>
				<li>Xquotic Tote Bag</li>
				<li>Xquotic Wave Rag</li>
				<li>Xquotic Waterproof Phone Case</li>
				<li>Xquotic Metal Phone Ring</li>
				<hr>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#drinksModal" data-title="Premium T-Shirt Package" data-picture="/Xquoticmas/assets/gallery/pic6.jpg" data-ordertotal="2000.00" >Register Now</button>
	  		</div>
		</div>
		<div class="card">
			<div class="title-body"><h4 class="card-head">Premium Costume Package</h4></div>
	  		<img class="card-img-top" src="/Xquoticmas/assets/gallery/pic7.jpg" alt="Card image cap">
	  		<div class="card-body">
	    		<h5 class="card-title">Package Contents</h5>
				<li>Xquotic Mason Jar</li>
				<li>Premium Mixed Drinks</li>
				<li>Xquotic Costume</li>
				<li>Xquotic J&#39;Ouvert Shirt</li>
				<li>Xquotic Tote Bag</li>
				<li>Xquotic Wave Rag</li>
				<li>Xquotic Waterproof Phone Case</li>
				<li>Xquotic Metal Phone Ring</li>
				<li>Mardi Gras</li>
				<hr>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#drinksModal" data-title="Premium Costume Package" data-picture="/Xquoticmas/assets/gallery/pic7.jpg" data-ordertotal="2000.00" >Register Now</button>
	  		</div>
		</div>


<!-- Drinks Modal -->
<div class="modal fade" id="drinksModal" tabindex="-1" role="dialog" aria-labelledby="drinksModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="drinksModal">Product title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	  <div class="container-fluid">
		    <div class="col-md-10 ml-auto" style="margin: 2px 5px;"><img class="card-img-top" id="pic" name="pic" src="" alt="Card image cap"></div>
		    <div class="row">
		      <div class="col-md-7 ml-auto" style="margin: 1px 3px;"><input type="text" style="font-size: 1.2em; font-family: Baskerville; color: #000000; border: none; display: inline;" id="ordertotal" name="ordertotal" readonly></input></div>
		    </div>
			<div class="container my-container">
			  <form action="drinksonly.php" method="POST" enctype="multipart/form-data">
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <input type="text" class="form-control" placeholder="First name" id="firstname" name="firstname" required>
			      </div>
			      <div class="form-group col-md-6">
			        <input type="text" class="form-control" placeholder="Last name" id="lastname" name="lastname" required>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputAddress"></label>
			      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			    </div>
			    <div class="form-group">
			      <label for="inputAddress2"></label>
			      <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" placeholder="Contact Number: 876 888 8888" required>
			    </div>
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <label for="inputCity"></label>
			        <input type="text" class="form-control" placeholder="Nationality" id="nationality" name="nationality" required>
			      </div>
			      <div class="form-group col-md-6">
			        <label for="inputState"></label>
			        <select id="inputState" class="form-control" id="gender" name="gender" required>
			          <option value="" disabled selected>Gender...</option>
			          <option>Male</option>
			          <option>Female</option>
			        </select>
			      </div>
			    </div>
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <label for="inputZip"></label>
			        <input type="number" class="form-control" id="age" name="age"  min="18" max="75" placeholder="Age" required>
			      </div>
			      <div class="form-group col-md-6">
			        <label for="inputZip"></label>
			        <input type="number" class="form-control" id="quantity" name="quantity"  min="1" max="25" placeholder="Package Quantity" required>
			      </div>
			    </div>
			    <hr>
			    <label for="inputState">Select a Package</label>
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <input type="radio" id="package" name="package" value="drinksonly"> Drinks Only
			      </div>
			      <div class="form-group col-md-6">
			        <input type="radio" id="package"  name="package" value="tshirtanddrinks"> T-Shirt &amp; Drinks
			      </div>
			      <div class="form-group col-md-6">
			        <input type="radio" id="package"  name="package" value="costumeandrinks"> Costume &amp; Drinks
			      </div>
			      <div class="form-group col-md-6">
			        <input type="radio" id="package"  name="package" value="basictshirt"> Basic T-Shirt
			      </div>
			      <div class="form-group col-md-6">
			        <input type="radio" id="package"  name="package" value="basiccostume"> Basic Costume
			      </div>
			      <div class="form-group col-md-6">
			        <input type="radio" id="package"  name="package" value="premiumtshirt"> Premium T-Shirt
			      </div>
			      <div class="form-group col-md-6">
			        <input type="radio" id="package"  name="package" value="premiumcostume"> Premium Costume
			      </div>
			    </div>
			    <hr>

			    <div id="drinksonlytextboxes" style="display: none"> 
				</div>

				<div id="tshirtanddrinkstextboxes" style="display: none">
				     <div class="form-row">
				      <div class="form-group col-md-12">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtstyle" name="shirtstyle" >
				          <option value="" disabled selected>T-Shirt Style</option>
				          <option>Tank Top</option>
				          <option>T-Shirt</option>
				          <option>Tube Top</option>
				        </select>
				      </div>
				      <div class="form-group col-md-6">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtsize" name="shirtsize" >
				          <option value="" disabled selected>Shirt Size...</option>
				          <option>XS</option>
				          <option>S</option>
				          <option>M</option>
				          <option>L</option>
				          <option>XL</option>
				          <option>XXL</option>
				        </select>
				      </div>
				      <div class="form-group col-md-6">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtcolor" name="shirtcolor" >
				          <option value="" disabled selected>Shirt Colour...</option>
				          <option>Black</option>
				          <option>White</option>
				        </select>
				      </div>
				    </div>
				</div>

				<div id="costumeandrinkstextboxes" style="display: none">
				    <div class="form-row">
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage" name="subpackage" value="basicandrosfront"> Andros Frontline
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicandrosback"> Andros Backline
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicparadisefront"> Paradise Frontline
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicparadiseback"> Paradise Backline
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicexuma"> Exuma
				      </div>
				    </div>
				</div>

				<div id="premiumcostumepackagetextboxes" style="display: none">
				    <div class="form-row">
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage" name="subpackage" value="premiumandrosfront"> Andros Frontline
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="premiumandrosback"> Andros Backline
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="premiumparadisefront"> Paradise Frontline
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="premiumparadiseback"> Paradise Backline
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="premiumexuma"> Exuma
				      </div>
				    </div>
				</div>




				<div id="premiumtshirtpackagetextboxes" style="display: none">
				     <div class="form-row">
				      <div class="form-group col-md-12">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="jouvert" name="jouvert" >
				          <option value="" disabled selected>J’Ouvert T-Shirt Size (all shirts come in white)</option>
				          <option>XS</option>
				          <option>S</option>
				          <option>M</option>
				          <option>L</option>
				          <option>XL</option>
				          <option>XXL</option>
				        </select>
				      </div>
				      <div class="form-group col-md-6">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtstyle" name="shirtstyle" >
				          <option value="" disabled selected>T-Shirt Style</option>
				          <option>Tank Top</option>
				          <option>T-Shirt</option>
				          <option>Tube Top</option>
				        </select>
				      </div>
				      <div class="form-group col-md-6">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtsize" name="shirtsize" >
				          <option value="" disabled selected>T-Shirt Size:</option>
				          <option>XS</option>
				          <option>S</option>
				          <option>M</option>
				          <option>L</option>
				          <option>XL</option>
				          <option>XXL</option>
				        </select>
				      </div>
				      <div class="form-group col-md-6">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shortssize" name="shortssize" >
				          <option value="" disabled selected>Shorts Size:</option>
				          <option>S</option>
				          <option>M</option>
				          <option>L</option>
				          <option>XL</option>
				        </select>
				      </div>
				      <div class="form-group col-md-6">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtcolor" name="shirtcolor" >
				          <option value="" disabled selected>T-Shirt Color:</option>
				          <option>Black</option>
				          <option>White</option>
				        </select>
				      </div>
				    </div>
				</div>







			    <div id="basiccostumepackagetextboxes" style="display: none"> 
				</div>
				<hr>
					<div id="basicandrostextboxes" style="display: none">
						<div class="form-row">
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Bust" id="bust" name="bust" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Waist" id="waist" name="waist" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Hip" id="hip" name="hip" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Neck width" id="neck" name="neck" >
						      </div>
					    </div>
					</div>
					<div id="basicparadisetextboxes" style="display: none">
					<div class="form-row">
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Bust" id="bust" name="bust" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Waist" id="waist" name="waist" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Hip" id="hip" name="hip" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Navel to Crotch" id="navel" name="navel" >
					      </div>
					      <div class="form-group col-md-12">
					        <input type="text" class="form-control" placeholder="Shoulder to Underbust" id="shoulder" name="shoulder" >
					      </div>
					      <br>
					      <div class="form-group col-md-12">
					        <input type="text" class="form-control" placeholder="Width between each Breast" id="breast" name="breast" >
					      </div>
					    </div>
					</div>
					<div id="basicexumatextboxes" style="display: none">
					<div class="form-row">
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Bra Size" id="bra" name="bra" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Panty Size" id="panty" name="panty" >
					      </div>
					    </div>
					</div>




			    <div id="premiumcostumepackagetextboxes" style="display: none"> 
				</div>
					<div id="premiumandrostextboxes" style="display: none">
						<div class="form-row">
							<div class="form-group col-md-12">
						        <label for="inputZip"></label>
						        <select id="inputState" class="form-control" id="jouvert" name="jouvert" >
						          <option value="" disabled selected>J’Ouvert T-Shirt Size (all shirts come in white)</option>
						          <option>XS</option>
						          <option>S</option>
						          <option>M</option>
						          <option>L</option>
						          <option>XL</option>
						          <option>XXL</option>
						        </select>
						     </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Bust" id="bust" name="bust" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Waist" id="waist" name="waist" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Hip" id="hip" name="hip" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Neck width" id="neck" name="neck" >
						      </div>
					    </div>
					</div>
					<div id="premiumparadisetextboxes" style="display: none">
					<div class="form-row">
						<div class="form-group col-md-12">
						        <label for="inputZip"></label>
						        <select id="inputState" class="form-control" id="jouvert" name="jouvert" >
						          <option value="" disabled selected>J’Ouvert T-Shirt Size (all shirts come in white)</option>
						          <option>XS</option>
						          <option>S</option>
						          <option>M</option>
						          <option>L</option>
						          <option>XL</option>
						          <option>XXL</option>
						        </select>
						  </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Bust" id="bust" name="bust" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Waist" id="waist" name="waist" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Hip" id="hip" name="hip" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Navel to Crotch" id="navel" name="navel" >
					      </div>
					      <div class="form-group col-md-12">
					        <input type="text" class="form-control" placeholder="Shoulder to Underbust" id="shoulder" name="shoulder" >
					      </div>
					      <br>
					      <div class="form-group col-md-12">
					        <input type="text" class="form-control" placeholder="Width between each Breast" id="breast" name="breast" >
					      </div>
					    </div>
					</div>
					<div id="premiumexumatextboxes" style="display: none">
					<div class="form-row">
						<div class="form-group col-md-12">
					        <label for="inputZip"></label>
					        <select id="inputState" class="form-control" id="jouvert" name="jouvert" >
					          <option value="" disabled selected>J’Ouvert T-Shirt Size (all shirts come in white)</option>
					          <option>XS</option>
					          <option>S</option>
					          <option>M</option>
					          <option>L</option>
					          <option>XL</option>
					          <option>XXL</option>
					        </select>
					     </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Bra Size" id="bra" name="bra" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Panty Size" id="panty" name="panty" >
					      </div>
					    </div>
					</div>
				<hr>
			    <label for="inputState">Choose Payment Method: </label>
			    <br>
			    <input type="radio" id="paymenttype" name="paymenttype" value="bank" required> Bank Transfer
			    <br>
				<input type="radio" id="paymenttype" name="paymenttype" value="paypal"> Paypal
				<hr>
			    <label for="inputState"></label>
			    <div class="form-group">
			      <div class="form-check">
			        <input class="form-check-input" type="checkbox" id="gridCheck" required>
			        <label class="form-check-label" for="gridCheck">
			          I agree that all information entered here about me is true and correct.
			        </label>
			      </div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Register</button>
			    </div>
			  </form>
			</div>
		  </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom Modal -->
<div class="modal fade" id="buildModal" tabindex="-1" role="dialog" aria-labelledby="buildModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="buildModal">Product title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	  <div class="container-fluid">
		    <div class="col-md-10 ml-auto" style="margin: 2px 5px;"><img class="card-img-top" id="pics" name="pics" src="" alt="Card image cap"></div>
		    <div class="row">
		      <div class="col-md-7 ml-auto" style="margin: 1px 3px;"><input type="text" style="font-size: 1.2em; font-family: Baskerville; color: #000000; border: none; display: inline;" id="ordertotal" name="ordertotal" readonly hidden="true"></input></div>
		    </div>
			<div class="container my-container">
			  <form action="drinksonly.php" method="POST" enctype="multipart/form-data">
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <input type="text" class="form-control" placeholder="First name" id="firstname" name="firstname" required>
			      </div>
			      <div class="form-group col-md-6">
			        <input type="text" class="form-control" placeholder="Last name" id="lastname" name="lastname" required>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputAddress"></label>
			      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			    </div>
			    <div class="form-group">
			      <label for="inputAddress2"></label>
			      <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" placeholder="Contact Number: 876 888 8888" required>
			    </div>
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <label for="inputCity"></label>
			        <input type="text" class="form-control" placeholder="Nationality" id="nationality" name="nationality" required>
			      </div>
			      <div class="form-group col-md-6">
			        <label for="inputState"></label>
			        <select id="inputState" class="form-control" id="gender" name="gender" required>
			          <option value="" disabled selected>Gender...</option>
			          <option>Male</option>
			          <option>Female</option>
			        </select>
			      </div>
			    </div>
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <label for="inputZip"></label>
			        <input type="number" class="form-control" id="age" name="age"  min="18" max="75" placeholder="Age" required>
			      </div>
			      <div class="form-group col-md-6">
			        <label for="inputZip"></label>
			        <input type="number" class="form-control" id="quantity" name="quantity"  min="1" max="25" value="1" placeholder="Package Quantity" hidden="true">
			      </div>
			    </div>
			    <hr>
				<label for="inputState">Select anything you want :</label>

					<div class="form-row">
					      <div class="form-group col-md-12">
					        <input type="checkbox" name="mug" id="" value="mug"> Mug ($300)</input>
					      </div>
					      <div class="form-group col-md-6">
					        <input type="checkbox" name="mason jar" id="mason jar" value="mason jar"> Mason Jar ($800)</input>
					      </div>
					      <div class="form-group col-md-12">
					        <input type="checkbox" name="tote bag" id="tote bag" value="tote bag"> Tote Bag (pre-selected) ($500)</input>
					      </div>
					      <div class="form-group col-md-6">
					        <input type="checkbox" name="wave rag" id="wave rag" value="wave rag"> Wave Rag ($400)</input>
					      </div>
					      <div class="form-group col-md-12">
					        <input type="checkbox" name="waterproof phone case" id="waterproof phone case" value="waterproof phone case"> Waterproof Phone Case ($400)</input>
					      </div>
					      <br>
					      <div class="form-group col-md-12">
					        <input type="checkbox" name="metal phone ring" id="metal phone ring" value="metal phone ring"> Metal Phone Ring ($500)</input>
					      </div>
					      <div class="form-group col-md-6">
					        <input type="checkbox" name="mardi gras" id="mardi gras" value="mardi gras"> Mardi Gras ($100)</input>
					      </div>

					      <div class="form-group col-md-12">
					        <label for="inputZip"></label>
					        <select id="inputState" class="form-control" id="jouvert" name="jouvert" >
					          <option value="" disabled selected>J’Ouvert ($500) T-Shirt Size (all shirts come in white)</option>
					          <option>XS</option>
					          <option>S</option>
					          <option>M</option>
					          <option>L</option>
					          <option>XL</option>
					          <option>XXL</option>
					        </select>
					      </div>

					      <div class="form-group col-md-12">
					        <label for="inputZip"></label>
					        <select id="inputState" class="form-control" id="shorts" name="shorts" >
					          <option value="" disabled selected>Shorts ($2000)</option>
					          <option>S</option>
					          <option>M</option>
					          <option>L</option>
					          <option>XL</option>
					        </select>
					      </div>
					    </div>
					</div>

			    <hr>
			    <label for="inputState">Select a Package</label>
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <input type="radio" id="package"  name="package" value="tshirtanddrinks"> T-Shirt ($1000)
			      </div>
			      	<div id="tshirtanddrinkstextboxes">
				     <div class="form-row">
				      <div class="form-group col-md-12">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtstyle" name="shirtstyle" >
				          <option value="" disabled selected>T-Shirt Style</option>
				          <option>Tank Top</option>
				          <option>T-Shirt</option>
				          <option>Tube Top</option>
				        </select>
				      </div>
				      <div class="form-group col-md-6">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtsize" name="shirtsize" >
				          <option value="" disabled selected>Shirt Size...</option>
				          <option>XS</option>
				          <option>S</option>
				          <option>M</option>
				          <option>L</option>
				          <option>XL</option>
				          <option>XXL</option>
				        </select>
				      </div>
				      <div class="form-group col-md-6">
				        <label for="inputZip"></label>
				        <select id="inputState" class="form-control" id="shirtcolor" name="shirtcolor" >
				          <option value="" disabled selected>Shirt Colour...</option>
				          <option>Black</option>
				          <option>White</option>
				        </select>
				      </div>
				    </div>
				</div>
			    </div>
			    <hr>

				<div id="costumeandrinkstextboxes" style="display: none">
				    <div class="form-row">
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage" name="subpackage" value="basicandrosfront"> Andros Frontline ($4500)
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicandrosback"> Andros Backline ($4500)
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicparadisefront"> Paradise Frontline ($4500)
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicparadiseback"> Paradise Backline ($4500)
				      </div>
				      <div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicexuma"> Exuma ($5500)
				      </div>
				    </div>
				</div>

			    <div id="basiccostumepackagetextboxes"> 
				</div>
				<hr>
			      	  <div class="form-group col-md-12">
				        <input type="radio" id="subpackage" name="subpackage" value="basicandrosfront"> Andros Frontline or Backline($4500)
				      </div>
					<div id="basicandrostextboxes">
						<div class="form-row">
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Bust" id="bust" name="bust" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Waist" id="waist" name="waist" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Hip" id="hip" name="hip" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Neck width" id="neck" name="neck" >
						      </div>
					    </div>
					</div>
					<hr>
						<div class="form-group col-md-12">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicparadisefront"> Paradise Frontline or Backline ($4500)
				      </div>
					<div id="basicparadisetextboxes">
					<div class="form-row">
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Bust" id="bust" name="bust" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Waist" id="waist" name="waist" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Hip" id="hip" name="hip" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Navel to Crotch" id="navel" name="navel" >
					      </div>
					      <div class="form-group col-md-12">
					        <input type="text" class="form-control" placeholder="Shoulder to Underbust" id="shoulder" name="shoulder" >
					      </div>
					      <br>
					      <div class="form-group col-md-12">
					        <input type="text" class="form-control" placeholder="Width between each Breast" id="breast" name="breast" >
					      </div>
					    </div>
					</div>
					<hr>
						<div class="form-group col-md-6">
				        <input type="radio" id="subpackage"  name="subpackage" value="basicexuma"> Exuma ($5500)
				      </div>
					<div id="basicexumatextboxes">
					<div class="form-row">
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Bra Size" id="bra" name="bra" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Panty Size" id="panty" name="panty" >
					      </div>
					    </div>
					</div>




			    <div id="premiumcostumepackagetextboxes" style="display: none"> 
				</div>
					<div id="premiumandrostextboxes" style="display: none">
						<div class="form-row">
							<div class="form-group col-md-12">
						        <label for="inputZip"></label>
						        <select id="inputState" class="form-control" id="jouvert" name="jouvert" >
						          <option value="" disabled selected>J’Ouvert T-Shirt Size (all shirts come in white)</option>
						          <option>XS</option>
						          <option>S</option>
						          <option>M</option>
						          <option>L</option>
						          <option>XL</option>
						          <option>XXL</option>
						        </select>
						     </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Bust" id="bust" name="bust" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Waist" id="waist" name="waist" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Hip" id="hip" name="hip" >
						      </div>
						      <div class="form-group col-md-6">
						        <input type="text" class="form-control" placeholder="Neck width" id="neck" name="neck" >
						      </div>
					    </div>
					</div>
					<div id="premiumparadisetextboxes" style="display: none">
					<div class="form-row">
						<div class="form-group col-md-12">
						        <label for="inputZip"></label>
						        <select id="inputState" class="form-control" id="jouvert" name="jouvert" >
						          <option value="" disabled selected>J’Ouvert T-Shirt Size (all shirts come in white)</option>
						          <option>XS</option>
						          <option>S</option>
						          <option>M</option>
						          <option>L</option>
						          <option>XL</option>
						          <option>XXL</option>
						        </select>
						  </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Bust" id="bust" name="bust" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Waist" id="waist" name="waist" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Hip" id="hip" name="hip" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Navel to Crotch" id="navel" name="navel" >
					      </div>
					      <div class="form-group col-md-12">
					        <input type="text" class="form-control" placeholder="Shoulder to Underbust" id="shoulder" name="shoulder" >
					      </div>
					      <br>
					      <div class="form-group col-md-12">
					        <input type="text" class="form-control" placeholder="Width between each Breast" id="breast" name="breast" >
					      </div>
					    </div>
					</div>
					<div id="premiumexumatextboxes" style="display: none">
					<div class="form-row">
						<div class="form-group col-md-12">
					        <label for="inputZip"></label>
					        <select id="inputState" class="form-control" id="jouvert" name="jouvert" >
					          <option value="" disabled selected>J’Ouvert T-Shirt Size (all shirts come in white)</option>
					          <option>XS</option>
					          <option>S</option>
					          <option>M</option>
					          <option>L</option>
					          <option>XL</option>
					          <option>XXL</option>
					        </select>
					     </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Bra Size" id="bra" name="bra" >
					      </div>
					      <div class="form-group col-md-6">
					        <input type="text" class="form-control" placeholder="Panty Size" id="panty" name="panty" >
					      </div>
					    </div>
					</div>
				<hr>
			    <label for="inputState">Choose Payment Method: </label>
			    <br>
			    <input type="radio" id="paymenttype" name="paymenttype" value="bank" required> Bank Transfer
			    <br>
				<input type="radio" id="paymenttype" name="paymenttype" value="paypal"> Paypal
				<hr>
			    <label for="inputState"></label>
			    <div class="form-group">
			      <div class="form-check">
			        <input class="form-check-input" type="checkbox" id="gridCheck" required>
			        <label class="form-check-label" for="gridCheck">
			          I agree that all information entered here about me is true and correct.
			        </label>
			      </div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Register</button>
			    </div>
			  </form>
			</div>
		  </div>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Change modal contents with jquery -->
<script type="text/javascript">
	$('#drinksModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget);
	  var recipienttitle = button.data('title');
	  var recipientpicture = button.data('picture');
	  var recipientprice = button.data('ordertotal');
	  var modal = $(this);
	  modal.find('.modal-title').text(recipienttitle);
	  modal.find('.modal-body #pic').val(recipientpicture);
	  modal.find('.modal-body #ordertotal').val(recipientprice);
	  //Now change immage src using jquery
	  $('#pic').attr('src',recipientpicture)
	});
	$('#buildModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget);
	  var buildrecipienttitle = button.data('title');
	  var buildrecipientpicture = button.data('picture');
	  var buildrecipientprice = button.data('ordertotal');
	  var modal = $(this);
	  modal.find('.modal-title').text(buildrecipienttitle);
	  modal.find('.modal-body #pics').val(buildrecipientpicture);
	  modal.find('.modal-body #ordertotal').val(buildrecipientprice);
	  //Now change immage src using jquery
	  $('#pics').attr('src',buildrecipientpicture)
	});
</script>

<!-- Change package options -->
<script type="text/javascript">
	$(function() {
	    $('input[name="package"]').on('click', function() {
			switch($(this).val()) {
			  case 'drinksonly':
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#drinksonlytextboxes').show();
			    break;
			  case 'tshirtanddrinks':
				$('#drinksonlytextboxes').hide();
				$('#costumeandrinkstextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#tshirtanddrinkstextboxes').show();
			    break;
			    case 'costumeandrinks':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#costumeandrinkstextboxes').show();
			    break;
			    case 'basictshirt':
				$('#drinksonlytextboxes').hide();
				$('#costumeandrinkstextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#tshirtanddrinkstextboxes').show();
			    break;
			    case 'basiccostume':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#costumeandrinkstextboxes').show();
			    break;
			    case 'premiumtshirt':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#premiumtshirtpackagetextboxes').show();
			    break;
			    case 'premiumcostume':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').show();
			    break;
			  default:
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
			}
	    });
	    $('input[name="subpackage"]').on('click', function() {
			switch($(this).val()) {
			  case 'premiumandrosfront':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#premiumandrostextboxes').show();
				$('#premiumcostumepackagetextboxes').show();
			    break;
			  case 'premiumandrosback':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();				
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();				
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').show();
				$('#premiumandrostextboxes').show();
			    break;
			  case 'premiumparadisefront':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();				
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();				
				$('#premiumexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').show();
				$('#premiumparadisetextboxes').show();
			    break;
			  case 'premiumparadiseback':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').show();
				$('#premiumparadisetextboxes').show();
			    break;
			  case 'premiumexuma':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').hide();				
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumcostumepackagetextboxes').show();
				$('#premiumexumatextboxes').show();
			    break;

			  case 'basicandrosfront':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();				
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#costumeandrinkstextboxes').show();
				$('#basicandrostextboxes').show();
			    break;
			  case 'basicandrosback':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();				
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
				$('#costumeandrinkstextboxes').show();
				$('#basicandrostextboxes').show();
			    break;
			  case 'basicparadisefront':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();				
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
			    $('#basicandrostextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#costumeandrinkstextboxes').show();
				$('#basicparadisetextboxes').show();
			    break;
			  case 'basicparadiseback':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();				
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
			    $('#basicandrostextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#costumeandrinkstextboxes').show();
				$('#basicparadisetextboxes').show();
			    break;
			  case 'basicexuma':
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
			    $('#basicandrostextboxes').hide();
				$('#basicparadisetextboxes').hide();
				$('#basicexumatextboxes').show();
				$('#costumeandrinkstextboxes').show();
			    break;

			  default:
				$('#drinksonlytextboxes').hide();
				$('#tshirtanddrinkstextboxes').hide();
				$('#costumeandrinkstextboxes').show();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumtshirtpackagetextboxes').hide();
				$('#basiccostumepackagetextboxes').hide();
				$('#premiumcostumepackagetextboxes').hide();
				$('#premiumandrostextboxes').hide();
				$('#premiumparadisetextboxes').hide();
				$('#premiumexumatextboxes').hide();
			    $('#basicandrostextboxes').hide();
				$('#basicexumatextboxes').hide();
				$('#basicparadisetextboxes').hide();
			}
	    });
	});
</script>