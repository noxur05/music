@extends('layouts.app')
@section('title')
    Music
@endsection
@section('content')
    @include('home.index.category')
    <div class="container-lg py-4">
        <div class="row g-4">
            <div class="col-sm-6">@include('home.index.artist')</div>
            <div class="col-sm-6">@include('home.index.playlist')</div>
        </div>
    </div>
@endsection
