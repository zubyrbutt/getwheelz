<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarVerificationController extends Controller
{
    public function carVerification()
    {
        return view('verification.car');
    }
    public function license()
    {
        return view('verification.license');
    }
}
