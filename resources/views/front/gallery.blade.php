@extends('layouts.front')

@section('meta')
    <title>Thư Viện Hình Ảnh & Video Vinhomes Green Paradise | Tour 360°</title>
    <meta name="description"
        content="Xem hình ảnh thực tế, video flycam, tour 360° dự án Vinhomes Green Paradise. Paradise Lagoon 443ha, sân golf Tiger Woods, Marina 5 sao">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Thư Viện Hình Ảnh & Video Vinhomes Green Paradise | Tour 360°">
    <meta property="og:description"
        content="Xem hình ảnh thực tế, video flycam, tour 360° dự án Vinhomes Green Paradise. Paradise Lagoon 443ha, sân golf Tiger Woods, Marina 5 sao">
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <meta property="og:locale" content="vi_VN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Thư Viện Hình Ảnh & Video Vinhomes Green Paradise | Tour 360°">
    <meta name="twitter:description"
        content="Xem hình ảnh thực tế, video flycam, tour 360° dự án Vinhomes Green Paradise. Paradise Lagoon 443ha, sân golf Tiger Woods, Marina 5 sao">
    <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection

@section('css')
    <!-- Custom CSS for Gallery Page -->
    <style>
        /* Page specific styles */
        .page-hero {
            padding: 120px 0 80px;
            position: relative;
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
        }

        .breadcrumb {
            display: flex;
            justify-content: center;
            gap: 15px;
            font-size: 14px;
        }

        .breadcrumb a {
            color: white;
        }

        .section-padding {
            padding: 80px 0;
        }

        .bg-gray {
            background-color: #f8f9fa;
        }

        /* Filter Section */
        .filter-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            padding: 20px 30px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .filter-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-tab {
            padding: 12px 20px;
            background: #f8f9fa;
            border: none;
            border-radius: 25px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-tab:hover {
            background: #e9ecef;
        }

        .filter-tab.active {
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
        }

        .filter-tab .count {
            background: rgba(0, 0, 0, 0.1);
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
        }

        .filter-tab.active .count {
            background: rgba(255, 255, 255, 0.2);
        }

        .view-options {
            display: flex;
            gap: 5px;
        }

        .view-btn {
            width: 40px;
            height: 40px;
            border: none;
            background: #f8f9fa;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .view-btn:hover,
        .view-btn.active {
            background: #00a896;
            color: white;
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .gallery-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            opacity: 0;
            transform: scale(0.9);
            display: none;
        }

        .gallery-card.show {
            display: block;
            opacity: 1;
            transform: scale(1);
        }

        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .gallery-card.featured {
            grid-column: span 2;
        }

        .gallery-image {
            position: relative;
            height: 280px;
            overflow: hidden;
        }

        .gallery-card.featured .gallery-image {
            height: 400px;
        }

        .gallery-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-card:hover .gallery-image img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.7) 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .gallery-card:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-actions {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }

        .gallery-actions button {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s;
        }

        .gallery-actions button:hover {
            background: white;
            transform: scale(1.1);
        }

        .gallery-info {
            padding: 25px;
        }

        .gallery-category {
            display: inline-block;
            padding: 6px 12px;
            background: #00a896;
            color: white;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .gallery-info h4 {
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .gallery-info p {
            color: #6c757d;
            font-size: 14px;
        }

        /* Load More */
        .load-more-wrapper {
            text-align: center;
            margin-top: 50px;
        }

        .btn-load-more {
            padding: 15px 40px;
            background: white;
            border: 2px solid #00a896;
            border-radius: 25px;
            color: #00a896;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-load-more:hover {
            background: #00a896;
            color: white;
        }

        /* Video Gallery */
        .video-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-top: 50px;
        }

        .video-card.main {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-info {
            padding: 30px;
        }

        .video-info h3 {
            margin-bottom: 10px;
            color: #1a1a1a;
        }

        .video-meta {
            display: flex;
            gap: 20px;
            margin-top: 15px;
            color: #6c757d;
            font-size: 14px;
        }

        .video-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .video-item {
            display: flex;
            gap: 15px;
            background: white;
            padding: 15px;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .video-item:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .video-thumbnail {
            position: relative;
            width: 120px;
            height: 70px;
            border-radius: 8px;
            overflow: hidden;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-duration {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 11px;
        }

        .video-details h4 {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .video-details p {
            font-size: 12px;
            color: #6c757d;
        }

        /* Virtual Tour */
        .virtual-tour-wrapper {
            margin-top: 50px;
        }

        .tour-frame {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .tour-frame img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .tour-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-start-tour {
            padding: 20px 40px;
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            border: none;
            border-radius: 50px;
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s;
        }

        .btn-start-tour:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(0, 168, 150, 0.4);
        }

        .tour-locations h3 {
            margin-bottom: 20px;
            text-align: center;
        }

        .location-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }

        .location-btn {
            padding: 20px;
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .location-btn:hover,
        .location-btn.active {
            border-color: #00a896;
            background: linear-gradient(135deg, rgba(0, 168, 150, 0.05) 0%, rgba(2, 195, 154, 0.05) 100%);
        }

        .location-btn i {
            font-size: 32px;
            color: #00a896;
        }

        /* Download Section */
        .download-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .download-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s;
        }

        .download-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .download-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .download-icon i {
            font-size: 36px;
            color: white;
        }

        .download-meta {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            font-size: 13px;
            color: #6c757d;
        }

        .btn-download {
            width: 100%;
            padding: 12px 20px;
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            border: none;
            border-radius: 25px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-download:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 168, 150, 0.3);
        }

        /* Lightbox */
        .lightbox-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
        }

        .lightbox-content {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 90%;
        }

        .lightbox-close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .lightbox-close:hover {
            color: #00a896;
        }

        .lightbox-caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: white;
            padding: 10px 0;
        }

        @media (max-width: 992px) {
            .video-grid {
                grid-template-columns: 1fr;
            }

            .gallery-card.featured {
                grid-column: span 1;
            }
        }

        @media (max-width: 768px) {
            .filter-wrapper {
                flex-direction: column;
                gap: 20px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Schema for Gallery -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ImageGallery",
            "name": "Thư viện hình ảnh Vinhomes Green Paradise",
            "description": "Bộ sưu tập hình ảnh và video dự án",
            "numberOfItems": 48
        }
    </script>
@endsection

@section('page')
    <!-- Page Hero -->
    <section class="page-hero"
        style="background: linear-gradient(135deg, rgba(5,102,141,0.9) 0%, rgba(0,168,150,0.8) 100%), url('{{asset('assets/images/photo-1506905925346-21bda4d32df4.jpeg')}}') center/cover;">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-title">Thư Viện Hình Ảnh</h1>
                <p class="page-subtitle">Khám Phá Vẻ Đẹp Green Paradise</p>
                <div class="breadcrumb">
                    <a href="index.html">Trang Chủ</a>
                    <span>/</span>
                    <span>Thư Viện</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Filter Section -->
    <section class="gallery-filter section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">KHÁM PHÁ DỰ ÁN</span>
                <h2 class="section-title">Hình Ảnh<br><span>Thực Tế</span></h2>
            </div>

            <div class="filter-wrapper">
                <div class="filter-tabs">
                    <button class="filter-tab active" data-filter="all">
                        <i class="fas fa-images"></i> Tất Cả
                        <span class="count">{{$galleries->count()}}</span>
                    </button>
                    
                    @foreach($categories as $category)
                    <button class="filter-tab" data-filter="category-{{$category->id}}">
                        <i class="fas fa-map"></i> {{$category->name}}
                        <span class="count">{{$category->albums->count()}}</span>
                    </button>
                    @endforeach
                    
                </div>

                <div class="view-options">
                    <button class="view-btn active" data-view="grid">
                        <i class="fas fa-th"></i>
                    </button>
                    <button class="view-btn" data-view="list">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Gallery Section -->
    <section class="main-gallery-section">
        <div class="container">
            <div class="gallery-grid" id="galleryGrid">
                @foreach ($galleries as $gallery)
                    @foreach($gallery->getMedia('media') as $media)
                    <div class="gallery-card @if($gallery->is_featured) featured @endif show" data-category="category-{{$gallery->categories->first()?->id}}">
                        <div class="gallery-image">
                            <img src="{{$media->getUrl()}}" alt="{{$gallery->name}}">
                            <div class="gallery-overlay">
                                <div class="gallery-actions">
                                    <button class="btn-zoom"
                                        data-image="{{$media->getUrl()}}">
                                        <i class="fas fa-search-plus"></i>
                                    </button>
                                    <button class="btn-share">
                                        <i class="fas fa-share-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-info">
                            <span class="gallery-category">Tiện Ích</span>
                            <h4>Landmark Harbour Marina 5 Sao</h4>
                            <p>Cảng du thuyền đẳng cấp quốc tế</p>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="load-more-wrapper">
                <button class="btn-load-more">
                    <span>Xem Thêm</span>
                    <i class="fas fa-arrow-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Video Gallery Section -->
    <section class="video-gallery-section section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">VIDEO DỰ ÁN</span>
                <h2 class="section-title">Khám Phá<br><span>Qua Video</span></h2>
            </div>

            <div class="video-grid">
                <div class="video-card main">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Green Paradise Overview"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h3>Giới Thiệu Tổng Quan Dự Án</h3>
                        <p>Video flycam toàn cảnh dự án Vinhomes Green Paradise với quy mô 2,870ha</p>
                        <div class="video-meta">
                            <span><i class="fas fa-play"></i> 2.5M views</span>
                            <span><i class="fas fa-clock"></i> 5:30</span>
                        </div>
                    </div>
                </div>

                <div class="video-list">
                    <div class="video-item">
                        <div class="video-thumbnail">
                            <img src="{{asset('assets/images/photo-1506905925346-21bda4d32df4.jpeg')}}"
                                alt="Video thumbnail">
                            <span class="video-duration">3:45</span>
                        </div>
                        <div class="video-details">
                            <h4>Paradise Lagoon 443ha</h4>
                            <p>150K views • 2 ngày trước</p>
                        </div>
                    </div>

                    <div class="video-item">
                        <div class="video-thumbnail">
                            <img src="{{asset('assets/images/photo-1587381420270-3e1a5b9e6904.jpeg')}}"
                                alt="Video thumbnail">
                            <span class="video-duration">4:20</span>
                        </div>
                        <div class="video-details">
                            <h4>Sân Golf Tiger Woods</h4>
                            <p>85K views • 1 tuần trước</p>
                        </div>
                    </div>

                    <div class="video-item">
                        <div class="video-thumbnail">
                            <img src="{{asset('assets/images/photo-1512917774080-9991f1c4c750.jpeg')}}"
                                alt="Video thumbnail">
                            <span class="video-duration">6:15</span>
                        </div>
                        <div class="video-details">
                            <h4>Nhà Mẫu The Haven Bay</h4>
                            <p>200K views • 2 tuần trước</p>
                        </div>
                    </div>

                    <div class="video-item">
                        <div class="video-thumbnail">
                            <img src="{{asset('assets/images/photo-1540979388789-6cee28a1cdc9.jpeg')}}"
                                alt="Video thumbnail">
                            <span class="video-duration">2:30</span>
                        </div>
                        <div class="video-details">
                            <h4>Marina 5 Sao Quốc Tế</h4>
                            <p>50K views • 1 tháng trước</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Virtual Tour Section -->
    <section class="virtual-tour-section section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">CÔNG NGHỆ 360°</span>
                <h2 class="section-title">Tham Quan<br><span>Thực Tế Ảo</span></h2>
            </div>

            <div class="virtual-tour-wrapper">
                <div class="tour-frame">
                    <img src="{{asset('assets/images/vinhomes-green-paradise-tam-co-quoc-te.jpeg')}}" alt="360 Tour">
                    <div class="tour-overlay">
                        <button class="btn-start-tour">
                            <i class="fas fa-vr-cardboard"></i>
                            <span>Bắt Đầu Tour 360°</span>
                        </button>
                    </div>
                </div>

                <div class="tour-locations">
                    <h3>Chọn Địa Điểm Tham Quan</h3>
                    <div class="location-grid">
                        <button class="location-btn active">
                            <i class="fas fa-home"></i>
                            <span>Biệt thự mẫu</span>
                        </button>
                        <button class="location-btn">
                            <i class="fas fa-water"></i>
                            <span>Paradise Lagoon</span>
                        </button>
                        <button class="location-btn">
                            <i class="fas fa-golf-ball"></i>
                            <span>Sân Golf</span>
                        </button>
                        <button class="location-btn">
                            <i class="fas fa-ship"></i>
                            <span>Marina</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section class="download-gallery-section section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">TÀI LIỆU DỰ ÁN</span>
                <h2 class="section-title">Tải Xuống<br><span>Catalog & Brochure</span></h2>
            </div>

            <div class="download-grid">
                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <h3>E-Brochure Tổng Quan</h3>
                    <p>Thông tin chi tiết về dự án, vị trí, tiện ích</p>
                    <div class="download-meta">
                        <span>PDF • 25MB</span>
                        <span>Cập nhật: 20/09/2025</span>
                    </div>
                    <button class="btn-download">
                        <i class="fas fa-download"></i>
                        <span>Tải Xuống</span>
                    </button>
                </div>

                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3>Bộ Sưu Tập Hình Ảnh</h3>
                    <p>50+ hình ảnh chất lượng cao về dự án</p>
                    <div class="download-meta">
                        <span>ZIP • 150MB</span>
                        <span>Cập nhật: 18/09/2025</span>
                    </div>
                    <button class="btn-download">
                        <i class="fas fa-download"></i>
                        <span>Tải Xuống</span>
                    </button>
                </div>

                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-file-excel"></i>
                    </div>
                    <h3>Bảng Giá & Chính Sách</h3>
                    <p>Bảng giá chi tiết và chính sách bán hàng</p>
                    <div class="download-meta">
                        <span>Excel • 2MB</span>
                        <span>Cập nhật: 25/09/2025</span>
                    </div>
                    <button class="btn-download">
                        <i class="fas fa-download"></i>
                        <span>Tải Xuống</span>
                    </button>
                </div>

                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3>Mô Hình 3D Dự Án</h3>
                    <p>File 3D để xem chi tiết kiến trúc</p>
                    <div class="download-meta">
                        <span>3D File • 80MB</span>
                        <span>Cập nhật: 15/09/2025</span>
                    </div>
                    <button class="btn-download">
                        <i class="fas fa-download"></i>
                        <span>Tải Xuống</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox-modal" id="lightboxModal">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightboxImage">
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>
@endsection

@section('js')
    <script>
        // Filter functionality
        const filterTabs = document.querySelectorAll('.filter-tab');
        const galleryCards = document.querySelectorAll('.gallery-card');

        filterTabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                filterTabs.forEach(function(t) {
                    t.classList.remove('active');
                });
                tab.classList.add('active');

                const filter = tab.getAttribute('data-filter');

                galleryCards.forEach(function(card) {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        setTimeout(function() {
                            card.classList.add('show');
                        }, 10);
                    } else {
                        card.classList.remove('show');
                        setTimeout(function() {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // View options (Grid/List)
        const viewBtns = document.querySelectorAll('.view-btn');
        const galleryGrid = document.getElementById('galleryGrid');

        viewBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                viewBtns.forEach(function(b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');

                const view = btn.getAttribute('data-view');
                if (galleryGrid) {
                    if (view === 'list') {
                        galleryGrid.style.gridTemplateColumns = '1fr';
                    } else {
                        galleryGrid.style.gridTemplateColumns = 'repeat(auto-fill, minmax(350px, 1fr))';
                    }
                }
            });
        });

        // Lightbox
        const lightboxModal = document.getElementById('lightboxModal');
        const lightboxImage = document.getElementById('lightboxImage');
        const lightboxClose = document.querySelector('.lightbox-close');

        // Add event listeners to all zoom buttons
        document.querySelectorAll('.btn-zoom').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const imgSrc = this.getAttribute('data-image');
                if (lightboxImage && lightboxModal) {
                    lightboxImage.src = imgSrc;
                    lightboxModal.style.display = 'block';
                }
            });
        });

        // Close lightbox
        if (lightboxClose) {
            lightboxClose.addEventListener('click', function() {
                if (lightboxModal) {
                    lightboxModal.style.display = 'none';
                }
            });
        }

        // Close lightbox on outside click
        window.addEventListener('click', function(e) {
            if (e.target === lightboxModal) {
                lightboxModal.style.display = 'none';
            }
        });

        // Load more functionality
        const loadMoreBtn = document.querySelector('.btn-load-more');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                const originalContent = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang tải...';

                setTimeout(() => {
                    this.innerHTML = '<span>Đã tải hết</span>';
                    this.disabled = true;
                    this.style.opacity = '0.5';
                    this.style.cursor = 'not-allowed';
                }, 1500);
            });
        }

        // Share buttons
        document.querySelectorAll('.btn-share').forEach(function(btn) {
            btn.addEventListener('click', function() {
                alert('Chức năng chia sẻ sẽ sớm được cập nhật!');
            });
        });

        // Virtual tour button
        const startTourBtn = document.querySelector('.btn-start-tour');
        if (startTourBtn) {
            startTourBtn.addEventListener('click', function() {
                alert('Tour 360° sẽ sớm được cập nhật!');
            });
        }

        // Location buttons
        document.querySelectorAll('.location-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                // Remove active class from all
                document.querySelectorAll('.location-btn').forEach(function(b) {
                    b.classList.remove('active');
                });
                // Add active to clicked
                this.classList.add('active');
            });
        });


        $(function() {
            
        });
    </script>
@endsection
