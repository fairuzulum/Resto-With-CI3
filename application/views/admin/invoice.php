<div class="container-fluid">
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Invoice Pemesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor Pesanan</th>
                            <th>Nama Pemesan</th>
                            <th>Alamat</th>
                            <th>Tanggal Pemesanan</th>
                            <th style="text-align: center;">Aksi</th>
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
                            </tr>
                        </div>
                        <?php foreach ($invoice as $inv) : ?>
                            <tr>
                                <td><?= $inv->nomor_pesanan ?></td>
                                <td><?= $inv->nama ?></td>
                                <td><?= $inv->alamat ?></td>
                                <td><?= $inv->tgl_pesan ?></td>
                                <td style="text-align: center;"><?= anchor('invoicecontroller/detail/'.$inv->id, '<div class="btn btn-success btn-sm">
                                       Detail
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