<div class="bg-light border-top border-bottom">
    <div class="container-lg text-center py-4">
        <div class="row row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 g-2">
            @foreach($categories as $category)
                <div class="col">
                    <div class="position-relative text-bg-secondary p-3 border rounded">
                        <div class="fs-1">
                            <i class="bi-music-note-beamed"></i>
                        </div>
                        <a href="{{ route('category', $category->slug) }}" class="stretched-link link-light text-decoration-none">
                            {{ $category->name }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
