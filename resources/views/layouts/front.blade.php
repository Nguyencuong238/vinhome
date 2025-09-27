<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Thẻ meta cơ bản -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="language" content="Vietnamese">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Vinhomes Green Paradise">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('') }}">

    @hasSection('meta')
        @yield('meta')
    @else
        <title>Vinhomes Green Paradise Cần Giờ - Siêu Đô Thị ESG 2.870ha | Chính Thức 2025</title>
        <meta name="description"
            content="Vinhomes Green Paradise Cần Giờ - Siêu đô thị lấn biển 2.870ha, vốn đầu tư 10 tỷ USD. Paradise Lagoon 443ha, sân golf Tiger Woods, Marina 5 sao. Hotline: {{ settings('phone') }}">
        <meta name="keywords"
            content="vinhomes green paradise, vinhomes cần giờ, green paradise cần giờ, siêu đô thị cần giờ, paradise lagoon, biệt thự biển cần giờ, the haven bay">


        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('') }}">
        <meta property="og:title" content="Vinhomes Green Paradise Cần Giờ - Siêu Đô Thị ESG 2.870ha">
        <meta property="og:description"
            content="Siêu đô thị lấn biển đầu tiên Việt Nam với Paradise Lagoon 443ha lớn nhất thế giới. Chiết khấu 18%, hỗ trợ vay 0% lãi suất.">
        <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
        <meta property="og:locale" content="vi_VN">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url('') }}">
        <meta name="twitter:title" content="Vinhomes Green Paradise Cần Giờ - Siêu Đô Thị ESG">
        <meta name="twitter:description" content="Siêu đô thị 2.870ha với 13km bờ biển, vốn đầu tư 10 tỷ USD">
        <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;800;900&display=swap"
        rel="stylesheet">

    @yield('css')

    <style>
        .mt-10 {
            margin-top: 10px;
        }
        @media (max-width: 768px) {
            .contact-card {
                display: block;
                text-align: center;
            }

            .contact-icon {
                margin: 0 auto 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-info">
                    <span><i class="fas fa-phone-alt"></i> Hotline: <strong>{{ settings('phone') }}</strong></span>
                    <span><i class="fas fa-envelope"></i> {{ settings('contact_email') }}</span>
                </div>
                <div class="top-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Navigation -->
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="Green Paradise"></a>
                </div>
                <ul class="nav-menu">
                    <li><a href="/">Trang Chủ</a></li>
                    <li class="dropdown">
                        <a href="{{ route('about') }}">Tổng Quan
                            {{-- <i class="fas fa-chevron-down"></i> --}}
                        </a>
                        {{-- <ul class="dropdown-menu">
                            <li><a href="#about">Giới Thiệu Dự Án</a></li>
                            <li><a href="#developer">Chủ Đầu Tư</a></li>
                            <li><a href="#esg">Đô Thị ESG</a></li>
                        </ul> --}}
                    </li>
                    {{-- <li><a href="#location">Vị Trí</a></li> --}}
                    <li class="dropdown">
                        <a href="{{ route('utility') }}">Tiện Ích
                            {{-- <i class="fas fa-chevron-down"></i> --}}
                        </a>
                        {{-- <ul class="dropdown-menu">
                            <li><a href="#lagoon">Paradise Lagoon</a></li>
                            <li><a href="#golf">Sân Golf</a></li>
                            <li><a href="#marina">Marina 5 Sao</a></li>
                            <li><a href="#entertainment">Giải Trí</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('progress') }}">Tiến độ</a></li>
                    <li><a href="{{ route('gallery') }}">Thư Viện</a></li>
                    <li><a href="{{ route('news') }}">Tin Tức</a></li>
                    <li><a href="{{ route('contact') }}" class="btn-nav">Liên Hệ</a></li>
                </ul>
                <div class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    @yield('page')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-column">
                    <div class="footer-logo">
                        <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="Green Paradise"></a>
                    </div>
                    <h3>Vinhomes Green Paradise</h3>
                    <p>Siêu đô thị ESG đầu tiên Việt Nam, kiến tạo chuẩn mực sống mới cho 230.000 cư dân,
                        hứa hẹn trở thành biểu tượng mới của TP.HCM và điểm đến du lịch hàng đầu châu Á.</p>
                    <div class="footer-social">
                        <a href="{{settings('facebook')}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{settings('youtube')}}"><i class="fab fa-youtube"></i></a>
                        <a href="{{settings('tiktok')}}"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h4>Khám Phá Dự Án</h4>
                    <ul>
                        <li><a href="{{route('about')}}">Tổng quan dự án</a></li>
                        <li><a href="#">Vị trí & Kết nối</a></li>
                        <li><a href="{{route('utility')}}">Tiện ích đẳng cấp</a></li>
                        <li><a href="#">Phân khu dự án</a></li>
                        <li><a href="{{route('gallery')}}">Thư viện hình ảnh</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Thông Tin Hữu Ích</h4>
                    <ul>
                        <li><a href="#">Chính sách bán hàng</a></li>
                        <li><a href="#">Phương thức thanh toán</a></li>
                        <li><a href="#">Hỗ trợ vay vốn</a></li>
                        <li><a href="{{route('progress')}}">Tiến độ dự án</a></li>
                        <li><a href="#">Câu hỏi thường gặp</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Đăng Ký Nhận Tin</h4>
                    <p>Cập nhật thông tin mới nhất về dự án và nhận ưu đãi độc quyền</p>
                    <form class="newsletter-form" onsubmit="registerNewsletter(this, event);">
                        <input type="email" name="email" placeholder="Email của bạn">
                        <button type="submit">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                    <div class="footer-badges">
                        <img src="{{ asset('assets/images/vingroup.png') }}" alt="Vinhomes">
                        <img src="{{ asset('assets/images/logo-vinhomes-can-gio.png') }}" alt="Vingroup">
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p>&copy; 2025 Vinhomes Green Paradise. All Rights Reserved.</p>
                    <p>Developed by Vinhomes - A member of Vingroup</p>
                </div>
                <div class="footer-links">
                    <a href="#">Điều khoản sử dụng</a>
                    <a href="#">Chính sách bảo mật</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Fixed Buttons -->
    <div class="fixed-buttons">
        <a href="tel:{{ str_replace(' ', '', settings('phone')) }}" class="fixed-call">
            <i class="fas fa-phone-alt"></i>
            <span>Gọi Ngay</span>
        </a>
        <a href="https://zalo.me/{{ str_replace(' ', '', settings('phone')) }}" target="blank" class="fixed-zalo">
            <img src="{{ asset('assets/images/zalo.svg') }}" alt="Zalo">
            <span>Chat Zalo</span>
        </a>
        <button id="backToTop" class="back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-toggle').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.nav-menu').classList.toggle('active');
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Back to Top Button
            const backToTop = document.getElementById('backToTop');
            if (window.scrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        // Back to Top
        document.getElementById('backToTop').addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });

                    // Close mobile menu
                    document.querySelector('.nav-menu').classList.remove('active');
                    document.querySelector('.mobile-toggle').classList.remove('active');
                }
            });
        });

        // Dropdown Menu
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.addEventListener('mouseenter', () => {
                dropdown.querySelector('.dropdown-menu').style.display = 'block';
            });
            dropdown.addEventListener('mouseleave', () => {
                dropdown.querySelector('.dropdown-menu').style.display = 'none';
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

        @if (session('info'))
            toastr.info("{{ session('info') }}");
        @endif
    </script>
    <script>
        function registerNewsletter(form, e) {
            e.preventDefault();

            $(form).find('button').prop('disabled', true);

            var data = {
                email: $(form).find('input[name="email"]').val()
            };

            $.ajax({
                type: 'post',
                url: '{{ route('newsletters') }}',
                data: data,
            }).then(function(res) {
                if (res.success) {
                    toastr.success(
                        'Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ với bạn sớm nhất.');
                    $(form)[0].reset();
                } else {
                    toastr.error(res.msg);
                }


            });
            $(form).find('button').prop('disabled', false);
        }
    </script>
    @yield('js')
</body>

</html>
