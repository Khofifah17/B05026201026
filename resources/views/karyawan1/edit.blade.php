@extends('layout.ceria')
@section('title', 'DATA KARYAWAN')
@section('isikonten')
@section('judulhalaman', 'EDIT MOUSE')
<head>
	<title>DATA KARYAWAN</title>
</head>
<body>


	<h3>Edit Karyawan</h3>

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="NIP" value="{{ $k->NIP }}"> <br/>
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="nama" class="col-md-2 col-sm-4 control-label">Nama</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-2" id="nama">
                    <input types="text" class="form-control" name="nama" required="required" value="{{$k->Nama}}">
                </div>
            </div>

            <div class="container mt-4">
                <div class="row mt-4">
                    <label for="pangkat" class="col-md-2 col-sm-4 control-label">Pangkat</label>
                    <div class="col-1">:</div>
                    <div class="col-md-3 col-sm-2" id="pangkat">
                        <input types="text" class="form-control" name="pangkat" required="required" value="{{$k->Pangkat}}">
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row mt-4">
                        <label for="gaji" class="col-md-2 col-sm-4 control-label">Gaji</label>
                        <div class="col-1">:</div>
                        <div class="col-md-3 col-sm-2" id="gaji">
                            <input types="number" class="form-control" name="gaji" required="required" value="{{$k->Gaji}}">
                        </div>
                    </div>
                </div>
            </div>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
@endsection
