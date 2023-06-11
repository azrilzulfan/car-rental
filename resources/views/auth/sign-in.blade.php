@extends('layouts.LayoutAuth')
@section('Content')

<div class="container w-1/2 mx-auto mt-32">
    <div class="text-3xl font-bold text-slate-900 text-center">
        USER SIGN IN
    </div>
    <div class="mt-10">
        <form action="">
            <div>
                <div>
                    <label for="" class="text-base text-slate-900 font-semibold">Nama</label>
                    <input class="w-full bg-slate-200 py-2 px-4" id="" type="text">
                </div>
                <div>
                    <label for="" class="text-base text-slate-900 font-semibold">Email</label>
                    <input class="w-full bg-slate-200 py-2 px-4" id="" type="email">
                </div>
            </div>
            <div class="flex justify-between my-5">
                <div class="text-base font-semibold text-slate-900">
                    Belum Punya Akun ?
                </div>
                <a href="/sign-up" class="text-base font-semibold text-slate-900 hover:text-teal-500">
                    Sign Up
                </a>
            </div>
            {{-- Ini Buat Tes Nanti Ubah Jadi Button Kalau Udah Bikin Session Login --}}
            <a href='/'" type="submit" class="bg-teal-500 text-white text-center font-semibold w-full py-2 px-4 mt-4 rounded-md">
                User
            </a>
            <a href='/admin'" type="submit" class="bg-teal-500 text-white text-center font-semibold w-full py-2 px-4 mt-4 rounded-md">
                Admin
            </a>
        </form>
    </div>
</div>

@endsection
