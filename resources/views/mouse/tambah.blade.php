@extends('layout.ceria')

@section('title', 'DATA MOUSE')

@section('isikonten')

@section('judulhalaman', 'DATA MOUSE')


	<a href="/mouse"> Kembali</a>

	<br/>
	<br/>

	<form action="/mouse/store" method="post">
		{{ csrf_field() }}
		Merk Mouse <input type="text" name="merkmouse" required="required"> <br/>
		Stock Mouse <input type="number" name="stockmouse" required="required"> <br/>
        Tersedia
        <input type="radio" id="ya" name="tersedia" value="Y">
        <label for="ya">YA</label><br>
        <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
        <label for="tidak">TIDAK</label><br>
        <input type="submit" value="Simpan Data">
	</form>

@endsection

