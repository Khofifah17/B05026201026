<html lang="en">
<head>
  <title>Form Pendaftaran Kuota Internet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  body{
    background-color: white;
    background-repeat: no-repeat;
    background-size: cover;
  }
  label {
    float: right;
    width: 250px;
    text-align-last: justify;
    padding: 0 1.5em 0 0;
    text-align: right;
    padding-left: 80px;
  }
  form {
    padding: 1em;
    background: white;
    border: 2px solid black;
    margin-top: 2rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 100px;
    }
    h4 {
        padding-top: 40px;
        padding-bottom: 30px;
    }
    #button1 {
        background-color: rgb(44, 23, 240);
        border-color: rgb(44, 23, 240);

    }
    #button2 {
        background-color: rgb(57, 241, 57);
        border-color: rgb(57, 241, 57);
    }



  </style>
</head>
<body>
<div class="container">

  <form action="https://www.google.com" class="needs-validation" novalidate >
    <p>
    Nur Khofifah
    <br>
    Khofifah
    <br>
    5026201026
    </p>
    <center><h4>Form Pendaftaran Kuota Internet</h4></center>
    <div class="form-group row">
        <label for="name" >Nama Mahasiswa : </label>
        <input type="text" class="col-sm-6 col-form-control" id="name" name="name" pattern="[A-Za-z].{1,}" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group row">
        <label for="code" >NRP Mahasiswa : </label>
        <input type="code" class="col-sm-6 col-form-control" id="code" name="code" pattern="[0-9].{9,9}" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group row">
        <label for="jurusan">Jurusan : </label>
        <select name="jurusan" class="col-sm-6 col-form-control" required>
          <option selected > </option>
          <option value="si">Sistem Informasi</option>
          <option value="elc">Elektro</option>
          <option value="inf">Informatika</option>
        </select>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group row">
        <label for="code" >Nomor Handphone : </label>
        <input type="code" class="col-sm-6 col-form-control" id="code" name="code" pattern="[0-9].{9,}" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <center><div class= "button1">
        <button id="button1" type="submit" class="col-sm-3  btn-primary">Kirim</button>
        <button id="button2" type="reset" class="col-sm-3 btn-primary">Reset</button>
      </div> </center>

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

</body>
</html>
