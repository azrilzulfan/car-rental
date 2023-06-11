<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cars = Car::latest()->paginate(5);
        return view('admin.mobil', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/img', $image->getClientOriginalName());
        }

        Car::create([
            'image'     => $image->getClientOriginalName(),
            'name'     => $request->name,
            'price'   => $request->price
        ]);

        return redirect()->route('mobil.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $car = Car::findOrFail($id);
        return view('admin.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'name'     => 'required|min:5',
            'price'   => 'required|min:10'
        ]);

        $car = Car::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/img', $image->getClientOriginalName());

            Storage::delete('public/img/'.$car->image);

            $car->update([
                'image'     => $image->getClientOriginalName(),
                'name'     => $request->name,
                'price'   => $request->price
            ]);
        } else {

            $car->update([
                'name'     => $request->name,
                'price'   => $request->price
            ]);
        }

        dd($request->all());
        return redirect()->route('mobil.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        $car->delete();
        return redirect()->route('mobil.index')->with('success', 'Data Berhasil Dihapus');
    }
}
