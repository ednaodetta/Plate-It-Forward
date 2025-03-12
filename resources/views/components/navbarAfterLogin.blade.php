<header class="bg-DefaultWhite shadow-xl fixed top-0 left-0 w-full z-50 font-brandon">
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

        <!-- Navigation Menu -->
        <nav id="menu"
            class="hidden absolute top-16 lg:top-0 right-6 bg-DefaultWhite w-48 shadow-lg border border-gray-300 p-2 lg:flex lg:relative lg:right-auto lg:w-auto lg:shadow-none lg:border-none lg:p-0">
            <ul class="flex flex-col lg:flex-row lg:space-x-10 text-gray-900 ">
                <li><a href="/"
                        class="block px-6 py-3 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">Home</a></li>
                <li><a href="/restoranpage"
                        class="block px-6 py-3 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">Restaurants</a>
                </li>
                <li><a href="/contact-us"
                        class="block px-6 py-3 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">Contact
                        Us</a></li>
                <li><a href="/cart"
                        class="block px-6 py-3 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">Cart</a></li>

                <!-- Mode Mobile (Profile jadi link biasa) -->
                <li class="lg:hidden">
                    <a href="/profile"
                        class="block px-6 py-3 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">Profile</a>
                </li>
                <li class="lg:hidden">
                    <a href="/my-donations"
                        class="block px-6 py-3 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">My
                        Donations</a>
                </li>
                <li class="lg:hidden hover:font-bold">
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <a href="#" class="block px-6 py-3 hover:text-Teal hover:bg-gray-100"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>

                <!-- Mode Desktop (Profile pakai dropdown) -->
                <li class="relative hidden lg:block group">
                    <a href="#"
                        class="block px-6 py-3 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">Profile</a>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute hidden group-hover:block bg-DefaultWhite shadow-lg border border-gray-300 rounded-lg w-48 mt-1 right-0">
                        <a href="/my-donations"
                            class="block px-4 py-2 text-gray-700 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">My
                            Donations</a>
                        <a href="/profile"
                            class="block px-4 py-2 text-gray-700 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">Edit
                            Profile</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-gray-700 hover:text-DefaultGreen hover:bg-gray-100 hover:font-bold">
                                Log Out
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    // Toggle menu untuk mode mobile
    document.getElementById('hamburger-btn').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script>
