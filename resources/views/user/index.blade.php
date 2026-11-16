<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KHV Vet - Klinik Hewan Kesayangan Anda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets-user/img/favicon.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets-user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/style.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Header Baru (Hijau Toska & Pojok Kiri-Kanan) -->
    <header style="background-color: #138477; padding: 14px 0; width: 100%;">
        <div style="width: 100%; padding: 0 30px; display: flex; justify-content: space-between; align-items: center;">

            <!-- Logo Pojok Kiri -->
            <a href="{{ url('/') }}" style="display: flex; align-items: center; text-decoration: none;">
                <img src="{{ asset('assets-user/img/logo-khv.png') }}" alt="KHV Vet" style="max-height: 45px;">
            </a>

            <!-- Menu Pojok Kanan (Daftar & Masuk) -->
            <div style="display: flex; align-items: center; gap: 25px;">
                <a href="#" style="color: #ffffff; font-weight: 600; font-size: 15px; text-decoration: none;">
                    Daftar
                </a>
                <a href="#" style="color: #ffffff; font-weight: 600; font-size: 15px; text-decoration: none;">
                    Masuk
                </a>
            </div>

        </div>
    </header>

    <!-- Hero Section Bersih & Proporsional -->
    <section
        style="min-height: calc(100vh - 73px); display: flex; align-items: center; background-color: #ffffff; padding: 40px 0;">
        <div class="container">
            <div class="row align-items-center">

                <!-- Kolom Kiri: Gambar Kucing -->
                <div class="col-lg-6 col-md-6 text-center mb-4 mb-md-0">
                    <img src="{{ asset('assets-user/img/banner/cat.png') }}" alt="Anabul"
                        style="width: 100%; max-width: 480px; height: auto; object-fit: contain;">
                </div>

                <!-- Kolom Kanan: Teks & Tombol -->
                <div class="col-lg-6 col-md-6" style="padding-left: 30px;">
                    <h1
                        style="font-weight: 800; font-size: 46px; line-height: 1.2; color: #0f172a; margin-bottom: 20px;">
                        Rumah Kedua yang Penuh Kasih untuk Anabul Kesayangan Anda.
                    </h1>
                    <p
                        style="color: #64748b; font-size: 16px; line-height: 1.7; margin-bottom: 32px; max-width: 500px;">
                        Karena mereka bukan sekadar hewan peliharaan, tapi bagian dari keluarga. Kami di KHV siap
                        menjaga senyum dan kesehatan mereka setiap hari.
                    </p>
                    <a href="#"
                        style="display: inline-block; background-color: #138477; color: #ffffff; padding: 14px 34px; border-radius: 50px; font-weight: 600; font-size: 15px; text-decoration: none; box-shadow: 0 4px 14px rgba(19, 132, 119, 0.25);">
                        contact us →
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Layanan Kami untuk Anabul</h3>
                        <p>Perawatan menyeluruh dengan dokter hewan berpengalaman dan fasilitas nyaman untuk
                            menjaga
                            kesehatan hewan kesayangan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="{{ asset('assets-user/img/service/service_icon_1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Pemeriksaan & Vaksinasi</h3>
                            <p>Konsultasi kesehatan rutin, diagnosa penyakit, serta vaksinasi lengkap untuk
                                mencegah
                                virus berbahaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="{{ asset('assets-user/img/service/service_icon_2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Pet Hotel & Penitipan</h3>
                            <p>Penitipan anabul yang aman, bersih, dan terawasi langsung oleh tim medis
                                selama Anda
                                bepergian.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="{{ asset('assets-user/img/service/service_icon_3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3>Grooming & Perawatan</h3>
                            <p>Perawatan kebersihan bulu, mandi sehat, potong kuku, dan pembersihan telinga
                                agar anabul
                                tetap segar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- pet_care_area_start  -->
    <div class="pet_care_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="{{ asset('assets-user/img/about/pet_care.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="pet_info">
                        <div class="section_title">
                            <h3><span>We care your pet </span> <br>
                                As you care</h3>
                            <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do <br> iusmod
                                tempor incididunt
                                ut labore et dolore magna aliqua. <br> Quis ipsum suspendisse ultrices
                                gravida. Risus
                                commodo <br>
                                viverra maecenas accumsan.</p>
                            <a href="#" class="boxed-btn3">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pet_care_area_end  -->

    <!-- adapt_area_start  -->
    <div class="adapt_area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="adapt_help">
                        <div class="section_title">
                            <h3><span>We need your</span>
                                help Adopt Us</h3>
                            <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do iusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                            <a href="#" class="boxed-btn3">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="adapt_about">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="{{ asset('assets-user/img/adapt_icon/1.png') }}" alt="">
                                    <div class="adapt_content">
                                        <h3 class="counter">452</h3>
                                        <p>Pets Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="{{ asset('assets-user/img/adapt_icon/3.png') }}" alt="">
                                    <div class="adapt_content">
                                        <h3><span class="counter">52</span>+</h3>
                                        <p>Pets Available</p>
                                    </div>
                                </div>
                                <div class="single_adapt text-center">
                                    <img src="{{ asset('assets-user/img/adapt_icon/2.png') }}" alt="">
                                    <div class="adapt_content">
                                        <h3><span class="counter">52</span>+</h3>
                                        <p>Pets Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- adapt_area_end  -->

    <!-- testmonial_area_start  -->
    <div class="testmonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="textmonial_active owl-carousel">
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="{{ asset('assets-user/img/testmonial/1.png') }}" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Jhon Walker</h4>
                                    <span>Head of web design</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis
                                        nostrud exerci.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="{{ asset('assets-user/img/testmonial/1.png') }}" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Jhon Walker</h4>
                                    <span>Head of web design</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis
                                        nostrud exerci.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="{{ asset('assets-user/img/testmonial/1.png') }}" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Jhon Walker</h4>
                                    <span>Head of web design</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis
                                        nostrud exerci.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end  -->

    <!-- team_area_start  -->
    <div class="team_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Our Team</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="{{ asset('assets-user/img/team/1.png') }}" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Rala Emaia</h4>
                                <p>Senior Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="{{ asset('assets-user/img/team/2.png') }}" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>jhon Smith</h4>
                                <p>Senior Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="{{ asset('assets-user/img/team/3.png') }}" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Rala Emaia</h4>
                                <p>Senior Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team_area_end  -->

    <div class="contact_anipat anipat_bg_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact_text text-center">
                        <div class="section_title text-center">
                            <h3>Why go with Anipat?</h3>
                            <p>Because we know that even the best technology is only as good as the people
                                behind it.
                                24/7 tech support.</p>
                        </div>
                        <div class="contact_btn d-flex align-items-center justify-content-center">
                            <a href="#" class="boxed-btn4">Contact Us</a>
                            <p>Or <a href="#"> +880 4664 216</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Us
                            </h3>
                            <ul class="address_line">
                                <li>+555 0000 565</li>
                                <li><a href="#">Demomail@gmail.Com</a></li>
                                <li>700, Green Lane, New York, USA</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Servces
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pet Insurance</a></li>
                                <li><a href="#">Pet surgeries </a></li>
                                <li><a href="#">Pet Adoption</a></li>
                                <li><a href="#">Dog Insurance</a></li>
                                <li><a href="#">Dog Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Quick Link
                            </h3>
                            <ul class="links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Login info</a></li>
                                <li><a href="#">Knowledge Base</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('assets-user/img/logo.png') }}" alt="">
                                </a>
                            </div>
                            <p class="address_text">239 E 5th St, New York
                                NY 10003, USA
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="bordered_1px"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="{{ asset('assets-user/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets-user/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/scrollIt.js') }}"></script>
    <script src="{{ asset('assets-user/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/plugins.js') }}"></script>
    <script src="{{ asset('assets-user/js/gijgo.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('assets-user/js/contact.js') }}"></script>
    <script src="{{ asset('assets-user/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets-user/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/mail-script.js') }}"></script>

    <script src="{{ asset('assets-user/js/main.js') }}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        var timepicker = $('#timepicker').timepicker({
            format: 'HH.MM'
        });
    </script>
</body>

</html>
