<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yuwaraja XVI 2024 | Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Silkscreen&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- My Style -->
    @vite(['resources/css/style.css'])

    <!-- Logo Title Bar -->
    <link rel="icon" href="{{ asset('images/landing-page/yuwaraja.ico') }}" />

    <style>
        .navigasi a.active,
        .navigasi a:hover {
            background-color: #9b6ba6;
            transform: scale(1.05);
        }

        @media (max-width: 1920px) {
            .judul-pengumuman {
                left: 800px !important;
            }

            .card-parent {
                top: 140px !important;
                left: 400px !important;
            }

            .button-parent {
                top: 410px !important;
                left: 380px !important;
            }

            .card-pengumuman {
                top: 0px !important;
                width: 480px !important;
                height: 351px !important;
            }

            .card-pengumuman-judul {
                top: 40px !important;
                left: 35px !important;
                width: 420px !important;
                height: 49px !important;
            }

            .card-pengumuman-tgl {
                top: 13px !important;
                left: 40px !important;
                font-size: 16px !important;
            }

            .card-pengumuman-lorem-parent {
                top: 130px !important;
                left: 37px !important;
            }

            .card-pengumuman-lorem-text {
                width: 399px !important;
                height: 135px !important;
                font-size: 20px !important;
                font-weight: 500 !important;
                text-align: justify !important;
            }

            .body-parent {
                height: 3000px !important;
            }
        }

        @media (max-width: 1440px) {
            .judul-pengumuman {
                left: 600px !important;
            }

            .card-parent {
                top: 140px !important;
                left: 200px !important;
            }

            .button-parent {
                top: 410px !important;
                left: 380px !important;
            }

            .card-pengumuman {
                top: 0px !important;
                width: 480px !important;
                height: 351px !important;
            }

            .card-pengumuman-judul {
                top: 42px !important;
                left: 37px !important;
                width: 412px !important;
                height: 49px !important;
            }

            .card-pengumuman-tgl {
                top: 13px !important;
                left: 40px !important;
                font-size: 16px !important;
            }

            .card-pengumuman-lorem-parent {
                top: 140px !important;
                left: 37px !important;
            }

            .card-pengumuman-lorem-text {
                width: 399px !important;
                height: 135px !important;
                font-size: 20px !important;
                font-weight: 500 !important;
                text-align: justify !important;
            }

            .body-parent {
                height: 3000px !important;
            }
        }

        @media (max-width: 1024px) {
            .judul-pengumuman {
                left: 400px !important;
            }

            .card-parent {
                top: 140px !important;
                left: -40px !important;
            }

            .button-parent {
                top: 410px !important;
                left: 380px !important;
            }

            .card-pengumuman {
                top: 0px !important;
                width: 480px !important;
                height: 351px !important;
            }

            .card-pengumuman-judul {
                top: 42px !important;
                left: 37px !important;
                width: 412px !important;
                height: 49px !important;
            }

            .card-pengumuman-tgl {
                top: 13px !important;
                left: 40px !important;
                font-size: 16px !important;
            }

            .card-pengumuman-lorem-parent {
                top: 140px !important;
                left: 37px !important;
            }

            .card-pengumuman-lorem-text {
                width: 399px !important;
                height: 135px !important;
                font-size: 20px !important;
                font-weight: 500 !important;
                text-align: justify !important;
            }

            .body-parent {
                height: 3000px !important;
            }
        }

        @media (max-width: 768px) {
            .judul-pengumuman {
                left: 270px !important;
            }

            .card-parent {
                top: 100px !important;
                left: 10px !important;
                width: 95% !important;
                /* Sesuaikan dengan layar yang lebih kecil */
            }

            .button-parent {
                top: 0px !important;
                left: 160px !important;
            }

            .card-pengumuman {
                top: 0px !important;
                width: 500px !important;
                height: 350px !important;
            }

            .card-pengumuman-judul {
                top: 30px !important;
                left: 20px !important;
                width: 450px !important;
                height: 40px !important;
            }

            .card-pengumuman-tgl {
                top: 10px !important;
                left: 25px !important;
                font-size: 14px !important;
            }

            .card-pengumuman-lorem-parent {
                top: 130px !important;
                left: 20px !important;
            }

            .card-pengumuman-lorem-text {
                width: 400px !important;
                height: 110px !important;
                font-size: 18px !important;
                font-weight: 500 !important;
                text-align: justify !important;
            }

            .body-parent {
                height: 5000px !important;
                /* Sesuaikan tinggi badan untuk mengakomodasi konten */
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

            .judul-pengumuman {
                left: 110px !important;
            }

            .card-parent {
                top: 100px !important;
                left: 10px !important;
                width: 95% !important;
                /* Sesuaikan dengan layar yang lebih kecil */
            }

            .button-pengumuman {
                left: 100px !important;
            }

            .card-pengumuman {
                top: 0px !important;
                width: 400px !important;
                height: 350px !important;
            }

            .card-pengumuman-judul {
                top: 30px !important;
                left: 20px !important;
                width: 350px !important;
                height: 40px !important;
            }

            .card-pengumuman-tgl {
                top: 10px !important;
                left: 25px !important;
                font-size: 14px !important;
            }

            .card-pengumuman-lorem-parent {
                top: 160px !important;
                left: 20px !important;
            }

            .card-pengumuman-lorem-text {
                width: 350px !important;
                height: 110px !important;
                font-size: 18px !important;
                font-weight: 500 !important;
                text-align: justify !important;
            }

            .body-parent {
                height: 5000px !important;
                /* Sesuaikan tinggi badan untuk mengakomodasi konten */
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

            .judul-pengumuman {
                left: 90px !important;
            }

            .card-parent {
                top: 100px !important;
                left: 10px !important;
                width: 95% !important;
                /* Sesuaikan dengan layar yang lebih kecil */
            }

            .button-pengumuman {
                left: 80px !important;
            }

            .card-pengumuman {
                top: 0px !important;
                width: 350px !important;
                height: 350px !important;
            }

            .card-pengumuman-judul {
                top: 40px !important;
                left: 20px !important;
                width: 300px !important;
                height: 40px !important;
                font-size: 22px !important;
            }

            .card-pengumuman-tgl {
                top: 10px !important;
                left: 25px !important;
                font-size: 14px !important;
            }

            .card-pengumuman-lorem-parent {
                top: 130px !important;
                left: 20px !important;
            }

            .card-pengumuman-lorem-text {
                width: 300px !important;
                height: 110px !important;
                font-size: 16px !important;
                font-weight: 500 !important;
                text-align: justify !important;
            }

            .body-parent {
                height: 5000px !important;
                /* Sesuaikan tinggi badan untuk mengakomodasi konten */
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

            .judul-pengumuman {
                left: 60px !important;
            }

            .card-parent {
                top: 100px !important;
                left: 10px !important;
                width: 95% !important;
                /* Sesuaikan dengan layar yang lebih kecil */
            }

            .button-pengumuman {
                left: 50px !important;
            }

            .card-pengumuman {
                top: 0px !important;
                width: 300px !important;
                height: 350px !important;
            }

            .card-pengumuman-judul {
                top: 40px !important;
                left: 20px !important;
                width: 260px !important;
                height: 40px !important;
                font-size: 22px !important;
            }

            .card-pengumuman-tgl {
                top: 10px !important;
                left: 25px !important;
                font-size: 14px !important;
            }

            .card-pengumuman-lorem-parent {
                top: 150px !important;
                left: 20px !important;
            }

            .card-pengumuman-lorem-text {
                width: 260px !important;
                height: 110px !important;
                font-size: 16px !important;
                font-weight: 500 !important;
                text-align: justify !important;
            }

            .body-parent {
                height: 5000px !important;
                /* Sesuaikan tinggi badan untuk mengakomodasi konten */
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
    <!-- Header -->
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
                        class="text-decoration-none text-reset d-flex align-items-center justify-content-center position-relative px-3 py-2 rounded-pill me-lg-1 text-nav-burger"
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
                        class="text-decoration-none text-reset d-flex align-items-center justify-content-center position-relative px-3 py-2 rounded-pill me-lg-1 ms-lg-1 text-nav-burger active"
                        style="overflow: hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-pill"
                            style="background-color: transparent;z-index: -1;transition: background-color 0.3s ease, transform 0.3s ease;
                ">
                        </div>
                        Info Yuwa
                    </a>
                    <a href="{{ route('login') }}"
                        class="text-decoration-none text-reset d-flex align-items-center justify-content-center position-relative px-3 py-2 rounded-pill me-lg-1 ms-lg-1 text-nav-burger"
                        style="overflow: hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-pill"
                            style="
                  background-color: transparent;
                  z-index: -1;
                  transition: background-color 0.3s ease, transform 0.3s ease;
                ">
                        </div>
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Body -->

    <div class="body w-100 position-relative overflow-hidden text-start text-white body-parent"
        style="height: auto; font-size: 27px; font-family: 'Poppins', sans-serif">
        <div class="position-absolute text-black fs-1 animate__animated animate__fadeInDownBig judul-pengumuman"
            style="top: 30px; left: 800px">
            <b>PENGUMUMAN</b>
        </div>
        <div class="position-absolute card-parent d-flex flex-wrap justify-content-center"
            style="top: 137px; left: 400px; width: 1113px; height: auto;">
            @foreach ($announcements as $index => $announcement)
                <div class="animate__animated {{ $index % 2 === 0 ? 'animate__bounceInLeft' : 'animate__bounceInRight' }} animate__slow"
                    style="width: 480px; height: 351px; margin: 5px; position: relative;">
                    <div class="position-relative card-pengumuman"
                        style="
                        background-color: #ad88c6;
                        width: 480px;
                        height: 351px;
                        border-radius: 25px;">
                        <div class="position-absolute start-0 card-pengumuman-judul"
                            style="top: 42px; left: 37px; width: 412px; height: 49px">
                            <div class="d-inline-block text-start w-100 h-100">
                                <b>{{ strlen($announcement->title) > 40 ? substr($announcement->title, 0, 40) . '...' : $announcement->title }}</b>
                                
                            </div>
                        </div>

                        <div class="position-absolute card-pengumuman-tgl"
                            style="top: 13px; left: 40px; font-size: 16px">
                            {{ $announcement->created_at->format('d/m/Y') }}
                        </div>
                        <a href="{{ route('infoYuwaDetail', ['id' => $announcement->id]) }}"
                            class="text-decoration-none text-reset">
                            <div class="position-absolute button-pengumuman"
                                style="
                                top: 261px;
                                left: 146px;
                                width: 187px;
                                height: 52px;
                                cursor: pointer;
                                font-size: 24px;">
                                <div class="position-absolute top-0 start-0 rounded-pill"
                                    style="
                                    background-color: #9b6ba6;
                                    width: 187px;
                                    height: 52px;
                                    transition: background-color 0.3s ease;"
                                    onmouseover="this.style.backgroundColor='#5b317a'"
                                    onmouseout="this.style.backgroundColor='#9b6ba6'">
                                    <div class="position-absolute" style="top: 8px; left: 62px">
                                        <b>More</b>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="position-absolute card-pengumuman-lorem-parent" style="top: 80px; left: 37px">
                            <div class="d-inline-block card-pengumuman-lorem-text"
                                style="
                                width: 399px;
                                height: 135px;
                                font-size: 20px;
                                font-weight: 500;">
                                {{ strlen($announcement->content) > 100 ? substr($announcement->content, 0, 100) : $announcement->content }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Footer -->
    <footer class="w-100 position-relative text-start text-white footer-nav"
        style="
        height: 251px;
        font-size: 20px;
        background-color: #ad88c6;
        font-family: 'Poppins', sans-serif;">
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
            object-fit: cover;" />
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
            style="top: 75.5px;width: 425px;border-top-width: 5px;border-top-color: #fff;box-sizing: border-box;
        ">
            <!-- Footer item content goes here -->
        </div>

        <div class="position-absolute start-50 translate-middle-x text-footer"
            style="top: 23px; width: 553px; height: 30px">
            <a href="{{ route('landing') }}" class="text-decoration-none text-reset">
                <div class="position-absolute fw-medium beranda-footer" style="top: 5px; left: 60px; cursor: pointer">
                    Beranda
                </div>
            </a>
            <a href="{{ route('tentang') }}" class="text-decoration-none text-reset">
                <div class="position-absolute fw-medium tentang-footer"
                    style="top: 5px; left: 165px; cursor: pointer">
                    Tentang
                </div>
            </a>
            <a href="{{ route('infoYuwa') }}" class="text-decoration-none text-reset">
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
