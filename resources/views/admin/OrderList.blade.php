<!-- <!DOCTYPE html> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-DefaultWhite">
    <x-navbarAdmin></x-navbarAdmin>
    <!-- Container Utama -->
    <div class="container mx-auto px-4 my-10">
        <!-- Judul -->
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold text-teal-700 mb-6 font-brandon">Order List</h1>
        </div>

        <!-- Tabel -->
        <div class="bg-white shadow-md rounded-lg p-4 mt-2">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2">Order ID</th>
                        <th class="p-2">Transaction Detail</th>
                        <th class="p-2">City</th>
                        <th class="p-2">Restaurant</th>
                        <th class="p-2">Restaurant Address</th>
                        <th class="p-2">Orphanage</th>
                        <th class="p-2">Orphanage Address</th>
                        <th class="p-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allOrders as $order)
                        <tr>
                            <td class="p-2">{{ $order->id }}</td>
                            <td class="p-2">{{ $order->transaction_detail }}</td>
                            <td class="p-2 text-center">{{ $order->city }}</td>
                            <td class="p-2">{{ $order->restaurant_name }}</td>
                            <td class="p-2">{{ $order->restaurant_address }}</td>
                            <td class="p-2">{{ $order->orphanage_name }}</td>
                            <td class="p-2">{{ $order->orphanage_address }}</td>
                            {{-- <td class="p-2 font-bold">Rp {{ number_format($order->total, 0, ',', '.') }}</td> --}}
                            <td>
                                <form method="POST" class="flex justify-between"
                                    action="{{ route('admin.OrderList') }}" onsubmit="showLoading()">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                    <select name="status" class="border px-3 py-2 text-sm text-gray-700 update-status"
                                        data-order-id="{{ $order->id }}"
                                        onchange="updateStatus(event, {{ $order->id }})">
                                        <option value="Paid" {{ $order->status == 'Paid' ? 'selected' : '' }}
                                            class="text-red-500">Paid</option>
                                        <option value="On Process"
                                            {{ $order->status == 'On Process' ? 'selected' : '' }}
                                            class="text-orange-500">On Process</option>
                                        <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}
                                            class="text-green-500">Completed</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div id="loadingOverlay" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-5 rounded-lg flex flex-col items-center">
            <div class="animate-spin rounded-full h-10 w-10 border-t-2 border-b-2 border-DefaultGreen"></div>
            <p class="mt-3 text-gray-700">Loading...</p>
        </div>
    </div>
    <script>
        // Fungsi untuk menampilkan loading overlay
        function showLoading() {
            document.getElementById('loadingOverlay').classList.remove('hidden');
        }

        // Fungsi untuk menangani perubahan status menggunakan AJAX
        function updateStatus(event, orderId) {
            const status = event.target.value;
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Menampilkan overlay loading saat status diubah
            showLoading();

            // Mengirimkan request AJAX untuk memperbarui status
            fetch("{{ route('admin.OrderList') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    },
                    body: JSON.stringify({
                        order_id: orderId,
                        status: status
                    })
                })
                .then(response => response.json())
                .then(data => {
                    // Menutup loading overlay setelah berhasil
                    document.getElementById('loadingOverlay').classList.add('hidden');

                    // Jika status berhasil diupdate, Anda bisa menampilkan pesan atau merender ulang status di halaman
                    // if (data.success) {
                    //     alert("Status berhasil diperbarui!");
                    // } else {
                    //     alert("Terjadi kesalahan saat memperbarui status.");
                    // }
                })
                .catch(error => {
                    document.getElementById('loadingOverlay').classList.add('hidden');
                    alert("Terjadi kesalahan: " + error);
                });
        }
    </script>




    <!-- script untuk mengubah warna status -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElements = document.querySelectorAll('.update-status');

            selectElements.forEach(select => {
                select.addEventListener('change', function() {
                    const orderId = select.getAttribute('data-order-id');
                    const status = select.value;

                    // Kirim permintaan POST untuk memperbarui status
                    fetch('{{ route('admin.OrderList') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Pastikan CSRF token dikirim
                            },
                            body: JSON.stringify({
                                order_id: orderId,
                                status: status,
                            }),
                        })
                        .then(response => response.json())
                        .then(data => {

                        })
                        .catch(error => {
                            alert('Terjadi kesalahan, coba lagi.');
                        });
                });
            });
        });
    </script>

    <script>
        // Fungsi untuk memperbarui warna teks elemen select berdasarkan pilihan
        function updateColor(selectElement) {
            const selectedOption = selectElement.options[selectElement.selectedIndex]; // Mendapatkan option yang dipilih
            const status = selectedOption.value;

            // Menghapus semua kelas warna yang ada pada elemen select
            selectElement.classList.remove('text-red-500', 'text-green-500', 'text-orange-500');

            // Menambahkan kelas warna sesuai dengan status yang dipilih
            if (status === 'Paid') {
                selectElement.classList.add('text-red-500');
            } else if (status === 'Completed') {
                selectElement.classList.add('text-green-500');
            } else if (status === 'On Process') {
                selectElement.classList.add('text-orange-500');
            }
        }

        // Memastikan warna diterapkan sesuai dengan status yang sudah terpilih saat halaman dimuat
        window.onload = function() {
            const selectElements = document.querySelectorAll('select[name="status"]'); // Pilih semua select
            selectElements.forEach(selectElement => {
                updateColor(selectElement); // Terapkan warna ke setiap elemen
                selectElement.addEventListener('change', () => updateColor(
                    selectElement)); // Tambahkan event listener agar warna berubah ketika status diganti
            });
        };
    </script>
</body>

</html>
