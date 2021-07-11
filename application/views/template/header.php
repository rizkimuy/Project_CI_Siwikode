<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>My Trip My Hobby!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Informasi Wisata Kota Depok</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url()?>index.php/wisata/index">Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>index.php/profesi/index">Profesi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>index.php/testimoni/index">Testimoni</a>
        </li>

        
      </ul>
      <form class="d-flex">
      <a href="<?= base_url()?>index.php/login/logout" class="btn btn-danger">Logout</a> <br>
        
      </form>
    </div>
  </div>
</nav>