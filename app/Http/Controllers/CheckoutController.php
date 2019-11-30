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

<<<<<<< HEAD
        $userId = Auth::user();
        $order = $userId->orders()->create([

            'total' => \Cart::getTotal(),
            'delivered' => 0

        ]);

        $cartItems = \Cart::getContent();

        foreach($cartItems as $cartItem){
            $order->shops()->attach($cartItem->id,[

                'qty' => $cartItem->quantity,
                'total' =>$cartItem->quantity*$cartItem->price
                 
            ]);
        }
=======
>>>>>>> 9e9fa048b7a198e1c7340746bbe023771a299fc6
    }

}
