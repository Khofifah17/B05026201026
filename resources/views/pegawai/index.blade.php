@extends('layout.ceria')
@section('isikonten')
@section('title','Data Pegawai')


    <div class="container my-5">
        <h3> Data Pegawai </h3>

	    <a href="/pegawai/tambah" class=" btn btn-success btn-sm"> + Tambah Pegawai Baru</a>

	    <br/>
	    <br/>

        <table class="table table-hover mt-3">
            <tr class="table-info">
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

{{ $pegawai->links() }}



@endsection
