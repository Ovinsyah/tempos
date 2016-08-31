<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Berita1Controller extends Controller
{
    public function index(){
        return view('page.berita1');
    }
}
