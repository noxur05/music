<div class="h5">
    Playlist
</div>
<div class="row row-cols-3 row-cols-md-6 g-1">
    @foreach($playlists as $playlist)
        <div class="col">
            <div class="position-relative small text-center p-1 border rounded h-100">
                <div class="fs-3 text-secondary">
                    <i class="bi-file-earmark-music"></i>
                </div>
                <a href="{{ route('playlist', $playlist->slug) }}" class="d-block stretched-link link-dark text-decoration-none mb-1">
                    {{ $playlist->name }}
                </a>
                <div class="small text-secondary">
                    Music: {{ $playlist->playlist_music_count }}
                </div>
            </div>
        </div>
    @endforeach
</div>
