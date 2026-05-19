<?php
include 'include/header.php';
?>
<!-- ========================= PAGE BANNER ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <!-- Background -->
    <img
        src="assets/img/about.webp"
        alt="About Banner"
        class="w-full h-full object-cover">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/55"></div>
    <!-- Bottom Gradient -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
    <!-- Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
        <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
            Home / About Us
        </p>
        <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">
            About Us
        </h1>
    </div>
</section>
<!-- ========================= ABOUT COMPANY ========================= -->
<section class="py-12 md:py-12 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Images -->
            <div class="relative reveal">
                <!-- Main Image -->
                <div class="overflow-hidden rounded-[32px] shadow-2xl">
                    <img src="assets/img/about.webp" alt="About" class="w-full h-[600px] object-cover hover:scale-105 transition duration-700">
                </div>
                <!-- Small Floating Image -->
                <div class="absolute -bottom-10 -right-5 hidden md:block">
                    <div class="overflow-hidden rounded-3xl border-[2px] border-white shadow-2xl">
                        <img src="assets/img/company.jpg" alt="" class="w-[240px] h-[260px] object-cover">
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div>
                <p class="section-tag reveal">
                    About Company
                </p>
                <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                    Building Better Animal Healthcare Solutions.
                </h2>
                <p class="mt-8 text-gray-600 leading-8 reveal">
                    Kantipur Pharmaceuticals Lab Limited (KPL) is a Nepal-based veterinary healthcare company established in 2073 B.S. dedicated to supporting healthier livestock and animal industries through innovative medicines and feed supplements.
                </p>
                <p class="mt-5 text-gray-600 leading-8 reveal">
                    We provide high-quality veterinary allopathic medicines, feed nutrition premixes, advanced phytochemical products and healthcare solutions for dairy cattle, poultry, swine, equines and pets.
                </p>
                <!-- <p class="mt-5 text-gray-600 leading-8 reveal">
                    With a strong technical team, professional marketing network and trusted distribution system, KPL continues to ensure quality, safety and innovation across Nepal.
                </p> -->
                <!-- Feature Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-10">
                    <!-- Card -->
                    <div class="modern-card p-6 reveal">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                            <img src="assets/img/icon/service.png" alt="" class="w-8 h-8">
                        </div>
                        <h4 class="mt-5 text-xl font-semibold text-primary">
                            Quality Assurance
                        </h4>
                        <p class="mt-3 text-sm leading-7 text-gray-500">
                            Safe, effective and premium veterinary healthcare products.
                        </p>
                    </div>
                    <!-- Card -->
                    <div class="modern-card p-6 reveal">
                        <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center">
                            <img src="assets/img/icon/networking.png" alt="" class="w-8 h-8">
                        </div>
                        <h4 class="mt-5 text-xl font-semibold text-primary">
                            Nationwide Network
                        </h4>
                        <p class="mt-3 text-sm leading-7 text-gray-500">
                            Trusted supply and distribution throughout Nepal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================= STRENGTH SECTION ========================= -->
<section class="py-12 md:py-12 bg-[#F7F8FA] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Heading -->
        <div class="max-w-3xl mx-auto text-center mb-12">
            <p class="section-tag justify-center reveal">
                Our Strength
            </p>
            <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
                Trusted Veterinary Excellence Across Nepal.
            </h2>
        </div>
        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <!-- Card -->
            <div class="modern-card p-8 text-center reveal">
                <div class="w-20 h-20 rounded-3xl bg-primary/10 flex items-center justify-center mx-auto">
                    <i class="fa-solid fa-shield-heart text-primary text-3xl"></i>
                </div>
                <h4 class="mt-6 text-2xl font-semibold text-primary">
                    Premium Quality
                </h4>
                <p class="mt-4 text-gray-500 leading-8">
                    High-standard products designed for safer and healthier livestock care.
                </p>
            </div>

            <!-- Card -->
            <div class="modern-card p-8 text-center reveal">
                <div class="w-20 h-20 rounded-3xl bg-secondary/10 flex items-center justify-center mx-auto">
                    <i class="fa-solid fa-flask text-secondary text-3xl"></i>
                </div>
                <h4 class="mt-6 text-2xl font-semibold text-primary">
                    Innovation
                </h4>
                <p class="mt-4 text-gray-500 leading-8">
                    Advanced veterinary healthcare solutions with modern research support.
                </p>
            </div>
            <!-- Card -->
            <div class="modern-card p-8 text-center reveal">
                <div class="w-20 h-20 rounded-3xl bg-primary/10 flex items-center justify-center mx-auto">
                    <i class="fa-solid fa-truck-fast text-primary text-3xl"></i>
                </div>
                <h4 class="mt-6 text-2xl font-semibold text-primary">
                    Fast Distribution
                </h4>
                <p class="mt-4 text-gray-500 leading-8">
                    Efficient product supply and dealer support throughout Nepal.
                </p>
            </div>
            <!-- Card -->
            <div class="modern-card p-8 text-center reveal">
                <div class="w-20 h-20 rounded-3xl bg-secondary/10 flex items-center justify-center mx-auto">
                    <i class="fa-solid fa-user-doctor text-secondary text-3xl"></i>
                </div>
                <h4 class="mt-6 text-2xl font-semibold text-primary">
                    Expert Team
                </h4>
                <p class="mt-4 text-gray-500 leading-8">
                    Experienced technical and professional veterinary specialists.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ========================= VISION SECTION ========================= -->
<section class="relative py-12 md:py-12 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <img src="assets/img/vision.jpg" alt="" class="w-full h-full object-cover">
    </div>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-primary/90"></div>
    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- Left -->
            <div>
                <p class="section-tag text-white reveal">
                    Our Vision
                </p>
                <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-white reveal">
                    Becoming A Globally Trusted Veterinary Healthcare Brand.
                </h2>
            </div>
            <!-- Right -->
            <div>
                <div class="modern-card bg-white/10 backdrop-blur-md border border-white/10 p-8 md:p-10 reveal">
                    <p class="text-white/80 leading-9 text-[16px]">
                        We aspire to become a nationally and internationally recognized veterinary healthcare company contributing to the growth of Nepal’s animal and poultry industries through innovation, quality and sustainable healthcare solutions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================= CTA SECTION ========================= -->
<section class="py-12 bg-white overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="section-tag justify-center reveal">
            Get In Touch
        </p>
        <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">
            Let’s Build Healthier Animal Communities Together.
        </h2>
        <p class="mt-7 text-gray-600 leading-8 max-w-3xl mx-auto reveal">
            Contact our team for veterinary healthcare solutions, product information and partnership opportunities across Nepal.
        </p>
        <!-- Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mt-10 reveal">
            <a href="contact.php" class="primary-btn">
                Contact Us
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="product-list.php" class="white-btn border border-gray-200">
                View Products
                <i class="fa-solid fa-box-open"></i>
            </a>
        </div>
    </div>
</section>
<?php
include 'include/footer.php';
?>