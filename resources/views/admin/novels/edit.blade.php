@extends ('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.sidebar')
        <div class="col-md-10">
            <h1>Edit Novel</h1>

            <div class="form-group flex column">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" value="{{$novel->name}}">
                <br>

                <label for="serie_id">Serie</label>
                <select name="category_id" id="">
                    @foreach($series as $serie)
                    <option value="{{$serie->id}}" name="serie_id">
                        {{$serie->title}}
                    </option>
                    @endforeach
                </select>
                <br>

                <label for="body">Body</label>
                <textarea id="body" class="form-control" type="text" name="body" rows="4" cols="10">
                {{$novel->body}}
                </textarea>

                <label for="price">Price</label>
                <input id="price" class="form-control" type="number" step="0.01" min="0" max="100" name="price" value="{{$novel->price}}">
                <br>

                <label for="cover">Cover Image</label>
                <img src="{{asset($novel->cover)}}" style="width:200px" alt="">


            </div>
            <!-- <img src="{{asset('storage/img/footer/footer-bg.jpg')}}" alt=""> -->
        </div>
    </div>
</div>
@endsection