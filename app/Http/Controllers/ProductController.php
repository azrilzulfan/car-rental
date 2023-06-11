<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $cars = Car::latest()->paginate(5);
        return view('user.index', compact('cars'));
    }

    public function show($id): View
    {
        $car = Car::findOrFail($id);
        return view('user.sewa', compact('car'));
    }
}
