<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #menu {
            background-color: #F9F3F0 !important;
            opacity: 1 !important;
         }
    </style>
</head>

<body class="bg-[#F9F3F0] font-sans pt-20 min-h-full">

    <header class="bg-[#F9F3F0] shadow-xl fixed top-0 left-0 w-full z-50">
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
                    <li><a href="/" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Dashboard</a></li>
                    <li><a href="restoranpage" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Order</a>
                    </li>
                    <li><a href="my-donations" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">User</a>
                    </li>
                    <li><a href="contact-us" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Restaurant</a></li>
                    <li><a href="contact-us" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Orphanage</a></li>
                    <li><a href="contact-us" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100">Support</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="w-[90%] mx-auto mt-24 p-7 bg-whitecream rounded-lg relative">
        <a href="/panti" class="absolute -top-10 left-0 text-[#00615F] font-semibold hover:underline">← Back</a>
        <h1 class="text-3xl font-bold text-[#00615F]">Orphanage's Information</h1>

        <form class="mt-4">
            <div class="mb-4">
                <label class="block text-lg font-semibold text-gray-700">Orphanage Name</label>
                <input id="user-id" type="text" class="w-full border border-gray-300 p-3 rounded-md bg-gray-100"
                    readonly>
            </div>

            <div class="mb-4">
                <label class="block text-lg font-semibold text-gray-700">Location</label>
                <input id="user-name" type="text" class="w-full border border-gray-300 p-3 rounded-md">
            </div>

            <div class="mb-6">
                <label class="block text-lg font-semibold text-gray-700">Total Donation</label>
                <input id="user-donation" type="text" class="w-full border border-gray-300 p-3 rounded-md"
                    pattern="Rp\.\s?\d{1,3}(\.\d{3})*(,\d{2})?" placeholder="Rp. 1.000.000,00" required>
                <small class="text-gray-500">Format: Rp. 1.000.000,00</small>
            </div>

            <div class="flex justify-end">
                <button class="bg-[#00615F] text-white px-6 py-3 rounded-md hover:bg-teal font-semibold"><a href="/panti">SAVE</a></button>
            </div>
        </form>
    </main>

    <footer class="bg-[#00615F] text-white text-center py-20">
        <!-- Icons Section -->
        <div class="flex justify-center space-x-6 mb-3">
            <a href="#" class="text-xl hover:text-gray-300">
                <i class="fab fa-facebook"></i> <!-- Replace with actual icon -->
            </a>
            <a href="#" class="text-xl hover:text-gray-300">
                <i class="fab fa-youtube"></i> <!-- Replace with actual icon -->
            </a>
            <a href="#" class="text-xl hover:text-gray-300">
                <i class="fab fa-x"></i> <!-- Replace with actual icon -->
            </a>
            <a href="#" class="text-xl hover:text-gray-300">
                <i class="fab fa-instagram"></i> <!-- Replace with actual icon -->
            </a>
            <a href="#" class="text-xl hover:text-gray-300">
                <i class="fab fa-whatsapp"></i> <!-- Replace with actual icon -->
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="flex justify-center space-x-8 mb-3">
            <a href="/" class="text-base hover:underline">Home</a>
            <a href="/restaurants" class="text-base hover:underline">Restaurant</a>
            <a href="/my-donations" class="text-base hover:underline">My Donations</a>
            <a href="/contact-us" class="text-base hover:underline">Contact Us</a>
        </div>

        <!-- Copyright Text -->
        <div class="text-sm">
            © Plate it Forward 2025 | All Rights Reserved
        </div>
    </footer>

    <script>
        // Hamburger menu toggle functionality
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const menu = document.getElementById('menu');

        hamburgerBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden'); // Show or hide the menu
        });

        // Function to get query parameters
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Fetch user data from an API or local data (simulate for now)
        function fetchUserData(userId) {
            // Simulated database (replace with actual API fetch)
            const users = {
                "Panti Asuhan Adzkiyah Alkhair": {
                    name: "Jakarta",
                    donation: "Rp. 2.986.000,00"
                },
                "The Jodie O'Shea Orphanage": {
                    name: "Bekasi",
                    donation: "Rp. 1.726.000,00"
                },
                "Panti Asuhan Miftahul Falah": {
                    name: "Cengkareng",
                    donation: "Rp. 4.500.000,00"
                }
            };

            return users[userId] || {
                name: "Unknown",
                donation: "Rp. 0,00"
            };
        }

        // Main function to update form fields dynamically
        function loadUserInfo() {
            const userId = getQueryParam("id");
            if (!userId) {
                alert("User ID not found!");
                return;
            }

            // Fetch user data
            const user = fetchUserData(userId);

            // Update form fields
            document.getElementById("user-id").value = userId;
            document.getElementById("user-name").value = user.name;
            document.getElementById("user-donation").value = user.donation;
        }

        // Call function on page load
        window.onload = loadUserInfo;
    </script>

</body>

</html>
