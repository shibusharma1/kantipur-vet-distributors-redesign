<?php
include 'include/header.php';
?>
<!-- ========================= Banner Section ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <img
        src="assets/img/commit/img4.jpg"
        alt="Product Banner"
        class="w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60 flex items-center justify-center text-center px-4">
        <div>
            <h1 class="text-white text-3xl md:text-6xl font-bold leading-tight">
                Clearcal-P-Oral
            </h1>
        </div>
    </div>
</section>

<!-- ========================= Product Detail Section ========================= -->
<section class="py-12 bg-white">

    <div class="max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- ========================= Product Image ========================= -->
            <div class="lg:col-span-1">

                <div class="bg-gray-100 rounded-2xl p-8 flex items-center justify-center shadow-md overflow-hidden group">

                    <img
                        src="assets/img/product/1.png"
                        alt="Product"
                        class="max-h-[600px] object-contain transition duration-700 group-hover:scale-110">

                </div>

            </div>

            <!-- ========================= Product Content ========================= -->
            <div class="lg:col-span-2">

                <!-- ========================= Tabs ========================= -->
                <!-- Tabs -->
                <div class="flex flex-wrap gap-2 border-b border-gray-300">

                    <button
                        class="tab-btn active-tab px-6 py-3 rounded-t-xl bg-green-600 text-white font-semibold uppercase tracking-wide border-b-0 transition-all duration-300"
                        data-tab="description">
                        Description
                    </button>

                    <button
                        class="tab-btn px-6 py-3 rounded-t-xl text-gray-700 font-semibold uppercase tracking-wide border-b-0 transition-all duration-300 hover:bg-gray-100"
                        data-tab="benefit">
                        Benefit/Purpose
                    </button>

                    <button
                        class="tab-btn px-6 py-3 rounded-t-xl text-gray-700 font-semibold uppercase tracking-wide border-b-0 transition-all duration-300 hover:bg-gray-100"
                        data-tab="other">
                        Other Info
                    </button>

                </div>
                <!-- ========================= Tab Content Wrapper ========================= -->
                <div class="border border-gray-300 p-4 md:p-6 bg-white">

                    <!-- ========================= Description ========================= -->
                    <div class="tab-content" id="description">

                        <h3 class="text-xl font-bold text-gray-600 mb-2">
                            CLEARCAL-P-ORAL
                        </h3>

                        <div class="">

                            <!-- Brand -->
                            <div class="flex flex-row items-center">
                                <h5 class="text-[#1f2f8a] font-bold uppercase mb-0">Brand Name:</h5>
                                <span class="text-gray-700 leading-8 ml-2">Clearcal-P-Oral</span>
                            </div>

                            <!-- Composition -->
                            <div>

                                <h5 class="text-[#1f2f8a] font-bold uppercase mb-0">
                                    Composition:
                                </h5>

                                <div class="text-gray-700 leading-7">

                                    <p>Calcium from inorganic source</p>
                                    <p>Calcium from organic source</p>
                                    <p>Manganese</p>
                                    <p>Phosphoric Acid</p>
                                    <!-- <p>Vitamin D3</p>
                                        <p>Sorbitol</p>
                                        <p>Purified Water</p>
                                        <p>Colorant</p> -->

                                </div>

                            </div>

                            <!-- Description -->
                            <div>

                                <h5 class="text-[#1f2f8a] font-bold uppercase mb-0">
                                    Description:
                                </h5>

                                <p class="text-gray-700 leading-8">
                                    Optimum Nutrition for Egg-Cellent Flock
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- ========================= Benefit/Purpose ========================= -->
                    <div class="tab-content hidden" id="benefit">

                        <div class="space-y-2">

                            <!-- Benefits -->
                            <div>

                                <h4 class="font-bold text-[#1f2f8a] mb-0">
                                    Benefits of Intake
                                </h4>

                                <ol class="list-decimal pl-6 text-gray-700 leading-7 mb-1">

                                    <li>For physical growth of chickens.</li>
                                    <li>For treatment of anemia and weak bones.</li>
                                    <li>Improves eggshell quality.</li>
                                    <li>Enhances feed conversion ratio.</li>
                                    <li>Increases egg and meat production.</li>

                                </ol>

                            </div>

                            <!-- Purpose -->
                            <div>

                                <h4 class="font-bold text-[#1f2f8a] mb-0">
                                    Purpose of Intake
                                </h4>

                                <ol class="list-decimal pl-6 text-gray-700 leading-7 mb-1">

                                    <li>Supports poultry growth and development.</li>
                                    <li>Provides calcium and mineral supplementation.</li>
                                    <li>Improves bone strength and eggshell quality.</li>
                                    <li>Maintains overall flock health.</li>
                                    <li>Enhances poultry productivity.</li>

                                </ol>

                            </div>

                        </div>

                    </div>

                    <!-- ========================= Other Info ========================= -->
                    <div class="tab-content hidden" id="other">

                        <div class="space-y-3 text-gray-700 leading-8">

                            <div>

                                <h4 class="font-bold text-[#1f2f8a] mb-1">
                                    Availability
                                </h4>

                                <p>
                                    500 ml, 1 liter, 2 liters, 5 liters.
                                </p>

                            </div>

                            <div>

                                <h3 class="font-bold text-[#1f2f8a] mb-1">
                                    Dosage
                                </h3>

                                <p>
                                    Use as directed by veterinarian or poultry expert.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

</section>

<!-- ========================= Similar Products Section ========================= -->
<section class="py-10 bg-gray-100">

    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-6">

            <h2 class="text-4xl font-bold text-[#0d3b66]">
                Similar Products
            </h2>

            <a href="product-list.php"
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

        <!-- Product Grid -->

        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">

            <!-- Product Card -->
            <a href="product-detail.php" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300">

                    <!-- Image Section -->
                    <div class="h-[220px] flex items-center justify-center p-4 bg-white">
                        <img
                            src="assets/img/product/1.png"
                            alt="Product"
                            class="max-h-full object-contain transition duration-300 group-hover:scale-105">
                    </div>

                    <!-- Bottom Label -->
                    <div class="bg-[#d6d2e6] text-center py-3">
                        <h3 class="text-sm font-semibold text-gray-800">
                            Vita-K
                        </h3>
                    </div>

                </div>
            </a>

            <a href="product-detail.php" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300">

                    <!-- Image Section -->
                    <div class="h-[220px] flex items-center justify-center p-4 bg-white">
                        <img
                            src="assets/img/product/1.png"
                            alt="Product"
                            class="max-h-full object-contain transition duration-300 group-hover:scale-105">
                    </div>

                    <!-- Bottom Label -->
                    <div class="bg-[#d6d2e6] text-center py-3">
                        <h3 class="text-sm font-semibold text-gray-800">
                            Vita-K
                        </h3>
                    </div>

                </div>
            </a>

            <a href="product-detail.php" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300">

                    <!-- Image Section -->
                    <div class="h-[220px] flex items-center justify-center p-4 bg-white">
                        <img
                            src="assets/img/product/1.png"
                            alt="Product"
                            class="max-h-full object-contain transition duration-300 group-hover:scale-105">
                    </div>

                    <!-- Bottom Label -->
                    <div class="bg-[#d6d2e6] text-center py-3">
                        <h3 class="text-sm font-semibold text-gray-800">
                            Vita-K
                        </h3>
                    </div>

                </div>
            </a>

            <a href="product-detail.php" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300">

                    <!-- Image Section -->
                    <div class="h-[220px] flex items-center justify-center p-4 bg-white">
                        <img
                            src="assets/img/product/1.png"
                            alt="Product"
                            class="max-h-full object-contain transition duration-300 group-hover:scale-105">
                    </div>

                    <!-- Bottom Label -->
                    <div class="bg-[#d6d2e6] text-center py-3">
                        <h3 class="text-sm font-semibold text-gray-800">
                            Vita-K
                        </h3>
                    </div>

                </div>
            </a>

            <a href="product-detail.php" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300">

                    <!-- Image Section -->
                    <div class="h-[220px] flex items-center justify-center p-4 bg-white">
                        <img
                            src="assets/img/product/1.png"
                            alt="Product"
                            class="max-h-full object-contain transition duration-300 group-hover:scale-105">
                    </div>

                    <!-- Bottom Label -->
                    <div class="bg-[#d6d2e6] text-center py-3">
                        <h3 class="text-sm font-semibold text-gray-800">
                            Vita-K
                        </h3>
                    </div>

                </div>
            </a>

            <a href="product-detail.php" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300">

                    <!-- Image Section -->
                    <div class="h-[220px] flex items-center justify-center p-4 bg-white">
                        <img
                            src="assets/img/product/1.png"
                            alt="Product"
                            class="max-h-full object-contain transition duration-300 group-hover:scale-105">
                    </div>

                    <!-- Bottom Label -->
                    <div class="bg-[#d6d2e6] text-center py-3">
                        <h3 class="text-sm font-semibold text-gray-800">
                            Vita-K
                        </h3>
                    </div>

                </div>
            </a>

            <a href="product-detail.php" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300">

                    <!-- Image Section -->
                    <div class="h-[220px] flex items-center justify-center p-4 bg-white">
                        <img
                            src="assets/img/product/1.png"
                            alt="Product"
                            class="max-h-full object-contain transition duration-300 group-hover:scale-105">
                    </div>

                    <!-- Bottom Label -->
                    <div class="bg-[#d6d2e6] text-center py-3">
                        <h3 class="text-sm font-semibold text-gray-800">
                            Vita-K
                        </h3>
                    </div>

                </div>
            </a>

            <a href="product-detail.php" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300">

                    <!-- Image Section -->
                    <div class="h-[220px] flex items-center justify-center p-4 bg-white">
                        <img
                            src="assets/img/product/1.png"
                            alt="Product"
                            class="max-h-full object-contain transition duration-300 group-hover:scale-105">
                    </div>

                    <!-- Bottom Label -->
                    <div class="bg-[#d6d2e6] text-center py-3">
                        <h3 class="text-sm font-semibold text-gray-800">
                            Vita-K
                        </h3>
                    </div>

                </div>
            </a>

        </div>

    </div>

</section>

<!-- ========================= Tabs Script ========================= -->
<script>
    const tabBtns = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    tabBtns.forEach(btn => {
        btn.addEventListener("click", () => {

            tabBtns.forEach(button => {
                button.classList.remove("bg-green-600", "text-white", "border", "border-gray-300", "border-b-0");
                button.classList.add("text-gray-700", "hover:bg-gray-100");
            });

            btn.classList.remove("text-gray-700", "hover:bg-gray-100");
            btn.classList.add("bg-green-600", "text-white", "border", "border-gray-300", "border-b-0");

            tabContents.forEach(content => content.classList.add("hidden"));
            document.getElementById(btn.dataset.tab).classList.remove("hidden");
        });
    });
</script>
<?php
include 'include/footer.php';
?>