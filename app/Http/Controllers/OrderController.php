<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $carId = $request->input('product_id');
        $car = Car::findOrFail($carId);
        $price = $car->price;

        $order = new Order;
        $order->product_id = $carId;
        $order->product_price = $price;

        $request->request->add(['total_price' => $request->qty * $price, 'status' => 'Unpaid']);
        $order = Order::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('user.checkout', compact('snapToken','order'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = ('sha512, $request->order_id.$request->status_code.$request->gross_amount.$serverKey');
        if($hashed == $request->signature_key)
        {
            if($request->transaction_status === 'capture')
            {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('user.invoice', compact('order'));
    }

    public function pesanan()
    {
        $order = Order::latest()->paginate(5);
        return view('user.pesanan', compact('order'));
    }

    public function admin()
    {
        $order = Order::latest()->paginate(5);
        return view('admin.sewa', compact('order'));
    }
}
