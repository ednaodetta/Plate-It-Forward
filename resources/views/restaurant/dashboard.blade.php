{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>resto</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <input type="submit" value="Logout">

    </form>
</body>

</html> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as Restaurant!") }}
                </div>

                <a href="{{ route('products') }}" class="btn btn-primary">
                    Lihat Produk Saya
                </a>
                
            </div>
        </div>
    </div>
</x-app-layout>
