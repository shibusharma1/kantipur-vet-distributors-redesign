<?php
include 'include/header.php';
?>
<!-- ========================= Banner Section ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <img
        src="assets/img/commit/img4.jpg"
        alt="Blog Detail Banner"
        class="w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60 flex items-center justify-center text-center px-4">
        <div>
            <h1 class="text-white text-3xl md:text-6xl font-bold leading-tight max-w-4xl mx-auto">
                Safe & Effective Solutions for Livestock Care
            </h1>
        </div>
    </div>
</section>

<!-- ========================= Blog Detail Section ========================= -->
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- ========================= Main Content ========================= -->
            <div class="lg:col-span-2">

                <!-- Featured Image -->
                <div class="overflow-hidden rounded-2xl group shadow-lg">

                    <a href="assets/img/blog1.png">

                        <img
                            src="assets/img/blog1.png"
                            alt=""
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                    </a>

                </div>

                <!-- Meta -->
                <div class="flex flex-wrap items-center gap-6 mt-6 text-sm uppercase text-gray-500">

                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-user text-[var(--color-secondary)]"></i>
                        Admin Name
                    </div>

                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-calendar text-[var(--color-secondary)]"></i>
                        27 August, 2025
                    </div>

                </div>

                <hr class="my-6 border-gray-200">

                <!-- Content -->
                <div class="space-y-8 text-gray-600 leading-8 text-justify">

                    <p>
                        The health of livestock plays a vital role in ensuring food security, farm productivity, and the overall well-being of rural communities. Farmers and veterinarians rely on safe and effective pharmaceutical solutions to protect animals from diseases, improve growth, and maintain high standards of animal welfare.
                    </p>

                    <div>

                        <h3 class="text-3xl font-bold text-[#0d3b66] mb-4">
                            Why Safe Solutions Matter
                        </h3>

                        <p>
                            Using safe veterinary medicines is essential not just for the animals but also for the people who consume animal products. High-quality pharmaceuticals reduce the risk of residues in milk, meat, and eggs, ensuring they remain safe for human consumption.
                        </p>

                        <p class="mt-4">
                            By following proper guidelines, farmers can treat their animals confidently without compromising public health. Using safe veterinary medicines is essential not just for the animals but also for the people who consume animal products.
                        </p>

                    </div>

                    <div>

                        <h3 class="text-3xl font-bold text-[#0d3b66] mb-4">
                            Effective Care for Healthy Herds
                        </h3>

                        <p>
                            Using safe veterinary medicines is essential not just for the animals but also for the people who consume animal products. High-quality pharmaceuticals reduce the risk of residues in milk, meat, and eggs, ensuring they remain safe for human consumption.
                        </p>

                        <p class="mt-4">
                            By following proper guidelines, farmers can treat their animals confidently without compromising public health. Using safe veterinary medicines is essential not just for the animals but also for the people who consume animal products.
                        </p>

                    </div>

                </div>

                <!-- Share Section -->
                <div class="mt-14">

                    <h4 class="text-2xl font-bold text-[#0d3b66] mb-6">
                        SHARE THIS:
                    </h4>

                    <div class="flex items-center gap-4">

                        <a href="#" class="w-12 h-12 rounded-full bg-[#0d3b66] text-white flex items-center justify-center hover:bg-yellow-500 transition duration-300">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="#" class="w-12 h-12 rounded-full bg-[#0d3b66] text-white flex items-center justify-center hover:bg-yellow-500 transition duration-300">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="#" class="w-12 h-12 rounded-full bg-[#0d3b66] text-white flex items-center justify-center hover:bg-yellow-500 transition duration-300">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>

                        <a href="#" class="w-12 h-12 rounded-full bg-[#0d3b66] text-white flex items-center justify-center hover:bg-yellow-500 transition duration-300">
                            <i class="fa-brands fa-youtube"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- ========================= Sidebar ========================= -->
            <?php
            include '../kantipur-vet-distributors-design-php/include/blog-sidebar.php';
            ?>

        </div>

    </div>

</section>

<?php
include 'include/footer.php';
?>