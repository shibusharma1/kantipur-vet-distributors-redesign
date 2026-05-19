<?php
   include 'include/header.php';
   ?>
<!-- ========================= PAGE BANNER ========================= -->
<section class="relative h-[420px] overflow-hidden">
   <!-- Background -->
   <img src="assets/img/vision.jpg" alt="Products Banner" class="w-full h-full object-cover">
   <!-- Overlay -->
   <div class="absolute inset-0 bg-black/55"></div>
   <!-- Bottom Gradient -->
   <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/40 to-transparent"></div>
   <!-- Content -->
   <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
      <p class="text-white/80 uppercase tracking-[0.25em] text-sm reveal">
         Home / Products
      </p>
      <h1 class="mt-5 text-white text-4xl md:text-6xl font-bold reveal">
         Our Products
      </h1>
   </div>
</section>
<!-- ========================= PRODUCT SECTION ========================= -->
<section class="py-12 md:py-12 bg-white overflow-hidden">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
         <!-- ========================= SIDEBAR ========================= -->
         <aside class="lg:col-span-3">
            <div class="sticky top-28 space-y-8">
               <!-- Category -->
               <div class="sidebar-card reveal">
                  <!-- Heading -->
                  <div class="px-7 pt-7 pb-5 border-b border-gray-100">
                     <h3 class="text-2xl font-bold text-primary">
                        Product Categories
                     </h3>
                  </div>
                  <!-- Links -->
                  <div>
                     <a href="#"
                        class="sidebar-link">
                     <span>Feed Supplement</span>
                     <i class="fa-solid fa-angle-right"></i>
                     </a>
                     <a href="#"
                        class="sidebar-link">
                     <span>Veterinary Medicine</span>
                     <i class="fa-solid fa-angle-right"></i>
                     </a>
                     <a href="#"
                        class="sidebar-link">
                     <span>Animal Care</span>
                     <i class="fa-solid fa-angle-right"></i>
                     </a>
                     <a href="#"
                        class="sidebar-link">
                     <span>Poultry Products</span>
                     <i class="fa-solid fa-angle-right"></i>
                     </a>
                     <a href="#"
                        class="sidebar-link border-b-0">
                     <span>Swine Care</span>
                     <i class="fa-solid fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <!-- CTA -->
               <div class="relative overflow-hidden rounded-[32px] reveal">
                  <!-- Background -->
                  <img src="assets/img/vision.jpg"
                     alt=""
                     class="absolute inset-0 w-full h-full object-cover">
                  <!-- Overlay -->
                  <div class="absolute inset-0 bg-primary/90"></div>
                  <!-- Content -->
                  <div class="relative z-10 p-10 text-center">
                     <h3 class="text-3xl font-bold text-white leading-tight">
                        Need Product Support?
                     </h3>
                     <p class="mt-5 text-white/75 leading-8">
                        Contact our team for veterinary product information and support.
                     </p>
                     <!-- Button -->
                     <a href="contact.php" class="white-btn mt-8">
                     Contact Us
                     <i class="fa-solid fa-arrow-right"></i>
                     </a>
                  </div>
               </div>
            </div>
         </aside>
         <!-- ========================= PRODUCTS ========================= -->
         <div class="lg:col-span-9">
            <!-- Heading -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5 mb-8">
               <div>
                  <p class="section-tag reveal">
                     Product Collection
                  </p>
                  <h2 class="mt-4 text-2xl md:text-3xl font-bold leading-tight text-primary reveal">
                     Veterinary Healthcare Products
                  </h2>
               </div>
               <!-- Search -->
               <div class="relative reveal">
                  <input
                     type="text"
                     placeholder="Search products..."
                     class="w-full md:w-[320px] h-14 rounded-2xl border border-gray-200 bg-gray-50 px-5 pr-14 outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition duration-300">
                  <button
                     class="absolute top-1/2 right-5 -translate-y-1/2 text-primary">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
               </div>
            </div>
            <!-- Product Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
               <!-- Product -->
               <a
                  href="product-detail.php"
                  class="product-card reveal group">
                  <!-- Image -->
                  <div class="product-card-image">
                     <img
                        src="assets/img/product/1.png"
                        alt="Product">
                  </div>
                  <!-- Content -->
                  <div class="product-card-content">
                     <h3 class="text-sm md:text-base font-semibold text-primary">
                        Vita-K
                     </h3>
                  </div>
               </a>
               <!-- Product -->
               <a
                  href="product-detail.php"
                  class="product-card reveal group">
                  <!-- Image -->
                  <div class="product-card-image">
                     <img
                        src="assets/img/product/1.png"
                        alt="Product">
                  </div>
                  <!-- Content -->
                  <div class="product-card-content">
                     <h3 class="text-sm md:text-base font-semibold text-primary">
                        Clearcal-P-Oral
                     </h3>
                  </div>
               </a>
               <!-- Product -->
               <a
                  href="product-detail.php"
                  class="product-card reveal group">
                  <!-- Image -->
                  <div class="product-card-image">
                     <img
                        src="assets/img/product/1.png"
                        alt="Product">
                  </div>
                  <!-- Content -->
                  <div class="product-card-content">
                     <h3 class="text-sm md:text-base font-semibold text-primary">
                        Livestock Care
                     </h3>
                  </div>
               </a>
               <!-- Product -->
               <a
                  href="product-detail.php"
                  class="product-card reveal group">
                  <!-- Image -->
                  <div class="product-card-image">
                     <img
                        src="assets/img/product/1.png"
                        alt="Product">
                  </div>
                  <!-- Content -->
                  <div class="product-card-content">
                     <h3 class="text-sm md:text-base font-semibold text-primary">
                        Poultry Supplement
                     </h3>
                  </div>
               </a>
               <!-- Product -->
               <a
                  href="product-detail.php"
                  class="product-card reveal group">
                  <!-- Image -->
                  <div class="product-card-image">
                     <img
                        src="assets/img/product/1.png"
                        alt="Product">
                  </div>
                  <!-- Content -->
                  <div class="product-card-content">
                     <h3 class="text-sm md:text-base font-semibold text-primary">
                        Swine Care
                     </h3>
                  </div>
               </a>
               <!-- Product -->
               <a
                  href="product-detail.php"
                  class="product-card reveal group">
                  <!-- Image -->
                  <div class="product-card-image">
                     <img
                        src="assets/img/product/1.png"
                        alt="Product">
                  </div>
                  <!-- Content -->
                  <div class="product-card-content">
                     <h3 class="text-sm md:text-base font-semibold text-primary">
                        Veterinary Formula
                     </h3>
                  </div>
               </a>
            </div>
            <!-- ========================= PAGINATION ========================= -->
          <?php include '../kantipur-vet-distributors-design-php/include/pagination.php' ?>
         </div>
      </div>
   </div>
</section>
<?php
   include 'include/footer.php';
   ?>