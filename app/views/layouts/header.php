<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASE_URL; ?>/assets/img/logo-white.svg" type="image/x-icon" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- Telepon Input -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <title><?= $data['title']; ?></title>
</head>

<body>
    <nav class="<?php if ($data['title'] === 'Reservation') echo 'd-none' ?> navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <img src="./assets/logo/logo-dark.svg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center flex-xl-grow-1" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?php if ($data['title'] === 'Homepage') echo 'active text-primary'; ?>" href="<?= BASE_URL; ?>/home">Home</a>
                    <a class="nav-link <?php if ($data['title'] === 'Rooms') echo 'active text-primary'; ?>" href="<?= BASE_URL; ?>/rooms">Rooms</a>
                    <a class="nav-link <?php if ($data['title'] === 'Facilities') echo 'active text-primary'; ?>" href="<?= BASE_URL; ?>/facilities">Facilities</a>
                    <a class="nav-link <?php if ($data['title'] === 'Contact') echo 'active text-primary'; ?>" href="<?= BASE_URL; ?>/contact">Contact</a>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end flex-grow-0" id="navbarNavAltMarkup">
                <a href="<?= BASE_URL; ?>/admin" id="btn1" type="button" class="btn btn-outline-primary me-2 rounded-0">Sign In</a>
                <a href="<?= BASE_URL; ?>/staff" id="btn2" type="button" class="btn btn-primary rounded-0">Sign Up</a>
            </div>
        </div>
        </div>
    </nav>