@extends('layouts.main')

@section('content')
<main>
    <div class="dark-bg" >

        <div class="jumbotron"></div>
        <div class="container">
            <div class="current-serie">
                <p>Current series</p>
            </div>

        @include('partials.cards')

        <div>
            <button>Load more</button>
        </div>

    </div>
</div>
    @include('partials.blueBand')
</main>
@endsection

@section('title')
    comics
@endsection



