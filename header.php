<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400&display=swap" rel="stylesheet">


    <title>Masjid Minar</title>

    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
        }

        .btn {
            border-radius: 50px;
        }
    </style>
</head>

<body>

    <div class="container bg-light">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="<?= base_url('/') ?>" class="nav-link active" aria-current="page">Category Master</a></li>
                <li class="nav-item"><a href="<?= base_url('item_master') ?>" class="nav-link">Item Master</a></li>
                <li class="nav-item"><a href="<?= base_url('show_item') ?>" class="nav-link">Item Master List</a></li>
                <li class="nav-item"><a href="<?= base_url('login') ?>" class="nav-link">Login</a></li>
            </ul>
        </header>
    </div>