<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>assets3/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets3/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body {
            background-image: url('<?= base_url() ?>assets3/images/image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .form-submit {
            background-color: white !important;
        }

        .btn {
            width: 150px;
        }

        h3 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
        }
    </style>
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <div class="signup-content">
                            <form action="<?= base_url('registrasi') ?>" method="post" id="signup-form" class="signup-form">
                                <h3 class="mb-5">Daftar Akun</h3>
                                <div class="form-group">
                                    <input type="text" class="form-input" name="nama" id="name" placeholder="Your Name" />
                                    <?= form_error('nama', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="gender">
                                        <option selected disabled>Gender</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <?= form_error('gender', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-input" name="email" id="name" placeholder="Email" />
                                    <?= form_error('email', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-input" name="nomor_telepon" id="name" placeholder="Nomor Telepon" />
                                    <?= form_error('nomor_telepon', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-input" name="alamat" id="name" placeholder="Alamat" />
                                    <?= form_error('alamat', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-input" name="username" id="name" placeholder="Username" />
                                    <?= form_error('username', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-input" name="password_1" id="password" placeholder="Password" />
                                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                                    <?= form_error('password_1', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-input" name="password_2" id="re_password" placeholder="Repeat your password" />
                                    <?= form_error('password_2', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </div>
                            </form>
                            <p class="loginhere">
                                Sudah punya akun? <a href="<?= base_url('auth/login') ?>" class="loginhere-link">Login disini</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>

            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url() ?>assets3/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets3/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>