<section style="background-color: #eee;">

    <div class="container py-5">
<a href="<?= base_url('admin/data_chefs')?>" class="btn btn-sm btn-primary shadow mb-1"><i class="fas fa-arrow-left fa-sm"></i> Kembali</a>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?= base_url('uploads/' . $chefs->gambar) ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama : </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $chefs->nama ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Profesi : </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $chefs->profesi ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Gender : </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $chefs->gender ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No Telepon</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $chefs->nomor_telepon ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $chefs->alamat ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex align-items-center p-3">
                                    <i class="fab fa-linkedin fa-lg" style="color: #333333;"></i>&nbsp;&nbsp;
                                    <a class="mb-0" href="<?= $chefs->linkedin ?>"><?= $chefs->linkedin ?></a>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-3">
                                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>&nbsp;&nbsp;
                                    <a class="mb-0" href="<?= $chefs->twitter ?>"><?= $chefs->twitter ?></a>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-3">
                                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>&nbsp;&nbsp;
                                    <a class="mb-0" href="<?= $chefs->instagram ?>"><?= $chefs->instagram ?></a>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-3">
                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>&nbsp;&nbsp;
                                    <a class="mb-0" href="<?= $chefs->facebook ?>"><?= $chefs->facebook ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>