<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BandingkanController extends Controller
{
    public function index(){
        return view('page.bandingkan');
    }
}
