<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Page</title>
    @vite('resources/css/app.css')
</head>
<body class="p-0 bg-slate-200">
    <!-- header -->
    <div class="p-0 w-full h-20 bg-white items-center justify-center flex">
        <div class="grid grid-cols-12 w-full gap-4">
            <div class=" col-span-3 px-10">
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
            <div class=" col-span-6 px-10">
                <div class="w-full flex items-center justify-around font-bold text-sm">
                    <a class="text-orange-700" href="{{ url('Club/') }}">Home</a>
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class=" text-1xl inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 font-semibold text-black shadow-sm ring-inset ring-0 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            About Club
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            </button>
                        </div>
                        <div class="absolute right-0 z-10 mt-2 w-56 p-3 origin-top-right rounded-2xl bg-slate-100 shadow-lg ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="ontion">
                            <div class="block" role="none">
                            <a href="{{ url('Club/aboutClub') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0">About Club</a>
                            <a href="{{ url('Club/organizationalChart') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1">Organizational Chart</a>
                            <a href="{{ url('Club/membership') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-2">Membership Application</a>                    
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('Club/Events') }}">Event & Activities</a>
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-1xl font-semibold text-black shadow-sm ring-inset ring-0 hover:bg-gray-50" id="menu-button1" aria-expanded="true" aria-haspopup="true">
                            Other Batches
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            </button>
                        </div>
                        <div class="absolute right-0 z-10 mt-2 w-40 p-3 origin-top-right rounded-2xl bg-slate-100 shadow-lg ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="ontion1">
                            <div class="block" role="none">
                                <a href="{{ url('Club/batches') }}" class="block px-4 py-2 text-sm text-gray-700 text-center" role="menuitem" tabindex="-1" id="menu-item-0">2023</a>
                                <a href="{{ url('Club/batches') }}" class="block px-4 py-2 text-sm text-gray-700 text-center" role="menuitem" tabindex="-1" id="menu-item-1">2022</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-span-3">
                <div class="flex items-center justify-end mr-10">
                    <a href="#"><button class=" h-10 bg-orange-600 text-white rounded-2xl p-2 pl-5 pr-5 font-bold">Continue with Google</button></a>
                </div>
            </div>
        </div>

    </div>
    <!-- banner -->
    <div class="bg-hero-image bg-cover bg-center">
        <div class="text-white text-center">
            <div class=" absolute h-screen">
                <img class="w-full h-full" src="{{URL('images/cover.jpg')}}" alt="">
            </div>
            <div class=" relative w-full h-screen items-center justify-center flex bg-black bg-opacity-40">
                <div class="w-full">
                    <p class=" uppercase text-3xl mb-5">welcome to</p>
                    <h1 class=" uppercase text-6xl font-bold mb-10">basketball club</h1>
                    <hr class=" w-3/5 m-auto border-orange-700 border-8">
                </div>
            </div>
        </div>
    </div>
    <!-- feature -->
   
    <div class="w-2/4 m-auto h-auto">
        <div class="text-center p-10">
            <h1 class=" text-orange-700 text-3xl font-bold">Features</h1>
        </div>
        <div class="grid grid-cols-2 gap-12 h-2/4 mb-16">
            <div class=" col-span-1 h-auto">
                <img class="w-full h-80" src="{{URL('images/feature1.png')}}" alt="">
                <h3 class=" font-bold mt-5">Football Club Donate Event</h3>
                <p class=" text-1xl text-slate-600">Our club will be going to a district in kompot province to help children who are need.  This initiative.more...</p>
            </div>
            <div class=" col-span-1 h-auto">
                <img class="w-full h-80" src="{{URL('images/feature2.png')}}" alt="">
                <h3 class=" font-bold mt-5">Football Club Donate Event</h3>
                <p class=" text-1xl text-slate-600">Our club will be going to a district in kompot province to help children who are need.  This initiative.more...</p>
            </div>
        </div>
    </div>
   
</body>
<script>
    const button = document.getElementById('menu-button');
    const options = document.getElementById('ontion');

    button.addEventListener('click', () => {
        options.classList.toggle('hidden');
    });

    const button1 = document.getElementById('menu-button1');
    const options1 = document.getElementById('ontion1');

    button1.addEventListener('click', () => {
        options1.classList.toggle('hidden');
    });
</script>
</html>