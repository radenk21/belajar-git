<nav class="navbar navbar-expand-lg px-4 bg-body-tertiary">
    <div class="container-fluid">
        <a id="webname" class="navbar-brand" data-content="Raden Khairu" href="/">Raden Khairu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav me-auto">
                @foreach ($navbar as $name => $url)
                <li><a class="nav-link" data-content="{{$name}}" href="{{ $url }}">{{$name}}</a></li>
                @endforeach
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('register') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Register</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>