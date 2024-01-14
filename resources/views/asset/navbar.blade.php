<header class="bg-cyan-600">
        <nav class="flex justify-between items-center">

            <!-- Navbar Kiri -->
            <div class="flex items-center ml-5">
                <a href="{{ route('info.show') }}"><img class="mr-2 ml-5 h-10 my-3" src="{{ asset('images/MoonBucks.png') }}" alt="logo"></a>

                <ul class="text-base font-normal font-gurajada text-white flex space-x-4 ml-2 lg:flex">
                    <li>
                        <a href="{{ route('category.show', 'coffee') }}" @if($categorySlug==='coffee' )class="underline" @endif>Coffee</a>
                    </li>
                    <li>
                        <a href="{{ route('category.show', 'non-coffee') }}" @if($categorySlug==='non-coffee' )class="underline" @endif>Non Coffee</a>
                    </li>
                    <li>
                        <a href="{{ route('category.show', 'snacks') }}" @if($categorySlug==='snacks' )class="underline" @endif>Snacks</a>
                    </li>
                    <li>
                        <a href="{{ route('category.show', 'main-course') }}" @if($categorySlug==='main-course' )class="underline" @endif>Main Course</a>
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

            <button id="hamburger-btn" class="lg:hidden">
                <ion-icon name="menu-outline" class="text-white text-2xl"></ion-icon>
            </button>
        </nav>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </header>