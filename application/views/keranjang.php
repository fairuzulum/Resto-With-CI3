<section class="breadcrumbs">
    <div class="container">
        <div class="cart d-flex justify-content-between align-items-center">
            <h2>Detail Pemesanan</h2>
        </div>
    </div>
</section>

<div class="container">
    <?php if (!empty($cart)) : ?>
        <table class="table" border="1px solid white">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Sub Total</th>
                    <th>Aksi</th> <!-- Tambah kolom aksi -->
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($cart as $items) :
                ?>
                    <tr style="color: white;">
                        <td><?= $no++ ?></td>
                        <td><?= $items['name'] ?></td>
                        <td align="center">
                            <!-- Ubah input menjadi form untuk mengedit kuantitas -->
                            <form action="<?= base_url('pemesanancontroller/ubah_keranjang') ?>" method="post" class="d-flex justify-content-center align-items-center">
                                <input type="hidden" name="rowid" value="<?= $items['rowid'] ?>">
                                <div class="input-group">
                                    <input type="number" name="qty" value="<?= $items['qty'] ?>" min="1" class="form-control text-center">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary btn-xs">Ubah</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td align="right">Rp<?= number_format($items['price'], 0, ',', '.') ?></td>
                        <td align="right">Rp<?= number_format($items['subtotal'], 0, ',', '.') ?></td>
                        <td style="text-align: center;">
                            <!-- Tambah tombol hapus -->
                            <a href="<?= base_url('pemesanancontroller/hapus_item_keranjang/'.$items['rowid']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" align="center">Total</td>
                    <td align="right">Rp<?= number_format($this->cart->total(), 0, ',', '.') ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="cart d-flex justify-content-between align-items-center mb-4">
            <a href="<?= base_url('pemesanancontroller/hapus_keranjang') ?>">
                <div class="btn btn-danger btn-sm">Hapus Keranjang</div>
            </a>
            <a href="<?= base_url('pemesanan') ?>">
                <div class="btn btn-primary">Tambah pesanan</div>
            </a>
            <a href="<?= base_url('pemesanan/pembayaran') ?>">
                <div class="btn btn-success margin-auto">Pembayaran</div>
            </a>
        </div>
    <?php else : ?>
        <section>
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Keranjang Kosong</h2>
            </div>

            <div class="alert alert-danger">
                <h2 class="text-center align-middle" style="font-family: arial; font-size: 18px; ">Pilih menu anda terlebih dahulu</2>
            </div>
            <i class="bi bi-arrow-left"></i><a href="<?= base_url('pemesanan') ?>"> Kembali</a>
        </div>
    </section>
    <?php endif; ?>
</div>
