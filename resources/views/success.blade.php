<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="bg-cyan-600">
        <nav class="flex justify-between items-center">

            <!-- Navbar Kiri -->
            <div class="flex items-center ml-5">
                <img class="mr-2 ml-5 h-10 my-3" src="{{ asset('images/MoonBucks.png') }}" alt="logo">
            </div>
        </nav>

    </header>

    <div class="w-[400px] mx-auto my-[100px] p-6 bg-cyan-600 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-center">
            <img class="w-10" src="{{ asset('images/payment.png') }}" alt="">
            <p class="text-lg font-normal text-white">Transaction Successful</p>
        </div>
        <div class="text-white mt-5">
            <h2 class="text-lg font-bold">Purchase details :</h2>
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            @php $total += $details['price'] * $details['quantity'] @endphp
            <div class="flex justify-between my-3">
                <span>{{ $details['name'] }} {{ $details['quantity'] }}x</span>
                <span>${{ $details['price'] * $details['quantity'] }}</span>
            </div>
            @endforeach
            @endif
            <hr class="my-2">
            <div class="flex justify-between font-bold">
                <span>Total:</span>
                <span>${{ $total }}</span>
            </div>
        </div>
    </div>

</body>

</html>