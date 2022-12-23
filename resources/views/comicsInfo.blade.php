@extends('layouts.main')

@section('content')
    <main>
        <div class="jumbotron"></div>

        <div class="container info">
            <div class="x">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

                <div class="comicsInfo">
                    <h1>{{ $comic['title'] }}</h1>

                    <div class="price">
                        <p>U.S. Price: {{ $comic['price'] }}</p>
                    </div>

                    <p>
                        {!! $comic['description'] !!}
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('title')
    Comics info
@endsection
