<div class="container-fluid">
<?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pesan Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th colspan="2" style="text-align: center;">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div style="display: none;">
                            <tr style="display: none;">
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                            </tr>
                        </div>
                        <?php
                        $no = 1;
                        foreach ($pesan as $psn) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $psn->nama ?></td>
                                <td><?= $psn->email ?></td>
                                <td align="center"><a style="width: 65px;" class="btn btn-sm btn-success" href="<?= base_url('pesancontroller/detail_pesan/') . $psn->id ?>">Cek</a></td>
                                <td align="center">
                                    <a style="width: 65px;" class="btn btn-sm btn-danger" href="<?= base_url('pesancontroller/hapus/') . $psn->id ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>