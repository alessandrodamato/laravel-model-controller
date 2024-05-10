<header>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 px-5">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home', '')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Filtri per voto
                            </button>
                            <ul class="dropdown-menu">
                                @for ($i = 0; $i < 10; $i++) <li><a class="dropdown-item"
                                    href="{{route('home', $i)}}">Maggiore di {{$i}}</a></li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </nav>
</header>
