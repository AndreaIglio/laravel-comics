@extends('layouts.guest')
@section('title')

Comics | DC

@endsection

@section('navbar-top')

@include('guests.partials.navbar_top')

@endsection


@section ('navbar-bottom')

@include('guests.partials.navbar_bottom')

@endsection

@section('jumbotron')


@endsection

@section('content')


@include('guests.partials.novel_description')


@include('guests.partials.info')


@endsection

@section('footer')

@include('guests.partials.footer')

@include('guests.partials.sign_up')


@endsection