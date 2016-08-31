<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Event1Controller extends Controller
{
    public function index(){
        return view('page.event1');
    }
}
