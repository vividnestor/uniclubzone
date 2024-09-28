@extends('Club.eventActivities')
@section('content')
<div class="w-full h-24 flex items-center font-bold text-slate-400">
    <div class=" w-1/2 flex items-center justify-start">
        <div class=" w-full flex justify-between">
            <li style="list-style:none">
                <a id="all" href="{{ url('Club.Events.index',$data->id) }}">All</a>
            </li>
            <li style="list-style:none">
                <a id="event" href="{{ url('Club.Events.event',$data->id) }}">Casual Event</a>
            </li>
            <li style="list-style:none" class="text-orange-700">
                <a id="competition" href="{{ url('Club.Events.competition',$data->id) }}">Competition</a>
            </li>
            <li style="list-style:none">
                <a id="gallery" href="{{ url('Club.Events.gallery',$data->id) }}">Galleries</a>
            </li>
        </div>
    </div>
</div>
<!-- content -->
<div class="w-full grid grid-cols-2 gap-x-40 gap-y-8 pb-20">
@foreach ($category_event as $category_events)
        @foreach ($imgevent as $imgevents)
            @foreach ($event as $events)
                @if($imgevents->model_id===$events->id && $events->category_id!==$category_events->id)
                    <div class=" col-span-1 h-auto">
                        <img class="w-full h-96 object-cover" src="{{ asset('media/' . $imgevents->id . '/' . $imgevents->file_name) }}" alt="">
                        <h3 class=" font-bold mt-5">{{$events->title}}</h3>
                        <h6 class=" text-1xl line-clamp-2 text-slate-600">{{$events->content}}</h6>
                        <h5 class=" text-orange-700 cursor-pointer underline decoration-orange-700">See more</h5>
                        <div class=" w-full block">
                            <div class=" flex items-center justify-start p-2">
                                <img class=" w-6 h-6" src="{{URL('images/clock.svg')}}" alt="">
                                <p class="ml-5">{{$events->published_at}}</p>
                            </div>
                            <div class=" flex items-center justify-start p-2">
                                <img class=" w-6 h-6" src="{{URL('images/location-arrow.svg')}}" alt="">
                                <a href="" class="ml-5">At Panda Football Court <hr class=" border-1 border-orange-700"></a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    @endforeach
</div>
@endsection