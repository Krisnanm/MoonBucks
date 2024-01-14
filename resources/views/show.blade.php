<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Navbar -->
    <header class="bg-cyan-600">
        <nav class="flex justify-between items-center">

            <!-- Navbar Kiri -->
            <div class="hidden lg:flex items-center ml-5" id="navbar-left">
                <a href="{{ route('info.show') }}"><img class="mr-2 ml-5 h-10 my-3" src="{{ asset('images/MoonBucks.png') }}" alt="logo"></a>

                <ul class="text-base font-normal font-gurajada text-white flex space-x-4 ml-2 lg:flex">
                    <li>
                        <a href="{{ route('show', 'coffee') }}" @if($categorySlug==='coffee' )class="underline" @endif>Coffee</a>
                    </li>
                    <li>
                        <a href="{{ route('show', 'non-coffee') }}" @if($categorySlug==='non-coffee' )class="underline" @endif>Non Coffee</a>
                    </li>
                    <li>
                        <a href="{{ route('show', 'snacks') }}" @if($categorySlug==='snacks' )class="underline" @endif>Snacks</a>
                    </li>
                    <li>
                        <a href="{{ route('show', 'main-course') }}" @if($categorySlug==='main-course' )class="underline" @endif>Main Course</a>
                    </li>
                </ul>
            </div>

            <!-- Navbar Kanan -->
            <div class="flex items-center gap-3 mr-12 lg:flex" id="navbar-right">
                <form action="{{ route('show', $categorySlug ?? '') }}" method="GET" class="text-base" id="searchForm">
                    <input type="text" name="search" placeholder="Search" autocomplete="off" class="px-2 py-1 font-normal rounded-2xl border-none" id="searchInput">
                </form>

                <a href="{{ route('cart.index') }}">
                    <div class="relative py-2">
                        <div class="t-0 absolute left-3 -top-1">
                            <p class="flex h-2 w-2 items-center justify-center rounded-full bg-red-500 p-2.5 text-xs text-white">{{ count((array) session('cart')) }}</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="file: h-6 w-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </div>
                </a>

                @auth
                <span class="text-white text-sm font-medium">Welcome, {{ Auth::user()->name }}</span>
                @endauth
            </div>

            <!-- Hamburger Button -->
            <button id="hamburger-btn" class="lg:hidden">
                <ion-icon name="menu-outline" class="text-white text-2xl"></ion-icon>
            </button>

            <!-- Dropdown Menu -->
            <div class="lg:hidden fixed top-16 right-0 bg-gray-800 p-4 hidden" id="dropdown-menu">
                <ul class="text-white">
                    <li><a href="{{ route('show', 'coffee') }}">Coffee</a></li>
                    <li><a href="{{ route('show', 'non-coffee') }}">Non Coffee</a></li>
                    <li><a href="{{ route('show', 'snacks') }}">Snacks</a></li>
                    <li><a href="{{ route('show', 'main-course') }}">Main Course</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- End Navbar -->
    @if(session('success'))
    <div class="p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        {{ session('error') }}
    </div>
    @endif
    <!-- Carousel -->
    <div class="flex items-center justify-center my-5">
        <img class="w-[567px]" src="{{ asset('images/carousel.png') }}" alt="logo">
    </div>
    <!-- End Carousel -->

    <!-- Card -->
    <div class="container  mx-auto sm:flex sm:flex-wrap sm:gap-8 sm:justify-center">
        @foreach($products as $product)
        <div class="rounded-md  shadow-lg overflow-hidden mb-5 sm:w-65 md:w-80 lg:w-74 sm:mb-0">
            <div class="flex">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-[95px]">
                <div class="ml-2">
                    <div class="text-xl font-bold">{{ $product->name }}</div>
                    <p class="text-[11px] font-poppins font-light leading-1 text-slate-600">{{ $product->description }}</p>
                </div>
            </div>
            <div class="flex justify-between">

                <div class="border rounded-md w-[65px] text-center ml-4 font-medium my-1 border-cyan-600">
                    <a href="{{ route('addToCart', ['product_id' => $product->product_id]) }}" class="text-cyan-600">
                        Add
                    </a>
                </div>

                <div class="mr-2 text-xl">
                    ${{($product->price) }}
                </div>
            </div>

        </div>
        @endforeach
    </div>
    <!-- End Card -->



    <footer class="bg-cyan-600 mt-10">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8 text-white">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img class="h-12" src="{{ asset('images/MoonBucks.png') }}" alt="">
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Moonbucks™</a>. All Rights Reserved.</span>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menggunakan event input pada input
            document.getElementById('searchInput').addEventListener('input', function() {
                // Menunda pengiriman formulir dengan mengatur timeout
                clearTimeout(this.timer);

                // Setelah 500ms, kirim formulir
                this.timer = setTimeout(function() {
                    document.getElementById('searchForm').submit();
                }, 1700);
            });
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburgerBtn = document.getElementById('hamburger-btn');
            const navLinks = document.getElementById('nav-links');

            hamburgerBtn.addEventListener('click', function() {
                navLinks.classList.toggle('hidden');
            });
        });
    </script>

    <script>
        // Add this JavaScript to toggle the dropdown menu
        document.getElementById('hamburger-btn').addEventListener('click', function() {
            var dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>