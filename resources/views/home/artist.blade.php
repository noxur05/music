@extends('layouts.app')
@section('title')
    {{ $artist->name }} | Artist
@endsection
@section('content')
    <div class="container-lg py-4">
        <div class="h4 mb-3">
            Artist: {{ $artist->name }}
        </div>
        <div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 g-1 g-sm-2 mb-4">
            @foreach($music as $m)
                <div class="col">
                    @include('app.music')
                </div>
            @endforeach
        </div>
        <div>
            {{ $music->links() }}
        </div>
    </div>
@endsection
