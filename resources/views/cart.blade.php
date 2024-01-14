<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    <div class="mx-[270px] mt-[70px]">
        <p class="font-bold font-poppins text-xl">Shopping Cart</p>
    </div>

    <div class="flex justify-center mt-5">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 w-[800px]">
            <div class="py-2 sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @php $total = 0 @endphp
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr data-id="{{$id}}">
                                <td data-th="Product" class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ asset('images') }}/{{ $details['image'] }}">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $details['name'] }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price" class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 text-center">${{ $details['price'] }}</div>
                                </td>
                                <td data-th="Quantity" class="px-6 py-4 text-center">
                                    <input type="number" value="{{ $details['quantity'] }}" class="border w-10 form-control quantity cart_update" min="1" />
                                </td>
                                <td data-th="Subtotal" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                <td class="action" data-th="">
                                    <button class="text-indigo-600 hover:text-indigo-900 cart_remove">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-3">Total  ${{ $total }}</h3>
                        <form action="/session" method="POST">
                            <a href="{{ url('/show/coffee') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Continue Shopping</a>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" id="checkout-live-button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(".cart_update").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".cart_remove").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
</body>

</html>