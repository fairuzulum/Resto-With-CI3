<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>gender</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th colspan="2" style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div style="display: none;">
                            <tr style="display: none;">
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                            </tr>
                        </div>
                        <?php
                        $no = 1;
                        foreach ($pelanggan as $plg) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $plg->nama ?></td>
                                <td><?= $plg->gender ?></td>
                                <td><?= $plg->alamat ?></td>
                                <td><?= $plg->email ?></td>
                                <td><?= $plg->nomor_telepon ?></td>
                                <td align="center">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_pelanggan_<?= $plg->id ?>">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </td>
                                <td align="center">
                                    <?= anchor('pelanggancontroller/hapus/' . $plg->id, '<div class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                                    <i class="fa fa-trash"></i>
                                    </div>') ?>
                                </td>
                            </tr>
                            <div class="modal fade" id="edit_pelanggan_<?= $plg->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data Pelanggan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('pelanggancontroller/update/' . $plg->id) ?>" method="post">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $plg->nama ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Gender:</label>
                                                    <select class="form-control" name="gender">
                                                        <option value="Laki-Laki" <?= $plg->gender == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                                                        <option value="Perempuan" <?= $plg->gender == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" value="<?= $plg->alamat ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" value="<?= $plg->email ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>No Telepon</label>
                                                    <input type="text" class="form-control" name="nomor_telepon" value="<?= $plg->nomor_telepon ?>">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Edit</button>
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
