<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    public function index(){
        return view('layouts.master');
    }



    public function profile(){

        return view('user.profile');
    }
}
