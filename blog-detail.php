<?php
include 'include/header.php';
?>
<!-- ========================= PAGE BANNER ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <!-- Background -->
    <img
        src="assets/img/vision.jpg"
        alt="Blog Detail"
        class="w-full h-full object-cover">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/55"></div>
    <!-- Bottom Gradient -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
    <!-- Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
        <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
            Home / Blog Details
        </p>
        <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">
            Blog Details
        </h1>
    </div>
</section>
<!-- ========================= BLOG DETAIL SECTION ========================= -->
<section class="py-12 md:py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- ========================= MAIN CONTENT ========================= -->
            <div class="lg:col-span-8">
                <!-- Featured Image -->
                <div class="overflow-hidden rounded-[32px] shadow-xl reveal">
                    <img src="assets/img/blog1.png" alt="Blog" class="w-full h-[480px] object-cover hover:scale-105 transition duration-700">
                </div>
                <!-- Article -->
                <article class="mt-8">
                    <!-- Meta -->
                    <div class="flex flex-wrap items-center gap-6 text-sm uppercase tracking-wide text-gray-400 reveal">
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-user text-secondary"></i>
                            Admin Name
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-secondary"></i>
                            27 August, 2025
                        </span>
                    </div>
                    <!-- Title -->
                    <h2 class="mt-6 text-3xl md:text-4xl font-bold leading-tight text-primary reveal">
                        Behavior And Training Animals For Better Healthcare & Productivity
                    </h2>
                    <!-- Intro -->
                    <p class="mt-8 text-gray-600 leading-9 text-[16px] reveal">
                        Proper animal behavior management and training play an essential role in maintaining healthier livestock and improving long-term productivity. Understanding animal care practices allows farmers and healthcare providers to ensure safer environments and better welfare systems.
                    </p>
                    <p class="mt-6 text-gray-600 leading-9 text-[16px] reveal">
                        Veterinary healthcare is continuously evolving with innovative solutions, advanced medicines and improved nutritional support systems. These developments contribute significantly to sustainable livestock management and disease prevention across animal industries.
                    </p>
                    <!-- Quote -->
                    <div class="mt-8 bg-[#F7F8FA] border-l-4 border-secondary rounded-r-[28px] p-8 md:p-10 reveal">
                        <p class="text-2xl leading-relaxed font-medium text-primary italic">
                            “Healthy animals are the foundation of stronger agricultural and livestock communities.”
                        </p>
                    </div>
                    <!-- Section -->
                    <h3 class="mt-8 text-3xl font-bold text-primary reveal">
                        Importance Of Veterinary Innovation
                    </h3>
                    <p class="mt-6 text-gray-600 leading-9 text-[16px] reveal">
                        Modern veterinary innovation provides safer medicines, nutritional supplements and preventive healthcare solutions for livestock, poultry and companion animals. These healthcare systems improve immunity, reduce disease risks and increase productivity in farming sectors.
                    </p>
                    <p class="mt-6 text-gray-600 leading-9 text-[16px] reveal">
                        Through research, innovation and technical expertise, veterinary healthcare providers continue to strengthen animal welfare standards while supporting healthier and more sustainable livestock industries worldwide.
                    </p>
                    <!-- Image Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-14">
                        <!-- Image -->
                        <div class="overflow-hidden rounded-[28px] reveal group">
                            <img
                                src="assets/img/blog2.webp"
                                alt=""
                                class="w-full h-[280px] object-cover group-hover:scale-105 transition duration-700">
                        </div>
                        <!-- Image -->
                        <div class="overflow-hidden rounded-[28px] reveal group">
                            <img
                                src="assets/img/blog3.jpeg"
                                alt=""
                                class="w-full h-[280px] object-cover group-hover:scale-105 transition duration-700">
                        </div>
                    </div>
                    <!-- Another Section -->
                    <h3 class="mt-14 text-3xl font-bold text-primary reveal">
                        Sustainable Animal Healthcare Solutions
                    </h3>
                    <p class="mt-6 text-gray-600 leading-9 text-[16px] reveal">
                        Sustainable veterinary healthcare solutions focus on long-term animal wellness, efficient nutritional support and responsible healthcare management. These approaches contribute to stronger livestock industries while promoting healthier ecosystems and farming communities.
                    </p>
                    <p class="mt-6 text-gray-600 leading-9 text-[16px] reveal">
                        Companies like Kantipur Pharmaceuticals Lab Limited continue to support innovation, product quality and nationwide veterinary healthcare accessibility through dedicated research and professional expertise.
                    </p>
                </article>
            </div>
            <!-- ========================= SIDEBAR ========================= -->
            <aside class="lg:col-span-4">
                <div class="sticky top-28 space-y-8">
                    <!-- Search -->
                    <div class="sidebar-card p-6 reveal">
                        <h3 class="text-2xl font-bold text-primary">
                            Search
                        </h3>
                        <div class="relative mt-6">
                            <input
                                type="text"
                                placeholder="Search blog..."
                                class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 pr-14 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                            <button
                                class="absolute top-1/2 right-5 -translate-y-1/2 text-primary">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Categories -->
                    <div class="sidebar-card overflow-hidden reveal">
                        <div class="px-7 pt-7 pb-5 border-b border-gray-100">
                            <h3 class="text-2xl font-bold text-primary">
                                Categories
                            </h3>
                        </div>
                        <!-- Links -->
                        <div>
                            <a
                                href="#"
                                class="sidebar-link">
                                <span>Animal Healthcare</span>
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                            <a
                                href="#"
                                class="sidebar-link">
                                <span>Veterinary Medicines</span>
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                            <a
                                href="#"
                                class="sidebar-link">
                                <span>Feed Supplements</span>
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                            <a
                                href="#"
                                class="sidebar-link">
                                <span>Poultry Care</span>
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Recent Posts -->
                    <div class="sidebar-card p-7 reveal">
                        <h3 class="text-2xl font-bold text-primary">
                            Recent Posts
                        </h3>
                        <!-- Posts -->
                        <div class="space-y-6 mt-8">
                            <!-- Item -->
                            <a
                                href="blog-detail.php"
                                class="flex gap-4 group">
                                <div class="overflow-hidden rounded-2xl flex-shrink-0">
                                    <img
                                        src="assets/img/blog2.webp"
                                        alt=""
                                        class="w-[100px] h-[90px] object-cover group-hover:scale-105 transition duration-500">
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400 uppercase tracking-wide">
                                        27 August, 2025
                                    </p>
                                    <h4 class="mt-2 text-[16px] leading-7 font-semibold text-primary group-hover:text-secondary transition duration-300 two-line">
                                        Advancing Animal Health Through Innovation
                                    </h4>
                                </div>
                            </a>
                            <!-- Item -->
                            <a
                                href="blog-detail.php"
                                class="flex gap-4 group">
                                <div class="overflow-hidden rounded-2xl flex-shrink-0">
                                    <img
                                        src="assets/img/blog3.jpeg"
                                        alt=""
                                        class="w-[100px] h-[90px] object-cover group-hover:scale-105 transition duration-500">
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400 uppercase tracking-wide">
                                        27 August, 2025
                                    </p>
                                    <h4 class="mt-2 text-[16px] leading-7 font-semibold text-primary group-hover:text-secondary transition duration-300 two-line">
                                        Safe & Effective Livestock Solutions
                                    </h4>
                                </div>
                            </a>
                            <!-- Item -->
                            <a
                                href="blog-detail.php"
                                class="flex gap-4 group">
                                <div class="overflow-hidden rounded-2xl flex-shrink-0">
                                    <img
                                        src="assets/img/blog4.jpeg"
                                        alt=""
                                        class="w-[100px] h-[90px] object-cover group-hover:scale-105 transition duration-500">
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400 uppercase tracking-wide">
                                        27 August, 2025
                                    </p>
                                    <h4 class="mt-2 text-[16px] leading-7 font-semibold text-primary group-hover:text-secondary transition duration-300 two-line">
                                        Trusted Veterinary Products For Every Sector
                                    </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- CTA -->
                    <div class="relative overflow-hidden rounded-[32px] reveal">
                        <!-- Background -->
                        <img
                            src="assets/img/vision.jpg"
                            alt=""
                            class="absolute inset-0 w-full h-full object-cover">
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-primary/90"></div>
                        <!-- Content -->
                        <div class="relative z-10 p-10 text-center">
                            <h3 class="text-3xl font-bold text-white leading-tight">
                                Need Veterinary Healthcare Solutions?
                            </h3>
                            <p class="mt-5 text-white/75 leading-8">
                                Contact our expert team for product information and healthcare support.
                            </p>
                            <!-- Button -->
                            <a
                                href="contact.php"
                                class="white-btn mt-8">
                                Contact Us
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<?php
include 'include/footer.php';
?>