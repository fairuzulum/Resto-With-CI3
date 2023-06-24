<div class="container-fluid">
    <button type="button" class="btn btn-sm btn-primary shadow mb-2" data-toggle="modal" data-target="#tambah_menu"><i class="fas fa-plus fa-sm"></i> Tambah Menu</button>
    <?= $this->session->flashdata('pesan'); ?>

    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Menu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Menu</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th colspan="3" style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div style="display: none;">
                            <tr style="display: none;">
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                            </tr>
                        </div>
                        <?php
                        $no = 1;
                        foreach ($menus as $menu) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $menu->nama_menu ?></td>
                                <td><?= $menu->category ?></td>
                                <td><?= $menu->status ?></td>
                                <td align="center">
                                    <?= anchor('menucontroller/detail_menu/' . $menu->id_menu, '<div class="btn btn-success btn-sm">
                                        <i class="fa fa-search-plus"></i>
                                    </div>') ?>
                                </td>
                                <td>
                                    <?= anchor('menucontroller/edit/' . $menu->id_menu, '<div class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </div>') ?>

                                </td>
                                <td align="center">
                                    <?= anchor('menucontroller/hapus/' . $menu->id_menu, '<div class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                                    <i class="fa fa-trash"></i>
                                    </div>') ?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= validation_errors(); ?>
                <form action="<?= base_url() . 'menucontroller/tambah'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama Menu</label>
                        <input type="text" name="nm_menu" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori:</label>
                        <select class="form-control" name="category">
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="stok">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar Makanan</label><br>
                        <input type="file" name="gambar" id="gambar" class="form-control" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>