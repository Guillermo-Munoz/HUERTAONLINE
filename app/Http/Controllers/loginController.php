<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        //return "bienvenido a la huerta online ......login";
        return view('index');
    }
}
