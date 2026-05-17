<?php
include 'include/header.php';
?>
<!-- ========================= Banner Section ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <img
        src="assets/img/vision.jpg"
        alt="Blog Banner"
        class="w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center px-4">
        <h3 class="text-white text-sm md:text-base font-medium tracking-wide">
            <a href="index.php" class="hover:text-yellow-400 transition">
                HOME
            </a>
            /
            BLOG
        </h3>

        <h1 class="text-white text-4xl md:text-6xl font-bold mt-3">
            Blog & News
        </h1>
    </div>
</section>

<!-- ========================= Blog Section ========================= -->
<section class="reveal py-20 bg-white">
    <div class="reveal max-w-7xl mx-auto px-4">

        <!-- Blog Grid -->
        <div class="reveal grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- ========================= Blog Card ========================= -->
            <div class=" group reveal ">

                <!-- Image -->
                <a href="blog-detail.php" class="block overflow-hidden rounded-t-2xl">
                    <img
                        src="assets/img/blog1.png"
                        alt=""
                        class="w-full h-[280px] object-cover transition duration-700  group reveal -hover:scale-110">
                </a>

                <!-- Content -->
                <div class=" mt-4 bg-gray-100 rounded-b-2xl p-6 ">

                    <!-- Meta -->
                    <div class="flex flex-wrap items-center gap-5 text-sm uppercase text-gray-500">

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-user text-[var(--color-secondary)]"></i>
                            Admin Name
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-[var(--color-secondary)]"></i>
                            27 August, 2025
                        </div>

                    </div>

                    <!-- Title -->
                    <a href="blog-detail.php">
                        <h3 class="text-xl font-bold text-[#0d3b66] mt-0 line-clamp-2 hover:text-[var(--color-secondary)] transition">
                            Behavior and training animals
                        </h3>
                    </a>

                    <!-- Description -->
                    <p class="mt-2  line-clamp-2">
                        What Every Pet Owner Needs to Know Owning a pet is a rewarding experience, but it also comes with important responsibilities Pet Owner Needs to Know Owning a pet is a rewarding experience.
                    </p>

                    <!-- Button --> <a href="blog-detail.php"
                        class=" group reveal  mt-2 inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600 ">

                        <span class="uppercase tracking-wide text-sm">
                            EXPLORE MORE
                        </span>

                        <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                         group reveal -hover:bg-green-600  group reveal -hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>

                </div>
            </div>

            <!-- ========================= Blog Card ========================= -->
            <div class=" group reveal ">

                <a href="blog-detail.php" class="block overflow-hidden rounded-t-2xl">
                    <img
                        src="assets/img/blog2.webp"
                        alt=""
                        class="w-full h-[280px] object-cover transition duration-700  group reveal -hover:scale-110">
                </a>

                <div class=" mt-4 bg-gray-100 rounded-b-2xl p-6 ">

                    <div class="flex flex-wrap items-center gap-5 text-sm uppercase text-gray-500">

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-user text-[var(--color-secondary)]"></i>
                            Admin Name
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-[var(--color-secondary)]"></i>
                            27 August, 2025
                        </div>

                    </div>

                    <a href="blog-detail.php">
                        <h3 class="text-xl font-bold text-[#0d3b66] mt-0 line-clamp-2 hover:text-[var(--color-secondary)] transition">
                            Advancing Animal Health: The Future of Veterinary Medicines
                        </h3>
                    </a>

                    <p class="mt-2  line-clamp-2">
                        What Every Pet Owner Needs to Know Owning a pet is a rewarding experience, but it also comes with important responsibilities Pet Owner Needs to Know Owning a pet is a rewarding experience.
                    </p>
                    <a href="blog-detail.php"
                        class=" group reveal  mt-2 inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600 ">

                        <span class="uppercase tracking-wide text-sm">
                            EXPLORE MORE
                        </span>

                        <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                         group reveal -hover:bg-green-600  group reveal -hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>

                </div>
            </div>

            <!-- ========================= Blog Card ========================= -->
            <div class=" group reveal ">

                <a href="blog-detail.php" class="block overflow-hidden rounded-t-2xl">
                    <img
                        src="assets/img/blog3.jpeg"
                        alt=""
                        class="w-full h-[280px] object-cover transition duration-700  group reveal -hover:scale-110">
                </a>

                <div class=" mt-4 bg-gray-100 rounded-b-2xl p-6 ">

                    <div class="flex flex-wrap items-center gap-5 text-sm uppercase text-gray-500">

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-user text-[var(--color-secondary)]"></i>
                            Admin Name
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-[var(--color-secondary)]"></i>
                            27 August, 2025
                        </div>

                    </div>

                    <a href="blog-detail.php">
                        <h3 class="text-xl font-bold text-[#0d3b66] mt-0 line-clamp-2 hover:text-[var(--color-secondary)] transition">
                            Safe & Effective Solutions for Livestock Care
                        </h3>
                    </a>

                    <p class="mt-2  line-clamp-2">
                        What Every Pet Owner Needs to Know Owning a pet is a rewarding experience, but it also comes with important responsibilities Pet Owner Needs to Know Owning a pet is a rewarding experience.
                    </p>
                    <a href="blog-detail.php"
                        class=" group reveal  mt-2 inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600 ">

                        <span class="uppercase tracking-wide text-sm">
                            EXPLORE MORE
                        </span>

                        <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                         group reveal -hover:bg-green-600  group reveal -hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>

                </div>
            </div>

            <!-- ========================= Blog Card ========================= -->
            <div class=" group reveal ">

                <a href="blog-detail.php" class="block overflow-hidden rounded-t-2xl">
                    <img
                        src="assets/img/blog4.jpeg"
                        alt=""
                        class="w-full h-[280px] object-cover transition duration-700  group reveal -hover:scale-110">
                </a>

                <div class=" mt-4 bg-gray-100 rounded-b-2xl p-6 ">

                    <div class="flex flex-wrap items-center gap-5 text-sm uppercase text-gray-500">

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-user text-[var(--color-secondary)]"></i>
                            Admin Name
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-[var(--color-secondary)]"></i>
                            27 August, 2025
                        </div>

                    </div>

                    <a href="blog-detail.php">
                        <h3 class="text-xl font-bold text-[#0d3b66] mt-0 line-clamp-2 hover:text-[var(--color-secondary)] transition">
                            Trusted Veterinary Medicines for Every Species
                        </h3>
                    </a>

                    <p class="mt-2  line-clamp-2">
                        What Every Pet Owner Needs to Know Owning a pet is a rewarding experience, but it also comes with important responsibilities Pet Owner Needs to Know Owning a pet is a rewarding experience.
                    </p>
                    <a href="blog-detail.php"
                        class=" group reveal  mt-2 inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600 ">

                        <span class="uppercase tracking-wide text-sm">
                            EXPLORE MORE
                        </span>

                        <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                         group reveal -hover:bg-green-600  group reveal -hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>

                </div>
            </div>

        </div>

        <!-- ========================= Pagination ========================= -->
        <?php include '../kantipur-vet-distributors-design-php/include/pagination.php'; ?>

    </div>
</section>
<?php
include 'include/footer.php';
?>