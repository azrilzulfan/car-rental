@extends('layouts.LayoutAdmin')
@section('Content')

<div class="w-[100px] ml-[350px] mt-10">
    <div class="container w-[1145px]">
        <div class="container w-3/4 mx-auto mt-20">
            <div class="text-3xl font-bold mb-10">Edit Data</div>
            <form action="{{ route('mobil.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div>
                        <label for="" class="text-base text-slate-900 font-semibold">Foto Mobil</label>
                        <input class="w-full bg-slate-200 py-2 px-4" id="image" type="file" name="image">
                    </div>
                    <div>
                        <label for="" class="text-base text-slate-900 font-semibold">Nama Mobil</label>
                        <input class="w-full bg-slate-200 py-2 px-4" id="name" type="text" name="name" value="{{ old('name', $car->name) }}" required>
                    </div>
                    <div>
                        <label for="" class="text-base text-slate-900 font-semibold">Harga Sewa</label>
                        <input class="w-full bg-slate-200 py-2 px-4" id="price" type="text" name="price" value="{{ old('price', $car->price) }}" required>
                    </div>
                </div>
                <button type="submit" class="bg-teal-500 text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">
                    Ubah
                </button>
                <button type="reset" class="bg-red-500 text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">
                    Ulang
                </button>
                <a type="submit" href="/admin/mobil" class="bg-slate-900 text-white font-semibold text-center w-36 py-2 px-4 mt-4 rounded-md">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>

@endsection
