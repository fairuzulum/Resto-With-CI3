<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">
        </div>

        <div class="languages d-none d-md-flex align-items-center">
            <ul class="mt-3">
                <li><h3 style="font-family: 'Poppins', sans-serif; color: white;"> <?= isset($pelanggan) ? 'Welcome, ' . $pelanggan->nama : '' ?></h3></li>
            </ul>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="http://localhost/restaurant/#">Dimsumicious</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="<?= base_url() ?>#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url() ?>#about">About</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url() ?>#menu">Menu</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url() ?>#book-a-table">Reservation</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url() ?>#chefs">Cheff</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url() ?>#contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url() ?>#gallery">Gallery</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <ul class="na navbar-nav navbar-right">
            <?php if ($this->session->userdata('role_id') == 2) { ?>
                <li><?php echo anchor('auth/logout', '<div class="book-a-table-btn scrollto d-none d-lg-flex text-center">Logout</div>') ?></li>
            <?php } else { ?>

                <li><?php echo anchor('auth/login', '<div class="book-a-table-btn scrollto d-none d-lg-flex">Login</div>'); ?></li>
            <?php } ?>
        </ul>


    </div>
</header><!-- End Header -->