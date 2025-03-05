<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Expirations</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Detail Produk: {{ $product->name }}</h1>
    <img src="{{ url('storage/'. $product->foto )}}" alt="" class="w-32 h-32">
    <p class="mb-2"><strong>Harga:</strong> Rp{{ number_format((int) $product->price) }}</p>
    <p class="mb-2"><strong>Deskripsi:</strong> {{ $product->description }}</p>

    <a href="{{ route('productexp.create', ['product_id' => $product->id]) }}">tambah product</a>
    <h2 class="text-xl font-bold mt-4">List ProductExp</h2>

    <div class="overflow-x-auto mt-4">
        <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Expired Date</th>
                    <th class="px-4 py-2 border">Price</th>
                    <th class="px-4 py-2 border">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productExps as $index => $exp)
                    <tr class="text-center">
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $exp->expired_at }}</td>
                        <td class="border px-4 py-2">{{ $exp->price_discount}}</td>
                        <td class="border px-4 py-2">{{ $exp->quantity }}</td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-gray-500 border px-4 py-2 text-center">Belum ada data expiry date</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-4 text-right font-bold text-lg">
            Total Quantity: <span class="text-blue-600">{{ $totalQuantity }}</span>
        </div>
    </div>

    <a href="{{ route('products') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Kembali</a>
</body>
</html>
