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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>
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

        .animate-doodle-move {
            animation: doodleMove 5s ease-in-out infinite;
        }

        .navigasi a.active,
        .navigasi a:hover {
            background-color: #9b6ba6;
            transform: scale(1.05);
        }

        @media (max-width: 1920px) {
            .tentang-parent {
                left: 500px !important;
                font-size: 32px !important;
                width: 1920px !important;
            }

            .tentang-judul {
                width: 1920px !important;
                left: -500px !important;
            }

            .orang-tentang {
                left: 560px !important;
            }

            .image-hover {
                width: 1920px !important;
            }

            .image-single-hover {
                width: 275px !important;
            }

            .rectangle-image {
                width: 2000px !important;
                left: 10px !important;
            }

            .rectangle-image-2 {
                width: 2000px !important;
                left: 10px !important;
            }

            .filosofi-parent {
                width: 1920px !important;
                left: 450px !important;
                font-size: 20px !important;
            }

            .filosofi-pengertian-parent {
                left: 500px !important;
            }

            .filosofi-pengertian-parent-2 {
                left: 500px !important;
                top: 400px !important;
            }

            .filosofi-pengertian-parent-3 {
                top: 600px !important;
                left: 500px !important;
            }

            .filosofi-pengertian-parent-4 {
                top: 780px !important;
                left: 500px !important;
            }

            .filosofi-pengertian-logo {
                top: 0px !important;
            }

            .filosofi-logo {
                width: 500px !important;
                height: auto !important;
                left: -30px !important;
            }

            .filosofi-text {
                width: 500px !important;
            }

            .filosofi-judul {
                left: 150px !important;
            }

            .doodle-panitia {
                width: 1920px !important;
            }

            .doodle-panitia-2 {
                width: 1920px !important;
            }

            .arrow-panitia {
                left: 1100px !important;
                width: 200px !important;
                height: 210px !important;
            }

            .line-panitia {
                left: 850px !important;
                top: 2460px !important;
                width: 300px !important;
                height: 3000px !important;
            }

            .image-kapel {
                width: 250px !important;
                height: 250px !important;
                left: 850px !important;
            }

            .image-wakapel {
                width: 250px !important;
                height: 250px !important;
                left: 1050px !important;
                top: 2650px !important;
            }

            .image-sekretaris {
                width: 250px !important;
                height: 250px !important;
                left: 600px !important;
                top: 2780px !important;
            }

            .image-bendahara {
                width: 250px !important;
                height: 250px !important;
                left: 1140px !important;
                top: 3030px !important;
            }

            .image-acara {
                width: 250px !important;
                height: 250px !important;
                left: 600px !important;
                top: 3200px !important;
            }

            .image-pit {
                width: 250px !important;
                height: 250px !important;
                left: 1140px !important;
                top: 3440px !important;
            }

            .image-korlap {
                width: 250px !important;
                height: 250px !important;
                left: 600px !important;
                top: 3600px !important;
            }

            .image-ddm {
                width: 250px !important;
                height: 250px !important;
                left: 1140px !important;
                top: 3840px !important;
            }

            .image-komblik {
                width: 250px !important;
                height: 250px !important;
                left: 600px !important;
                top: 4030px !important;
            }

            .image-perkap {
                width: 250px !important;
                height: 250px !important;
                left: 1140px !important;
                top: 4260px !important;
            }

            .image-spv {
                width: 250px !important;
                height: 250px !important;
                left: 600px !important;
                top: 4440px !important;
            }

            .image-kesehatan {
                width: 250px !important;
                height: 250px !important;
                left: 1140px !important;
                top: 4680px !important;
            }

            .image-konsumsi {
                width: 250px !important;
                height: 250px !important;
                left: 600px !important;
                top: 4860px !important;
            }

            .image-kestari {
                width: 250px !important;
                height: 250px !important;
                left: 1140px !important;
                top: 5110px !important;
            }

            .body-parent {
                height: 5600px !important;
            }
        }

        @media (max-width: 1440px) {
            .body-landing {
                height: 1000px !important;
            }

            .tentang-parent {
                left: 138px !important;
                font-size: 32px !important;
                width: 1440px !important;
            }

            .tentang-judul {
                width: 1155px !important;
                left: 50px !important;
            }

            .orang-tentang {
                left: 715px !important;
            }

            .image-hover {
                width: 1510px !important;
            }

            .image-single-hover {
                width: 205px !important;
            }

            .rectangle-image {
                width: 1490px !important;
                left: 30px !important;
            }

            .rectangle-image-2 {
                width: 1490px !important;
                left: 30px !important;
            }

            .filosofi-parent {
                width: 1201px !important;
                left: 220px !important;
                font-size: 20px !important;
            }

            .filosofi-pengertian-parent {
                left: 500px !important;
            }

            .filosofi-pengertian-parent-2 {
                left: 500px !important;
                top: 400px !important;
            }

            .filosofi-pengertian-parent-3 {
                top: 600px !important;
                left: 500px !important;
            }

            .filosofi-pengertian-parent-4 {
                top: 780px !important;
                left: 500px !important;
            }

            .filosofi-pengertian-logo {
                top: 0px !important;
            }

            .filosofi-logo {
                width: 500px !important;
                height: auto !important;
                left: -100px !important;
            }

            .filosofi-text {
                width: 500px !important;
            }

            .filosofi-judul {
                left: 150px !important;
            }

            .doodle-panitia {
                width: 1440px !important;
            }

            .doodle-panitia-2 {
                width: 1440px !important;
            }

            .arrow-panitia {
                left: 850px !important;
                width: 200px !important;
                height: 210px !important;
            }

            .line-panitia {
                left: 600px !important;
                top: 2460px !important;
                width: 300px !important;
                height: 3000px !important;
            }

            .image-kapel {
                width: 250px !important;
                height: 250px !important;
                left: 600px !important;
            }

            .image-wakapel {
                width: 250px !important;
                height: 250px !important;
                left: 820px !important;
                top: 2650px !important;
            }

            .image-sekretaris {
                width: 250px !important;
                height: 250px !important;
                left: 350px !important;
                top: 2780px !important;
            }

            .image-bendahara {
                width: 250px !important;
                height: 250px !important;
                left: 900px !important;
                top: 3030px !important;
            }

            .image-acara {
                width: 250px !important;
                height: 250px !important;
                left: 350px !important;
                top: 3200px !important;
            }

            .image-pit {
                width: 250px !important;
                height: 250px !important;
                left: 900px !important;
                top: 3440px !important;
            }

            .image-korlap {
                width: 250px !important;
                height: 250px !important;
                left: 350px !important;
                top: 3600px !important;
            }

            .image-ddm {
                width: 250px !important;
                height: 250px !important;
                left: 900px !important;
                top: 3840px !important;
            }

            .image-komblik {
                width: 250px !important;
                height: 250px !important;
                left: 350px !important;
                top: 4030px !important;
            }

            .image-perkap {
                width: 250px !important;
                height: 250px !important;
                left: 900px !important;
                top: 4260px !important;
            }

            .image-spv {
                width: 250px !important;
                height: 250px !important;
                left: 350px !important;
                top: 4440px !important;
            }

            .image-kesehatan {
                width: 250px !important;
                height: 250px !important;
                left: 900px !important;
                top: 4680px !important;
            }

            .image-konsumsi {
                width: 250px !important;
                height: 250px !important;
                left: 350px !important;
                top: 4860px !important;
            }

            .image-kestari {
                width: 250px !important;
                height: 250px !important;
                left: 900px !important;
                top: 5110px !important;
            }

            .body-parent {
                height: 5600px !important;
            }
        }

        @media (max-width: 1024px) {
            .tentang-parent {
                left: 20px !important;
                font-size: 25px !important;
                width: 1024px !important;
            }

            .tentang-judul {
                width: 1024px !important;
                left: 0px !important;
            }

            .orang-tentang {
                left: 560px !important;
            }

            .image-hover {
                width: 1024px !important;
            }

            .image-single-hover {
                width: 145px !important;
            }

            .rectangle-image {
                width: 1090px !important;
                left: 30px !important;
            }

            .rectangle-image-2 {
                width: 1090px !important;
                left: 30px !important;
            }

            .filosofi-parent {
                width: 1024px !important;
                left: 50px !important;
                font-size: 14px !important;
            }

            .filosofi-pengertian-parent {
                left: 550px !important;
            }

            .filosofi-pengertian-parent-2 {
                left: 550px !important;
                top: 400px !important;
            }

            .filosofi-pengertian-parent-3 {
                top: 600px !important;
                left: 550px !important;
            }

            .filosofi-pengertian-parent-4 {
                top: 780px !important;
                left: 550px !important;
            }

            .filosofi-pengertian-logo {
                top: 0px !important;
            }

            .filosofi-logo {
                width: 500px !important;
                height: auto !important;
                left: 10px !important;
            }

            .filosofi-text {
                width: 230px !important;
            }

            .filosofi-judul {
                left: 150px !important;
            }

            .doodle-panitia {
                left: -40px !important;
            }

            .doodle-panitia-2 {
                right: -40px !important;
            }

            .arrow-panitia {
                left: 650px !important;
                width: 200px !important;
                height: 210px !important;
            }

            .line-panitia {
                left: 370px !important;
                top: 2460px !important;
                width: 300px !important;
                height: 3000px !important;
            }

            .image-kapel {
                width: 250px !important;
                height: 250px !important;
                left: 400px !important;
            }

            .image-wakapel {
                width: 250px !important;
                height: 250px !important;
                left: 620px !important;
                top: 2650px !important;
            }

            .image-sekretaris {
                width: 250px !important;
                height: 250px !important;
                left: 130px !important;
                top: 2780px !important;
            }

            .image-bendahara {
                width: 250px !important;
                height: 250px !important;
                left: 660px !important;
                top: 3030px !important;
            }

            .image-acara {
                width: 250px !important;
                height: 250px !important;
                left: 130px !important;
                top: 3200px !important;
            }

            .image-pit {
                width: 250px !important;
                height: 250px !important;
                left: 660px !important;
                top: 3440px !important;
            }

            .image-korlap {
                width: 250px !important;
                height: 250px !important;
                left: 130px !important;
                top: 3600px !important;
            }

            .image-ddm {
                width: 250px !important;
                height: 250px !important;
                left: 660px !important;
                top: 3840px !important;
            }

            .image-komblik {
                width: 250px !important;
                height: 250px !important;
                left: 130px !important;
                top: 4030px !important;
            }

            .image-perkap {
                width: 250px !important;
                height: 250px !important;
                left: 660px !important;
                top: 4260px !important;
            }

            .image-spv {
                width: 250px !important;
                height: 250px !important;
                left: 130px !important;
                top: 4440px !important;
            }

            .image-kesehatan {
                width: 250px !important;
                height: 250px !important;
                left: 660px !important;
                top: 4680px !important;
            }

            .image-konsumsi {
                width: 250px !important;
                height: 250px !important;
                left: 130px !important;
                top: 4860px !important;
            }

            .image-kestari {
                width: 250px !important;
                height: 250px !important;
                left: 660px !important;
                top: 5110px !important;
            }

            .body-parent {
                height: 5600px !important;
            }
        }

        @media (max-width: 768px) {
            .nav-burger {
                margin-right: 20px !important;
            }

            .tentang-parent {
                left: 10px !important;
                font-size: 20px !important;
                width: 768px !important;
            }

            .tentang-judul {
                width: 768px !important;
                left: 0px !important;
            }

            .desc-parent {
                width: 500px !important;
            }

            .apa-itu-parent {
                font-size: 35px !important;
            }

            .orang-tentang {
                left: 400px !important;
            }

            .image-hover {
                width: 768px !important;
            }

            .image-single-hover {
                width: 105px !important;
            }

            .rectangle-image {
                width: 800px !important;
                left: 30px !important;
            }

            .filosofi-parent {
                width: 768px !important;
                left: 20px !important;
                font-size: 12px !important;
            }

            .filosofi-pengertian-parent {
                left: 350px !important;
            }

            .filosofi-pengertian-parent-3 {
                top: 600px !important;
                left: 350px !important;
            }

            .filosofi-pengertian-parent-2 {
                left: 350px !important;
                top: 400px !important;
            }

            .filosofi-pengertian-parent-4 {
                top: 780px !important;
                left: 350px !important;
            }

            .filosofi-pengertian-logo {
                top: 0px !important;
            }

            .filosofi-logo {
                width: 300px !important;
                height: auto !important;
                left: 10px !important;
                top: 400px !important;
            }

            .filosofi-text {
                width: 210px !important;
            }

            .filosofi-judul {
                left: 30px !important;
                font-size: 24px !important;
            }

            .doodle-panitia {
                left: -80px !important;
            }

            .doodle-panitia-2 {
                right: -80px !important;
            }

            .arrow-panitia {
                left: 510px !important;
                width: 180px !important;
                height: 200px !important;
            }

            .line-panitia {
                left: 250px !important;
                top: 2350px !important;
                width: 270px !important;
                height: 3000px !important;
            }

            .image-kapel {
                width: 230px !important;
                height: 230px !important;
                left: 270px !important;
            }

            .image-wakapel {
                width: 230px !important;
                height: 230px !important;
                left: 460px !important;
                top: 2650px !important;
            }

            .image-sekretaris {
                width: 230px !important;
                height: 230px !important;
                left: 40px !important;
                top: 2780px !important;
            }

            .image-bendahara {
                width: 230px !important;
                height: 230px !important;
                left: 500px !important;
                top: 3010px !important;
            }

            .image-acara {
                width: 230px !important;
                height: 230px !important;
                left: 40px !important;
                top: 3170px !important;
            }

            .image-pit {
                width: 230px !important;
                height: 230px !important;
                left: 500px !important;
                top: 3380px !important;
            }

            .image-korlap {
                width: 230px !important;
                height: 230px !important;
                left: 40px !important;
                top: 3530px !important;
            }

            .image-ddm {
                width: 230px !important;
                height: 230px !important;
                left: 500px !important;
                top: 3740px !important;
            }

            .image-komblik {
                width: 230px !important;
                height: 230px !important;
                left: 40px !important;
                top: 3920px !important;
            }

            .image-perkap {
                width: 230px !important;
                height: 230px !important;
                left: 500px !important;
                top: 4120px !important;
            }

            .image-spv {
                width: 230px !important;
                height: 230px !important;
                left: 40px !important;
                top: 4280px !important;
            }

            .image-kesehatan {
                width: 230px !important;
                height: 230px !important;
                left: 500px !important;
                top: 4500px !important;
            }

            .image-konsumsi {
                width: 230px !important;
                height: 230px !important;
                left: 40px !important;
                top: 4660px !important;
            }

            .image-kestari {
                width: 230px !important;
                height: 230px !important;
                left: 500px !important;
                top: 4880px !important;
            }

            .body-parent {
                height: 5400px !important;
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

            .tentang-parent {
                left: 10px !important;
                font-size: 15px !important;
                width: 425px !important;
            }

            .tentang-judul {
                width: 425px !important;
                left: -20px !important;
                font-size: 30px !important;
            }

            .desc-parent {
                width: 375px !important;
                top: 60px !important;
            }

            .apa-itu-parent {
                font-size: 25px !important;
            }

            .apa-itu-parent-2 {
                top: 80px !important;
            }

            .orang-tentang {
                left: 10px !important;
                width: 350px !important;
                height: auto !important;
                top: 210px !important;
            }

            .image-hover {
                width: 425px !important;
            }

            .image-parent-hover {
                top: 20px !important;
            }

            .image-single-hover {
                width: 53px !important;
                height: 100px !important;
            }

            .rectangle-image {
                width: 500px !important;
                left: 30px !important;
                top: 50px !important;
            }

            .rectangle-image-2 {
                width: 500px !important;
                left: 30px !important;
                top: 170px !important;
            }

            .filosofi-parent {
                width: 425px !important;
                left: 20px !important;
                font-size: 12px !important;
            }

            .filosofi-pengertian-parent {
                left: 10px !important;
                top: 500px !important;
            }

            .filosofi-pengertian-parent-2 {
                left: 10px !important;
                top: 680px !important;
            }

            .filosofi-pengertian-parent-3 {
                top: 850px !important;
                left: 10px !important;
            }

            .filosofi-pengertian-parent-4 {
                top: 1020px !important;
                left: 10px !important;
            }

            .filosofi-pengertian-logo {
                top: 0px !important;
            }

            .filosofi-logo {
                width: 300px !important;
                height: auto !important;
                left: 50px !important;
                top: 120px !important;
            }

            .filosofi-text {
                width: 210px !important;
            }

            .filosofi-judul {
                left: 0px !important;
                font-size: 24px !important;
                width: 425px !important;
            }

            .filosofi-yuwaraja {
                font-size: 35px !important;
                left: 12px !important;
            }

            .doodle-panitia {
                left: -80px !important;
            }

            .doodle-panitia-2 {
                right: -80px !important;
            }

            .arrow-panitia {
                left: 265px !important;
                width: 100px !important;
                height: 170px !important;
                top: 2370px !important;
            }

            .line-panitia {
                left: 160px !important;
                top: 1240px !important;
                width: 100px !important;
                height: 3500px !important;
            }

            .image-kapel {
                width: 130px !important;
                height: 130px !important;
                left: 140px !important;
            }

            .image-wakapel {
                width: 130px !important;
                height: 130px !important;
                left: 260px !important;
                top: 2520px !important;
            }

            .image-sekretaris {
                width: 130px !important;
                height: 130px !important;
                left: 40px !important;
                top: 2570px !important;
            }

            .image-bendahara {
                width: 130px !important;
                height: 130px !important;
                left: 250px !important;
                top: 2660px !important;
            }

            .image-acara {
                width: 130px !important;
                height: 130px !important;
                left: 40px !important;
                top: 2720px !important;
            }

            .image-pit {
                width: 130px !important;
                height: 130px !important;
                left: 250px !important;
                top: 2800px !important;
            }

            .image-korlap {
                width: 130px !important;
                height: 130px !important;
                left: 40px !important;
                top: 2860px !important;
            }

            .image-ddm {
                width: 130px !important;
                height: 130px !important;
                left: 250px !important;
                top: 2940px !important;
            }

            .image-komblik {
                width: 130px !important;
                height: 130px !important;
                left: 40px !important;
                top: 3000px !important;
            }

            .image-perkap {
                width: 130px !important;
                height: 130px !important;
                left: 250px !important;
                top: 3080px !important;
            }

            .image-spv {
                width: 130px !important;
                height: 130px !important;
                left: 40px !important;
                top: 3135px !important;
            }

            .image-kesehatan {
                width: 130px !important;
                height: 130px !important;
                left: 250px !important;
                top: 3220px !important;
            }

            .image-konsumsi {
                width: 130px !important;
                height: 130px !important;
                left: 40px !important;
                top: 3280px !important;
            }

            .image-kestari {
                width: 130px !important;
                height: 130px !important;
                left: 250px !important;
                top: 3360px !important;
            }

            .body-parent {
                height: 3600px !important;
            }

            .judul-parent {
                left: 30px !important;
            }

            .struktur-filosofi {
                left: 30px !important;
                font-size: 25px !important;
            }

            .yuwa-filosofi {
                font-size: 35px !important;
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

            .tentang-parent {
                left: 10px !important;
                font-size: 15px !important;
                width: 425px !important;
            }

            .tentang-judul {
                width: 425px !important;
                left: -30px !important;
                font-size: 30px !important;
            }

            .desc-parent {
                width: 325px !important;
                top: 50px !important;
            }

            .apa-itu-parent {
                font-size: 23px !important;
            }

            .apa-itu-parent-2 {
                top: 80px !important;
            }

            .orang-tentang {
                left: 0px !important;
                width: 350px !important;
                height: auto !important;
                top: 210px !important;
            }

            .image-hover {
                width: 425px !important;
            }

            .image-parent-hover {
                top: 20px !important;
            }

            .image-single-hover {
                width: 47px !important;
                height: 100px !important;
            }

            .rectangle-image {
                width: 450px !important;
                left: 30px !important;
                top: 50px !important;
            }

            .rectangle-image-2 {
                width: 450px !important;
                left: 30px !important;
                top: 170px !important;
            }

            .filosofi-parent {
                width: 425px !important;
                left: 20px !important;
                font-size: 12px !important;
            }

            .filosofi-pengertian-parent {
                left: 6px !important;
                top: 500px !important;
            }

            .filosofi-pengertian-parent-2 {
                left: 10px !important;
                top: 680px !important;
            }

            .filosofi-pengertian-parent-3 {
                top: 885px !important;
                left: 10px !important;
            }

            .filosofi-pengertian-parent-4 {
                top: 1060px !important;
                left: 10px !important;
            }

            .filosofi-pengertian-logo {
                top: 0px !important;
            }

            .filosofi-logo {
                width: 300px !important;
                height: auto !important;
                left: 20px !important;
                top: 120px !important;
            }

            .filosofi-text {
                width: 180px !important;
            }

            .filosofi-judul {
                left: -30px !important;
                font-size: 24px !important;
                width: 425px !important;
            }

            .filosofi-yuwaraja {
                font-size: 33px !important;
                left: 28px !important;
            }

            .doodle-panitia {
                left: -80px !important;
            }

            .doodle-panitia-2 {
                right: -80px !important;
            }

            .arrow-panitia {
                left: 245px !important;
                width: 100px !important;
                height: 170px !important;
                top: 2370px !important;
            }

            .line-panitia {
                left: 143px !important;
                top: 1240px !important;
                width: 100px !important;
                height: 3500px !important;
            }

            .image-kapel {
                width: 130px !important;
                height: 130px !important;
                left: 120px !important;
            }

            .image-wakapel {
                width: 130px !important;
                height: 130px !important;
                left: 235px !important;
                top: 2508px !important;
            }

            .image-sekretaris {
                width: 130px !important;
                height: 130px !important;
                left: 20px !important;
                top: 2570px !important;
            }

            .image-bendahara {
                width: 130px !important;
                height: 130px !important;
                left: 235px !important;
                top: 2670px !important;
            }

            .image-acara {
                width: 130px !important;
                height: 130px !important;
                left: 20px !important;
                top: 2710px !important;
            }

            .image-pit {
                width: 130px !important;
                height: 130px !important;
                left: 235px !important;
                top: 2800px !important;
            }

            .image-korlap {
                width: 130px !important;
                height: 130px !important;
                left: 20px !important;
                top: 2845px !important;
            }

            .image-ddm {
                width: 130px !important;
                height: 130px !important;
                left: 235px !important;
                top: 2940px !important;
            }

            .image-komblik {
                width: 130px !important;
                height: 130px !important;
                left: 20px !important;
                top: 2990px !important;
            }

            .image-perkap {
                width: 130px !important;
                height: 130px !important;
                left: 235px !important;
                top: 3080px !important;
            }

            .image-spv {
                width: 130px !important;
                height: 130px !important;
                left: 20px !important;
                top: 3120px !important;
            }

            .image-kesehatan {
                width: 130px !important;
                height: 130px !important;
                left: 235px !important;
                top: 3220px !important;
            }

            .image-konsumsi {
                width: 130px !important;
                height: 130px !important;
                left: 20px !important;
                top: 3270px !important;
            }

            .image-kestari {
                width: 130px !important;
                height: 130px !important;
                left: 235px !important;
                top: 3360px !important;
            }

            .body-parent {
                height: 3600px !important;
            }

            .judul-parent {
                left: 15px !important;
                top: 2236px !important;
            }

            .struktur-filosofi {
                left: 30px !important;
                font-size: 23px !important;
            }

            .yuwa-filosofi {
                font-size: 33px !important;
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

            .tentang-parent {
                left: 10px !important;
                font-size: 15px !important;
                width: 320px !important;
            }

            .tentang-judul {
                width: 425px !important;
                left: -65px !important;
                font-size: 26px !important;
            }

            .desc-parent {
                width: 280px !important;
                top: 50px !important;
            }

            .apa-itu-parent {
                font-size: 20px !important;
            }

            .apa-itu-parent-2 {
                top: 60px !important;
            }

            .orang-tentang {
                left: -30px !important;
                width: 350px !important;
                height: auto !important;
                top: 250px !important;
            }

            .image-hover {
                width: 350px !important;
            }

            .image-parent-hover {
                top: 20px !important;
            }

            .image-single-hover {
                width: 39px !important;
                height: 100px !important;
            }

            .rectangle-image {
                width: 350px !important;
                left: 30px !important;
                top: 50px !important;
            }

            .rectangle-image-2 {
                width: 350px !important;
                left: 30px !important;
                top: 170px !important;
            }

            .filosofi-parent {
                width: 320px !important;
                left: 10px !important;
                font-size: 12px !important;
            }

            .filosofi-pengertian-parent {
                left: 6px !important;
                top: 530px !important;
            }

            .image-filosofi-surai {
                width: 100px !important;
                height: auto !important;
            }

            .image-filosofi-sayap {
                width: 100px !important;
                height: auto !important;
            }

            .filosofi-pengertian-parent-2 {
                left: 10px !important;
                top: 680px !important;
            }

            .filosofi-pengertian-parent-3 {
                top: 885px !important;
                left: 10px !important;
            }

            .filosofi-pengertian-parent-4 {
                top: 1060px !important;
                left: 10px !important;
            }

            .filosofi-pengertian-logo {
                top: 0px !important;
                width: 100px !important;
                height: auto !important;
            }

            .filosofi-logo {
                width: 300px !important;
                height: auto !important;
                left: 3px !important;
                top: 120px !important;
            }

            .filosofi-text {
                width: 180px !important;
                left: 110px !important;
            }

            .filosofi-judul {
                left: -50px !important;
                font-size: 24px !important;
                width: 425px !important;
            }

            .filosofi-yuwaraja {
                font-size: 28px !important;
                left: 54px !important;
            }

            .doodle-panitia {
                left: -80px !important;
            }

            .doodle-panitia-2 {
                right: -80px !important;
            }

            .arrow-panitia {
                left: 215px !important;
                width: 90px !important;
                height: 160px !important;
                top: 2370px !important;
            }

            .line-panitia {
                left: 110px !important;
                top: 1240px !important;
                width: 100px !important;
                height: 3500px !important;
            }

            .image-kapel {
                width: 120px !important;
                height: 120px !important;
                left: 100px !important;
            }

            .image-wakapel {
                width: 120px !important;
                height: 120px !important;
                left: 188px !important;
                top: 2500px !important;
            }

            .image-sekretaris {
                width: 120px !important;
                height: 120px !important;
                left: 2px !important;
                top: 2570px !important;
            }

            .image-bendahara {
                width: 120px !important;
                height: 120px !important;
                left: 200px !important;
                top: 2670px !important;
            }

            .image-acara {
                width: 120px !important;
                height: 120px !important;
                left: 2px !important;
                top: 2715px !important;
            }

            .image-pit {
                width: 120px !important;
                height: 120px !important;
                left: 200px !important;
                top: 2800px !important;
            }

            .image-korlap {
                width: 120px !important;
                height: 120px !important;
                left: 2px !important;
                top: 2850px !important;
            }

            .image-ddm {
                width: 120px !important;
                height: 120px !important;
                left: 200px !important;
                top: 2940px !important;
            }

            .image-komblik {
                width: 120px !important;
                height: 120px !important;
                left: 2px !important;
                top: 2990px !important;
            }

            .image-perkap {
                width: 120px !important;
                height: 120px !important;
                left: 200px !important;
                top: 3080px !important;
            }

            .image-spv {
                width: 120px !important;
                height: 120px !important;
                left: 2px !important;
                top: 3120px !important;
            }

            .image-kesehatan {
                width: 120px !important;
                height: 120px !important;
                left: 200px !important;
                top: 3220px !important;
            }

            .image-konsumsi {
                width: 120px !important;
                height: 120px !important;
                left: 2px !important;
                top: 3270px !important;
            }

            .image-kestari {
                width: 120px !important;
                height: 120px !important;
                left: 200px !important;
                top: 3360px !important;
            }

            .body-parent {
                height: 3600px !important;
            }

            .judul-parent {
                left: 6px !important;
                top: 2236px !important;
            }

            .struktur-filosofi {
                left: 30px !important;
                font-size: 21px !important;
            }

            .yuwa-filosofi {
                font-size: 28px !important;
                left: 10px !important;
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
                        class="text-decoration-none text-reset d-flex align-items-center justify-content-center position-relative px-3 py-2 rounded-pill me-lg-1 ms-lg-3 text-nav-burger active"
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

    <div class="position-relative body-parent"
        style="
        width: 100%;
        height: 6181px;
        overflow: hidden;
        text-align: justify;
        font-size: 36px;
        color: #fff;
        font-family: Poppins;
      ">
        <img class="position-absolute animate-doodle-move doodle-panitia" alt=""
            src="{{ asset('images/landing-page/Doodle-filosofi.svg') }}"
            style="object-fit: cover; top: 2457px; width: 1440px; height: 3725px" />
        <img class="position-absolute animate-doodle-move doodle-panitia-2" alt=""
            src="{{ asset('images/landing-page/Doodle-filosofi.svg') }}"
            style="object-fit: cover; top: 2457px; width: 1440px; height: 3725px" />
        <img data-aos="fade-left" data-aos-duration="2000" class="position-absolute image-kestari" alt=""
            src="{{ asset('images/landing-page/KESTARI.svg') }}"
            style="
          top: 5753px;
          left: 894px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-right" data-aos-duration="2000" class="position-absolute image-konsumsi" alt=""
            src="{{ asset('images/landing-page/KONSUMSI.svg') }}"
            style="
          top: 5413px;
          left: 197px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-left" data-aos-duration="2000" class="position-absolute image-kesehatan" alt=""
            src="{{ asset('images/landing-page/KESEHATAN.svg') }}"
            style="
          top: 5241px;
          left: 913px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-right" data-aos-duration="2000" class="position-absolute image-spv" alt=""
            src="{{ asset('images/landing-page/SPV.svg') }}"
            style="
          top: 4901px;
          left: 197px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-left" data-aos-duration="2000" class="position-absolute image-perkap" alt=""
            src="{{ asset('images/landing-page/PERKAP.svg') }}"
            style="
          top: 4728px;
          left: 913px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-right" data-aos-duration="2000" class="position-absolute image-komblik" alt=""
            src="{{ asset('images/landing-page/KOMBLIK.svg') }}"
            style="
          top: 4324px;
          left: 197px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-left" data-aos-duration="2000" class="position-absolute image-ddm" alt=""
            src="{{ asset('images/landing-page/DDM.svg') }}"
            style="
          top: 4216px;
          left: 894px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-right" data-aos-duration="2000" class="position-absolute image-korlap" alt=""
            src="{{ asset('images/landing-page/KORLAP 2.svg') }}"
            style="
          top: 3905px;
          left: 197px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-left" data-aos-duration="2000" class="position-absolute image-pit" alt=""
            src="{{ asset('images/landing-page/PIT.svg') }}"
            style="
          top: 3704px;
          left: 894px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-right" data-aos-duration="2000" class="position-absolute image-acara" alt=""
            src="{{ asset('images/landing-page/ACARA.svg') }}"
            style="
          top: 3393px;
          left: 197px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-left" data-aos-duration="2000" class="position-absolute image-bendahara" alt=""
            src="{{ asset('images/landing-page/BENDAHARA.svg') }}"
            style="
          top: 3191px;
          left: 887px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-right" data-aos-duration="2000" class="position-absolute image-sekretaris"
            alt="" src="{{ asset('images/landing-page/SEKRETARIS.svg') }}"
            style="
          top: 2880px;
          left: 197px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="fade-left" data-aos-duration="2000" class="position-absolute image-wakapel" alt=""
            src="{{ asset('images/landing-page/WAKAPEL.svg') }}"
            style="
          top: 2693px;
          left: 857px;
          width: 350px;
          height: 350px;
          object-fit: cover;
        " />
        <img data-aos="flip-right" data-aos-duration="2000" class="position-absolute image-kapel" alt=""
            src="{{ asset('images/landing-page/KAPEL.svg') }}"
            style="
          top: 2348px;
          left: 540px;
          width: 351px;
          height: 351px;
          object-fit: cover;
        " />
        <img data-aos="fade-down" data-aos-duration="2000" class="position-absolute line-panitia" alt=""
            src="{{ asset('images/landing-page/Line.svg') }}"
            style="top: 2785.91px; left: 531.08px; width: 370.8px; height: 3135.1px" />
        <img data-aos="fade-up" data-aos-duration="2000" class="position-absolute arrow-panitia" alt=""
            src="{{ asset('images/landing-page/Arrow.svg') }}"
            style="
          top: 2447px;
          left: 894px;
          width: 203.5px;
          height: 225.7px;
          object-fit: contain;
        " />
        <div data-aos="zoom-in-down" data-aos-duration="2000" class="position-absolute judul-parent"
            style="
          top: 2206px;
          left: calc(50% - 336px);
          width: 673px;
          height: 136px;
          text-align: center;
        ">
            <b class="position-absolute struktur-filosofi" style="left: calc(50% - 224.5px)">STRUKTUR KEPANITIAAN</b>
            <b class="position-absolute yuwa-filosofi"
                style="top: 40px; left: calc(50% - 336.5px); font-size: 64px">YUWARAJA XVI 2024</b>
        </div>
        <div class="position-absolute filosofi-parent"
            style="
          top: 989px;
          left: 120px;
          width: 1201px;
          height: 1075px;
          font-size: 20px;
        ">
            <img data-aos="flip-left" data-aos-duration="2000" class="position-absolute filosofi-logo"
                alt="" src="{{ asset('images/landing-page/Logo Yuwa Filosofi.svg') }}"
                style="
            top: 267px;
            left: 0px;
            width: 635px;
            height: 769px;
            object-fit: cover;
          " />
            <div data-aos="fade-left" data-aos-duration="2000" class="position-absolute filosofi-pengertian-parent"
                style="top: 225px; left: 683px; width: 516px; height: 153px">
                <img class="position-absolute image-filosofi-surai" alt=""
                    src="{{ asset('images/landing-page/Filosofi Surai.svg') }}"
                    style="
              top: 0px;
              left: 0px;
              width: 123px;
              height: 153px;
              object-fit: cover;
            " />
                <b class="position-absolute filosofi-text"
                    style="
              top: 4px;
              left: 151px;
              display: inline-block;
              width: 365px;
              height: 120px;
            ">3
                    helai bulu di atas kepala merupakan penggambaran dari Tri Dharma
                    Perguruan Tinggi</b>
            </div>
            <div data-aos="fade-left" data-aos-duration="2000" class="position-absolute filosofi-pengertian-parent-2"
                style="top: 403px; left: 677px; width: 524px; height: 240px">
                <img class="position-absolute filosofi-pengertian-logo"
                    style="
              top: 54px;
              left: 0px;
              width: 123px;
              height: 153px;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Filosofi Kepala Kuda.svg') }}" />
                <b class="position-absolute filosofi-text"
                    style="
              top: 0px;
              left: 151px;
              display: inline-block;
              width: 373px;
              height: 240px;
            ">Kepala
                    kuda yang menghadap lurus ke depan melambangkan visi yang
                    jelas dan fokus ke masa depan. Representasi akan kekuatan,
                    ketahanan, dan keberanian dalam menghadapi tantangan yang ada di
                    masa yang akan datang</b>
            </div>
            <div data-aos="fade-left" data-aos-duration="2000" class="position-absolute filosofi-pengertian-parent-3"
                style="top: 702px; left: 676px; width: 522px; height: 153px">
                <img class="position-absolute image-filosofi-sayap"
                    style="
              top: 0px;
              left: 0px;
              width: 123px;
              height: 153px;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Filosofi Sayap.svg') }}" />
                <b class="position-absolute filosofi-text"
                    style="
              top: 0px;
              left: 149.21px;
              display: inline-block;
              width: 372.8px;
            ">2
                    sayap membentang mewakili 2 Departemen yang ada di Fakultas
                    Vokasi, dimana setiap orang dapat berkreasi dan mengekspresikan
                    diri</b>
            </div>
            <div data-aos="fade-left" data-aos-duration="2000" class="position-absolute filosofi-pengertian-parent-4"
                style="top: 920px; left: 676px; width: 523px; height: 155px">
                <img class="position-absolute filosofi-pengertian-logo"
                    style="
              top: 0px;
              left: 0px;
              width: 123px;
              height: 155px;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Filosofi.svg') }}" />
                <b class="position-absolute filosofi-text"
                    style="
              top: 2px;
              left: 149.26px;
              display: inline-block;
              width: 373.7px;
            ">Perisai
                    sebagai representasi makna Kindness, pelindung dan penyebar
                    kebaikan</b>
            </div>
            <div data-aos="flip-up" data-aos-duration="2000" class="position-absolute filosofi-judul"
                style="
            top: 0px;
            left: calc(50% - 333.5px);
            width: 673px;
            height: 131px;
            text-align: left;
            font-size: 32px;
          ">
                <b class="position-absolute" style="top: 0px; left: calc(50% - 98.5px)">FILOSOFI LOGO</b>
                <b class="position-absolute filosofi-yuwaraja"
                    style="top: 35px; left: calc(50% - 336.5px); font-size: 64px">YUWARAJA XVI 2024</b>
            </div>
        </div>
        <div class="position-absolute image-hover" style="top: 613px; left: -38px; width: 1510px; height: 328px">
            <div data-aos="zoom-in" data-aos-duration="5000" class="position-absolute image-parent-hover"
                style="
            top: 36.75px;
            left: 0px;
            width: auto;
            height: 253.5px;
            overflow-x: auto;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            gap: 20.3px;
          ">
                <img class="position-relative image-single-hover"
                    style="
              width: 215.4px;
              height: 253.5px;
              flex-shrink: 0;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Rectangle.png') }}" />
                <img class="position-relative image-single-hover"
                    style="
              width: 215.4px;
              height: 253.5px;
              flex-shrink: 0;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Rectangle 1.png') }}" />
                <img class="position-relative image-single-hover"
                    style="
              width: 215.4px;
              height: 253.5px;
              flex-shrink: 0;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Rectangle 2.png') }}" />
                <img class="position-relative image-single-hover"
                    style="
              width: 215.4px;
              height: 253.5px;
              flex-shrink: 0;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Rectangle 3.png') }}" />
                <img class="position-relative image-single-hover"
                    style="
              width: 215.4px;
              height: 253.5px;
              flex-shrink: 0;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Rectangle 4.png') }}" />
                <img class="position-relative image-single-hover"
                    style="
              width: 215.4px;
              height: 253.5px;
              flex-shrink: 0;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Rectangle 5.png') }}" />
                <img class="position-relative image-single-hover"
                    style="
              width: 215.4px;
              height: 253.5px;
              flex-shrink: 0;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/Rectangle 6.png') }}" />
            </div>
            <div class="position-absolute rectangle-image"
                style="
            top: 0px;
            left: 42px;
            border-radius: 50%;
            background-color: #a783bf;
            width: 1468px;
            height: 77px;
          ">
            </div>
            <div class="position-absolute rectangle-image-2"
                style="
            top: 252px;
            left: 42px;
            border-radius: 50%;
            background-color: #a782c0;
            width: 1468px;
            height: 76px;
          ">
            </div>
        </div>
        <div class="position-absolute tentang-parent"
            style="
          top: 33px;
          left: 138px;
          width: 1218px;
          height: 614px;
          font-size: 32px;
        ">
            <div class="position-absolute apa-itu-parent-2"
                style="top: 111px; left: 12px; width: 1206px; height: 503px">
                <div data-aos="fade-right" data-aos-duration="2000" class="position-absolute"
                    style="top: 0px; left: 0px; width: 839.6px; height: 462px">
                    <div class="position-absolute desc-parent"
                        style="
                top: 78px;
                left: 3px;
                font-weight: 600;
                display: inline-block;
                width: 641px;
              ">
                        Yuwaraja adalah kegiatan Pengenalan Kehidupan Kampus bagi
                        Mahasiswa Baru (PKKMB) yang diadakan oleh lembaga pendidikan
                        Vokasi universitas brawijaya. Kegiatan ini bertujuan untuk
                        memberikan pengenalan kepada mahasiswa baru sebagai bekal di dunia
                        perkuliahan.
                    </div>
                    <b class="position-absolute apa-itu-parent"
                        style="
                top: 0px;
                left: 0px;
                font-size: 42px;
                display: inline-block;
                width: 839.6px;
              ">Apa
                        itu PKKMB Yuwaraja?</b>
                </div>
                <img data-aos="fade-left" data-aos-duration="2000" class="position-absolute orang-tentang"
                    style="
              top: 12px;
              left: 715px;
              width: 491px;
              height: 491px;
              object-fit: cover;
            "
                    alt="" src="{{ asset('images/landing-page/man-shows-gesture-great-idea 1.svg') }}" />
            </div>
            <b data-aos="fade-down" data-aos-duration="2000" class="position-absolute tentang-judul"
                style="
            top: 0px;
            left: calc(50% - 609px);
            font-size: 55px;
            display: inline-block;
            text-align: center;
            width: 1155px;
          ">TENTANG
                YUWARAJA</b>
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
            <a href="" class="text-decoration-none text-reset">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
