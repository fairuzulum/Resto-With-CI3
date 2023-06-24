<div class="container-fluid">
    <div class="card">
        <h5 class="card-header" style="color: white; background-color: grey;">Pengirim : <?= $pesan->nama ?></h5>
        <div class="card-header" style="background-color: white;">
            [ SUBJECT ] - [<?= $pesan->subject ?>]
            <br>
            Email : <?= $pesan->email ?>
        </div>
        <div class="card-body">
        <h5 class="card-title">Isi Pesan</h5>
            <p class="card-text"><?= $pesan->isi ?></p>
            <a href="<?= base_url('admin/pesan') ?>" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
        </div>
    </div>
</div>