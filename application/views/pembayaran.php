<section class="breadcrumbs">
    <div class="container">
        <div class="cart d-flex justify-content-between align-items-center">


        </div>
    </div>
    <section class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pembayaran</h2>
                <p><?php
                    $grand_total = 0;
                    if ($keranjang = $this->cart->contents()) {
                        foreach ($keranjang as $item) {
                            $grand_total = $grand_total + $item['subtotal'];
                        }

                        echo "Total Pesanan Anda: Rp" . number_format($grand_total,  0, ',', '.');

                    ?></p>
            </div>

            <form action="<?= base_url() ?>pemesanan/proses" method="post" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $pelanggan->nama ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $pelanggan->alamat ?>" required>
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="nomor" class="form-control" value="<?= $pelanggan->nomor_telepon ?>" required>
                    </div>
                    <div class="col-lg-12 col-md-6 form-group">
                        <label>Metode Pembayaran</label>
                        <select name="metode" class="form-control">
                            <option value="Dompet Digital">Dompet Digital</option>
                            <option value="Bank BCA xxxx">Bank - BCA xxxxxx</option>
                            <option value="Bank Mandiri xxxx">Bank - Mandiri xxxxxx</option>
                            <option value="Bank BRI xxxx">Bank - BRI xxxxxx</option>
                            <option value="Bank Resto">Bank - Resto</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-success mt-4" style="width: 120px;" type="submit">Bayar</button>
                </div>
            </form>
        <?php
                    } else {
                        echo "Keranjang Kosong <br>";
                        echo '<i style="font-size: 20px;" class="bi bi-arrow-left"></i><a style="font-size: 20px; color: white;" href="' . base_url('pemesanan/keranjang') . '"> Kembali</a>';
                    }
        ?>
        </div>
    </section>
</section>
<div class="container">

</div>