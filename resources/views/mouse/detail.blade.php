@extends('layout.ceria')

@section('title', 'DETAIL DATA MOUSE')

@section('isikonten')

@section('judulhalaman', 'DETAIL DATA MOUSE')


	<a href="/mouse"> Kembali</a>

	<br/>
	<br/>

	@foreach($mouse as $s)

		{{ csrf_field() }}

        Merk Mouse <label class="col-md-2 col-sm-4 control-label">{{ $s->merkmouse }}</label> <br/>
		Stock Mouse <label class="col-md-2 col-sm-4 control-label">{{ $s->stockmouse }}</label>
		Tersedia

        <label for="ya">YA</label>

        <label for="tidak">TIDAK</label><br>

		<input type="submit" value="Simpan Data">

	@endforeach


    @endsection
