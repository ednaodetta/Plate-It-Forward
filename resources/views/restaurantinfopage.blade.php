<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Information</title>
    <link href="/css/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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

        /* Style for the checkbox */
        .delete-checkbox {
            width: 18px;
            /* Set the width */
            height: 18px;
            /* Set the height */
        }
    </style>
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-DefaultWhite">
    <!-- Navbar -->
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
    {{-- <x-navbar></x-navbar> --}}

    <!-- Main Content -->
    <div class="w-full pt-40 mx-auto py-8 flex-grow items-center">
        <div class="w-11/12 mx-auto flex justify-between items-center">
            {{-- <h2 class="text-2xl font-bold text-DefaultGreen font-gotham">Restaurant's Information</h2> --}}
            <div class="w-11/12 mx-auto flex justify-between items-center">
                <!-- Left aligned Restaurant's Information -->
                <h2 class="text-2xl font-bold text-DefaultGreen font-gotham">Restaurant's Information</h2>

                <!-- Right aligned buttons side by side -->
                <div class="flex justify-end items-center space-x-4">
                    <button id="addOrphanageBtn"
                        class="bg-green-600 text-white py-2 px-6 rounded-md hover:bg-green-700 focus:outline-none">
                        Add Restaurant
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
                    <h3 class="text-xl font-semibold text-green-800 mb-4">Add New Restaurant</h3>
                    <form method="POST" action="{{ route('restaurant.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="restaurantName" class="block text-lg font-semibold text-gray-700">Name</label>
                            <input type="text" name="name" id="restaurantName"
                                class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                        </div>
                        <div class="mb-4">
                            <label for="restaurantEmail" class="block text-lg font-semibold text-gray-700">Email</label>
                            <input type="email" name="email" id="restaurantEmail"
                                class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                        </div>
                        <div class="mb-4">
                            <label for="restaurantAddress"
                                class="block text-lg font-semibold text-gray-700">Address</label>
                            <input type="text" name="address" id="restaurantAddress"
                                class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                        </div>
                        <div class="mb-4">
                            <label for="restaurantCity" class="block text-lg font-semibold text-gray-700">City</label>
                            <input type="text" name="city" id="restaurantCity"
                                class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                        </div>
                        <div class="mb-4">
                            <label for="restaurantContact"
                                class="block text-lg font-semibold text-gray-700">Contact</label>
                            <input type="text" name="contact" id="restaurantContact"
                                class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                        </div>
                        <div class="mb-4">
                            <label for="restaurantPassword"
                                class="block text-lg font-semibold text-gray-700">Password</label>
                            <input type="password" name="password" id="restaurantPassword"
                                class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" required>
                        </div>
                        <div class="mb-4">
                            <label for="restaurantConfirmPassword"
                                class="block text-lg font-semibold text-gray-700">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="restaurantConfirmPassword"
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
            </div>
        </div>

        <div class="bg-white rounded-lg w-11/12 mx-auto shadow-md mt-4">
            <!-- Desktop Table -->
            <div class="hidden md:block">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr class="text-left text-gray-600 font-gotham">
                            <th class="p-3"></th>
                            <th class="p-3">Resto ID</th>
                            <th class="p-3">Name</th>
                            <th class="p-3">E-mail</th>
                            <th class="p-3">Address</th>
                            <th class="p-3">City</th>
                            <th class="p-3">Contact</th>
                        </tr>
                    </thead>
                    <tbody id="userTable" class="font-brandon"></tbody>
                </table>
            </div>

            <!-- Mobile Cards -->
            <div class="md:hidden space-y-4 p-4" id="userCards"></div>
        </div>
    </div>
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
                id: 'R0001',
                name: 'RESTO 1',
                email: 'RESTO1@gmail.com',
                address: 'jl. 1',
                city: 'a',
                contact: '01910192'
            },
            {
                id: 'R0002',
                name: 'RESTO2',
                email: 'RESTO2@gmail.com',
                address: 'jl. 2',
                city: 'b',
                contact: '01910192'
            },
            {
                id: 'R0003',
                name: 'RESTO3',
                email: 'RESTO3@gmail.com',
                address: 'jl. 3',
                city: 'c',
                contact: '01910192'
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
                                                                                                                                                                                                                                                                       <a href="/updaterestaurantinfo?id=${user.id}">Update restaurant information</a>
                                                                                                                                                                                                                                                                   </li>
                                                                                                                                                                                                                                                                   <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-red-600" onclick="confirmDeleteUser('${user.id}')">Delete restaurant</li>
                                                                                                                                                                                                                                                               </ul>
                                                                                                                                                                                                                                                           </div>`
                        }
                    </td>
                     <td class="p-3">${user.id}</td>
                    <td class="p-3">${user.name}</td>
                    <td class="p-3">${user.email}</td>
                    <td class="p-3">${user.address}</td>
                    <td class="p-3">${user.city}</td>
                    <td class="p-3">${user.contact}</td>
                `;
                tableBody.appendChild(row);

                // Mobile Card
                const card = document.createElement('div');
                card.className = "bg-white p-4 rounded-lg shadow-md";
                card.innerHTML = `
                    <div class="flex justify-between items-center p-3 rounded-lg bg-white">
                        <div>
                            <h3 class="text-lg font-bold text-green-800">${user.name}</h3>
                            <p class="text-gray-600"><strong>ID:</strong> ${user.id}</p>
                            <p class="text-gray-600"><strong>Email:</strong> ${user.email}</p>
                            <p class="text-gray-600"><strong>Address:</strong> ${user.address}</p>
                            <p class="text-gray-600"><strong>City:</strong> ${user.city}</p>
                            <p class="text-gray-600"><strong>Contact:</strong> ${user.contact}</p>
                        </div>
                        <div class="relative">
                            ${deleteMode 
                                ? `<input type='checkbox' class='delete-checkbox' data-id='${user.id}'>` 
                                : `<button class="dots-menu" onclick="toggleDropdown(this)">&#x22EE;</button>
                                                                                                                                                                                                                                                            <div class="dropdown absolute right-0 w-40 mt-2 bg-white shadow-md rounded-md hidden">
                                                                                                                                                                                                                                                                <ul class="text-sm">
                                                                                                                                                                                                                                                                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                                                                                                                                                                                                                                                       <a href="/updaterestaurantinfo?id=${user.id}">Update restaurant information</a>
                                                                                                                                                                                                                                                                   </li>
                                                                                                                                                                                                                                                                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-red-600" onclick="confirmDeleteUser('${user.id}')">Delete restaurant</li>
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

            if (confirm("Are you sure you want to delete selected users?")) {
                let idsToDelete = Array.from(checkboxes).map(checkbox => checkbox.dataset.id);

                users = users.filter(user => !idsToDelete.includes(user.id));

                alert("Selected users have been deleted successfully!");
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
            if (confirm("Are you sure you want to delete this user?")) {
                users = users.filter(user => user.id !== userId);
                populateTable();
                alert("User deleted successfully!");
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
