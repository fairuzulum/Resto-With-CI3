<main id="main">
  <section class="breadcrumbs">
    <div class="container">
      <div class="sent-message"><?= $this->session->flashdata('pesan'); ?></div>

      <div class="cart d-flex justify-content-between align-items-center">
        <h2>MENU</h2>
        <ol>
          <li>
            <div style="color: white; font-size: 24px;">
              <i class="bi bi-bag"></i>
              <?php
              $keranjang = '+' . $this->cart->total_items() . ' items';
              ?>

              <?= anchor(base_url('pemesanan/keranjang'), $keranjang) ?>
            </div>
          </li>
        </ol>
      </div>

    </div>
  </section>

  <section class="menu section-bg">
    <div class="container" data-aos="fade-up">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters" style="color: white;">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".Makanan">Food</li>
            <li data-filter=".Minuman">Drink</li>
          </ul>
        </div>
      </div>

      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($menus as $menu) : ?>
          <div class="col-lg-6 menu-item card <?= $menu->category ?>" style="width: 18rem;">
            <img src="<?= base_url() . '/uploads/' . $menu->gambar ?>" class="card-img-top" alt="">
            <div class="card-body">
              <h4 class="card-title"><?= $menu->nama_menu ?></h4>
              <span class="harga">Rp<?= number_format($menu->harga, 0, ',', '.') ?></span>
              <?= anchor('pemesanancontroller/tambah_ke_keranjang/' . $menu->id_menu, '<div class="btn btn-sm btn-primary mt-3" style="width: 150px;">Add to Cart</div>') ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section><!-- End Menu Section -->

</main><!-- End #main -->