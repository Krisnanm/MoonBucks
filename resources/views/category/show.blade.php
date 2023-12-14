<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Navbar -->
    <header class="bg-cyan-600">
        <nav class="flex justify-between items-center">

            <!-- Navbar Kiri -->
            <div class="flex items-center ml-5">
                <img class="mr-2 ml-5 h-10 my-3" src="{{ asset('images/MoonBucks.png') }}" alt="logo">

                <ul class="text-base font-normal font-sans text-white flex space-x-4 ml-2">
                    <li>
                        <a href="{{ route('category.show', 'coffee') }}">Coffee</a>
                    </li>
                    <li>
                        <a href="{{ route('category.show', 'non-coffee') }}">Non Coffee</a>
                    </li>
                    <li>
                        <a href="{{ route('category.show', 'snacks') }}">Snacks</a>
                    </li>
                    <li>
                        <a href="{{ route('category.show', 'main-course') }}">Main Course</a>
                    </li>
                </ul>
            </div>

            <!-- Navbar Kanan -->
            <div class="flex items-center gap-3 mr-12">
                <form action="{{ route('category.show', $categorySlug ?? '') }}" method="GET" class="text-base" id="searchForm">
                    <input type="text" name="search" placeholder="Search" autocomplete="off" class="px-2 py-1 font-normal rounded-2xl border-none" id="searchInput">
                </form>



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


                <ion-icon name="notifications-outline" class="text-xl text-white"></ion-icon>
            </div>

        </nav>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </header>
    <!-- End Navbar -->

    <!-- Carousel -->
    <div class="flex items-center justify-center my-5">
        <img class="w-[567px] my-5" src="{{ asset('images/carousel.png') }}" alt="logo">
    </div>
    <!-- End Carousel -->

    <!-- Card -->
    <div class="container  mx-auto px-5 py-5 sm:flex sm:flex-wrap sm:gap-8 sm:justify-center">
        @foreach($products as $product)
        <div class="rounded-md  shadow-lg overflow-hidden mb-5 sm:w-65 md:w-80 lg:w-74 sm:mb-0">
            <div class="flex">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-[120px]">
                <div class="ml-2">
                    <div class="text-xl font-bold">{{ $product->name }}</div>
                    <p class="text-sm font-light leading-3 text-slate-600">{{ $product->description }}</p>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="border rounded-md w-[80px] text-center ml-5 font-medium my-1 border-cyan-600">
                    <form action="{{ route('cart.add', $product->id) }}" method="post">
                        @csrf
                        <button type="submit" class="text-cyan-600">Add</button>
                    </form>
                </div>
                <div class="mr-2 text-xl">
                    Rp {{ number_format($product->price, 2) }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- End Card -->
</body>

</html>