<?php
include 'include/header.php';
?>
<!-- ========================= Banner Section ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <img 
        src="assets/img/commit/img4.jpg"
        alt="Product Banner"
        class="w-full h-full object-cover"
    >

    <div class="absolute inset-0 bg-black/60 flex items-center justify-center text-center px-4">
        <div>
            <h1 class="text-white text-3xl md:text-6xl font-bold leading-tight">
                Clearcal-P-Oral
            </h1>
        </div>
    </div>
</section>

<!-- ========================= Product Detail Section ========================= -->
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <!-- ========================= Product Image ========================= -->
            <div class="lg:col-span-1">

                <div class="bg-gray-100 rounded-3xl p-8 flex items-center justify-center shadow-md overflow-hidden group">

                    <img 
                        src="assets/img/product/1.png"
                        alt="Product"
                        class="max-h-[500px] object-contain transition duration-700 group-hover:scale-110"
                    >

                </div>

            </div>

            <!-- ========================= Product Content ========================= -->
            <div class="lg:col-span-2">

                <!-- Tabs -->
                <div class="flex flex-wrap gap-3 mb-8">

                    <button 
                        class="tab-btn active-tab px-6 py-3 rounded-full bg-[#0d3b66] text-white font-semibold transition"
                        data-tab="description"
                    >
                        DESCRIPTION
                    </button>

                    <button 
                        class="tab-btn px-6 py-3 rounded-full bg-gray-200 hover:bg-[#0d3b66] hover:text-white font-semibold transition"
                        data-tab="benefit"
                    >
                        BENEFIT/PURPOSE
                    </button>

                    <button 
                        class="tab-btn px-6 py-3 rounded-full bg-gray-200 hover:bg-[#0d3b66] hover:text-white font-semibold transition"
                        data-tab="other"
                    >
                        OTHER INFO
                    </button>

                </div>

                <!-- ========================= Tab Content ========================= -->
                <div class="bg-gray-100 rounded-3xl p-8 shadow-sm">

                    <!-- Description -->
                    <div class="tab-content" id="description">

                        <h3 class="text-3xl font-bold text-[#0d3b66] mb-6">
                            KP Tylo-WS Powder
                        </h3>

                        <div class="space-y-6 text-gray-700 leading-8">

                            <div>
                                <span class="font-bold text-[#0d3b66]">
                                    Brand Name:
                                </span>

                                <span class="ml-2">
                                    Tylo-WS
                                </span>
                            </div>

                            <div>
                                <span class="font-bold text-[#0d3b66]">
                                    COMPOSITION:
                                </span>

                                <p class="mt-2">
                                    Each gram contains:
                                    <br>
                                    Tylosin Tartrate IP..........................................1000 mg
                                </p>
                            </div>

                            <div>

                                <span class="font-bold text-[#0d3b66] uppercase">
                                    Description:
                                </span>

                                <p class="mt-3 text-justify">
                                    Tylosin Tartrate is a macrolide antibiotic that exerts its bacteriostatic effect by binding to the 50S ribosomal subunit of susceptible bacteria and mycoplasma. This binding inhibits the translocation step of protein synthesis by preventing the transfer of peptidyl-tRNA from the ribosomal A-site to the P-site.
                                </p>

                                <p class="mt-4 text-justify">
                                    By disrupting protein synthesis, Tylosin tartrate suppresses bacterial and mycoplasmal growth, making it highly effective against a range of pathogens. KP Tylo-WS Powder is indicated for the treatment of various bacterial infections.
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- Benefit -->
                    <div class="tab-content hidden" id="benefit">

                        <div class="space-y-10">

                            <!-- Benefits -->
                            <div>

                                <h3 class="text-2xl font-bold text-[#0d3b66] mb-5">
                                    Benefits of Intake
                                </h3>

                                <ol class="list-decimal pl-6 space-y-3 text-gray-700 leading-7">

                                    <li>For physical growth of chickens.</li>
                                    <li>For the treatment of Anemia, Rickets, weak bones in chickens.</li>
                                    <li>Solves the problem of chicken eggshells turning.</li>
                                    <li>Improve feed conversion ratio in chickens.</li>
                                    <li>Increment in production of egg and meat.</li>

                                </ol>

                            </div>

                            <!-- Purpose -->
                            <div>

                                <h3 class="text-2xl font-bold text-[#0d3b66] mb-5">
                                    Purpose of Intake
                                </h3>

                                <ol class="list-decimal pl-6 space-y-3 text-gray-700 leading-7">

                                    <li>For physical growth of chickens.</li>
                                    <li>For the treatment of Anemia, Rickets, weak bones in chickens.</li>
                                    <li>Solves the problem of chicken eggshells turning.</li>
                                    <li>Improve feed conversion ratio in chickens.</li>
                                    <li>Increment in production of egg and meat.</li>

                                </ol>

                            </div>

                        </div>

                    </div>

                    <!-- Other Info -->
                    <div class="tab-content hidden" id="other">

                        <div class="space-y-8 text-gray-700 leading-8">

                            <div>

                                <h3 class="text-2xl font-bold text-[#0d3b66] mb-4">
                                    Availability
                                </h3>

                                <p>
                                    500 ml, 1 liter, 2 liters, 5 liters.
                                    <br>
                                    Glycal Plus also available with added Vitamins and Minerals.
                                </p>

                            </div>

                            <div>

                                <h3 class="text-2xl font-bold text-[#0d3b66] mb-4">
                                    Dosage
                                </h3>

                                <p>
                                    Cow, Buffalo: 100 ml/day
                                    <br>
                                    Sheep, Goat: 20 ml/day
                                    <br>
                                    Or as per the recommendation of the Veterinarian.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================= Similar Products Section ========================= -->
<section class="py-20 bg-gray-100">

    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12">

            <h2 class="text-4xl font-bold text-[#0d3b66]">
                Similar Products
            </h2>

            <a 
                href="product-list.php"
                class="inline-flex items-center justify-center gap-3 bg-[#0d3b66] hover:bg-yellow-500 text-white px-8 py-4 rounded-full transition duration-300"
            >
                <span class="font-medium tracking-wide">
                    EXPLORE MORE
                </span>

                <i class="fa-solid fa-paw"></i>
            </a>

        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">

            <!-- Product Card -->
            <div class="group">

                <a href="product-detail.php">

                    <div class="bg-white rounded-3xl p-6 shadow-md overflow-hidden">

                        <div class="overflow-hidden rounded-2xl">

                            <img 
                                src="assets/img/product/2.png"
                                alt=""
                                class="w-full h-[260px] object-contain transition duration-700 group-hover:scale-110"
                            >

                        </div>

                    </div>

                </a>

                <div class="mt-5">

                    <span class="text-sm uppercase tracking-wide text-[var(--color-secondary)] font-semibold">
                        Brand Name
                    </span>

                    <a href="product-detail.php">

                        <h3 class="text-2xl font-bold text-[#0d3b66] mt-2 hover:text-[var(--color-secondary)] transition">
                            Product Name
                        </h3>

                    </a>

                </div>

            </div>

            <!-- Product Card -->
            <div class="group">

                <a href="product-detail.php">

                    <div class="bg-white rounded-3xl p-6 shadow-md overflow-hidden">

                        <div class="overflow-hidden rounded-2xl">

                            <img 
                                src="assets/img/product/3.png"
                                alt=""
                                class="w-full h-[260px] object-contain transition duration-700 group-hover:scale-110"
                            >

                        </div>

                    </div>

                </a>

                <div class="mt-5">

                    <span class="text-sm uppercase tracking-wide text-[var(--color-secondary)] font-semibold">
                        Brand Name
                    </span>

                    <a href="product-detail.php">

                        <h3 class="text-2xl font-bold text-[#0d3b66] mt-2 hover:text-[var(--color-secondary)] transition">
                            Product Name
                        </h3>

                    </a>

                </div>

            </div>

            <!-- Product Card -->
            <div class="group">

                <a href="product-detail.php">

                    <div class="bg-white rounded-3xl p-6 shadow-md overflow-hidden">

                        <div class="overflow-hidden rounded-2xl">

                            <img 
                                src="assets/img/product/4.png"
                                alt=""
                                class="w-full h-[260px] object-contain transition duration-700 group-hover:scale-110"
                            >

                        </div>

                    </div>

                </a>

                <div class="mt-5">

                    <span class="text-sm uppercase tracking-wide text-[var(--color-secondary)] font-semibold">
                        Brand Name
                    </span>

                    <a href="product-detail.php">

                        <h3 class="text-2xl font-bold text-[#0d3b66] mt-2 hover:text-[var(--color-secondary)] transition">
                            Product Name
                        </h3>

                    </a>

                </div>

            </div>

            <!-- Product Card -->
            <div class="group">

                <a href="product-detail.php">

                    <div class="bg-white rounded-3xl p-6 shadow-md overflow-hidden">

                        <div class="overflow-hidden rounded-2xl">

                            <img 
                                src="assets/img/product/5.png"
                                alt=""
                                class="w-full h-[260px] object-contain transition duration-700 group-hover:scale-110"
                            >

                        </div>

                    </div>

                </a>

                <div class="mt-5">

                    <span class="text-sm uppercase tracking-wide text-[var(--color-secondary)] font-semibold">
                        Brand Name
                    </span>

                    <a href="product-detail.php">

                        <h3 class="text-2xl font-bold text-[#0d3b66] mt-2 hover:text-[var(--color-secondary)] transition">
                            Product Name
                        </h3>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================= Tabs Script ========================= -->
<script>
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {

            // Remove active classes
            tabBtns.forEach(b => {
                b.classList.remove('bg-[#0d3b66]', 'text-white');
                b.classList.add('bg-gray-200');
            });

            // Active button
            btn.classList.remove('bg-gray-200');
            btn.classList.add('bg-[#0d3b66]', 'text-white');

            // Hide contents
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected
            document.getElementById(btn.dataset.tab).classList.remove('hidden');

        });
    });
</script>
<?php
include 'include/header.php';
?>