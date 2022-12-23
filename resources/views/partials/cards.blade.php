@foreach ($comics as $comic )
<div class="card" >
    <a href="{{ route('comicsInfo', ['id' => $comic['id']]) }}" >
        <div class="thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
        <p>{!! $comic['title'] !!}</p>
    </a>
</div>
@endforeach
