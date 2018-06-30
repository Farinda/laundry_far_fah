<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Dashboard Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Laundry Admin</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo base_url('Login/logout') ?>">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Data Master</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Item') ?>">
                <span data-feather="file-text"></span>
                Item
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Jenis') ?>">
                <span data-feather="file-text"></span>
                Jenis
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Pegawai') ?>">
                <span data-feather="file-text"></span>
                Pegawai
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Aplikasi</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Transaksi') ?>">
                <span data-feather="file-text"></span>
                Transaksi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Transaksi/cuci') ?>">
                <span data-feather="file-text"></span>
                Cuci
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Transaksi/selesai') ?>">
                <span data-feather="file-text"></span>
                Selesai
              </a>
            </li>

          </ul>
        </div>
      </nav>