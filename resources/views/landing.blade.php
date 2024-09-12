<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yuwaraja XVI 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Silkscreen&display=swap"
        rel="stylesheet" />

    <!-- My Style -->
    @vite(['resources/css/style.css'])

    <!-- Logo Title Bar -->
    <link rel="icon" href="{{ asset('images/landing-page/yuwaraja.ico') }}" />

    <style>
        /* Keyframes for Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes logoBounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes doodleMove {
            0% {
                transform: translateX(0) translateY(0);
            }

            25% {
                transform: translateX(-10px) translateY(5px);
            }

            50% {
                transform: translateX(0) translateY(10px);
            }

            75% {
                transform: translateX(10px) translateY(5px);
            }

            100% {
                transform: translateX(0) translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Animation Classes */
        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .animate-slide-in-left {
            animation: slideInLeft 1s ease-out forwards;
        }

        .animate-delay-1 {
            animation-delay: 1s;
        }

        .animate-delay-2 {
            animation-delay: 2s;
        }

        .animate-delay-3 {
            animation-delay: 3s;
        }

        .animate-delay-4 {
            animation-delay: 4s;
        }

        .animate-logo-bounce {
            animation: logoBounce 3s ease-in-out infinite;
        }

        .animate-doodle-move {
            animation: doodleMove 5s ease-in-out infinite;
        }

        .animate-fade-in-then-slide {
            animation: fadeIn 1s ease-out forwards, slideInLeft 2s ease-out;
        }

        .animate-fade-in-then-bounce {
            animation: fadeIn 5s ease-out forwards,
                logoBounce 3s ease-in-out 1s infinite;
        }

        .animate-fade-in-then-move {
            animation: fadeIn 5s ease-out forwards,
                doodleMove 5s ease-in-out 1s infinite;
        }

        /* Ensure visibility on load */
        .doodle,
        .logo-body,
        .animate-fade-in-then-slide {
            opacity: 0;
            /* Ensure elements are hidden initially */
        }

        .navigasi a.active,
        .navigasi a:hover {
            background-color: #9b6ba6;
            transform: scale(1.05);
        }

        @media (max-width: 1920px) {
            .body-landing {
                height: 1200px !important;
                ;
            }
        }

        @media (max-width: 1440px) {
            .body-landing {
                height: 1000px !important;
            }
        }

        @media (max-width: 1024px) {
            .logo-body {
                width: 350px !important;
                height: auto !important;
            }

            .doodle-parent {
                top: 500px !important;
            }

            .judul-selamat {
                font-size: 20px !important;
            }

            .judul-yuwa {
                font-size: 70px !important;
            }

            .judul-xvi {
                font-size: 70px !important;
                top: 90px !important;
            }

            .tentang-kami-parent {
                top: 370px !important;
            }

            .tentang-kami {
                top: 0 !important;
            }
        }

        @media (max-width: 768px) {
            .nav-burger {
                margin-right: 20px !important;
            }

            .logo-body {
                width: 250px !important;
                height: auto !important;
                top: 154px !important;
                right: 50px !important;
            }

            .judul-parent {
                left: 40px !important;
            }

            .judul-selamat {
                font-size: 18px !important;
            }

            .judul-yuwa {
                font-size: 68px !important;
            }

            .judul-xvi {
                font-size: 68px !important;
                top: 80px !important;
            }

            .tentang-kami-parent {
                top: 340px !important;
                left: 40px !important;
                font-size: 30px !important;
            }

            .tentang-kami {
                width: 330px !important;
                height: 75px !important;
                top: 0 !important;
            }
        }

        @media (max-width: 425px) {
            .logo-nav {
                margin-left: 20px !important;
            }

            .text-nav-burger {
                font-size: 0.9rem !important;
            }

            .nav-burger {
                margin-right: 5px !important;
            }

            .logo-body {
                width: 330px !important;
                height: auto !important;
                top: 334px !important;
                right: 50px !important;
            }

            .judul-parent {
                left: 15px !important;
                top: 50px !important;
            }

            .judul-selamat {
                font-size: 18px !important;
            }

            .judul-yuwa {
                font-size: 68px !important;
            }

            .judul-xvi {
                font-size: 68px !important;
                top: 80px !important;
            }

            .tentang-kami-parent {
                top: 230px !important;
                left: 15px !important;
                font-size: 25px !important;
            }

            .tentang-kami {
                width: 280px !important;
                height: 70px !important;
                top: 0 !important;
            }

            .copyright-footer {
                width: 400px !important;
                left: 47% !important;
            }

            .logo-footer {
                display: none !important;
            }

            .line-footer {
                width: 380px !important;
            }

            .text-footer {
                width: 425px !important;
            }

            .footer-nav {
                font-size: 15px !important;
            }

            .beranda-footer {
                left: 40px !important;
            }

            .tentang-footer {
                left: 125px !important;
            }

            .info-footer {
                left: 210px !important;
            }

            .dashboard-footer {
                left: 305px !important;
            }
        }

        @media (max-width: 375px) {
            .logo-nav {
                margin-left: 20px !important;
            }

            .text-nav-burger {
                font-size: 0.7rem !important;
            }

            .nav-burger {
                margin-right: 5px !important;
            }

            .logo-body {
                width: 330px !important;
                height: auto !important;
                top: 334px !important;
                right: 20px !important;
            }

            .judul-parent {
                left: 15px !important;
                top: 50px !important;
            }

            .judul-selamat {
                font-size: 15px !important;
            }

            .judul-yuwa {
                font-size: 58px !important;
            }

            .judul-xvi {
                font-size: 58px !important;
                top: 70px !important;
            }

            .tentang-kami-parent {
                top: 200px !important;
                left: 15px !important;
                font-size: 25px !important;
            }

            .tentang-kami {
                width: 280px !important;
                height: 70px !important;
                top: 0 !important;
            }

            .copyright-footer {
                width: 400px !important;
                left: 47% !important;
            }

            .logo-footer {
                display: none !important;
            }

            .line-footer {
                width: 355px !important;
            }

            .sosmed-logo {
                justify-content: space-around !important;
            }

            .sosmed-logo-parent {
                width: 320px !important;
            }

            .sosmed-logo img {
                width: 55px !important;
                height: auto !important;
            }

            .text-footer {
                width: 375px !important;
            }

            .footer-nav {
                font-size: 15px !important;
            }

            .beranda-footer {
                left: 20px !important;
            }

            .tentang-footer {
                left: 100px !important;
            }

            .info-footer {
                left: 180px !important;
            }

            .dashboard-footer {
                left: 270px !important;
            }
        }

        @media (max-width: 320px) {
            .logo-nav {
                margin-left: 0px !important;
            }

            .text-nav-burger {
                font-size: 0.5rem !important;
            }

            .nav-burger {
                margin-right: 0px !important;
            }

            .logo-body {
                width: 280px !important;
                height: auto !important;
                top: 334px !important;
                right: 20px !important;
            }

            .judul-parent {
                left: 15px !important;
                top: 50px !important;
            }

            .judul-selamat {
                font-size: 13px !important;
            }

            .judul-yuwa {
                font-size: 48px !important;
            }

            .judul-xvi {
                font-size: 48px !important;
                top: 70px !important;
            }

            .tentang-kami-parent {
                top: 200px !important;
                left: 15px !important;
                font-size: 24px !important;
            }

            .tentang-kami {
                width: 250px !important;
                height: 70px !important;
                top: 0 !important;
                right: 100px !important;
            }

            .tentang-kami-text {
                left: 30px !important;
            }

            .copyright-footer {
                width: 320px !important;
                left: 47% !important;
            }

            .logo-footer {
                display: none !important;
            }

            .line-footer {
                width: 280px !important;
            }

            .sosmed-logo-parent {
                width: 280px !important;
            }

            .sosmed-logo img {
                width: 40px !important;
                height: auto !important;
            }

            .text-footer {
                width: 320px !important;
            }

            .footer-nav {
                font-size: 12px !important;
            }

            .beranda-footer {
                left: 20px !important;
            }

            .tentang-footer {
                left: 90px !important;
            }

            .info-footer {
                left: 160px !important;
            }

            .dashboard-footer {
                left: 235px !important;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top" id="mainNavbar"
        style="
        background-color: transparent;
        transition: background-color 1s ease;
      ">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">
                <img src="{{ asset('images/landing-page/logo navbar.svg') }}" alt="" class="img-fluid logo-nav"
                    style="margin-left: 80px" />
            </a>
            <button class="navbar-toggler nav-burger" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div
                    class="navigasi d-flex align-items-center justify-content-end w-100 text-center fs-5 text-white me-lg-1">
                    <a href="{{ route('landing') }}"
                        class="text-decoration-none text-reset d-flex align-items-center justify-content-center position-relative px-3 py-2 rounded-pill me-lg-1 text-nav-burger active"
                        style="overflow: hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-pill"
                            style="
                  background-color: transparent;
                  z-index: -1;
                  transition: background-color 0.3s ease, transform 0.3s ease;
                ">
                        </div>
                        Beranda
                    </a>
                    <a href="{{ route('tentang') }}"
                        class="text-decoration-none text-reset d-flex align-items-center justify-content-center position-relative px-3 py-2 rounded-pill me-lg-1 ms-lg-3 text-nav-burger"
                        style="overflow: hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-pill"
                            style="
                  background-color: transparent;
                  z-index: -1;
                  transition: background-color 0.3s ease, transform 0.3s ease;
                ">
                        </div>
                        Tentang
                    </a>
                    <a href="{{ route('infoYuwa') }}"
                        class="text-decoration-none text-reset d-flex align-items-center justify-content-center position-relative px-3 py-2 rounded-pill me-lg-1 ms-lg-1 text-nav-burger"
                        style="overflow: hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-pill"
                            style="
                  background-color: transparent;
                  z-index: -1;
                  transition: background-color 0.3s ease, transform 0.3s ease;
                ">
                        </div>
                        Info Yuwa
                    </a>
                    <a href="{{ route('login') }}"
                        class="text-decoration-none text-reset d-flex align-items-center justify-content-center position-relative px-3 py-2 rounded-pill me-lg-1 ms-lg-1 text-nav-burger"
                        style="overflow: hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-pill"
                            style="background-color: transparent;z-index: -1;transition: background-color 0.3s ease, transform 0.3s ease;
                ">
                        </div>
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Body -->

    <div class="w-100 position-relative overflow-hidden text-start text-white body-landing"
        style="
        height: 910px;
        font-size: 96.68px;
        font-family: 'Poppins', sans-serif;
      ">
        <img src="{{ asset('images/landing-page/Doodle.svg') }}" alt="Doodle"
            class="position-absolute doodle doodle-parent animate-fade-in-then-move"
            style="
          top: 611px;
          left: -32px;
          width: 2021px;
          height: 749px;
          object-fit: cover;
        " />

        <img src="{{ asset('images/landing-page/Logo Yuwa.svg') }}" alt="Yuwaraja"
            class="position-absolute logo-body animate-fade-in-then-bounce"
            style="
          top: 124px;
          right: 80.86px;
          width: 497px;
          height: 602px;
          object-fit: cover;
        " />

        <div class="position-absolute judul-parent" style="top: 165px; left: 112px; width: 757px">
            <div class="position-absolute judul-selamat animate-fade-in-then-slide animate-delay-3"
                style="top: 0; left: 2px; font-size: 31.27px">
                <b>SELAMAT DATANG DI WEBSITE RESMI</b>
            </div>
            <div class="position-absolute judul-yuwa animate-fade-in-then-slide animate-delay-3"
                style="top: 15px; left: 0px; width: 757px; height: 118.2px">
                <b>YUWARAJA</b>
            </div>
            <div class="position-absolute judul-xvi animate-fade-in-then-slide animate-delay-3"
                style="top: 110.06px; left: 2.32px">
                <b>XVI</b>
            </div>
        </div>
        <div class="position-absolute tentang-kami-parent animate-fade-in-then-slide animate-delay-4"
            style="
          top: 420px;
          left: 114px;
          width: 351.1px;
          height: 83.5px;
          cursor: pointer;
          font-size: 33.98px;
        "
            id="buttonContainer">
            <div class="position-absolute tentang-kami"
                style="
            top: 0;
            left: 0;
            border-radius: 35.39px;
            background-color: #9b6ba6;
            width: 351.1px;
            height: 83.5px;
            transition: background-color 0.3s ease;
          "
                onmouseover="this.style.backgroundColor='#5b317a'" onmouseout="this.style.backgroundColor='#9b6ba6'">
                <a href="{{ route('tentang') }}" class="text-decoration-none text-reset">
                    <div class="position-absolute tentang-kami-text" style="top: 15.57px; left: 48.13px">
                        <b>TENTANG KAMI</b>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w-100 position-relative text-start text-white footer-nav"
        style="
        height: 251px;
        font-size: 20px;
        background-color: #ad88c6;
        font-family: 'Poppins', sans-serif;
      ">
        <div class="position-absolute w-100" style="top: 0; left: 0; height: 251px"></div>
        <div class="position-absolute start-50 translate-middle-x fw-semibold text-center d-inline-block copyright-footer"
            style="top: 193px; width: 668px; height: 41px; white-space: pre-wrap">
            Copyright @YUWARAJA XVI. Developed By PIT YUWARAJA XVI
        </div>
        <a href="index.html">
            <img src="{{ asset('images/landing-page/logo footer.svg') }}" alt="Logo Footer"
                class="position-absolute logo-footer"
                style="
            top: 20px;
            left: 20px;
            width: 131px;
            height: 52px;
            object-fit: cover;
          " />
        </a>
        <div class="position-absolute start-50 translate-middle-x d-flex justify-content-between sosmed-logo-parent"
            style="top: 107px; width: 369px; height: 66.8px">
            <a href="https://www.instagram.com/pkkmb_vokasiub?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                class="text-decoration-none text-reset sosmed-logo"><img
                    src="{{ asset('images/landing-page/IG.svg') }}" alt="Social Media IG"
                    style="width: 66.8px; height: 66.8px" />
            </a>

            <a href="https://www.tiktok.com/@pkkmb_vokasiub?is_from_webapp=1&sender_device=pc"
                class="text-decoration-none text-reset sosmed-logo"><img
                    src="{{ asset('images/landing-page/Tiktok.svg') }}" alt="Social Media Tiktok"
                    style="width: 66.8px; height: 66.8px" /></a>
            <a href="mailto:pkkmbvokasibrawijaya@gmail.com" class="text-decoration-none text-reset sosmed-logo">
                <img src="{{ asset('images/landing-page/Mail.svg') }}" alt="Gmail"
                    style="width: 66.8px; height: 66.8px" />
            </a>
            <a href="https://www.youtube.com/@YuwarajaVokasi" class="text-decoration-none text-reset sosmed-logo">
                <img src="{{ asset('images/landing-page/Youtube.svg') }}" alt="Social Media Youtube"
                    style="width: 66.8px; height: 66.8px" />
            </a>
        </div>

        <div class="position-absolute start-50 translate-middle-x border-top line-footer"
            style="
          top: 75.5px;
          width: 425px;
          border-top-width: 5px;
          border-top-color: #fff;
          box-sizing: border-box;
        ">
            <!-- Footer item content goes here -->
        </div>

        <div class="position-absolute start-50 translate-middle-x text-footer"
            style="top: 23px; width: 553px; height: 30px">
            <a href="index.html" class="text-decoration-none text-reset">
                <div class="position-absolute fw-medium beranda-footer" style="top: 5px; left: 60px; cursor: pointer">
                    Beranda
                </div>
            </a>
            <a href="tentang.html" class="text-decoration-none text-reset">
                <div class="position-absolute fw-medium tentang-footer"
                    style="top: 5px; left: 165px; cursor: pointer">
                    Tentang
                </div>
            </a>
            <a href="infoYuwa" class="text-decoration-none text-reset">
                <div class="position-absolute fw-medium info-footer"
                    style="top: 5px; left: 265px; width: 100px; cursor: pointer">
                    Info Yuwa
                </div>
            </a>
            <a href="{{ route('login') }}" class="text-decoration-none text-reset">
                <div class="position-absolute fw-medium dashboard-footer"
                    style="top: 5px; left: 380px; cursor: pointer">
                    Dashboard
                </div>
            </a>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll(".navigasi a");

            navLinks.forEach((link) => {
                link.addEventListener("click", function() {
                    navLinks.forEach((item) => item.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });

        document.addEventListener("scroll", function() {
            const navbar = document.getElementById("mainNavbar");
            if (window.scrollY > 0) {
                navbar.style.backgroundColor = "#5B317A";
            } else {
                navbar.style.backgroundColor = "#ad88c6";
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
