<div class="position-relative text-center p-1 p-sm-2 border rounded h-100">
    <div class="fs-3 text-secondary">
        <i class="bi-music-note-beamed"></i>
    </div>
    <a href="{{ route('music', $m->slug) }}" class="d-block stretched-link link-dark text-decoration-none mb-1">
        {{ $m->name }}
    </a>
    <div class="small">
        <span class="me-2">
            <i class="bi-file-earmark-music-fill text-secondary"></i> {{ $m->views }}
        </span>
        <span class="me-2">
            <i class="bi-file-earmark-arrow-down-fill text-secondary"></i> {{ $m->downloads }}
        </span>
        <span>
            <i class="bi-bookmark-heart-fill text-secondary"></i> {{ $m->favorites }}
        </span>
    </div>
    <div class="small text-secondary">
        Artist: {{ $m->artist->name }}
    </div>
    <div class="small text-secondary">
        Album: {{ $m->album->name }}
    </div>
</div>
