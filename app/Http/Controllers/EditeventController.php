<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EditeventController extends Controller
{
    public function index(){
        return view('page.editevent');
    }
}
