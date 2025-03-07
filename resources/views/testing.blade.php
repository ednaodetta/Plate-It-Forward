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
    <div class="p-6 max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Hello, {{ auth()->user()->name ?? 'Resto' }}!</h2>

        <!-- Info Cards -->
        <div class="bg-white p-4 shadow rounded-lg text-center my-5">
            <h3 class="text-lg font-semibold text-gray-700">Total Donation</h3>
            <p class="text-2xl font-bold text-green-600">Rp 2.000.000.000</p>
        </div>

        <div class="grid grid-cols-2 gap-4 text-center">
            <!-- Total Donation -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-gray-700 text-lg font-semibold">All Orders</h2>
                <p class="text-2xl font-bold text-gray-900">15</p>
            </div>
        
            <!-- Total Portion Donate -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-gray-700 text-lg font-semibold">All Portion Donate</h2>
                <p class="text-2xl font-bold text-gray-900">20</p>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <h3 class="text-lg font-semibold text-gray-700 mb-2">List of Recent Orders</h3>
        <div class="bg-white shadow-md rounded-lg p-4">
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
                    <tr>
                        <td class="p-2">ID004</td>
                        <td class="p-2">1 Mie ayam, 1 Bakso, 1 Teh es</td>
                        <td class="p-2 font-bold">IDR 25,000</td>
                        <td class="p-2 text-orange-500">On Process</td>
                    </tr>
                    <tr>
                        <td class="p-2">ID003</td>
                        <td class="p-2">1 Mie ayam, 1 Bakso, 1 Teh es</td>
                        <td class="p-2 font-bold">IDR 75,000</td>
                        <td class="p-2 text-green-500">Completed</td>
                    </tr>
                    <tr>
                        <td class="p-2">ID002</td>
                        <td class="p-2">1 Mie ayam, 1 Bakso, 1 Teh es, 1 Pizza, 10 Nasi padang</td>
                        <td class="p-2 font-bold">IDR 125,000</td>
                        <td class="p-2 text-red-500">Canceled</td>
                    </tr>
                    <tr>
                        <td class="p-2">ID001</td>
                        <td class="p-2">1 Mie ayam, 1 Bakso, 1 Teh es</td>
                        <td class="p-2 font-bold">IDR 65,000</td>
                        <td class="p-2 text-red-500">Canceled</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
