<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">

    <title>Restaurant Menu Page</title>
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-…." crossorigin="anonymous" referrerpolicy="no-referrer"  />
    <link href="/css/tailwind.css" rel="stylesheet">
    @livewireStyles

    <style>
        /* Custom CSS for half-circle cart button */
        .half-circle {
            width: 50px;
            height: 100px;
            background-color: #00615F;
            border-radius: 50px 0 0 50px;
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cartmenulist {
            box-shadow: 0px 0px 5px 0px black;
        }

        .grid-cols-auto-fit {
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }

        #descOverlay {
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Gelap transparan */
            backdrop-filter: blur(5px);
            /* Blur hanya background */
            z-index: 40;
            /* Di bawah pop-up */
        }

        .desc {
            position: fixed;
            z-index: 50;
            /* Pastikan pop-up tetap di atas */
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        #cart-success-popup {
            transition: opacity 0.3s ease-in-out;
        }
    </style>


    <!-- Styles / Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full font-brandon flex">
    @if (Auth::check())
        <x-navbarAfterLogin></x-navbarAfterLogin>
    @else
        <x-navbar></x-navbar>
    @endif


    <section class="menu w-full flex flex-col">
        <div class="cardlist bg-[#f9f3f0] w-full items-center justif-center flex flex-col gap-[50px] ">
            <div class="h-[5vh]"> </div>
            <div class="resto w-full h-[250px] bg-[#f9f3f0] flex flex-col items-center">
                <div class="resto_header w-full h-[180px] bg-[#f9f3f0] flex justify-center items-center gap-[1%]">
                    <div
                        class="resto_pic w-[135px] bg-[#f9f3f0] h-[125-x] justify-center rounded-[10px] shadow-[1px_1px_1px_#666]">
                        <img class="w-full h-full object-cover rounded-[10px]"
                            src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/8ceb09b1-2ff8-4e92-9e84-ae9eb8c70dd2_brand-image_1733091199022.jpg?auto=format"
                            alt="McDonald's, Sentul City">
                    </div>
                    <div class="resto_desc flex flex-col justify-start w-[75%] gap-[3vh]">
                        <div
                            class="resto_name bg-[#f9f3f0] w-full h-[50px] text-[30px] bold-text items-center text-black">
                            {{ $restsearch->name }}</div>
                        <div
                            class="resto_category bg-[#f9f3f0] h-[50px] w-full left-[200px] text-[20px] text-[#888888] items-center">
                            Sweets, Snacks, Fast Food</div>
                    </div>
                </div>

                <div
                    class="resto_rate bg-DefaultGreen h-[70px] flex w-[85%] rounded-[10px] items-center shadow-[1px_1px_1px_#666]">
                    <div
                        class="review flex flex-row justify-center items-center gap-5px h-full w-[100px] bg-transparent text-yellow-300 rounded-tl-[10px] rounded-bl-[10px] gap-1">
                        <span class="fa fa-star checked"></span>
                        <p class="text-white bold-text text-lg">4.7</p>
                    </div>
                    <div
                        class="price flex flex-col justify-center items-center h-[85%] w-[100px] bg-transparent border-l border-r border-white ">
                        <div class="label text-[20px] flex flex-row gap-[2px]">
                            <p1 class="text-white text-bold">$</p1>
                            <p1 class="text-white text-bold">$</p1>
                            <p1 class="text-[#D9D9D9] text-bold">$</p1>
                            <p2 class="text-[#D9D9D9] text-bold">$</p2>
                        </div>
                        <p class="text-white text-bold">40k - 100k</p>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col items-center gap-3">
                <h1 class="w-[85%] font-bold text-[25px]">Today's menu</h1>
                <div class="cardlistnye bg-[#f9f3f0] w-[85%] grid grid-cols-auto-fit min-[350px] gap-[20px]">

                    @foreach ($products as $product)
                        <div class="card border-2 bg-DefaultWhite w-[350px] h-[420px] rounded-[10px] shadow-[1px_1px_1px_#666] p-5 cursor-pointer"
                            onclick="buttonmenudesc(
                            '{{ $product->name }}',
                            '{{ asset('storage/' . $product->foto) }}',
                            'Rp {{ number_format($product->price, 0, ',', '.') }}',
                            '{{ $product->description }}'
                        )">
                            <img class="h-[80%] w-full object-cover rounded-[10px]"
                                src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->name }}">
                            <h1 class="font-bold text-[20px]">{{ $product->name }}</h1>
                            <div class="flex justify-between">
                                <h1>Rp {{ number_format($product->price, 0, ',', '.') }}</h1>
                                @if (Auth::check())
                                    {{-- <button
                                        class="add-to-cart w-[100px] rounded-md bg-DefaultGreen font-bold text-white cursor-pointer"
                                        onclick="event.stopPropagation()" data-product-id="{{ $product->id }}">
                                        ADD
                                    </button> --}}
                                    <button wire:click="addToCart({{ $product->id }})"
                                        class="w-[100px] rounded-md bg-DefaultGreen font-bold text-white cursor-pointer p-2">
                                        ADD
                                    </button>
                                @else
                                    <a href="{{ route('login') }}">
                                        <button
                                            class="w-[100px] rounded-md bg-DefaultGreen font-bold text-white cursor-pointer p-2"
                                            onclick="event.stopPropagation();">
                                            ADD
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>


            <button
                class="fixed right-0 top-[50vh] w-[50px] h-[80px] rounded-[100px_0_0_100px] bg-DefaultGreen text-white font-bold text-[20px] shadow-lg"
                onclick="Livewire.emit('openCart')">
                cart
            </button>
        </div>

        <div id="descOverlay" class="hidden fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-40"></div>
        <!-- desc part -->
        <div
            class="desc bg-DefaultWhite flex flex-col h-auto fixed items-center justify-center hidden 
            w-[90%] md:w-[50%] lg:w-[40%] xl:w-[30%] 
            top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
            shadow-lg rounded-lg p-5 border border-gray-300">

            <!-- Bagian Header -->
            <div class="bg-DefaultWhite w-full flex flex-col gap-3 relative">
                <button class="absolute top-2 right-3 text-[25px] font-bold bg-transparent"
                    onclick="backbuttonmenudesc()">X</button>
            </div>

            <!-- Gambar & Detail Produk -->
            <div class="w-full flex flex-col items-center gap-3 p-4">
                <img id="descImage" class="h-40 w-40 rounded-lg border-DefaultGreen border-2 object-cover"
                    src="" alt="">
                <h2 id="descName" class="text-lg font-bold"></h2>
                <p id="descDetail" class="px-4 text-sm text-gray-700 text-center"></p>
            </div>

            <!-- Tombol ADD TO CART -->
            @if (Auth::check())
                <button class="add-to-cart bg-DefaultGreen text-white rounded-md py-2 px-5"
                    data-product-id="{{ $product->id }}">
                    ADD TO CART
                </button>
            @else
                <a href="{{ route('login') }}">
                    <button class="bg-DefaultGreen text-white rounded-md py-2 px-5">
                        ADD TO CART
                    </button>
                </a>
            @endif
            {{-- <button class="bg-DefaultGreen text-white rounded-md py-2 px-5 w-3/4">ADD TO CART</button> --}}
        </div>

        <!-- cart ini tandain flex ke hidden -->
        {{-- @livewire('cart-component') --}}
        <div class="cartye fixed right-0 top-0 w-[350px] h-full bg-white shadow-lg p-4 hidden">
            <h2 class="text-xl font-bold">Your Cart</h2>
            @if ($carts && count($carts->items) > 0)
                <ul class="divide-y">
                    @foreach ($carts->items as $item)
                        <li class="py-2 flex justify-between items-center">
                            <span>{{ $item->product->name }}</span>
                            <div class="flex items-center">
                                <button class="bg-gray-300 px-2"
                                    wire:click="updateQuantity({{ $item->id }}, 'decrease')">-</button>
                                <span class="mx-2">{{ $item->quantity }}</span>
                                <button class="bg-gray-300 px-2"
                                    wire:click="updateQuantity({{ $item->id }}, 'increase')">+</button>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <p class="mt-4 font-bold">Total: Rp {{ number_format($carts->total, 0, ',', '.') }}</p>
            @else
                <p class="text-gray-500">Your cart is empty</p>
            @endif
        </div>



        <div class="h-[5vh] bg-DefaultWhite"></div>


        <x-footer></x-footer>


    </section>
    <div id="cart-success-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-4 rounded-lg shadow-lg text-center">
            <p class="text-lg font-bold text-green-600">Produk berhasil ditambahkan!</p>
        </div>
    </div>
    @livewireScripts


    <script>
        function buttonmenu() {
            const menucart = document.querySelector('.cartye');

            menucart.classList.replace('w-0', 'w-[28%]');
            menucart.classList.replace('hidden', 'flex');

            document.body.classList.add('overflow-hidden');
        }

        function backbuttonmenu() {
            const menucart = document.querySelector('.cartye');

            menucart.classList.replace('w-[28%]', 'w-0');
            menucart.classList.replace('flex', 'hidden');

            document.body.classList.remove('overflow-hidden');
        }

        function buttonmenudesc(name, image, price, description) {
            document.getElementById("descName").textContent = name;
            document.getElementById("descImage").src = image;
            document.getElementById("descDetail").textContent = description;

            const descPopup = document.querySelector('.desc');
            const overlay = document.getElementById("descOverlay");

            descPopup.classList.replace('hidden', 'flex');
            overlay.classList.remove('hidden');

            document.body.classList.add('overflow-hidden');
        }

        function backbuttonmenudesc() {
            const descPopup = document.querySelector('.desc');
            const overlay = document.getElementById("descOverlay");

            descPopup.classList.replace('flex', 'hidden');
            overlay.classList.add('hidden');

            document.body.classList.remove('overflow-hidden');
        }
    </script>
</body>


</html>
