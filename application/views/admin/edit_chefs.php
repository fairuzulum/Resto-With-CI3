<div class="container-fluid">
    <h3><i class="fas fa-edit">Edit Data Chefs</i></h3>

    <?php foreach ($chefs as $cfs) : ?>

        <form action="<?= base_url() . 'chefscontroller/update' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Chefs</label>
                <input type="text" name="nama" class="form-control" value="<?= $cfs->nama ?>">
                <input type="hidden" name="id_chefs" class="form-control" value="<?= $cfs->id_chefs ?>">
            </div>
            <div class="form-group mt-2">
                <label>Profesi</label>
                <input type="text" name="profesi" class="form-control" value="<?= $cfs->profesi ?>">
            </div>
            <div class="form-group mt-2">
                <label for="category">Gender:</label>
                <select class="form-control" name="gender">
                    <option value="Laki-Laki" <?= $cfs->gender == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?= $cfs->gender == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $cfs->alamat ?>">
            </div>
            <div class="form-group mt-2">
                <label>No Telepon</label>
                <input type="text" name="nomor_telepon" class="form-control" value="<?= $cfs->nomor_telepon ?>">
            </div>
            <div class="form-group mt-2">
                <label>Facebook</label>
                <input type="text" name="facebook" class="form-control" value="<?= $cfs->facebook ?>">
            </div>
            <div class="form-group mt-2">
                <label>Twitter</label>
                <input type="text" name="twitter" class="form-control" value="<?= $cfs->twitter ?>">
            </div>
            <div class="form-group mt-2">
                <label>Instagram</label>
                <input type="text" name="instagram" class="form-control" value="<?= $cfs->instagram ?>">
            </div>
            <div class="form-group mt-2">
                <label>Linkedin</label>
                <input type="text" name="linkedin" class="form-control" value="<?= $cfs->linkedin ?>">
            </div>
            <div class="form-group mt-2">
                <label>Foto</label>
                <input type="file" name="gambar" class="form-control-file">
                <input type="hidden" name="gambar" class="form-control" value="<?= $cfs->gambar ?>">
            </div>
            <input type="submit" class="btn btn-primary mt-4" value="Update">
        </form>

    <?php endforeach; ?>
</div>
