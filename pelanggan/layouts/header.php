<?php require_once '../../config/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Cipta Manunggal Selaras</title>

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="../../images/CMS.png" />
        <link rel="apple-touch-icon" href="../../images/CMS.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="images/CMS.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="images/CMS.png" />

        <!-- ==============================================
        CSS VENDOR
        =============================================== -->
        <link rel="stylesheet" type="text/css" href="../../css/vendor/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../../css/vendor/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="../../css/vendor/owl.carousel.min.css" />
        <link rel="stylesheet" type="text/css" href="../../css/vendor/owl.theme.default.min.css" />
        <link rel="stylesheet" type="text/css" href="../../css/vendor/magnific-popup.css" />

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" type="text/css" href="../../css/style.css" />

        <script type="text/javascript" src="../../js/vendor/modernizr.min.js"></script>

        <style>
          @media(max-width: 992px) {
            .contact-info {
              display: none;
            }
          }
        </style>
    </head>
<body>
<!-- HEADER -->
<div class="header">
  <!-- TOPBAR LOGO SECTION -->
  <div class="topbar-logo">
    <div class="container">
      <a class="navbar-brand" href="index.php">
          <img src="../../images/logo.png" alt="" />
        </a>
      <div class="contact-info">
        <!-- INFO 1 -->
        <div class="box-icon-1" style="margin-bottom: 0;">
          <div class="icon">
            <div class="fa fa-envelope-o"></div>
          </div>
          <div class="body-content">
            <div class="heading">Email</div>
            cms.manunggal@gmail.com
          </div>
        </div>
        <!-- INFO 2 -->
        <div class="box-icon-1" style="margin-bottom: 0;">
          <div class="icon">
            <div class="fa fa-phone"></div>
          </div>
          <div class="body-content">
            <div class="heading">Kontak</div>
            +62 823 1525 7822
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- NAVBAR SECTION -->
  <div class="navbar navbar-main">
    <div class="container container-nav">
      <div class="rowe">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <nav class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
              <a href="../../index.php" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >HOME</a>
            </li>
            <li class="dropdown">
              <a href="../../layanan.php" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES</a>
            </li>
            <li class="dropdown">
              <a href="transaksi.php" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRANSAKSI</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="../../logout.php" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div class="fa fa-sign-out"></div> Logout </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>