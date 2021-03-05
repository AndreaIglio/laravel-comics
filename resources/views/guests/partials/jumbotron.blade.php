<div class="jumbo">

    <div class="jumbo-white">

    </div>


    <div class="jumbo-black flex column">
        <div class="jumbo-top flex">
            <div class="left flex">

                <h3>COMICS & GRAPHIC NOVELS</h3>

            </div>
            <ul class="right">
                <li><a href="">This week</a></li>
                <li><a href="">Last Week</a></li>
                <li><a href="">Next Week</a></li>
                <li><a href="">Upcoming</a></li>
                <li><a href="">See all</a></li>
            </ul>
        </div>
        <div class="jumbo-bottom flex">
            @foreach($novels as $novel)

            <div class="novels-card flex column">
                <a href="{{route ('comics.show', $novel->id )}}">
                    <img src="{{ asset($novel->cover) }}" alt="">
                    <img src="{{ asset('storage/' . $novel->cover) }}" alt="">
                </a>
                <h6 class="novels-name">{{$novel->name}} #{{$novel->volume}}</h6>

                @if($novel->available == 1)
                <h6 class="novels-available">Available Now</h6>
                @else
                <h6 class="novels-available">Not Available</h6>
                @endif


            </div>



            @endforeach
        </div>

    </div>







</div>