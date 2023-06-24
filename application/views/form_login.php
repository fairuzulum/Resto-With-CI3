<!doctype html>
<html lang="en">

<head>
    <title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets2/css/style.css">
    <style>
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: -1;
        }

        body {
            background-image: url('<?= base_url() ?>assets2/images/bg-dimsum.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(<?= base_url() ?>assets2/images/dimsum.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Login</h3>
                                </div>
                            </div>
                            <?= $this->session->flashdata('pesan'); ?>
                            <form action="<?= base_url('auth/login') ?>" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    <?= form_error('username','<div class="text-danger small">','</div>' ) ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    <?= form_error('password','<div class="text-danger small">','</div>' ) ?>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                                </div>

                            </form>
                            <p class="text-center">Belum punya akun? <a  href="<?= base_url('registrasi') ?>">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>assets2/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets2/js/popper.js"></script>
    <script src="<?= base_url() ?>assets2/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets2/js/main.js"></script>

</body>

</html>