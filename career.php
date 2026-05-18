<?php
include 'include/header.php';
?>

<!-- ========================= PAGE BANNER ========================= -->
<section class="relative h-[420px] overflow-hidden">

    <!-- Background -->
    <img
        src="assets/img/vision.jpg"
        alt="Career Banner"
        class="w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/55"></div>

    <!-- Bottom Gradient -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>

    <!-- Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">

        <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">

            Home / Career

        </p>

        <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">

            Career Opportunities

        </h1>

    </div>

</section>

<!-- ========================= CAREER INTRO ========================= -->
<section class="py-20 md:py-24 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Left -->
            <div>

                <p class="section-tag reveal">

                    Join Our Team

                </p>

                <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">

                    Build Your Career With KPL.

                </h2>

                <p class="mt-8 text-gray-600 leading-8 reveal">

                    Kantipur Pharmaceuticals Lab Limited is always looking for passionate, skilled and motivated professionals who are committed to innovation, healthcare excellence and animal welfare.

                </p>

                <p class="mt-5 text-gray-600 leading-8 reveal">

                    We believe in creating opportunities for professional growth, teamwork and long-term career development in Nepal’s veterinary healthcare industry.

                </p>

                <!-- Features -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-10">

                    <!-- Card -->
                    <div class="modern-card p-6 reveal">

                        <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">

                            <i class="fa-solid fa-user-group text-primary text-2xl"></i>

                        </div>

                        <h4 class="mt-5 text-xl font-semibold text-primary">

                            Team Environment

                        </h4>

                        <p class="mt-3 text-sm leading-7 text-gray-500">

                            Work with experienced professionals in a collaborative environment.

                        </p>

                    </div>

                    <!-- Card -->
                    <div class="modern-card p-6 reveal">

                        <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center">

                            <i class="fa-solid fa-chart-line text-secondary text-2xl"></i>

                        </div>

                        <h4 class="mt-5 text-xl font-semibold text-primary">

                            Career Growth

                        </h4>

                        <p class="mt-3 text-sm leading-7 text-gray-500">

                            Explore professional growth opportunities and career development.

                        </p>

                    </div>

                </div>

            </div>

            <!-- Right -->
            <div class="relative reveal">

                <div class="overflow-hidden rounded-[32px] shadow-2xl">

                    <img
                        src="assets/img/company.jpg"
                        alt="Career"
                        class="w-full h-[620px] object-cover hover:scale-105 transition duration-700">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================= CAREER TABLE ========================= -->
<section class="pb-20 md:pb-24 bg-[#F7F8FA] overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="max-w-3xl mb-14">

            <p class="section-tag reveal">

                Open Positions

            </p>

            <h2 class="mt-5 text-3xl md:text-5xl font-bold leading-tight text-primary reveal">

                Current Job Openings

            </h2>

        </div>

        <!-- Table Wrapper -->
        <div class="overflow-x-auto reveal">

            <div class="modern-card overflow-hidden min-w-[1000px]">

                <table class="w-full">

                    <!-- Head -->
                    <thead class="bg-primary text-white">

                        <tr>

                            <th class="px-8 py-6 text-left text-lg font-semibold">
                                Job Title
                            </th>

                            <th class="px-8 py-6 text-left text-lg font-semibold">
                                Description
                            </th>

                            <th class="px-8 py-6 text-left text-lg font-semibold">
                                Job Type
                            </th>

                            <th class="px-8 py-6 text-left text-lg font-semibold">
                                Apply
                            </th>

                        </tr>

                    </thead>

                    <!-- Body -->
                    <tbody class="divide-y divide-gray-100 bg-white">

                        <!-- Row -->
                        <tr class="hover:bg-gray-50 transition duration-300">

                            <td class="px-8 py-8">

                                <h4 class="text-xl font-bold text-primary">

                                    Veterinary Officer

                                </h4>

                            </td>

                            <td class="px-8 py-8">

                                <p class="text-gray-600 leading-8 min-w-[320px]">

                                    We are looking for dedicated and experienced veterinary professionals to support our healthcare and product development operations.

                                </p>

                            </td>

                            <td class="px-8 py-8">

                                <span class="inline-flex items-center px-4 py-2 rounded-full bg-secondary/10 text-secondary font-semibold text-sm">

                                    Full Time

                                </span>

                            </td>

                            <td class="px-8 py-8">

                                <button
                                    onclick="openModal()"
                                    class="inline-flex items-center gap-3 text-primary font-semibold hover:text-secondary transition duration-300">

                                    Apply Now

                                    <i class="fa-solid fa-arrow-right"></i>

                                </button>

                            </td>

                        </tr>

                        <!-- Row -->
                        <tr class="hover:bg-gray-50 transition duration-300">

                            <td class="px-8 py-8">

                                <h4 class="text-xl font-bold text-primary">

                                    Sales Executive

                                </h4>

                            </td>

                            <td class="px-8 py-8">

                                <p class="text-gray-600 leading-8 min-w-[320px]">

                                    Join our professional sales and marketing team to expand veterinary healthcare distribution across Nepal.

                                </p>

                            </td>

                            <td class="px-8 py-8">

                                <span class="inline-flex items-center px-4 py-2 rounded-full bg-primary/10 text-primary font-semibold text-sm">

                                    Full Time

                                </span>

                            </td>

                            <td class="px-8 py-8">

                                <button
                                    onclick="openModal()"
                                    class="inline-flex items-center gap-3 text-primary font-semibold hover:text-secondary transition duration-300">

                                    Apply Now

                                    <i class="fa-solid fa-arrow-right"></i>

                                </button>

                            </td>

                        </tr>

                        <!-- Row -->
                        <tr class="hover:bg-gray-50 transition duration-300">

                            <td class="px-8 py-8">

                                <h4 class="text-xl font-bold text-primary">

                                    Product Specialist

                                </h4>

                            </td>

                            <td class="px-8 py-8">

                                <p class="text-gray-600 leading-8 min-w-[320px]">

                                    Seeking motivated professionals with veterinary product knowledge and technical communication skills.

                                </p>

                            </td>

                            <td class="px-8 py-8">

                                <span class="inline-flex items-center px-4 py-2 rounded-full bg-secondary/10 text-secondary font-semibold text-sm">

                                    Full Time

                                </span>

                            </td>

                            <td class="px-8 py-8">

                                <button
                                    onclick="openModal()"
                                    class="inline-flex items-center gap-3 text-primary font-semibold hover:text-secondary transition duration-300">

                                    Apply Now

                                    <i class="fa-solid fa-arrow-right"></i>

                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</section>

<!-- ========================= APPLICATION MODAL ========================= -->
<div
    id="careerModal"
    class="fixed inset-0 z-[999] hidden items-center justify-center bg-black/70 backdrop-blur-sm p-4">

    <!-- Modal Box -->
    <div class="bg-white rounded-[32px] shadow-2xl w-full max-w-5xl max-h-[95vh] overflow-y-auto relative reveal">

        <!-- Close -->
        <button
            onclick="closeModal()"
            class="absolute top-5 right-5 w-11 h-11 rounded-full bg-red-500 text-white hover:bg-red-600 transition duration-300 z-20">

            <i class="fa-solid fa-xmark"></i>

        </button>

        <!-- Header -->
        <div class="bg-primary px-8 md:px-12 py-8 rounded-t-[32px]">

            <h3 class="text-3xl md:text-4xl font-bold text-white">

                Career Application Form

            </h3>

            <p class="mt-3 text-white/75 leading-8">

                Apply for exciting career opportunities at Kantipur Pharmaceuticals Lab Limited.

            </p>

        </div>

        <!-- Form -->
        <div class="p-8 md:p-12">

            <form>

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Full Name -->
                    <div class="reveal">

                        <label class="block text-sm font-semibold text-primary mb-3">

                            Full Name *

                        </label>

                        <input
                            type="text"
                            placeholder="Enter full name"
                            class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">

                    </div>

                    <!-- Phone -->
                    <div class="reveal">

                        <label class="block text-sm font-semibold text-primary mb-3">

                            Phone Number *

                        </label>

                        <input
                            type="text"
                            placeholder="Enter phone number"
                            class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">

                    </div>

                    <!-- Email -->
                    <div class="reveal">

                        <label class="block text-sm font-semibold text-primary mb-3">

                            Email Address *

                        </label>

                        <input
                            type="email"
                            placeholder="Enter email address"
                            class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">

                    </div>

                    <!-- Experience -->
                    <div class="reveal">

                        <label class="block text-sm font-semibold text-primary mb-3">

                            Experience (Years) *

                        </label>

                        <input
                            type="text"
                            placeholder="Enter experience"
                            class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">

                    </div>

                    <!-- Current Organization -->
                    <div class="reveal">

                        <label class="block text-sm font-semibold text-primary mb-3">

                            Current Organization *

                        </label>

                        <input
                            type="text"
                            placeholder="Current organization"
                            class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">

                    </div>

                    <!-- Current CTC -->
                    <div class="reveal">

                        <label class="block text-sm font-semibold text-primary mb-3">

                            Current CTC *

                        </label>

                        <input
                            type="text"
                            placeholder="Current salary / CTC"
                            class="w-full h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">

                    </div>

                </div>

                <!-- Message -->
                <div class="mt-6 reveal">

                    <label class="block text-sm font-semibold text-primary mb-3">

                        Cover Letter / Message

                    </label>

                    <textarea
                        rows="6"
                        placeholder="Write your message..."
                        class="w-full rounded-[28px] border border-gray-200 bg-gray-50 px-5 py-5 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300 resize-none"></textarea>

                </div>

                <!-- Upload -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">

                    <!-- CV -->
                    <div class="reveal">

                        <label class="block text-sm font-semibold text-primary mb-3">

                            Upload CV *

                        </label>

                        <label class="flex items-center justify-center gap-3 h-14 rounded-2xl border border-dashed border-primary bg-primary/5 cursor-pointer hover:bg-primary hover:text-white transition duration-300">

                            <i class="fa-solid fa-cloud-arrow-up"></i>

                            <span class="font-medium">
                                Choose File
                            </span>

                            <input type="file" class="hidden">

                        </label>

                    </div>

                    <!-- Cover Letter -->
                    <div class="reveal">

                        <label class="block text-sm font-semibold text-primary mb-3">

                            Upload Cover Letter

                        </label>

                        <label class="flex items-center justify-center gap-3 h-14 rounded-2xl border border-dashed border-secondary bg-secondary/5 cursor-pointer hover:bg-secondary hover:text-white transition duration-300">

                            <i class="fa-solid fa-cloud-arrow-up"></i>

                            <span class="font-medium">
                                Choose File
                            </span>

                            <input type="file" class="hidden">

                        </label>

                    </div>

                </div>

                <!-- Button -->
                <div class="mt-10 reveal">

                    <button
                        type="submit"
                        class="primary-btn border-0 cursor-pointer">

                        Submit Application

                        <i class="fa-solid fa-paper-plane"></i>

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- ========================= MODAL SCRIPT ========================= -->
<script>
    const modal = document.getElementById("careerModal");

    function openModal() {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
        document.body.style.overflow = "";
    }

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
</script>

<?php
include 'include/footer.php';
?>