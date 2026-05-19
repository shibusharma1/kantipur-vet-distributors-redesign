<?php
include 'include/header.php';
?>

<!-- ========================= HERO SECTION ========================= -->
<section class="homepage-banner relative overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <img src="assets/img/banner.jpg" alt="Banner" class="w-full h-full object-cover">
    </div>

    <!-- Overlay -->
    <div class="banner-overlay"></div>
    <!-- Bottom Fade -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-32 pb-12">
        <div class="max-w-3xl">
            <p class="section-tag text-white reveal">
                Caring & Curing Animal Health
            </p>

            <h1 class="mt-6 text-white text-4xl md:text-6xl xl:text-7xl font-bold leading-[1.1] reveal">
                Gold Standard Veterinary Solutions For Better Animal Healthcare.
            </h1>

            <p class="mt-7 text-white/80 text-[16px] md:text-lg leading-8 max-w-2xl reveal">
                Kantipur Pharmaceuticals Lab Limited is dedicated to creating healthier lives for animals through innovative veterinary medicines, feed supplements and nutritional healthcare solutions.
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap items-center gap-4 mt-10 reveal">
                <a href="about.php" class="primary-btn">
                    Explore More
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="contact.php" class="white-btn">
                    Contact Us
                    <i class="fa-solid fa-phone"></i>
                </a>

            </div>
        </div>
    </div>
</section>

<!-- ========================= ABOUT SECTION ========================= -->
<section class="py-12 md:py-12 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
            <!-- Image -->
            <div class="relative reveal">
                <div class="overflow-hidden rounded-[32px] shadow-2xl">
                    <img src="assets/img/company.jpg" alt="About" class="w-full h-[600px] object-cover hover:scale-105 transition duration-700">
                </div>

                <!-- Floating Card -->
                <div class="absolute -bottom-10 -right-4 bg-white rounded-3xl shadow-2xl px-8 py-6 border border-gray-100 hidden md:block">
                    <h4 class="text-4xl font-bold text-primary">
                        10+
                    </h4>

                    <p class="mt-1 text-gray-500 text-sm">
                        Years of Excellence
                    </p>

                </div>
            </div>

            <!-- Content -->
            <div>
                <p class="section-tag reveal">
                    About Us
                </p>

                <h2 class="mt-4 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                    Welcome To Kantipur Pharmaceuticals Lab Limited.
                </h2>

                <p class="mt-4 text-gray-600 leading-8 reveal">
                    Established in 2073 B.S., Kantipur Pharmaceuticals Lab Limited (KPL) is a Nepal-based veterinary pharmaceutical company committed to delivering innovative and reliable healthcare solutions for animals.
                </p>

                <!-- <p class="mt-5 text-gray-600 leading-8 reveal">
                    We continuously focus on high-quality feed supplements, nutritional products, allopathic medicines and advanced veterinary solutions to support healthier and more productive livestock industries.
                </p> -->

                <!-- Features -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-8">
                    <div class="modern-card p-6 reveal">
                        <img src="assets/img/icon/service.png" alt="" class="w-14 h-14">
                        <h4 class="mt-4 text-xl font-semibold text-primary">
                            Premium Quality
                        </h4>

                        <p class="mt-3 text-sm leading-7 text-gray-500">
                            Every product meets high standards of safety, efficacy and performance.
                        </p>
                    </div>

                    <div class="modern-card p-6 reveal">
                        <img src="assets/img/icon/networking.png" alt="" class="w-14 h-14">
                        <h4 class="mt-4 text-xl font-semibold text-primary">
                            Distribution Network
                        </h4>

                        <p class="mt-3 text-sm leading-7 text-gray-500">
                            Reliable product delivery and service support across Nepal.
                        </p>
                    </div>
                </div>

                <!-- Button -->
                <div class="mt-5 reveal">
                    <a href="about.php" class="primary-btn">
                        Learn More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================= PRODUCTS SECTION ========================= -->
<section class="py-12 md:py-12 bg-[#F7F8FA] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-8">
            <div>

                <p class="section-tag reveal">
                    Our Products
                </p>

                <h2 class="mt-4 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                    Veterinary Healthcare Solutions
                </h2>
            </div>

            <div class="reveal">
                <a href="product-list.php" class="primary-btn">
                    View All Products
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Product -->
            <a href="product-detail.php" class="product-card reveal group">
                <div class="product-card-image">
                    <img src="assets/img/product/1.png" alt="Product">
                </div>

                <div class="product-card-content">
                    <h3 class="text-sm md:text-base font-semibold text-primary">
                        Vita-K
                    </h3>
                </div>
            </a>

            <!-- Product -->
            <a href="product-detail.php" class="product-card reveal group">
                <div class="product-card-image">
                    <img src="assets/img/product/1.png" alt="Product">
                </div>

                <div class="product-card-content">
                    <h3 class="text-sm md:text-base font-semibold text-primary">
                        Clearcal-P-Oral
                    </h3>
                </div>
            </a>

            <!-- Product -->
            <a href="product-detail.php" class="product-card reveal group">
                <div class="product-card-image">
                    <img src="assets/img/product/1.png" alt="Product">
                </div>

                <div class="product-card-content">
                    <h3 class="text-sm md:text-base font-semibold text-primary">
                        Poultry Care
                    </h3>
                </div>
            </a>

            <!-- Product -->
            <a href="product-detail.php" class="product-card reveal group">
                <div class="product-card-image">
                    <img src="assets/img/product/1.png" alt="Product">
                </div>

                <div class="product-card-content">
                    <h3 class="text-sm md:text-base font-semibold text-primary">
                        Animal Supplement
                    </h3>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ========================= WHY CHOOSE SECTION ========================= -->
<section class="py-12 md:py-12 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div>
                <p class="section-tag reveal">
                    Why Choose Us
                </p>

                <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                    Committed To Quality & Innovation.
                </h2>

                <p class="mt-7 text-gray-600 leading-8 reveal">
                    With a strong focus on innovation, product quality and technical expertise, KPL continues to deliver trusted veterinary healthcare solutions throughout Nepal.
                </p>

                <!-- Timeline -->
                <div class="mt-10 space-y-5">
                    <div class="modern-card p-5 flex items-start gap-5 reveal">
                        <div class="w-14 h-14 rounded-2xl bg-primary text-white flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-shield-heart"></i>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold text-primary">
                                Trusted Quality Products
                            </h4>
                            <p class="mt-2 text-sm leading-7 text-gray-500">
                                Safe, effective and high-standard veterinary medicines.
                            </p>
                        </div>
                    </div>

                    <div class="modern-card p-5 flex items-start gap-5 reveal">
                        <div class="w-14 h-14 rounded-2xl bg-secondary text-white flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-flask"></i>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold text-primary">
                                Research & Innovation
                            </h4>

                            <p class="mt-2 text-sm leading-7 text-gray-500">
                                Innovative healthcare solutions tailored for modern animal care.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="reveal">
                <div class="overflow-hidden rounded-[32px] shadow-2xl">
                    <img
                        src="assets/img/vision.jpg"
                        alt="Vision"
                        class="w-full h-[600px] object-cover hover:scale-105 transition duration-700">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================= BLOG SECTION ========================= -->
<section class="py-12 md:py-12 bg-[#F7F8FA] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-8">
            <div>
                <p class="section-tag reveal">
                    Latest Blogs
                </p>
                <h2 class="mt-4 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                    News & Insights
                </h2>
            </div>

            <div class="reveal">
                <a href="blog.php" class="primary-btn">
                    View All Blogs
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            <!-- Blog -->
            <div class="blog-card reveal group">
                <a href="blog-detail.php" class="blog-card-image block">
                    <img src="assets/img/blog1.png" alt="Blog">
                </a>

                <div class="mt-5">
                    <!-- Meta -->
                    <div class="flex items-center gap-5 text-sm text-gray-400 uppercase tracking-wide">
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-secondary"></i>
                            27 August, 2025
                        </span>
                    </div>

                    <!-- Title -->
                    <a href="blog-detail.php">
                        <h3 class="mt-4 text-2xl font-bold text-primary leading-snug hover:text-secondary transition duration-300 two-line">
                            Safe & Effective Solutions For Livestock Care
                        </h3>
                    </a>

                    <!-- Text -->
                    <p class="mt-4 text-gray-600 leading-8 three-line">
                        Veterinary healthcare solutions play a vital role in maintaining healthy livestock, improving productivity and ensuring animal welfare.
                    </p>

                    <!-- Button -->
                    <a href="blog-detail.php" class="inline-flex items-center gap-3 mt-6 text-secondary font-semibold hover:gap-4 transition-all duration-300">
                        Read More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Blog -->
            <div class="blog-card reveal group">
                <a href="blog-detail.php" class="blog-card-image block">
                    <img src="assets/img/blog2.webp" alt="Blog">
                </a>

                <div class="mt-5">
                    <div class="flex items-center gap-5 text-sm text-gray-400 uppercase tracking-wide">
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-secondary"></i>
                            27 August, 2025
                        </span>
                    </div>

                    <a href="blog-detail.php">
                        <h3 class="mt-4 text-2xl font-bold text-primary leading-snug hover:text-secondary transition duration-300 two-line">
                            Advancing Animal Health Through Innovation
                        </h3>
                    </a>

                    <p class="mt-4 text-gray-600 leading-8 three-line">
                        Modern veterinary innovations are transforming the future of livestock healthcare and nutrition industries.
                    </p>

                    <a href="blog-detail.php" class="inline-flex items-center gap-3 mt-6 text-secondary font-semibold hover:gap-4 transition-all duration-300">
                        Read More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Blog -->
            <div class="blog-card reveal group">
                <a href="blog-detail.php" class="blog-card-image block">
                    <img src="assets/img/blog3.jpeg" alt="Blog">
                </a>

                <div class="mt-5">
                    <div class="flex items-center gap-5 text-sm text-gray-400 uppercase tracking-wide">
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-secondary"></i>
                            27 August, 2025
                        </span>
                    </div>

                    <a href="blog-detail.php">
                        <h3 class="mt-4 text-2xl font-bold text-primary leading-snug hover:text-secondary transition duration-300 two-line">
                            Trusted Veterinary Medicines For Every Species
                        </h3>
                    </a>

                    <p class="mt-4 text-gray-600 leading-8 three-line">
                        Reliable healthcare products ensure stronger immunity and healthier growth across animal sectors.
                    </p>

                    <a href="blog-detail.php" class="inline-flex items-center gap-3 mt-6 text-secondary font-semibold hover:gap-4 transition-all duration-300">
                        Read More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'include/footer.php';
?>
