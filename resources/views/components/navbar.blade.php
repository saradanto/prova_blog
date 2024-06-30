<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4">
        <a class="navbar-brand" href="{{route('welcome')}}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('articles.index')}}">Lista Articoli</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('categories.index')}}">Lista Categorie</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li><br>
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a></li>

                    @else


                <li class="nav-item">
                    <li class="nav-item"><a class="nav-link" href="{{route('profile', [Auth::id()])}}">Profilo {{Auth::user()->name}}</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-secondary btn-sm" type="submit">Logout</button>
                    </form>
                </a></li>

                @endguest

            </ul>
        </div>
    </div>
</nav>
