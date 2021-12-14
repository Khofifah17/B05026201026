@extends('layout.ceria')
@section('isikonten')
@section('title','Absen')

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

        <h3>Data Pegawai</h3>

        <a href="/absen/tambah" class=" btn btn-success btn-sm" > + Tambah Absen Pegawai Baru</a>

        <br/>
        <br/>

        <table class="table table-hover mt-3">
            <tr class="table-info">
                <th>ID</th>
                <th>ID Pegawai</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
            @foreach($absen as $p)
            <tr >
                <td>{{ $p->ID }}</td>
                <td>{{ $p->IDPegawai }}</td>
                <td>{{ $p->Tanggal }}</td>
                <td>{{ $p->Status }}</td>
                <td>
                    <a href="/absen/edit/{{ $p->ID }}" >Edit</a>
                    |
                    <a href="/absen/hapus/{{ $p->ID }}" >Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

{{ $absen->links() }}

@endsection
