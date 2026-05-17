<?php
include 'include/header.php';
?>
<!-- ========================= Banner Section ========================= -->
<section class="relative h-[420px] overflow-hidden">
    <img
        src="assets/img/vision.jpg"
        alt="Career Banner"
        class="w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center px-4">
        <h3 class="text-white text-sm md:text-base font-medium tracking-wide">
            <a href="index.php" class="hover:text-yellow-400 transition">
                HOME
            </a>
            /
            CAREER
        </h3>

        <h1 class="text-white text-4xl md:text-6xl font-bold mt-3">
            Career
        </h1>
    </div>
</section>

<!-- ========================= Career Table Section ========================= -->
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-4">

        <!-- Table Wrapper -->
        <div class="overflow-x-auto rounded-2xl shadow-lg border border-gray-200">

            <table class="w-full min-w-[900px]">

                <!-- Table Head -->
                <thead class="bg-[#0d3b66] text-white">

                    <tr>

                        <th class="px-6 py-5 text-left text-lg font-semibold">
                            Job Title
                        </th>

                        <th class="px-6 py-5 text-left text-lg font-semibold">
                            Description
                        </th>

                        <th class="px-6 py-5 text-left text-lg font-semibold">
                            Type
                        </th>

                        <th class="px-6 py-5 text-left text-lg font-semibold">
                            Apply Now
                        </th>

                    </tr>

                </thead>

                <!-- Table Body -->
                <tbody class="bg-white divide-y divide-gray-200">

                    <!-- Row -->
                    <tr class="hover:bg-gray-50 transition">

                        <td class="px-6 py-6 font-bold text-[#0d3b66]">
                            Geologist
                        </td>

                        <td class="px-6 py-6 text-gray-600 leading-7">
                            Are you detail-oriented and experienced in your field? We’re seeking skilled and energetic professionals to join our team. If you meet the requirements, apply now for exciting career opportunities in the following positions!
                        </td>

                        <td class="px-6 py-6 font-semibold text-gray-700 uppercase">
                            Full Time
                        </td>

                        <td class="px-6 py-6">
                            <button
                                onclick="openModal()"
                                class="inline-flex items-center gap-2 text-[#0d3b66] hover:text-yellow-500 font-semibold transition">
                                Apply Now
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </td>

                    </tr>

                    <!-- Row -->
                    <tr class="hover:bg-gray-50 transition">

                        <td class="px-6 py-6 font-bold text-[#0d3b66]">
                            Geologist
                        </td>

                        <td class="px-6 py-6 text-gray-600 leading-7">
                            Are you detail-oriented and experienced in your field? We’re seeking skilled and energetic professionals to join our team. If you meet the requirements, apply now for exciting career opportunities in the following positions!
                        </td>

                        <td class="px-6 py-6 font-semibold text-gray-700 uppercase">
                            Full Time
                        </td>

                        <td class="px-6 py-6">
                            <button
                                onclick="openModal()"
                                class="inline-flex items-center gap-2 text-[#0d3b66] hover:text-yellow-500 font-semibold transition">
                                Apply Now
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </td>

                    </tr>

                    <!-- Row -->
                    <tr class="hover:bg-gray-50 transition">

                        <td class="px-6 py-6 font-bold text-[#0d3b66]">
                            Geologist
                        </td>

                        <td class="px-6 py-6 text-gray-600 leading-7">
                            Are you detail-oriented and experienced in your field? We’re seeking skilled and energetic professionals to join our team. If you meet the requirements, apply now for exciting career opportunities in the following positions!
                        </td>

                        <td class="px-6 py-6 font-semibold text-gray-700 uppercase">
                            Full Time
                        </td>

                        <td class="px-6 py-6">
                            <button
                                onclick="openModal()"
                                class="inline-flex items-center gap-2 text-[#0d3b66] hover:text-yellow-500 font-semibold transition">
                                Apply Now
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ========================= Career Modal ========================= -->
<div
    id="careerModal"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 p-4">

    <!-- Modal Box -->
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-5xl max-h-[95vh] overflow-y-auto relative">

        <!-- Close Button -->
        <button
            onclick="closeModal()"
            class="absolute top-5 right-5 w-10 h-10 rounded-full bg-red-500 text-white hover:bg-red-600 transition">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <!-- Header -->
        <div class="bg-[#0d3b66] px-8 py-6 rounded-t-2xl">

            <h3 class="text-3xl font-bold text-white">
                KPL Hiring / Application Form
            </h3>

        </div>

        <!-- Content -->
        <div class="p-8">

            <p class="text-gray-600 leading-7">
                We are Kantipur Pharmaceutical Lab Limited; a diverse academic background team united to care and cure animal’s health.
            </p>

            <hr class="my-6">

            <p class="text-red-500 text-sm">
                Fields marked with * are required.
            </p>

            <!-- Form -->
            <form class="mt-8">

                <!-- Input Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Full Name -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Your Full Name *
                        </label>

                        <input
                            type="text"
                            class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Your Phone Number *
                        </label>

                        <input
                            type="text"
                            class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Your Email *
                        </label>

                        <input
                            type="email"
                            class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                    </div>

                    <!-- Experience -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Experience in Year *
                        </label>

                        <input
                            type="text"
                            class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                    </div>

                    <!-- Current CTC -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Current CTC *
                        </label>

                        <input
                            type="text"
                            class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                    </div>

                    <!-- Organization -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Current Organization *
                        </label>

                        <input
                            type="text"
                            class="w-full h-12 px-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d3b66]">
                    </div>

                </div>

                <!-- Uploads -->
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 mt-10">

                    <!-- Upload Buttons -->
                    <div class="flex flex-wrap gap-4">

                        <!-- CV Upload -->
                        <label class="cursor-pointer inline-flex items-center gap-3 bg-[#0d3b66] hover:bg-[#08233d] text-white px-6 py-4 rounded-xl transition">

                            <i class="fa-solid fa-cloud-arrow-up"></i>

                            <span>Upload CV</span>

                            <input type="file" class="hidden">

                        </label>

                        <!-- Cover Letter -->
                        <label class="cursor-pointer inline-flex items-center gap-3 bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-4 rounded-xl transition">

                            <i class="fa-solid fa-cloud-arrow-up"></i>

                            <span>Upload Cover Letter</span>

                            <input type="file" class="hidden">

                        </label>

                    </div>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-3 bg-[#0d3b66] hover:bg-yellow-500 text-white px-8 py-4 rounded-full transition duration-300">
                        <span class="font-medium tracking-wide">
                            SUBMIT NOW
                        </span>

                        <i class="fa-solid fa-paw"></i>
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- ========================= Modal Script ========================= -->
<script>
    const modal = document.getElementById('careerModal');

    function openModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
</script>

<?php
include 'include/footer.php';
?>