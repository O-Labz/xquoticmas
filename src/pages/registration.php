<div class="container my-container">
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="First name" required>
      </div>
      <div class="form-group col-md-6">
        <input type="text" class="form-control" placeholder="Last name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress"></label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group">
      <label for="inputAddress2"></label>
      <input type="tel" class="form-control" id="inputAddress2" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" placeholder="Contact Number: 876 888 8888" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity"></label>
        <input type="text" class="form-control" placeholder="Nationality" required>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState"></label>
        <select id="inputState" class="form-control" required>
          <option selected>Gender...</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip"></label>
        <input type="number" class="form-control" name="quantity" min="18" max="75" placeholder="Age" required>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">
          I agree that all information entered here is correct.
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>