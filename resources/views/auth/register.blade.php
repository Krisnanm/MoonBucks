<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400&family=Gurajada&family=Kaushan+Script&family=Noto+Sans:wght@400;700&family=Poppins&family=Trade+Winds&display=swap" rel="stylesheet">

</head>

<body>
    <header class="bg-cyan-600">
        <nav class="flex justify-between items-center">

            <!-- Navbar Kiri -->
            <div class="flex items-center ml-5">
                <a href="{{ route('info.show') }}"><img class="mr-2 ml-5 h-10 my-3" src="{{ asset('images/MoonBucks.png') }}" alt="logo"></a>
            </div>
        </nav>
    </header>

    <div class="container flex justify-center my-[80px]">
        <div class="bg-cyan-600 w-[400px] p-6 rounded-lg">
            <h1 class="text-xl font-display text-white mb-4 flex justify-center">Moonbucks</h1>

            @if(Session::has('success'))
            <div class="p-2 mb-4 text-sm text-green-800 rounded bg-green-50 border border-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Nama">
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="phone_number" id="phone_number" type="tel" placeholder="Nomor Telepon">
                </div>
                <div class="mb-3">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="Password">
                </div>
                <div class="flex justify-center">
                    <button class="bg-cyan-500 hover:bg-cyan-700 text-white w-full font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        REGISTER
                    </button>
                </div>
                <p class="text-white text-sm">Sudah mempunyai akun? Silahkan <a class="" href="{{ route('login') }}">Login</a></p>
            </form>
        </div>
    </div>

</body>

</html>