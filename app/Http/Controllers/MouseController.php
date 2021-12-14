<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MouseController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mouse
    	//$absen = DB::table('absen')->get();
        $mouse = DB::table('mouse')->paginate(2);

    	// mengirim data mouse ke view index
    	return view('mouse.index',['mouse' => $mouse]);

    }
    // method untuk menampilkan view form tambah mouse
public function tambah()
{

	// memanggil view tambah
    $mouse = DB::table('mouse')->get();

	return view('mouse.tambah', ['mouse' => $mouse]);

}
// method untuk insert data ke table mouse
public function store(Request $request)
    {
        //DB::table()->insert();
        // insert data ke table mouse
        DB::table('mouse')->insert([
            'merkmouse' => $request->merkmouse,
            'stockmouse' => $request->stockmouse,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman mouse
        return redirect('/mouse');
    }
    // method untuk edit data mouse
public function edit($kodemouse)
{
	// mengambil data mouse berdasarkan id yang dipilih
	$mouse = DB::table('mouse')->where('kodemouse',$kodemouse)->get();

    //$pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

    //$judul = "Haloo Apa Kabar" ;

	// passing data mouse yang didapat ke view edit.blade.php
	return view('mouse.edit',['mouse' => $mouse]);

}

public function view($kodemouse)
{
	// mengambil data mouse berdasarkan id yang dipilih
	$mouse = DB::table('mouse')->where('kodemouse',$kodemouse)->get();

    //$pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

    //$judul = "Haloo Apa Kabar" ;

	// passing data mouse yang didapat ke view edit.blade.php
	return view('mouse.detail',['mouse' => $mouse]);

}
// update data mouse
public function update(Request $request)
{
	// update data mouse
	DB::table('mouse')->where('kodemouse',$request->kodemouse)->update([
            'merkmouse' => $request->merkmouse,
            'stockmouse' => $request->stockmouse,
            'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman mouse
	return redirect('/mouse');
}
// method untuk hapus data mouse
public function hapus($kodemouse)
{
	// menghapus data mouse berdasarkan id yang dipilih
	DB::table('mouse')->where('kodemouse',$kodemouse)->delete();

	// alihkan halaman ke halaman mouse
	return redirect('/mouse');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mouse = DB::table('mouse')
		->where('merkmouse','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('mouse.index',['mouse' => $mouse]);

	}
}

