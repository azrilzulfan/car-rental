@extends('layouts.Layout')
@section('Content')

{{-- Pesanan --}}
<section>
    <div class="container w-full mx-auto mt-20 mb-20">
        <div class="w-1/2 mx-auto mt-20 grid grid-cols-2 gap-5">
            @foreach ($order as $order)
            <div class="w-[350px] rounded-md overflow-hidden shadow-xl drop-shadow-xl">
                <div class="flex justify-between py-4 px-6">
                    <div class="text-slate-400 font-semibold mr-[100px]">{{ $order->product_name }}</div>
                    <div class="text-slate-900 font-bold">Rp. {{ $order->product_price }} /Hari</div>
                </div>
                <div class="mt-5 border-b-2"></div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Nama :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->name }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Email :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->email }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">No Telp :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->phone }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Alamat :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->address }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Waktu Sewa :</div>
                    <div class="text-xl font-medium text-slate-900">{{ $order->qty }} Hari</div>
                </div>
                <div class="mt-5 border-b-2"></div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-bold text-slate-900">Total Harga :</div>
                    <div class="text-xl font-bold text-slate-900">Rp. {{ $order->total_price }}</div>
                </div>
                <div class="flex justify-between py-4 px-6">
                    <div class="text-xl font-semibold text-slate-400">Status :</div>
                    <div class="text-xl font-semibold text-slate-900">{{ $order->status }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
