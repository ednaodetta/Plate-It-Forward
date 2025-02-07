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
        /* Custom CSS for half-circle cart button */
        .half-circle {
            width: 50px;
            height: 100px;
            background-color: #00615F;
            border-radius: 50px 0 0 50px;
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cartmenulist{
            box-shadow: 0px 0px 5px 0px black;
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
    <section class="menu w-full flex">
     
     <div class="cardlist  bg-whitecream w-full items-center justif-center flex flex-col gap-[50px] ">
         <div class="resto w-full h-[250px] bg-whitecream flex flex-col items-center">
             <div class="resto_header w-full h-[180px] bg-whitecream flex justify-center items-center gap-[1%]">
                 <div class="resto_pic w-[135px] bg-whitecream h-[125-x] justify-center rounded-[10px] shadow-[1px_1px_1px_#666]">
                     <img class="w-full h-full object-cover rounded-[10px]" src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/8ceb09b1-2ff8-4e92-9e84-ae9eb8c70dd2_brand-image_1733091199022.jpg?auto=format" alt="McDonald's, Sentul City">
                 </div>
                 <div class="resto_desc flex flex-col justify-start w-[75%] gap-[3vh]">
                     <div class="resto_name bg-whitecream w-full h-[50px] text-[30px] bold-text items-center text-black">McDonald's, Sentul City</div>
                     <div class="resto_category bg-whitecream h-[50px] w-full left-[200px] text-[20px] text-[#888888] items-center">Sweets, Snacks, Fast Food</div>
                 </div>
             </div> 
             <div class="resto_rate bg-DefaultGreen h-[70px] flex w-[85%] rounded-[10px] items-center shadow-[1px_1px_1px_#666]" >
                 <div class="review flex flex-row justify-center items-center gap-5px h-full w-[100px] bg-transparent text-yellow-300 rounded-tl-[10px] rounded-bl-[10px] gap-1" >
                     <span class="fa fa-star checked"></span>
                     <p class="text-white bold-text text-lg">4.7</p>
                 </div>
                 <div class="price flex flex-col justify-center items-center h-[85%] w-[100px] bg-transparent border-l border-r border-white " >
                     <div class="label text-[20px] flex flex-row gap-[2px]">
                         <p1 class="text-white text-bold">$</p1>
                         <p1 class="text-white text-bold">$</p1>
                         <p1 class="text-[#D9D9D9] text-bold">$</p1>
                         <p2 class="text-[#D9D9D9] text-bold">$</p2>
                     </div>
                     <p class="text-white text-bold">40k - 100k</p>
                 </div>
             </div>
         </div>
        
         <div class="w-full flex flex-col items-center gap-3 ">
        <h1 class="w-[85%] font-bold text-[25px]" >Today's menu</h1>
         <div class="cardlistnye bg-whitecream w-[85%] flex gap-[40px] flex-wrap justify-between items-center" > 


         <div class="card bg-DefaultWhite w-[390px] h-[350px] rounded-[10px] shadow-[1px_1px_1px_#666] p-5 ">
            <img class="h-[80%] w-full" src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/21c4f66a-e600-44f5-bae2-3488e17d979d_TPO-111226_1.jpg?auto=format" alt="PaNas 1 Ayam McD Gulai Spicy" onclick="buttonmenudesc()" >
            <h1 class="font-bold text-[20px]">Panas 1 Ayam MCD Gulai Spicy</h1>
            <div class="flex justify-between">
                <h1>42.500</h1>
                <button class="w-[100px] rounded-md bg-DefaultGreen font-bold text-white">ADD</button>
            </div>
         </div>

         <div class="card bg-DefaultWhite w-[390px] h-[350px] rounded-[10px] shadow-[1px_1px_1px_#666]">
         
         </div>
         <div class="card bg-DefaultWhite w-[390px] h-[350px] rounded-[10px] shadow-[1px_1px_1px_#666]">
         
         </div>

         <div class="card bg-DefaultWhite w-[390px] h-[350px] rounded-[10px] shadow-[1px_1px_1px_#666]">
         
         </div>
         <div class="card bg-DefaultWhite w-[390px] h-[350px] rounded-[10px] shadow-[1px_1px_1px_#666]">
         n
         </div>
         <div class="card bg-DefaultWhite w-[390px] h-[350px] rounded-[10px] shadow-[1px_1px_1px_#666]">
         
         </div>
         </div>
    

         
        
       


      
     </div>
       
         <button class="fixed right-0 top-[50vh] w-[50px] h-[80px] rounded-[100px_0_0_100px] bg-DefaultGreen text-white font-bold text-[20px] shadow-lg" onclick="buttonmenu()">cart</button>
     </div>


     <!-- desc part -->
     <div class="desc bg-DefaultWhite flex-col h-[100vh] fixed items-center right-0 justify-between  hidden w-[28%]" >
         <div class="  bg-DefaultWhite w-full  flex flex-col h-[20vh] gap-[1vh] border-b-2 border-[#00615F] ">
            
         <div class=" w-full  flex bg-DefaultWhite  border-b-2 border-[#AFAFAF]  pl-5 t h-[30%]" >
                 <button class="text-[35px]  text-bold bg-transparent " onclick="backbuttonmenudesc()">X</button>
                 </div>

            <div class=" w-full flex  justify-center items-center  gap-[5px] h-[60%] bg-DefaultWhite">
                 <img  class="h-full rounded-lg border-DefaultGreen border-2" src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/21c4f66a-e600-44f5-bae2-3488e17d979d_TPO-111226_1.jpg?auto=format" alt="PaNas 1 Ayam McD Gulai Spicy" alt="">
                 <h2>Panas 1 Ayam MCD Gulai Spicy</h2>
             </div>
                
         </div>
         <div class=" w-full  items-center flex h-[65vh] flex-col gap-[2vh] overflow-y-auto overflow-x-hidden scrollbar-none " >
            <div class=" w-full border-b-8 border-gray-400 items-end"> 
                <div class="flex gap-1 pt-2 pl-5">
                    <h1 class="text-[12px] font-bold">Add-On.</h1>
                    <h1 class="text-[10px] text-gray-700">Pick 1</h1>
                </div>
                <div class="flex flex-col items-center">
                    <div class="flex pl-4 w-[98%] pr-5 justify-between items-center border-b-2  pb-2 pt-2 border-gray-500">
                        <input  class="w-[15px]" type="radio"></input>
                        <h1 class="text-[13px] flex justify-center w-[70%] ">2px Korean Soy Garlic Wings</h1>
                        <h1 class="text-[13px] w-[22%]  flex justify-end">Rp 16.500,00</h1>
                    </div>
                    <div class="flex pl-4 w-[98%] pr-5 justify-between items-center pb-2 pt-2  border-gray-500">
                        <input  class="w-[15px]" type="radio"></input>
                        <h1 class="text-[13px] flex justify-center w-[70%]  ">2px Korean Soy Garlic Wings</h1>
                        <h1 class="text-[13px] w-[22%]  flex justify-end">Rp 0</h1>
                    </div>                   
                </div>
            </div>

            <div class="specins w-full p-5 flex flex-col  gap-1 ">
                <div class="flex gap-1 items-center">
                <h1 class="text-[12px] font-bold ">Special Intructions</h1>
                <h2 class="text-[8px] text-gray-500"> Not required</h2>
                </div>
                <input class="inputdesc text-black h-[3vh] p-1 rounded-md text-[10px]" type="text" value="Ex: Thigh, pleasee...." ">
         </div>

         </div>

        

         <div class="totalmenu bg-DefaultWhite w-full h-[15vh] flex flex-col items-center pt-[2vh] border-t-4 border-DefaultGreen">
             <div class="totallist w-[90%]  flex justify-between">
                 <h1 class="font-bold ">TOTAL</h1>
                 <h1>Rp. 50,000</h1>
             </div>
             <button class="bg-DefaultGreen h-[3vh] w-[200px] text-white rounded-md">PAYMENT</button>
         </div>
        </div>

<!-- ini tandain flex ke hidden -->
     <div class="cartye bg-DefaultWhite  flex-col h-[100vh] fixed items-center right-0 justify-between  w-[28%] hidden" >
         <div class="headercart sticky bg-DefaultWhite w-full  flex flex-col h-[15vh] border-b-4 border-[#00615F] ">
             <div class="backtolist w-full  flex  border-b-2 border-[#AFAFAF]  pl-5 t h-[40%]" >
                 <button class="text-[35px]  text-bold bg-transparent " onclick="backbuttonmenu()">X</button>
                 </div>
             <div class="carttitle w-full flex flex-col justify-center items-center  h-[60%] bg-DefaultWhite">
                 <h1>CART</h1>
                 <h2>McDonald's, Sentul City</h2>
             </div>
             
         </div>

         <div class="cartmid w-full  items-center flex h-[65vh] flex-col gap-[2vh]  overflow-y-auto overflow-x-hidden scrollbar-none " >
                <div class="h-[1vh]"></div>
         
             <div class="cartmenulist flex rounded-[10px]  w-[90%] gap-[10px] items-center  h-[130px] justify-center p-2">
                 <div class="quantity w-[10%] inline-flex flex-col h-[100px] border-none rounded-[100px] justify-center items-center  bg-DefaultGreen" >
                     <button class="h-[35px] bg-transparent text-white" onclick="increment()">+</button>
                     <input class="w-[100%] text-white text-center border-none pointer-events-none h-[30px] bg-transparent" type="text" id="number" value="1" readonly>
                     <button class="h-[35px] bg-transparent text-white" onclick="decrement()">−</button>
                 </div>
                 <div class="picturemenu w-[100px] h-[100px] bg-black border-DefaultGreen border-[3px] rounded-[10px]">
                 </div>
                 <div class="descmenu flex flex-col justify-between   h-full">
                     <h1>Double Cheeseburger</h1>
                     <h2>Rp. 42,000</h2>
                     <p>Tidak pakai keju, tidak pake acar</p>
                 </div>
             </div>

              <div class="cartmenulist flex rounded-[10px]  w-[90%] gap-[20px] items-center  h-[130px] justify-center p-2">
                 <div class="quantity w-[10%] inline-flex flex-col h-[100px] border-none rounded-[100px] justify-center items-center  bg-DefaultGreen" >
                     <button class="h-[35px] bg-transparent text-white" onclick="increment()">+</button>
                     <input class="w-[100%] text-white text-center border-none pointer-events-none h-[30px] bg-transparent" type="text" id="number" value="1" readonly>
                     <button class="h-[35px] bg-transparent text-white" onclick="decrement()">−</button>
                 </div>
                 <div class="picturemenu w-[100px] h-[100px] bg-black border-DefaultGreen border-[3px] rounded-[10px]">
                 </div>
                 <div class="descmenu flex flex-col justify-between   h-full">
                     <h1>Double Cheeseburger</h1>
                     <h2>Rp. 42,000</h2>
                     <p>Tidak pakai keju, tidak pake acar</p>
                 </div>
             </div>


              <div class="cartmenulist flex rounded-[10px]  w-[90%] gap-[20px] items-center  h-[130px] justify-center p-2">
                 <div class="quantity w-[10%] inline-flex flex-col h-[100px] border-none rounded-[100px] justify-center items-center  bg-DefaultGreen" >
                     <button class="h-[35px] bg-transparent text-white" onclick="increment()">+</button>
                     <input class="w-[100%] text-white text-center border-none pointer-events-none h-[30px] bg-transparent" type="text" id="number" value="1" readonly>
                     <button class="h-[35px] bg-transparent text-white" onclick="decrement()">−</button>
                 </div>
                 <div class="picturemenu w-[100px] h-[100px] bg-black border-DefaultGreen border-[3px] rounded-[10px]">
                 </div>
                 <div class="descmenu flex flex-col justify-between   h-full">
                     <h1>Double Cheeseburger</h1>
                     <h2>Rp. 42,000</h2>
                     <p>Tidak pakai keju, tidak pake acar</p>
                 </div>
             </div>

       

         </div>

         <div class="totalmenu bg-DefaultWhite w-full h-[15vh] flex flex-col items-center pt-[2vh] border-t-4 border-DefaultGreen">
             <div class="totallist w-[90%]  flex justify-between">
                 <h1 class="font-bold">TOTAL</h1>
                 <h1>Rp. 50,000</h1>
             </div>
             <button class="bg-DefaultGreen h-[3vh] w-[200px] text-white">PAYMENT</button>
         </div>
        
     

     
     <!-- <div class="optionallist"></div> -->


 </section>
    </body>
</html>


<script>
    
  function increment() {
    const input = document.getElementById('number');
    input.value = parseInt(input.value) + 1;
  }
  
  function decrement() {
    const input = document.getElementById('number');
    if (parseInt(input.value) > 0) {
      input.value = parseInt(input.value) - 1;
    }
  }



 


  function buttonmenu() {
    const menucart = document.querySelector('.cartye');

    menucart.classList.remove('w-0', 'hidden');
    menucart.classList.add('w-[28%]', 'flex');
  
    document.body.classList.add('overflow-hidden');
  }
  
  function backbuttonmenu() {
    const menucart = document.querySelector('.cartye');
  
    menucart.classList.remove('w-[28%]', 'flex');
    menucart.classList.add('w-0', 'hidden');
  
    document.body.classList.remove('overflow-hidden');
  }


  function buttonmenudesc() {
    const desccart = document.querySelector('.desc');
    
    desccart.classList.remove('w-0', 'hidden');
    desccart.classList.add('w-[28%]', 'flex');
  
    document.body.classList.add('overflow-hidden');
  }
  
  function backbuttonmenudesc() {
    const desccart = document.querySelector('.desc');
  
    desccart.classList.remove('w-[28%]', 'flex');
    desccart.classList.add('w-0', 'hidden');
  
    document.body.classList.remove('overflow-hidden');
  }
  

 
    document.addEventListener("DOMContentLoaded", function () {
        const radioButtons = document.querySelectorAll("input[type='radio']");

        radioButtons.forEach(radio => {
            radio.addEventListener("click", function (event) {
                if (this.checked) {
                    if (this.getAttribute("data-checked") === "true") {
                        this.checked = false;
                        this.removeAttribute("data-checked");
                    } else {
                        this.setAttribute("data-checked", "true");
                    }
                }
            });
        });
    });


  
</script>
</html>














