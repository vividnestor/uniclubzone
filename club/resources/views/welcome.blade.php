<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clubs</title>

        <!-- Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
    <body>
        <div class="w-full h-auto pb-20">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" >Home</a>
                    @else
                        <a href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="w-full bg-white">
                <div class=" w-full grid grid-cols-2 h-20">
                    <div class="col-span-1 flex items-center justify-start px-10">
                    @include ('logo.logo')
                    </div>
                    <div class="col-span-1 flex items-center justify-end">
                        @include ('logo.btn-login')
                    </div>
                </div>
            </div>
            <div class="bg-center">
                <div class="text-white text-center">
                    <div class=" absolute h-72 w-full">
                        <img class="w-full h-full object-cover" src="{{URL('images/backgroun.jpg')}}" alt="">
                    </div>
                    <div class=" relative w-full h-72 items-center justify-center flex">
                        <div class="w-full">
                            <p class=" font-bold text-3xl mb-8">WELCOME</p>
                            <h1 class=" uppercase text-6xl font-bold mb-10">PARAGON CLUB LIST</h1>
                            <hr class=" w-3/5 m-auto border-orange-700 border-8">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Club list -->
            <div class=" w-full pt-2 relative">
                <div class="w-4/5 m-auto grid grid-cols-2 mb-10">
                    <div class=" col-span-2">
                        <h2 class=" text-center font-bold text-3xl p-4 text-black decoration-black underline">CLUBS</h2>
                        <div class=" col-span-2 grid grid-cols-2 gap-5">
                            <!-- club -->
                            @foreach ($media as $medias)                                     
                                @foreach ($club as $clubs)
                                    @if($medias->model_id===$clubs->id)
                                        <a href="{{ url('Club.index', $clubs->id) }}">
                                            <div class=" col-span-1 h-44 bg-slate-100 rounded-2xl grid grid-cols-3 pl-8">
                                                <div class="ml-20 col-span-1 flex items-center justify-center w-40 h-40 text-center">
                                                    <img src="{{ asset('media/' . $medias->id . '/' . $medias->file_name) }}" alt="{{ $medias->file_name }}">
                                                </div>
                                                <div class=" col-span-2 flex items-center justify-center w-full h-full p-5">
                                                    <h3 class=" text-orange-700  font-bold text-2xl">{{$clubs->name}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </body>
</html>