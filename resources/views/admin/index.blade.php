@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <ul class="list-unstyled">
                <li><a href="{{ route('admin.novels.index') }}"><i class="fas fa-book-reader"></i> Novels</a></li>
                <li><a href="#"><i class="fas fa-film"></i> Articles</a></li>
                <li><a href="#"><i class="fas fa-paint-brush"></i> Artists</a></li>
                <li><a href="#"><i class="fas fa-pencil-alt"></i> Writers</a></li>
                <li><a href="#"><i class="fas fa-newspaper"></i> Series_Novels</a></li>
                <li><a href="#"><i class="fas fa-newspaper"></i> Series_Articles</a></li>

            </ul>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection