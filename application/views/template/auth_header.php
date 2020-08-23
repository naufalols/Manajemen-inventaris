<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>
  <script src="<?= base_url('asset/'); ?>vendor/jquery/jquery.js"></script>
  <script src="<?= base_url('vendor/'); ?>Chart/dist/Chart.js"></script>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('asset/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="<?= base_url('asset/'); ?>css/sb-admin-2.min.css" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
  <link href="<?= base_url('vendor/'); ?>DataTables/datatables.min.css" rel="stylesheet">
  <link href="<?= base_url('vendor/'); ?>Semantic-UI/semantic.css" rel="stylesheet">
  <link href="<?= base_url('vendor/'); ?>Chart/dist/Chart.css" rel="stylesheet">
  <link href="<?= base_url('asset/'); ?>css/style.css" rel="stylesheet">
  <!-- <link href="<?= base_url('vendor/'); ?>Semantic-ui-calendar/dist/calendar.min.css" rel="stylesheet"> -->
  <link href="<?= base_url('vendor/'); ?>DataTables/datatables.min.css" rel="stylesheet">


</head>
<style>
  .dataTables_filter {
    display: none;
  }

  .ui.basic.buttons {
    display: none;
  }
</style>
<style type="text/css">
  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
  }

  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    font: 14px arial;
  }
</style>


<body class="bg-gradient">
  <div class="preloader">
    <div class="loading">
      <img src="<?= base_url('asset/img/gif/') ?>loading.gif" width="80">
      <p>Harap Tunggu</p>
    </div>
  </div>