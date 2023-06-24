 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
     <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
         <div class="row">
             <div class="col-lg-8">
                 <h1>Welcome to <span>Dimsumicious</span></h1>
                 <h2>Delivering great food for more than 18 years!</h2>
                 <div class="btns">
                     <a href="<?= base_url('pemesanan') ?>" class="btn-menu animated fadeInUp scrollto">Order Now</a>
                     <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
                 </div>
             </div>

         </div>
     </div>
 </section><!-- End Hero -->

 <main id="main">

     <!-- ======= About Section ======= -->
     <section id="about" class="about">
         <div class="container" data-aos="fade-up">


             <div class="row">

                 <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                     <div class="about-img">
                         <img src="assets/img/about.jpg" alt="">
                     </div>
                 </div>
                 <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                     <div class="section-title" style="margin-bottom: -20px;">
                         <h2>About</h2>
                         <p>Resto Dimsumicious</p>
                     </div>
                     <p class="fst-italic">
                         Di Restoran Dimsumicious Kami, kami dengan bangga memberikan pengalaman kuliner yang memuaskan. Dengan pengalaman lebih dari 18 tahun dalam industri makanan, kami telah menjadi tujuan favorit para pecinta dimsum.
                     </p>
                     <ul>
                         <li><i class="bi bi-check-circle"></i> Pelayanan yang ramah untuk memenuhi kebutuhan Anda.</li>
                         <li><i class="bi bi-check-circle"></i> Hidangan dimsum lezat yang disajikan dengan penuh dedikasi.</li>
                         <li><i class="bi bi-check-circle"></i> Tempat yang bersih dan nyaman.</li>
                     </ul>

                     <p>
                         Nikmati pilihan dimsum kami yang segar dan diolah dengan bahan-bahan terbaik. Rasakanlah kelezatan dan tekstur yang menggugah selera yang akan membuat Anda ingin kembali lagi.
                     </p>

                 </div>
             </div>
         </div>
     </section>
     <!-- End About Section -->

     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us">
         <div class="container" data-aos="fade-up">

             <div class="section-title">
                 <h2>How to order</h2>
                 <p>Ordering Instructions</p>
             </div>

             <div class="row">

                 <div class="col-lg-4">
                     <div class="box" data-aos="zoom-in" data-aos-delay="100">
                         <span>01</span>
                         <h4>Pilih Menu Dimsum</h4>
                         <p>Temukan berbagai hidangan dimsum di halaman "Menu" dan pilih yang Anda suka.</p>
                     </div>
                 </div>

                 <div class="col-lg-4 mt-4 mt-lg-0">
                     <div class="box" data-aos="zoom-in" data-aos-delay="200">
                         <span>02</span>
                         <h4>Tambahkan ke Keranjang Belanja</h4>
                         <p>Klik "Tambahkan ke Keranjang" untuk menambahkan hidangan ke keranjang belanja Anda.</p>
                     </div>
                 </div>

                 <div class="col-lg-4 mt-4 mt-lg-0">
                     <div class="box" data-aos="zoom-in" data-aos-delay="300">
                         <span>03</span>
                         <h4>Selesaikan Pemesanan</h4>
                         <p>Isi informasi yang diperlukan, dan klik "Pesanan" lalu ikuti intruksi pmebayaran untuk menyelesaikan pemesanan.</p>
                     </div>
                 </div>

             </div>

         </div>
     </section><!-- End Why Us Section -->

     <!-- ======= Menu Section ======= -->
     <section style="background-color: white;" id="menu" class="menu section-bg">
         <div class="container" data-aos="fade-up">

             <div class="section-title">
                 <h2>Menu</h2>
                 <p>Check Our Tasty Menu</p>
             </div>

             <div class="row" data-aos="fade-up" data-aos-delay="100">
                 <div class="col-lg-12 d-flex justify-content-center">
                     <ul id="menu-flters">
                         <li data-filter="*" class="filter-active">All</li>
                         <li data-filter=".Makanan">Food</li>
                         <li data-filter=".Minuman">Drink</li>
                     </ul>
                 </div>
             </div>

             <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                 <?php foreach ($menus as $menu) : ?>
                     <div class="col-lg-6 menu-item <?= $menu->category ?>">
                         <img src="<?= base_url() . '/uploads/' . $menu->gambar ?>" class="menu-img" alt="">
                         <div class="menu-content">
                             <a href="#"><?= $menu->nama_menu ?></a><span>Rp<?= number_format($menu->harga, 0, ',', '.') ?></span>
                         </div>
                         <div class="menu-ingredients"><?= $menu->keterangan ?></div>
                     </div>
                 <?php endforeach; ?>

             </div>

         </div>
     </section><!-- End Menu Section -->



     <!-- ======= Events Section ======= -->


     <!-- ======= Book A Table Section ======= -->
     <section id="book-a-table" class="book-a-table">
         <div class="container" data-aos="fade-up">

             <div class="section-title">
                 <p class="mb-3">Reservation</p>
                 <h2>Nomor Meja Tersedia:</h2>
                 <ul class="meja-list">
                     <?php foreach ($meja_tersedia as $meja) : ?>
                         <li class="meja-tersedia"><?= $meja->nomor_meja ?></li>
                     <?php endforeach; ?>
                 </ul>

                 <h2>Nomor Meja Tidak Tersedia:</h2>
                 <ul class="meja-list">
                     <?php foreach ($meja_tidak_tersedia as $meja) : ?>
                         <li class="meja-tidak-tersedia"><?= $meja->nomor_meja ?></li>
                     <?php endforeach; ?>
                 </ul>
             </div>




             <form action="<?= base_url('reservation') ?>" method="post" data-aos="fade-up" data-aos-delay="100">
                 <div class="row">
                     <div class="col-lg-4 col-md-6 form-group">
                         <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap" value="<?= isset($pelanggan) ? $pelanggan->nama : '' ?>">
                     </div>

                     <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                         <select class="form-control" name="nomor_meja" required>
                             <option value="" disabled selected>Pilih Nomor Meja</option>
                             <?php foreach ($meja_tersedia as $meja) : ?>
                                 <option value="<?= $meja->nomor_meja ?>">Meja Nomor <?= $meja->nomor_meja ?></option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                     <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                         <input type="text" class="form-control" name="nomor_telepon" id="phone" placeholder="Nomor Telepon" value="<?= isset($pelanggan) ? $pelanggan->nomor_telepon : '' ?>">
                     </div>

                     <div class="col-lg-4 col-md-6 form-group mt-3">
                         <input type="date" name="tanggal" class="form-control" id="date" placeholder="Tanggal">
                     </div>
                     <div class="col-lg-4 col-md-6 form-group mt-3">
                         <input type="time" class="form-control" name="time" id="time" placeholder="Time">
                     </div>
                     <div class="col-lg-4 col-md-6 form-group mt-3">
                         <input type="number" class="form-control" name="people" id="people" placeholder="# of people">
                     </div>
                     <div class="col-lg-4 col-md-6 form-group mt-3">
                         <input type="hidden" class="form-control" name="id_reservation" id="id_reservation" placeholder="ID Reservation">
                     </div>
                 </div>
                 <div class="form-group mt-3">
                     <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                 </div>
                 <div class="text-center">
                     <button class="btn btn-success mt-4" style="width: 150px;" type="submit">Book a Table</button>
                 </div>
             </form>
             <div class="text-center">
                 <button class="btn btn-success mt-4" style="width: 150px;" type="submit">Book a Table</button>
             </div>


         </div>
     </section><!-- End Book A Table Section -->


     <!-- ======= Chefs Section ======= -->
     <section style="background-color: white;" id="chefs" class="chefs">
         <div class="container" data-aos="fade-up">
             <div class="section-title">
                 <h2>Chefs</h2>
                 <p>Our Proffesional Chefs</p>
             </div>

             <div class="row">
                 <?php foreach ($chefs as $cfs) : ?>

                     <div class="col-lg-4 col-md-6">
                         <div class="member" data-aos="zoom-in" data-aos-delay="100">
                             <img src="<?= base_url() . 'uploads/' . $cfs->gambar ?>" class="img-fluid" alt="">
                             <div class="member-info">
                                 <div class="member-info-content">
                                     <h4><?= $cfs->nama ?></h4>
                                     <span><?= $cfs->profesi ?></span>
                                 </div>
                                 <div class="social">
                                     <a href="<?= $cfs->twitter ?>"><i class="bi bi-twitter"></i></a>
                                     <a href="<?= $cfs->facebook ?>"><i class="bi bi-facebook"></i></a>
                                     <a href="<?= $cfs->instagram ?>"><i class="bi bi-instagram"></i></a>
                                     <a href="<?= $cfs->linkedin ?>"><i class="bi bi-linkedin"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>

         </div>
     </section><!-- End Chefs Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
         <div class="container" data-aos="fade-up">

             <div class="section-title">
                 <h2>Contact</h2>
                 <p>Contact Us</p>
             </div>
         </div>

         <div class="container" data-aos="fade-up">

             <div class="row mt-5">

                 <div class="col-lg-4">
                     <div class="info">
                         <div class="address">
                             <i class="bi bi-geo-alt"></i>
                             <h4>Location :</h4>
                             <p>Jl. Kenangan No.03, Bekasi Utara </p>
                         </div>

                         <div class="open-hours">
                             <i class="bi bi-clock"></i>
                             <h4>Open Hours:</h4>
                             <p>
                                 Senin-Sabtu:<br>
                                 11:00 WIB - 23:00 WIB
                             </p>
                         </div>

                         <div class="email">
                             <i class="bi bi-envelope"></i>
                             <h4>Email:</h4>
                             <p>dimsumicious@support.co</p>
                         </div>

                         <div class="phone">
                             <i class="bi bi-phone"></i>
                             <h4>Call:</h4>
                             <p>+62 8224 6226 574</p>
                         </div>

                     </div>

                 </div>

                 <div class="col-lg-8 mt-5 mt-lg-0">

                     <form action="<?= base_url('pesan') ?>" method="post">
                         <div class="row">
                             <div class="col-md-6 form-group">
                                 <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required>
                             </div>
                             <div class="col-md-6 form-group mt-3 mt-md-0">
                                 <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                             </div>
                         </div>
                         <div class="form-group mt-3">
                             <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                         </div>
                         <div class="form-group mt-3">
                             <textarea class="form-control" name="isi" rows="8" placeholder="Message" required></textarea>
                         </div>
                         <div class="my-3">
                             <div class="error-message"></div>
                             <div class="sent-message"><?= $this->session->flashdata('pesan'); ?></div>
                         </div>
                         <div class="text-center"><button type="submit" class="btn btn-primary" style="width: 150px;">Send Message</button></div>
                     </form>

                 </div>

             </div>

         </div>
     </section><!-- End Contact Section -->
     <!-- ======= Gallery Section ======= -->
     <section style="background-color: white;" id="gallery" class="gallery">

         <div class="container" data-aos="fade-up">
             <div class="section-title">
                 <h2>Gallery</h2>
                 <p>Some photos from Our Restaurant</p>
             </div>
         </div>

         <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

             <div class="row g-0">

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                             <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                             <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                             <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                             <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                             <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                             <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                             <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                             <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

             </div>

         </div>
     </section><!-- End Gallery Section -->


 </main><!-- End #main -->