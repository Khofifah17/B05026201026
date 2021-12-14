@extends('layout.ceria')
@section('isikonten')
@section('title','Mouse')

    <head>
        <!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          </head>
        </html>
    </head>

    <div class="container my-5">

        <h3>Data Mouse</h3>

        <a href="/mouse/tambah" class=" btn btn-success btn-sm" > + Tambah Data Mouse Baru</a>

        <br/>
        <br/>
        <div class="container" align="center">
                <p>Cari Merk Mouse :</p>
            <form action="/pegawai/cari" method="GET">
                <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                <input class="form-control btn-success" type="submit" value="CARI">
            </form>
        </div>

        <table class="table table-hover mt-3">
            <tr class="table-info">
                <th>Kode Mouse</th>
                <th>Merk Mouse</th>
                <th>Stock Mouse</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            @foreach($mouse as $s)
            <tr >
                <td>{{ $s->kodemouse }}</td>
                <td>{{ $s->merkmouse }}</td>
                <td>{{ $s->stockmouse }}</td>
                <td>{{ $s->tersedia }}</td>
                <td>
                    <a href="/mouse/edit/{{ $s->kodemouse }}" >Edit</a>
                    |
                    <a href="/mouse/hapus/{{ $s->kodemouse }}" >Hapus</a>
                    |
                    <a href="/mouse/detail/{{ $s->kodemouse }}" >View Detail</a>

                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

{{ $mouse->links() }}

@endsection
