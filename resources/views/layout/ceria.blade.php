<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <style>
        .header {
            background-color: #666;
            padding: 50px;
            text-align: right;
            font-size: 50px;
            color: rgb(237, 243, 250)
            width: 200px;

        }
        header {
            text-align: right;
            font-size: 12px;


        }

        .body{
            margin-top: 30px;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 30px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 50px;

        }


        .footer {
            text-align: right;
        }

        .sidebar {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #68a9f3;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidebar a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 20px;
          color:black;
          display: block;
          transition: 0.3s;
        }

        .sidebar a:hover {
          color:whitesmoke;
        }

        .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 100px;
          font-size: 14px;

          text-align: center;

        }

        .openbtn {
          font-size: 12px;
          cursor: pointer;
          background-color: rgba(29, 109, 184, 0.993);
          color: rgb(237, 243, 250);
          padding: 10px 15px;
          border: none;
        }

        .openbtn:hover {
          background-color: #68a9f3;
        }

        #main {
          transition: margin-left .2s;
          padding: 32px;
          height: 680px;
          background-color: rgb(237, 243, 250);

        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
    </style>
</head>
<body>

    <header>
        <br>
        <br>
        <div class="col-sm-3">
            <br>
            <center><button class="openbtn" onclick="openNav()">☰ My Course</button></center>
        </div>
        <div class="col-sm-3">
            <br>

        </div>

        <div class="col-sm-3">
            <br>

        </div>

        <div class="col-sm-3">
            <div class="col-sm-6">
                <br>
                <h4>
                Nur Khofifah <br>
                </h4>
                (5026201026)
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </header>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            <img src="/gambar/Foto.png" class="rounded-circle" width="85" height="85">
            <br>
            Nur Khofifah
            <br>
            (5026201026) </a>
            <br>
            <br>
            <br>
            <br>
            <br>

        <hr>
        <a href="/pegawai">Pegawai</a>
        <a href="/absen">Absen</a>
        <a href="/mutasi">Mutasi</a>
        <a href="/mouse">Mouse</a>
        <a href="/eas">EAS</a>
    </div>

    <div class="container">

    <div id="main">
        <h2>@yield('judulhalaman')</h2>

        @section('isikonten')
        @show
    </div>

    <footer>
        <h4>&copy; Nur Khofifah - 5026201026</h4>
    </footer>

    <script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    </script>

    </div>

</body>
</html>
