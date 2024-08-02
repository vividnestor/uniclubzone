@extends('Club.eventActivities')
@section('content')
<div class="w-full h-24 flex items-center font-bold text-slate-400">
    <div class=" w-1/2 flex items-center justify-start">
        <div class=" w-full flex justify-between">
            <li style="list-style:none">
                <a id="all" href="{{ url('Club/Events/') }}">All</a>
            </li>
            <li style="list-style:none">
                <a id="event" href="{{ url('Club/Events/event') }}">Casual Event</a>
            </li>
            <li style="list-style:none" class="text-orange-700">
                <a id="competition" href="{{ url('Club/Events/competition') }}">Competition</a>
            </li>
            <li style="list-style:none">
                <a id="gallery" href="{{ url('Club/Events/gallery') }}">Galleries</a>
            </li>
        </div>
    </div>
    <!-- <div class=" w-1/2 flex items-center justify-end">
        <div class=" h-14 flex items-center justify-center">
            <form action="#">
                <input class=" w-24 h-10 transition-all p-1 ps-3 font-normal focus:ring-1 outline-none text-sm text-black rounded-lg bg-gray-100 focus:border-none focus:w-80" type="search" placeholder="Search...">
                <button type="submit"></button>
            </form>
        </div>
    </div> -->
</div>
<!-- content -->
<div class="w-full grid grid-cols-2 gap-x-40 gap-y-8 pb-20">
    <div class=" col-span-1 h-auto">
        <img class="w-full h-img" src="{{URL('images/feature2.png')}}" alt="">
        <h3 class=" font-bold mt-5">Football Club Donate Event</h3>
        <h6 class=" text-1xl line-clamp-2 text-slate-600">Our club will be going to a district in kompot province to help children who are need.  This initiative. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident sit, porro quidem magni quod incidunt vitae. Accusantium fuga maiores doloremque?</h6>
        <h5 class=" text-orange-700 cursor-pointer underline decoration-orange-700">See more</h5>
        <div class=" w-full block">
            <div class=" flex items-center justify-start p-2">
                <img class=" w-6 h-6" src="{{URL('images/clock.svg')}}" alt="">
                <p class="ml-5">friday, 16, july, 2024 at 4:00PM</p>
            </div>
            <div class=" flex items-center justify-start p-2">
                <img class=" w-6 h-6" src="{{URL('images/location-arrow.svg')}}" alt="">
                <a href="" class="ml-5">At Panda Football Court <hr class=" border-1 border-orange-700"></a>
            </div>
        </div>
    </div>
    <div class=" col-span-1 h-auto">
        <img class="w-full h-img" src="{{URL('images/feature2.png')}}" alt="">
        <h3 class=" font-bold mt-5">Football Club Donate Event</h3>
        <h6 class=" text-1xl line-clamp-2 text-slate-600">Our club will be going to a district in kompot province to help children who are need.  This initiative. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident sit, porro quidem magni quod incidunt vitae. Accusantium fuga maiores doloremque?</h6>
        <h5 class=" text-orange-700 cursor-pointer underline decoration-orange-700">See more</h5>
        <div class=" w-full block">
            <div class=" flex items-center justify-start p-2">
                <img class=" w-6 h-6" src="{{URL('images/clock.svg')}}" alt="">
                <p class="ml-5">friday, 16, july, 2024 at 4:00PM</p>
            </div>
            <div class=" flex items-center justify-start p-2">
                <img class=" w-6 h-6" src="{{URL('images/location-arrow.svg')}}" alt="">
                <a href="" class="ml-5">At Panda Football Court <hr class=" border-1 border-orange-700"></a>
            </div>
        </div>
    </div>
    <div class=" col-span-1 h-auto">
        <img class="w-full h-img" src="{{URL('images/feature2.png')}}" alt="">
        <h3 class=" font-bold mt-5">Football Club Donate Event</h3>
        <h6 class=" text-1xl line-clamp-2 text-slate-600">Our club will be going to a district in kompot province to help children who are need.  This initiative. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident sit, porro quidem magni quod incidunt vitae. Accusantium fuga maiores doloremque?</h6>
        <h5 class=" text-orange-700 cursor-pointer underline decoration-orange-700">See more</h5>
        <div class=" w-full block">
            <div class=" flex items-center justify-start p-2">
                <img class=" w-6 h-6" src="{{URL('images/clock.svg')}}" alt="">
                <p class="ml-5">friday, 16, july, 2024 at 4:00PM</p>
            </div>
            <div class=" flex items-center justify-start p-2">
                <img class=" w-6 h-6" src="{{URL('images/location-arrow.svg')}}" alt="">
                <a href="" class="ml-5">At Panda Football Court <hr class=" border-1 border-orange-700"></a>
            </div>
        </div>
    </div>
</div>

@endsection