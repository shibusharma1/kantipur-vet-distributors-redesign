<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantipur Vet Distributors</title>
    <link rel="icon" type="image/png" href="assets/img/kantipurvet-logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#342F7F',
                        secondary: '#BA0202',
                    }
                }
            }
        }
    </script>
    <script src="https://kit.fontawesome.com/7254a5967d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../kantipur-vet-distributors-design-php/assets/css/style.css">
</head>

<body class="bg-white">

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="assets/img/kantipurvet-logo.png" alt="" width="200">
        </div>
    </div>

    <!-- ===================== HEADER ===================== -->
    <div id="main-header">

        <!-- Desktop -->
        <div class="hidden lg:block">
            <!-- <div class="max-w-screen-xl mx-auto px-1"> -->
            <div class="max-w-screen-xl mx-auto px-3 sm:px-4 lg:px-2">
                <nav class="flex items-center py-4 gap-10">
                    <a href="index.php">
                        <img src="assets/img/kantipurvet-logo.png" alt="" width="120">
                    </a>
                    <ul class="flex items-center gap-8 flex-1 justify-center list-none m-0 p-0">
                        <li><a href="about.php" class="nav-link">About</a></li>
                        <li><a href="mission.php" class="nav-link">Mission</a></li>
                        <li class="has-dropdown">
                            <a href="#" class="nav-link flex items-center gap-1">
                                Product <i class="fa-solid fa-chevron-down text-xs"></i>
                            </a>
                            <div class="dropdown-panel">
                                <a href="product-list.php">Feed Supplement</a>
                                <a href="product-list.php">Allopathic</a>
                                <a href="product-list.php">Marketing Division</a>
                            </div>
                        </li>
                        <li><a href="blog.php" class="nav-link">News / Blogs</a></li>
                        <li><a href="career.php" class="nav-link">Career</a></li>
                        <li><a href="contact.php" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="flex items-center gap-2 flex-shrink-0">
                        <a href="" class="icon-btn bg-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="icon-btn bg-instagram"><i class="fab fa-instagram"></i></a>
                        <a href="" class="icon-btn bg-twitter"><i class="fab fa-x-twitter"></i></a>
                        <a href="" class="icon-btn bg-youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Mobile -->
        <div class="lg:hidden bg-white shadow">
            <!-- <div class="max-w-screen-xl mx-auto px-4"> -->
            <div class="max-w-screen-xl mx-auto px-3">
                <nav class="flex items-center justify-between py-3">
                    <a href="index.php">
                        <img alt="" src="assets/img/kantipurvet-logo.png" width="120">
                    </a>
                    <button id="offcanvas-toggle" class="px-4 py-2 border border-gray-300 rounded text-gray-700 text-sm" type="button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </nav>
            </div>
        </div>

    </div>

    <!-- Off-canvas overlay -->
    <div class="offcanvas-overlay" id="oc-overlay"></div>

    <!-- Off-canvas panel -->
    <div id="offcanvas-flip">
        <div class="flex items-center justify-between p-4 border-b border-gray-100">
            <a href="index.php"><img src="assets/img/kantipurvet-logo.png" alt="" width="120"></a>
            <button id="offcanvas-close" class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 text-gray-600">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <nav>
            <a href="index.php" class="offcanvas-nav-link">Home</a>
            <a href="about.php" class="offcanvas-nav-link">About</a>
            <a href="mission.php" class="offcanvas-nav-link">Mission</a>
            <div>
                <button onclick="this.nextElementSibling.classList.toggle('hidden')" class="offcanvas-nav-link w-full text-left flex items-center justify-between">
                    Product <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>
                <div class="hidden bg-gray-50 pl-4">
                    <a href="product-list.php" class="offcanvas-nav-link">Allopathic</a>
                    <a href="product-list.php" class="offcanvas-nav-link">Allopathic</a>
                    <a href="product-list.php" class="offcanvas-nav-link">Marketing Division</a>
                </div>
            </div>
            <a href="blog.php" class="offcanvas-nav-link">News / Blogs</a>
            <a href="career.php" class="offcanvas-nav-link">Career</a>
            <a href="contact.php" class="offcanvas-nav-link">Contact</a>
        </nav>
        <div class="p-4 flex gap-2">
            <a href="" class="icon-btn bg-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="icon-btn bg-instagram"><i class="fab fa-instagram"></i></a>
            <a href="" class="icon-btn bg-twitter"><i class="fab fa-x-twitter"></i></a>
            <a href="" class="icon-btn bg-youtube"><i class="fab fa-youtube"></i></a>
        </div>
    </div>