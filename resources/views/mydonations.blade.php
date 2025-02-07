<!-- resources/views/mydonations.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Donations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-\u2026." crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <style>
        body {
            font-family: 'Brandon Grotesque Regular', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Gotham HTF Bold', sans-serif;
        }
    </style>
</head>

<body class="font-brandon-regular">
    @include('components.navbarbefore')
    {{-- <main class="bg-DefaultWhite mt-20 md:px-32 pt-10 sm:px-20 min-h-screen px-6">
        <!-- Title -->
        <div class="flex flex-col md:flex-row w-full mb-6">
            <h1 class="text-2xl md:text-4xl font-bold text-DefaultGreen mb-4 md:mb-0">
                My Donations
            </h1>
            <div class="md:ml-auto flex items-center">
                <img src="{{ asset('assets/Image/air-balloon.png') }}" alt="" class="w-6 h-6 md:w-8 md:h-8">
                <h2 class="text-lg md:text-2xl font-bold text-DefaultGreen ml-2">
                    4x Donated
                </h2>
            </div>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto hidden md:block">
            <table class="w-full border-separate border-spacing-y-4">
                <thead>
                    <tr class="text-gray-600 text-left text-2xl">
                        <th class="py-2 px-4 font-bold">Date</th>
                        <th class="py-2 px-4 font-bold">Restaurant</th>
                        <th class="py-2 px-4 font-bold">Transaction Detail</th>
                        <th class="py-2 px-4 font-bold">Donate to</th>
                        <th class="py-2 px-4 font-bold">Total Price</th>
                        <th class="py-2 px-4 font-bold">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="py-5 px-4 border-t border-b border-l border-[#D9D9D9] rounded-l-3xl w-[11%]">
                            Sunday,<br>01 Sept 2024
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[19%]">
                            Restaurant Contoh 1
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] w-[30%]">
                            1 Mie ayam, 1 Bakso, 1 Teh es
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[18%]">
                            Panti Asuhan Contoh 1
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[12%]">
                            IDR 5,000,000
                        </td>
                        <td
                            class="py-5 px-4 border-t border-b border-r border-[#D9D9D9] rounded-r-3xl text-DefaultGreen font-semibold w-[10%]">
                            Completed
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td class="py-5 px-4 border-t border-b border-l border-[#D9D9D9] rounded-l-3xl w-[11%]">
                            Sunday,<br>01 Oct 2024
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[19%]">
                            Restaurant Contoh 2
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] w-[30%]">
                            1 Mie ayam, 1 Bakso, 1 Teh es, 1 Pizza, 10 Nasi padang
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[18%]">
                            Panti Asuhan Contoh 1
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[12%]">
                            IDR 5,000,000
                        </td>
                        <td
                            class="py-5 px-4 border-t border-b border-r border-[#D9D9D9] rounded-r-3xl text-red-500 font-bold w-[10%]">
                            Canceled
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td class="py-5 px-4 border-t border-b border-l border-[#D9D9D9] rounded-l-3xl w-[11%]">
                            Sunday,<br>01 Nov 2024
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[19%]">
                            Restaurant Contoh 3
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] w-[30%]">
                            1 Mie ayam, 1 Bakso, 1 Teh es
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[18%]">
                            Panti Asuhan Contoh 1
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[12%]">
                            IDR 5,000,000
                        </td>
                        <td
                            class="py-5 px-4 border-t border-b border-r border-[#D9D9D9] rounded-r-3xl text-DefaultGreen font-bold w-[10%]">
                            Completed
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr>
                        <td class="py-5 px-4 border-t border-b border-l border-[#D9D9D9] rounded-l-3xl w-[11%]">
                            Sunday,<br>01 Dec 2024
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[19%]">
                            Restaurant Contoh 4
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] w-[30%]">
                            1 Mie ayam, 1 Bakso, 1 Teh es
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[18%]">
                            Panti Asuhan Contoh 1
                        </td>
                        <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold w-[12%]">
                            IDR 5,000,000
                        </td>
                        <td
                            class="py-5 px-4 border-t border-b border-r border-[#D9D9D9] rounded-r-3xl text-yellow-500 font-bold w-[10%]">
                            On Process
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile View -->
        <div class="md:hidden">
            <!-- Row 1 Mobile -->
            <div class="border border-[#D9D9D9] rounded-lg p-4 mb-4 shadow">
                <!-- Atas -->
                <div class="mb-2">
                    <p class="font-bold text-lg">Restaurant Contoh 1</p>
                    <p class="text-gray-600">Sunday, 01 Sept 2024</p>
                    <p class="text-sm">1 Mie ayam, 1 Bakso, 1 Teh es</p>
                </div>
                <!-- Garis Pemisah -->
                <div class="border-t border-[#D9D9D9] my-2"></div>
                <!-- Bawah -->
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm font-bold">Panti Asuhan Contoh 1</p>
                        <p class="font-bold">IDR 5,000,000</p>
                    </div>
                    <p class="text-DefaultGreen font-bold">Completed</p>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="border border-[#D9D9D9] rounded-lg p-4 mb-4 shadow">
                <!-- Atas -->
                <div class="mb-2">
                    <p class="font-bold text-lg">Restaurant Contoh 2</p>
                    <p class="text-gray-600">Sunday, 01 Oct 2024</p>
                    <p class="text-sm">1 Mie ayam, 1 Bakso, 1 Teh es, 1 Pizza, 10 Nasi padang</p>
                </div>
                <!-- Garis Pemisah -->
                <div class="border-t border-[#D9D9D9] my-2"></div>
                <!-- Bawah -->
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm font-bold">Panti Asuhan Contoh 1</p>
                        <p class="font-bold">IDR 5,000,000</p>
                    </div>
                    <p class="text-red-500 font-bold">Canceled</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="border border-[#D9D9D9] rounded-lg p-4 mb-4 shadow">
                <!-- Atas -->
                <div class="mb-2">
                    <p class="font-bold text-lg">Restaurant Contoh 3</p>
                    <p class="text-gray-600">Sunday, 01 Nov 2024</p>
                    <p class="text-sm">1 Mie ayam, 1 Bakso, 1 Teh es</p>
                </div>
                <!-- Garis Pemisah -->
                <div class="border-t border-[#D9D9D9] my-2"></div>
                <!-- Bawah -->
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm font-bold">Panti Asuhan Contoh 1</p>
                        <p class="font-bold">IDR 5,000,000</p>
                    </div>
                    <p class="text-DefaultGreen font-bold">Completed</p>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="border border-[#D9D9D9] rounded-lg p-4 mb-4 shadow">
                <!-- Atas -->
                <div class="mb-2">
                    <p class="font-bold text-lg">Restaurant Contoh 4</p>
                    <p class="text-gray-600">Sunday, 01 Dec 2024</p>
                    <p class="text-sm">1 Mie ayam, 1 Bakso, 1 Teh es</p>
                </div>
                <!-- Garis Pemisah -->
                <div class="border-t border-[#D9D9D9] my-2"></div>
                <!-- Bawah -->
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm font-bold">Panti Asuhan Contoh 1</p>
                        <p class="font-bold">IDR 5,000,000</p>
                    </div>
                    <p class="text-yellow-500 font-bold">On Process</p>
                </div>
            </div>


        </div>

    </main> --}}

    <main
        class = "bg-DefaultGreen text-DefaultWhite text-center md:px-32 pt-10 sm:px-20 min-h-screen px-6 flex flex-col items-center justify-center">
        <img src="{{ asset('assets/Image/mydonation.png') }}" class="sm:w-80 sm:h-80 w-64 h-64"alt="">
        <h2 class="sm:text-3xl text-xl">Haven't tried Plate it Forward?</h2>
        <p class="sm:text-xl text-m">Join us in spreading kindness—every plate matters!</p>
    </main>



    @include('components.footer')



</body>

</html>
