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
                        <td>{{$novel->artist_id}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Written By:</td>
                        <td>{{$novel->writer_id}}</td>
                        <td></td>
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
                        <td>{{$novel->serie_id}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">U.S.Price:</td>
                        <td>$ {{$novel->price}}</td>
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