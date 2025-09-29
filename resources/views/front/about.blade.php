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
            /* font-size: 1.2rem; */
            line-height: 1.8;
            margin-bottom: 30px;
            color: #5a5f63;
        }

        .highlight-box {
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
            padding: 40px;
            border-radius: 16px;
            margin: 40px 0;
            text-align: left;
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
            /* max-width: 1000px; */
            margin: 0 auto;
            text-align: center;
        }

        .developer-info {
            display: grid;
            gap: 40px;
            grid-template-columns: 2fr 1fr;
        }

        .developer-logo {
            margin-bottom: 30px;
        }

        .achievements {
            margin-top: 30px;
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
            grid-template-columns: repeat(2, 1fr);
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

        .esg-card.esg-plus::before {
            background: linear-gradient(90deg, #fd14e5, #8e009b);
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

        .esg-plus .esg-icon i {
            color: purple
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

        @media screen and (max-width: 480px) {
            .check-list li {
                display: block;
            }

            .section-padding {
                padding: 40px 0;
            }

            .esg-grid {
                grid-template-columns: 1fr;
            }
        }
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
                    <h2 class="content-title text-transform-capitalize">Kiến tạo thiên đường xanh bên bờ biển</h2>
                    <div class="content-text">
                        <p class="lead"><strong>Vinhomes Green Paradise</strong> không đơn thuần là một dự án bất động
                            sản, mà là <strong>biểu tượng cho khát vọng tiên phong của Việt Nam</trong> – kiến tạo chuẩn mực
                                sống mới, hòa nhịp cùng thế giới trong hành trình xây dựng một tương lai xanh, thông minh và
                                bền vững.</p>

                        <h3 class="mb-15">Tầm Nhìn 2030</h3>
                        <p class=" fw-500">Trở thành biểu tượng đô thị sinh thái hàng đầu châu Á, điểm đến du lịch quốc tế
                            với 8-9 triệu
                            lượt khách mỗi năm, và là mô hình chuẩn mực cho phát triển đô thị bền vững toàn cầu.</p>

                        <div class="highlight-box">
                            <h4>Cam Kết ESG++</h4>
                            <ul class="check-list fw-400">
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
                        <h4>Thông tin dự án Vinhomes Green Paradise</h4>
                        <ul class="info-list fw-400">
                            <li><strong>Vị trí:</strong> Cần Giờ, TP.Hồ Chí Minh</li>
                            <li><strong>Tổng diện tích:</strong> 2,870 ha</li>
                            <li><strong>Mật độ xây dựng:</strong> Khoảng 30%</li>
                            <li><strong>Thời gian khởi công:</strong> Quý IV/2025</li>
                            <li><strong>Dự kiến hoàn thành:</strong> Năm 2035</li>
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
                <h2 class="section-title">Chủ Đầu Tư Dự Án <br><span>Vinhomes Green Paradise</span></h2>
            </div>

            <div class="developer-content">
                <div class="developer-info">
                    <div class="highlight-box">
                        <p>Dự án Vinhomes Green Paradise Cần Giờ được phát triển bởi Tập đoàn Vingroup – một trong những tập
                            đoàn kinh tế tư nhân đa ngành lớn nhất Việt Nam, đồng thời khẳng định uy tín hàng đầu tại khu
                            vực châu Á.</p>
                        <br>
                        <p>Thành lập từ năm 1993, Vingroup hiện hoạt động trên ba trụ cột chính: Công nghệ – Công nghiệp,
                            Thương mại Dịch vụ và Phát triển Bất động sản. Trong đó, bất động sản là lĩnh vực mũi nhọn, gắn
                            liền với thương hiệu Vinhomes – nhà phát triển đô thị số 1 Việt Nam.</p>
                    </div>

                    <div class="p-20">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Vinhomes Logo" class="developer-logo">
                    </div>
                </div>
                <div class="achievements text-left fw-400">

                    <p class="mb-20">Hơn hai thập kỷ qua, Vingroup đã kiến tạo hàng loạt đại đô thị quy mô hàng trăm đến
                        hàng nghìn hecta
                        tại Hà Nội, TP.HCM và nhiều tỉnh thành lớn. Những dự án tiêu biểu có thể kể đến như: Vinhomes
                        Riverside, Vinhomes Ocean Park, Vinhomes Smart City, Vinhomes Grand Park…
                    </p>
                    <p class="mb-20">Không chỉ mang đến những sản phẩm bất động sản chất lượng cao, Vingroup còn xây dựng
                        hệ sinh thái
                        toàn diện bao gồm y tế, giáo dục, thương mại, nghỉ dưỡng và giao thông thông minh, góp phần nâng tầm
                        chất lượng sống cho hàng triệu cư dân.</p>
                    <p class="mb-20">Với tiềm lực tài chính vững mạnh, uy tín quốc tế và kinh nghiệm dày dặn, Vingroup cam
                        kết đưa
                        Vinhomes Green Paradise trở thành biểu tượng sống – nghỉ dưỡng – đầu tư tầm cỡ toàn cầu ngay tại Cần
                        Giờ.</p>
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
                        <li>Kiến trúc khí hậu học, năng lượng tái tạo</li>
                        <li>70% diện tích phủ xanh, hệ thống hấp thụ carbon</li>
                        <li>Hướng tới Climate-Positive, vượt xa Net Zero</li>
                    </ul>
                    {{-- <div class="esg-metrics">
                        <span class="metric-value">Net Zero 2030</span>
                    </div> --}}
                </div>

                <div class="esg-card social">
                    <div class="esg-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Social</h3>
                    <h4>Xã hội</h4>
                    <ul>
                        <li>Trường học, trung tâm sáng tạo, spa rừng</li>
                        <li>Không gian công cộng đa dạng, gắn kết cộng đồng 230.000 cư dân</li>
                        <li>Kiến tạo cộng đồng công dân toàn cầu</li>
                    </ul>
                    {{-- <div class="esg-metrics">
                        <span class="metric-value">Happy City Index 95/100</span>
                    </div> --}}
                </div>

                <div class="esg-card governance">
                    <div class="esg-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Governance</h3>
                    <h4>Quản Trị</h4>
                    <ul>
                        <li>Quản trị đô thị thông minh theo thời gian thực</li>
                        <li>Minh bạch, đo lường và công bố liên tục</li>
                        <li>Chứng nhận quốc tế: <strong>BREEAM, WELL, LEED, GRESB</strong></li>
                    </ul>
                    {{-- <div class="esg-metrics">
                        <span class="metric-value">ISO 37122 Smart City</span>
                    </div> --}}
                </div>

                <div class="esg-card esg-plus">
                    <div class="esg-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>ESG++</h3>
                    <h4>Super Plus</h4>
                    <ul>
                        <li>Tái sinh đất – nước – con người – tương lai</li>
                        <li>Ứng dụng AI, dữ liệu lớn, cảm biến môi trường</li>
                        <li>Bảo tồn Khu Dự trữ Sinh quyển Cần Giờ</li>
                    </ul>
                    {{-- <div class="esg-metrics">
                        <span class="metric-value">ISO 37122 Smart City</span>
                    </div> --}}
                </div>
            </div>

            {{-- <div class="certification-box">
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
            </div> --}}
        </div>
    </section>

    <!-- Timeline Section -->
    {{-- <section id="timeline" class="section-padding bg-gray">
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
    </section> --}}

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
    <script></script>
@endsection
