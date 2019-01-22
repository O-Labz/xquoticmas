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
      <div class="form-group col-md-12">
        <label for="inputCity"></label>
        <textarea type="text" rows="4" cols="50" class="form-control" placeholder="Enter your comments here....." required></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>