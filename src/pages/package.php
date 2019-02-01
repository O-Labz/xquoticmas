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
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#buildModal" data-title="Build-A-Package" data-picture="/Xquoticmas/assets/gallery/pic8.jpg" data-ordertotal="2000.00" >Customize Now</button>
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
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#drinksModal" data-title="Drinks Only Package" data-picture="/Xquoticmas/assets/gallery/pic1.jpg" data-ordertotal="2000.00" >Register Now</button>
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
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" data-title="T-Shirt &amp; Drinks Package" data-picture="/Xquoticmas/assets/gallery/pic2.jpg" data-ordertotal="2000.00" >Register Now</button>
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
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" data-title="Costume &amp; Drinks Package" data-picture="/Xquoticmas/assets/gallery/pic3.jpg" data-ordertotal="2000.00" >Register Now</button>
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
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" data-title="Basic T-Shirt Package" data-picture="/Xquoticmas/assets/gallery/pic4.jpg" data-ordertotal="2000.00" >Register Now</button>
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
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" data-title="Basic Costume Package" data-picture="/Xquoticmas/assets/gallery/pic5.jpg" data-ordertotal="2000.00" >Register Now</button>
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
				<br>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" data-title="Premium T-Shirt Package" data-picture="/Xquoticmas/assets/gallery/pic6.jpg" data-ordertotal="2000.00" >Register Now</button>
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
				<br>
	    		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" data-title="Premium Costume Package" data-picture="/Xquoticmas/assets/gallery/pic7.jpg" data-ordertotal="2000.00" >Register Now</button>
	  		</div>
		</div>


<!-- Modal -->
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
		      <div class="col-md-7 ml-auto" style="margin: 1px 3px;"><input type="text" style="font-size: 1.2em; font-family: Baskerville; color: #000000; border: none; display: inline;" id="ordertotal" name="ordertotal" value="ordertotal" readonly></input></div>
		    </div>
			<div class="container my-container">
			  <form action="registeruser.php" method="POST" enctype="multipart/form-data">
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
			          <option selected>Gender...</option>
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
			        <input type="number" class="form-control" id="quantity" name="quantity"  min="1" max="25" placeholder="Quantity" required>
			      </div>
			    </div>
			    <label for="inputState"></label>
			    <select id="inputState" class="form-control" id="package" name="package" required>
			          <option selected>Drinks Only</option>
			     </select>
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
	  var button = $(event.relatedTarget)
	  var recipienttitle = button.data('title')
	  var recipientpicture = button.data('picture')
	  var recipientprice = button.data('ordertotal')
	  var modal = $(this)
	  modal.find('.modal-title').text(recipienttitle)
	  modal.find('.modal-body #pic').val(recipientpicture)
	  modal.find('.modal-body #ordertotal').val(recipientprice)
	  //Now change immage src using jquery
	  $('#pic').attr('src',recipientpicture)
	  $.post('registeruser.php', 'ordertotal=' + $(this).val(recipientprice), function (response) {
      alert(response);});
	})
</script>