<div class="container-fluid">
    <?= $this->session->flashdata('pesan') ?>
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3" >
            <h6 class="m-0 font-weight-bold text-primary" >Data Reserfasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Meja</th>
                            <th>Tanggal</th>
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
                             
                            </tr>
                        </div>
                        <?php
                        $no = 1;
                        foreach ($reservations as $reservation) :

                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $reservation->nama ?></td>
                                <td align="center"><?= $reservation->nomor_meja ?></td>
                                <td><?= $reservation->tanggal ?></td>
                                <td align="center">
                                    <?= anchor('reservationcontroller/detail_reservation/' . $reservation->id, '<div class="btn btn-success btn-sm">
                                        <i class="fa fa-search-plus"></i>
                                    </div>') ?>
                                </td>
                                <td align="center">
                                    <?= anchor('reservationcontroller/hapus/' . $reservation->id, '<div class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
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