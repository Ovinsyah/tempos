<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EditprestasiController extends Controller
{
    public function index(){
        return view('page.editprestasi');
    }
}
