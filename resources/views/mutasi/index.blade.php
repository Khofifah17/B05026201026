<!DOCTYPE html>
<html>
@extends('layout.ceria')
@section('isikonten')
@section('title','Data Mutasi')


	<div class="container my-5">
        <h3>Data Mutasi</h3>

        <a href="/mutasi/tambah" class=" btn btn-success btn-sm">> + Tambah Mutasi Baru</a>

        <br/>
        <br/>

        <table class="table table-hover mt-3">
            <tr class="table-info">
                <th>ID Pegawai</th>
                <th>Departemen</th>
                <th>Sub Departemen</th>
                <th>Mulai Bertugas</th>
                <th>Opsi</th>
            </tr>
            @foreach($mutasi as $m)
            <tr>
                <td>{{ $m->IDPegawai }}</td>
                <td>{{ $m->Departemen }}</td>
                <td>{{ $m->SubDepartemen }}</td>
                <td>{{ $m->MulaiBertugas }}</td>
                <td>
                    <a href="/mutasi/edit/{{ $m->ID }}">Edit</a>
                    |
                    <a href="/mutasi/hapus/{{ $m->ID }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

{{ $mutasi->links() }}

@endsection
