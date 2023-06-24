<div class="container-fluid">
        
    <div class="card" style="width: 700px;">
        <div class="card-header" style="background-color: #de3163; color: white;">
            <h3 class="font-weight-bold">Detail Reserfasi</h3>
        </div>
        <div class="card-body">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: grey; color: white;">Nama</span>
                </div>
                <input style="background-color: white;" type="text" aria-label="First name" class="form-control" value="<?= $reservation->nama ?>" disabled>
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: grey; color: white;">No. Meja</span>
                </div>
                <input style="background-color: white;" type="text" aria-label="First name" class="form-control" value="<?= $reservation->nomor_meja ?>" disabled>
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: grey; color: white;">Jumlah Orang</span>
                </div>
                <input style="background-color: white;" type="text" aria-label="First name" class="form-control" value="<?= $reservation->jumlah_orang ?>" disabled>
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: grey; color: white;">No. Telepon</span>
                </div>
                <input style="background-color: white;" type="text" aria-label="First name" class="form-control" value="<?= $reservation->nomor_telepon ?>" disabled>
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: grey; color: white;">Tanggal</span>
                </div>
                <input style="background-color: white;" type="text" aria-label="First name" class="form-control" value="<?= $reservation->tanggal ?>" disabled>
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: grey; color: white;">Jam</span>
                </div>
                <input style="background-color: white;" type="text" aria-label="First name" class="form-control" value="<?= $reservation->jam ?>" disabled>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Pesan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled style="background-color: white;"><?= $reservation->pesan ?></textarea>
            </div>
        </div>
    </div>
<a href="<?= base_url('admin/reserfasi')?>" class="mt-2 btn btn-sm btn-primary shadow mb-1"><i class="fas fa-arrow-left fa-sm"></i> Kembali</a>

</div>