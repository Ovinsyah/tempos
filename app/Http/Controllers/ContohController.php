<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContohController extends Controller
{
    public function form () {
    	return view('contoh.form');
    }

    /* Seluruh isi dalam form disimpan kedalam $r */
    public function posting (Request $r) {

    	/* kalau mau akses masing masing object didalam $r
    	 * sesuai dengan field name yang ada di form
	    */

	    /*
    	echo $r->nama;
    	echo $r->judul;
    	echo $r->keterangan;
    	*/

    	/* Buat menghasilkan object JSON dari inputan

    	return response()->json($r);
    	*/

    	/* Buat ngirim isi form ke halaman lain
    	 * $r dimasukkan kedalam 'isi_data'
    	*/

    	return view('contoh.tampil', ['isi_data' => $r]);
    }
}
