
<?php

  $trigger = $_GET['page'];
  if ($trigger  == 'contactdone') {
    # code...
    echo '<script type="text/javascript">';
    echo 'swal("Thank You!", "We will get back to you shortly!", "success")';
    echo '</script>';
  }
?>

<style type="text/css">
  .container{
    width: 55%;
    position: relative;
    left: 0;
    right: 0;
    margin: auto; 
    padding-left: 2em;
  }
.background{
  position:fixed;
  top:0;
  bottom:0;
  left:0;
  right:0;
  z-index: -1;
  object-fit: fill;
}

</style>


<div >
  <img class="background" src="/Xquoticmas/assets/feathers.png">
<div class="container my-container">
  <form action="sendcomment.php" method="POST" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="First name" id="firstname" name="firstname"required>
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
      <div class="form-group col-md-12">
        <label for="inputCity"></label>
        <textarea type="text" rows="4" cols="50" class="form-control" placeholder="Enter your comments here....." id="comments" name="comments" required></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>