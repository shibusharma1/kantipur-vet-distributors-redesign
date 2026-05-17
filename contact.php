<?php
include 'include/header.php';
?>

<!-- ========================= Banner Section ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <img
        src="assets/img/commit.jpg"
        alt="Contact Banner"
        class="w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center px-4">
        <h3 class="text-white text-sm md:text-base font-medium tracking-wide">
            <a href="index.php" class="hover:text-yellow-400 transition">
                HOME
            </a>
            /
            CONTACT
        </h3>

        <h1 class="text-white text-4xl md:text-6xl font-bold mt-3">
            Contact
        </h1>
    </div>
</section>

<!-- ========================= Contact Section ========================= -->
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4">

        <!-- ========================= Google Map ========================= -->
        <div class="rounded-xl overflow-hidden shadow-md mb-8">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5587.017491661533!2d85.627995!3d27.641364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eba7e5da251f8b%3A0x94616c285a8191b6!2sKantipur%20Pharmaceuticals%20Lab%20Pvt.%20Ltd.!5e1!3m2!1sen!2snp!4v1758607652267!5m2!1sen!2snp"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <!-- ========================= Share Section ========================= -->
        <div class="text-center mb-8">

            <h4 class="text-2xl font-bold text-[#0d3b66] mb-6">
                SHARE THIS:
            </h4>

            <div class="flex justify-center items-center gap-4">

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

        <!-- ========================= Contact Grid ========================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- ========================= Contact Form ========================= -->
            <div>

                <form class="rounded-2xl p-8 shadow-sm">

                    <h2 class="text-3xl font-bold text-[#0d3b66] mb-4">
                        ENQUIRY NOW
                    </h2>

                    <!-- Input Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <!-- First Name -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-1">
                                First Name
                            </label>

                            <input
                                type="text"
                                class="w-full h-10 px-4 bg-gray-200  border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-1">
                                Last Name
                            </label>

                            <input
                                type="text"
                                class="w-full h-10 px-4 bg-gray-200  border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-1">
                                Email
                            </label>

                            <input
                                type="email"
                                class="w-full h-10 px-4 bg-gray-200 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                        </div>

                        <!-- Contact -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-1">
                                Contact
                            </label>

                            <input
                                type="number"
                                class="w-full h-10 px-4 bg-gray-200  border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                        </div>

                    </div>

                    <!-- Message -->
                    <div class="mt-6">

                        <label class="block font-semibold text-gray-700 mb-1">
                            Message
                        </label>

                        <textarea
                            rows="3"
                            class="w-full px-4 py-3 bg-gray-200 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]"></textarea>

                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="group mt-3 inline-flex items-center gap-4 
                                    bg-green-600 text-white font-semibold 
                                    px-3.5 py-1 rounded-full 
                                    border-2 border-green-600
                                    transition-all duration-300 ease-in-out
                                    hover:bg-white hover:text-green-600">

                        <span class="uppercase tracking-wide text-sm">
                            SEND MESSAGE
                        </span>

                        <span class="w-8 h-8 flex items-center justify-center 
                                        rounded-full bg-white text-green-600
                                        transition-all duration-300 ease-in-out
                                        group-hover:bg-green-600 group-hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>

                        </span>

                    </button>

                </form>

            </div>

            <!-- ========================= Contact Info ========================= -->
            <div>

                <div class="bg-white shadow-lg p-8 h-full border border-gray-100">

                    <h2 class="text-3xl font-bold text-[#0d3b66] mb-4">
                        GET IN TOUCH WITH US
                    </h2>

                    <!-- Phone -->
                    <div class="flex gap-5 mb-2">

                        <div class="w-10 h-10 rounded-full bg-[#0d3b66] text-white flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div>
                            <h4 class="text-xl font-bold text-gray-800">
                                Call us on
                            </h4>

                            <p class=" mt-2 leading-7">
                                +977-01-5186604, +977-01-5186602
                            </p>
                        </div>

                    </div>

                    <!-- Email -->
                    <div class="flex gap-5 mb-2">

                        <div class="w-10 h-10 rounded-full bg-[#0d3b66] text-white flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <h4 class="text-xl font-bold text-gray-800">
                                Send a mail to
                            </h4>

                            <p class=" mt-2 leading-7">
                                info@kantipurpharma.com
                            </p>
                        </div>

                    </div>

                    <!-- Address -->
                    <div class="flex gap-5">

                        <div class="w-10 h-10 rounded-full bg-[#0d3b66] text-white flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <h4 class="text-xl font-bold text-gray-800">
                                Locate us
                            </h4>

                            <p class="mt-2 leading-8">

                                <strong>Corporate Office :-</strong>
                                <br>

                                KVD Complex 6th Floor,
                                Balkumari, Lalitpur,
                                Nepal, PIN 44700

                                <

                                <strong class="font-bold">Factory :-</strong>
                                <br>

                                Panchkhal - 06,
                                Hokshe, Kavre

                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php
include 'include/footer.php';
?>