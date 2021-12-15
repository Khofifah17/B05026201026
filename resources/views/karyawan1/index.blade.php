@extends('layout.ceria')
@section('isikonten')
@section('title','Data Karyawan')


    <div class="container my-5">
        <h3> Data Karyawan </h3>

	    <a href="/karyawan1/tambah" class=" btn btn-success btn-sm"> + Tambah Karyawan Baru</a>

	    <br/>
	    <br/>

        <table class="table table-hover mt-3">
            <tr class="table-info">
                <th>Nama</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th>Opsi</th>
            </tr>
            @foreach($karyawan1 as $k)
            <tr>
                <td>{{ $k->Nama }}</td>
                <td>{{ $k->Pangkat }}</td>
                <td>{{ $k->Gaji }}</td>
                <td>
                    <a href="/karyawan1/edit/{{ $p->NIP }}">Edit</a>
                    |
                    <a href="/karyawan1/hapus/{{ $p->NIP }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

{{ $karyawan1->links() }}



@endsection
