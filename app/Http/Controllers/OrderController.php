<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function orders($type=''){
    if($type=='pending'){
        $orders=Order::where('delivered','0')->get();

    }elseif($type=='delivered'){
        $orders=Order::where('delivered','1')->get();

    }else{
        $orders=Order::all();
    }

    return view('dashboard.shop.orders')->with('orders', $orders);
   }

   public function toggleDeliver(Request $request, $orderId){

    $order=Order::find($orderId);
    if($request->has('delivered')){

        $order->delivered=$request->delivered;

    }else{

        $order->delivered="0";
    }
    
    $order->save();
    return redirect()->back();
       
   }
}
