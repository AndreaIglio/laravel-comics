<div class="novel-specs flex">

    <div class="talent-specs flex">
        <div class="talent flex column">
            <h4>Talent</h4>
            <table class="table">
                <thead>

                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Art By:</td>

                        <td class="artist">
                            @foreach($novel_artists as $novel_artist)
                            @foreach($novel_artist->artists as $artist)
                            {{$artist->name}}
                            {{$artist->lastname}},
                            @endforeach
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Written By:</td>
                        <td class="writer">
                        @foreach($novel_writers as $novel_writer)
                        @foreach($novel_writer->writers as $writer)
                        {{$writer->name}}
                        {{$writer->lastname}}

                        @endforeach
                        @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="specs flex column">
            <h4>Specs</h4>
            <table class="table">
                <thead>

                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Series:</td>
                        <td class="serie_name">
                            @foreach($series as $serie)
                            @if($serie->id == $novel->serie_id)
                            {{$serie->title}}
                            @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">U.S.Price:</td>
                        <td>{{$novel->price}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">On Sale Date:</td>
                        <td>{{$novel->on_sale_date}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Volume/Issue #:</td>
                        <td>{{$novel->volume}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Trim Size:</td>
                        <td>{{$novel->trim_size}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Page Count:</td>
                        <td>{{$novel->pages}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Rated:</td>
                        <td>{{$novel->rated}}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>


</div>