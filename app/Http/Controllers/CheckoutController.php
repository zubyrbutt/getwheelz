<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkOut(){
        if(Auth::check())
        {
            return view('cart.shipping-info');
        }
        else{
            return redirect('login');
        }
    }

    public function shipping(){
        return view('cart.shipping-info');
    }

    public function payment(){

        return view('cart.payment');
    }


    public function storePayment(Request $request){

        
        \Stripe\Stripe::setApiKey('sk_test_AjcN7rc1dh8HkKjMHslsccTg00kPVNNFUE');
       
        
        $charge = \Stripe\Charge::create([
            'amount' => \Cart::getTotal(),
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'receipt_email' => 'jenny.rosen@example.com',
        ]);
dd($charge);
    }

}
