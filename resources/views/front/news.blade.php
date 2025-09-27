@extends('layouts.front')

@section('meta')
    <title>Tin Tức & Sự Kiện - Vinhomes Green Paradise Cần Giờ</title>
    <meta name="description"
        content="Cập nhật tin tức mới nhất về dự án Vinhomes Green Paradise - Tiến độ xây dựng, sự kiện, ưu đãi đặc biệt">
    <meta property="og:title" content="Tin Tức & Sự Kiện - Vinhomes Green Paradise Cần Giờ">
    <meta property="og:description" content="Cập nhật tin tức mới nhất về dự án Vinhomes Green Paradise - Tiến độ xây dựng, sự kiện, ưu đãi đặc biệt">
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <link rel="canonical" href="{{url()->current()}}">
@endsection

@section('css')
    <style>
        /* Page Hero */
        .page-hero {
            padding: 120px 0 80px;
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .page-hero-content {
            text-align: center;
            color: white;
        }

        .page-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 15px;
            color: white;
        }

        .page-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }

        .breadcrumb {
            display: flex;
            justify-content: center;
            gap: 15px;
            font-size: 14px;
        }

        .breadcrumb a {
            color: white;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        /* News Categories */
        .news-categories-section {
            padding: 40px 0;
            background: white;
            border-bottom: 2px solid #e9ecef;
            position: sticky;
            top: 80px;
            z-index: 100;
        }

        .news-categories {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .category-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 28px;
            background: #f8f9fa;
            border: 2px solid transparent;
            border-radius: 30px;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.3s;
        }

        .category-btn:hover {
            background: #e9ecef;
            transform: translateY(-2px);
        }

        .category-btn.active {
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(0, 168, 150, 0.3);
        }

        .category-btn i {
            font-size: 16px;
        }

        /* Featured Article */
        .news-featured {
            padding: 60px 0;
            background: linear-gradient(to bottom, #f8f9fa 0%, white 100%);
        }

        .featured-article {
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 50px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .featured-image {
            position: relative;
            height: 450px;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .featured-category {
            position: absolute;
            top: 30px;
            left: 30px;
            background: #ff4757;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .featured-date {
            position: absolute;
            top: 30px;
            right: 30px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 15px;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .featured-date .day {
            display: block;
            font-size: 28px;
            font-weight: 700;
            line-height: 1;
        }

        .featured-date .month {
            display: block;
            font-size: 12px;
            margin-top: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .featured-content {
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .featured-content h2 {
            color: #212529;
            margin-bottom: 20px;
            line-height: 1.3;
            font-size: 2rem;
        }

        .featured-content p {
            color: #6c757d;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .article-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 25px;
            font-size: 14px;
            color: #6c757d;
        }

        .article-meta i {
            color: #00a896;
            margin-right: 5px;
        }

        .featured-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .read-more-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #00a896;
            font-weight: 600;
            font-size: 16px;
            transition: gap 0.3s;
        }

        .read-more-btn:hover {
            gap: 15px;
        }

        .social-share {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .social-share span {
            color: #6c757d;
            font-size: 14px;
        }

        .social-share a {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #f8f9fa;
            color: #6c757d;
            transition: all 0.3s;
        }

        .social-share a:hover {
            transform: translateY(-3px);
        }

        .share-fb:hover {
            background: #1877f2;
            color: white;
        }

        .share-tw:hover {
            background: #1da1f2;
            color: white;
        }

        .share-in:hover {
            background: #0077b5;
            color: white;
        }

        /* News Grid */
        .news-list {
            padding: 60px 0;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .news-article {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
        }

        .news-article:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        }

        .article-image {
            position: relative;
            height: 240px;
            overflow: hidden;
        }

        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .news-article:hover .article-image img {
            transform: scale(1.1);
        }

        .article-category {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .article-date {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.95);
            color: #00a896;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            font-weight: 700;
            line-height: 1.2;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .article-content {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .article-content h3 {
            color: #212529;
            margin-bottom: 15px;
            line-height: 1.4;
            font-size: 1.3rem;
        }

        .article-content p {
            color: #6c757d;
            line-height: 1.7;
            margin-bottom: 20px;
            flex: 1;
        }

        .article-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .article-link {
            color: #00a896;
            font-weight: 600;
            font-size: 14px;
            transition: padding-left 0.3s;
        }

        .article-link:hover {
            padding-left: 5px;
        }

        .article-tags {
            display: flex;
            gap: 8px;
        }

        .tag {
            font-size: 12px;
            color: #6c757d;
            background: #f8f9fa;
            padding: 4px 10px;
            border-radius: 15px;
        }

        /* Load More */
        .load-more-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .load-more-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 40px;
            background: white;
            border: 2px solid #00a896;
            color: #00a896;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .load-more-btn:hover {
            background: #00a896;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 168, 150, 0.3);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .page-btn {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            color: #6c757d;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .page-btn:hover:not(:disabled) {
            background: #f8f9fa;
            border-color: #00a896;
            color: #00a896;
        }

        .page-btn.active {
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
            border-color: transparent;
        }

        .page-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .page-dots {
            color: #6c757d;
            padding: 0 10px;
        }

        /* Newsletter Section */
        .newsletter-section {
            padding: 60px 0;
            background: linear-gradient(135deg, #00a896 0%, #05668d 100%);
        }

        .newsletter-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px;
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .newsletter-icon {
            font-size: 60px;
            color: white;
            opacity: 0.9;
        }

        .newsletter-content {
            flex: 1;
        }

        .newsletter-content h3 {
            color: white;
            margin-bottom: 10px;
        }

        .newsletter-content p {
            color: rgba(255, 255, 255, 0.9);
        }

        .newsletter-inline {
            display: flex;
            gap: 15px;
            flex: 1;
            max-width: 500px;
        }

        .newsletter-inline input {
            flex: 1;
            padding: 15px 25px;
            border-radius: 50px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .newsletter-inline input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .newsletter-inline button {
            padding: 15px 35px;
            background: white;
            color: #00a896;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .newsletter-inline button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .nav-menu a.active {
            color: #00a896;
        }

        @media (max-width: 992px) {
            .featured-article {
                grid-template-columns: 1fr;
            }

            .featured-content {
                padding: 30px;
            }

            .news-categories-section {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .news-grid {
                grid-template-columns: 1fr;
            }

            .newsletter-box {
                flex-direction: column;
                text-align: center;
                padding: 30px;
            }

            .newsletter-inline {
                flex-direction: column;
                width: 100%;
            }

            .featured-content h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .category-btn {
                padding: 8px 16px;
                font-size: 14px;
            }

            .category-btn i {
                font-size: 14px;
            }

            .pagination {
                flex-wrap: wrap;
            }
        }


        @media screen and (max-width: 1399px) {}

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 991px) {}

        @media screen and (max-width: 767px) {}

        @media screen and (max-width: 575px) {}
    </style>
@endsection

@section('page')
    <!-- Page Hero -->
    <section class="page-hero"
        style="background: linear-gradient(135deg, rgba(5,102,141,0.9) 0%, rgba(0,168,150,0.8) 100%), url('{{asset('assets/images/photo-1504711434969-e33886168f5c.jpeg')}}') center/cover;">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-title">Tin Tức & Sự Kiện</h1>
                <p class="page-subtitle">Cập Nhật Mới Nhất Về Dự Án Green Paradise</p>
                <div class="breadcrumb">
                    <a href="/">Trang Chủ</a>
                    <span>/</span>
                    <span>Tin Tức</span>
                </div>
            </div>
        </div>
    </section>

    <!-- News Categories -->
    <section class="news-categories-section">
        <div class="container">
            <div class="news-categories">
                <button class="category-btn active" data-category="all">
                    <i class="fas fa-newspaper"></i> Tất Cả
                </button>
                @foreach ($categories as $category)
                    <button class="category-btn" data-category="category-{{ $category->id }}">
                        <i class="fas fa-tags"></i> {{ $category->name }}
                    
                @endforeach
                {{-- <button class="category-btn" data-category="project">
                    <i class="fas fa-building"></i> Tin Dự Án
                </button>
                <button class="category-btn" data-category="event">
                    <i class="fas fa-calendar-alt"></i> Sự Kiện
                </button>
                <button class="category-btn" data-category="promotion">
                    <i class="fas fa-tags"></i> Ưu Đãi
                </button>
                <button class="category-btn" data-category="progress">
                    <i class="fas fa-chart-line"></i> Tiến Độ
                </button>
                <button class="category-btn" data-category="lifestyle">
                    <i class="fas fa-heart"></i> Lifestyle
                </button> --}}
            </div>
        </div>
    </section>

    <!-- Featured Article -->
    @if ($featured = $posts->shift())
        <section class="news-featured">
            <div class="container">
                <article class="featured-article">
                    <div class="featured-image">
                        <img src="{{ $featured->getFirstMediaUrl('media') }}" alt="{{$featured->title}}">
                        <div class="featured-category">SỰ KIỆN HOT</div>
                        <div class="featured-date">
                            <span class="day">{{ $featured->created_at->format('d') }}</span>
                            <span class="month">{{ $featured->created_at->format('M') }}</span>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="article-meta">
                            <span><i class="fas fa-user"></i> Admin</span>
                            <span><i class="fas fa-eye"></i> {{ $featured->view }} lượt xem</span>
                            <span><i class="fas fa-comments"></i> 89 bình luận</span>
                            <span><i class="fas fa-share-alt"></i> 456 chia sẻ</span>
                        </div>
                        <h2>{{ $featured->title }}</h2>
                        <p>{{$featured->excerpt}}</p>
                        <div class="featured-actions">
                            <a href="{{$featured->showUrl()}}" class="read-more-btn">
                                Đọc Tiếp <i class="fas fa-arrow-right"></i>
                            </a>
                            <div class="social-share">
                                <span>Chia sẻ:</span>
                                <a href="#" class="share-fb"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="share-tw"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="share-in"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    @endif

    <!-- News Grid -->
    <section class="news-list">
        <div class="container">
            <div class="news-grid">

                @foreach ($posts as $post)
                    <article class="news-article" data-category="{{'category-' .$post->categories->first()?->id}}">
                        <div class="article-image">
                            <img src="{{ $post->getFirstMediaUrl('media') }}" alt="{{ $post->title }}">
                            <div class="article-category">{{$post->categories->first()?->name}}</div>
                            <div class="article-date">{{ $post->created_at->format('d') }}<br>{{ $post->created_at->format('M') }}</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span><i class="fas fa-clock"></i> {{human_time($post->created_at)}}</span>
                                <span><i class="fas fa-eye"></i> {{$post->view}}</span>
                            </div>
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->excerpt }}</p>
                            <div class="article-footer">
                                <a href="{{$post->showUrl()}}" class="article-link">Xem Chi Tiết →</a>
                                <div class="article-tags">
                                    @foreach ($post->tags as $tag)
                                        <span class="tag">#{{$tag->name}}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach

            </div>

            <!-- Load More Button -->
            <div class="load-more-section">
                <button class="load-more-btn">
                    <i class="fas fa-plus-circle"></i>
                    Xem Thêm Tin Tức
                </button>
            </div>

            <!-- Pagination -->
            {{-- <div class="pagination">
                <button class="page-btn prev" disabled>
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn">5</button>
                <span class="page-dots">...</span>
                <button class="page-btn">12</button>
                <button class="page-btn next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div> --}}
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-box">
                <div class="newsletter-icon">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <div class="newsletter-content">
                    <h3>Đăng Ký Nhận Bản Tin</h3>
                    <p>Cập nhật tin tức mới nhất về dự án và nhận ưu đãi độc quyền dành riêng cho thành viên</p>
                </div>
                <form class="newsletter-inline" onsubmit="registerNewsletter(this, event)">
                    <input type="email" name="email" placeholder="Nhập email của bạn" required>
                    <button type="submit">
                        Đăng Ký Ngay
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        // Category filter
        const categoryBtns = document.querySelectorAll('.category-btn');
        const newsArticles = document.querySelectorAll('.news-article');

        categoryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                categoryBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // Filter articles
                const category = btn.getAttribute('data-category');

                newsArticles.forEach(article => {
                    if (category === 'all' || article.getAttribute('data-category') === category) {
                        article.style.display = 'flex';
                        setTimeout(() => {
                            article.style.opacity = '1';
                            article.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        article.style.opacity = '0';
                        article.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            article.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    </script>
@endsection
