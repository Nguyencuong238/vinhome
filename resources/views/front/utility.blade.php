@extends('layouts.front')

@section('meta')
    <title>Tiện Ích Vinhomes Green Paradise - Paradise Lagoon, Golf, Marina | All-in-One</title>
<meta name="description" content="Khám phá hệ sinh thái tiện ích all-in-one: Paradise Lagoon 443ha Guinness, 2 sân golf 36 lỗ Tiger Woods, Marina 5 sao, Cleveland Clinic">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Tiện Ích Vinhomes Green Paradise - Paradise Lagoon, Golf, Marina | All-in-One°">
    <meta property="og:description"
        content="Khám phá hệ sinh thái tiện ích all-in-one: Paradise Lagoon 443ha Guinness, 2 sân golf 36 lỗ Tiger Woods, Marina 5 sao, Cleveland Clinic">
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <meta property="og:locale" content="vi_VN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Tiện Ích Vinhomes Green Paradise - Paradise Lagoon, Golf, Marina | All-in-One°">
    <meta name="twitter:description"
        content="Khám phá hệ sinh thái tiện ích all-in-one: Paradise Lagoon 443ha Guinness, 2 sân golf 36 lỗ Tiger Woods, Marina 5 sao, Cleveland Clinic">
    <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection

@section('css')

    <!-- Custom CSS for Utilities Page -->
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
            background: #f8f9fa;
        }
        
        /* Featured Utility */
        .feature-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .feature-badge {
            display: inline-block;
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            margin-bottom: 15px;
        }
        
        .feature-title span {
            color: #00a896;
        }
        
        .feature-subtitle {
            font-size: 1.3rem;
            color: #6c757d;
            margin-bottom: 30px;
        }
        
        .feature-description {
            margin-bottom: 40px;
        }
        
        .feature-highlights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin: 30px 0;
        }
        
        .highlight-item {
            display: flex;
            align-items: start;
            gap: 15px;
        }
        
        .highlight-item i {
            font-size: 24px;
            color: #00a896;
            margin-top: 3px;
        }
        
        .highlight-item strong {
            display: block;
            margin-bottom: 5px;
        }
        
        .highlight-item span {
            color: #6c757d;
            font-size: 14px;
        }
        
        .feature-stats {
            display: flex;
            gap: 40px;
        }
        
        .stat {
            text-align: center;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: #00a896;
            display: block;
        }
        
        .stat-label {
            color: #6c757d;
        }
        
        .feature-image {
            position: relative;
        }
        
        .feature-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }
        
        .image-badge {
            position: absolute;
            top: 30px;
            right: 30px;
            background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            font-weight: 700;
            box-shadow: 0 8px 24px rgba(255,193,7,0.4);
        }
        
        /* Golf Section */
        .golf-wrapper {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 50px;
        }
        
        .golf-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 12px 40px rgba(0,0,0,0.1);
        }
        
        .golf-image img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        
        .golf-info {
            padding: 35px;
        }
        
        .designer-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #f8f9fa;
            padding: 10px 20px;
            border-radius: 25px;
            margin: 15px 0;
        }
        
        .designer-badge img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        
        .golf-features {
            list-style: none;
            margin-top: 20px;
        }
        
        .golf-features li {
            padding: 8px 0;
            color: #6c757d;
        }
        
        .golf-clubhouse {
            background: linear-gradient(135deg, #00a896 0%, #05668d 100%);
            padding: 50px;
            border-radius: 20px;
            color: white;
            margin-top: 40px;
            text-align: center;
        }
        
        .clubhouse-amenities {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .amenity {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        
        .amenity i {
            font-size: 32px;
            color: #f0f3bd;
        }
        
        /* Marina Section */
        .marina-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .marina-title {
            font-size: 2.5rem;
            margin: 20px 0 10px;
        }
        
        .marina-desc {
            margin: 30px 0;
            line-height: 1.8;
            color: #6c757d;
        }
        
        .marina-features {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin: 40px 0;
        }
        
        .marina-feature {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
        }
        
        .marina-feature strong {
            display: block;
            font-size: 2rem;
            color: #00a896;
            margin-bottom: 5px;
        }
        
        .marina-services {
            background: linear-gradient(135deg, rgba(0,168,150,0.05) 0%, rgba(2,195,154,0.05) 100%);
            padding: 30px;
            border-radius: 16px;
        }
        
        .marina-services ul {
            list-style: none;
            margin-top: 20px;
        }
        
        .marina-services li {
            padding: 10px 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .marina-services i {
            color: #28a745;
        }
        
        .marina-gallery {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .marina-main-image img {
            width: 100%;
            border-radius: 20px;
        }
        
        .marina-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .marina-grid img {
            width: 100%;
            border-radius: 12px;
        }
        
        /* Entertainment Grid */
        .entertainment-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }
        
        .entertainment-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .entertainment-card:hover {
            transform: translateY(-10px);
        }
        
        .entertainment-card.large {
            grid-column: span 2;
            grid-row: span 2;
        }
        
        .entertainment-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        
        .entertainment-card.large .entertainment-image {
            height: 400px;
        }
        
        .entertainment-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .entertainment-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #dc3545;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 700;
        }
        
        .entertainment-content {
            padding: 30px;
        }
        
        .entertainment-tags {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .entertainment-tags span {
            padding: 5px 12px;
            background: #f8f9fa;
            border-radius: 15px;
            font-size: 13px;
        }
        
        /* Services Section */
        .services-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        .service-block {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.1);
        }
        
        .service-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .service-header i {
            font-size: 36px;
            color: #00a896;
        }
        
        .service-feature img {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 20px;
        }
        
        .service-feature ul {
            list-style: none;
            margin-top: 20px;
        }
        
        .service-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-top: 30px;
        }
        
        .service-item {
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
            display: flex;
            gap: 15px;
        }
        
        .service-item i {
            font-size: 24px;
            color: #00a896;
        }
        
        /* Sports Grid */
        .sports-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }
        
        .sport-card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s;
        }
        
        .sport-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.15);
        }
        
        .sport-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .sport-icon i {
            font-size: 36px;
            color: white;
        }
        
        .sport-card ul {
            list-style: none;
            margin-top: 20px;
        }
        
        .sport-card li {
            padding: 5px 0;
            color: #6c757d;
            font-size: 14px;
        }
        
        /* Hotels Section */
        .hotels-showcase {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin: 50px 0;
        }
        
        .hotel-item {
            text-align: center;
        }
        
        .hotel-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 16px;
            margin-bottom: 15px;
        }
        
        .hotel-features {
            display: flex;
            justify-content: space-around;
            padding: 50px;
            background: linear-gradient(135deg, #00a896 0%, #05668d 100%);
            border-radius: 20px;
            color: white;
        }
        
        .hotel-feature {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        
        .hotel-feature i {
            font-size: 32px;
            color: #f0f3bd;
        }
        
        /* Smart City */
        .smart-features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }
        
        .smart-card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .smart-card:hover {
            transform: translateY(-10px);
        }
        
        .smart-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, rgba(0,168,150,0.1) 0%, rgba(2,195,154,0.1) 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .smart-icon i {
            font-size: 36px;
            color: #00a896;
        }
        
        /* CTA Section */
        .cta-utilities {
            background: linear-gradient(135deg, #00a896 0%, #05668d 100%);
            color: white;
            text-align: center;
        }
        
        .cta-content h2 {
            color: white;
            margin-bottom: 20px;
        }
        
        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }
        
        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        
        .btn-lg {
            padding: 15px 40px;
            font-size: 16px;
        }
        
        @media (max-width: 992px) {
            .feature-wrapper,
            .marina-content,
            .services-wrapper {
                grid-template-columns: 1fr;
            }
            
            .golf-wrapper {
                grid-template-columns: 1fr;
            }
            
            .entertainment-card.large {
                grid-column: span 1;
                grid-row: span 1;
            }
        }
        
        @media (max-width: 768px) {
            .sports-grid,
            .smart-features {
                grid-template-columns: 1fr;
            }
            
            .hotels-showcase {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .marina-features {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>

    <!-- Schema for Amenities -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Tiện ích Vinhomes Green Paradise",
        "itemListElement": [
                {
                "@type": "ListItem",
                "position": 1,
                "name": "Paradise Lagoon 443ha",
                "description": "Biển hồ nhân tạo lớn nhất thế giới"
                },
                {
                "@type": "ListItem",
                "position": 2,
                "name": "Sân Golf Championship 36 lỗ",
                "description": "Thiết kế bởi Tiger Woods"
                }
            ]
        }
    </script>
@endsection

@section('page')
    
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, rgba(5,102,141,0.9) 0%, rgba(0,168,150,0.8) 100%), url('{{asset('assets/images/photo-1571896349842-33c89424de2d.jpeg')}}') center/cover;">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-title">Tiện Ích Đẳng Cấp</h1>
                <p class="page-subtitle">Hệ Sinh Thái All-in-One Độc Nhất</p>
                <div class="breadcrumb">
                    <a href="/">Trang Chủ</a>
                    <span>/</span>
                    <span>Tiện Ích</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Paradise Lagoon Feature -->
    <section class="featured-utility section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-content">
                    <span class="feature-badge">KỶ LỤC GUINNESS</span>
                    <h2 class="feature-title">Paradise Lagoon <span>443 Hecta</span></h2>
                    <p class="feature-subtitle">Biển Hồ Nhân Tạo Lớn Nhất Thế Giới</p>
                    
                    <div class="feature-description">
                        <p>Paradise Lagoon là trái tim của Vinhomes Green Paradise - một kỳ quan nhân tạo với diện tích 443 hecta, được Guinness công nhận là biển hồ nhân tạo lớn nhất thế giới. Sử dụng nước biển tự nhiên từ biển Cần Giờ, Paradise Lagoon tái hiện vẻ đẹp của Maldives ngay tại Việt Nam.</p>
                        
                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-water"></i>
                                <div>
                                    <strong>Nước biển tự nhiên</strong>
                                    <span>Lọc trực tiếp từ biển Cần Giờ</span>
                                </div>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-umbrella-beach"></i>
                                <div>
                                    <strong>Bãi cát trắng</strong>
                                    <span>5km bãi biển nhân tạo</span>
                                </div>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-swimmer"></i>
                                <div>
                                    <strong>Water Sports</strong>
                                    <span>Kayak, SUP, Sailing</span>
                                </div>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-cocktail"></i>
                                <div>
                                    <strong>Beach Club</strong>
                                    <span>Ẩm thực & giải trí bãi biển</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="feature-stats">
                        <div class="stat">
                            <span class="stat-number">443</span>
                            <span class="stat-label">Hecta diện tích</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">365</span>
                            <span class="stat-label">Ngày nước trong xanh</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">5km</span>
                            <span class="stat-label">Bãi cát trắng</span>
                        </div>
                    </div>
                </div>
                
                <div class="feature-image">
                    <img src="{{asset('assets/images/photo-1506929562872-bb421503ef21.jpeg')}}" alt="Paradise Lagoon">
                    <div class="image-badge">GUINNESS WORLD RECORD</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Golf Course Section -->
    <section class="golf-section section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">GOLF CHAMPIONSHIP</span>
                <h2 class="section-title">2 Sân Golf 36 Lỗ<br><span>Đẳng Cấp Thế Giới</span></h2>
            </div>

            <div class="golf-wrapper">
                <div class="golf-card">
                    <div class="golf-image">
                        <img src="{{asset('assets/images/photo-1587381420270-3e1a5b9e6904.jpeg')}}" alt="Sân West">
                    </div>
                    <div class="golf-info">
                        <h3>Sân West - Sunset Course</h3>
                        <div class="designer-badge">
                            <img src="https://via.placeholder.com/50x50/333/fff?text=TW" alt="Tiger Woods">
                            <span>Tiger Woods Design</span>
                        </div>
                        <p>18 lỗ championship được thiết kế bởi huyền thoại Tiger Woods, mang phong cách links golf đặc trưng với địa hình ven biển tự nhiên.</p>
                        <ul class="golf-features">
                            <li>• Par 72 - 7,200 yards</li>
                            <li>• Ocean view trên 14 lỗ</li>
                            <li>• Bunkers chiến lược</li>
                            <li>• Practice range 350 yards</li>
                        </ul>
                    </div>
                </div>

                <div class="golf-card">
                    <div class="golf-image">
                        <img src="{{asset('assets/images/photo-1535131749006-b7f58c99034b.jpeg')}}" alt="Sân East">
                    </div>
                    <div class="golf-info">
                        <h3>Sân East - Sunrise Course</h3>
                        <div class="designer-badge">
                            <img src="https://via.placeholder.com/50x50/333/fff?text=RTJ" alt="RTJ II">
                            <span>Robert Trent Jones II</span>
                        </div>
                        <p>18 lỗ masterpiece từ Robert Trent Jones II, kết hợp thử thách kỹ thuật với vẻ đẹp cảnh quan nhiệt đới.</p>
                        <ul class="golf-features">
                            <li>• Par 72 - 7,000 yards</li>
                            <li>• Lagoon hazards</li>
                            <li>• Island green lỗ 17</li>
                            <li>• Golf Academy</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="golf-clubhouse">
                <h3>Clubhouse 5 Sao Quốc Tế</h3>
                <div class="clubhouse-amenities">
                    <div class="amenity">
                        <i class="fas fa-utensils"></i>
                        <span>Fine Dining Restaurant</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-spa"></i>
                        <span>Spa & Wellness</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-shopping-bag"></i>
                        <span>Pro Shop</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-trophy"></i>
                        <span>Event Center</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marina Section -->
    <section class="marina-section section-padding">
        <div class="container">
            <div class="marina-content">
                <div class="marina-info">
                    <span class="section-tag">ULTRA LUXURY</span>
                    <h2 class="marina-title">Landmark Harbour Marina</h2>
                    <h3>Cảng Du Thuyền 5 Sao Quốc Tế</h3>
                    
                    <p class="marina-desc">Cảng tàu quốc tế 5 sao đầu tiên và duy nhất tại Việt Nam có khả năng tiếp đón siêu du thuyền 100m+. Được thiết kế theo tiêu chuẩn Mediterranean, Marina là điểm đến của giới thượng lưu toàn cầu.</p>
                    
                    <div class="marina-features">
                        <div class="marina-feature">
                            <strong>500</strong>
                            <span>Bến neo đậu</span>
                        </div>
                        <div class="marina-feature">
                            <strong>100m+</strong>
                            <span>Siêu du thuyền</span>
                        </div>
                        <div class="marina-feature">
                            <strong>24/7</strong>
                            <span>Concierge</span>
                        </div>
                        <div class="marina-feature">
                            <strong>5★</strong>
                            <span>Yacht Club</span>
                        </div>
                    </div>
                    
                    <div class="marina-services">
                        <h4>Dịch Vụ Cao Cấp</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Yacht Club thành viên độc quyền</li>
                            <li><i class="fas fa-check"></i> Nhà hàng Michelin Star</li>
                            <li><i class="fas fa-check"></i> Boutique shopping promenade</li>
                            <li><i class="fas fa-check"></i> Private jet & helicopter service</li>
                            <li><i class="fas fa-check"></i> Yacht charter & management</li>
                        </ul>
                    </div>
                </div>
                
                <div class="marina-gallery">
                    <div class="marina-main-image">
                        <img src="{{asset('assets/images/photo-1540979388789-6cee28a1cdc9.jpeg')}}" alt="Marina">
                    </div>
                    <div class="marina-grid">
                        <img src="{{asset('assets/images/photo-1559827260-dc66d52bef19.jpeg')}}" alt="Yacht">
                        <img src="{{asset('assets/images/photo-1517365830803-6c2f3f0d44d1.jpeg')}}" alt="Marina night">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Entertainment & Lifestyle Section -->
    <section class="entertainment-section section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">GIẢI TRÍ & MUA SẮM</span>
                <h2 class="section-title">Trung Tâm<br><span>Sôi Động 24/7</span></h2>
            </div>

            <div class="entertainment-grid">
                <div class="entertainment-card large">
                    <div class="entertainment-image">
                        <img src="{{asset('assets/images/photo-1514933651103-005eec06c04b.jpeg')}}" alt="Blue Wave Theatre">
                        <div class="entertainment-badge">5,000 CHỖ</div>
                    </div>
                    <div class="entertainment-content">
                        <h3>Blue Wave Theatre</h3>
                        <p>Nhà hát đa năng 5,000 chỗ thiết kế bởi Gensler, đẳng cấp Broadway với âm thanh Dolby Atmos và sân khấu xoay 360°</p>
                        <div class="entertainment-tags">
                            <span>Concert</span>
                            <span>Musical</span>
                            <span>Opera</span>
                        </div>
                    </div>
                </div>

                <div class="entertainment-card">
                    <div class="entertainment-image">
                        <img src="{{asset('assets/images/photo-1519167758481-83f550bb49b3.jpeg')}}" alt="Shopping Mall">
                    </div>
                    <div class="entertainment-content">
                        <h3>Paradise Mall</h3>
                        <p>Trung tâm thương mại 200,000m² với 500+ thương hiệu quốc tế</p>
                    </div>
                </div>

                <div class="entertainment-card">
                    <div class="entertainment-image">
                        <img src="{{asset('assets/images/photo-1574870715385-c28cbfa76c5a.jpeg')}}" alt="Winter Wonderland">
                    </div>
                    <div class="entertainment-content">
                        <h3>Winter Wonderland</h3>
                        <p>Khu trượt tuyết trong nhà 30,000m² với núi tuyết nhân tạo 60m</p>
                    </div>
                </div>

                <div class="entertainment-card">
                    <div class="entertainment-image">
                        <img src="{{asset('assets/images/photo-1604328698692-f76ea9498e76.jpeg')}}" alt="Water Park">
                    </div>
                    <div class="entertainment-content">
                        <h3>Aqua Paradise</h3>
                        <p>Công viên nước 10ha với 30+ trò chơi và lazy river 2km</p>
                    </div>
                </div>

                <div class="entertainment-card">
                    <div class="entertainment-image">
                        <img src="{{asset('assets/images/photo-1545558014-8692077e9b5c.jpeg')}}" alt="Cinema">
                    </div>
                    <div class="entertainment-content">
                        <h3>CGV IMAX Laser</h3>
                        <p>Rạp chiếu phim IMAX Laser 4K lớn nhất Đông Nam Á</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Healthcare & Education Section -->
    <section class="services-section section-padding">
        <div class="container">
            <div class="services-wrapper">
                <div class="service-block healthcare">
                    <div class="service-header">
                        <i class="fas fa-hospital"></i>
                        <h2>Y Tế & Chăm Sóc Sức Khỏe</h2>
                    </div>
                    
                    <div class="service-main">
                        <div class="service-feature">
                            <img src="{{asset('assets/images/photo-1519494026892-80bbd2d6fd0d.jpeg')}}" alt="Cleveland Clinic">
                            <h3>Cleveland Clinic Vietnam</h3>
                            <p>Bệnh viện số 1 nước Mỹ lần đầu tiên có mặt tại Việt Nam với 500 giường bệnh và đội ngũ chuyên gia quốc tế</p>
                            <ul>
                                <li>• Tim mạch #1 thế giới</li>
                                <li>• Ung bướu học tiên tiến</li>
                                <li>• Phẫu thuật robot da Vinci</li>
                                <li>• Emergency 24/7</li>
                            </ul>
                        </div>
                        
                        <div class="service-list">
                            <div class="service-item">
                                <i class="fas fa-heartbeat"></i>
                                <h4>Trung Tâm Tim Mạch</h4>
                                <p>Công nghệ can thiệp tim mạch hiện đại nhất</p>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-user-md"></i>
                                <h4>Phòng Khám Đa Khoa</h4>
                                <p>50+ chuyên khoa, khám sức khỏe định kỳ</p>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-ambulance"></i>
                                <h4>Cấp Cứu 24/7</h4>
                                <p>Helicopter cấp cứu, response time <10 phút</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-block education">
                    <div class="service-header">
                        <i class="fas fa-graduation-cap"></i>
                        <h2>Giáo Dục Chất Lượng Cao</h2>
                    </div>
                    
                    <div class="service-main">
                        <div class="service-feature">
                            <img src="{{asset('assets/images/photo-1580582932707-520aed937b7b.jpeg')}}" alt="Vinschool">
                            <h3>Hệ Thống Giáo Dục Toàn Diện</h3>
                            <p>Từ mầm non đến đại học với chuẩn quốc tế Cambridge, IB</p>
                            <ul>
                                <li>• Vinschool System (3 campus)</li>
                                <li>• British International School</li>
                                <li>• American Academy</li>
                                <li>• VinUni Campus Cần Giờ</li>
                            </ul>
                        </div>
                        
                        <div class="service-list">
                            <div class="service-item">
                                <i class="fas fa-child"></i>
                                <h4>Mầm Non Quốc Tế</h4>
                                <p>Montessori & Reggio Emilia approach</p>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-school"></i>
                                <h4>Phổ Thông Chất Lượng Cao</h4>
                                <p>Tỷ lệ đỗ đại học top 100%</p>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-university"></i>
                                <h4>VinUni Extension</h4>
                                <p>Đại học nghiên cứu đẳng cấp quốc tế</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sports & Wellness Section -->
    <section class="sports-section section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">THỂ THAO & SỨC KHỎE</span>
                <h2 class="section-title">Lối Sống<br><span>Năng Động & Khỏe Mạnh</span></h2>
            </div>

            <div class="sports-grid">
                <div class="sport-card">
                    <div class="sport-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Elite Fitness Center</h3>
                    <p>10,000m² với thiết bị Technogym, 50+ lớp yoga, pilates, crossfit</p>
                    <ul>
                        <li>Olympic pool 50m</li>
                        <li>Personal training</li>
                        <li>Nutrition consulting</li>
                    </ul>
                </div>

                <div class="sport-card">
                    <div class="sport-icon">
                        <i class="fas fa-table-tennis"></i>
                    </div>
                    <h3>Tennis & Badminton</h3>
                    <p>20 sân tennis, 15 sân cầu lông chuẩn quốc tế với HLV chuyên nghiệp</p>
                    <ul>
                        <li>Clay & Hard courts</li>
                        <li>Night lighting</li>
                        <li>Pro shop</li>
                    </ul>
                </div>

                <div class="sport-card">
                    <div class="sport-icon">
                        <i class="fas fa-basketball-ball"></i>
                    </div>
                    <h3>Sports Complex</h3>
                    <p>Nhà thi đấu đa năng 5,000 chỗ cho basketball, volleyball, futsal</p>
                    <ul>
                        <li>NBA standard court</li>
                        <li>Youth academy</li>
                        <li>League hosting</li>
                    </ul>
                </div>

                <div class="sport-card">
                    <div class="sport-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Wellness Spa Resort</h3>
                    <p>Spa & wellness 5 sao với liệu pháp từ khắp thế giới</p>
                    <ul>
                        <li>Onsen & Sauna</li>
                        <li>Thai massage</li>
                        <li>Beauty center</li>
                    </ul>
                </div>

                <div class="sport-card">
                    <div class="sport-icon">
                        <i class="fas fa-running"></i>
                    </div>
                    <h3>Jogging & Cycling</h3>
                    <p>25km đường chạy bộ, đạp xe ven biển với smart tracking system</p>
                    <ul>
                        <li>Ocean view tracks</li>
                        <li>Bike rental</li>
                        <li>Marathon events</li>
                    </ul>
                </div>

                <div class="sport-card">
                    <div class="sport-icon">
                        <i class="fas fa-horse"></i>
                    </div>
                    <h3>Equestrian Club</h3>
                    <p>CLB cưỡi ngựa với 50 ngựa thuần chủng và đường đua 2km</p>
                    <ul>
                        <li>Riding lessons</li>
                        <li>Polo field</li>
                        <li>Horse boarding</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Hotels & Resorts Section -->
    <section class="hotels-section section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">HOSPITALITY</span>
                <h2 class="section-title">7,000 Phòng<br><span>Khách Sạn & Resort 5 Sao</span></h2>
            </div>

            <div class="hotels-showcase">
                <div class="hotel-item">
                    <img src="{{asset('assets/images/photo-1571003123894-1f0594d2b5d9.jpeg')}}" alt="Four Seasons">
                    <h4>Four Seasons Resort</h4>
                    <p>500 phòng & villa</p>
                </div>
                <div class="hotel-item">
                    <img src="{{asset('assets/images/photo-1566073771259-6a8506099945.jpeg')}}" alt="Ritz-Carlton">
                    <h4>Ritz-Carlton</h4>
                    <p>400 phòng luxury</p>
                </div>
                <div class="hotel-item">
                    <img src="{{asset('assets/images/photo-1584132967334-10e028bd69f7.jpeg')}}" alt="Aman">
                    <h4>Aman Resort</h4>
                    <p>100 pool villas</p>
                </div>
                <div class="hotel-item">
                    <img src="{{asset('assets/images/photo-1582719478250-c89cae4dc85b.jpeg')}}" alt="JW Marriott">
                    <h4>JW Marriott</h4>
                    <p>600 phòng & suites</p>
                </div>
            </div>

            <div class="hotel-features">
                <div class="hotel-feature">
                    <i class="fas fa-concierge-bell"></i>
                    <strong>Butler Service</strong>
                    <span>24/7 personal butler</span>
                </div>
                <div class="hotel-feature">
                    <i class="fas fa-helicopter"></i>
                    <strong>Helipad</strong>
                    <span>Private helicopter transfer</span>
                </div>
                <div class="hotel-feature">
                    <i class="fas fa-gem"></i>
                    <strong>Michelin Dining</strong>
                    <span>15+ fine dining venues</span>
                </div>
                <div class="hotel-feature">
                    <i class="fas fa-infinity"></i>
                    <strong>Infinity Pools</strong>
                    <span>Ocean view pools</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Smart City Features -->
    <section class="smart-city-section section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">CÔNG NGHỆ THÔNG MINH</span>
                <h2 class="section-title">Smart City<br><span>Chuẩn ISO 37122</span></h2>
            </div>

            <div class="smart-features">
                <div class="smart-card">
                    <div class="smart-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>AI City Brain</h3>
                    <p>Hệ thống AI quản lý toàn diện đô thị, tối ưu giao thông, năng lượng, an ninh</p>
                </div>

                <div class="smart-card">
                    <div class="smart-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Super App</h3>
                    <p>Một app duy nhất cho mọi dịch vụ: thanh toán, booking, smart home, community</p>
                </div>

                <div class="smart-card">
                    <div class="smart-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <h3>Green Energy</h3>
                    <p>100% năng lượng tái tạo từ điện gió offshore và solar farm 500MW</p>
                </div>

                <div class="smart-card">
                    <div class="smart-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Autonomous Mobility</h3>
                    <p>Xe bus tự lái, smart parking, EV charging network toàn khu</p>
                </div>

                <div class="smart-card">
                    <div class="smart-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Smart Security</h3>
                    <p>Camera AI nhận diện, drone patrol, response time <3 phút</p>
                </div>

                <div class="smart-card">
                    <div class="smart-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>5G & WiFi 6E</h3>
                    <p>Phủ sóng 100% với tốc độ gigabit, IoT sensors khắp đô thị</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-utilities section-padding">
        <div class="container">
            <div class="cta-content">
                <h2>Trải Nghiệm Cuộc Sống Đẳng Cấp</h2>
                <p>Đăng ký tham quan nhà mẫu và trải nghiệm tiện ích thực tế</p>
                <div class="cta-buttons">
                    <a href="{{route('contact')}}" class="btn btn-primary btn-lg">
                        <i class="fas fa-calendar"></i> Đặt Lịch Tham Quan
                    </a>
                    <a href="{{route('gallery')}}" class="btn btn-outline btn-lg">
                        <i class="fas fa-images"></i> Xem Thư Viện
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $(function() {
            
        });
    </script>
@endsection
