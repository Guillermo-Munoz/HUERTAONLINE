<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buyerController extends Controller
{
    //
    public function buyerIndex(){
        return "bienvenido a compras";
    }
    public function bought(){
        return "lista de productos comprados";
    }
    
  
    
}
