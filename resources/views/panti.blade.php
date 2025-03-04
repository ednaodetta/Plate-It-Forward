<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage Information</title>
    <link href="/css/tailwind.css" rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <style>
        <style>.dropdown {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 10;
            width: 150px;
        }

        .dropdown.active {
            display: block;
        }

        .hidden-checkbox {
            display: none;
        }

        /* Style for the checkbox */
        .delete-checkbox {
            width: 18px;
            /* Set the width */
            height: 18px;
            /* Set the height */
        }

        #menu {
            background-color: #F9F3F0 !important;
            opacity: 1 !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F9F3F0] text-gray-900 flex flex-col min-h-screen">

    <header class="bg-DefaultWhite shadow-xl fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('assets/Image/Logo copy.png') }}" alt="Logo" class="h-14 w-14">
                <span class="ml-2 text-xl font-bold text-gray-800">PlateItForward</span>
            </div>

            <!-- Hamburger Button -->
            <button id="hamburger-btn" class="block lg:hidden text-gray-600 focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>

            <!-- Navigation Links -->
            <nav id="menu"
                class="hidden absolute top-16 right-6 bg-DefaultWhite w-48 shadow-lg border border-gray-300 p-2 lg:flex lg:relative lg:top-auto lg:right-auto lg:w-auto lg:shadow-none lg:border-none lg:p-0">
                <ul class="flex flex-col lg:flex-row lg:space-x-10 text-gray-600">
                    <li><a href="/dashboardAdmin"
                            class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Dashboard</a>
                    </li>
                    <li><a href="/OrderList" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Order</a>
                    </li>
                    <li><a href="/userinfo" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">User</a>
                    </li>
                    <li><a href="/restaurantinfo"
                            class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Restaurant</a>
                    </li>
                    <li><a href="/panti" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Orphanage</a></li>
                    <li><a href="/supportAdmin" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Support</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- <script>
    // Hamburger menu toggle functionality
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const menu = document.getElementById('menu');

    hamburgerBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden'); // Show or hide the menu
    });
</script> --}}


    <!-- Main Content -->
    <div class="w-full pt-40 mx-auto py-8 flex-grow items-center">
        <div class="w-11/12 mx-auto flex justify-between items-center">
            {{-- <h2 class="text-2xl font-bold text-DefaultGreen font-gotham">Restaurant's Information</h2> --}}
            <div class="w-11/12 mx-auto flex justify-between items-center">
                <!-- Left aligned Restaurant's Information -->
                <h2 class="text-2xl font-bold text-DefaultGreen font-gotham">Orphanage's Information</h2>

                <!-- Right aligned buttons side by side -->
                <div class="flex justify-end items-center space-x-4">
                    <button id="addOrphanageBtn"
                        class="bg-green-600 text-white py-2 px-6 rounded-md hover:bg-green-700 focus:outline-none">
                        Add Orphanage
                    </button>

                    <button id="delete-btn" onclick="handleTrashButton()"
                        class="text-red-600 hover:text-red-800 text-xl">
                        🗑️
                    </button>
                </div>
            </div>

            <!-- Add Restaurant Modal -->
            <div id="addOrphanageModal"
                class="modal hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
                <div class="bg-white p-6 rounded-md w-96 shadow-lg">
                    <h3 class="text-xl font-semibold text-green-800 mb-4">Add New Orphanage</h3>
                    <form method="POST" action="{{ route('orphanage.add') }}">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <!-- Address -->
                        <div>
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                                :value="old('address')" required autocomplete="address" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- City -->
                        <div>
                            <x-input-label for="city" :value="__('City')" />
                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city"
                                :value="old('city')" required autocomplete="city" />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>

                        <!-- Contact -->
                        <div>
                            <x-input-label for="contact" :value="__('Contact')" />
                            <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact"
                                :value="old('contact')" required autocomplete="contact" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Donation -->
                        <div>
                            <x-input-label for="donation" :value="__('Donation')" />
                            <x-text-input id="donation" class="block mt-1 w-full" type="number" name="donation"
                                :value="old('donation')" required min="0" />
                            <x-input-error :messages="$errors->get('donation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">


                            <x-primary-button class="ms-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg w-11/12 mx-auto shadow-md mt-5">
            <!-- Desktop Table -->
            <div class="hidden md:block">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr class="text-left text-gray-600">
                            <th class="p-3"></th>
                            <th class="p-3">Orphanage Name</th>
                            <th class="p-3">Location</th>
                            <th class="p-3">Total Donation</th>
                        </tr>
                    </thead>
                    <tbody id="userTable"></tbody>
                </table>
            </div>

            <!-- Mobile Cards -->
            <div class="md:hidden space-y-4 p-4" id="userCards"></div>
        </div>
    </div>

    {{-- <!-- Add Orphanage Button -->
    <div class="flex justify-center mt-8">
        <button id="addOrphanageBtn"
            class="bg-green-600 text-white py-2 px-6 rounded-md hover:bg-green-700 focus:outline-none">
            Add Orphanage
        </button>
    </div> --}}

    {{-- <!-- Add Orphanage Modal -->
    <div id="addOrphanageModal"
        class="modal hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-md w-96 shadow-lg">
            <h3 class="text-xl font-semibold text-green-800 mb-4">Add New Orphanage</h3>
            <form id="addOrphanageForm">
                <div class="mb-4">
                    <label for="orphanageName" class="block text-lg font-semibold text-gray-700">Orphanage Name</label>
                    <input type="text" id="orphanageName"
                        class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                </div>

                <div class="mb-4">
                    <label for="location" class="block text-lg font-semibold text-gray-700">Location</label>
                    <input type="text" id="location"
                        class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                </div>

                <div class="mb-4">
                    <label for="donation" class="block text-lg font-semibold text-gray-700">Total Donation</label>
                    <input type="text" id="donation"
                        class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700">Save</button>
                    <button type="button" onclick="closeModal()"
                        class="ml-2 text-gray-600 px-6 py-3 rounded-md hover:bg-gray-100">Cancel</button>
                </div>
            </form>
        </div>
    </div> --}}

    <script>
        // Buka modal
        document.getElementById('addOrphanageBtn').addEventListener('click', function() {
            document.getElementById('addOrphanageModal').classList.remove('hidden');
        });

        // Tutup modal
        function closeModal() {
            document.getElementById('addOrphanageModal').classList.add('hidden');
        }

        // Menangani pengiriman form
        document.getElementById('addOrphanageForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const orphanageName = document.getElementById('orphanageName').value;
            const location = document.getElementById('location').value;
            const donation = document.getElementById('donation').value;

            // Tambahkan data panti asuhan baru ke dalam array users
            users.push({
                id: orphanageName,
                name: location,
                email: donation
            });

            // Tutup modal dan perbarui tabel
            closeModal();
            populateTable();
        });
    </script>

    <script>
        let users = [{
                id: 'Panti Asuhan Adzkiyah Alkhair',
                name: 'Jakarta',
                email: 'Rp. 2.986.000,00'
            },
            {
                id: 'The Jodie O\'Shea Orphanage',
                name: 'Bekasi',
                email: 'Rp. 1.726.000,00'
            },
            {
                id: 'Panti Asuhan Miftahul Falah',
                name: 'Cengkareng',
                email: 'Rp. 4.500.000,00'
            }
        ];

        let deleteMode = false;

        function populateTable() {
            const tableBody = document.getElementById('userTable');
            const cardContainer = document.getElementById('userCards');

            tableBody.innerHTML = '';
            cardContainer.innerHTML = '';

            users.forEach((user) => {
                const row = document.createElement('tr');
                row.className = 'border-b hover:bg-gray-50';

                row.innerHTML = `
                    <td class="p-3 relative action-cell">
                        ${deleteMode 
                            ? `<input type='checkbox' class='delete-checkbox' data-id='${user.id}'>` 
                            : `<button class="dots-menu" onclick="toggleDropdown(this)">&#x22EE;</button>
                                                                                                                                                                                                                               <div class="dropdown absolute left-4 w-40 mt-2 bg-white shadow-md rounded-md hidden">
                                                                                                                                                                                                                                   <ul class="text-sm">
                                                                                                                                                                                                                                       <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                                                                                                                                                                                                                           <a href="/updateorphanageinfo?id=${user.id}">Update orphanage information</a>
                                                                                                                                                                                                                                       </li>
                                                                                                                                                                                                                                       <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-red-600" onclick="confirmDeleteUser('${user.id}')">Delete orphanage</li>
                                                                                                                                                                                                                                   </ul>
                                                                                                                                                                                                                               </div>`
                        }
                    </td>
                    <td class="p-3">${user.id}</td>
                    <td class="p-3">${user.name}</td>
                    <td class="p-3">${user.email}</td>
                `;
                tableBody.appendChild(row);

                // Mobile Card
                const card = document.createElement('div');
                card.className = "bg-white p-4 rounded-lg shadow-md";
                card.innerHTML = `
                    <div class="flex justify-between items-center p-3 rounded-lg bg-white">
                        <div>
                            <h3 class="text-lg font-bold text-green-800">${user.name}</h3>
                            <p class="text-gray-600"><strong>Orphanage Name:</strong> ${user.id}</p>
                            <p class="text-gray-600"><strong>Total Donation:</strong> ${user.email}</p>
                        </div>
                        <div class="relative">
                            ${deleteMode 
                                ? `<input type='checkbox' class='delete-checkbox' data-id='${user.id}'>` 
                                : `<button class="dots-menu" onclick="toggleDropdown(this)">&#x22EE;</button>
                                                                                                                                                                                                                                <div class="dropdown absolute right-0 w-40 mt-2 bg-white shadow-md rounded-md hidden">
                                                                                                                                                                                                                                    <ul class="text-sm">
                                                                                                                                                                                                                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                                                                                                                                                                                                                           <a href="/updateorphanageinfo?id=${user.id}">Update orphanage information</a>
                                                                                                                                                                                                                                       </li>
                                                                                                                                                                                                                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-red-600" onclick="confirmDeleteUser('${user.id}')">Delete orphanage</li>
                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                </div>`
                            }
                        </div>
                    </div>
                `;

                cardContainer.appendChild(card);
            });
        }

        function handleTrashButton() {
            if (!deleteMode) {
                toggleDeleteMode();
            } else {
                deleteSelectedUsers();
            }
        }

        function toggleDeleteMode() {
            deleteMode = true;
            populateTable();
            document.getElementById("delete-btn").classList.add("text-red-800");
        }

        function deleteSelectedUsers() {
            let checkboxes = document.querySelectorAll(".delete-checkbox:checked");

            if (checkboxes.length === 0) {
                alert("No users selected for deletion.");
                exitDeleteMode();
                return;
            }

            if (confirm("Are you sure you want to delete selected orphanages?")) {
                let idsToDelete = Array.from(checkboxes).map(checkbox => checkbox.dataset.id);

                users = users.filter(user => !idsToDelete.includes(user.id));

                alert("Selected Orphanages have been deleted successfully!");
            }

            exitDeleteMode();
        }

        function exitDeleteMode() {
            deleteMode = false;
            document.getElementById("delete-btn").classList.remove("text-red-800");
            populateTable();
        }

        function toggleDropdown(button) {
            let dropdown = button.nextElementSibling;
            document.querySelectorAll(".dropdown").forEach(el => el.classList.add("hidden"));
            dropdown.classList.toggle("hidden");
        }

        function confirmDeleteUser(userId) {
            if (confirm("Are you sure you want to delete this orphanage?")) {
                users = users.filter(user => user.id !== userId);
                populateTable();
                alert("Orphanage deleted successfully!");
            }
        }

        document.addEventListener("click", function(e) {
            if (!e.target.closest(".dots-menu") && !e.target.closest(".dropdown")) {
                document.querySelectorAll(".dropdown").forEach(el => el.classList.add("hidden"));
            }
        });

        populateTable();

        // Hamburger menu toggle functionality
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const menu = document.getElementById('menu');

        hamburgerBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden'); // Show or hide the menu
        });
    </script>
</body>

</html>
