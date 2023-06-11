<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Car Rental</title>
</head>
<body>
    <div class="container bg-white w-[60%] mx-auto mt-[100px] flex">
        <div class="w-1/2">
            <img src="/img/test3.jpg">
        </div>
        <div class="bg-white w-1/2">
            @yield('Content')
        </div>
    </div>
    <style>
        body {
            background-color: #0f172a;
        }
    </style>
</body>
</html>
