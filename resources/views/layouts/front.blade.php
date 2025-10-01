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
    <link rel="stylesheet" href="{{ asset('assets/styles.css') . '?v=' . env('ASSET_VERSION') }}">
    <link rel="stylesheet" href="{{ asset('assets/utilities.css') . '?v=' . env('ASSET_VERSION') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;800;900&display=swap"
        rel="stylesheet">
    @yield('css')

    <style>
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
    <style>
        :root {
            --backdrop: rgba(0, 0, 0, 0.5);
            --modal-bg: #fff;
            --accent: #0d6efd;
            --radius: 8px
        }


        .btn-primary {
            background: var(--gradient-primary);
            color: var(--white) !important;
            padding: 10px 25px !important;
            border-radius: var(--radius-full);
            font-weight: 600 !important;
        }


        .modal-backdrop {
            position: fixed;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1050;
            background: rgba(0, 0, 0, .5);
        }

        .modal-backdrop.show {
            display: flex
        }

        .modal-backdrop[aria-hidden="false"] {
            display: flex
        }


        .modal {
            width: 100%;
            max-width: 540px;
            margin: 1.5rem;
            transform: translateY(-10px) scale(.98);
            opacity: 0;
            transition: all 180ms cubic-bezier(.2, .8, .2, 1);
            border-radius: var(--radius);
            overflow: hidden;
            background: var(--modal-bg);
            box-shadow: 0 10px 30px rgba(2, 6, 23, .2);
        }

        .modal.show {
            transform: translateY(0) scale(1);
            opacity: 1
        }


        .modal-header,
        .modal-footer {
            padding: 1rem 1.25rem;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.02), transparent)
        }

        .modal-title {
            margin: 0;
            font-weight: 600;
            font-size: 1.05rem
        }

        .close-btn {
            background: transparent;
            border: 0;
            font-size: 1.35rem;
            line-height: 1;
            color: #333;
            cursor: pointer
        }


        .modal-body {
            padding: 30px 20px
        }

        .modal-footer {
            display: flex;
            gap: .5rem;
            justify-content: flex-end
        }


        .modal-sm {
            max-width: 360px
        }

        .modal-lg {
            max-width: 900px
        }


        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        .text-muted {
            color: #6c757d;
            font-size: .95rem
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #495057;
        }

        .required {
            color: #dc3545;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border: 1px solid #ced4da;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #00a896;
            box-shadow: 0 0 0 3px rgba(0, 168, 150, 0.1);
        }

        .form-group i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-checkbox {
            margin: 30px 0;
        }

        .form-checkbox input {
            margin-right: 10px;
        }

        .btn-submit-main {
            width: 100%;
            background: linear-gradient(135deg, #00a896 0%, #02c39a 100%);
            color: white;
            padding: 18px 30px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-submit-main:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0, 168, 150, 0.3);
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
                    <li>
                        <a href="/" @if (request()->routeIs('home')) class="btn-nav" @endif>Trang Chủ</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('about') }}" @if (request()->routeIs('about')) class="btn-nav" @endif>Tổng
                            Quan
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
                        <a href="{{ route('utility') }}" @if (request()->routeIs('utility')) class="btn-nav" @endif>Tiện
                            Ích
                            {{-- <i class="fas fa-chevron-down"></i> --}}
                        </a>
                        {{-- <ul class="dropdown-menu">
                            <li><a href="#lagoon">Paradise Lagoon</a></li>
                            <li><a href="#golf">Sân Golf</a></li>
                            <li><a href="#marina">Marina 5 Sao</a></li>
                            <li><a href="#entertainment">Giải Trí</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('progress') }}" @if (request()->routeIs('progress')) class="btn-nav" @endif>Tiến
                            độ</a></li>
                    <li><a href="{{ route('gallery') }}" @if (request()->routeIs('gallery')) class="btn-nav" @endif>Thư
                            Viện</a></li>
                    <li><a href="{{ route('news') }}" @if (request()->routeIs('news')) class="btn-nav" @endif>Tin
                            Tức</a></li>
                    <li><a href="{{ route('contact') }}" @if (request()->routeIs('contact')) class="btn-nav" @endif>Liên
                            Hệ</a></li>
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
                        <a href="/"><img src="{{ asset('assets/images/logo-2.png') }}"
                                alt="Green Paradise"></a>
                    </div>
                    <h3>Vinhomes Green Paradise</h3>
                    <p>Siêu đô thị ESG đầu tiên Việt Nam, kiến tạo chuẩn mực sống mới cho 230.000 cư dân,
                        hứa hẹn trở thành biểu tượng mới của TP.HCM và điểm đến du lịch hàng đầu châu Á.</p>
                    <div class="footer-social">
                        <a href="{{ settings('facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ settings('youtube') }}"><i class="fab fa-youtube"></i></a>
                        <a href="{{ settings('tiktok') }}"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h4>Khám Phá Dự Án</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">Tổng quan dự án</a></li>
                        <li><a href="#">Vị trí & Kết nối</a></li>
                        <li><a href="{{ route('utility') }}">Tiện ích đẳng cấp</a></li>
                        <li><a href="#">Phân khu dự án</a></li>
                        <li><a href="{{ route('gallery') }}">Thư viện hình ảnh</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Thông Tin Hữu Ích</h4>
                    <ul>
                        <li><a href="#">Chính sách bán hàng</a></li>
                        <li><a href="#">Phương thức thanh toán</a></li>
                        <li><a href="#">Hỗ trợ vay vốn</a></li>
                        <li><a href="{{ route('progress') }}">Tiến độ dự án</a></li>
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
                        <img src="{{ asset('assets/images/logo-2.png') }}" alt="Vingroup">
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

    <div id="exampleModal" class="modal-backdrop" role="dialog" aria-modal="true" aria-hidden="true"
        aria-labelledby="modalTitle">
        <div class="modal" role="document" tabindex="-1">
            <header class="modal-header pt-30">
                <h3 id="modalTitle" class="modal-title text-center" style="font-size: 22px;">Đăng Ký Nhận Thông Tin
                </h3>
                {{-- <button class="close-btn" data-dismiss="modal" aria-label="Đóng">&times;</button> --}}
            </header>
            <div class="modal-body">
                <form onsubmit="registerNewsletter(this, event, true);">
                    <div class="form-group">
                        <label>Họ và tên <span class="required">*</span></label>
                        <div class="position-relative">
                            <input type="text" placeholder="Nhập họ tên của bạn" required name="name">
                            <i class="fas fa-user"></i>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Số điện thoại <span class="required">*</span></label>
                            <div class="position-relative">
                                <input type="tel" placeholder="Số điện thoại" required name="phone">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="position-relative">
                                <input type="email" placeholder="Email của bạn" name="email">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Lời nhắn</label>
                        <div class="position-relative">
                            <textarea rows="3" placeholder="Nội dung bạn muốn tư vấn..." name="message"></textarea>
                            <i class="fas fa-comment" style="top: 35px;"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit-main">
                        Gửi Yêu Cầu
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

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
        $(function() {
            function showModal($backdrop) {
                const $dialog = $backdrop.find('.modal');
                $backdrop.attr('aria-hidden', 'false').addClass('show');
                $dialog.addClass('show');
                $backdrop.data('prevFocus', document.activeElement);
                setTimeout(function() {
                    let $focusable = $dialog.find(
                            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])')
                        .first();
                    if ($focusable.length) {
                        $focusable.focus();
                    } else {
                        $dialog.focus();
                    }
                }, 50);
            }


            function hideModal($backdrop) {
                const $dialog = $backdrop.find('.modal');
                $backdrop.attr('aria-hidden', 'true').removeClass('show');
                $dialog.removeClass('show');
                const prev = $backdrop.data('prevFocus');
                if (prev && typeof prev.focus === 'function') prev.focus();
            }


            $('[data-toggle="modal"]').on('click', function() {
                const target = $(this).data('target');
                showModal($(target));
            });


            $(document).on('click', '[data-dismiss="modal"]', function() {
                hideModal($(this).closest('.modal-backdrop'));
            });


            $(document).on('click', '.modal-backdrop', function(e) {
                if (e.target === this) {
                    hideModal($(this));
                }
            });


            $(document).on('keydown', function(e) {
                if (e.key === 'Escape') {
                    const $open = $('.modal-backdrop[aria-hidden="false"]');
                    if ($open.length) {
                        hideModal($open);
                    }
                }
            });


            window.Modal = {
                show: function(selector) {
                    showModal($(selector));
                },
                hide: function(selector) {
                    hideModal($(selector));
                }
            };
        });
        
        setTimeout(() => {
            Modal.show('#exampleModal');
        }, 5000);
    </script>
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
        function registerNewsletter(form, e, isModal = false) {
            e.preventDefault();

            $(form).find('button').prop('disabled', true);

            var data = {
                name: $(form).find('input[name="name"]').val(),
                phone: $(form).find('input[name="phone"]').val(),
                email: $(form).find('input[name="email"]').val(),
                message: $(form).find('[name="message"]').val()
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
                    if (isModal) {
                        setTimeout(() => {
                            Modal.hide('#exampleModal');
                        }, 200);
                    }
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
