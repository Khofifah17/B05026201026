<html lang="en">
<head>
  <title>Pendataan Pajak Penghasilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h3>Anda Telah Mengisikan Data:</h3>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Nama :</label>
                </div>
                <div class="col-5">
                    <?php echo $_POST["namauser"] ; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Jenis kelamin :</label>
                </div>
                <div class="col-5">
                    <?php echo $_POST["jeniskelaminuser"] ; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Pekerjaan :</label>
                </div>
                <div class="col-5">
                    <?php echo $_POST["pekerjaanuser"] ; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <label>Pajak Penghasilan :</label>
                </div>
                <div class="col-5">
                    <?php
                    $penghasilan = $_POST["penghasilanuser"] ;
                    $a = 1500000;
                    $b = 2500000;
                    $c = 0.05 * ($penghasilan - $a);
                    $d = 0.05 * ($penghasilan - ($b - $a));
                    $d += 0.10 * ($penghasilan - $b);

                    if ($penghasilan <= $a){
                        echo "Pajak penghasilan anda 0";
                    }else if ($penghasilan <= $b){
                        echo "Pajak penghasilan anda ".$c;
                    }else {
                        echo "Pajak penghasilan anda ".$d;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
