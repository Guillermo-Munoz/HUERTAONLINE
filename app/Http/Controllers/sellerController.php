<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellerController extends Controller
{
    //
    public function sellerIndex(){
       // return " productos que vendo";
       return view('seller');
    }
    public function addsell(){
       // return "añadir productos";
       return view('showseller');
    }
}
