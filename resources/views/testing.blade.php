<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Restoran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4 flex justify-between">
        <h1 class="text-xl font-bold text-gray-700">🍽️ Resto Dashboard</h1>
        <a href="{{ route('logout') }}" class="text-red-500 hover:text-red-700">Logout</a>
    </nav>

    <!-- Container -->
    <div class="p-6 max-w-6xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Hello, {{ $restaurant->name }}!</h2>

        <!-- Statistik utama -->
        <div class="grid grid-cols-3 gap-6">
            <!-- Total Donation -->
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-700 text-lg font-semibold">Total Donation</h3>
                <p class="text-2xl font-bold text-green-600">Rp {{ number_format($totalDonation, 0, ',', '.') }}</p>
            </div>

            <!-- All Orders -->
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-700 text-lg font-semibold">All Orders</h3>
                <p class="text-2xl font-bold text-gray-900">{{ $totalOrders }}</p>
            </div>

            <!-- Total Portion Donate -->
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="text-gray-700 text-lg font-semibold">All Portion Donate</h3>
                <p class="text-2xl font-bold text-gray-900">{{ $totalPortions }}</p>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <h3 class="text-lg font-semibold text-gray-700 mt-6">List of Recent Orders</h3>
        <div class="bg-white shadow-md rounded-lg p-4 mt-2">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2">Order ID</th>
                        <th class="p-2">Transaction Detail</th>
                        <th class="p-2">Total Price</th>
                        <th class="p-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($recentOrders as $order) --}}
                        <tr>
                            <td class="p-2">{{ $restaurant->id }}</td>
                            <td class="p-2">{{ $order->transaction_detail }}</td>
                            <td class="p-2 font-bold">Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                            <td class="p-2 text-{{ $order->status == 'Completed' ? 'green' : ($order->status == 'On Process' ? 'orange' : 'red') }}-500">
                                {{ $order->status }}
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>