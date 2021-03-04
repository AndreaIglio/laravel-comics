@extends('layouts.admin');
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.sidebar')
        <div class="col-md-10">
            <h1>All novels for the Admin</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Body</th>
                        <th>Available</th>
                        <th>Pages</th>
                        <th>Rated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($novels as $novel)
                    <tr>
                        <td scoper="row">{{ $novel->id }}</td>
                        <td>{{ $novel->name }}</td>
                        <td>${{ $novel->price }}</td>
                        <td>{{ $novel->body }}</td>
                        <td>{{ $novel->available }}</td>
                        <td>{{ $novel->pages }}</td>
                        <td>{{ $novel->rated }}</td>
                        <td>
                            <a href="{{route('admin.novels.show', $novel->id)}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>

                            <a href="{{route('admin.novels.edit', $novel->id)}}" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>

                            <form action="" method="post">
                                @METHOD('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash fa-xs fa-fw"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection