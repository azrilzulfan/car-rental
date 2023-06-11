@extends('layouts.Layout')
@section('Content')

{{-- Hero --}}
<section>
    <div class="w-3/4 mx-auto mt-40">
        <div class="container flex justify-evenly">
            <div class="w-1/2">
                <div class="text-4xl font-semibold text-slate-900">Berbagai Unit Mobil Terbaru</div>
                <div class="text-4xl font-semibold text-slate-900">Tersedia Untuk Anda</div>
                <div>
                    <a href="https://github.com/azrilzulfan" type="submit" target="_blank" class="bg-teal-500 text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="w-1/2">
                <img src="/img/test.png" alt="" width="px">
            </div>
        </div>
    </div>
</section>

{{-- Unit Mobil --}}
<section id="mobil">
    <div class="w-3/4 mx-auto mt-40 mb-40">
        <div class="text-base font-medium text-teal-500 text-center">Pilihan Unit Mobil</div>
        <div class="text-2xl font-medium text-slate-900 text-center">Unit Mobil Terbaru yang Tersedia</div>
        <div class="mt-20 grid grid-cols-3 gap-5">
            @foreach ($cars as $car)
            <div class="w-[350px] rounded-md overflow-hidden shadow-xl drop-shadow-xl">
                <img class="border-b-2 w-full h-[200px]" src="{{ asset('storage/img/'.$car->image) }}">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl text-slate-900 mb-2">{{ $car->name }}</div>
                  <p class="text-slate-900 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </p>
                  <div class="text-end font-bold text-teal-500">Harga: Rp. {{ $car->price }}<span class="text-slate-400">/Hari</span></div>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href='{{ route('sewa.show', $car->id) }}' type="submit" class="bg-teal-500 text-center text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">
                        Sewa
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
