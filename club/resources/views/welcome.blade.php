<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clubs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.min-w-screen{width: 100%;}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-6xl{font-size:5rem;line-height:1rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased card">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="min-w-screen min-h-screen col-12 card-body bg-white">
                <div class="col-12 d-flex w-auto p-3">
                    <div class="col-6 d-flex justify-content-start">
                    <Link :href="route('craftable-pro.home')">
                        <svg width="162" height="42" viewBox="0 0 162 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M138.757 32.3203L134.535 39.3679H138.478V41.1258H131.14L135.354 34.0782H131.743V32.3203H138.757Z" fill="black"/>
                            <path d="M139.158 36.7147C139.158 35.4422 139.577 34.3655 140.418 33.4866C141.257 32.6036 142.27 32.1602 143.457 32.1602C144.648 32.1602 145.657 32.5996 146.488 33.4786C147.323 34.3575 147.741 35.4362 147.741 36.7147C147.741 38.0052 147.331 39.0879 146.511 39.9668C145.692 40.8458 144.673 41.2852 143.457 41.2852C142.208 41.2852 141.18 40.8517 140.372 39.9828C139.562 39.1098 139.158 38.0211 139.158 36.7147ZM141.253 36.7147C141.253 37.1781 141.319 37.6016 141.454 37.9852C141.594 38.3647 141.835 38.6863 142.181 38.952C142.525 39.2137 142.951 39.3436 143.457 39.3436C144.178 39.3436 144.721 39.0879 145.089 38.5765C145.46 38.0651 145.645 37.4458 145.645 36.7147C145.645 35.9956 145.456 35.3803 145.081 34.8689C144.704 34.3535 144.163 34.0938 143.457 34.0938C142.75 34.0938 142.206 34.3535 141.825 34.8689C141.443 35.3803 141.253 35.9956 141.253 36.7147Z" fill="black"/>
                            <path d="M150.533 35.6603V41.1258H148.592V32.3203H150.533L153.927 37.7858H153.943V32.3203H155.884V41.1258H153.943L150.556 35.6603H150.533Z" fill="black"/>
                            <path d="M162 32.3203V34.0782H159.062V35.8281H161.876V37.594H159.062V39.3679H162V41.1258H157.121V32.3203H162Z" fill="black"/>
                            <path d="M55.2365 4.74219V19.8201C55.2365 22.6967 54.4865 24.8741 52.9863 26.3483C51.4862 27.8185 49.2901 28.5537 46.3981 28.5537C43.5099 28.5537 41.3177 27.8185 39.8176 26.3483C38.3175 24.8741 37.5674 22.6967 37.5674 19.8201V4.74219H42.7251V18.262C42.7251 20.1537 43.0131 21.4701 43.5911 22.2093C44.1672 22.9444 45.1067 23.3119 46.4058 23.3119C47.7049 23.3119 48.6406 22.9444 49.2128 22.2093C49.7889 21.4701 50.0788 20.1537 50.0788 18.262V4.74219H55.2365Z" fill="#009245"/>
                            <path d="M63.4175 13.6116V28.1302H58.2598V4.74219H63.4175L72.4183 19.2528H72.4724V4.74219H77.6301V28.1302H72.4724L63.4716 13.6116H63.4175Z" fill="#FBB03B"/>
                            <path d="M86.0766 4.74219V28.1302H80.9189V4.74219H86.0766Z" fill="#FF4040"/>
                            <path d="M101.408 23.3116C102.197 23.3116 102.959 23.1897 103.697 22.944C104.439 22.7003 104.985 22.4626 105.336 22.2329L105.855 21.8653L108.051 26.4039C107.977 26.4578 107.877 26.5317 107.749 26.6276C107.619 26.7235 107.32 26.8993 106.852 27.155C106.388 27.4067 105.889 27.6264 105.36 27.8182C104.828 28.006 104.132 28.1718 103.272 28.3216C102.415 28.4754 101.532 28.5533 100.619 28.5533C98.5162 28.5533 96.5212 28.022 94.6344 26.9552C92.7515 25.8845 91.234 24.4143 90.0799 22.5445C88.9296 20.6748 88.3555 18.6532 88.3555 16.4798C88.3555 14.8338 88.6918 13.2557 89.3684 11.7415C90.0431 10.2293 90.942 8.93483 92.0672 7.85812C93.1961 6.78341 94.5068 5.92444 96.0031 5.2852C97.5032 4.64197 99.042 4.31836 100.619 4.31836C102.077 4.31836 103.423 4.50014 104.656 4.86171C105.893 5.21928 106.769 5.57685 107.285 5.93243L108.051 6.46778L105.855 11.0063C105.725 10.8945 105.532 10.7586 105.275 10.5988C105.021 10.435 104.511 10.2213 103.743 9.9596C102.974 9.69392 102.197 9.56008 101.408 9.56008C100.165 9.56008 99.0498 9.76783 98.06 10.1833C97.0741 10.5988 96.2931 11.1482 95.717 11.8294C95.139 12.5125 94.6982 13.2437 94.3947 14.0267C94.095 14.8098 93.9462 15.6088 93.9462 16.4239C93.9462 18.1977 94.5899 19.7918 95.8794 21.2021C97.1726 22.6084 99.015 23.3116 101.408 23.3116Z" fill="#38B6FF"/>
                            <path d="M115.182 4.74219V23.4558H122.977V28.1302H110.024V4.74219H115.182Z" fill="#38B6FF"/>
                            <path d="M142.914 4.74219V19.8201C142.914 22.6967 142.164 24.8741 140.664 26.3483C139.164 27.8185 136.968 28.5537 134.076 28.5537C131.188 28.5537 128.995 27.8185 127.495 26.3483C125.995 24.8741 125.245 22.6967 125.245 19.8201V4.74219H130.403V18.262C130.403 20.1537 130.691 21.4701 131.269 22.2093C131.845 22.9444 132.784 23.3119 134.084 23.3119C135.383 23.3119 136.318 22.9444 136.891 22.2093C137.467 21.4701 137.757 20.1537 137.757 18.262V4.74219H142.914Z" fill="#38B6FF"/>
                            <path d="M145.933 4.74219H152.954C155.077 4.74219 156.768 5.21163 158.027 6.1485C159.289 7.08139 159.921 8.59757 159.921 10.6951C159.921 13.0402 158.98 14.7122 157.099 15.713C160.315 16.3003 161.924 18.266 161.924 21.61C161.924 23.5756 161.263 25.1557 159.944 26.3483C158.63 27.5369 156.82 28.1302 154.516 28.1302H145.933V4.74219ZM151.09 13.8992H151.5C152.654 13.8992 153.515 13.6915 154.083 13.276C154.649 12.8605 154.933 12.1793 154.933 11.2304C154.933 9.64431 153.789 8.84927 151.5 8.84927H151.09V13.8992ZM151.09 24.0231H152.706C155.231 24.0231 156.495 23.1521 156.495 21.4102C156.495 20.3715 156.178 19.6264 155.544 19.1729C154.914 18.7214 153.969 18.4937 152.706 18.4937H151.09V24.0231Z" fill="#38B6FF"/>
                            <mask id="mask0_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="0" width="26" height="18">
                            <path d="M7.91846 0H32.663V17.3872H7.91846V0Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_200_735)">
                            <mask id="mask1_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="0" width="26" height="18">
                            <path d="M30.5594 17.257L28.2802 14.5703C28.2802 14.5703 29.1695 11.4061 29.5658 8.61341C29.8268 6.77361 29.4943 5.4432 27.9265 4.15275C27.304 3.64336 26.4224 3.43561 25.4849 3.43561C24.062 3.43561 22.502 3.90704 21.5141 4.48435C19.8729 5.43921 7.9375 11.6258 7.9375 11.6258C7.9375 11.6258 17.236 3.48954 20.6229 1.53788C22.2159 0.618984 23.7798 0.199485 25.2374 0.1875H25.3515C26.9425 0.199485 28.4039 0.700885 29.6354 1.57384C32.0209 3.26781 32.9121 6.6158 32.1659 10.3353C31.4197 14.0569 30.5633 17.257 30.5633 17.257H30.5594Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask1_200_735)">
                            <path d="M7.9375 0.1875V17.257H32.9121V0.1875H7.9375Z" fill="#FF4040"/>
                            </g>
                            </g>
                            <mask id="mask2_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="27">
                            <path d="M0 0H17.3212V26.0808H0V0Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask2_200_735)">
                            <mask id="mask3_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="17" height="26">
                            <path d="M11.4658 25.7294C11.4658 25.7294 3.59201 16.1209 1.70524 12.6211C0.806316 10.9571 0.400351 9.32703 0.396484 7.80885V7.78288C0.400351 6.12287 0.885575 4.5947 1.7381 3.30824C3.00046 1.41051 5.21201 0.429688 7.80245 0.429688L10.217 0.697367C13.8185 1.46844 16.9154 2.35338 16.9154 2.35338L14.3172 4.70856C14.3172 4.70856 11.2532 3.78966 8.55252 3.38015L7.55114 3.29625C6.26365 3.29625 5.23714 3.77568 4.23962 5.07412C2.9908 6.69418 3.63454 10.0062 4.55859 11.7002C5.48458 13.3962 11.4658 25.7294 11.4658 25.7294Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask3_200_735)">
                            <path d="M0.396484 0.429688V25.7294H16.9154V0.429688H0.396484Z" fill="#FF4040"/>
                            </g>
                            </g>
                            <mask id="mask4_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="16" width="26" height="18">
                            <path d="M0 16.3643H25.2394V33.7514H0V16.3643Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask4_200_735)">
                            <mask id="mask5_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="16" width="25" height="18">
                            <path d="M7.4949 33.6272C5.89231 33.6232 4.4231 33.1198 3.18201 32.2409C0.796477 30.5449 -0.0947134 27.1949 0.655356 23.4774C1.40542 19.7618 2.25795 16.5557 2.25795 16.5557L4.53716 19.2424C4.53716 19.2424 3.6479 22.4087 3.2516 25.1993C2.99062 27.0391 3.32313 28.3695 4.89093 29.66C5.51341 30.1714 6.39493 30.3771 7.33252 30.3771C8.75533 30.3771 10.3154 29.9057 11.3032 29.3304C12.9445 28.3735 24.876 22.1889 24.876 22.1889C24.876 22.1889 15.5813 30.3252 12.1983 32.2748C10.5918 33.1997 9.02017 33.6232 7.5587 33.6272H7.4949Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask5_200_735)">
                            <path d="M3.29623 42.4641L30.5346 31.3095L21.4854 7.71777L-5.75293 18.8744L3.29623 42.4641Z" fill="#FF4040"/>
                            </g>
                            </g>
                            <mask id="mask6_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="15" y="7" width="18" height="27">
                            <path d="M15.8364 7.6709H32.6627V33.7516H15.8364V7.6709Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask6_200_735)">
                            <mask id="mask7_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="15" y="8" width="18" height="26">
                            <path d="M25.0153 33.3856L22.6008 33.1159C19.0031 32.3449 15.9023 31.4599 15.9023 31.4599L18.5005 29.1048C18.5005 29.1048 21.5646 30.0257 24.2652 30.4352L25.2666 30.5191C26.5541 30.5191 27.5806 30.0376 28.5781 28.7392C29.827 27.1191 29.1832 23.8091 28.2592 22.1131C27.3332 20.4172 21.3519 8.08594 21.3519 8.08594C21.3519 8.08594 29.2257 17.6924 31.1125 21.1922C32.0076 22.8522 32.4174 24.4783 32.4213 25.9885V26.0504C32.4174 27.7044 31.9322 29.2246 31.0796 30.5051C29.8173 32.4028 27.6057 33.3856 25.0153 33.3856Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask7_200_735)">
                            <path d="M41.0741 11.7871L18.3188 2.05273L7.24951 29.6816L30.0048 39.418L41.0741 11.7871Z" fill="#FF4040"/>
                            </g>
                            </g>
                            <mask id="mask8_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="13" y="13" width="6" height="7">
                            <path d="M13.3623 13.8076H18.8061V19.4329H13.3623V13.8076Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask8_200_735)">
                            <mask id="mask9_200_735" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="13" y="14" width="6" height="5">
                            <path d="M16.1112 18.9797L15.7613 18.9617C14.731 18.724 14.0408 18.0149 13.8533 17.1339C13.515 15.5718 14.6575 14.1895 16.1112 14.1895H16.2852L16.6429 14.2514C17.4954 14.4431 18.1817 15.1583 18.373 16.0372C18.7094 17.6014 17.5688 18.9797 16.1151 18.9797H16.1112Z" fill="white"/>
                            </mask>
                            <g mask="url(#mask9_200_735)">
                            <path d="M13.5146 14.1895V18.9797H18.7091V14.1895H13.5146Z" fill="#FF4040"/>
                            </g>
                            </g>
                        </svg>
                    </Link>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button class="btn btn-warning text-orange">Continue with Google</button>
                    </div>
                </div>
                <div class="col-12 w-auto p-3">
                    <div class="col-12 bg-image" style="position: relative; height: 20vh;">
                        <div style="background-image: url('https://wp.usatodaysports.com/wp-content/uploads/sites/96/2019/03/1_v1_current.jpg'); 
                                    height: 100%; width: 100%; background-position: center; 
                                    background-repeat: no-repeat; background-size: cover; position: absolute; top: 0; left: 0;">
                        </div>
                        <h1 class="text-center text-secondary text-xl p-4" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                            Welcome to <br><br>
                            <span class="text-6xl"><u>Paragon Club List</u></span>
                        </h1>
                    </div>
                    <!-- Club list -->
                    <div class="container">
                        @foreach($clubs as $club)
                            <div class="row">
                                <div class="col-6 d-flex">
                                    <div class="col-2">
                                        {{ $club->name }}
                                    </div>
                                    <div class="col-10">
                                        {{ $club->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
