@extends('User/layout')
@section('containner_user')
    <div class="mt-8">
        <div class="w-11/12 m-auto">
            <h2 class=" text-2xl font-bold mb-8">Participation History</h2>
            <div class=" grid grid-cols-2 gap-5 mb-10">
                <div class=" col-span-1 bg-white h-44 flex items-center justify-center pt-10 pb-10 pl-16 pr-16">
                    <!-- profile -->
                    <div class="w-2/5">
                        <img class=" w-32 h-32 rounded-full" src="{{URL('images/pf.png')}}" alt="">
                    </div>
                    <!-- information -->
                    <div class="w-3/5 items-center justify-start">
                        <h3 class=" text-1xl font-bold">Nao Samnang</h3>
                        <p>nangzk70@gmail.com</p>
                    </div>
                </div>
                <div class=" col-span-1 grid grid-cols-2 gap-5 p-6 bg-white h-44">
                    <div class=" col-span-1">
                        <div class="h-1/2">
                            <h4>Gender</h4>
                            <h4 class=" font-bold">Male</h4>
                        </div>
                        <div class="h-1/2">
                            <h4>Department</h4>
                            <h4 class=" font-bold">Computer science</h4>
                        </div>
                    </div>
                    <div class=" col-span-1">
                        <div class="h-1/2">
                            <h4>Academic Yaer</h4>
                            <h4 class=" font-bold">Year 4</h4>
                        </div>
                        <div class="h-1/2">
                            <h4>Phone Number</h4>
                            <h4 class=" font-bold">068 809 810</h4>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class=" text-1xl font-bold mb-2">Participation History</h3>
            <div class="w-full bg-white">
                <div class=" flex items-center w-full justify-around text-center mb-2">
                    <p class=" w-1/12">No</p>
                    <p class=" w-4/12">Club Name</p>
                    <p class=" w-2/12">Role</p>
                    <p class=" w-2/12">Batches</p>
                    <p class=" w-2/12">Status</p>
                </div>
                <hr>
                <div class=" flex items-center w-full justify-around mb-2 pt-2 pb-2 text-center">
                    <p class=" w-1/12">1</p>
                    <p class=" w-4/12">Paragon International BasketBall Club</p>
                    <p class=" w-2/12">Manger</p>
                    <p class=" w-2/12">2023</p>
                    <div class=" w-2/12 flex items-center justify-center">
                        <p class=" w-20 bg-green-700 text-white rounded-2xl">Active</p>
                    </div>
                </div>
                <div class=" flex items-center w-full justify-around mb-2 pt-2 pb-2 text-center">
                    <p class=" w-1/12">1</p>
                    <p class=" w-4/12">Paragon International BasketBall Club</p>
                    <p class=" w-2/12">Manger</p>
                    <p class=" w-2/12">2023</p>
                    <div class=" w-2/12 flex items-center justify-center">
                        <p class=" w-20 bg-yellow-600 text-white rounded-2xl">Die</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('sidebar')
    <div class="block w-full pl-8 pr-8 pt-4">
        <a href="{{url('User/')}}">
            <li class=" list-none flex items-center pl-6 mb-3 justify-start h-12 rounded-3xl ">My Clubs</li>
        </a>
        <a href="{{url('User/participation')}}">
            <li class=" list-none flex items-center pl-6 mb-3 justify-start h-12 rounded-3xl bg-white text-orange-700">Participation History</li>
        </a>
    </div>
@endsection