<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function count()
    {
        $countCar = Car::count();
        $countOrder = Order::count();
        return view('admin.index', compact('countCar','countOrder'));
    }
}
