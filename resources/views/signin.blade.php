<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-…." crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body,
        input {
            font-family: 'Brandon Grotesque Regular', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .button,
        .button2 {
            font-family: 'Gotham HTF Bold', sans-serif;
        }
    </style>

</head>

<body>
    @include('components.navbar')
    <div class="cont mt-200">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('signin.post') }}" class="sign-in-form" method="POST">
                    @csrf
                    <img src="{{ asset('assets/Image/Logo.png') }}" class="w-40 h-40" alt="logo">
                    <h2 class="text-DefaultGreen text-5xl mb-10">Sign In</h2>
                    <div class="input-field input-pass w-8/12  bg-LightGreen">
                        <i class="fas fa-envelope"></i>
                        <input class="text-DefaultWhite focus:text-DefaultWhite placeholder:text-DefaultWhite"
                            type="email" placeholder="Email" id="email" name="email" required />
                        <p class="text-red-600 text-xs w-72" id="emailError"></p>
                    </div>
                    <div class="input-field w-8/12 bg-LightGreen">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="pass" name="password" required />
                        <p class="error-message" id="passError"></p>
                    </div>
                    <button type="submit"
                        class="font-gotham-bold bg-DefaultGreen text-DefaultWhite py-2 rounded-full font-bold text-lg transition-all duration-300 ease-in-out text-center mt-4 hover:bg-[#F9F3F0] hover:text-[#00615F] cursor-pointer w-8/12">
                        Sign In
                    </button>

                </form>
                <form action="{{ route('signup') }}" class="sign-up-form" method="POST">
                    @csrf
                    <img src="{{ asset('assets/Image/Logo.png') }}" class="w-40 h-40" alt="logo">
                    <h2 class="text-DefaultGreen text-5xl mb-10">Sign Up</h2>
                    <div class="input-field w-8/12  bg-LightGreen">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Full Name" name="name" id="name" required />
                        <p class="error-message" id="nameError"></p>
                    </div>
                    <div class="input-field input-pass w-8/12  bg-LightGreen">
                        <i class="fas fa-envelope"></i>
                        <input class="text-DefaultWhite focus:text-DefaultWhite placeholder:text-DefaultWhite"
                            type="email" placeholder="Email" id="email" name="email" required />
                        <p class="error-message" id="emailError"></p>
                    </div>
                    <div class="input-field w-8/12 bg-LightGreen">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="pass" name="password" required />
                        <p class="error-message" id="passError"></p>
                    </div>
                    <button type="submit"
                        class="font-gotham-bold bg-[#00615F] text-[#F9F3F0] py-2 rounded-full font-bold text-lg transition-all duration-300 ease-in-out text-center mt-4 hover:bg-[#F9F3F0] hover:text-[#00615F] cursor-pointer w-8/12">
                        Sign Up
                    </button>

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content pl-4 pr-8">
                    <h3 class="text-3xl mt-20">Serve Smiles, One Meal at a Time—Join Us!</h3>
                    <p>Sign up today and be part of something bigger.</p>
                    <div class="font-gotham-bold w-6/12 bg-[#F9F3F0] text-[#00615F] py-2 rounded-full font-bold text-lg transition-all duration-300 ease-in-out text-center mt-4 hover:bg-[#00615F] hover:text-[#F9F3F0] cursor-pointer"
                        id="sign-up-btn">
                        Sign Up
                    </div>
                    <img src="{{ asset('assets/Image/5.png') }}" class="img-sign-in">
                </div>


            </div>
            <div class="panel right-panel">
                <div class="content text-center">
                    <h3 class="text-6xl mt-15">Registered?</h3>
                    <p>
                        Perfect! Let’s make kindness the new cool!
                    </p>
                    <div class="font-gotham-bold w-7/12 bg-[#F9F3F0] text-[#00615F] py-2 rounded-full font-bold text-lg transition-all duration-300 ease-in-out text-center hover:bg-[#00615F] hover:text-[#F9F3F0] cursor-pointer block mx-auto mt-4"
                        id="sign-in-btn">
                        Sign In
                    </div>
                    <img src="{{ asset('assets/Image/6.png') }}" class="img-sign-up">
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    @include('components.footer')

    <script src="{{ asset('js/signin.js') }}"></script>
</body>


</html>
