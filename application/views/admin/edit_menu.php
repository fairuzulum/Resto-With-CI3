<div class="container-fluid">
   <h3><i class="fas fa-edit">Edit Data Menu</i></h3>

   <?php foreach ($menus as $menu) : ?>

      <form action="<?= base_url() . 'menucontroller/update' ?>" method="post" enctype="multipart/form-data">
         <div class="for-group">
            <label>Nama Menu</label>
            <input type="text" name="nm_menu" class="form-control" value="<?= $menu->nama_menu ?>">
            <input type="hidden" name="id_menu" class="form-control" value="<?= $menu->id_menu ?>">
         </div>
         <div class="for-group mt-2">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?= $menu->keterangan ?>">
         </div>
         <div class="for-group mt-2">
            <label for="category">Kategori:</label>
            <select class="form-control" name="category">
               <option value="Makanan">Makanan</option>
               <option value="Minuman">Minuman</option>
            </select>
         </div>
         <div class="for-group mt-2">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?= $menu->harga ?>">
         </div>
         <div class="for-group mt-2">
            <label for="status">Status:</label>
            <select class="form-control" name="stok">
               <option value="Tersedia">Tersedia</option>
               <option value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
         </div>
         <div class="form-group mt-2">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control-file">
                <input type="hidden" name="gambar" class="form-control" value="<?= $menu->gambar ?>">
            </div>
         <input type="submit" class="btn btn-primary mt-4" value="Update">
      </form>

   <?php endforeach; ?>
</div>