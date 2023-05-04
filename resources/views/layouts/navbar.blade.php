<div class="navbar">
    <a id="webname" data-content="Raden Khairu" href="/">Raden Khairu</a>
    <ul>
        @foreach ($navbar as $name => $url)
            <li><a data-content="{{$name}}" href="{{ $url }}">{{$name}}</a></li>
        @endforeach
    </ul>
</div>