<?= $this->extend('template/template') ?>

<?= $this->section('title') ?>UMKM<?= $this->endSection() ?>

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
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Features</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Feature</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<?= $this->endSection() ?>

<?= $this->section('content-main') ?>

<!-- Features Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Features</h4>
            <h1 class="display-5 mb-4">Connecting businesses, ideas, and people for greater impact.</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-chart-line fa-4x text-primary"></i>
                    </div>
                    <h4>Global Management</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-university fa-4x text-primary"></i>
                    </div>
                    <h4>Corporate Banking</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-file-alt fa-4x text-primary"></i>
                    </div>
                    <h4>Asset Management</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                    </div>
                    <h4>Investment Bank</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<?= $this->endSection() ?>