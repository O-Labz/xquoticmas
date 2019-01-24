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
      <div class="form-group col-md-4">
        <label for="inputState"></label>
        <select id="inputState" class="form-control" id="gender" name="gender" required>
          <option selected>Gender...</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip"></label>
        <input type="number" class="form-control" id="age" name="age"  min="18" max="75" placeholder="Age" required>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">
          I agree that all information entered here about me is true and correct.
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>