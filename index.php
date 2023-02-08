<?php 
  include("path.php"); 
  include(ROOT_PATH . "/layouts/header.php");
?>

<!-- Load page -->
<div class="animationload">
  <div class="loader"></div>
</div>

<!-- BACK TO TOP SECTION -->
<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

<!-- BANNER -->
<div id="slides" class="section banner">
  <ul class="slides-container">
    <li>
      <img src="images/1.jpg" alt="" />
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="wrap-caption">
          <h2 class="caption-heading">Ciptakan Masa Depan Terbaik Anda</h2>
          <p class="excerpt">Dengan bekerjasama dengan kami anda dapat melanjutkan visi perusahaan</p>
          <a href="#" class="btn btn-danger" title="CONTACT US">Hubungi Kami</a>
        </div>
      </div>
    </li>
    <li>
      <img src="images/2.jpg" alt="" />
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="wrap-caption">
          <h2 class="caption-heading">Memberikan Solusi Inovatif</h2>
          <p class="excerpt">Mengatasi semua masalah mesin dan sparepart untuk perusahaan anda</p>
          <a href="#" class="btn btn-danger" title="CONTACT US">Hubungi Kami</a>
        </div>
      </div>
    </li>
    <li>
      <img src="images/3.jpg" alt="" />
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="wrap-caption">
          <h2 class="caption-heading">Memberikan Hasil Maksimal</h2>
          <p class="excerpt">Semua yang kami perbaiki menggunakan sparepart terbaik dan baru berkualitas</p>
          <a href="#" class="btn btn-danger" title="CONTACT US">Hubungi Kami</a>
        </div>
      </div>
    </li>
  </ul>

  <nav class="slides-navigation">
    <div class="container">
      <a href="#" class="next">
        <i class="fa fa-chevron-right"></i>
      </a>
      <a href="#" class="prev">
        <i class="fa fa-chevron-left"></i>
      </a>
    </div>
  </nav>
</div>

<!-- ABOUT FEATURE -->
<div class="section feature overlap">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4">
        <!-- BOX 1 -->
        <div class="box-icon-2">
          <div class="icon">
            <div class="fa fa-truck"></div>
          </div>
          <div class="body-content">
            <div class="heading">Antar Jemput</div>
            Demi kemudahan para customer kami untuk mendapatkan adanya informasi kerusakan yang terjadi, kami memberikan pelayanan pengecekan GRATIS di tempat / lokasi.
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4">
        <!-- BOX 2 -->
        <div class="box-icon-2">
          <div class="icon">
            <div class="fa fa-calendar"></div>
          </div>
          <div class="body-content">
            <div class="heading">Pengecekan</div>
            Untuk kenyamanan dan fleksibilitas bagi semua pihak, kami memberikan pelayanan antar - jemput secara GRATIS untuk barang yang akan kami perbaiki.
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4">
        <!-- BOX 3 -->
        <div class="box-icon-2">
          <div class="icon">
            <div class="fa fa-check-circle"></div>
          </div>
          <div class="body-content">
            <div class="heading">Garansi</div>
            Untuk jaminan pekerjaan kami memberikan garansi pekerjaan berdasarkan tanggal pemakaian customer, bukan berdasarkan tanggal pengiriman.
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-12">
        <h2 class="section-heading">ABOUT US</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-5 col-md-5">
        <div class="jumbo-heading">
          <h2>PT. Cipta Manunggal Selaras</h2>
          <img src="images/3.jpg" alt="">
        </div>
      </div>
      <div class="col-sm-7 col-md-7" style="font-size:15px;">
        <p class="lead">PT. Cipta Manunggal Selaras bergerak pada bidang layanan jasa perbaikan Electrical, Mechanical, Engineering dengan ruang lingkup pekerjaan seperti Rewinding AC/DC Motor LV, MV, HV, Generator, Inverter, Pompa, Screw Compressor dan sejenisnya. PT. Cipta Manunggal Selaras diawali dari sebuah bengkel perbaikan kecil yang berlokasi di Bekasi.</p>
        <p>
          Bermodalkan sebuah rumah yang sederhana dan garasi mobil sebagai workshop, Zamal Kresnoadji, Achmad Chotib dan Wisnu Cahyo Handono memulai perjalanan PT. Cipta Manunggal Selaras pertama kali pada tahun 2016 dengan harapan menjadikan PT. CMS sebagai perusahaan terbaik dalam menyediakan jasa perbaikan pada bidang Electrical dan Mechanical Engineering, dengan memberikan kenyamanan dan sebuah pengalaman yang menyenangkan bagi para klien melalui hasil perbaikan yang profesional.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- SERVICES -->
<div class="section services">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <h2 class="section-heading">Layanan Kami</h2>
      </div>
    </div>

    <div class="row no-gutter" style="margin-bottom: 20px">
      <?php $no = 1; $res = run("SELECT * FROM layanan"); ?>
      <?php while($item = mysqli_fetch_assoc($res)) : ?>
        <div class="col-sm-6 col-md-4 mb-5">
          <div class="box-icon-3">
            <div class="line-t"></div>
            <div class="icon">
              <div class="fa fa-gears"></div>
            </div>
            <div class="body-content">
              <div class="heading"><?= $item['nama'] ?></div>
              <b>Estimasi Harga : <?= $item['harga_awal'] ?> - <?= $item['harga_akhir'] ?></b>
              <a href="layanan_detail.php?id=<?= $item['id'] ?>" class="readmore">Baca selengkapnya</a>
            </div>
            <div class="line-b"></div>
          </div>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</div>

<!-- INFO BOX -->
<div class="section info overlap-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4">
        <!-- BOX 1 -->
        <div class="box-icon-4">
          <div class="icon"><i class="fa fa-phone"></i></div>
          <div class="body-content">
            <div class="heading">Hubungi Kami</div>
            Mobile: +62 823 1525 7822
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4">
        <!-- BOX 2 -->
        <div class="box-icon-4">
          <div class="icon"><i class="fa fa-map-marker"></i></div>
          <div class="body-content">
            <div class="heading">Kunjungi Workshop Kami</div>
            Jl. Villa Mutiara Gading 3 Blok Q1 No. 11 Rt.06/Rw.012 Kebalen Babelan, Bekasi Utara
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4">
        <!-- BOX 3 -->
        <div class="box-icon-4">
          <div class="icon"><i class="fa fa-envelope"></i></div>
          <div class="body-content">
            <div class="heading">Email Kami</div>
            cms.manunggal@gmail.com
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include(ROOT_PATH . "/layouts/footer.php"); ?>
