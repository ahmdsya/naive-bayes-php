<?php

require_once 'require.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

$page = (isset($_GET['p']) ? $_GET['p'] : false);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="dist/css/fontawesome.css" />
    <link rel="stylesheet" href="dist/css/brands.css" />
    <link rel="stylesheet" href="dist/css/solid.css" />

    <link rel="stylesheet" href="dist/css/gaya.css">
    <link rel="stylesheet" href="dist/css/datatables.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">

    <title>Naive Bayes</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary static-top" style="height:80px;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                Naive Bayes
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= ($page == false ? 'active' : '') ?>">
                        <a class="nav-link" href="index.php">Beranda
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($page == 'data-latih' ? 'active' : '') ?>">
                        <a class="nav-link" href="index.php?p=data-latih">Data Latih</a>
                    </li>
                    <li class="nav-item <?= ($page == 'riwayat-perhitungan' ? 'active' : '') ?>">
                        <a class="nav-link" href="index.php?p=riwayat-perhitungan">Riwayat Perhitungan</a>
                    </li>
                    <?php 
                    if (isset($_SESSION['username'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Keluar</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style='margin-top:90px'>

        <?php
        
        if ($page == 'data-latih') {
            include 'data-latih.php';
        }elseif ($page == 'riwayat-perhitungan') {
            include 'riwayat-perhitungan.php';
        }elseif ($page == 'detail') {
            include 'detail.php';
        }else {
            include 'home.php';
        }

        ?>

    </div>

    <script src="dist/js/jquery.js"></script>
    <script src="dist/jspopper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/js/datatables.js"></script>

    <script>
        $(document).ready(function () {
            $('#dataLatih').dataTable({
                "pageLength": 100
            });
        });
    </script>

</body>

</html>