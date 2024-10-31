<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/desain.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/responsiv-hp.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/responsiv-tab.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- boxicons link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- responsivenavbar -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/navs.css">
    <!-- remixicons link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- google fonts link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <title> <?= $data['title']; ?> </title> -->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-color position-fixed w-100 top-0 ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="<?= BASEURL; ?>/image/logo.png" alt="logo">
                RestoPWT</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link " aria-current="page" href="<?= BASEURL; ?>/index">
                            Beranda</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= BASEURL; ?>/restoran">Restoran</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= BASEURL; ?>/about">Tentang Kami</a>
                    </li>
                </ul>

                <div style="gap: 20px; display: flex;">
                    <li><a style="text-decoration: none;" href="<?= BASEURL; ?>/dashboard">Dashboard</a></li>
                    <?php if (isset($_SESSION['user'])): ?>
                    <li><a style="text-decoration: none;" href="<?= BASEURL; ?>/login/logout">Logout</a></li>
                    <?php else: ?>
                    <li><a style="text-decoration: none;" href="<?= BASEURL; ?>/login">Login</a></li>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>