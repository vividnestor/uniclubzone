<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Page</title>
    @vite('../../vendor/brackets/craftable-pro/resources/css/craftable-pro.css')
    
</head>
<body class="p-0 bg-slate-200">
    <!-- header -->
    <div class="p-0 w-full h-20 bg-white items-center justify-center flex">
        <div class="grid grid-cols-12 w-full gap-4">
            <div class=" col-span-3 px-10">
            @include ('logo.logo')
            </div>
            <div class=" col-span-6 px-10">
                <div class="w-full flex items-center justify-around font-bold text-sm">
                    <a class="text-orange-700" href="{{ url('Club.index',$data->id) }}">Home</a>
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
                            <a href="{{ url('Club.aboutClub',$data->id) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0">About Club</a>
                            <a href="{{ url('Club.organizationalChart',$data->id) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1">Organizational Chart</a>
                            <a href="{{ url('Club.membership',$data->id) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-2">Membership Application</a>                    
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('Club.Events.index',$data->id) }}">Event & Activities</a>
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
                                <a href="{{ url('Club.batches',$data->id) }}" class="block px-4 py-2 text-sm text-gray-700 text-center" role="menuitem" tabindex="-1" id="menu-item-0">2023</a>
                                <a href="{{ url('Club.batches',$data->id) }}" class="block px-4 py-2 text-sm text-gray-700 text-center" role="menuitem" tabindex="-1" id="menu-item-1">2022</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-span-3">
                @include ('logo.btn-login')
            </div>
        </div>

    </div>
    <!-- banner -->
    <div class="bg-hero-image bg-cover bg-center">
        <div class="text-white text-center">
            <div class=" absolute h-screen">
                <!-- <img class="w-screen h-full m-auto object-cover" src="{{ asset('media/' . $img->id . '/' . $img->file_name) }}" alt=""> -->
                <img class="w-full h-full object-cover" src="{{URL('images/cover.jpg')}}" alt="">
            </div>
            <div class=" relative w-full h-screen items-center justify-center flex bg-black bg-opacity-40">
                <div class="w-full">
                    <p class=" uppercase text-3xl mb-5">welcome to</p>
                        <h1 class=" uppercase text-6xl font-bold mb-10">
                            {{$data->name}}
                        </h1>
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
        @foreach ($imgevent as $imgevents)
            @foreach ($event as $events)
                @if($imgevents->model_id===$events->id)
                <div class=" col-span-1 h-auto">
                    <img class="w-full h-80" src="{{ asset('media/' . $imgevents->id . '/' . $imgevents->file_name) }}" alt="">
                    <h3 class=" font-bold mt-5">{{$events->title}}</h3>
                    <p class=" text-1xl text-slate-600">{{$events->content}}</p>
                </div>
                @endif
            @endforeach
        @endforeach  
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