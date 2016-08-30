<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddeventController extends Controller
{
    public function index(){
        return view('page.addevent');
    }
}
