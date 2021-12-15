@extends('layout.ceria')

@section('title', 'DATA KARYAWAN')

@section('isikonten')

@section('judulhalaman', 'DATA KARYAWAN')


	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="nama" class="col-md-2 col-sm-4 control-label">Nama</label>
                <div class="col-1">:</div>
                <div class="col-md-3 col-sm-2" id="nama">
                    <input types="text" class="form-control" name="nama" required="required">
                </div>
            </div>


                <div class="row mt-4">
                    <label for="pangkat" class="col-md-2 col-sm-4 control-label">Pangkat</label>
                    <div class="col-1">:</div>
                    <div class="col-md-3 col-sm-2" id="pangkat">
                        <input types="text" class="form-control" name="pangkat" required="required">
                    </div>
                </div>


                    <div class="row mt-4">
                        <label for="gaji" class="col-md-2 col-sm-4 control-label">Gaji</label>
                        <div class="col-1">:</div>
                        <div class="col-md-3 col-sm-2" id="gaji">
                            <input types="number" class="form-control" name="gaji" required="required" >
                        </div>
                    </div>

            <div class="container mt-4">
                <input type="submit" value="Simpan Data">
            </div>
        </div>


	</form>

@endsection

