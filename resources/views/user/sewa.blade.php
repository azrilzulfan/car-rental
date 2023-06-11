@extends('layouts.Layout')
@section('Content')

{{-- Form --}}
<section>
    <div class="w-3/4 mx-auto mt-40 flex justify-evenly">
        <div class="w-1/2 rounded-md overflow-hidden shadow-xl drop-shadow-xl">
            <img class="w-full border-b-2 h-[350px]" src="{{ asset('storage/img/'.$car->image) }}" alt="Sunset in the mountains">
        </div>
        <div>
            <form action="/checkout" method="POST">
                @csrf
                <div class="flex mb-2">
                    <div>
                        <input type="hidden" value="{{ $car->id }}" id="product_id" name="product_id">
                    </div>
                    <div>
                        <input type="hidden" value="{{ $car->image }}" id="product_image" name="product_image">
                    </div>
                    <div>
                        <input type="text" value="{{ $car->name }}" id="product_name" name="product_name" readonly class="font-bold text-2xl text-teal-500 mb-2 focus:outline-none">
                    </div>
                    <div>
                        <div class="mt-2 font-bold text-teal-500">
                            Harga: Rp. <input type="text" value="{{ $car->price }}" id="product_price" name="product_price" readonly class="font-bold text-teal-500 mb-2 w-[70px] focus:outline-none"><span class="text-slate-400">/Hari</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div>
                        <label for="name" class="text-base text-slate-900 font-semibold">Nama</label>
                        <input class="w-full bg-slate-200 py-2 px-4" id="name" name="name" type="text" autocomplete="off">
                    </div>
                    <div>
                        <label for="email" class="text-base text-slate-900 font-semibold">Email</label>
                        <input class="w-full bg-slate-200 py-2 px-4" id="email" name="email" type="email" autocomplete="off">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="phone" class="text-base text-slate-900 font-semibold">No Telp</label>
                        <input class="w-full bg-slate-200 py-2 px-4" id="phone" name="phone" type="text" autocomplete="off">
                    </div>
                    <div>
                        <label for="address" class="text-base text-slate-900 font-semibold">Alamat</label>
                        <textarea class="w-full bg-slate-200 py-2 px-4" id="address" name="address" type="text" autocomplete="off"></textarea>
                    </div>
                    <div>
                        <label for="qty" class="text-base text-slate-900 font-semibold">Waktu Sewa / Hari</label>
                        <input class="w-full bg-slate-200 py-2 px-4" id="qty" name="qty" type="number" value="1" autocomplete="off">
                    </div>
                </div>
                <button type="submit" class="bg-teal-500 text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">
                    Sewa
                </button>
                <a type="submit" href="/" class="bg-slate-900 text-white font-semibold text-center w-36 py-2 px-4 mt-4 rounded-md">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</section>

@endsection
