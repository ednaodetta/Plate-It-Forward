<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="/css/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <body class="bg-DefaultWhite font-sans pt-20 min-h-full">

    <header class="bg-DefaultWhite shadow-lg fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('assets/Image/Logo.png') }}" alt="Logo" class="h-14 w-14">
                <span class="ml-2 text-xl font-bold text-gray-800">PlateItForward</span>
            </div>

            <!-- Hamburger Menu -->
            <button id="hamburger-btn" class="block lg:hidden text-gray-600 focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>

            <!-- Navigation Links -->
            <nav id="menu" class="hidden lg:flex flex-col lg:flex-row lg:space-x-6 text-gray-600 lg:items-center">
                <ul class="flex flex-col lg:flex-row gap-y-5 lg:space-x-10">
                    <li><a href="#" class="block py-2 lg:py-0 hover:text-ijo">Home</a></li>
                    <li><a href="#" class="block py-2 lg:py-0 hover:text-ijo">Restaurants</a></li>
                    <li><a href="#" class="block py-2 lg:py-0 hover:text-ijo">My Donations</a></li>
                    <li><a href="#" class="block py-2 lg:py-0 hover:text-ijo">Contact Us</a></li>
                    <li><a href="#" class="block py-2 lg:py-0 hover:text-ijo">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="w-[90%] mx-auto mt-24 p-7 bg-whitecream rounded-lg relative">
        <a href="/userinfo" class="absolute -top-10 left-0 text-ijo font-semibold hover:underline">← Back</a>
        <h1 class="text-3xl font-bold text-ijo">User’s Information</h1>

        <form class="mt-4">
            <div class="mb-4">
                <label class="block text-lg font-semibold text-gray-700">User ID</label>
                <input id="user-id" type="text" class="w-full border border-gray-300 p-3 rounded-md bg-gray-100" readonly>
            </div>

            <div class="mb-4">
                <label class="block text-lg font-semibold text-gray-700">Name</label>
                <input id="user-name" type="text" class="w-full border border-gray-300 p-3 rounded-md">
            </div>

            <div class="mb-6">
                <label class="block text-lg font-semibold text-gray-700">E-mail</label>
                <input id="user-email" type="email" class="w-full border border-gray-300 p-3 rounded-md">
            </div>

            <div class="flex justify-end">
                <button class="bg-ijo text-white px-6 py-3 rounded-md hover:bg-teal font-semibold">SAVE</button>
            </div>
        </form>
    </main>
    
    <footer class="bg-ijo py-6 mt-8">
        <div class="container mx-auto flex flex-col items-center justify-center text-whitecream space-y-4">
            <div class="flex space-x-6">
                <a href="https://facebook.com" target="_blank" class="text-whitecream hover:text-gray-300 transition">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="https://youtube.com" target="_blank" class="text-whitecream hover:text-gray-300 transition">
                    <i class="fab fa-youtube text-xl"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="text-whitecream hover:text-gray-300 transition">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="https://whatsapp.com" target="_blank" class="text-whitecream hover:text-gray-300 transition">
                    <i class="fab fa-whatsapp text-xl"></i>
                </a>
            </div>

            <div class="flex space-x-6">
                <a href="" class="text-whitecream hover:text-gray-300 transition">Home</a>
                <a href="" class="text-whitecream hover:text-gray-300 transition">Restaurant</a>
                <a href="" class="text-whitecream hover:text-gray-300 transition">My Donations</a>
                <a href="" class="text-whitecream hover:text-gray-300 transition">Contact Us</a>
            </div>

            <div class="text-m text-whitecream font-bold">
                &copy; Plate it Forward 2025 | All Rights Reserved
            </div>
        </div>
    </footer>

    <script>
        // Function to get query parameters
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
    
        // Fetch user data from an API or local data (simulate for now)
        function fetchUserData(userId) {
            // Simulated database (replace with actual API fetch)
            const users = {
                "US001": { name: "Ashahra Aprilia Puspaanggraini", email: "ashahraaprilia@gmail.com" },
                "US002": { name: "John Doe", email: "john.doe@example.com" }
            };
    
            return users[userId] || { name: "Unknown", email: "Unknown" };
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
            document.getElementById("user-email").value = user.email;
        }
    
        // Call function on page load
        window.onload = loadUserInfo;
    </script>
    
</body>
</html>