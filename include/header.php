<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Kantipur Vet Distributors — Stands For Excellence</title>

    <link rel="icon" type="image/png" href="assets/img/kantipurvet-logo.png">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600&family=Merriweather:ital,wght@0,400;0,700;1,400&family=Source+Sans+3:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#342f7f',
                        secondary: '#38ac4b',
                    }
                }
            }
        }
    </script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7254a5967d.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-white overflow-x-hidden">
    <!-- ========================= PRELOADER ========================= -->
    <div id="preloader">
        <img src="assets/img/kantipurvet-logo.png" alt="Logo">
    </div>

    <!-- ============TOPBAR=================================== -->
    <!-- <div id="topbar"
        class="fixed top-0 left-0 w-full z-[999] bg-[var(--color-primary)] text-white border-b border-white/10">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-3 py-2">
                <div class="flex flex-wrap items-center justify-center sm:justify-start gap-5 text-sm font-medium">
                    <a href="tel:+97715186604"
                        class="group inline-flex items-center gap-3 text-white/80 hover:text-white transition">
                        <span
                            class="w-9 h-9 rounded-full bg-white/10 border border-white/10 flex items-center justify-center text-[var(--color-secondary)] transition duration-300 group-hover:bg-[var(--color-secondary)] group-hover:text-white">
                            <i class="fa-solid fa-phone-volume text-sm"></i>
                        </span>
                        <span>
                            +977-01-5186604 / 5186602
                        </span>
                    </a>
                    <a href="mailto:kantipurvet@gmail.com"
                        class="group inline-flex items-center gap-3 text-white/80 hover:text-white transition">
                        <span
                            class="w-9 h-9 rounded-full bg-white/10 border border-white/10 flex items-center justify-center text-[var(--color-secondary)] transition duration-300 group-hover:bg-[var(--color-secondary)] group-hover:text-white">
                            <i class="fa-solid fa-envelope text-sm"></i>
                        </span>
                        <span>
                            kantipurvet@gmail.com
                        </span>
                    </a>
                </div>
                <div class="hidden md:flex items-center gap-3">
                    <span class="text-white/50 text-sm">
                        Follow Us :
                    </span>
                    <a href="#"
                        class="w-9 h-9 rounded-full bg-white/10 border border-white/10 flex items-center justify-center text-white/80 hover:bg-[var(--color-secondary)] hover:text-white transition">
                        <i class="fa-brands fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#"
                        class="w-9 h-9 rounded-full bg-white/10 border border-white/10 flex items-center justify-center text-white/80 hover:bg-[var(--color-secondary)] hover:text-white transition">
                        <i class="fa-brands fa-instagram text-sm"></i>
                    </a>
                    <a href="#"
                        class="w-9 h-9 rounded-full bg-white/10 border border-white/10 flex items-center justify-center text-white/80 hover:bg-[var(--color-secondary)] hover:text-white transition">
                        <i class="fa-brands fa-youtube text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ========================= HEADER ========================= -->
    <header id="main-header" class="scrolled">
        <!-- ========================= DESKTOP HEADER ========================= -->
        <div class="hidden lg:block">
            <div class="max-w-7xl mx-auto px-6 xl:px-0">
                <nav class="flex items-center justify-between py-5">
                    <!-- Logo -->
                    <a href="index.php" class="flex-shrink-0 reveal">
                        <img src="assets/img/kantipurvet-logo.png" alt="Kantipur Vet" class="w-[125px]">
                    </a>
                    <!-- Navigation -->
                    <ul class="flex items-center gap-10">
                        <li>
                            <a href="index.php" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="about.php" class="nav-link">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="mission.php" class="nav-link">
                                Mission
                            </a>
                        </li>
                        <!-- Dropdown -->
                        <li class="has-dropdown">
                            <a href="#" class="nav-link flex items-center gap-2">
                                Product
                                <i class="fa-solid fa-chevron-down text-[11px]"></i>
                            </a>
                            <!-- Dropdown Panel -->
                            <div class="dropdown-panel">
                                <a href="product-list.php">
                                    Feed Supplement
                                </a>
                                <a href="product-list.php">
                                    Allopathic
                                </a>
                                <a href="product-list.php">
                                    Marketing Division
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="blog.php" class="nav-link">
                                News / Blogs
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <!-- Social -->
                    <div class="flex items-center gap-3">
                        <a href="#" class="icon-btn bg-facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="icon-btn bg-instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="icon-btn bg-twitter">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="#" class="icon-btn bg-youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- ========================= MOBILE HEADER ========================= -->
        <div class="lg:hidden bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4">
                <nav class="flex items-center justify-between py-4">
                    <!-- Logo -->
                    <a href="index.php">
                        <img src="assets/img/kantipurvet-logo.png" alt="Logo" class="w-[115px]">
                    </a>
                    <!-- Toggle -->
                    <button
                        id="offcanvas-toggle"
                        class="w-11 h-11 rounded-xl border border-gray-200 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <!-- ========================= OFFCANVAS OVERLAY ========================= -->
    <div
        class="offcanvas-overlay"
        id="oc-overlay"></div>

    <!-- ========================= MOBILE SIDEBAR ========================= -->
    <aside id="offcanvas-flip">
        <!-- Top -->
        <div class="flex items-center justify-between px-5 py-5 border-b border-gray-100">
            <a href="index.php">
                <img src="assets/img/kantipurvet-logo.png" alt="Logo" class="w-[120px]">
            </a>
            <!-- Close -->
            <button id="offcanvas-close" class="w-10 h-10 rounded-full bg-gray-100 text-gray-600 hover:bg-primary hover:text-white transition duration-300">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <!-- Navigation -->
        <nav class="py-2">
            <a href="index.php" class="offcanvas-nav-link">
                Home
            </a>
            <a href="about.php" class="offcanvas-nav-link">
                About
            </a>
            <a href="mission.php" class="offcanvas-nav-link">
                Mission
            </a>
            <!-- Dropdown -->
            <div>
                <button
                    onclick="this.nextElementSibling.classList.toggle('hidden')"
                    class="offcanvas-nav-link w-full">
                    <span>Products</span>
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>
                <!-- Submenu -->
                <div class="hidden bg-gray-50">
                    <a href="product-list.php" class="offcanvas-nav-link pl-10">
                        Feed Supplement
                    </a>
                    <a href="product-list.php" class="offcanvas-nav-link pl-10">
                        Allopathic
                    </a>
                    <a href="product-list.php" class="offcanvas-nav-link pl-10">
                        Marketing Division
                    </a>
                </div>
            </div>
            <a href="blog.php" class="offcanvas-nav-link">
                News / Blogs
            </a>
            <a href="contact.php" class="offcanvas-nav-link">
                Contact
            </a>
        </nav>
        <!-- Social -->
        <div class="px-5 py-6 flex items-center gap-3">
            <a href="#" class="icon-btn bg-facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="icon-btn bg-instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="icon-btn bg-twitter">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="#" class="icon-btn bg-youtube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </aside>