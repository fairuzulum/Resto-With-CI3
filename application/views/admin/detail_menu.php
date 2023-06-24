<div class="container-fluid">
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url() . 'uploads/' . $menus->gambar ?>" class="card-img" alt="...">

            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4">

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Kategori</li>
                                <li class="list-group-item"><?= $menus->category ?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Harga</li>
                                <li class="list-group-item">Rp<?= number_format($menus->harga,  0, ',', '.') ?></li>
                            </ul>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Status</li>
                                <li class="list-group-item"><?= $menus->status ?></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <ul class="list-group list-group-flush">
                            <h3 class="card-title" style="color: black;"><?= $menus->nama_menu ?></h3>
                            <p class="card-text"><?= $menus->keterangan ?></p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="<?= base_url('admin/data_menu')?>" class="btn btn-sm btn-primary shadow"><i class="fas fa-arrow-left fa-sm"></i> Kembali</a>
</div>
