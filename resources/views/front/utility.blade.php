@extends('layouts.front')

@section('meta')
    <title>Tiện Ích Vinhomes Green Paradise - Paradise Lagoon, Golf, Marina | All-in-One</title>
    <meta name="description"
        content="Khám phá hệ sinh thái tiện ích all-in-one: Paradise Lagoon 443ha Guinness, 2 sân golf 36 lỗ Tiger Woods, Marina 5 sao, Cleveland Clinic">


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
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
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
            box-shadow: 0 8px 24px rgba(255, 193, 7, 0.4);
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
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
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
            background: linear-gradient(135deg, rgba(0, 168, 150, 0.05) 0%, rgba(2, 195, 154, 0.05) 100%);
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
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .entertainment-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
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
            height: 350px;
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
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
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
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .smart-card:hover {
            transform: translateY(-10px);
        }

        .smart-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, rgba(0, 168, 150, 0.1) 0%, rgba(2, 195, 154, 0.1) 100%);
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

        .overview-item.utilities-image {
            opacity: 1;
            padding: 0;
        }

        .overview-item.utilities-image img {
            height: 290px;
            width: 100%;
        }

        .utility-card img {
            height: 350px;
            width: 100%;
        }

        .utilities-grid.mt-40 .utility-card img {
            height: 250px;
            width: 100%;
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
    <section class="page-hero"
        style="background: linear-gradient(135deg, rgba(5,102,141,0.9) 0%, rgba(0,168,150,0.8) 100%), url('{{ asset('assets/images/photo-1571896349842-33c89424de2d.jpeg') }}') center/cover;">
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

    <section class="golf-section section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                {{-- <span class="section-tag">Hệ Thống Tiện Ích</span> --}}
                <h2 class="section-title">Hệ Thống Tiện Ích <br><span>Toàn Năng Cho Cư Dân Toàn Cầu</span></h2>
                <p class="section-desc">
                    Giữa đại dương bao la và hệ sinh quyển cổ đại của Cần Giờ, Vinhomes Green Paradise được quy hoạch như
                    một thế giới sống toàn diện – nơi mỗi khoảnh khắc đều trọn vẹn ý nghĩa. Tại đây, hệ thống tiện ích không
                    chỉ đáp ứng nhu cầu mà còn trở thành chất liệu kiến tạo phong cách sống và linh hồn kết nối cộng đồng
                    tinh hoa toàn cầu.
                </p>
            </div>

            <div class="overview-grid">
                <div class="overview-item utilities-image">
                    <img src="{{ asset('assets/images/tien-ich-vinhomes-green-paradise-9.jpg') }}"
                        alt="tien-ich-vinhomes-green-paradise-1">
                </div>
                <div class="overview-item utilities-image">
                    <img src="{{ asset('assets/images/tien-ich-vinhomes-green-paradise-10.jpg') }}"
                        alt="tien-ich-vinhomes-green-paradise-2">
                </div>
                <div class="overview-item utilities-image">
                    <img src="{{ asset('assets/images/tien-ich-vinhomes-green-paradise-11.jpg') }}"
                        alt="tien-ich-vinhomes-green-paradise-3">
                </div>
            </div>

        </div>
    </section>

    <section class="golf-section section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Biểu Tượng Toàn Cầu</span>
                <h2 class="section-title"> Kỳ Quan Tiện Ích <br><span> Giữa Rừng Biển Việt Nam</span>
                </h2>
                <p class="section-desc">
                    Vinhomes Green Paradise không chỉ đơn thuần là nơi an cư, mà còn là tuyệt tác sống đỉnh cao – nơi hội tụ
                    những tiện ích tầm vóc quốc tế, kiến tạo nên chuẩn mực sống mới của thế kỷ 21 ngay giữa thiên nhiên Cần
                    Giờ.
                </p>
            </div>

            <div class="utilities-grid">
                <div class="utility-card">
                    <h4>TÒA THÁP 108 TẦNG – HẢI ĐĂNG THẾ KỶ MỚI</h4>
                    <p>Biểu tượng phồn vinh mới của TP.HCM, tòa tháp 108 tầng vươn cao giữa đại dương và rừng ngập mặn, hội
                        tụ khách sạn 6 sao, TTTM xa xỉ, trung tâm hội nghị – triển lãm quốc tế và đài quan sát 360° – khẳng
                        định vị thế Việt Nam trên bản đồ kiến trúc toàn cầu.</p>
                    <div class="mt-10">
                        <img src="{{ asset('assets/images/thap-108-tang-vinhomes-can-gio.webp') }}"
                            alt="TÒA THÁP 108 TẦNG – HẢI ĐĂNG THẾ KỶ MỚI">
                    </div>
                </div>
                <div class="utility-card">
                    <h4>BLUE WAVES THEATRE – NHÀ HÁT SÓNG XANH</h4>
                    <p>Tuyệt tác kiến trúc 7ha do Gensler thiết kế, quy mô đăng cấp Quốc tế : Nhà hát 5.000 chỗ ngồi lớn
                        nhất Đông Nam Á, 40 phòng hội nghị, khu tiệc cưới – triển lãm, quảng trường 50.000 người và cụm ẩm
                        thực quốc tế – trái tim văn hóa, nghệ thuật, giải trí tại Vinhomes Green Paradise.</p>
                    <div class="mt-10">
                        <img src="{{ asset('assets/images/vinhomes-green-paradise-tam-co-quoc-te.jpeg') }}"
                            alt="BLUE WAVES THEATRE – NHÀ HÁT SÓNG XANH">
                    </div>
                </div>
            </div>
            <div class="utilities-grid mt-40" style="grid-template-columns: repeat(3, 1fr);">
                <div class="utility-card">
                    <h4>PARADISE LAGOON – VỊNH THIÊN ĐƯỜNG 443HA</h4>
                    <p>Biển hồ nhân tạo lớn nhất thế giới, tái hiện trọn vẹn vẻ đẹp Maldives với mặt nước xanh ngọc, bờ cát
                        trắng mịn và trải nghiệm nghỉ dưỡng bất tận ngay giữa lòng đô thị.</p>
                    <div class="mt-10">
                        <img src="{{ asset('assets/images/paradise-lagoon-vinhomes-green-paradise.jpeg') }}"
                            alt="PARADISE LAGOON – VỊNH THIÊN ĐƯỜNG 443HA">
                    </div>
                </div>
                <div class="utility-card">
                    <h4>LANDMARK HARBOUR – CẢNG DU THUYỀN 5 SAO QUỐC TẾ</h4>
                    <p>Bến đỗ của những siêu du thuyền xa hoa từ khắp thế giới, kết nối trực tiếp với chuỗi nhà hàng, khách
                        sạn và phố ẩm thực ven biển đẳng cấp quốc tế.</p>
                    <div class="mt-10">
                        <img src="{{ asset('assets/images/tien-ich-vinhomes-green-paradise-5.jpg') }}"
                            alt="LANDMARK HARBOUR – CẢNG DU THUYỀN 5 SAO QUỐC TẾ">
                    </div>
                </div>
                <div class="utility-card utility-info">
                    <h4>2 SÂN GOLF 18 LỖ – DẤU ẤN HUYỀN THOẠI QUỐC TẾ</h4>
                    <ul>
                        <li class="border-bottom-0">
                            <span class="fw-600">Sunset (West)</span> – thiết kế bởi huyền thoại <span class="fw-600">Tiger
                                Woods</span>.
                        </li>
                        <li class="border-bottom-0">
                            <span class="fw-600">Sunrise (East)</span> – kiến tạo bởi bậc thầy <span class="fw-600">Robert
                                Trent Jones II</span>.
                        </li>
                    </ul>
                    <p>Thiên đường thể thao đẳng cấp, dành riêng cho giới thượng lưu yêu golf.</p>
                    <div class="mt-10">
                        <img src="{{ asset('assets/images/san-golf-vinhomes-green-paradise.jpg') }}"
                            alt="2 SÂN GOLF 18 LỖ – DẤU ẤN HUYỀN THOẠI QUỐC TẾ">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Entertainment & Lifestyle Section -->
    <section class="entertainment-section section-padding bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Hệ thống tiện ích</span>
                <h2 class="section-title text-transform-capitalize">
                    Giáo dục – y tế <br> giao thông – năng lượng xanh<br>
                    <span> tại Vinhomes Green Paradise</span>
                </h2>
            </div>

            <div class="entertainment-grid">
                <div class="entertainment-card">
                    <div class="entertainment-content">
                        <h3 class="text-transform-capitalize mb-25 text-center">Giáo dục</h3>
                        <p>Dự án quy hoạch 97 cơ sở giáo dục liên cấp từ mầm non đến phổ thông, phân bổ khắp khu đô thị. Hệ thống trường học hiện đại với thư viện, sân thể thao, phòng thí nghiệm đáp ứng nhu cầu học tập toàn diện, nuôi dưỡng thế hệ công dân tương lai.</p>
                    </div>
                    <div class="entertainment-image">
                        <img src="{{ asset('assets/images/giao-duc-vinhomes-green-paradise.jpg') }}"
                            alt="Shopping Mall">
                    </div>
                </div>

                <div class="entertainment-card">
                    <div class="entertainment-content">
                        <h3 class="text-transform-capitalize mb-25 text-center">Y tế</h3>
                        <p>Khu đô thị được trang bị 2 bệnh viện đa khoa cùng 18 trạm y tế vệ tinh, đảm bảo cư dân tiếp cận dịch vụ y tế nhanh chóng và thuận tiện. Đặc biệt, Vinmec Cần Giờ hợp tác chuyên môn cùng Cleveland Clinic (Mỹ), mang đến chất lượng khám chữa bệnh chuẩn quốc tế ngay tại địa phương.</p>
                    </div>
                    <div class="entertainment-image">
                        <img src="{{ asset('assets/images/y-te-vinhomes-green-paradise.jpg') }}"
                            alt="Winter Wonderland">
                    </div>
                </div>

                <div class="entertainment-card">
                    <div class="entertainment-content">
                        <h3 class="text-transform-capitalize mb-25 text-center">Giao thông nội khu</h3>
                        <p>Hệ thống VinBus điện vận hành xuyên suốt các phân khu, kết nối thuận tiện đến trường học, bệnh viện, trung tâm thương mại và công viên. Với năng lượng sạch và công nghệ hiện đại, VinBus không chỉ mang lại trải nghiệm di chuyển an toàn, tiện lợi mà còn giảm phát thải, bảo vệ môi trường, đúng với định hướng phát triển xanh ESG của Vingroup.</p>
                    </div>
                    <div class="entertainment-image">
                        <img src="{{ asset('assets/images/tiem-nang-bat-dong-san-vinhomes-green-paradise.jpg') }}" alt="Water Park">
                    </div>
                </div>

                <div class="entertainment-card">
                    <div class="entertainment-content">
                        <h3 class="text-transform-capitalize mb-25 text-center">Năng lượng xanh</h3>
                        <p>Vingroup hợp tác cùng Boston Consulting Group (BCG) phát triển dự án điện gió ngoài khơi Cần Giờ, cách bờ 10km. Công trình ứng dụng công nghệ hiện đại để khai thác nguồn gió tự nhiên, cung cấp 100% điện tái tạo cho toàn bộ đại đô thị. Đây là bước đi chiến lược hướng tới phát triển bền vững, giảm thiểu carbon và kiến tạo chuẩn mực sống xanh cho thế hệ tương lai.</p>
                    </div>
                    <div class="entertainment-image">
                        <img src="{{ asset('assets/images/vinhomes-green-paradise-so-sanh-quoc-te.jpg') }}" alt="Cinema">
                    </div>
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
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-calendar"></i> Đặt Lịch Tham Quan
                    </a>
                    <a href="{{ route('gallery') }}" class="btn btn-outline btn-lg">
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
