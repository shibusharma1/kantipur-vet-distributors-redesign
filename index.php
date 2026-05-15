<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantipur Vet Distributors</title>
    <link rel="icon" type="image/png" href="assets/img/kantipurvet-logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#342F7F',
                        secondary: '#BA0202',
                    }
                }
            }
        }
    </script>
    <script src="https://kit.fontawesome.com/7254a5967d.js" crossorigin="anonymous"></script>
    <style>
        :root {
            --color-primary: #342F7F;
            --color-secondary: #38AC4B;
            --color-facebook: #342F7F;
            --color-instagram: #BA0202;
            --color-twitter: #000000;
            --color-youtube: #D44139;
            --color-dark-bar: rgba(0, 0, 0, 0.3);
            --color-light-bg: #f5f5f5;
            --radius-btn: 9999px;
            --radius-card: 12px;
            --transition: all 0.3s ease;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* ---------- Preloader ---------- */
        #preloader {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        #preloader img {
            width: 200px;
            /* adjust */
            animation: zoomPulse 1.2s ease-in-out infinite;
        }

        #preloader.hide {
            opacity: 0;
            pointer-events: none;
            visibility: hidden;
        }

        @keyframes zoomPulse {
            0% {
                transform: scale(1);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.15);
                opacity: 1;
            }

            100% {
                transform: scale(1);
                opacity: 0.7;
            }
        }

        /* ---------- Sticky navbar ---------- */
        #main-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 500;
            transition: var(--transition);
        }

        #main-header.scrolled {
            background: #fff !important;
            box-shadow: var(--shadow);
        }

        #main-header.scrolled .nav-link {
            color: var(--color-primary) !important;
        }

        /* ---------- Desktop nav links ---------- */
        .nav-link {
            color: #fff;
            font-weight: 500;
            font-size: 15px;
            padding: 6px 2px;
            position: relative;
            transition: var(--transition);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 2px;
            background: var(--color-secondary);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* ---------- Dropdown ---------- */
        .has-dropdown {
            position: relative;
        }

        .dropdown-panel {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            min-width: 200px;
            border-radius: var(--radius-card);
            box-shadow: var(--shadow);
            z-index: 200;
            overflow: hidden;
        }

        .has-dropdown:hover .dropdown-panel {
            display: block;
        }

        .dropdown-panel a {
            display: block;
            padding: 10px 18px;
            color: var(--color-primary);
            font-size: 14px;
            transition: var(--transition);
        }

        .dropdown-panel a:hover {
            background: var(--color-light-bg);
            padding-left: 24px;
        }

        /* ---------- Social icon buttons ---------- */
        .icon-btn {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
            transition: var(--transition);
        }

        .icon-btn:hover {
            opacity: 0.85;
            transform: translateY(-2px);
        }

        .bg-facebook {
            background: var(--color-facebook);
        }

        .bg-instagram {
            background: var(--color-instagram);
        }

        .bg-twitter {
            background: var(--color-twitter);
        }

        .bg-youtube {
            background: var(--color-youtube);
        }

        /* ---------- Off-canvas (mobile) ---------- */
        #offcanvas-flip {
            position: fixed;
            top: 0;
            right: -100%;
            bottom: 0;
            width: 80%;
            max-width: 320px;
            background: #fff;
            z-index: 1000;
            transition: right 0.35s ease;
            overflow-y: auto;
            box-shadow: -4px 0 30px rgba(0, 0, 0, 0.15);
        }

        #offcanvas-flip.open {
            right: 0;
        }

        .offcanvas-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .offcanvas-overlay.open {
            display: block;
        }

        .offcanvas-nav-link {
            display: block;
            padding: 13px 20px;
            color: var(--color-primary);
            font-weight: 500;
            border-bottom: 1px solid #f0f0f0;
            transition: var(--transition);
        }

        .offcanvas-nav-link:hover {
            background: var(--color-light-bg);
            padding-left: 28px;
        }

        /* ---------- Hero banner ---------- */
        .homepage-banner {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: flex-end;
            padding-bottom: 80px;
            background: url('assets/img/banner.jpg') center/cover no-repeat;
        }

        .banner-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(to right, rgba(52, 47, 127, 0.85) 50%, rgba(52, 47, 127, 0.25) 100%),
                url("assets/img/kantipurvet-logo.png");
            height: 100%;
            width: 100%;
            z-index: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* ---------- Section border label ---------- */
        .border-secondary {
            display: inline-block;
            padding-left: 14px;
            position: relative;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--color-secondary);
        }

        .border-secondary::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            /* transform: translateY(-50%); */
            width: 4px;
            height: 100%;
            background: var(--color-secondary);
            border-radius: 0;
        }

        .border-white {
            color: #fff;
        }

        .border-white::before {
            background: var(--color-secondary);
        }

        /* ---------- Buttons ---------- */
        .primary-btn {
            background: var(--color-primary);
            color: #fff;
            border-radius: var(--radius-btn);
            padding: 10px 22px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.5px;
            transition: var(--transition);
        }

        .primary-btn:hover {
            background: var(--color-secondary);
            transform: translateY(-2px);
        }

        .white-btn {
            background: #fff;
            color: var(--color-primary);
            border-radius: var(--radius-btn);
            padding: 10px 22px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 700;
            transition: var(--transition);
        }

        .white-btn:hover {
            background: var(--color-secondary);
            color: #fff;
        }

        .know-btn {
            color: var(--color-secondary);
            font-size: 13px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            transition: var(--transition);
        }

        .know-btn:hover {
            gap: 8px;
        }

        /* ---------- About image & circle ---------- */
        .about-img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            /* border-radius: var(--radius-card); */
            border-bottom-left-radius: 132px;
            border-bottom-right-radius: 15px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .circle-section {
            position: absolute;
            bottom: -30px;
            right: -5px;
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: var(--color-secondary);
            display: flex;
            align-items: center;
            border: 10px solid white;
            justify-content: center;
        }

        .circle-inner-section {
            margin: 0;
            text-align: center;
            color: #fff;
            font-weight: 700;
            font-size: 23px;
            color: white;
            /* font-weight: 600; */
            line-height: 24px;
        }

        .circle-inner-section p {
            margin: 0;
            line-height: 1.3;
        }

        /* ---------- Commit (slider) ---------- */
        .commit-img {
            height: 240px;
            overflow: hidden;
            border-radius: var(--radius-card);
        }

        .commit-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .commit-img:hover img {
            transform: scale(1.05);
        }

        /* ---------- Slider wrapper ---------- */
        .slider-track {
            display: flex;
            gap: 16px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
        }

        .slider-track::-webkit-scrollbar {
            display: none;
        }

        .slider-item {
            flex-shrink: 0;
            width: 200px;
            scroll-snap-align: start;
        }

        .prev-btn,
        .next-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--color-primary);
            color: var(--color-primary);
            transition: var(--transition);
            font-size: 12px;
        }

        .next-btn {
            background: var(--color-primary);
            color: #fff;
            border-color: var(--color-primary);
        }

        .prev-btn:hover {
            background: var(--color-primary);
            color: #fff;
        }

        .next-btn:hover {
            background: var(--color-secondary);
            border-color: var(--color-secondary);
        }

        /* ---------- Timeline ---------- */
        .timeline {
            position: relative;
            padding-left: 0px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 26px;
            top: 0;
            bottom: 0;
            width: 2px;
            /* background-color: #EFEEF5; */
            background: repeating-linear-gradient(to bottom,
                    #D1CEE2,
                    #D1CEE2 4px,
                    transparent 4px,
                    transparent 8px);

            /* background: linear-gradient(to bottom, var(--color-primary), var(--color-secondary)); */
        }

        .timeline-item {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 18px;
            position: relative;
        }

        .timeline-icon {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
        }

        .icon-blue {
            background: var(--color-primary);
        }

        .icon-green {
            background: var(--color-secondary);
        }

        .timeline-content {
            background: var(--color-light-bg);
            border-radius: var(--radius-card);
            padding: 14px 18px;
            flex: 1;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
            color: var(--color-primary);
            font-size: 14px;
        }

        .timeline-number {
            background: var(--color-primary);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        /* ---------- Strength ---------- */
        .strenght-img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: var(--radius-card);
        }

        .circle-section1 {

            position: absolute;
            bottom: -30px;
            left: -5px;
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: var(--color-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            border: 10px solid white;
        }

        .circle-inner-section1 {
            text-align: center;
            color: #fff;
            font-weight: 700;
            font-size: 17px;
            margin: 0;
            line-height: 24px;
        }

        .circle-inner-section1 p {
            margin: 0;
            line-height: 1.3;
        }

        /* ---------- Vision section ---------- */
        .vision-section {
            background: linear-gradient(135deg, var(--color-primary) 0%, #1a1660 100%);
        }

        /* ---------- Blog ---------- */
        .blog-section-img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-radius: var(--radius-card);
            transition: transform 0.4s ease;
        }

        .blog-section:hover .blog-section-img {
            transform: scale(1.04);
        }

        .blog-small-img {
            width: 100%;
            height: 90px;
            object-fit: cover;
            border-radius: var(--radius-card) 0 0 var(--radius-card);
        }

        .blog-text {
            color: var(--color-primary);
        }

        .blog-text:hover {
            color: var(--color-secondary);
        }

        .border-bottom {
            border-bottom: 4px solid var(--color-secondary);
        }

        /* ---------- Footer ---------- */
        footer {
            background: var(--color-primary);
        }

        .bg-dark {
            background: var(--color-dark-bar);
        }

        .footer-ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-ul li {
            margin-bottom: 6px;
        }

        .footer-ul a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            transition: var(--transition);
        }

        .footer-ul a:hover {
            color: #fff;
            padding-left: 6px;
        }

        /* ---------- Misc ---------- */
        .border-rounded {
            border-radius: var(--radius-card);
        }

        .bg-light {
            background: var(--color-light-bg);
        }

        .img-cover {
            object-fit: cover;
        }

        .two-line {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .four-line {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* ---------- Image hover ---------- */
        .inline-clip {
            overflow: hidden;
            display: block;
        }

        .transition-toggle img {
            transition: transform 0.4s ease;
        }

        .transition-toggle:hover img {
            transform: scale(1.05);
        }

        /* ---------- Reveal animation ---------- */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s, transform 0.6s;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-white">

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="assets/img/kantipurvet-logo.png" alt="" width="200">
        </div>
    </div>

    <!-- ===================== HEADER ===================== -->
    <div id="main-header">

        <!-- Desktop -->
        <div class="hidden lg:block">
            <div class="max-w-screen-xl mx-auto px-6">
                <nav class="flex items-center py-4 gap-10">
                    <a href="index.php">
                        <img src="assets/img/kantipurvet-logo.png" alt="" width="120">
                    </a>
                    <ul class="flex items-center gap-8 flex-1 justify-center list-none m-0 p-0">
                        <li><a href="about.php" class="nav-link">About</a></li>
                        <li><a href="mission.php" class="nav-link">Mission</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="nav-link flex items-center gap-1">
                                Product <i class="fa-solid fa-chevron-down text-xs"></i>
                            </a>
                            <div class="dropdown-panel">
                                <a href="product-list.php">Feed Supplement</a>
                                <a href="product-list.php">Allopathic</a>
                                <a href="product-list.php">Marketing Division</a>
                            </div>
                        </li>
                        <li><a href="blog.php" class="nav-link">News / Blogs</a></li>
                        <li><a href="career.php" class="nav-link">Career</a></li>
                        <li><a href="contact.php" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="flex items-center gap-2 flex-shrink-0">
                        <a href="" class="icon-btn bg-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="icon-btn bg-instagram"><i class="fab fa-instagram"></i></a>
                        <a href="" class="icon-btn bg-twitter"><i class="fab fa-x-twitter"></i></a>
                        <a href="" class="icon-btn bg-youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Mobile -->
        <div class="lg:hidden bg-white shadow">
            <div class="max-w-screen-xl mx-auto px-4">
                <nav class="flex items-center justify-between py-3">
                    <a href="index.php">
                        <img alt="" src="assets/img/kantipurvet-logo.png" width="120">
                    </a>
                    <button id="offcanvas-toggle" class="px-4 py-2 border border-gray-300 rounded text-gray-700 text-sm" type="button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </nav>
            </div>
        </div>

    </div>

    <!-- Off-canvas overlay -->
    <div class="offcanvas-overlay" id="oc-overlay"></div>

    <!-- Off-canvas panel -->
    <div id="offcanvas-flip">
        <div class="flex items-center justify-between p-4 border-b border-gray-100">
            <a href="index.php"><img src="assets/img/kantipurvet-logo.png" alt="" width="120"></a>
            <button id="offcanvas-close" class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 text-gray-600">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <nav>
            <a href="index.php" class="offcanvas-nav-link">Home</a>
            <a href="about.php" class="offcanvas-nav-link">About</a>
            <a href="mission.php" class="offcanvas-nav-link">Mission</a>
            <div>
                <button onclick="this.nextElementSibling.classList.toggle('hidden')" class="offcanvas-nav-link w-full text-left flex items-center justify-between">
                    Product <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>
                <div class="hidden bg-gray-50 pl-4">
                    <a href="product-list.php" class="offcanvas-nav-link">Allopathic</a>
                    <a href="product-list.php" class="offcanvas-nav-link">Allopathic</a>
                    <a href="product-list.php" class="offcanvas-nav-link">Marketing Division</a>
                </div>
            </div>
            <a href="blog.php" class="offcanvas-nav-link">News / Blogs</a>
            <a href="career.php" class="offcanvas-nav-link">Career</a>
            <a href="contact.php" class="offcanvas-nav-link">Contact</a>
        </nav>
        <div class="p-4 flex gap-2">
            <a href="" class="icon-btn bg-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="icon-btn bg-instagram"><i class="fab fa-instagram"></i></a>
            <a href="" class="icon-btn bg-twitter"><i class="fab fa-x-twitter"></i></a>
            <a href="" class="icon-btn bg-youtube"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <!-- ===================== BANNER ===================== -->
    <section class="homepage-banner pt-20">
        <div class="banner-overlay overflow-hidden">
            <iframe frameborder="0" allow="autoplay; mute" src="https://www.youtube.com/embed/LQcKieGJV-M?enablejsapi=1&amp;disablekb=1&amp;controls=0&amp;rel=0&amp;iv_load_policy=3&amp;cc_load_policy=0&amp;playsinline=1&amp;showinfo=0&amp;modestbranding=1&amp;fs=0&amp;origin=https://www.kantipurpharma.com&amp;mute=1&amp;autoplay=1&amp;loop=1" id="LQcKieGJV-M-8105" style="top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%); position: absolute; opacity: 1; width: 1721px; height: 968.062px;" title="Cow Stock Footage - Cow Free Stock Videos - Cow No Copyright Videos"></iframe>
        </div>
        <div class="relative z-10 max-w-screen-xl mx-auto px-6 w-full">
            <div class="w-full lg:w-2/3 mt-16 reveal">
                <h3 class="m-0 border-secondary border-white">human - animal compassion</h3>
                <h1 class="mt-2 mb-12 text-white text-3xl lg:text-5xl font-bold leading-tight">
                    The bond between humans and animals is a deep, unspoken connection rooted in trust, love, and mutual understanding.
                </h1>
            </div>
        </div>
    </section>

    <!-- ===================== ABOUT SECTION ===================== -->
    <section class="py-16">
        <div class="max-w-screen-xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">

                <div class="reveal">
                    <div class="relative">
                        <img src="assets/img/about.webp" class="about-img" loading="lazy" alt="about">
                        <div class="circle-section">
                            <div class="circle-inner-section">
                                <p>12+ <br> Years</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 reveal">
                    <h3 class="mb-1 border-secondary">About us</h3>
                    <h2 class="mt-0 text-3xl font-bold mb-4" style="color:var(--color-primary);">Welcome to Kantipur <br> Pharmaceuticals Lab Limited.</h2>
                    <div class="bg-light border-rounded p-6 mb-6">
                        <p class="text-gray-600 leading-relaxed mb-5">KPL is driven by a singular purpose: "Caring and Curing Animal Health with passion and Quality". At KPL, we are more than just a leader in veterinary pharmaceuticals—we are a dedicated partner in the health and well-being of animals. KPL and Team aim to provide innovative, high-quality solutions that support the care of pets, livestock, and wildlife, ensuring they live healthier, happier lives. With a commitment to sustainability, ethical practices, and continuous improvement, we strive to make a positive impact on both the animals we care for and the communities we serve. Thank you for choosing KPL—we look forward to being a trusted part of your journey to better animal health.</p>
                        <a href="about.php"
                            class="group inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600">

                            <span class="uppercase tracking-wide text-sm">
                                EXPLORE MORE
                            </span>

                            <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                        group-hover:bg-green-600 group-hover:text-white">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                        <div class="flex gap-3 items-start reveal">
                            <img src="assets/img/icon/mission.png" loading="lazy" height="60" width="60" alt="" class="flex-shrink-0">
                            <div>
                                <h3 class="font-bold m-0" style="color:var(--color-primary)">Our mission</h3>
                                <p class="mt-0 mb-2 four-line text-sm text-gray-500">To support the growth and development of the animal and poultry industries in Nepal.</p>
                                <a href="mission.php" class="know-btn">Know More <i class="fa-solid fa-chevron-right text-xs"></i></a>
                            </div>
                        </div>
                        <div class="flex gap-3 items-start border-l border-gray-200 pl-3 reveal">
                            <img src="assets/img/icon/vision.png" loading="lazy" height="60" width="60" alt="" class="flex-shrink-0">
                            <div>
                                <h3 class="font-bold m-0" style="color:var(--color-primary)">Our vision</h3>
                                <p class="mt-0 mb-2 four-line text-sm text-gray-500">We aspire to be as an industry leader with the goal of contributing to overall advancement of the animal</p>
                                <a href="mission.php" class="know-btn">Know More <i class="fa-solid fa-chevron-right text-xs"></i></a>
                            </div>
                        </div>
                        <div class="flex gap-3 items-start border-l border-gray-200 pl-3 reveal">
                            <img src="assets/img/icon/goal.png" loading="lazy" height="60" width="60" alt="" class="flex-shrink-0">
                            <div>
                                <h3 class="font-bold m-0" style="color:var(--color-primary)">Our goals</h3>
                                <p class="mt-0 mb-2 four-line text-sm text-gray-500">To become the leading veterinary industry in Nepal in the field of Animal Feed Supplements.</p>
                                <a href="mission.php" class="know-btn">Know More <i class="fa-solid fa-chevron-right text-xs"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== COMMITMENT SECTION ===================== -->
    <section class="bg-light py-16">
        <div class="max-w-screen-xl mx-auto px-6">
            <div class="flex flex-col items-center mb-10 reveal">
                <h3 class="mb-1 border-secondary">commitment</h3>
                <h2 class="mt-0 text-3xl font-bold" style="color:var(--color-primary)">The Commitment We Made For</h2>
            </div>
            <div class="relative">
                <div class="slider-track reveal" id="commit-track">
                    <div class="slider-item">
                        <div class="commit-img mb-3"><img src="assets/img/commit/img1.jpg" loading="lazy" width="400" height="600" alt=""></div>
                        <div class="text-center">
                            <h3 class="font-bold" style="color:var(--color-primary)">dairy cattle</h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="commit-img mb-3"><img src="assets/img/commit/img2.jpg" loading="lazy" width="400" height="600" alt=""></div>
                        <div class="text-center">
                            <h3 class="font-bold" style="color:var(--color-primary)">Equines</h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="commit-img mb-3"><img src="assets/img/commit/img3.jpg" loading="lazy" width="400" height="600" alt=""></div>
                        <div class="text-center">
                            <h3 class="font-bold" style="color:var(--color-primary)">Poultry</h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="commit-img mb-3"><img src="assets/img/commit/img4.jpg" loading="lazy" width="400" height="600" alt=""></div>
                        <div class="text-center">
                            <h3 class="font-bold" style="color:var(--color-primary)">Swines</h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="commit-img mb-3"><img src="assets/img/commit/img1.jpg" loading="lazy" width="400" height="600" alt=""></div>
                        <div class="text-center">
                            <h3 class="font-bold" style="color:var(--color-primary)">dairy cattle</h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="commit-img mb-3"><img src="assets/img/commit/img2.jpg" loading="lazy" width="400" height="600" alt=""></div>
                        <div class="text-center">
                            <h3 class="font-bold" style="color:var(--color-primary)">Equines</h3>
                        </div>
                    </div>
                </div>
                <!-- LEFT ARROW -->
                <button id="prev-btn"
                    class="absolute left-2 top-1/2 -translate-y-1/2 z-10
               bg-white shadow-md w-10 h-10 rounded-full
               flex items-center justify-center
               text-primary hover:bg-primary hover:text-white transition">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- RIGHT ARROW -->
                <button id="next-btn"
                    class="absolute right-2 top-1/2 -translate-y-1/2 z-10
               bg-white shadow-md w-10 h-10 rounded-full
               flex items-center justify-center
               text-primary hover:bg-primary hover:text-white transition">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>
        </div>
    </section>

    <!-- ===================== QUALITY / R&D SECTION ===================== -->
    <section class="py-16">
        <div class="max-w-screen-xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-start">

                <div class="mb-6 reveal">
                    <h3 class="mb-1 border-secondary">R&amp;D and Quality Strength</h3>
                    <h2 class="mt-0 text-2xl font-bold mb-6" style="color:var(--color-primary)">This Defines Our Quality of Research &amp; Development</h2>
                    <div class="inline-clip border-rounded transition-toggle" style="max-width:270px;">
                        <img src="assets/img/commit.jpg" class="border-rounded w-full object-cover" loading="lazy" height="500" width="500" alt="" style="height:280px;">
                    </div>
                </div>

                <div class="md:col-span-2 reveal">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon icon-blue border-[5px] border-[#D1CEE2]"><img src="assets/img/icon/hen.png" height="30" width="30" alt=""></div>
                            <div class="timeline-content"><span class="timeline-number">01</span> Determination Of Mycotoxin By LCMS</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon icon-blue border-[5px] border-[#D1CEE2]"><img src="assets/img/icon/cow.png" height="40" width="40" alt=""></div>
                            <div class="timeline-content"><span class="timeline-number">02</span> Determination Of Heavy Metal By Atomic Absorption Spectroscopy</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon icon-blue border-[5px] border-[#D1CEE2]"><img src="assets/img/icon/buffalo.png" height="40" width="40" alt=""></div>
                            <div class="timeline-content"><span class="timeline-number">03</span> Well Equipped Microbiology Laboratory</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon icon-blue border-[5px] border-[#D1CEE2]"><img src="assets/img/icon/pig.png" height="40" width="40" alt=""></div>
                            <div class="timeline-content"><span class="timeline-number">04</span> Product Stability Testing</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-icon icon-blue border-[5px] border-[#D1CEE2]"><img src="assets/img/icon/dog.png" height="40" width="40" alt=""></div>
                            <div class="timeline-content"><span class="timeline-number">05</span> Wet Chemistry Lab</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== STRENGTH SECTION ===================== -->
    <section class="py-16" style="background:linear-gradient(135deg,#f8f9ff 0%,#fff5f5 100%);">
        <div class="max-w-screen-xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">

                <div class="md:col-span-2 reveal">
                    <h3 class="mb-1 border-secondary">our strength</h3>
                    <h2 class="mt-0 text-3xl font-bold mb-6" style="color:var(--color-primary)">Quality Assurance / Quality Management</h2>
                    <div class="bg-light border-rounded p-6">
                        <p class="text-gray-600 leading-relaxed">KPL and Team are inspired by the purpose: "Caring and Curing Animal Health with passion and Quality".This care is essential to enhance the quality of life for animals while also safeguarding human health by preventing the spread of zoonotic diseases and cordially believe this work is core to our responsibilities as team and a business.Our goal is to become the leading veterinary industry in Nepal in the field of Animal Feed Supplements and Quality Medicines and to expand our distribution network to reach more customers across the Globe.We aspire to be acknowledged as an industry leader, both nationally and internationally, with the goal of contributing to the overall advancement of the animal and poultry sectors in Nepal through our dedicated products and services.We aspire to be acknowledged as an industry leader, both nationally and internationallys.</p>
                    </div>
                </div>

                <div class="relative reveal">
                    <img src="assets/img/strenght.jpg" class="strenght-img" loading="lazy" alt="strenght">
                    <div class="circle-section1">
                        <div class="circle-inner-section1">
                            <p>ALL OVER <br> NEPAL</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== VIDEO SECTION ===================== -->
    <div class="max-w-screen-xl mx-auto px-6 py-12 mb-8 reveal">
        <div class="border-rounded overflow-hidden" style="aspect-ratio:16/9;">
            <iframe
                src="https://www.youtube.com/embed/CP5k2gRabvc?si=n2PudHgjFHMvDxH0"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                class="w-full h-full border-rounded"
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <!-- ===================== VISION / TEAM SECTION ===================== -->
    <section class="vision-section py-16">
        <div class="max-w-screen-xl mx-auto px-6">
            <div class="flex flex-col items-center mb-10 reveal">
                <h3 class="mb-1 border-secondary border-white">teams</h3>
                <h2 class="mt-0 text-3xl font-bold text-white">Our Visionary Team</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="inline-clip border-rounded transition-toggle reveal">
                    <img src="assets/img/team.png" class="img-cover border-rounded w-full" alt="" loading="lazy" style="height:360px;">
                </div>
                <div class="reveal">
                    <h2 class="text-xl font-bold text-white mb-4">a visionary team empowering animal health in nepal</h2>
                    <p class="text-white/80 leading-relaxed mb-6">KPL is driven by a singular purpose: "Caring and Curing Animal Health with passion and Quality". At KPL, we are more than just a leader in veterinary pharmaceuticals—we are a dedicated partner in the health and well-being of animals. KPL and Team aim to provide innovative, high-quality solutions that support the care of pets, livestock, and wildlife, ensuring they live healthier, happier lives. With a commitment to sustainability,</p>
                    <!-- <a href="mission.php" class="white-btn">
                        <span>EXPLORE MORE</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a> -->

                    <a href="mission.php"
                        class="group inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600">

                        <span class="uppercase tracking-wide text-sm">
                            EXPLORE MORE
                        </span>

                        <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                        group-hover:bg-green-600 group-hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== BLOG SECTION ===================== -->
    <section class="py-16">
        <div class="max-w-screen-xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="md:col-span-2 reveal">
                    <h3 class="mb-1 border-secondary">our blogs</h3>
                    <h2 class="mt-0 text-3xl font-bold" style="color:var(--color-primary)">Latest News &amp; Update</h2>
                </div>
                <div class="hidden md:flex items-center justify-end reveal">

                    <a href="blog.php"
                        class="group inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600">

                        <span class="uppercase tracking-wide text-sm">
                            EXPLORE MORE
                        </span>

                        <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                        group-hover:bg-green-600 group-hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Featured post -->
                <div class="reveal">
                    <div>
                        <a href="blog-detail.php" class="blog-section inline-clip transition-toggle">
                            <img src="assets/img/blog1.png" class="blog-section-img" loading="lazy" alt="">
                        </a>
                    </div>
                    <div class="bg-light p-5 mt-3 border-bottom border-rounded">
                        <div class="flex gap-4 text-xs uppercase text-gray-500 mb-2">
                            <span><i class="fa-solid fa-user mr-1" style="color:var(--color-secondary)"></i>Admin Name</span>
                            <span><i class="fa-solid fa-calendar mr-1" style="color:var(--color-secondary)"></i>27 August, 2025</span>
                        </div>
                        <a href="blog-detail.php" class="blog-text">
                            <h2 class="text-lg font-bold mb-1 two-line">Behavior and training animals</h2>
                        </a>
                        <p class="text-sm text-gray-500 two-line mb-4">What Every Pet Owner Needs to Know Owning a pet is a rewarding experience, but it also comes with important responsibilities Pet Owner Needs to Know Owning a pet is a rewarding experience.</p>
                        <a href="blog-detail.php"
                            class="group inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600">

                            <span class="uppercase tracking-wide text-sm">
                                EXPLORE MORE
                            </span>

                            <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                        group-hover:bg-green-600 group-hover:text-white">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Small blog posts -->
                <div class="flex flex-col gap-4">

                    <div class="bg-light border-rounded reveal">
                        <div class="grid grid-cols-3 gap-3">
                            <a href="blog-detail.php" class="inline-clip transition-toggle">
                                <img src="assets/img/blog2.webp" class="blog-small-img" loading="lazy" alt="">
                            </a>
                            <div class="col-span-2 flex flex-col justify-center pr-3 py-2">
                                <div class="flex gap-3 text-xs uppercase text-gray-400 mb-1">
                                    <span><i class="fa-solid fa-user mr-1" style="color:var(--color-secondary)"></i>Admin Name</span>
                                    <span><i class="fa-solid fa-calendar mr-1" style="color:var(--color-secondary)"></i>27 August, 2025</span>
                                </div>
                                <a href="blog-detail.php" class="blog-text">
                                    <h2 class="text-base font-bold two-line m-0">Behavior and training animals</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light border-rounded reveal">
                        <div class="grid grid-cols-3 gap-3">
                            <a href="blog-detail.php" class="inline-clip transition-toggle">
                                <img src="assets/img/blog3.jpeg" class="blog-small-img" loading="lazy" alt="">
                            </a>
                            <div class="col-span-2 flex flex-col justify-center pr-3 py-2">
                                <div class="flex gap-3 text-xs uppercase text-gray-400 mb-1">
                                    <span><i class="fa-solid fa-user mr-1" style="color:var(--color-secondary)"></i>Admin Name</span>
                                    <span><i class="fa-solid fa-calendar mr-1" style="color:var(--color-secondary)"></i>27 August, 2025</span>
                                </div>
                                <a href="blog-detail.php" class="blog-text">
                                    <h2 class="text-base font-bold two-line m-0">Behavior and training animals</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light border-rounded reveal">
                        <div class="grid grid-cols-3 gap-3">
                            <a href="blog-detail.php" class="inline-clip transition-toggle">
                                <img src="assets/img/blog4.jpeg" class="blog-small-img" loading="lazy" alt="">
                            </a>
                            <div class="col-span-2 flex flex-col justify-center pr-3 py-2">
                                <div class="flex gap-3 text-xs uppercase text-gray-400 mb-1">
                                    <span><i class="fa-solid fa-user mr-1" style="color:var(--color-secondary)"></i>Admin Name</span>
                                    <span><i class="fa-solid fa-calendar mr-1" style="color:var(--color-secondary)"></i>27 August, 2025</span>
                                </div>
                                <a href="blog-detail.php" class="blog-text">
                                    <h2 class="text-base font-bold two-line m-0">Behavior and training animals</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light border-rounded reveal">
                        <div class="grid grid-cols-3 gap-3">
                            <a href="blog-detail.php">
                                <img src="assets/img/blog1.png" class="blog-small-img" loading="lazy" alt="">
                            </a>
                            <div class="col-span-2 flex flex-col justify-center pr-3 py-2">
                                <div class="flex gap-3 text-xs uppercase text-gray-400 mb-1">
                                    <span><i class="fa-solid fa-user mr-1" style="color:var(--color-secondary)"></i>Admin Name</span>
                                    <span><i class="fa-solid fa-calendar mr-1" style="color:var(--color-secondary)"></i>27 August, 2025</span>
                                </div>
                                <a href="blog-detail.php" class="blog-text">
                                    <h2 class="text-base font-bold two-line m-0">Behavior and training animals Behavior and training animals</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mobile explore more -->
            <div class="md:hidden mt-6 reveal">
                <a href="blog.php"
                    class="group inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600">

                    <span class="uppercase tracking-wide text-sm">
                        EXPLORE MORE
                    </span>

                    <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                        group-hover:bg-green-600 group-hover:text-white">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- ===================== FOOTER ===================== -->
    <footer>
        <div class="vision-section py-12">
            <div class="max-w-screen-xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                    <div class="reveal">
                        <a href="index.php">
                            <img alt="" loading="eager" src="assets/img/kantipurvet-logo.png" width="120" class="bg-white p-2 mb-4 block">
                        </a>
                        <p class="text-white/70 text-sm leading-relaxed">KPL is highly dedicated to research, production and planned marketing of veterinary allopathic medicines, animal nutrition, animal feed additives.</p>
                    </div>
                    <div class="reveal">
                        <h3 class="text-white font-bold mb-3 text-sm uppercase tracking-wider">IMPORTANT LINKS</h3>
                        <ul class="footer-ul">
                            <li><a href="about.php">About</a></li>
                            <li><a href="mission.php">Mission</a></li>
                            <li><a href="blog.php">News / Blogs</a></li>
                            <li><a href="career.php">Career</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="reveal">
                        <h3 class="text-white font-bold mb-3 text-sm uppercase tracking-wider">OUR PRODUCTS</h3>
                        <ul class="footer-ul">
                            <li><a href="product-list.php">Feed Supplement</a></li>
                            <li><a href="product-list.php">Allopathic</a></li>
                            <li><a href="product-list.php">Marketing Division</a></li>
                        </ul>
                    </div>
                    <div class="reveal">
                        <h3 class="text-white font-bold mb-3 text-sm uppercase tracking-wider">CONTACT US</h3>
                        <ul class="footer-ul space-y-2">
                            <li class="flex gap-2 items-start text-white/70 text-sm"><i class="fa-solid fa-location-dot mt-1 flex-shrink-0 text-white"></i><span>KVD Complex 6th Floor, Balkumari, Lalitpur, Nepal, PIN 44700</span></li>
                            <li class="flex gap-2 items-start text-white/70 text-sm"><i class="fa-solid fa-location-dot mt-1 flex-shrink-0 text-white"></i><span>Panchkhal - 06, Hokshe, Kavre</span></li>
                            <li class="flex gap-2 items-start text-white/70 text-sm"><i class="fa-solid fa-phone mt-1 flex-shrink-0 text-white"></i><span>98787875845715, 985681464</span></li>
                            <li class="flex gap-2 items-start text-white/70 text-sm"><i class="fa-solid fa-envelope mt-1 flex-shrink-0 text-white"></i><span>info@kantipurpharma.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-dark py-4">
            <div class="max-w-screen-xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                    <div class="flex gap-4 items-center">
                        <a href="#" class="text-white/60 hover:text-white text-sm">Terms and Condition</a>
                        <a href="#" class="text-white/60 hover:text-white text-sm">Privacy</a>
                    </div>
                    <div class="text-center">
                        <p class="m-0 text-white/60 text-sm">Copyright © 2024, Kantipur Lab.</p>
                        <p class="m-0 text-white/60 text-sm">Design &amp; Developed By Cyberlink Pvt. Ltd.</p>
                    </div>
                    <div class="flex justify-end gap-2">
                        <a href="" class="icon-btn bg-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="icon-btn bg-instagram"><i class="fab fa-instagram"></i></a>
                        <a href="" class="icon-btn bg-twitter"><i class="fab fa-x-twitter"></i></a>
                        <a href="" class="icon-btn bg-youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            setTimeout(() => {
                const p = document.getElementById('preloader');
                p.classList.add('hide');

                setTimeout(() => p.remove(), 500);
            }, 800);
        });

        // Sticky navbar
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 80) header.classList.add('scrolled');
            else header.classList.remove('scrolled');
        });

        // Off-canvas
        const toggle = document.getElementById('offcanvas-toggle');
        const closeBtn = document.getElementById('offcanvas-close');
        const canvas = document.getElementById('offcanvas-flip');
        const overlay = document.getElementById('oc-overlay');
        const openOC = () => {
            canvas.classList.add('open');
            overlay.classList.add('open');
            document.body.style.overflow = 'hidden';
        };
        const closeOC = () => {
            canvas.classList.remove('open');
            overlay.classList.remove('open');
            document.body.style.overflow = '';
        };
        toggle?.addEventListener('click', openOC);
        closeBtn?.addEventListener('click', closeOC);
        overlay?.addEventListener('click', closeOC);

        // Commitment slider
        const track = document.getElementById('commit-track');
        document.getElementById('next-btn')?.addEventListener('click', () => track.scrollBy({
            left: 216,
            behavior: 'smooth'
        }));
        document.getElementById('prev-btn')?.addEventListener('click', () => track.scrollBy({
            left: -216,
            behavior: 'smooth'
        }));

        // Scroll reveal
        const io = new IntersectionObserver((entries) => {
            entries.forEach((e, i) => {
                if (e.isIntersecting) {
                    setTimeout(() => e.target.classList.add('visible'), i * 60);
                    io.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.08
        });
        document.querySelectorAll('.reveal').forEach(el => io.observe(el));
    </script>

</body>

</html>