<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $this->renderSection('title') ?> Simpakal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="user/lib/animate/animate.min.css" />
    <link href="user/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="user/css/style.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="user/img/logokab.png">

    <?= $this->renderSection('styles') ?>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="https://www.google.co.id/maps/place/Kalapanunggal,+Sukabumi+Regency,+West+Java/@-6.8101822,106.6248764,13z/data=!3m1!4b1!4m6!3m5!1s0x2e682cdae7a05063:0xb4faade38b49fea5!8m2!3d-6.8071649!4d106.6547348!16s%2Fg%2F1q54w14bq?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" class="text-muted small me-4" target="_blank">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>Temukan Lokasi</a>
                    <a href="https://wa.me/6282122506110" class="text-muted small me-4" target="_blank"><i class="fas fa-phone-alt text-primary me-2"></i>Hubungi Kami</a>
                    <a href="mailto:Simpakal@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>Kirim Email</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Masuk</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="text-primary"><i class="fas fa-globe me-3"></i>Simpakal</h1>
                <!-- <img src="user/img//logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <?= $this->renderSection('navbar') ?>

        </nav>

        <?= $this->renderSection('content-carousel') ?>

    </div>
    <!-- Navbar & Hero End -->

    <?= $this->renderSection('content-main') ?>

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <h4 class="text-white"><i class="fas fa-globe me-3"></i>Simpakal</h4>
                            <!-- <img src="user/img//logo.png" alt="Logo"> -->
                        </a>
                        <p class="mb-4">Sebuah platform berbasis web yang dirancang untuk mengelola dan menampilkan potensi sumber daya yang ada di kecamatan Kalapanunggal.</p>
                        <div class="d-flex">
                            <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                                <i class="fas fa-apple-alt text-white"></i>
                                <div class="ms-3">
                                    <small class="text-white">Download on the</small>
                                    <h6 class="text-white">App Store</h6>
                                </div>
                            </a>
                            <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                <i class="fas fa-play text-primary"></i>
                                <div class="ms-3">
                                    <small class="text-white">Get it on</small>
                                    <h6 class="text-white">Google Play</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Navigasi Kilat</h4>
                        <a href="/about"><i class="fas fa-angle-right me-2"></i> Tentang</a>
                        <a href="/potensi"><i class="fas fa-angle-right me-2"></i> Potensi</a>
                        <a href="/umkm"><i class="fas fa-angle-right me-2"></i> Berita</a>
                        <a href="/kontak"><i class="fas fa-angle-right me-2"></i> Kontak</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Bantuan</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Informasi</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">Kelurahan Kalapanunggal</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">kecklp@gmail.com</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">(+012) 3456 7890</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fab fa-firefox-browser text-primary me-3"></i>
                            <p class="text-white mb-0">www.simpakal.com</p>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Simpakal 2024</a> Sistem Manajemen Potensi Kalapanunggal All right reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="user/lib/wow/wow.min.js"></script>
    <script src="user/lib/easing/easing.min.js"></script>
    <script src="user/lib/waypoints/waypoints.min.js"></script>
    <script src="user/lib/counterup/counterup.min.js"></script>
    <script src="user/lib/lightbox/js/lightbox.min.js"></script>
    <script src="user/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="user/js/main.js"></script>

    <?= $this->renderSection('scripts') ?>
</body>

</html>