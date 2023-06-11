@extends('layouts.LayoutAdmin')
@section('Content')

<div class="w-[100px] ml-[350px] mt-10">
    <div class="relative w-[1145px]">
        <div class="mb-5">
            <div class="text-3xl font-bold mt-10 mb-5">Daftar Sewa Mobil</div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 table-fixed">
            <thead class="text-xs text-slate-900 uppercase bg-white border-y-2 ">
                <tr>
                    <th scope="col" class="px-6 py-3 border-r-2">
                        ID Sewa
                    </th>
                    <th scope="col" class="px-6 py-3 w-[150px] border-r-2">
                        Foto Mobil
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Mobil
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga Sewa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Telp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Sewa /Hari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $sewa)
                <tr class="bg-white border-b-2">
                    <th scope="row" class="px-6 py-4 border-r-2">
                        {{ $sewa->id }}
                    </th>
                    <th scope="row" class="px-6 py-4 border-r-2">
                        <img src="{{ asset('storage/img/'.$sewa->product_image) }}" width="100px">
                    </th>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->product_name }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->product_price }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->name }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->email }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->phone }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->address }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->qty }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->total_price }}
                    </td>
                    <td class="px-6 py-4 text-teal-500 font-semibold">
                        {{ $sewa->status }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
