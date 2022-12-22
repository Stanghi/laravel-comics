@extends('layouts.main')

@section('content')
<main>
    <div class="jumbotron"></div>
    <div class="container">
        <div class="current-serie">
            <p>Current series</p>
        </div>

        @include('partials.card')

        <div>
            <button>Load more</button>
        </div>

    </div>
    @include('partials.blueBand')
</main>
@endsection

@section('title')
    comics
@endsection
