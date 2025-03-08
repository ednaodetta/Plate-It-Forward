<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Nama Produk</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium">Harga</label>
                <input type="number" id="price" name="price" required class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium">Deskripsi</label>
                <textarea id="description" name="description" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300"></textarea>
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-gray-700 font-medium">Foto Produk</label>
                <input type="file" id="foto" name="foto" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Tambah Produk</button>
        </form>
    </div>
</body>
</html>