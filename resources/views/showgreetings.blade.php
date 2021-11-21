<html lang="en">
<head>
  <title>Pendataan Pajak Penghasilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body{
        background-color: rgb(245, 213, 153);

    }
    form {
        padding: 1em;
        background: white;
        border: 2px solid black;
        margin-top: 2rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 100px;

    }
    .container {
        align-items:center;
        justify-content: center;
        padding: 30px;
    }

    label {
        float: right;
        width: 250px;
        text-align-last: justify;
        padding: 0 1.5em 0 0;
        text-align: right;
        padding-left: 110px;
    }
  </style>
  </head>

  <body>
    <div class="container">
        <form action="pajak" method="post">
            @csrf
            <center><h4>Pendataan Pajak Penghasilan</h4><br></center>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Nama :</label>
                </div>
                <div class="col-5">
                    <input name="namauser" class="nama" type="text" size="50" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Jenis kelamin :</label>
                </div>
                <div class="col-5">
                    <select class="jeniskelamin" name="jeniskelaminuser">
                        <option value="">Pilih jenis kelamin</option>
                        <option value="l">Laki - laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Pekerjaan :</label>
                </div>
                <div class="col-5">
                    <input name="pekerjaanuser" class="pekerjaan" type="text" size="50" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Penghasilan :</label>
                </div>
                <div class="col-5">
                    <input name="penghasilanuser" class="penghasilan" type="number" required>
                </div>
            </div>
            <br>
            <div class="button mt-3 text-center">
                    <button class="btn-primary submit mr-3" type="submit">Submit</button>
                    <button class="btn-danger reset" type="reset">Reset</button>
            </div>
        </form>
    </body>
</html>
