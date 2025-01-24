<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" aria-label="Navbar">
    <div class="container-lg">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi-music-note-beamed"></i>
            Music
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link link-primary" href="#">
                        <i class="bi-search"></i> Search
                    </a>
                </li>
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category', $category->slug) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
