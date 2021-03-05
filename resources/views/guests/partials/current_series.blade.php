<div class="content-bottom flex">

    <div class="current-series flex">
        @foreach($series as $serie)
        <div class="serie flex column">
            <img src="{{asset($serie->cover)}}" alt="">
            <p>{{$serie->title}}</p>
        </div>

        @endforeach

    </div>


</div>