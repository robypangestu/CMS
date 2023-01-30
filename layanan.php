<?php 
  include("path.php"); 
  include(ROOT_PATH . "/layouts/header.php");
?>

<div class="container">
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
            <a href="layanan_detail.php?id=<?= $item['id'] ?>" class="readmore">Pesan</a>
          </div>
          <div class="line-b"></div>
        </div>
      </div>
    <?php endwhile ?>
  </div>
</div>

<?php include(ROOT_PATH . "/layouts/footer.php"); ?>