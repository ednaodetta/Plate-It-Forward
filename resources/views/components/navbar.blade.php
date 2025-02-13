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
            class="hidden lg:flex flex-col lg:flex-row lg:space-x-6 text-gray-600 lg:items-center z-10 rounded-b-lg bg-DefaultWhite lg:bg-transparent absolute lg:relative top-20 lg:top-auto left-0 w-full lg:w-auto px-6 lg:px-0 shadow lg:shadow-none">
            <ul class="flex flex-col gap-y-5 items-end lg:flex-row lg:space-x-10">
                <li><a href="#" class="block py-2 pt-4 lg:py-0 hover:text-Teal">Home</a></li>
                <li><a href="#" class="block py-2 lg:py-0 hover:text-Teal">Restaurants</a></li>
                <li><a href="#" class="block py-2 lg:py-0 hover:text-Teal">My Donations</a></li>
                <li><a href="#" class="block py-2 pb-6 lg:py-0 hover:text-Teal">Contact Us</a></li>
                <li><a href="#" class="block py-2 pb-6 lg:py-0 hover:text-Teal">Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
    // Hamburger menu toggle functionality
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const menu = document.getElementById('menu');

    hamburgerBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden'); // Show or hide the menu
    });
</script>
