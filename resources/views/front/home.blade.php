@extends('layouts.front')

@section('css')
    <style>
        @media screen and (max-width: 1399px) {}

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 991px) {}

        @media screen and (max-width: 767px) {}

        @media screen and (max-width: 575px) {}
    </style>
@endsection

@section('page')
    <!-- Hero Section with Video Background -->
    <section id="home" class="hero">
        <div class="hero-bg">
            <div class="hero-overlay"></div>
            <video autoplay muted loop poster="{{ asset('vin/images/photo-1559827260-dc66d52bef19.jpeg') }}">
                <source src="video.mp4" type="video/mp4">
                <img src="{{ asset('vin/images/photo-1559827260-dc66d52bef19.jpeg') }}" alt="Green Paradise">
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
                        <a href="#contact" class="btn btn-primary btn-lg">
                            <i class="fas fa-download"></i> Tải Brochure
                        </a>
                        <a href="#video" class="btn btn-outline btn-lg">
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
                    Siêu đô thị lấn biển đầu tiên tại Việt Nam, được phát triển trên tổng diện tích 2.870 ha tại Cần Giờ
                    - vùng đất duy nhất của TP. Hồ Chí Minh tiếp giáp với biển. Với tổng vốn đầu tư lên tới 10 tỷ USD,
                    Vinhomes Green Paradise Cần Giờ được định hướng trở thành đô thị ESG (Môi trường – Xã hội – Quản trị)
                    xanh, thông minh và sinh thái hàng đầu thế giới.
                </p>
            </div>

            <div class="overview-grid">
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Đô Thị ESG++</h3>
                    <p>Siêu đô thị ESG đầu tiên Việt Nam với tiêu chuẩn Môi trường - Xã hội - Quản trị hàng đầu thế giới,
                        được tư vấn bởi Boston Consulting Group.</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Công Nghệ AI-IoT</h3>
                    <p>Tích hợp công nghệ thông minh AI, IoT, Big Data quản lý toàn diện từ năng lượng, an ninh đến
                        dịch vụ cư dân, hướng tới chứng chỉ ISO 37122.</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3>70% Diện Tích Xanh</h3>
                    <p>Mật độ xây dựng chỉ 30%, dành 70% cho cây xanh, mặt nước và không gian công cộng,
                        tạo môi trường sống trong lành.</p>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <h3>100% Năng Lượng Sạch</h3>
                    <p>Sử dụng hoàn toàn năng lượng tái tạo từ điện gió ngoài khơi, điện mặt trời,
                        tiết kiệm 40-60% chi phí sinh hoạt cho cư dân.</p>
                </div>

            </div>

            <div class="overview-stats">
                <div class="stat-card">
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
                </div>
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
                    <img src="{{ asset('vin/images/photo-1524813686514-a57563d77965.jpeg') }}" alt="Vị trí Green Paradise">
                    <div class="map-markers">
                        <div class="marker marker-main" style="top: 40%; left: 50%;">
                            <div class="marker-pulse"></div>
                            <div class="marker-dot"></div>
                            <div class="marker-info">
                                <h4>Green Paradise</h4>
                                <p>Cần Giờ, TP.HCM</p>
                            </div>
                        </div>
                        <div class="marker" style="top: 20%; left: 30%;">
                            <div class="marker-dot"></div>
                            <span>TP.HCM (50km)</span>
                        </div>
                        <div class="marker" style="top: 50%; left: 70%;">
                            <div class="marker-dot"></div>
                            <span>Sân bay Long Thành</span>
                        </div>
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
                        <h4>Lợi Thế Độc Tôn</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Cửa ngõ ra biển duy nhất của TP.HCM - vị trí độc quyền</li>
                            <li><i class="fas fa-check"></i> Vi khí hậu mát mẻ hơn nội thành 2-3°C quanh năm</li>
                            <li><i class="fas fa-check"></i> Không khí trong lành với hàm lượng oxygen cao gấp 2-3 lần</li>
                            <li><i class="fas fa-check"></i> Khoảng cách vàng 50km - vừa tầm làm việc tại thành phố</li>
                            <li><i class="fas fa-check"></i> Tiềm năng tăng giá 300-500% trong thập kỷ tới</li>
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
                <h2 class="section-title">Hệ Sinh Thái<br><span>All-in-One Độc Nhất</span></h2>
            </div>

            <!-- Paradise Lagoon -->
            <div class="utility-highlight" id="lagoon">
                <div class="utility-content">
                    <div class="utility-info">
                        <span class="utility-tag">Kỷ Lục Guinness</span>
                        <h3>Paradise Lagoon 443ha</h3>
                        <h4>Biển Hồ Nhân Tạo Lớn Nhất Thế Giới</h4>
                        <p>Paradise Lagoon sử dụng nước biển tự nhiên được lọc từ biển Cần Giờ, tái hiện vẻ đẹp
                            Maldives với làn nước trong xanh 365 ngày/năm. Đây là biển hồ nhân tạo lớn nhất thế giới
                            được Guinness công nhận.</p>
                        <ul>
                            <li>Diện tích 443ha - lớn nhất hành tinh</li>
                            <li>Nước biển tự nhiên từ Cần Giờ</li>
                            <li>Beach club & Water sports</li>
                            <li>Bãi cát trắng nhân tạo</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('vin/images/photo-1506929562872-bb421503ef21.jpeg') }}" alt="Paradise Lagoon">
                        <div class="image-badge">443 HECTA</div>
                    </div>
                </div>
            </div>

            <!-- Golf Courses -->
            <div class="utility-highlight reverse" id="golf">
                <div class="utility-content">
                    <div class="utility-info">
                        <span class="utility-tag">Đẳng Cấp Thế Giới</span>
                        <h3>2 Sân Golf 36 Lỗ Championship</h3>
                        <h4>Thiết Kế Bởi Tiger Woods & Robert Trent Jones II</h4>
                        <p>2 sân golf 18 lỗ đẳng cấp số 1 thế giới: Sân West (Sunset) mang chữ ký Tiger Woods
                            và sân East (Sunrise) do Robert Trent Jones II thiết kế. Trải nghiệm golf tại đây tương
                            đương Augusta National hay Pebble Beach.</p>
                        <ul>
                            <li>Sân West - Tiger Woods Design</li>
                            <li>Sân East - Robert Trent Jones II</li>
                            <li>Golf Academy & Pro Shop</li>
                            <li>Clubhouse 5 sao quốc tế</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('vin/images/photo-1587381420270-3e1a5b9e6904.jpeg') }}" alt="Golf Course">
                        <div class="image-badge">36 HOLES</div>
                    </div>
                </div>
            </div>

            <!-- Marina -->
            <div class="utility-highlight" id="marina">
                <div class="utility-content">
                    <div class="utility-info">
                        <span class="utility-tag">Ultra Luxury</span>
                        <h3>Landmark Harbour Marina</h3>
                        <h4>Cảng Du Thuyền 5 Sao Quốc Tế</h4>
                        <p>Cảng tàu quốc tế 5 sao được thiết kế để đón siêu du thuyền của giới tỷ phú toàn cầu,
                            kết nối với chuỗi nhà hàng Michelin và khách sạn 6 sao. Marina duy nhất tại Việt Nam
                            có khả năng tiếp đón du thuyền 100m+.</p>
                        <ul>
                            <li>Đón siêu du thuyền 100m+</li>
                            <li>Yacht Club độc quyền</li>
                            <li>Nhà hàng Michelin</li>
                            <li>Dịch vụ Concierge 24/7</li>
                        </ul>
                    </div>
                    <div class="utility-image">
                        <img src="{{ asset('vin/images/photo-1540979388789-6cee28a1cdc9.jpeg') }}" alt="Marina">
                        <div class="image-badge">5★ MARINA</div>
                    </div>
                </div>
            </div>

            <!-- More Utilities Grid -->
            <div class="utilities-grid">
                <div class="utility-card">
                    <div class="utility-card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4>Tòa Tháp 108 Tầng</h4>
                    <p>Top 10 tòa nhà cao nhất thế giới, biểu tượng kiến trúc mới của Việt Nam</p>
                </div>
                <div class="utility-card">
                    <div class="utility-card-icon">
                        <i class="fas fa-theater-masks"></i>
                    </div>
                    <h4>Blue Wave Theatre</h4>
                    <p>Nhà hát 5.000 chỗ, thiết kế bởi Gensler, đẳng cấp London West End</p>
                </div>
                <div class="utility-card">
                    <div class="utility-card-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h4>Cleveland Clinic</h4>
                    <p>Bệnh viện số 1 nước Mỹ, y tế chuẩn quốc tế ngay tại Việt Nam</p>
                </div>
                <div class="utility-card">
                    <div class="utility-card-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h4>7.000 Phòng Khách Sạn</h4>
                    <p>Four Seasons, Ritz-Carlton, Aman - tổ hợp resort lớn nhất Việt Nam</p>
                </div>
                <div class="utility-card">
                    <div class="utility-card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Giáo Dục Quốc Tế</h4>
                    <p>Hệ thống trường Vinschool, VinUni, trường quốc tế chuẩn Cambridge</p>
                </div>
                <div class="utility-card">
                    <div class="utility-card-icon">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h4>Winter Wonderland</h4>
                    <p>30.000m² với núi tuyết nhân tạo 60m, trượt tuyết 4 mùa</p>
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
                        <img src="{{ asset('vin/images/photo-1512917774080-9991f1c4c750.jpeg') }}" alt="The Haven Bay">
                        <div class="subdivision-overlay">
                            <h3>The Haven Bay</h3>
                        </div>
                    </div>
                    <div class="subdivision-info">
                        <h4>The Haven Bay</h4>
                        <p>Vịnh thiên đường với biệt thự biển cao cấp, view trực diện Paradise Lagoon</p>
                        <ul>
                            <li>Biệt thự biển 300-500m²</li>
                            <li>Beach club riêng tư</li>
                            <li>Marina berth</li>
                        </ul>
                    </div>
                </div>

                <div class="subdivision-card">
                    <div class="subdivision-image">
                        <img src="{{ asset('vin/images/photo-1613490493576-7fde63acd811.jpeg') }}" alt="The Green Bay">
                        <div class="subdivision-overlay">
                            <h3>The Green Bay</h3>
                        </div>
                    </div>
                    <div class="subdivision-info">
                        <h4>The Green Bay</h4>
                        <p>Vịnh xanh sinh thái với townhouse và shophouse sầm uất</p>
                        <ul>
                            <li>Townhouse 150-200m²</li>
                            <li>Shophouse thương mại</li>
                            <li>Công viên trung tâm</li>
                        </ul>
                    </div>
                </div>

                <div class="subdivision-card">
                    <div class="subdivision-image">
                        <img src="{{ asset('vin/images/photo-1545324418-cc1a3fa10c00.jpeg') }}" alt="The Paradise">
                        <div class="subdivision-overlay">
                            <h3>The Paradise</h3>
                        </div>
                    </div>
                    <div class="subdivision-info">
                        <h4>The Paradise</h4>
                        <p>Trung tâm đô thị với tòa tháp 108 tầng và căn hộ cao cấp</p>
                        <ul>
                            <li>Căn hộ sky villa</li>
                            <li>Tòa tháp địa danh</li>
                            <li>Trung tâm tài chính</li>
                        </ul>
                    </div>
                </div>

                <div class="subdivision-card">
                    <div class="subdivision-image">
                        <img src="{{ asset('vin/images/photo-1573052905904-34ad8c27f0cc.jpeg') }}" alt="The Grand Island">
                        <div class="subdivision-overlay">
                            <h3>The Grand Island</h3>
                        </div>
                    </div>
                    <div class="subdivision-info">
                        <h4>The Grand Island</h4>
                        <p>Đảo VIP với biệt thự compound siêu sang cho giới thượng lưu</p>
                        <ul>
                            <li>Biệt thự 1000m²+</li>
                            <li>Bến du thuyền riêng</li>
                            <li>Helipad cá nhân</li>
                        </ul>
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

            <div class="gallery-tabs">
                <button class="tab-btn active" data-tab="all">Tất Cả</button>
                <button class="tab-btn" data-tab="overview">Tổng Quan</button>
                <button class="tab-btn" data-tab="utilities">Tiện Ích</button>
                <button class="tab-btn" data-tab="interior">Nội Thất</button>
                <button class="tab-btn" data-tab="construction">Tiến Độ</button>
            </div>

            <div class="gallery-container">
                <div class="gallery-item" data-category="overview">
                    <img src="{{ asset('vin/images/photo-1570168007204-dfb528c6958f.jpeg') }}" alt="Toàn cảnh dự án">
                    <div class="gallery-info">
                        <h4>Toàn Cảnh Dự Án</h4>
                    </div>
                </div>
                <div class="gallery-item" data-category="utilities">
                    <img src="{{ asset('vin/images/photo-1571896349842-33c89424de2d.jpeg') }}" alt="Resort 5 sao">
                    <div class="gallery-info">
                        <h4>Resort 5 Sao</h4>
                    </div>
                </div>
                <div class="gallery-item" data-category="interior">
                    <img src="{{ asset('vin/images/photo-1600607687939-ce8a6c25118c.jpeg') }}" alt="Nội thất căn hộ">
                    <div class="gallery-info">
                        <h4>Nội Thất Cao Cấp</h4>
                    </div>
                </div>
                <div class="gallery-item" data-category="overview">
                    <img src="{{ asset('vin/images/photo-1506929562872-bb421503ef21.jpeg') }}" alt="Bãi biển">
                    <div class="gallery-info">
                        <h4>Bãi Biển Riêng</h4>
                    </div>
                </div>
                <div class="gallery-item" data-category="utilities">
                    <img src="{{ asset('vin/images/photo-1587381420270-3e1a5b9e6904.jpeg') }}" alt="Sân golf">
                    <div class="gallery-info">
                        <h4>Sân Golf Championship</h4>
                    </div>
                </div>
                <div class="gallery-item" data-category="construction">
                    <img src="{{ asset('vin/images/photo-1541888946425-d81bb19240f5.jpeg') }}" alt="Tiến độ xây dựng">
                    <div class="gallery-info">
                        <h4>Tiến Độ Q4/2025</h4>
                    </div>
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
                <article class="news-item featured">
                    <div class="news-image">
                        <img src="{{ asset('vin/images/photo-1486406146926-c627a92ad1ab.jpeg') }}" alt="Ra mắt phân khu">
                        <span class="news-category">Sự Kiện</span>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span><i class="fas fa-calendar"></i> 24/09/2025</span>
                            <span><i class="fas fa-eye"></i> 15,234 lượt xem</span>
                        </div>
                        <h3>Chính Thức Ra Mắt Phân Khu Đầu Tiên The Haven Bay</h3>
                        <p>Vinhomes Green Paradise công bố lộ trình ra mắt phân khu đầu tiên The Haven Bay với 500 căn biệt
                            thự biển cao cấp,
                            mở bán chính thức vào Quý 4/2025 với nhiều ưu đãi hấp dẫn...</p>
                        <a href="#" class="news-link">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <div class="news-grid">
                    <article class="news-item">
                        <div class="news-image">
                            <img src="{{ asset('vin/images/photo-1560518883-ce09059eeffa.jpeg') }}" alt="Cầu Cần Giờ">
                            <span class="news-category">Hạ Tầng</span>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span><i class="fas fa-calendar"></i> 20/09/2025</span>
                            </div>
                            <h4>Khởi Công Cầu Cần Giờ 7.3km</h4>
                            <p>Dự án cầu Cần Giờ chính thức khởi công với tổng vốn đầu tư 10.000 tỷ đồng...</p>
                            <a href="#" class="news-link">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="news-item">
                        <div class="news-image">
                            <img src="{{ asset('vin/images/photo-1554469384-e58fac16e23a.jpeg') }}"
                                alt="Cleveland Clinic">
                            <span class="news-category">Tiện Ích</span>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span><i class="fas fa-calendar"></i> 15/09/2025</span>
                            </div>
                            <h4>Cleveland Clinic Ký Kết Hợp Tác</h4>
                            <p>Bệnh viện số 1 nước Mỹ chính thức về Green Paradise, dự kiến khai trương 2027...</p>
                            <a href="#" class="news-link">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="news-item">
                        <div class="news-image">
                            <img src="{{ asset('vin/images/duong-sat-toc-do-cao-bac-nam.jpg') }}" alt="Metro">
                            <span class="news-category">Giao Thông</span>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span><i class="fas fa-calendar"></i> 10/09/2025</span>
                            </div>
                            <h4>Metro Tốc Độ Cao 350km/h</h4>
                            <p>Tuyến Metro Cần Giờ được phê duyệt, kết nối Green Paradise với Q7 chỉ 12 phút...</p>
                            <a href="#" class="news-link">Đọc thêm <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
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
                    <form class="contact-form" method="post" action="route('newsletters')">
                        @csrf

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
                        <button type="button" class="btn btn-submit">
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
                        <h4>Văn Phòng Dự Án</h4>
                        <p>Xã Long Hòa, Huyện Cần Giờ<br>TP. Hồ Chí Minh</p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Hotline 24/7</h4>
                        <p class="contact-phone">0963 72 85 86</p>
                        <p>Tư vấn miễn phí</p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Giờ Làm Việc</h4>
                        <p>Thứ 2 - Thứ 7: 8:00 - 19:00<br>Chủ nhật: 8:00 - 17:00</p>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <h4>Tải Tài Liệu</h4>
                        <div class="download-buttons">
                            <a href="#" class="download-btn">
                                <i class="fas fa-file-pdf"></i> Brochure
                            </a>
                            <a href="#" class="download-btn">
                                <i class="fas fa-file-excel"></i> Bảng Giá
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {
            $('.contact-form .btn-submit').on('click', function(e) {
                $(this).find('button').prop('disabled', true);
                
                var data = {
                        name: $('input[name="name"]').val(),
                        phone: $('input[name="phone"]').val(),
                        email: $('input[name="email"]').val(),
                        product: $('select[name="product"]').val(),
                        message: $('textarea[name="message"]').val()
                    };
                    
                $.ajax({
                    type: 'post',
                    url: '{{ route('newsletters') }}',
                    data: data,
                }).then(function(res) {
                    
                    if (res.success) {
                        alert('Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ với bạn sớm nhất.');
                        $('.contact-form')[0].reset();
                    } else {
                        alert('Đã có lỗi xảy ra. Vui lòng thử lại sau.');
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
