@extends('layout.ceria')

@section('title', 'DATA MOUSE')

@section('isikonten')

@section('judulhalaman', 'EDIT MOUSE')


	<a href="/mouse"> Kembali</a>

	<br/>
	<br/>

	@foreach($mouse as $s)
	<form action="/mouse/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodemouse" value="{{ $s->kodemouse }}"> <br/>
        Merk Mouse <input type="text" required="required" name="merkmouse" value="{{ $s->merkmouse }}"> <br/>
		Stock Mouse <input type="number" required="required" name="stockmouse" value="{{ $s->merkmouse }}"> <br/>
		Tersedia
        <input type="radio" id="ya" name="tersedia" value="Y" @if ($s->tersedia === "Y") checked="checked" @endif>
        <label for="ya">YA</label>
        <input type="radio" id="tidak" name="tersedia" value="T" @if ($s->tersedia === "T") checked="checked" @endif>
        <label for="tidak">TIDAK</label><br>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


    @endsection
