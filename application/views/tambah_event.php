<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sertifikat Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="<?= base_url('Home') ?>"><img src="<?= base_url(); ?>assets/images/logo.svg" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="<?= base_url('Home') ?>"><img src="<?= base_url(); ?>assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="<?= base_url(); ?>assets/images/faces/face15.jpg" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">Admin</h5>
                                <span>Admin Member</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= base_url('Home') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <!-- <span class="menu-icon">
                <i class="mdi mdi-laptop"></i> -->
                        </span>
                        <span class="menu-title">Menu Data</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?= base_url('data_event') ?>">Data Event</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Sertifikat</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Assigment Sertifikat</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?php base_url(); ?>login/logout">
                        <span class="menu-icon">
                            <i class="mdi mdi-logout text-danger"></i>
                        </span>
                        <span class="menu-title">logout</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url(); ?>assets/images/logo-mini.svg" alt="logo" /></a>
                    
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>

                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="<?= base_url(); ?>assets/images/faces/face15.jpg" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name"></p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>

                    </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="main-panel">
                        <div class="page-header">
                            <h3 class="page-title"> Form Tambah Event </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Tambah Event</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Form Tambah Event</h4>
                                                <form action="<?= base_url('data_event/tambah_aksi') ?>" method="POST">
                                                    <div class="form-group">
                                                        <label for="event_name">Name</label>
                                                        <input type="text" class="form-control" id="event_name" name="event_name" placeholder="Event Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="event_date">Event Date</label>
                                                        <input type="date" class="form-control" id="event_date" name="event_date" placeholder="Event Date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="location">Location</label>
                                                        <textarea class="form-control" id="location" name="location" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="organizer">Organizer</label>
                                                        <input type="text" class="form-control" id="organizer" name="organizer" placeholder="Organizer">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    <button type="reset" class="btn btn-dark">Batal</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html -->
                        <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
                        <!-- partial -->
                        <!-- main-panel ends -->
                    </div>
                    <!-- page-body-wrapper ends -->
                </div>
                <!-- container-scroller -->
                <!-- plugins:js -->
                <script src="assets/vendors/js/vendor.bundle.base.js"></script>
                <!-- endinject -->
                <!-- Plugin js for this page -->
                <script src="<?= base_url(); ?>/assets/vendors/chart.js/Chart.min.js"></script>
                <script src="<?= base_url(); ?>/assets/vendors/progressbar.js/progressbar.min.js"></script>
                <script src="<?= base_url(); ?>/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
                <script src="<?= base_url(); ?>/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                <script src="<?= base_url(); ?>/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
                <!-- End plugin js for this page -->
                <!-- inject:js -->
                <script src="<?= base_url(); ?>/assets/js/off-canvas.js"></script>
                <script src="<?= base_url(); ?>/assets/js/hoverable-collapse.js"></script>
                <script src="<?= base_url(); ?>/assets/js/misc.js"></script>
                <script src="<?= base_url(); ?>/assets/js/settings.js"></script>
                <script src="<?= base_url(); ?>/assets/js/todolist.js"></script>
                <!-- endinject -->
                <!-- Custom js for this page -->
                <script src="<?= base_url(); ?>/assets/js/dashboard.js"></script>
                <!-- End custom js for this page -->
</body>

</html>