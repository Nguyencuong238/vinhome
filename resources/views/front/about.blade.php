@extends('layouts.front')

@section('meta')
    <title>Giới Thiệu Dự Án Vinhomes Green Paradise - Đô Thị ESG Đầu Tiên Việt Nam</title>
    <meta name="description"
        content="Tìm hiểu về Vinhomes Green Paradise - Siêu đô thị ESG đầu tiên tại Việt Nam với quy mô 2.870ha, 100% năng lượng tái tạo, thiết kế bởi Foster + Partners">
    <meta name="keywords"
        content="giới thiệu vinhomes green paradise, đô thị ESG, foster partners, boston consulting group, vinhomes cần giờ">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Giới Thiệu Dự Án Vinhomes Green Paradise - Đô Thị ESG Đầu Tiên Việt Nam">
    <meta property="og:description"
        content="Tìm hiểu về Vinhomes Green Paradise - Siêu đô thị ESG đầu tiên tại Việt Nam với quy mô 2.870ha, 100% năng lượng tái tạo, thiết kế bởi Foster + Partners">
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <meta property="og:locale" content="vi_VN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Giới Thiệu Dự Án Vinhomes Green Paradise - Đô Thị ESG Đầu Tiên Việt Nam">
    <meta name="twitter:description" content="Siêu đô thị 2.870ha với 13km bờ biển, vốn đầu tư 10 tỷ USD">
    <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection

@section('css')
    <style>
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

        .section-padding {
            padding: 80px 0;
        }

        .bg-gray {
            background-color: #f8f9fa;
        }

        .content-wrapper {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 60px;
        }

        .content-title {
            margin-bottom: 30px;
        }

        .lead {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 30px;
            color: #6c757d;
        }

        .highlight-box {
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
            padding: 40px;
            border-radius: 16px;
            margin: 40px 0;
        }

        .highlight-box h4 {
            color: white;
            margin-bottom: 20px;
        }

        .check-list {
            list-style: none;
        }

        .check-list li {
            padding: 10px 0;
            display: flex;
            align-items: start;
            gap: 12px;
        }

        .check-list i {
            color: #f0f3bd;
            margin-top: 3px;
        }

        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }

        .stat-box {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .stat-box .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #00a896;
        }

        .stat-box .stat-label {
            color: #6c757d;
            margin-top: 10px;
        }

        .rounded-image {
            width: 100%;
            border-radius: 16px;
            margin-bottom: 30px;
        }

        .sidebar-box {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 16px;
        }

        .sidebar-box h4 {
            margin-bottom: 20px;
            color: #00a896;
        }

        .info-list {
            list-style: none;
        }

        .info-list li {
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .developer-content {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .developer-logo {
            margin-bottom: 30px;
        }

        .achievements {
            margin-top: 50px;
        }

        .achievement-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .achievement-item {
            padding: 30px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .achievement-item i {
            font-size: 2.5rem;
            color: #00a896;
            margin-bottom: 15px;
        }

        .partners {
            margin-top: 60px;
        }

        .partner-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .partner-logos img {
            height: 60px;
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        .partner-logos img:hover {
            opacity: 1;
        }

        .esg-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .esg-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            position: relative;
            overflow: hidden;
        }

        .esg-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
        }

        .esg-card.environment::before {
            background: linear-gradient(90deg, #28a745, #20c997);
        }

        .esg-card.social::before {
            background: linear-gradient(90deg, #007bff, #6610f2);
        }

        .esg-card.governance::before {
            background: linear-gradient(90deg, #fd7e14, #dc3545);
        }

        .esg-icon {
            width: 70px;
            height: 70px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .esg-icon i {
            font-size: 32px;
        }

        .environment .esg-icon i {
            color: #28a745;
        }

        .social .esg-icon i {
            color: #007bff;
        }

        .governance .esg-icon i {
            color: #fd7e14;
        }

        .esg-card h3 {
            color: #00a896;
            margin-bottom: 10px;
        }

        .esg-card h4 {
            margin-bottom: 20px;
            color: #495057;
        }

        .esg-card ul {
            list-style: none;
            margin-bottom: 25px;
        }

        .esg-card ul li {
            padding: 8px 0;
            font-size: 14px;
            color: #6c757d;
        }

        .esg-card ul li::before {
            content: "→";
            color: #00a896;
            margin-right: 10px;
        }

        .esg-metrics {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        .metric-value {
            font-size: 18px;
            font-weight: 700;
            color: #00a896;
        }

        .certification-box {
            background: linear-gradient(135deg, #00a896 0%, #05668d 100%);
            color: white;
            padding: 50px;
            border-radius: 20px;
            text-align: center;
        }

        .certification-box h3 {
            color: white;
            margin-bottom: 30px;
        }

        .cert-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .cert-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .cert-item i {
            color: #f0f3bd;
            font-size: 24px;
        }

        .timeline {
            position: relative;
            padding: 40px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #dee2e6;
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 60px;
        }

        .timeline-item:nth-child(odd) {
            padding-right: calc(50% + 40px);
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            padding-left: calc(50% + 40px);
        }

        .timeline-date {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            color: #00a896;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .timeline-item.active .timeline-date {
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
        }

        .timeline-content {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .timeline-content h3 {
            margin-bottom: 15px;
            color: #00a896;
        }

        .cta-section {
            background: linear-gradient(135deg, #00a896 0%, #05668d 100%);
            padding: 80px 0;
            text-align: center;
            color: white;
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
            flex-wrap: wrap;
        }

        .nav-menu a.active {
            color: #00a896;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .timeline::before {
                left: 30px;
            }

            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                padding-left: 80px;
                padding-right: 0;
                text-align: left;
            }

            .timeline-date {
                left: 30px;
                transform: translateX(-50%);
            }
        }

        @media screen and (max-width: 1399px) {}

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 991px) {}

        @media screen and (max-width: 767px) {}

        @media screen and (max-width: 575px) {}
    </style>
    <!-- Schema for About Page -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "AboutPage",
            "mainEntity": {
                "@type": "Place",
                "name": "Vinhomes Green Paradise",
                "description": "Siêu đô thị ESG đầu tiên Việt Nam",
                "hasMap": "https://goo.gl/maps/...",
                "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "1234"
                }
            }
        }
    </script>
@endsection

@section('page')
    <!-- Page Hero -->
    <section class="page-hero"
        style="background: linear-gradient(135deg, rgba(5,102,141,0.9) 0%, rgba(0,168,150,0.8) 100%), url('{{ asset('assets/images/photo-1600596542815-ffad4c1539a9.jpeg') }}') center/cover;">
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-title">Giới Thiệu Dự Án</h1>
                <p class="page-subtitle">Siêu Đô Thị ESG Hàng Đầu Thế Giới</p>
                <div class="breadcrumb">
                    <a href="index.html">Trang Chủ</a>
                    <span>/</span>
                    <span>Giới Thiệu</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section id="vision" class="section-padding">
        <div class="container">
            <div class="content-wrapper">
                <div class="content-main">
                    <span class="section-tag">TẦM NHÌN & SỨ MỆNH</span>
                    <h2 class="content-title">Kiến Tạo Thiên Đường Xanh Bên Biển</h2>
                    <div class="content-text">
                        <p class="lead">Vinhomes Green Paradise không chỉ là một dự án bất động sản, đây là tuyên ngôn
                            mạnh mẽ của Việt Nam trong việc kiến tạo những chuẩn mực sống mới, nơi một Việt Nam tiên phong
                            cùng thế giới xây dựng tương lai bền vững.</p>

                        <h3>Tầm Nhìn 2030</h3>
                        <p>Trở thành biểu tượng đô thị sinh thái hàng đầu châu Á, điểm đến du lịch quốc tế với 8-9 triệu
                            lượt khách mỗi năm, và là mô hình chuẩn mực cho phát triển đô thị bền vững toàn cầu.</p>

                        <div class="highlight-box">
                            <h4>Cam Kết ESG++</h4>
                            <ul class="check-list">
                                <li><i class="fas fa-check-circle"></i> <strong>Environment:</strong> 100% năng lượng tái
                                    tạo, 70% diện tích xanh</li>
                                <li><i class="fas fa-check-circle"></i> <strong>Social:</strong> Cộng đồng 230.000 cư dân
                                    thịnh vượng</li>
                                <li><i class="fas fa-check-circle"></i> <strong>Governance:</strong> Quản trị minh bạch theo
                                    chuẩn quốc tế</li>
                            </ul>
                        </div>

                        <div class="stats-row">
                            <div class="stat-box">
                                <div class="stat-number">2,870</div>
                                <div class="stat-label">Hecta quy mô</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">10</div>
                                <div class="stat-label">Tỷ USD đầu tư</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">230K</div>
                                <div class="stat-label">Cư dân</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">13</div>
                                <div class="stat-label">Km bờ biển</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-sidebar">
                    <img src="{{ asset('assets/images/photo-1570168007204-dfb528c6958f.jpeg') }}" alt="Vision"
                        class="rounded-image">
                    <div class="sidebar-box">
                        <h4>Quick Facts</h4>
                        <ul class="info-list">
                            <li><strong>Vị trí:</strong> Cần Giờ, TP.HCM</li>
                            <li><strong>Diện tích:</strong> 2,870 ha</li>
                            <li><strong>Mật độ xây dựng:</strong> 30%</li>
                            <li><strong>Khởi công:</strong> Q4/2025</li>
                            <li><strong>Hoàn thành:</strong> 2035</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Developer Section -->
    <section id="developer" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">CHỦ ĐẦU TƯ</span>
                <h2 class="section-title">Vinhomes - Thương Hiệu BĐS Số 1 Việt Nam</h2>
            </div>

            <div class="developer-content">
                <div class="developer-info">
                    <img src="https://via.placeholder.com/300x120/fff/333?text=VINHOMES" alt="Vinhomes Logo"
                        class="developer-logo">
                    <p>Vinhomes là thương hiệu bất động sản số 1 Việt Nam, thành viên của Tập đoàn Vingroup - Tập đoàn kinh
                        tế tư nhân hàng đầu Châu Á. Với hơn 15 năm phát triển, Vinhomes đã và đang kiến tạo chuỗi đô thị
                        đẳng cấp, góp phần nâng tầm vị thế Việt Nam trên bản đồ quốc tế.</p>

                    <div class="achievements">
                        <h3>Thành Tựu Nổi Bật</h3>
                        <div class="achievement-grid">
                            <div class="achievement-item">
                                <i class="fas fa-trophy"></i>
                                <h4>Top 10 Châu Á</h4>
                                <p>Nhà phát triển BĐS hàng đầu</p>
                            </div>
                            <div class="achievement-item">
                                <i class="fas fa-building"></i>
                                <h4>50+ Dự Án</h4>
                                <p>Trên khắp Việt Nam</p>
                            </div>
                            <div class="achievement-item">
                                <i class="fas fa-users"></i>
                                <h4>500,000+</h4>
                                <p>Cư dân tin tưởng</p>
                            </div>
                            <div class="achievement-item">
                                <i class="fas fa-award"></i>
                                <h4>100+ Giải Thưởng</h4>
                                <p>Quốc tế uy tín</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="partners">
                    <h3>Đối Tác Chiến Lược</h3>
                    <div class="partner-logos">
                        <img src="https://via.placeholder.com/150x80/f8f9fa/333?text=BCG" alt="Boston Consulting Group">
                        <img src="https://via.placeholder.com/150x80/f8f9fa/333?text=GENSLER" alt="Gensler">
                        <img src="https://via.placeholder.com/150x80/f8f9fa/333?text=CLEVELAND" alt="Cleveland Clinic">
                        <img src="https://via.placeholder.com/150x80/f8f9fa/333?text=TIGER+WOODS" alt="Tiger Woods Design">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ESG Standards Section -->
    <section id="esg" class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">TIÊU CHUẨN QUỐC TẾ</span>
                <h2 class="section-title">Đô Thị ESG++ Đầu Tiên Việt Nam</h2>
            </div>

            <div class="esg-grid">
                <div class="esg-card environment">
                    <div class="esg-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Environment</h3>
                    <h4>Môi Trường Bền Vững</h4>
                    <ul>
                        <li>100% năng lượng từ điện gió và mặt trời</li>
                        <li>70% diện tích dành cho cây xanh & mặt nước</li>
                        <li>Xử lý rác thải công nghệ cao, zero waste</li>
                        <li>Tuần hoàn nước thông minh, tiết kiệm 50%</li>
                        <li>Giảm 80% phát thải carbon so với đô thị thông thường</li>
                    </ul>
                    <div class="esg-metrics">
                        <span class="metric-value">Net Zero 2030</span>
                    </div>
                </div>

                <div class="esg-card social">
                    <div class="esg-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Social</h3>
                    <h4>Cộng Đồng Thịnh Vượng</h4>
                    <ul>
                        <li>230.000 cư dân với chất lượng sống đẳng cấp</li>
                        <li>200.000 việc làm chất lượng cao</li>
                        <li>Hệ thống giáo dục từ mầm non đến đại học</li>
                        <li>Y tế chuẩn quốc tế Cleveland Clinic</li>
                        <li>Không gian văn hóa nghệ thuật sôi động</li>
                    </ul>
                    <div class="esg-metrics">
                        <span class="metric-value">Happy City Index 95/100</span>
                    </div>
                </div>

                <div class="esg-card governance">
                    <div class="esg-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Governance</h3>
                    <h4>Quản Trị Minh Bạch</h4>
                    <ul>
                        <li>Quản lý thông minh bằng AI & Big Data</li>
                        <li>An ninh 24/7 với hệ thống camera AI</li>
                        <li>Blockchain cho giao dịch minh bạch</li>
                        <li>Cư dân tham gia quản trị qua app</li>
                        <li>Báo cáo ESG định kỳ theo chuẩn GRI</li>
                    </ul>
                    <div class="esg-metrics">
                        <span class="metric-value">ISO 37122 Smart City</span>
                    </div>
                </div>
            </div>

            <div class="certification-box">
                <h3>Chứng Nhận Mục Tiêu</h3>
                <div class="cert-list">
                    <div class="cert-item">
                        <i class="fas fa-certificate"></i>
                        <span>BREEAM Communities</span>
                    </div>
                    <div class="cert-item">
                        <i class="fas fa-certificate"></i>
                        <span>LEED Platinum</span>
                    </div>
                    <div class="cert-item">
                        <i class="fas fa-certificate"></i>
                        <span>WELL Community</span>
                    </div>
                    <div class="cert-item">
                        <i class="fas fa-certificate"></i>
                        <span>UNESCO Biosphere</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">LỊCH SỬ PHÁT TRIỂN</span>
                <h2 class="section-title">Hành Trình Kiến Tạo Tương Lai</h2>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2023</div>
                    <div class="timeline-content">
                        <h3>Khởi Động Dự Án</h3>
                        <p>Ký kết hợp tác chiến lược với Boston Consulting Group, khởi động nghiên cứu quy hoạch tổng thể.
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Phê Duyệt Quy Hoạch</h3>
                        <p>Chính phủ phê duyệt quy hoạch 1/500, khởi công hạ tầng giao thông kết nối.</p>
                    </div>
                </div>
                <div class="timeline-item active">
                    <div class="timeline-date">2025</div>
                    <div class="timeline-content">
                        <h3>Ra Mắt Phân Khu Đầu Tiên</h3>
                        <p>Quý 4/2025: Mở bán The Haven Bay với 500 căn biệt thự biển, khởi công Paradise Lagoon.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2027</div>
                    <div class="timeline-content">
                        <h3>Hoàn Thiện Giai Đoạn 1</h3>
                        <p>Khánh thành Paradise Lagoon, sân golf Tiger Woods, đón cư dân đầu tiên.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2030</div>
                    <div class="timeline-content">
                        <h3>Thành Phố Hoàn Chỉnh</h3>
                        <p>100.000 cư dân, tòa tháp 108 tầng hoàn thành, đón 5 triệu du khách/năm.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2035</div>
                    <div class="timeline-content">
                        <h3>Vision Complete</h3>
                        <p>230.000 cư dân, trở thành biểu tượng đô thị ESG hàng đầu châu Á.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Sẵn Sàng Khám Phá Green Paradise?</h2>
                <p>Đăng ký ngay để nhận thông tin chi tiết và ưu đãi độc quyền</p>
                <div class="cta-buttons">
                    <a href="contact.html" class="btn btn-primary btn-lg">
                        <i class="fas fa-phone-alt"></i> Liên Hệ Tư Vấn
                    </a>
                    <a href="#" class="btn btn-outline btn-lg">
                        <i class="fas fa-download"></i> Tải Brochure
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        
    </script>
@endsection
