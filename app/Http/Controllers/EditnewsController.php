<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EditnewsController extends Controller
{
    public function index(){
        return view('page.editnews');
    }
}
