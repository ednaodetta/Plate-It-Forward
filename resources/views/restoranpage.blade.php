
<style>
  @layer utilities {
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none; /* Internet Explorer */
        scrollbar-width: none; /* Firefox */
    }
}
</style>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif
        
    </head>
    <body class="bg-DefaultWhite">
      <!-- Content Container -->
      <div class="relative bg-bgbang bg-no-repeat bg-cover bg-center h-[80vh] flex flex-col justify-center items-center text-center">
          
        <!-- Image Above Title -->
        <div class="flex flex-col justify-end items-center h-[40vh] w-screen">
          <img 
            src="{{ asset('assets/Image/logo.png') }}" 
            alt="Above Title Image" 
            class="relative top-[-39px] w-[90%] h-[50%] sm:w-[40%] md:w-[35%] lg:w-[30%] xl:w-[25%] object-contain">
        </div>

        <!-- Title & Description -->
        <div class="relative top-[-50px] z-20 text-white mt-2 px-4 sm:px-8 w-[70vw]">
          <h1 class="text-4xl sm:text-5xl font-bold font-brandon">A small act, a big impact!</h1>
          <p class="mt-4 w-4/5 mx-auto sm:w-2/3 text-lg font-brandon">
            Plate It Forward transforms small acts into big impacts by partnering with restaurants providing meals for those in need, creating employment opportunities.
          </p>
        </div>

        <!-- Search Bar -->
        <div class=" absolute z-20 bottom-[-49px] w-full flex justify-center items-center mt-10 px-4 sm:px-8">
          <div class="flex flex-col bg-white rounded-[20px] p-4 shadow-lg w-[90%] sm:w-[80%] md:w-[60%] lg:w-[50%] xl:w-[40%]">

            <!-- Label -->
            <div class="mb-2 flex">
              <label for="location" class="text-black font-semibold text-lg font-brandon">Location</label>
            </div>

            <!-- Search Bar -->
            <div class="flex items-center">
              <!-- Input -->
              <input 
                type="text" 
                id="location" 
                placeholder="Type a location" 
                class="flex-1 py-2 px-4 rounded-full border border-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300"
              />

              <!-- Search Button -->
              <button 
                class="ml-2 px-4 py-2 bg-teal-700 text-white font-semibold rounded-full hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 font-BrandonGrotesque">
                Search
              </button>
            </div>
          </div>
        </div>
      </div>

          <div>
              <h3 class="flex justify-center pt-28 text-4xl font-brandon">Choose From Places</h3>
          </div>
          <div class="flex justify-center pt-7 pb-7 gap-20 max-[1317px]:gap-8 overflow-hidden max-[1317px]:flex-wrap max-[430px]:gap-4">
            <!-- Item Jakarta -->
            <div class="text-center max-[430px]:w-1/3">
                <div class="max-[1317px]:w-60 max-[1317px]:h-60 max-[430px]:w-20 max-[430px]:h-20 w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-gray">
                    <img src="{{ asset('assets/Image/keram_telor.png') }}" alt="Jakarta" class="w-full h-full object-cover">
                </div>
                <p class="mt-2 text-lg font-semibold italic font-BrandonGrotesque max-[1317px]:text-[30px] max-[430px]:text-[15px]">Jakarta</p>
            </div>

            <!-- Item Bali -->
            <div class="text-center max-[430px]:w-1/3">
                <div class="max-[1317px]:w-60 max-[1317px]:h-60 max-[430px]:w-20 max-[430px]:h-20 w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-gray">
                    <img src="{{ asset('assets/Image/sate_lilit.png') }}" alt="Bali" class="w-full h-full object-cover">
                </div>
                <p class="mt-2 text-lg font-semibold italic font-BrandonGrotesque max-[1317px]:text-[30px] max-[430px]:text-[15px]">Bali</p>
            </div>

            <!-- Item Palembang -->
            <div class="text-center max-[430px]:w-1/3">
                <div class="max-[1317px]:w-60 max-[1317px]:h-60 max-[430px]:w-20 max-[430px]:h-20 w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-gray">
                    <img src="{{ asset('assets/Image/pempek.png') }}" alt="Palembang" class="w-full h-full object-cover">
                </div>
                <p class="mt-2 text-lg font-semibold italic font-BrandonGrotesque max-[1317px]:text-[30px] max-[430px]:text-[15px]">Palembang</p>
            </div>

            <!-- Item Medan -->
            <div class="text-center max-[430px]:w-1/3">
                <div class="max-[1317px]:w-60 max-[1317px]:h-60 max-[430px]:w-20 max-[430px]:h-20 w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-gray">
                    <img src="{{ asset('assets/Image/soto.png') }}" alt="Medan" class="w-full h-full object-cover">
                </div>
                <p class="mt-2 text-lg font-semibold italic font-BrandonGrotesque max-[1317px]:text-[30px] max-[430px]:text-[15px]">Medan</p>
            </div>

            <!-- Item Semarang -->
            <div class="text-center max-[430px]:w-1/3">
                <div class="max-[1317px]:w-60 max-[1317px]:h-60 max-[430px]:w-20 max-[430px]:h-20 w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-gray-300">
                    <img src="{{ asset('assets/Image/lumpia.png') }}" alt="Semarang" class="w-full h-full object-cover">
                </div>
                <p class="mt-2 text-lg font-semibold italic font-BrandonGrotesque max-[1317px]:text-[30px] max-[430px]:text-[15px]">Semarang</p>
            </div>

            <!-- Item Surabaya -->
            <div class="text-center max-[430px]:w-1/3">
                <div class="max-[1317px]:w-60 max-[1317px]:h-60 max-[430px]:w-20 max-[430px]:h-20 w-40 h-40 mx-auto rounded-full overflow-hidden border-2 border-gray-300">
                    <img src="{{ asset('assets/Image/pecel.png') }}" alt="Surabaya" class="w-full h-full object-cover">
                </div>
                <p class="mt-2 text-lg font-semibold italic font-BrandonGrotesque max-[1317px]:text-[30px] max-[430px]:text-[15px]">Surabaya</p>
            </div>
        </div>

          <div>
              <h3 class="flex justify-center pt-10 text-4xl font-brandon">Flash Sale</h3>
          </div>

          <div>
              <h1 class="flex justify-center pt-10 text-2xl font-brandon max-[500px]:text-xl">Come on, choose food that is interesting to you</h1>
          </div>

        <!-- Container -->
        <div class="relative overflow-hidden pt-5">
            <!-- Wrapper -->
            <div class="flex overflow-x-auto no-scrollbar gap-5 px-5">
                <!-- Card 1 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 hover:scale-105 hover:bg-gray-100 relative">
                    <!-- Logo Discount -->
                    <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                        45% OFF
                    </div>
                    <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg" alt="Mie Ayam Kampung" />
                    <div class="p-4">
                        <h3 class="text-lg font-semibold italic">Mie Ayam Kampung, Bogor</h3>
                        <p class="text-sm text-gray-500 mb-2">Bakmie</p>
                        <div class="flex items-center mb-3">
                            <span class="text-yellow-400">★</span>
                            <span class="text-gray-700 font-semibold ml-1">4.5</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-sm font-medium">$$</span>
                            <span class="ml-2 text-sm">(40K+)</span>
                        </div>
                    </div>
                </div>

        <!-- Card 2 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 hover:scale-105 hover:bg-gray-100 relative">
            <!-- Logo Discount -->
            <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">45% OFF</div>
            <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg" alt="Mie Ayam Kampung" />
            <div class="p-4">
                <h3 class="text-lg font-semibold italic">Mie Ayam Kampung, Bogor</h3>
                <p class="text-sm text-gray-500 mb-2">Bakmie</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★</span>
                    <span class="text-gray-700 font-semibold ml-1">4.5</span>
                </div>
                <div class="flex items-center text-gray-600">
                    <span class="text-sm font-medium">$$</span>
                    <span class="ml-2 text-sm">(40K+)</span>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 hover:scale-105 hover:bg-gray-100 relative">
            <!-- Logo Discount -->
            <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">45% OFF</div>
            <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg" alt="Mie Ayam Kampung" />
            <div class="p-4">
                <h3 class="text-lg font-semibold italic">Mie Ayam Kampung, Bogor</h3>
                <p class="text-sm text-gray-500 mb-2">Bakmie</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★</span>
                    <span class="text-gray-700 font-semibold ml-1">4.5</span>
                </div>
                <div class="flex items-center text-gray-600">
                    <span class="text-sm font-medium">$$</span>
                    <span class="ml-2 text-sm">(40K+)</span>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 hover:scale-105 hover:bg-gray-100 relative">
            <!-- Logo Discount -->
            <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">45% OFF</div>
            <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg" alt="Mie Ayam Kampung" />
            <div class="p-4">
                <h3 class="text-lg font-semibold italic">Mie Ayam Kampung, Bogor</h3>
                <p class="text-sm text-gray-500 mb-2">Bakmie</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★</span>
                    <span class="text-gray-700 font-semibold ml-1">4.5</span>
                </div>
                <div class="flex items-center text-gray-600">
                    <span class="text-sm font-medium">$$</span>
                    <span class="ml-2 text-sm">(40K+)</span>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="flex-shrink-0 w-80 bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 hover:scale-105 hover:bg-gray-100 relative">
            <!-- Logo Discount -->
            <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">45% OFF</div>
            <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg" alt="Mie Ayam Kampung" />
            <div class="p-4">
                <h3 class="text-lg font-semibold italic">Mie Ayam Kampung, Bogor</h3>
                <p class="text-sm text-gray-500 mb-2">Bakmie</p>
                <div class="flex items-center mb-3">
                    <span class="text-yellow-400">★</span>
                    <span class="text-gray-700 font-semibold ml-1">4.5</span>
                </div>
                <div class="flex items-center text-gray-600">
                    <span class="text-sm font-medium">$$</span>
                    <span class="ml-2 text-sm">(40K+)</span>
                </div>
            </div>
        </div>
    </div>

  </div>
        <div>
          <h3 class="flex justify-center pt-10 text-4xl font-brandon max-[500px]:text-xl max-[529px]:text-xl">RECOMMENDED RESTAURANT</h3>
        </div>

        <!-- Container -->
      <div class="flex flex-wrap gap-10 justify-center m-9">
        <!-- Card -->
        <div class="w-full sm:w-80 md:w-96 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCvsiWPunf-Yh1MTqZcv8sGKooajw" alt="Mie Ayam Kampung">
          <div class="p-4">
            <h3 class="text-lg font-semibold italic font-BrandonGrotesque">Mie Ayam Kampung, Bogor</h3>
            <p class="text-sm text-gray-500 mb-2">Bakmie</p>
            <div class="flex items-center mb-3">
              <span class="text-yellow-400">★</span>
              <span class="text-gray-700 font-semibold ml-1">4.5</span>
            </div>
            <div class="flex items-center text-gray-600">
              <span class="text-sm font-medium">$$</span>
              <span class="ml-2 text-sm">(40K+)</span>
            </div>
          </div>
        </div>

        <!-- Duplicate Cards -->
        <div class="w-full sm:w-80 md:w-96 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCvsiWPunf-Yh1MTqZcv8sGKooajw" alt="Mie Ayam Kampung">
          <div class="p-4">
            <h3 class="text-lg font-semibold italic font-BrandonGrotesque">Mie Ayam Kampung, Bogor</h3>
            <p class="text-sm text-gray-500 mb-2">Bakmie</p>
            <div class="flex items-center mb-3">
              <span class="text-yellow-400">★</span>
              <span class="text-gray-700 font-semibold ml-1">4.5</span>
            </div>
            <div class="flex items-center text-gray-600">
              <span class="text-sm font-medium">$$</span>
              <span class="ml-2 text-sm">(40K+)</span>
            </div>
          </div>
        </div>

        <!-- Duplicate Cards -->
        <div class="w-full sm:w-80 md:w-96 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCvsiWPunf-Yh1MTqZcv8sGKooajw" alt="Mie Ayam Kampung">
          <div class="p-4">
            <h3 class="text-lg font-semibold italic font-BrandonGrotesque">Mie Ayam Kampung, Bogor</h3>
            <p class="text-sm text-gray-500 mb-2">Bakmie</p>
            <div class="flex items-center mb-3">
              <span class="text-yellow-400">★</span>
              <span class="text-gray-700 font-semibold ml-1">4.5</span>
            </div>
            <div class="flex items-center text-gray-600">
              <span class="text-sm font-medium">$$</span>
              <span class="ml-2 text-sm">(40K+)</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Container -->
      <div class="flex flex-wrap gap-10 justify-center m-9">
        <!-- Card -->
        <div class="w-full sm:w-80 md:w-96 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCvsiWPunf-Yh1MTqZcv8sGKooajw" alt="Mie Ayam Kampung">
          <div class="p-4">
            <h3 class="text-lg font-semibold italic font-BrandonGrotesque">Mie Ayam Kampung, Bogor</h3>
            <p class="text-sm text-gray-500 mb-2">Bakmie</p>
            <div class="flex items-center mb-3">
              <span class="text-yellow-400">★</span>
              <span class="text-gray-700 font-semibold ml-1">4.5</span>
            </div>
            <div class="flex items-center text-gray-600">
              <span class="text-sm font-medium">$$</span>
              <span class="ml-2 text-sm">(40K+)</span>
            </div>
          </div>
        </div>

        <!-- Duplicate Cards -->
        <div class="w-full sm:w-80 md:w-96 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCvsiWPunf-Yh1MTqZcv8sGKooajw" alt="Mie Ayam Kampung">
          <div class="p-4">
            <h3 class="text-lg font-semibold italic font-BrandonGrotesque">Mie Ayam Kampung, Bogor</h3>
            <p class="text-sm text-gray-500 mb-2">Bakmie</p>
            <div class="flex items-center mb-3">
              <span class="text-yellow-400">★</span>
              <span class="text-gray-700 font-semibold ml-1">4.5</span>
            </div>
            <div class="flex items-center text-gray-600">
              <span class="text-sm font-medium">$$</span>
              <span class="ml-2 text-sm">(40K+)</span>
            </div>
          </div>
        </div>

        <!-- Duplicate Cards -->
        <div class="w-full sm:w-80 md:w-96 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
          <img class="w-full h-48 object-cover" src="https://i.ytimg.com/vi/QiZt1ALYVEQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCvsiWPunf-Yh1MTqZcv8sGKooajw" alt="Mie Ayam Kampung">
          <div class="p-4">
            <h3 class="text-lg font-semibold italic font-BrandonGrotesque">Mie Ayam Kampung, Bogor</h3>
            <p class="text-sm text-gray-500 mb-2">Bakmie</p>
            <div class="flex items-center mb-3">
              <span class="text-yellow-400">★</span>
              <span class="text-gray-700 font-semibold ml-1">4.5</span>
            </div>
            <div class="flex items-center text-gray-600">
              <span class="text-sm font-medium">$$</span>
              <span class="ml-2 text-sm">(40K+)</span>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
