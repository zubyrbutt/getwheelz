<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarFinanceController extends Controller
{
    public function finance(){
        return view('more\finance');
    }
}
