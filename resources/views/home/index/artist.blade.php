<div class="h5">
    Artists
</div>
<div class="row row-cols-3 row-cols-md-6 g-1">
    @foreach($artists as $artist)
        <div class="col">
            <div class="position-relative small text-center p-1 border rounded h-100">
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
