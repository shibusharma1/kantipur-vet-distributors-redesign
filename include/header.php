<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>KPL</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/7254a5967d.js" crossorigin="anonymous"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {

                    colors: {
                        primary: '#342F7F',
                        secondary: '#BA0202',
                        dark: '#111827',
                        light: '#F8FAFC',
                        border: '#E5E7EB',
                    },

                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },

                    boxShadow: {
                        soft: '0 10px 30px rgba(0,0,0,0.08)',
                    },

                    borderRadius: {
                        xl2: '20px',
                    },

                    container: {
                        center: true,
                        padding: {
                            DEFAULT: '1rem',
                            lg: '2rem',
                        },
                    }

                }
            }
        }
    </script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Global Styles -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .section {
            @apply py-16 lg:py-24;
        }

        .section-title {
            @apply text-3xl lg:text-5xl font-bold text-primary leading-tight;
        }

        .section-subtitle {
            @apply text-secondary uppercase tracking-widest text-sm font-semibold mb-3;
        }

        .primary-btn {
            @apply inline-flex items-center gap-3 bg-primary text-white px-7 py-4 rounded-full hover:opacity-90 transition duration-300;
        }

        .secondary-btn {
            @apply inline-flex items-center gap-3 bg-secondary text-white px-7 py-4 rounded-full hover:opacity-90 transition duration-300;
        }

        .card {
            @apply bg-white rounded-2xl shadow-soft overflow-hidden;
        }
    </style>

</head>

<body class="bg-white text-gray-700">

    <!-- Preloader -->
    <div id="preloader"
        class="fixed inset-0 bg-white z-[9999] flex items-center justify-center">

        <img src="assets/img/kantipurvet-logo.jpg" alt="" class="w-[180px]">
    </div>

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white shadow-soft">

        <div class="container">

            <div class="flex items-center justify-between py-5">

                <!-- Logo -->
                <a href="index.php">
                    <img src="assets/img/kantipurvet-logo.jpg"
                        alt="Logo"
                        class="w-[120px]">
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:block">

                    <ul class="flex items-center gap-8 font-medium">

                        <li>
                            <a href="about.php" class="hover:text-primary transition">
                                About
                            </a>
                        </li>

                        <li>
                            <a href="mission.php" class="hover:text-primary transition">
                                Mission
                            </a>
                        </li>

                        <!-- Dropdown -->
                        <li class="relative group">

                            <button class="flex items-center gap-2 hover:text-primary transition">
                                Product
                                <i class="fa-solid fa-angle-down text-sm"></i>
                            </button>

                            <div class="absolute left-0 top-full invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300 bg-white shadow-soft rounded-2xl min-w-[240px] p-3">

                                <a href="product-list.php"
                                    class="block px-4 py-3 rounded-xl hover:bg-gray-100">
                                    Feed Supplement
                                </a>

                                <a href="product-list.php"
                                    class="block px-4 py-3 rounded-xl hover:bg-gray-100">
                                    Allopathic
                                </a>

                                <a href="product-list.php"
                                    class="block px-4 py-3 rounded-xl hover:bg-gray-100">
                                    Marketing Division
                                </a>

                            </div>

                        </li>

                        <li>
                            <a href="blog.php" class="hover:text-primary transition">
                                Blogs
                            </a>
                        </li>

                        <li>
                            <a href="career.php" class="hover:text-primary transition">
                                Career
                            </a>
                        </li>

                        <li>
                            <a href="contact.php" class="hover:text-primary transition">
                                Contact
                            </a>
                        </li>

                    </ul>

                </nav>

                <!-- Right -->
                <div class="hidden lg:flex items-center gap-3">

                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-secondary text-white flex items-center justify-center">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-black text-white flex items-center justify-center">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>

                </div>

                <!-- Mobile Button -->
                <button id="menuBtn"
                    class="lg:hidden text-2xl">
                    <i class="fa-solid fa-bars"></i>
                </button>

            </div>

        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu"
            class="hidden lg:hidden border-t bg-white">

            <div class="container py-5 space-y-4">

                <a href="index.php" class="block hover:text-primary">
                    Home
                </a>

                <a href="about.php" class="block hover:text-primary">
                    About
                </a>

                <a href="mission.php" class="block hover:text-primary">
                    Mission
                </a>

                <a href="blog.php" class="block hover:text-primary">
                    Blogs
                </a>

                <a href="career.php" class="block hover:text-primary">
                    Career
                </a>

                <a href="contact.php" class="block hover:text-primary">
                    Contact
                </a>

            </div>

        </div>

    </header>

    <!-- Script -->
    <script>
        // Mobile Menu
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Preloader
        window.addEventListener('load', () => {
            document.getElementById('preloader').style.display = 'none';
        });
    </script>