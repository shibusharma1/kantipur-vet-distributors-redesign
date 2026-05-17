<?php
include 'include/header.php';
?>
<!-- ========================= Banner Section ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <img
        src="assets/img/company.jpg"
        alt="About Banner"
        class="w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center px-4">
        <h3 class="text-white text-sm md:text-base font-medium tracking-wide">
            <a href="index.php" class="hover:text-yellow-400 transition">
                HOME
            </a>
            /
            ABOUT US
        </h3>

        <h1 class="text-white text-4xl md:text-6xl font-bold mt-3">
            About us
        </h1>
    </div>
</section>

<!-- ========================= Introduction Section ========================= -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Intro Card -->
        <div class="bg-gray-100 rounded-2xl p-8 md:p-14 text-center shadow-sm">
            <div class="flex flex-col items-center mb-6">
                <h3 class="text-[#d4a017] font-semibold text-lg border-b-2 border-[#d4a017] inline-block pb-1">
                    Founding Background
                </h3>

                <h2 class="text-3xl md:text-5xl font-bold text-[#0d3b66] mt-4">
                    Welcome to Kantipur Pharmaceuticals Lab Limited.
                </h2>
            </div>

            <p class="text-gray-600 leading-8 text-[16px]">
                Established in 2073 B.S., Kantipur Pharmaceuticals Lab Limited (KPL) is a Nepal-based company committed to redefining animal healthcare. As one of the country's leading veterinary pharmaceutical companies, we are driven by a mission to create a healthier world for animals through “Gold-Standard” solutions and “Need-Based Innovations”.
                KPL is driven by a singular purpose: “Caring and Curing Animal Health with passion and Quality”.
                At KPL, we are more than just a leader in veterinary pharmaceuticals—we are a dedicated partner in the health and well-being of animals.
            </p>
        </div>

        <!-- Features -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mt-16">

            <!-- Item -->
            <div class="text-center md:text-left hidden md:block md:border-r-2 md:border-[#EFEEF5]">
                <img src="assets/img/icon/service.png" class="w-[70px] h-[70px] mx-auto md:mx-0" alt="">

                <h4 class="mt-5 text-xl font-bold text-[#0d3b66]">
                    Uncompromising Quality
                </h4>

                <p class="text-gray-600 mt-2 leading-7">
                    Every product is designed to meet rigorous standards of efficacy, safety, and performance.
                </p>
            </div>

            <!-- Item -->
            <div class="text-center md:text-left hidden md:block md:border-r-2 md:border-[#EFEEF5]">
                <img src="assets/img/icon/customer.png" class="w-[70px] h-[70px] mx-auto md:mx-0" alt="">

                <h4 class="mt-5 text-xl font-bold text-[#0d3b66]">
                    Technical & Marketing Support
                </h4>

                <p class="text-gray-600 mt-2 leading-7">
                    Our specialized teams ensure optimal solutions and education for our partners.
                </p>
            </div>

            <!-- Item -->
            <div class="text-center md:text-left hidden md:block md:border-r-2 md:border-[#EFEEF5]">
                <img src="assets/img/icon/team.png" class="w-[70px] h-[70px] mx-auto md:mx-0" alt="">

                <h4 class="mt-5 text-xl font-bold text-[#0d3b66]">
                    Expert Team
                </h4>

                <p class="text-gray-600 mt-2 leading-7">
                    We take pride in our highly skilled professionals with deep experience in veterinary medicine.
                </p>
            </div>

            <!-- Item -->
            <div class="text-center md:text-left">
                <img src="assets/img/icon/networking.png" class="w-[70px] h-[70px] mx-auto md:mx-0" alt="">

                <h4 class="mt-5 text-xl font-bold text-[#0d3b66]">
                    Robust Distribution Network
                </h4>

                <p class="text-gray-600 mt-2 leading-7">
                    With a presence across Nepal, we deliver timely and reliable service.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ========================= Grid Content Section ========================= -->
<section class="pb-20">
    <div class="max-w-7xl mx-auto px-4 space-y-16">

        <!-- Row 1 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

            <!-- Text Box -->
            <div class="order-2 lg:order-1 bg-gray-100 rounded-2xl p-8 flex flex-col justify-center max-h-[380px]">
                <h4 class="text-2xl font-bold text-[#0d3b66] mb-4">
                    Future-Forward Vision
                </h4>

                <p class="text-gray-600 leading-7">
                    We are on a strategic path toward achieving internationally recognized certifications:
                </p>

                <ol class="list-decimal pl-6 mt-4 space-y-2 text-gray-600">
                    <li>ISO 9001 – Quality Management System (QMS)</li>
                    <li>ISO 14001 – Environmental Management System (EMS)</li>
                    <li>FAMI-QS – Feed Additive and Pre-Mixture Ingredients Quality System</li>
                    <li>WHO-GMP – Allopathic Division Certification</li>
                </ol>

                <p class="text-gray-600 mt-5 leading-7">
                    These milestones will further strengthen our commitment to global standards and sustainable growth.
                </p>
            </div>

            <!-- Image Box -->
            <div class="order-1 lg:order-2 overflow-hidden rounded-2xl group max-h-[380px]">
                <img
                    src="assets/img/commit.jpg"
                    alt=""
                    class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
            </div>

        </div>

        <!-- Row 2 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl group max-h-[380px]">
                <img
                    src="assets/img/blog2.webp"
                    alt=""
                    class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
            </div>

            <!-- Content -->
            <div class="bg-gray-100 rounded-2xl p-8 min-h-[380px] flex flex-col justify-center">
                <h4 class="text-2xl font-bold text-[#0d3b66] mb-4">
                    What Do We Do?
                </h4>

                <p class="text-gray-600 leading-7">
                    We are on a strategic path toward achieving internationally recognized certifications:
                </p>

                <ol class="list-decimal pl-6 mt-4 space-y-2 text-gray-600">
                    <li>ISO 9001 – Quality Management System (QMS)</li>
                    <li>ISO 14001 – Environmental Management System (EMS)</li>
                    <li>FAMI-QS – Feed Additive and Pre-Mixture Ingredients Quality System</li>
                    <li>WHO-GMP – Allopathic Division Certification</li>
                </ol>

                <p class="text-gray-600 mt-5 leading-7">
                    These milestones will further strengthen our commitment to global standards and sustainable growth.
                </p>
            </div>

        </div>

        <!-- Row 3 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

            <!-- Content -->
            <div class="order-2 lg:order-1 bg-gray-100 rounded-2xl p-8 max-h-[350px] flex flex-col justify-center">
                <h4 class="text-2xl font-bold text-[#0d3b66] mb-4">
                    Our Product Portfolio
                </h4>

                <p class="text-gray-600 leading-7">
                    We are on a strategic path toward achieving internationally recognized certifications:
                </p>

                <ol class="list-decimal pl-6 mt-4 space-y-2 text-gray-600">
                    <li>ISO 9001 – Quality Management System (QMS)</li>
                    <li>ISO 14001 – Environmental Management System (EMS)</li>
                    <li>FAMI-QS – Feed Additive and Pre-Mixture Ingredients Quality System</li>
                    <li>WHO-GMP – Allopathic Division Certification</li>
                </ol>

                <p class="text-gray-600 mt-5 leading-7">
                    These milestones will further strengthen our commitment to global standards and sustainable growth.
                </p>
            </div>

            <!-- Image -->
            <div class="order-1 lg:order-2 overflow-hidden rounded-2xl group max-h-[380px]">
                <img
                    src="assets/img/blog1.png"
                    alt=""
                    class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
            </div>

        </div>
        <!-- Row 4 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl group min-h-[380px]">
                <img
                    src="assets/img/vision.jpg"
                    alt=""
                    class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
            </div>

            <!-- Content -->
            <div class="bg-gray-100 rounded-2xl p-8 min-h-[380px] flex flex-col justify-center">
                <h4 class="text-2xl font-bold text-[#0d3b66] mb-4">
                    Commitment
                </h4>

                <p class="text-gray-600 leading-7">
                    With a heartfelt promise of “Caring and Curing Animal Health with Passion and Quality”, we continue to serve farmers, integrators, and veterinarians across Nepal.
                </p>

                <h4 class="text-2xl font-bold text-[#0d3b66] mt-8 mb-4">
                    Our Core Beliefs
                </h4>

                <p class="text-gray-600 leading-7">
                    We at KPL are united by a deep commitment to caring—for animals, for our customers, and for the communities we serve.
                </p>
            </div>

        </div>

    </div>
</section>
<?php
include 'include/footer.php';
?>