<div class="container-fluid">
    <button type="button" class="btn btn-sm btn-primary shadow" data-toggle="modal" data-target="#tambah_meja"><i class="fas fa-plus fa-sm"></i> Tambah Meja</button>

    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <?= $this->session->flashdata('pesan'); ?>
            <h6 class="m-0 font-weight-bold text-primary">Data Meja</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor Meja</th>
                            <th>Status</th>
                            <th colspan="2" style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div style="display: none;">
                            <tr style="display: none;">
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </div>
                        <?php
                        foreach ($tables as $table) : ?>
                            <tr>
                                <td>Meja Nomor <?= $table->nomor_meja ?></td>
                                <td><?= $table->status ?></td>
                                <td align="center">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_meja_<?= $table->id ?>">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </td>

                                <td align="center">
                                    <?= anchor('mejacontroller/hapus/' . $table->id, '<div class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                                    <i class="fa fa-trash"></i>
                                    </div>') ?>
                                </td>
                            </tr>

                            <!-- MODAL  -->
                            <div class="modal fade" id="edit_meja_<?= $table->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Meja Nomor <?= $table->nomor_meja ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('mejacontroller/update/' . $table->id) ?>" method="post">
                                                <div class="form-group">
                                                    <label for="nomor_meja">Nomor Meja</label>
                                                    <input type="number" class="form-control" id="nomor_meja" name="nomor_meja" value="<?= $table->nomor_meja ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status:</label>
                                                    <select class="form-control" name="status">
                                                        <option value="Tersedia">Tersedia</option>
                                                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_meja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Meja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= validation_errors(); ?>
                <form action="<?= base_url() . 'mejacontroller/tambah'; ?>" method="post">
                    <div class="form-group">
                        <label for="nomor_meja">Nomor Meja</label>
                        <input type="number" name="nomor_meja" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
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

<!-- Button trigger modal -->

<!-- Modal -->