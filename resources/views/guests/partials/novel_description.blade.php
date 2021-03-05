<div class="novel-description flex column">

    <div class="novel_title">
        <h3>{{$novel->name}} #{{$novel->volume}}</h3>

    </div>
    <div class="flex">
        <div class="novel_price flex">
            <h6>
                U.S. Price : ${{$novel->price}}
            </h6>
            <h6 class="available">
                @if($novel->available)
                Available
                @else
                Not Available
                @endif
            </h6>

        </div>
        <div class="novel_available_check flex">
            <h6>Check Availability <i class="fas fa-chevron-down"></i></h6>
        </div>


    </div>

    <div class="novel_body flex">
        <h5>{{$novel->body}}</h5>
    </div>



</div>