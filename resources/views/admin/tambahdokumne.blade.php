!
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Dokumen</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/tambahdokumen">
                            <i class="bi bi-circle"></i><span>Tambah Dokumen</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Daftar Dokumen</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->


        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tambahkan Dokumen</h5>

                                <!-- Vertical Form -->
                                <form class="row g-3" action="/adddokumen" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label class="col-sm-2 col-form-label">Select</label>
                                        <select class="form-select" aria-label="Default select example" name="jenis_dokumen">
                                            <option selected>-- Pilih Jenis Dokumen --</option>
                                            @foreach ($jenis as $item)
                                                <option value="{{ $item->jenis_dokumen }}">{{ $item->jenis_dokumen }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail4" class="form-label">Nomor</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="nomor">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Tahun</label>
                                        <input type="number" class="form-control" id="inputPassword4"
                                            name="tahun">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="inputAddress" name="judul">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">T.E.U</label>
                                        <input type="text" class="form-control" id="inputAddress" name="teu">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Singkatan Jenis</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            name="singkatan">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Tempat Terbit</label>
                                        <input type="text" class="form-control" id="inputAddress" name="tempat">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Tanggal Penetapan</label>
                                        <input type="date" class="form-control" id="inputAddress"
                                            name="tanggal_tetap">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Tanggal Pengundangan</label>
                                        <input type="date" class="form-control" id="inputAddress"
                                            name="tanggal_pengundangan">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Subyek</label>
                                        <input type="text" class="form-control" id="inputAddress" name="subyek">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Pemrakrasa</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            name="pemrakarsa">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Sumber</label>
                                        <input type="text" class="form-control" id="inputAddress" name="sumber">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Urusan Pemerintahan</label>
                                        <input type="text" class="form-control" id="inputAddress" name="urusan">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Bidang Hukum</label>
                                        <input type="text" class="form-control" id="inputAddress" name="bidang">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Bahasa</label>
                                        <input type="text" class="form-control" id="inputAddress" name="bahasa">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Abstrak</label>
                                        <input type="text" class="form-control" id="inputAddress" name="abstrak">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Dokumen Pendukung</label>
                                        <input type="file" class="form-control" id="inputAddress" name="dokumen">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form><!-- Vertical Form -->

                            </div>
                        </div>
                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
