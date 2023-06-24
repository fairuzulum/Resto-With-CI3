<div class="container-fluid">
    <button type="button" class="btn btn-sm btn-primary shadow mb-2" data-toggle="modal" data-target="#tambah_chefs"><i class="fas fa-plus fa-sm"></i> Tambah Chefs Baru</button>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Chefs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Profesi</th>
                            <th colspan="3" style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($chefs as $cfs) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td align="center"><img src="<?= base_url('uploads/' . $cfs->gambar) ?>" alt="<?= $cfs->nama ?>" style="max-width: 100px;"></td>
                                <td><?= $cfs->nama ?></td>
                                <td><?= $cfs->profesi ?></td>
                                <td align="center">
                                    <?= anchor('chefscontroller/detail_chefs/' . $cfs->id_chefs, '<div class="btn btn-success btn-sm">
                                        <i class="fa fa-search-plus"></i>
                                    </div>') ?>
                                </td>
                                <td align="center">
                                    <?= anchor('chefscontroller/edit/' . $cfs->id_chefs, '<div class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </div>') ?>

                                </td>
                                <td align="center">
                                    <?= anchor('chefscontroller/hapus/' . $cfs->id_chefs, '<div class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
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

<div class="modal fade" id="tambah_chefs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Chefs</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= validation_errors(); ?>
                <form action="<?= base_url() . 'chefscontroller/tambah'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Chefs</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label>Profesi</label>
                        <input type="text" name="profesi" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="category">Gender:</label>
                        <select class="form-control" name="gender">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label>No Telepon</label>
                        <input type="text" name="nomor_telepon" class="form-control">
                    </div>
                    <hr>
                    <p style="font-weight: bold;">Sosial Media</p>
                    <hr>
                    <div class="form-group mt-2">
                        <label>Facebook</label>
                        <input type="text" name="facebook" class="form-control" placeholder="(link sosial media anda)">
                    </div>
                    <div class="form-group mt-2">
                        <label>Twitter</label>
                        <input type="text" name="twitter" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label>Instagram</label>
                        <input type="text" name="instagram" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label>Linkedin</label>
                        <input type="text" name="linkedin" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label>Foto</label>
                        <input type="file" name="gambar" class="form-control-file">
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