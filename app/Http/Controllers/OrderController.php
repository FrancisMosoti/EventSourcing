<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Events\OrderShipped;
use App\Events\PaymentProcessed;
use App\Events\OrderCreated;
use App\Models\Order;



class OrderController extends Controller
{
    public function home(){
        return view('history');
    }
    public function createOrder(Request $request)
    {
        
        $order = Order::create([
            'state' => 'created' 
        ]);

       
        event(new OrderCreated($order->id, ['product' => 'Laptop', 'quantity' => 1]));

        // return redirect()->back()->with('success', );

        return response()->json([
            'message' => 'Order created successfully!',
            'order' => $order
        ]);
    }

    public function processPayment($orderId)
    {
        $order = Order::findOrFail($orderId);

        
        event(new PaymentProcessed($order->id));

        return response()->json([
            'message' => 'Payment processed successfully!',
            'order' => $order
        ]);
    }

    public function shipOrder($orderId)
    {
        $order = Order::findOrFail($orderId);

       
        event(new OrderShipped($order->id));

        return response()->json([
            'message' => 'Order shipped successfully!',
            'order' => $order
        ]);
    }

    public function showOrderHistory($orderId)
    {
        $order = Order::findOrFail($orderId);
        $history = $order->getOrderHistory();

        return response()->json([
            'history' => $history
        ]);
    }
}