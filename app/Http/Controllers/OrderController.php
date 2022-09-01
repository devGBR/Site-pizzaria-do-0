<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sabores;

class OrderController extends Controller
{
    public function order(){

        $sabores= sabores::all();

        return view('orderonline')->withSabores($sabores);
        
    }
}
