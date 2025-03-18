<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Support Detail</title>
    <link href="/css/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #menu {
            background-color: #F9F3F0 !important;
            opacity: 1 !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-DefaultWhite flex flex-col min-h-screen">

    <!-- Navbar -->
    <x-navbarAdmin></x-navbarAdmin>

    <!-- Main Content -->
    <div class="w-full pt-40 mx-auto py-8 flex-grow items-center">
        <div class="w-11/12 mx-auto flex justify-between items-center">
            <h2 class="text-2xl font-bold text-DefaultGreen font-gotham">Support</h2>
            {{-- <button id="delete-btn" onclick="handleTrashButton()" class="text-red-600 hover:text-red-800 text-xl">
                🗑️
            </button> --}}
        </div>

        <div class="bg-white rounded-lg w-11/12 mx-auto shadow-md mt-4">
            <!-- Desktop Table -->
            <div class="md:block">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr class="text-left text-gray-600 font-gotham">
                            <th class="p-3"></th>
                            <th class="p-3">Support ID</th>
                            <th class="p-3">Name</th>
                            <th class="p-3">E-mail</th>
                            <th class="p-3">Information</th>
                            <th class="p-3 text-center">Handled</th>
                        </tr>
                    </thead>
                    <tbody id="userTable" class="font-brandon">
                        @foreach ($supports as $support)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3"></td>
                                <td class="p-3">{{ $support->support_id }}</td>
                                <td class="p-3">{{ $support->name }}</td>
                                <td class="p-3">{{ $support->email }}</td>
                                <td class="p-3">{{ $support->information }}</td>
                                <td class="p-3 text-center">
                                    <input type="checkbox" class="handled-checkbox w-5 h-5"
                                        onchange="toggleHandled(this, '{{ $support->support_id }}')"
                                        {{ $support->handled ? 'checked' : '' }}>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <!-- Mobile Cards -->
            {{-- <div class="md:hidden space-y-4 p-4" id="userCards"></div> --}}
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("input[type=checkbox]").forEach(checkbox => {
                const row = checkbox.closest('tr');
                if (checkbox.checked) {
                    row.classList.add('line-through', 'text-gray-500');
                }
            });
        });

        function toggleHandled(checkbox, id) {
            const row = checkbox.closest('tr');
            const isChecked = checkbox.checked;

            if (isChecked) {
                row.classList.add('line-through', 'text-gray-500');
            } else {
                row.classList.remove('line-through', 'text-gray-500');
            }

            fetch(`/admin/update-handled/${id}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        handled: isChecked
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (!data.success) {
                        alert('Gagal memperbarui status handled');
                        checkbox.checked = !isChecked;
                        row.classList.toggle('line-through', isChecked);
                        row.classList.toggle('text-gray-500', isChecked);
                    }
                })
                .catch(() => {
                    alert('Terjadi kesalahan, coba lagi.');
                    checkbox.checked = !isChecked;
                    row.classList.toggle('line-through', isChecked);
                    row.classList.toggle('text-gray-500', isChecked);
                });
        }
    </script>


</body>

</html>
