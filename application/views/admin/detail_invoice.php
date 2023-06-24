<div class="container-fluid">
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary mb-3">Detail Pesanan</h6>
            <div class="btn btn-sm btn-primary mb-3">No. Pesanan: <?= $invoice->nomor_pesanan ?></div>
            <h6 class="m-0 font-weight-bold text-primary mb-3">Metode Pembayaran: <?= $invoice->metode_pembayaran ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" width="100%" cellspacing="0">
                    <thead style="text-align: center;">
                        <tr>
                            <th>No</th>
                            <th>Nama Menu</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga Satuan</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        $total = 0;
                        foreach ($pesanan as $psn) :
                            $subtotal = $psn->jumlah * $psn->harga;
                            $total += $subtotal;
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $psn->nama_menu ?></td>
                                <td align="center"><?= $psn->jumlah ?></td>
                                <td>Rp<?= number_format($psn->harga,0, ',', '.') ?></td>
                                <td>Rp<?= number_format($subtotal,0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                            <tr>
                                <td colspan="4" align="center">Total</td>
                                <td align="right">Rp<?= number_format($total,0, ',', '.') ?></td>
                            </tr>
                    </tbody>
                </table>
                <a href="<?= base_url('admin/invoice') ?>">
            
                <div class="btn btn-sm btn-primary">
                            Kembali
                </div></a>
            </div>
        </div>
    </div>
</div>