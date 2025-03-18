<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #menu {
            background-color: #F9F3F0 !important;
            opacity: 1 !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F9F3F0] font-sans pt-20 min-h-full">

    <x-navbarAdmin></x-navbarAdmin>
    <main class="w-[90%] mx-auto mt-24 p-7 bg-[#F9F3F0] rounded-lg relative">
        <a href="/userinfo" class="absolute -top-10 left-0 text-[#00615F] font-semibold hover:underline">← Back</a>
        <h1 class="text-3xl font-bold text-[#00615F]">User’s Information</h1>

        <form class="mt-4">
            <div class="mb-4">
                <label class="block text-lg font-semibold text-gray-700">User ID</label>
                <input id="user-id" type="text" class="w-full border border-gray-300 p-3 rounded-md bg-gray-100"
                    readonly>
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
                <button class="bg-[#00615F] text-white px-6 py-3 rounded-md hover:bg-teal font-semibold"><a
                        href="/userinfo">SAVE</a></button>
            </div>
        </form>
    </main>
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
                "US001": {
                    name: "Ashahra Aprilia Puspaanggraini",
                    email: "ashahraaprilia@gmail.com"
                },
                "US002": {
                    name: "John Doe",
                    email: "johndoe@gmail.com"
                },
                "US003": {
                    name: "Jane Smith",
                    email: "janesmith@gmail.com"
                }
            };

            return users[userId] || {
                name: "Unknown",
                email: "Unknown"
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
            document.getElementById("user-email").value = user.email;
        }

        // Call function on page load
        window.onload = loadUserInfo;
    </script>

</body>

</html>
