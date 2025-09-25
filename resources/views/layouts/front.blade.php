<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @hasSection('meta')
        @yield('meta')
    @else
        <title>Vinhomes Green Paradise Cần Giờ - Siêu Đô Thị ESG Hàng Đầu Thế Giới</title>
        <meta name="description"
            content="Vinhomes Green Paradise - Siêu đô thị lấn biển 2.870ha tại Cần Giờ, TP.HCM. Vốn đầu tư 10 tỷ USD, đô thị ESG xanh - thông minh - sinh thái hàng đầu thế giới.">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vin/images/logo.png') }}">


    <link rel="stylesheet" href="vin/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;800;900&display=swap"
        rel="stylesheet">

    <style>
        @media screen and (max-width: 1399px) {}

        @media screen and (max-width: 991px) {}
    </style>

    @yield('css')

    </head>

    <body>
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-content">
                    <div class="top-info">
                        <span><i class="fas fa-phone-alt"></i> Hotline: <strong>0963 72 85 86</strong></span>
                        <span><i class="fas fa-envelope"></i> info@vinhomescangio.info</span>
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
                        <img src="{{asset('vin/images/logo.png')}}" alt="Green Paradise">
                    </div>
                    <ul class="nav-menu">
                        <li><a href="/">Trang Chủ</a></li>
                        <li class="dropdown">
                            <a href="{{route('about')}}">Tổng Quan <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#about">Giới Thiệu Dự Án</a></li>
                                <li><a href="#developer">Chủ Đầu Tư</a></li>
                                <li><a href="#esg">Đô Thị ESG</a></li>
                            </ul>
                        </li>
                        <li><a href="#location">Vị Trí</a></li>
                        <li class="dropdown">
                            <a href="#utilities">Tiện Ích <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#lagoon">Paradise Lagoon</a></li>
                                <li><a href="#golf">Sân Golf</a></li>
                                <li><a href="#marina">Marina 5 Sao</a></li>
                                <li><a href="#entertainment">Giải Trí</a></li>
                            </ul>
                        </li>
                        <li><a href="#subdivisions">Phân Khu</a></li>
                        <li><a href="#gallery">Thư Viện</a></li>
                        <li><a href="{{route('news')}}">Tin Tức</a></li>
                        <li><a href="#contact" class="btn-nav">Liên Hệ</a></li>
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
                            <img src="{{asset('vin/images/logo.png')}}" alt="Green Paradise">
                        </div>
                        <h3>Vinhomes Green Paradise</h3>
                        <p>Siêu đô thị ESG đầu tiên Việt Nam, kiến tạo chuẩn mực sống mới cho 230.000 cư dân,
                            hứa hẹn trở thành biểu tượng mới của TP.HCM và điểm đến du lịch hàng đầu châu Á.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>

                    <div class="footer-column">
                        <h4>Khám Phá Dự Án</h4>
                        <ul>
                            <li><a href="#overview">Tổng quan dự án</a></li>
                            <li><a href="#location">Vị trí & Kết nối</a></li>
                            <li><a href="#utilities">Tiện ích đẳng cấp</a></li>
                            <li><a href="#subdivisions">Phân khu dự án</a></li>
                            <li><a href="#gallery">Thư viện hình ảnh</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h4>Thông Tin Hữu Ích</h4>
                        <ul>
                            <li><a href="#">Chính sách bán hàng</a></li>
                            <li><a href="#">Phương thức thanh toán</a></li>
                            <li><a href="#">Hỗ trợ vay vốn</a></li>
                            <li><a href="#">Tiến độ dự án</a></li>
                            <li><a href="#">Câu hỏi thường gặp</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h4>Đăng Ký Nhận Tin</h4>
                        <p>Cập nhật thông tin mới nhất về dự án và nhận ưu đãi độc quyền</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Email của bạn">
                            <button type="submit">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </form>
                        <div class="footer-badges">
                            <img src="{{asset('vin/images/vingroup.png')}}" alt="Vinhomes">
                            <img src="{{asset('vin/images/logo-vinhomes-can-gio.png')}}" alt="Vingroup">
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
            <a href="tel:19008888888" class="fixed-call">
                <i class="fas fa-phone-alt"></i>
                <span>Gọi Ngay</span>
            </a>
            <a href="#" class="fixed-zalo">
                <img src="{{ asset('vin/images/zalo.svg') }}" alt="Zalo">
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
        </script>

        @yield('js')
    </body>

    </html>
