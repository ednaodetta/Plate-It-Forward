<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">

        <title>Restaurant Menu Page</title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="/css/tailwind.css" rel="stylesheet">
    <style>
       
   
    :root {
      --background: #f9f3f0;
      --border-color: #00615f;
      --text-dark: #333333;
      --primary: #00615f;
      --secondary: #dfd7d3;
      --accent: #00885c;
      --boxbg: #00615F1A;
    }

    .custom-box {
      background-color: #ffffff;
      border: 2px solid var(--border-color);
      border-radius: 8px;
      padding: 16px;
    }

    .donate-button {
      background-color: var(--primary);
      color: white;
      font-weight: bold;
      font-size: 1rem;
      padding: 12px;
      border-radius: 8px;
      text-align: center;
    }


    </style>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif
    </head>
    <body class="w-full font-brandon ">
    <div class="w-[90%] mx-auto p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-4">
      <a href="/menupage"><button class="text-[var(--primary)] text-xl font-bold">&larr;</button></a>
      <h1 class="text-[var(--primary)] font-bold text-xl">PAYMENT</h1>
      <div></div>
    </div>

    <!-- Store Name -->
    <h2 class="text-center text-gray-500 text-lg mb-6">McDonald’s, Sentul City</h2>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Orders Section -->
      <div class="bg-[var(--boxbg)] col-span-2 custom-box">
        <div class="flex justify-between items-center">
          <h3 class="text-[var(--text-dark)] font-bold text-lg">Orders</h3>
          <a href="/menupage" class="text-[var(--primary)] text-sm font-medium">Edit Shopping Cart</a>
        </div>
        <div class="mt-4 space-y-4">
          <!-- Item 1 -->
          <div class="flex justify-between items-center">
            <div class="flex items-center">
              <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/21c4f66a-e600-44f5-bae2-3488e17d979d_TPO-111226_1.jpg?auto=format" alt="Product" class="w-20 h-20 rounded-md">
              <div class="ml-4">
                <h4 class="text-[var(--text-dark)] font-bold">PaNas 1 Ayam McD Gulai Spicy</h4>
                <p class="text-gray-500 text-sm">Paha</p>
                <p class="text-gray-500 text-sm">Quantity: 1 items</p>
              </div>
            </div>
            <div>
              <p class="text-[var(--text-dark)] font-bold">Rp42.500,00</p>
              <p class="text-gray-500 text-sm">Rp42.500,00 per items</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Section (Summary, Payment Method, Button) -->
      <div class="space-y-6">
        <!-- Summary Section -->
        <div class="bg-[var(--boxbg)] custom-box">
          <h3 class="text-[var(--text-dark)] font-bold text-lg">Summary</h3>
          <p class="text-gray-500 text-sm mt-1">The total cost consist of the tax and the delivery charge</p>
          <div class="mt-4 space-y-4">
            <div class="flex justify-between">
              <span class="text-gray-500">Subtotal</span>
              <span class="text-[var(--text-dark)] font-bold">Rp85.000,00</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500">Delivery</span>
              <span class="text-[var(--text-dark)] font-bold">Rp12.000,00</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500">Tax</span>
              <span class="text-[var(--text-dark)] font-bold">Rp3.000,00</span>
            </div>
          </div>
          <hr class="border-t-[var(--border-color)] my-4">
          <div class="flex justify-between text-lg font-bold">
            <span>Total</span>
            <span class="text-[var(--primary)]">Rp100.000,00</span>
          </div>
        </div>

        <div class="bg-[var(--boxbg)] custom-box">
          <h3 class="text-[var(--text-dark)] font-bold text-lg">Payment Method</h3>
        
          <!-- Hidden default select for form submission -->
          <select id="payment-method" class="hidden">
            <option value="gopay" data-image="http://localhost/inimenupage/assets/Image/Gopay.png">GoPay</option>
            <option value="ovo" data-image="https://via.placeholder.com/30x30.png?text=OVO">OVO</option>
            <option value="dana" data-image="https://via.placeholder.com/30x30.png?text=DANA">DANA</option>
            <option value="shopeepay" data-image="https://via.placeholder.com/30x30.png?text=ShopeePay">ShopeePay</option>
            <option value="linkaja" data-image="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/LinkAja.svg/120px-LinkAja.svg.png">LinkAja</option>
            <option value="virtual-account" data-image="https://via.placeholder.com/30x30.png?text=VA">Virtual Account</option>
            <option value="credit-debit-card" data-image="https://via.placeholder.com/30x30.png?text=Card">Debit/Credit Card</option>
          </select>
        
          <!-- Custom dropdown container -->
          <div id="custom-dropdown" class="relative mt-4">
            <button
              id="dropdown-btn"
              class="font-bold flex items-center justify-between w-full p-2 rounded-md bg-[var(--boxbg)]"
            >
              <span class="flex items-center gap-2">
                <img
                  id="selected-image"
                  src="https://via.placeholder.com/30x30.png?text=GoPay"
                  alt="Selected Payment Logo"
                  class="w-6 h-6"
                />
                <span id="selected-text">GoPay</span>
              </span>
              <span>&#9660;</span>
            </button>
        
            <!-- Dropdown menu -->
            <ul
              id="dropdown-menu"
              class="absolute z-10 hidden w-full mt-2 bg-[#b6cecd] border border-gray-300 rounded-md shadow-lg"
            >
              <li
                class="flex items-center gap-2 p-2 cursor-pointer bg-[var(--boxbg)] hover:bg-gray-100"
                data-value="gopay"
                data-image="https://via.placeholder.com/30x30.png?text=GoPay"
              >
                <img src="public/assets/Image/Gopay.png" alt="GoPay Logo" class="w-6 h-6" />
                GoPay
              </li>
              <li
                class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100"
                data-value="ovo"
                data-image="https://via.placeholder.com/30x30.png?text=OVO"
              >
                <img src="https://via.placeholder.com/30x30.png?text=OVO" alt="OVO Logo" class="w-6 h-6" />
                OVO
              </li>
              <li
                class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100"
                data-value="dana"
                data-image="https://via.placeholder.com/30x30.png?text=DANA"
              >
                <img src="https://via.placeholder.com/30x30.png?text=DANA" alt="DANA Logo" class="w-6 h-6" />
                DANA
              </li>
              <li
                class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100"
                data-value="shopeepay"
                data-image="https://via.placeholder.com/30x30.png?text=ShopeePay"
              >
                <img
                  src="https://via.placeholder.com/30x30.png?text=ShopeePay"
                  alt="ShopeePay Logo"
                  class="w-6 h-6"
                />
                ShopeePay
              </li>
              <li
                class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100"
                data-value="linkaja"
                data-image="https://via.placeholder.com/30x30.png?text=LinkAja"
              >
                <img src="https://via.placeholder.com/30x30.png?text=LinkAja" alt="LinkAja Logo" class="w-6 h-6" />
                LinkAja
              </li>
              <li
                class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100"
                data-value="virtual-account"
                data-image="https://via.placeholder.com/30x30.png?text=VA"
              >
                <img src="https://via.placeholder.com/30x30.png?text=VA" alt="Virtual Account Logo" class="w-6 h-6" />
                Virtual Account
              </li>
              <li
                class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100"
                data-value="credit-debit-card"
                data-image="https://via.placeholder.com/30x30.png?text=Card"
              >
                <img src="https://via.placeholder.com/30x30.png?text=Card" alt="Card Logo" class="w-6 h-6" />
                Debit/Credit Card
              </li>
            </ul>
          </div>
        
          <!-- Virtual Account Options -->
          <div id="virtual-account-options" class="hidden mt-4">
            <label for="bank" class="block text-sm font-medium text-gray-700">Choose Bank</label>
            <select id="bank" class="w-full mt-2 p-2 border rounded-md">
              <option value="bca">BCA</option>
              <option value="bni">BNI</option>
              <option value="mandiri">Mandiri</option>
              <option value="bri">BRI</option>
            </select>
          </div>
        
          <!-- Debit/Credit Card Input -->
          <div id="card-details" class="hidden mt-4">
            <label for="card-number" class="block text-sm font-medium text-gray-700">Card Number</label>
              <input type="text" id="card-number" class="w-full mt-2 p-2 border rounded-md" placeholder="1234 5678 9123 4567">
              <label for="expiry-date" class="block text-sm font-medium text-gray-700 mt-4">Expiry Date</label>
              <input type="text" id="expiry-date" class="w-full mt-2 p-2 border rounded-md" placeholder="MM/YY">
          </div>
        </div>
        

        <!-- Donate Button -->
        <div class="text-center">
          <button class="donate-button w-full">Donate Now!</button>
        </div>
      </div>
    </div>
  </div>

 
    </body>
</html>
<script>
  // Toggle dropdown menu visibility
  const dropdownBtn = document.getElementById('dropdown-btn');
  const dropdownMenu = document.getElementById('dropdown-menu');
  const paymentMethodSelect = document.getElementById('payment-method');
  const virtualAccountOptions = document.getElementById('virtual-account-options');
  const cardDetails = document.getElementById('card-details');

  dropdownBtn.addEventListener('click', () => {
    // Toggle visibility of dropdown menu
    dropdownMenu.classList.toggle('hidden');
  });

  // Select a payment option from the dropdown
  const dropdownItems = document.querySelectorAll('#dropdown-menu li');
  dropdownItems.forEach(item => {
    item.addEventListener('click', () => {
      const selectedValue = item.getAttribute('data-value');
      const selectedImage = item.getAttribute('data-image');
      const selectedText = item.textContent.trim();

      // Update button text and image
      document.getElementById('selected-image').src = selectedImage;
      document.getElementById('selected-text').textContent = selectedText;

      // Close the dropdown menu
      dropdownMenu.classList.add('hidden');

      // Update hidden select input value
      paymentMethodSelect.value = selectedValue;

      // Hide all additional options by default
      virtualAccountOptions.classList.add('hidden');
      cardDetails.classList.add('hidden');

      // Show relevant payment options based on selection
      if (selectedValue === 'virtual-account') {
        virtualAccountOptions.classList.remove('hidden');
      } else if (selectedValue === 'credit-debit-card') {
        cardDetails.classList.remove('hidden');
      }
    });
  });
</script>

















