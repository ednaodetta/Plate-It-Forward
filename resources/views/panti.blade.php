<x-html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panti Asuhan</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script>
            function confirmDelete(event) {
                if (!confirm('Apakah Anda yakin ingin menghapus panti asuhan ini?')) {
                    event.preventDefault();
                }
            }
        </script>
    </head>

    <body class="bg-DefaultWhite">

        <div class="container mx-auto p-6">
            <!-- Success message -->
            <div class="bg-DefaultGreen text-white p-4 rounded mb-6 shadow-lg">
                Panti Asuhan berhasil ditambahkan!
            </div>

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold">Panti Asuhan</h2>
                <!-- Add Orphanage Button -->
                <button onclick="window.location.href='/orphanages/create'"
                    class="bg-blue-500 text-white px-6 py-3 rounded-md transition duration-300 ease-in-out transform hover:bg-blue-600 hover:scale-105">
                    Tambah Panti Asuhan
                </button>
            </div>

            <!-- Table to display Orphanages (Full Width) -->
            <table class="min-w-full bg-white shadow-lg rounded-lg overflow-hidden">
                <thead class="bg-DefaultGreen">
                    <tr class="text-left text-sm font-medium text-white">
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">Kota</th>
                        <th class="px-6 py-3">Total Donasi</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Static Data for Orphanages -->
                    <tr class="border-b hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4">Panti Asuhan A</td>
                        <td class="px-6 py-4">Jakarta</td>
                        <td class="px-6 py-4">Rp 10,000,000</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button onclick="window.location.href='/orphanages/1/edit'"
                                class="bg-yellow-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out hover:bg-yellow-400 hover:scale-105">Edit</button>
                            <form action="/orphanages/1" method="POST" class="inline-block"
                                onsubmit="confirmDelete(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out hover:bg-red-400 hover:scale-105">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4">Panti Asuhan B</td>
                        <td class="px-6 py-4">Bandung</td>
                        <td class="px-6 py-4">Rp 5,000,000</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button onclick="window.location.href='/orphanages/2/edit'"
                                class="bg-yellow-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out hover:bg-yellow-400 hover:scale-105">Edit</button>
                            <form action="/orphanages/2" method="POST" class="inline-block"
                                onsubmit="confirmDelete(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out hover:bg-red-400 hover:scale-105">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4">Panti Asuhan C</td>
                        <td class="px-6 py-4">Surabaya</td>
                        <td class="px-6 py-4">Rp 7,500,000</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button onclick="window.location.href='/orphanages/3/edit'"
                                class="bg-yellow-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out hover:bg-yellow-400 hover:scale-105">Edit</button>
                            <form action="/orphanages/3" method="POST" class="inline-block"
                                onsubmit="confirmDelete(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out hover:bg-red-400 hover:scale-105">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </body>

</x-html>
