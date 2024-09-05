<?= $this->extend('template/template') ?>

<?= $this->section('title') ?>Pertambangan<?= $this->endSection() ?>

<?= $this->section('navbar') ?>

<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
        <a href="/" class="nav-item nav-link ">Beranda</a>
        <a href="/about" class="nav-item nav-link">Tentang</a>
        <a href="/potensi" class="nav-item nav-link ">Potensi</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link active" data-bs-toggle="dropdown">
                <span class="dropdown-toggle">Berita Terbaru</span>
            </a>
            <div class="dropdown-menu m-0">
                <a href="/umkm" class="dropdown-item">UMKM</a>
                <a href="/pertambangan" class="dropdown-item ">Pertambangan</a>
            </div>
        </div>
        <a href="/kontak" class="nav-item nav-link">Kontak</a>
    </div>
    <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a> -->
</div>

<?= $this->endSection() ?>

<?= $this->section('content-carousel') ?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Blog</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<?= $this->endSection() ?>

<?= $this->section('content-main') ?>

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Blog & News</h4>
            <h1 class="display-5 mb-4">Articles For Pro Traders</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="user/img/service-1.jpg" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="user/img/testimonial-1.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="user/img/service-2.jpg" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Non-Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="user/img/testimonial-2.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="user/img/service-3.jpg" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="user/img/testimonial-3.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="user/img/service-4.jpg" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Non-Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="user/img/testimonial-1.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<?= $this->endSection() ?>