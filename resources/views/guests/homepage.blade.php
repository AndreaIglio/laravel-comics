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

@include('guests.partials.jumbotron')

@endsection


@section('content')

@include('guests.partials.must_read')

@endsection