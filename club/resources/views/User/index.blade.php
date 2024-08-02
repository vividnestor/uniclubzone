@extends('User.layout')
@section('containner_user')
<div>
    <div class="w-4/5 m-auto grid grid-cols-2 overflow-y-scroll mb-10">
        <div class=" col-span-2">
            <h1 class=" text-center font-bold text-4xl p-10 text-orange-700 decoration-orange-700 underline">MY CLUBS</h1>
        </div>
        <div class=" col-span-2">
            <h2 class=" text-center font-bold text-3xl p-4 text-black decoration-black underline">CLUBS YOU MANAGED</h2>
            <div class=" col-span-2 grid grid-cols-2 gap-5">
            <!-- club -->
                <a href="{{url('Club/')}}">
                    <div class=" col-span-1 h-60 bg-slate-100 rounded-2xl grid grid-cols-3">
                        <!-- club logo -->
                        <div class=" col-span-1 flex items-center justify-center">
                            <img src="{{URL('images/logo.png')}}" alt="">
                        </div>
                        <div class=" col-span-2 flex items-center justify-center w-full h-full p-5">
                            <h3 class=" text-orange-700  font-bold text-2xl">Paragons International basetBall Blub</h3>
                        </div>
                    </div>
                </a>
                <a href="{{url('Club/')}}">
                    <div class=" col-span-1 h-60 bg-slate-100 rounded-2xl grid grid-cols-3">
                        <!-- club logo -->
                        <div class=" col-span-1 flex items-center justify-center">
                            <img src="{{URL('images/logo.png')}}" alt="">
                        </div>
                        <div class=" col-span-2 flex items-center justify-center w-full h-full p-5">
                            <h3 class=" text-orange-700  font-bold text-2xl">Paragons International basetBall Blub</h3>
                        </div>
                    </div>
                </a>               
            </div>
        </div>
        <div class=" col-span-2">
            <h2 class=" text-center font-bold p-4 text-3xl text-black decoration-black underline">CLUBS YOU JOINED</h2>
            <div class=" col-span-2 grid grid-cols-2 gap-5">
                <!-- club -->
                <a href="{{url('Club/')}}">
                    <div class=" col-span-1 h-60 bg-slate-100 rounded-2xl grid grid-cols-3">
                        <!-- club logo -->
                        <div class=" col-span-1 flex items-center justify-center">
                            <img src="{{URL('images/logo.png')}}" alt="">
                        </div>
                        <div class=" col-span-2 flex items-center justify-center w-full h-full p-5">
                            <h3 class=" text-orange-700  font-bold text-2xl">Paragons International basetBall Blub</h3>
                        </div>
                    </div>
                </a>
                <a href="{{url('Club/')}}">
                    <div class=" col-span-1 h-60 bg-slate-100 rounded-2xl grid grid-cols-3">
                        <!-- club logo -->
                        <div class=" col-span-1 flex items-center justify-center">
                            <img src="{{URL('images/logo.png')}}" alt="">
                        </div>
                        <div class=" col-span-2 flex items-center justify-center w-full h-full p-5">
                            <h3 class=" text-orange-700  font-bold text-2xl">Paragons International basetBall Blub</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>   
    </div>                    
</div>
@endsection
@section('sidebar')
    <div class="block w-full pl-8 pr-8 pt-4">
        <a href="{{url('User/')}}">
            <li class=" list-none flex items-center pl-6 mb-3 justify-start h-12 rounded-3xl bg-white text-orange-700">My Clubs</li>
        </a>
        <a href="{{url('User/participation')}}">
            <li class=" list-none flex items-center pl-6 mb-3 justify-start h-12 rounded-3xl">Participation History</li>
        </a>
    </div>
@endsection