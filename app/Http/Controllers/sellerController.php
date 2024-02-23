<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellerController extends Controller
{
    //
    public function sellerIndex(){
        return " productos que vendo";
    }
    public function addsell(){
        return "añadir productos";
    }
}
