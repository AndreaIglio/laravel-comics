@extends('layouts.admin')



@section('content')
@include('admin.sidebar')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif
<div class="admin_structure flex column">
    <div class="col-md-8">
        <h1>Create Novel</h1>
        <form action="{{route('admin.novels.store')}}" method="post" enctype="multipart/form-data">
            <div class="form-group flex column">
                @csrf
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" value="">
                <br>

                <label for="serie_id">Serie</label>
                <select name="serie_id" id="">
                    @foreach($series as $serie)
                    <option value="{{$serie->id}}" name="serie_id">
                        {{$serie->title}}
                    </option>
                    @endforeach
                </select>
                <br>

                <label for="body">Body</label>
                <textarea id="body" class="form-control" name="body" rows="4" cols="10">

                    </textarea>

                <label for="price">Price</label>
                <input id="price" class="form-control" type="number" step="0.01" min="0" max="100" name="price" value="">
                <br>


                <label for="cover">Select a cover:</label>
                <input type="file" name="cover" id="cover" value="" required>

                <label for="trim_size">Volume</label>
                <input type="number" class="form-control" name="volume" value="">
                <br>

                <label for="trim_size">Trim_size</label>
                <input type="text" class="form-control" name="trim_size" value="">
                <br>

                <br>
                <label for="pages">Pages</label>
                <input type="number" class="form-control" name="pages" value="">
                <br>

                <label for="on_sale" name="on_sale_date">On Sale</label>
                <input type="date" class="form-control" name="on_sale_date" value="">
                <br>

                <label for="available">Available</label>
                <select name="available" id="" value="">
                    <option value="1" name="available">1</option>
                    <option value="0" name="available">0</option>
                </select>




                <br>


                <label for="jumbotron">Select a Jumbotron pic:</label>
                <input type="file" name="jumbotron" id="jumbotron" value="jumbotron" required>

                <br>

                <label for="rated">Rated</label>
                <input type="text" name="rated" value="">

                <br>
                <button class="btn btn-success" type="submit">Create</button>



            </div>
        </form>
    </div>
</div>

@endsection