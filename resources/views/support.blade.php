<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Information</title>
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
            <h2 class="text-2xl font-bold text-DefaultGreen">Support</h2>
            <button id="delete-btn" onclick="handleTrashButton()" class="text-red-600 hover:text-red-800 text-xl">
                🗑️
            </button>
        </div>

        <div class="bg-white rounded-lg w-11/12 mx-auto shadow-md mt-4">
            <!-- Desktop Table -->
            <div class="hidden md:block">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr class="text-left text-gray-600">
                            <th class="p-3"></th>
                            <th class="p-3">Support ID</th>
                            <th class="p-3">E-mail</th>
                            <th class="p-3">Information</th>
                            <th class="p-3 text-center">Handled</th>
                        </tr>
                    </thead>
                    <tbody id="userTable"></tbody>
                </table>
            </div>

            <!-- Mobile Cards -->
            <div class="md:hidden space-y-4 p-4" id="userCards"></div>
        </div>
    </div>

    <script>
        let users = [{
                id: 'S0001',
                email: '1@gmail.com',
                info: 'mantab'
            },
            {
                id: 'S0002',
                email: '2@gmail.com',
                info: 'mantabb'
            },
            {
                id: 'S0003',
                email: '3@gmail.com',
                info: 'mantabbb'
            }
        ];

        let deleteMode = false;

        function toggleHandled(checkbox) {
            const row = checkbox.closest('tr');
            if (checkbox.checked) {
                row.classList.add('line-through', 'text-gray-500');
            } else {
                row.classList.remove('line-through', 'text-gray-500');
            }
        }


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
                            : `<button class="hidden"></button>`
                                                                                                   
                        }
                    </td>
                     <td class="p-3">${user.id}</td>
                    <td class="p-3">${user.email}</td>
                    <td class="p-3">${user.info}</td>
                    <td class="p-3 text-center"> 
                        <input type="checkbox" class="handled-checkbox w-5 h-5" onchange="toggleHandled(this)">
                    </td>
                   
                `;
                tableBody.appendChild(row);

                // Mobile Card
                const card = document.createElement('div');
                card.className = "bg-white p-4 rounded-lg shadow-md";
                card.innerHTML = `
                    <div class="flex justify-between items-center p-3 rounded-lg bg-white">
                        <div>
                            <h3 class="text-lg font-bold text-green-800">${user.id}</h3>
                            <p class="text-gray-600"><strong>Email:</strong> ${user.email}</p>
                            <p class="text-gray-600"><strong>Address:</strong> ${user.info}</p>
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

            if (confirm("Are you sure you want to delete selected support?")) {
                let idsToDelete = Array.from(checkboxes).map(checkbox => checkbox.dataset.id);

                users = users.filter(user => !idsToDelete.includes(user.id));

                alert("Selected supports have been deleted successfully!");
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
            if (confirm("Are you sure you want to delete this support?")) {
                users = users.filter(user => user.id !== userId);
                populateTable();
                alert("Support deleted successfully!");
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
