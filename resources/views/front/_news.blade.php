@foreach ($posts as $post)
    <article class="news-article" data-category="{{ 'category-' . $post->categories->first()?->id }}">
        <div class="article-image">
            <img src="{{ $post->getFirstMediaUrl('media') }}" alt="{{ $post->title }}">
            <div class="article-category">{{ $post->categories->first()?->name }}</div>
            <div class="article-date">{{ $post->created_at->format('d') }}<br>{{ $post->created_at->format('M') }}</div>
        </div>
        <div class="article-content">
            <div class="article-meta">
                <span><i class="fas fa-clock"></i> {{ human_time($post->created_at) }}</span>
                <span><i class="fas fa-eye"></i> {{ $post->view }}</span>
            </div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->excerpt }}</p>
            <div class="article-footer">
                <a href="{{ $post->showUrl() }}" class="article-link">Xem Chi Tiết →</a>
                <div class="article-tags">
                    @foreach ($post->tags as $tag)
                        <span class="tag">#{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </article>
@endforeach
