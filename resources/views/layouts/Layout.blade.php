<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    @vite('resources/css/app.css')
    <title>Car Rental</title>
</head>
<body>
    {{-- Navbar --}}
    <nav>
        <div class="container w-3/4 flex justify-between mx-auto my-10">
            <div class="text-2xl font-bold text-teal-500">Car Rental</div>
            <div class="flex gap-5">
                <a href="/" class="text-xl font-bold text-teal-500">Beranda</a>
                <a href="/#mobil" class="text-xl font-bold text-teal-500">Pilihan Mobil</a>
                <a href="/pesanan" class="text-xl font-bold text-teal-500">Daftar Pesanan</a>
                <a href="/sign-in" class="bg-slate-900 text-center text-white font-semibold w-36 py-2 px-4 rounded-md">Sign In</a>
            </div>
        </div>
    </nav>
    <div>
        @yield('Content')
    </div>
</body>
</html>
