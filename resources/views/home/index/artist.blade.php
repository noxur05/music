<div class="h5">
    Artists
</div>
<div class="row row-cols-2 row-cols-md-4 g-1 g-sm-2">
    @foreach($artists as $artist)
        <div class="col">
            <div class="position-relative small text-center p-1 p-sm-2 border rounded h-100">
                <div class="fs-3 text-secondary">
                    <i class="bi-person-circle"></i>
                </div>
                <a href="{{ route('artist', $artist->id) }}" class="d-block stretched-link link-dark text-decoration-none mb-1">
                    {{ $artist->name }}
                </a>
                <div class="small text-secondary">
                    Music: {{ $artist->music_count }}
                </div>
                <div class="small text-secondary">
                    Album: {{ $artist->albums_count }}
                </div>
            </div>
        </div>
    @endforeach
</div>
