<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

<body class="overflow-hidden">
    <div class="h-screen w-full absolute">
        <img class="w-full h-full object-cover" src="{{ asset('images/background.png') }}" alt="">
    </div>
    <header class="bg-cyan-600 relative">
        <nav class="flex justify-between items-center">

            <!-- Navbar Kiri -->
            <div class="flex items-center ml-5">
                <img class="mr-2 ml-5 h-10 my-3" src="{{ asset('images/MoonBucks.png') }}" alt="logo">
            </div>

            <div class="flex items-center gap-3 mr-12">
                <ion-icon class="text-white text-[30px]" name="person-outline"></ion-icon>
            </div>
        </nav>
    </header>

    <div class="relative">
        <h1>Copyright : shutterstock.com/asiandelight</h1>
    </div>

    <div class="flex items-center justify-center h-[80vh] relative">
        <div class="container w-[460px] h-[280px] bg-cyan-600 shadow-lg">
            <img class="w-[200px] ml-[130px] my-4" src="{{ asset('images/MoonBucks2.png') }}" alt="">
            <div class="text-white font-medium font-poppins ml-9">
                <h1>Alamat : Jl. Terusan Buah Batu no.24, <br>Kota Bandung, Jawa Barat</h1>
                <br>
                <h1>Hari/Jam Buka : Senin-Minggu / 08.00-22.00 </h1>
                <br>
                <div class="flex gap-2">
                    <h1>Contact Us :</h1>
                    <div>
                        <ul>
                            <li><ion-icon class="-my-1 text-black" name="logo-whatsapp"></ion-icon> 083239342982</li>
                            <li><ion-icon class="-my-1 text-black" name="logo-instagram"></ion-icon> @moonbuckscoffeeshop</li>
                            <li><ion-icon class="-my-1 text-black" name="mail-outline"></ion-icon> moonbucksbussines@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative -my-24 flex justify-center">
        <a href="{{ route('show', 'coffee') }}"><button class="bg-cyan-600 w-[150px] h-[30px] text-white font-poppins rounded-lg">Lihat Menu</button></a>
    </div>




</body>

</html>