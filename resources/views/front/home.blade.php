@extends('layouts.front')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">

    <style>
        .overview-item.utilities-image {
            padding: 0;
        }

        .overview-item.utilities-image img {
            height: 330px;
        }

        .utility-card img {
            height: 330px;
            width: 100%;
            object-fit: cover;
        }

        .utilities-grid.mt-30 .utility-card img {
            height: 250px;
        }

        .glide__arrows {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            pointer-events: none;
            /* để tránh block hover slide */
        }

        .glide__arrow {
            pointer-events: all;
            /* bật lại sự kiện cho nút */
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 20px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .glide__arrow:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .glide__bullets {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 8px;
        }

        .glide__bullet {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ccc;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        .glide__bullet:focus {
            outline: none;
        }

        .glide__bullet:hover {
            background: #666;
        }

        .glide__bullet.glide__bullet--active {
            background: #000;
        }
        .contact-card h4 {
            white-space: nowrap;
        }
    </style>
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "RealEstateAgent",
            "name": "Vinhomes Green Paradise Cần Giờ",
            "image": "https://vinhomescangio.info/logo.png",
            "url": "https://vinhomescangio.info",
            "telephone": "+84963728586",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Xã Long Hòa, Thị trấn Cần Thạnh",
                "addressLocality": "Cần Giờ",
                "addressRegion": "TP.HCM",
                "postalCode": "700000",
                "addressCountry": "VN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 10.5833,
                "longitude": 106.719
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
                "opens": "08:00",
                "closes": "19:00"
            },
            "priceRange": "5 tỷ - 100 tỷ VNĐ"
        }
    </script>
@endsection

@section('page')
    <!-- Hero Section with Video Background -->
    <section id="home" class="hero">
        <div class="hero-bg">
            <div class="hero-overlay"></div>
            <video autoplay muted loop poster="{{ asset('assets/images/sieu-do-thi-esg-vinhomes-green-peradise.jpg') }}">
                {{-- <source src="video.mp4" type="video/mp4"> --}}
                <img src="{{ asset('assets/images/sieu-do-thi-esg-vinhomes-green-peradise.jpg') }}" alt="Green Paradise">
            </video>
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <span class="hero-badge">VINHOMES GREEN PARADISE</span>
                    <h1 class="hero-title">
                        Siêu Đô Thị <span>ESG</span><br>
                        Hàng Đầu Thế Giới
                    </h1>
                    <p class="hero-subtitle">
                        2.870 hecta • 13km bờ biển • Vốn đầu tư 10 tỷ USD<br>
                        Đô thị Xanh - Thông minh - Sinh thái đầu tiên Việt Nam
                    </p>
                    <div class="hero-cta">
                        <a href="{{route('contact')}}" class="btn btn-primary btn-lg">
                            <i class="fas fa-download"></i> Tải Brochure
                        </a>
                        <a href="{{route('gallery')}}" class="btn btn-outline btn-lg">
                            <i class="fas fa-play"></i> Xem Video
                        </a>
                    </div>
                </div>
                <div class="hero-features">
                    <div class="feature-box">
                        <i class="fas fa-map-marked-alt"></i>
                        <div>
                            <strong>2,870 ha</strong>
                            <span>Quy mô</span>
                        </div>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-water"></i>
                        <div>
                            <strong>13 km</strong>
                            <span>Bờ biển</span>
                        </div>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-users"></i>
                        <div>
                            <strong>230,000</strong>
                            <span>Cư dân</span>
                        </div>
                    </div>
                    <div class="feature-box">
                        <i class="fas fa-dollar-sign"></i>
                        <div>
                            <strong>10 tỷ USD</strong>
                            <span>Vốn đầu tư</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <div class="scroll-down">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview" class="overview">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">TỔNG QUAN DỰ ÁN</span>
                <h2 class="section-title">Vinhomes Green Paradise<br><span>Thiên Đường Xanh Bên Biển</span></h2>
                <p class="section-desc">
                    Siêu đô thị lấn biển đầu tiên tại Việt Nam với quy mô 2.870 ha tại Cần Giờ – vùng đất duy nhất của
                    TP.HCM giáp biển. Với vốn đầu tư 10 tỷ USD, dự án được định vị là đô thị ESG xanh – thông minh – sinh
                    thái hàng đầu thế giới.
                </p>
            </div>

            <div class="overview-grid">
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>E – Environmental</h3>
                    <p>Bảo tồn hệ sinh thái, tái tạo thiên nhiên bền vững.</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>S – Social</h3>
                    <p>Xây dựng cộng đồng nhân văn, gắn kết và hạnh phúc.</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3>G – Governance</h3>
                    <p>Vận hành minh bạch với công nghệ và quản trị thông minh.</p>
                </div>
                {{-- <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <h3>100% Năng Lượng Sạch</h3>
                    <p>Sử dụng hoàn toàn năng lượng tái tạo từ điện gió ngoài khơi, điện mặt trời,
                        tiết kiệm 40-60% chi phí sinh hoạt cho cư dân.</p>
                </div> --}}

            </div>

            <div class="overview-stats" style="display:block; font-size: 18px;">
                {{-- <div class="stat-card">
                    <div class="stat-number" data-count="8">0</div>
                    <div class="stat-suffix">-9 triệu</div>
                    <p>Lượt khách du lịch/năm</p>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="108">0</div>
                    <div class="stat-suffix">tầng</div>
                    <p>Tòa tháp biểu tượng</p>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="443">0</div>
                    <div class="stat-suffix">ha</div>
                    <p>Biển hồ Paradise Lagoon</p>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="36">0</div>
                    <div class="stat-suffix">lỗ golf</div>
                    <p>Sân golf đẳng cấp</p>
                </div> --}}
                <p style="margin-bottom: 20px;">
                    Tâm điểm Vinhomes Green Paradise là toà tháp biểu tượng 108 tầng – niềm tự hào mới trên bản đồ kiến trúc
                    thế giới, biểu tượng phồn vinh và thịnh vượng.</p>
                <p style="margin-bottom: 20px;">Tòa tháp không chỉ định hình lại đường chân trời Cần Giờ, mà còn mang sứ
                    mệnh kiến tạo “thiên đường sống xanh” chuẩn quốc tế – nơi cư dân hòa mình cùng thiên nhiên, trải nghiệm
                    công nghệ đỉnh cao và chung tay kiến tạo tương lai bền vững.</p>
                <p style="margin-bottom: 20px;"> Vinhomes Green Paradise – nơi mọi giác quan được đánh thức, nơi con người –
                    thiên nhiên – công nghệ hoà quyện để kiến tạo thịnh vượng.</p>

            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="location">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">VỊ TRÍ VÀNG</span>
                <h2 class="section-title">Cửa Ngõ Biển<br><span>Duy Nhất Của TP.HCM</span></h2>
            </div>

            <div class="location-wrapper">
                <div class="location-map">
                    <img src="{{ asset('assets/images/vi-tri-vinhomes-green-paradise.jpg') }}" alt="Vị trí Green Paradise">
                    <div class="map-markers">
                        <div class="marker marker-main" style="top: 48%; left: 65%;">
                            <div class="marker-pulse"></div>
                            <div class="marker-dot"></div>
                            <div class="marker-info">
                                <h4>Green Paradise</h4>
                                <p>Cần Giờ, TP.HCM</p>
                            </div>
                        </div>
                        {{-- <div class="marker" style="top: 20%; left: 30%;">
                            <div class="marker-dot"></div>
                            <span>TP.HCM (50km)</span>
                        </div>
                        <div class="marker" style="top: 50%; left: 70%;">
                            <div class="marker-dot"></div>
                            <span>Sân bay Long Thành</span>
                        </div> --}}
                    </div>
                </div>

                <div class="location-details">
                    <h3>Vị Trí Chiến Lược "3 Mặt Giáp Biển - 1 Mặt Tựa Rừng"</h3>
                    <p>Tọa lạc tại xã Long Hòa, thị trấn Cần Thạnh, huyện Cần Giờ trên diện tích 2.870 hecta,
                        dự án sở hữu lợi thế địa hình hiếm có: ba mặt bao bọc bởi biển Đông bao la, một mặt tựa vào
                        rừng ngập mặn UNESCO 75.000 hecta.</p>

                    <div class="location-features">
                        <div class="location-feature">
                            <i class="fas fa-subway"></i>
                            <div>
                                <h4>Metro Tốc Độ Cao</h4>
                                <p>12 phút đến Q7 với vận tốc 350km/h</p>
                            </div>
                        </div>
                        <div class="location-feature">
                            <i class="fas fa-bridge"></i>
                            <div>
                                <h4>Cầu Cần Giờ 7.3km</h4>
                                <p>25 phút về trung tâm TP.HCM</p>
                            </div>
                        </div>
                        <div class="location-feature">
                            <i class="fas fa-plane"></i>
                            <div>
                                <h4>Sân Bay Long Thành</h4>
                                <p>45km - 25 phút qua cao tốc</p>
                            </div>
                        </div>
                        <div class="location-feature">
                            <i class="fas fa-ship"></i>
                            <div>
                                <h4>Cảng Quốc Tế Cần Giờ</h4>
                                <p>100 triệu tấn hàng/năm</p>
                            </div>
                        </div>
                    </div>

                    <div class="location-advantages">
                        <h4>GIÁ TRỊ KHÁC BIỆT – LỢI THẾ VƯỢT TRỘI</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Cửa ngõ duy nhất ra biển của TP.HCM, vị trí chiến lược hiếm có.
                            </li>
                            <li><i class="fas fa-check"></i> Khí hậu ôn hòa, mát hơn nội thành 2–3°C quanh năm.</li>
                            <li><i class="fas fa-check"></i> Không khí tinh khiết, hàm lượng oxy cao gấp 2–3 lần khu trung
                                tâm.</li>
                            <li><i class="fas fa-check"></i> Khoảng cách lý tưởng: chỉ 50km, dễ dàng kết nối trung tâm
                                TP.HCM.</li>
                            <li><i class="fas fa-check"></i> Tiềm năng bứt phá mạnh mẽ, dự báo tăng trưởng 300–500% trong
                                thập kỷ tới.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Utilities Section -->
    <section id="utilities" class="utilities">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">TIỆN ÍCH ĐẲNG CẤP</span>
                <h2 class="section-title">8 Tiềm Năng Từ <br><span>Vinhomes Green Paradise </span></h2>
            </div>

            <!-- Paradise Lagoon -->
            <div class="utility-highlight">
                <div class="utility-content">
                    <div class="utility-info">
                        {{-- <span class="utility-tag">Kỷ Lục Guinness</span> --}}
                        <h3>01. HẠ TẦNG BỨT PHÁ</h3>
                        {{-- <h4>Biển Hồ Nhân Tạo Lớn Nhất Thế Giới</h4>
                        <p>Paradise Lagoon sử dụng nước biển tự nhiên được lọc từ biển Cần Giờ, tái hiện vẻ đẹp
                            Maldives với làn nước trong xanh 365 ngày/năm. Đây là biển hồ nhân tạo lớn nhất thế giới
                            được Guinness công nhận.</p> --}}
                        <ul>
                            <li>Kết nối đa chiều: Cao tốc Bến Lức – Long Thành, Vành đai 3 & 4, sân bay quốc tế Long Thành.
                            </li>
                            <li>Cầu Cần Giờ: Dự kiến khởi công 2026–2028, dài 7,3 km, rút ngắn thời gian kết nối với TP.HCM.
                            </li>
                            <li>Tuyến Metro tốc độ cao: 48,5 km, vốn đầu tư hơn 4 tỷ USD, nối trực tiếp Quận 7 – Cần Giờ.
                            </li>
                            <li>Cảng trung chuyển quốc tế Cần Giờ: Trung tâm logistics hiện đại quy mô khu vực.</li>
                            <li>Đường Rừng Sác: Được cải tạo & mở rộng, nâng cao năng lực giao thông.</li>
                            <li>Cảng tàu quốc tế Landmark Harbour: Bến du thuyền & điểm đến thương mại quốc tế.</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('assets/images/ha-tang-but-pha-vinhomes-green-paradise.webp') }}"
                            alt="HẠ TẦNG BỨT PHÁ">
                        {{-- <div class="image-badge">443 HECTA</div> --}}
                    </div>
                </div>
            </div>

            <!-- Golf Courses -->
            <div class="utility-highlight reverse">
                <div class="utility-content">
                    <div class="utility-info">
                        {{-- <span class="utility-tag">Đẳng Cấp Thế Giới</span> --}}
                        <h3>02. BIỂU TƯỢNG TẦM CỠ QUỐC TẾ</h3>
                        {{-- <h4>Thiết Kế Bởi Tiger Woods & Robert Trent Jones II</h4>
                        <p>2 sân golf 18 lỗ đẳng cấp số 1 thế giới: Sân West (Sunset) mang chữ ký Tiger Woods
                            và sân East (Sunrise) do Robert Trent Jones II thiết kế. Trải nghiệm golf tại đây tương
                            đương Augusta National hay Pebble Beach.</p> --}}
                        <ul>
                            <li>Nhà hát Sóng Xanh – công trình nghệ thuật lớn nhất Đông Nam Á.</li>
                            <li>Hồ biển nhân tạo – quy mô lớn nhất thế giới.</li>
                            <li>Hai sân golf chuẩn quốc tế, thiết kế theo tiêu chuẩn PGA.</li>
                            <li>Tháp đa năng 108 tầng – biểu tượng phồn vinh vươn tầm toàn cầu.</li>
                            <li>Chuỗi khách sạn 5 sao & trung tâm thương mại hiện đại.</li>
                            <li>Hệ thống y tế Mỹ – Cleveland Clinic – chăm sóc sức khỏe chuẩn quốc tế.</li>
                            <li>Cảng du lịch đường thủy – gia tăng giá trị kết nối ven biển và quốc tế.</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('assets/images/vinhomes-green-paradise-tam-co-quoc-te.jpg') }}"
                            alt="BIỂU TƯỢNG TẦM CỠ QUỐC TẾ">
                        {{-- <div class="image-badge">36 HOLES</div> --}}
                    </div>
                </div>
            </div>

            <!-- Marina -->
            <div class="utility-highlight">
                <div class="utility-content">
                    <div class="utility-info">
                        {{-- <span class="utility-tag">Ultra Luxury</span> --}}
                        <h3>03. SIÊU ĐÔ THỊ ESG </h3>
                        {{-- <h4>Cảng Du Thuyền 5 Sao Quốc Tế</h4> --}}
                        <p>Định hướng phát triển: Đô thị Xanh – Thông minh – Sinh thái, mang đến những trải nghiệm sống
                            chuẩn mực quốc tế.</p>
                        <ul>
                            <li> Năng lượng xanh: Ứng dụng điện gió, điện mặt trời.</li>
                            <li>Kinh tế tuần hoàn: Tái chế chất thải, tiết kiệm nước.</li>
                            <li>Giao thông xanh: Hệ thống di chuyển bền vững, giảm phát thải.</li>
                            <li>Vật liệu bền vững: Giảm thiểu CO₂, thân thiện môi trường.</li>
                            <li>Quản lý đô thị thông minh: Vận hành bằng công nghệ hiện đại.</li>

                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('assets/images/sieu-do-thi-esg-vinhomes-green-paradise.jpg') }}"
                            alt="SIÊU ĐÔ THỊ ESG">
                        {{-- <div class="image-badge">5★ MARINA</div> --}}
                    </div>
                </div>
            </div>

            <!-- Golf Courses -->
            <div class="utility-highlight reverse">
                <div class="utility-content">
                    <div class="utility-info">
                        {{-- <span class="utility-tag">Đẳng Cấp Thế Giới</span> --}}
                        <h3>04. SO SÁNH QUỐC TẾ </h3>
                        {{-- <h4>Thiết Kế Bởi Tiger Woods & Robert Trent Jones II</h4>
                        <p>2 sân golf 18 lỗ đẳng cấp số 1 thế giới: Sân West (Sunset) mang chữ ký Tiger Woods
                            và sân East (Sunrise) do Robert Trent Jones II thiết kế. Trải nghiệm golf tại đây tương
                            đương Augusta National hay Pebble Beach.</p> --}}
                        <ul>
                            <li>Palm Jumeirah – Dubai (UAE): ~560 ha, biểu tượng du lịch – nghỉ dưỡng của Dubai, hội tụ
                                khách sạn 5 sao, resort, khu dân cư cao cấp, bến du thuyền.</li>
                            <li>Đảo Sentosa – Singapore: ~500 ha, trung tâm giải trí – nghỉ dưỡng số 1 Singapore, nổi bật
                                với casino, Universal Studios, sân golf, khách sạn hạng sang.</li>
                            <li>Vinhomes Green Paradise – Cần Giờ (Việt Nam): ~2.870 ha – quy mô gấp 5 lần Dubai &
                                Singapore, kỳ tích kiến tạo siêu đô thị biển, đưa Việt Nam kiêu hãnh vươn tầm thế giới.</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('assets/images/vinhomes-green-paradise-so-sanh-quoc-te.jpg') }}"
                            alt="SO SÁNH QUỐC TẾ ">
                        {{-- <div class="image-badge">36 HOLES</div> --}}
                    </div>
                </div>
            </div>

            <!-- Paradise Lagoon -->
            <div class="utility-highlight">
                <div class="utility-content">
                    <div class="utility-info">
                        {{-- <span class="utility-tag">Kỷ Lục Guinness</span> --}}
                        <h3>05. DU LỊCH – GIẢI TRÍ – THỂ THAO </h3>
                        {{-- <h4>Biển Hồ Nhân Tạo Lớn Nhất Thế Giới</h4>
                        <p>Paradise Lagoon sử dụng nước biển tự nhiên được lọc từ biển Cần Giờ, tái hiện vẻ đẹp
                            Maldives với làn nước trong xanh 365 ngày/năm. Đây là biển hồ nhân tạo lớn nhất thế giới
                            được Guinness công nhận.</p> --}}
                        <ul>
                            <li>Quần thể giải trí 122 ha – quy mô ngang tầm Disneyland Hong Kong.</li>
                            <li>Winter Wonderland 30.000m² – độc nhất Đông Nam Á, dự kiến đón hàng triệu du khách mỗi năm.
                            </li>
                            <li> Safari – VinWonders – Công viên nước: Chuỗi trải nghiệm giải trí đa dạng.</li>
                            <li>Khách sạn & resort 5 sao – hệ sinh thái nghỉ dưỡng đẳng cấp quốc tế.</li>
                            <li>Sân golf chuẩn quốc tế – bến du thuyền – thể thao biển: Điểm hẹn thượng lưu và phong cách
                                sống đỉnh cao.</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('assets/images/du-lich-the-thao-giai-tri-vinhomes-green-paradise.jpg') }}"
                            alt="DU LỊCH – GIẢI TRÍ – THỂ THAO">
                        {{-- <div class="image-badge">443 HECTA</div> --}}
                    </div>
                </div>
            </div>

            <!-- Golf Courses -->
            <div class="utility-highlight reverse">
                <div class="utility-content">
                    <div class="utility-info">
                        {{-- <span class="utility-tag">Đẳng Cấp Thế Giới</span> --}}
                        <h3>06. KINH TẾ & TÁC ĐỘNG SỰ KIỆN </h3>
                        {{-- <h4>Thiết Kế Bởi Tiger Woods & Robert Trent Jones II</h4>
                        <p>2 sân golf 18 lỗ đẳng cấp số 1 thế giới: Sân West (Sunset) mang chữ ký Tiger Woods
                            và sân East (Sunrise) do Robert Trent Jones II thiết kế. Trải nghiệm golf tại đây tương
                            đương Augusta National hay Pebble Beach.</p> --}}
                        <ul>
                            <li>Hà Nội (2023): Concert BlackPink thu hút 170.000 khách, mang về 630 tỷ đồng doanh thu.</li>
                            <li>Singapore (2024): Taylor Swift Tour tạo cú hích kinh tế, doanh thu 422–450 triệu SGD
                                (~300–330 triệu USD).</li>
                            <li>Vinhomes Green Paradise – Cần Giờ: Với hạ tầng và quần thể sự kiện đẳng cấp quốc tế, dự án
                                sở hữu tiềm năng trở thành điểm đến của những đại nhạc hội, triển lãm và sự kiện toàn cầu,
                                thúc đẩy du lịch và dòng vốn FDI bùng nổ.</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('assets/images/vinhomes-green-paradise-kinh-te-su-kien.jpg') }}"
                            alt="KINH TẾ & TÁC ĐỘNG SỰ KIỆN ">
                        {{-- <div class="image-badge">36 HOLES</div> --}}
                    </div>
                </div>
            </div>

            <!-- Marina -->
            <div class="utility-highlight">
                <div class="utility-content">
                    <div class="utility-info">
                        {{-- <span class="utility-tag">Ultra Luxury</span> --}}
                        <h3>07. TIỀM NĂNG BẤT ĐỘNG SẢN </h3>
                        {{-- <h4>Cảng Du Thuyền 5 Sao Quốc Tế</h4> --}}
                        {{-- <p>Định hướng phát triển: Đô thị Xanh – Thông minh – Sinh thái, mang đến những trải nghiệm sống
                            chuẩn mực quốc tế.</p> --}}
                        <ul>
                            <li>Quỹ đất rộng lớn, giá trị còn ở giai đoạn sơ khai so với Phú Quốc hay Nha Trang.</li>
                            <li>Đòn bẩy hạ tầng: Cầu Cần Giờ, metro tốc độ cao, cảng quốc tế… tạo lực đẩy tăng giá trị vượt
                                trội.</li>
                            <li>Xu hướng BĐS sinh thái – nghỉ dưỡng gần đô thị lớn bùng nổ mạnh mẽ.</li>
                            <li>Đáp ứng nhu cầu cao cấp của cư dân TP.HCM và giới đầu tư quốc tế.</li>
                            <li>Chủ đầu tư Vinhomes – bảo chứng cho uy tín, chất lượng và tiềm năng sinh lời lâu dài.</li>

                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('assets/images/tiem-nang-bat-dong-san-vinhomes-green-paradise.jpg') }}"
                            alt="TIỀM NĂNG BẤT ĐỘNG SẢN">
                        {{-- <div class="image-badge">5★ MARINA</div> --}}
                    </div>
                </div>
            </div>

            <!-- Golf Courses -->
            <div class="utility-highlight reverse">
                <div class="utility-content">
                    <div class="utility-info">
                        {{-- <span class="utility-tag">Đẳng Cấp Thế Giới</span> --}}
                        <h3>08. TẦM NHÌN DỰ ÁN </h3>
                        {{-- <h4>Thiết Kế Bởi Tiger Woods & Robert Trent Jones II</h4>
                        <p>2 sân golf 18 lỗ đẳng cấp số 1 thế giới: Sân West (Sunset) mang chữ ký Tiger Woods
                            và sân East (Sunrise) do Robert Trent Jones II thiết kế. Trải nghiệm golf tại đây tương
                            đương Augusta National hay Pebble Beach.</p> --}}
                        <ul>
                            <li>Vinhomes Green Paradise Cần Giờ định hướng trở thành biểu tượng phồn vinh mới của TP.HCM,
                                một “Tiểu Dubai – Singapore” của Châu Á.</li>
                            <li>Dự án kiến tạo siêu đô thị biển ESG xanh – thông minh – sinh thái chuẩn quốc tế, mở ra cơ
                                hội lớn về đầu tư, du lịch, logistics, y tế, văn hóa và bất động sản cao cấp.</li>
                            <li>Đồng thời, Vinhomes Green Paradise mang trong mình sứ mệnh bảo tồn thiên nhiên và phát triển
                                bền vững, khẳng định vị thế Việt Nam trên bản đồ thế giới.</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('assets/images/tam-nhin-du-an-vinhomes-green-paradise-can-gio.jpg') }}"
                            alt="SO SÁNH QUỐC TẾ ">
                        {{-- <div class="image-badge">36 HOLES</div> --}}
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <!-- Subdivisions Section -->
    <section id="subdivisions" class="subdivisions">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">PHÂN KHU DỰ ÁN</span>
                <h2 class="section-title">4 Phân Khu<br><span>Đặc Sắc & Độc Đáo</span></h2>
            </div>

            <div class="subdivisions-grid">
                <div class="subdivision-card">
                    <div class="subdivision-image">
                        <img src="{{ asset('assets/images/the-haven-bay-vinh-tien.jpg') }}" alt="The Haven Bay">
                        <div class="subdivision-overlay">
                            <h3>Phân khu A</h3>
                        </div>
                    </div>
                    <div class="subdivision-info">
                        <h4>The Haven Bay - Vịnh Tiên</h4>
                        <p>Điểm khởi đầu của hành trình sống xanh, nơi nghỉ dưỡng và giải trí giao hòa cùng thiên nhiên.</p>
                        <ul>
                            <li><strong>Quy mô:</strong> 953 ha</li>
                            <li><strong>Chức năng:</strong> Cửa ngõ của đại đô thị, khu ở <strong>sinh thái & du
                                    lịch</strong>.</li>
                            <li><strong>Tiện ích nổi bật:</strong> Hội nghị, sân golf, biệt thự nghỉ dưỡng, khách sạn mini.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="subdivision-card">
                    <div class="subdivision-image">
                        <img src="{{ asset('assets/images/the-greean-bay-vinh-ngoc.jpg') }}" alt="The Green Bay">
                        <div class="subdivision-overlay">
                            <h3>Phân khu B</h3>
                        </div>
                    </div>
                    <div class="subdivision-info">
                        <h4>The Green Bay - Vịnh Ngọc</h4>
                        <p><strong>Trái tim sôi động của đại đô thị</strong>, nơi hội tụ thương mại, y tế, thể thao và nghỉ
                            dưỡng cao cấp.</p>
                        <ul>
                            <li><strong>Quy mô:</strong> 660 ha</li>
                            <li><strong>Chức năng:</strong> Trung tâm thương mại – văn hóa – giải trí – y tế quốc tế.</li>
                            <li><strong>Tiện ích nổi bật:</strong> Sân vận động hiện đại, trung tâm thương mại, bệnh viện
                                quốc tế, khu du lịch & nghỉ dưỡng.</li>
                        </ul>
                    </div>
                </div>

                <div class="subdivision-card">
                    <div class="subdivision-image">
                        <img src="{{ asset('assets/images/the-paradise-mui-danh-vong.jpg') }}" alt="The Paradise">
                        <div class="subdivision-overlay">
                            <h3>Phân khu C</h3>
                        </div>
                    </div>
                    <div class="subdivision-info">
                        <h4>The Paradise - Mũi Danh Vọng</h4>
                        <div><strong>Biểu tượng phồn vinh của đại đô thị</strong>, nơi định hình đường chân trời mới với những
                            công trình mang tầm vóc toàn cầu.</div>
                        <ul>
                            <li><strong>Quy mô:</strong> 318 ha</li>
                            <li><strong>Chức năng:</strong> Trung tâm tài chính – thương mại – dịch vụ & bến cảng.</li>
                            <li><strong>Tiện ích nổi bật:</strong> Tòa tháp 108 tầng, bến tàu quốc tế, cao ốc văn phòng,
                                trung tâm thương mại biểu tượng.</li>
                        </ul>
                    </div>
                </div>

                <div class="subdivision-card">
                    <div class="subdivision-image">
                        <img src="{{ asset('assets/images/the-grand-island-dao-mat-troi.jpg') }}" alt="The Grand Island">
                        <div class="subdivision-overlay">
                            <h3>Phân khu D</h3>
                        </div>
                    </div>
                    <div class="subdivision-info">
                        <h4>The Grand Island - Đảo Mặt Trời</h4>
                        <p><strong>Thiên đường nghỉ dưỡng quy mô lớn</strong>, nơi hội tụ quảng trường biển và không gian
                            sinh thái độc bản giữa lòng đô thị biển.</p>
                        <ul>
                            <li><strong>Quy mô:</strong> 480 ha</li>
                            <li><strong>Chức năng:</strong> Du lịch – nghỉ dưỡng đẳng cấp quốc tế.</li>
                            <li><strong>Tiện ích nổi bật:</strong> Quảng trường biển, khu thấp tầng sinh thái, tổ hợp nghỉ
                                dưỡng & giải trí đa trải nghiệm.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- phap ly Section -->
    <section id="overview" class="overview">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Pháp lý </span>
                <h2 class="section-title">Pháp Lý Dự Án <br><span>Vinhomes Green Paradise</span></h2>
            </div>

            <div class="utility-highlight reverse">
                <div class="utility-content">
                    <div class="utility-info">
                        <p>Dự án <strong>Vinhomes Green Paradise Cần Giờ</strong> đã được <strong>UBND TP.HCM phê duyệt Quy
                                hoạch chi tiết 1/500</strong> theo <strong>Quyết định số 340/QĐ-UBND ngày
                                24/01/2025</strong>. Đây là nền tảng pháp lý quan trọng, khẳng định tính minh bạch và đảm
                            bảo khả năng triển khai bền vững của dự án.</p>

                        <label><strong>Thông tin quy hoạch 1/500</strong></label>
                        <ul>
                            <li><strong>Quy mô:</strong> ~2.870 ha, gồm 4 phân khu A, B, C, D-E</li>
                            <li><strong>Vị trí:</strong> Xã Long Hòa & Thị trấn Cần Thạnh, huyện Cần Giờ, TP.HCM</li>
                        </ul>


                        <label class="mt-30 d-block"><strong>Ý nghĩa pháp lý</strong></label>
                        <ul>
                            <li>Xác định rõ ràng chức năng từng phân khu, hệ thống hạ tầng, cảnh quan biển và mặt nước.</li>
                            <li>Là căn cứ để cấp phép xây dựng, thẩm định tín dụng và triển khai đồng bộ hạ tầng.</li>
                            <li>Đảm bảo an toàn pháp lý tuyệt đối, mang lại sự an tâm cho khách hàng và nhà đầu tư.</li>
                        </ul>

                        <div class="mt-20">Với <strong>hành lang pháp lý đầy đủ và minh bạch</strong>, Vinhomes Green
                            Paradise khẳng định vị thế là <strong>điểm đến an cư – đầu tư tầm cỡ quốc tế</strong> ngay giữa
                            thiên
                            nhiên Cần Giờ.</div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Investment Benefits -->
    <section class="investment">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">LỢI ÍCH ĐẦU TƯ</span>
                <h2 class="section-title">Cơ Hội Đầu Tư<br><span>Thế Hệ Vàng</span></h2>
            </div>

            <div class="investment-grid">
                <div class="investment-card">
                    <div class="investment-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tăng Giá 300-500%</h3>
                    <p>Dự báo tăng giá mạnh mẽ trong thập kỷ tới nhờ hạ tầng hoàn thiện và du lịch phát triển</p>
                </div>
                <div class="investment-card">
                    <div class="investment-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3>Lợi Nhuận 15-25%/năm</h3>
                    <p>Thu nhập ổn định từ cho thuê với 8-9 triệu lượt khách du lịch quốc tế mỗi năm</p>
                </div>
                <div class="investment-card">
                    <div class="investment-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Pháp Lý Minh Bạch</h3>
                    <p>Sổ hồng lâu dài, pháp lý rõ ràng, được bảo lãnh bởi Vinhomes - thương hiệu BĐS số 1</p>
                </div>
                <div class="investment-card">
                    <div class="investment-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Giá Trị Độc Nhất</h3>
                    <p>Vị trí không thể nhân bản - cửa ngõ biển duy nhất của TP.HCM 13 triệu dân</p>
                </div>
            </div>

            <div class="investment-cta">
                <h3>Chính Sách Bán Hàng Ưu Đãi</h3>
                <div class="policy-grid">
                    <div class="policy-item">
                        <i class="fas fa-gift"></i>
                        <p>Chiết khấu lên đến <strong>18%</strong> cho khách hàng đặt cọc sớm</p>
                    </div>
                    <div class="policy-item">
                        <i class="fas fa-credit-card"></i>
                        <p>Hỗ trợ vay <strong>70%</strong> giá trị, lãi suất <strong>0%</strong> trong 24 tháng</p>
                    </div>
                    <div class="policy-item">
                        <i class="fas fa-home"></i>
                        <p>Cam kết thuê lại <strong>10%/năm</strong> trong 5 năm đầu</p>
                    </div>
                    <div class="policy-item">
                        <i class="fas fa-car"></i>
                        <p>Tặng gói nội thất <strong>500 triệu</strong> + 2 năm phí quản lý</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">THƯ VIỆN HÌNH ẢNH</span>
                <h2 class="section-title">Khám Phá<br><span>Green Paradise</span></h2>
            </div>

            {{-- <div class="gallery-tabs">
                <button class="tab-btn active" data-tab="all">Tất Cả</button>
                <button class="tab-btn" data-tab="overview">Tổng Quan</button>
                <button class="tab-btn" data-tab="utilities">Tiện Ích</button>
                <button class="tab-btn" data-tab="interior">Nội Thất</button>
                <button class="tab-btn" data-tab="construction">Tiến Độ</button>
            </div> --}}

            <div class="glide gallerycontainer">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @for ($i = 1; $i <= 5; $i++)
                        <li class="glide__slide gallery-item">
                            <img src="assets/images/tien-ich-toan-cau-vinhomes-green-paradise-{{ $i }}.jpg" alt="tien-ich-toan-cau-vinhomes-green-paradise-{{ $i }}">
                            {{-- <div class="gallery-info">
                                <h4>Toàn Cảnh Dự Án</h4>
                            </div> --}}
                        </li>
                        @endfor

                        @for ($i = 1; $i <= 8; $i++)
                            <li class="glide__slide gallery-item">
                                <img src="assets/images/tien-ich-vinhomes-green-paradise-{{ $i }}.jpg"
                                    alt="tien-ich-vinhomes-green-paradise-{{ $i }}">
                                {{-- <div class="gallery-info">
                                    <h4>Phân Khu A - Vịnh Tiên</h4>
                                </div> --}}
                            </li>
                            
                        @endfor
                        
                    </ul>
                </div>

                <!-- Nút điều khiển -->
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">‹</button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">›</button>
                </div>
                <!-- Dấu chấm (bullets) -->
                <div class="glide__bullets" data-glide-el="controls[nav]">

                    @for ($i = 0; $i < 13; $i++)
                    <button class="glide__bullet" data-glide-dir="={{$i}}"></button>
                    
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="news">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">TIN TỨC & SỰ KIỆN</span>
                <h2 class="section-title">Cập Nhật<br><span>Mới Nhất</span></h2>
            </div>

            <div class="news-container">
                @if ($featuredPost = $posts->shift())
                    <article class="news-item featured">
                        <div class="news-image">
                            <img src="{{ $featuredPost->getFirstMediaUrl('media') }}" alt="{{ $featuredPost->title }}">
                            <span class="news-category">{{ $featuredPost->categories->first()?->name }}</span>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span><i class="fas fa-calendar"></i>
                                    {{ $featuredPost->created_at->format('d/m/Y') }}</span>
                                <span><i class="fas fa-eye"></i> {{ $featuredPost->view }} lượt xem</span>
                            </div>
                            <h3>{{ $featuredPost->title }}</h3>
                            <p>{{ $featuredPost->excerpt }}</p>
                            <a href="{{ $featuredPost->showUrl() }}" class="news-link">Xem chi tiết <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                @endif
                @if ($posts->isNotEmpty())
                    <div class="news-grid">
                        @foreach ($posts as $post)
                            @if($loop->iteration >= 4) @break @endif
                            <article class="news-item">
                                <div class="news-image">
                                    <img src="{{ $post->getFirstMediaUrl('media') }}" alt="{{ $post->title }}">
                                    <span class="news-category">{{ $post->categories->first()?->name }}</span>
                                </div>
                                <div class="news-content">
                                    <div class="news-meta">
                                        <span><i class="fas fa-calendar"></i>
                                            {{ $post->created_at->format('d/m/Y') }}</span>
                                    </div>
                                    <h4>{{ $post->title }}</h4>
                                    <p>{{ $post->excerpt }}</p>
                                    <a href="{{ $post->showUrl() }}" class="news-link">Đọc thêm <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">ĐĂNG KÝ NHẬN THÔNG TIN</span>
                <h2 class="section-title">Liên Hệ Tư Vấn<br><span>Nhận Ưu Đãi Độc Quyền</span></h2>
            </div>

            <div class="contact-wrapper">
                <div class="contact-form-wrapper">
                    <h3>Đăng Ký Nhận Bảng Giá & Ưu Đãi</h3>
                    <form class="contact-form" method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" placeholder="Họ và tên *" required name="name">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="tel" placeholder="Số điện thoại *" required name="phone">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="email" placeholder="Email" name="email">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group">
                                <select name="product">
                                    <option>Sản phẩm quan tâm</option>
                                    <option>Biệt thự biển</option>
                                    <option>Căn hộ cao cấp</option>
                                    <option>Shophouse</option>
                                    <option>Townhouse</option>
                                </select>
                                <i class="fas fa-home"></i>
                            </div>
                        </div>
                        <div class="form-group full">
                            <textarea placeholder="Lời nhắn" rows="4" name="message"></textarea>
                            <i class="fas fa-comment"></i>
                        </div>
                        <button type="submit" class="btn btn-submit">
                            Gửi Đăng Ký
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

                <div class="contact-info-wrapper">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="flex-1">Địa chỉ 1:</h4>
                        <p>Tòa nhà T4-51, PhốManhattan, Khu đô thị Vinhomes Grand Park, TP. Thủ Đức , HCM</p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="flex-1">Địa chỉ 2:</h4>
                        <p>L10-06 , Lầu 10 , Vincom Center, 72 Lê Thánh Tôn, P. bến Nghé, Quận 1, TP.HCM</p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Số điện thoại:</h4>
                        <p class="contact-phone">{{ settings('phone') }}</p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Website:</h4>
                        <p>{{url('/')}}/</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Glide('.glide', {
                type: 'carousel',
                perView: 2, // số item hiển thị
                gap: 20, // khoảng cách giữa các item
                autoplay: 3000, // tự động chạy (ms), bỏ nếu không muốn
                hoverpause: true,
                focusAt: 'center',
                //  peek: { before: 300, after: 300 },
                breakpoints: {
                    1024: {
                        perView: 2
                    },
                    768: {
                        perView: 1
                    }
                }
            }).mount();
        });
    </script>
    <script>
        $(function() {

            $('.contact-form').on('submit', function(e) {
                e.preventDefault();

                $(this).find('button').prop('disabled', true);

                var data = {
                    name: $(this).find('input[name="name"]').val(),
                    phone: $(this).find('input[name="phone"]').val(),
                    email: $(this).find('input[name="email"]').val(),
                    product: $(this).find('select[name="product"]').val(),
                    message: $(this).find('textarea[name="message"]').val()
                };

                $.ajax({
                    type: 'post',
                    url: '{{ route('newsletters') }}',
                    data: data,
                }).then(function(res) {
                    if (res.success) {
                        toastr.success(
                            'Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ với bạn sớm nhất.');
                        $('.contact-form')[0].reset();
                    } else {
                        toastr.error(res.msg);
                    }


                });
                $(this).find('button').prop('disabled', false);
            });
        });

        // Number Counter Animation
        const animateValue = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.textContent = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animate numbers
                    if (entry.target.classList.contains('stat-number')) {
                        const target = parseInt(entry.target.getAttribute('data-count'));
                        animateValue(entry.target, 0, target, 2000);
                        observer.unobserve(entry.target);
                    }
                    // Add animation class
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.stat-number').forEach(el => observer.observe(el));
        document.querySelectorAll('.overview-item, .investment-card, .subdivision-card').forEach(el => observer.observe(
            el));

        // Gallery Tabs
        const tabButtons = document.querySelectorAll('.tab-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                tabButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const category = btn.getAttribute('data-tab');

                galleryItems.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                        setTimeout(() => item.classList.add('show'), 10);
                    } else {
                        item.classList.remove('show');
                        setTimeout(() => item.style.display = 'none', 300);
                    }
                });
            });
        });

        // Initialize gallery
        galleryItems.forEach(item => item.classList.add('show'));
    </script>
@endsection
