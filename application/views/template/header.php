<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Disposisi Surat</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Monte Carlo</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('home') ?>">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('Barang') ?>">Barang</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('Penjualan') ?>">Penjualan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('Prediksi') ?>">Prediksi</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
