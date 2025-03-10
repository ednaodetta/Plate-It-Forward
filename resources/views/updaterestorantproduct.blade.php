<x-html>
    <body class="bg-DefaultWhite text-gray-900 flex flex-col min-h-screen">
    
        <x-navbarResto></x-navbarResto>
        <div class="h-[10vh] "></div>
    
        <div class="w-[90%] mx-auto mt-24 p-7 rounded-lg relative flex items-center">
            <a href="{{ route('products') }}" 
               class="absolute -top-10 left-0 text-DefaultGreen font-semibold hover:underline">
               ← Back
            </a>
    
            <form action="{{ route('products.update', $product->id) }}" method="POST" 
                  enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')
    
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Nama Produk</label>
                    <input type="text" id="name" name="name" value="{{ $product->name }}" 
                           required class="w-full border border-gray-300 p-3 rounded-md">
                </div>
    
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-medium">Harga</label>
                    <input type="number" id="price" name="price" value="{{ $product->price }}" 
                           required class="w-full border border-gray-300 p-3 rounded-md">
                </div>
    
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium">Deskripsi</label>
                    <textarea id="description" name="description" 
                              class="w-full border border-gray-300 p-3 rounded-md">{{ $product->description }}</textarea>
                </div>
    
                <div class="mb-4">
                    <label for="foto" class="block text-gray-700 font-medium">Foto Produk</label>
                    <input type="file" id="foto" name="foto" 
                           class="w-full border border-gray-300 p-3 rounded-md bg-white focus:ring focus:ring-green-300">
                </div>
    
                <button type="submit" 
                        class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600 font-semibold">
                    Update Produk
                </button>
            </form>
        </div>
    </body>
    </x-html>
    