@extends('layouts.LayoutAdmin')
@section('Content')

<div class="w-[100px] ml-[350px] mt-10">
    <div class="relative w-[1145px]">
        <div class="mb-5">
            <div class="text-3xl font-bold mt-10 mb-5">Daftar Unit Mobil</div>
            <a href="{{ route('mobil.create') }}" class="bg-teal-500 text-center text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">Tambah Data</a>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-slate-900 uppercase bg-white border-y-2 ">
                <tr>
                    <th scope="col" class="px-6 py-3 w-[250px] border-r-2">
                        Foto Mobil
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Mobil
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga Sewa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Opsi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                <tr class="bg-white border-b-2">
                    <th scope="row" class="px-6 py-4 border-r-2">
                        <img src="{{ asset('storage/img/'.$car->image) }}" width="200px">
                    </th>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $car->name }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $car->price }}
                    </td>
                    <td class="px-6 py-4">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mobil.destroy', $car->id) }}" method="POST">
                            <a href="{{ route('mobil.edit', $car->id) }}" type="submit" class="bg-teal-500 text-center text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-center text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
