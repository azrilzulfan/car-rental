@extends('layouts.LayoutAdmin')
@section('Content')

<div class="w-[100px] ml-[350px] mt-10">
    <div class="w-[350px] rounded-md overflow-hidden shadow-xl drop-shadow-xl mb-10">
        <div class="px-6 py-4 border-b-2">
          <div class="font-bold text-xl text-slate-900 mb-2">Daftar Unit Mobil</div>
          <div class="font-bold text-xl text-slate-900 mb-2">Jumlah : <span class="text-teal-500">{{ $countCar }}</span></div>
        </div>
        <div class="px-6 pt-4 pb-2 mb-2 text-end">
            <a href='/admin/mobil' type="submit" class="bg-teal-500 text-center text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">
                Lihat
            </a>
        </div>
    </div>
    <div class="w-[350px] rounded-md overflow-hidden shadow-xl drop-shadow-xl">
        <div class="px-6 py-4 border-b-2">
          <div class="font-bold text-xl text-slate-900 mb-2">Daftar Sewa</div>
          <div class="font-bold text-xl text-slate-900 mb-2">Jumlah : <span class="text-teal-500">{{ $countOrder }}</span></div>
        </div>
        <div class="px-6 pt-4 pb-2 mb-2 text-end">
            <a href='/admin/sewa-admin' type="submit" class="bg-teal-500 text-center text-white font-semibold w-36 py-2 px-4 mt-4 rounded-md">
                Lihat
            </a>
        </div>
    </div>
</div>

@endsection
