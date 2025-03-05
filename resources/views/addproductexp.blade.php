<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah ProductExp</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
<h1>{{ $productsearch->name }}</h1>

<form action="{{ route('productexp.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $productsearch->id }}">

    <label class="block">Quantity:</label>
    <input type="number" name="quantity" class="border p-2 w-full mb-2" required>

    <label class="block">Price Discount:</label>
    <input type="number" name="price_discount" class="border p-2 w-full mb-2" required>

    <label class="block">Expired At:</label>
    <input type="date" name="expired_at" class="border p-2 w-full mb-2" required>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>

    
</body>
</html>
