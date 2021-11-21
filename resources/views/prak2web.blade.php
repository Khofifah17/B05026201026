<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    body{
    background-color: rgb(217, 235, 245);
    background-image: url("2a07b91dd6947887721af13638aa0da1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  label {
    float: right;
    width: 250px;
    padding: 0 100px 0 0;
    text-align: right;
    padding-left: 50px;
  }
  form {
    padding: 1em;
    background: #e2f1f8;
    border: 5px double #1f4b9e;
    margin-top: 2rem;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    padding: 1em;
    }
</style>

</head>

<body>
<div class = "container">
    <form action="https://www.google.com" class="needs-validation" novalidate >
        <h3>Registration Form</h3>
        <div class="form-group row">
          <label for="uid" >User id:</label>
          <input type="text" class="col-sm-6 col-form-control" id="uid" placeholder="Required and must be of length 5 to 12" name="uid" required >
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="pwd" >Password:</label>
          <input type="password" class="col-sm-6 col-form-control" id="pwd" placeholder="Required and must be of length 7 to 12" name="pswd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="name" >Name:</label>
          <input type="text" class="col-sm-6 col-form-control" id="name" placeholder="Required and alphabates only" name="uid" pattern="[A-Za-z].{2,}" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="uid" >Address:</label>
          <input type="text" class="col-sm-6 col-form-control" id="uid" placeholder="Optional" name="uid" >
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="country">Country:</label>
          <select name="country" class="col-sm-6 col-form-control" required>
            <option selected >(Please select a country)</option>
            <option value="ind">Indonesia</option>
            <option value="kor">Korea</option>
            <option value="chi">China</option>
          </select>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="code" >ZIP Code:</label>
          <input type="code" class="col-sm-6 col-form-control" id="code" placeholder="Required. Must be numeric only" name="code" pattern="[0-9].{5,}" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="email" class="custom-control">Email:</label>
          <input type="email" class="col-sm-6 col-form-control" id="email" placeholder="Required. Must be a valid email" name="email" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="sex" class="custom-control">Sex:</label>
          <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
              <input type="radio" class="form-check-input" id="radio2" name="optradio" value="male">Male
            </label>
          </div>
          <div class="form-check-inline">
            <label class="custom-control" for="radio2">
              <input type="radio" class="form-check-input" id="radio2" name="optradio" value="female">Female
            </label>
          </div>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="lng" class="custom-control">Language:</label>
          <div class="form-check-inline">
            <label class="form-check-label" for="check2">
              <input type="checkbox" class="form-check-input" id="check2" name="vehicle2" value="something">English
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="check2">
              <input type="checkbox" class="form-check-input" id="check2" name="vehicle2" value="something">Non English
            </label>
          </div>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group row">
          <label for="abt" class="mb-2 mr-sm-2">About:</label>
          <textarea rows="6" cols="59" placeholder="Optional" name="comment" form="usrform"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

<script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

</div>
</body>

