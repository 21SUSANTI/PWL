<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Data dan Foto Guru</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">WEBSITE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/home1">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ekstrakulikuler">Ekstrakulikuler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/prestasi">Prestasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kelas">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tunjangan">Tunjangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/siswa">Data Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guru">Data Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rapot">Raport</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Title -->
    <br><br>
  
        <h1 class="mt-4">SD NEGERI KAUMAN 1 MALANG</h1>

        <!-- Author -->
        <p class="lead">
          <a href="https://www.google.com/maps/dir/-7.6688224,114.01312/sdn+kauman+1+malang/@-7.7910233,112.76296,9z/am=t/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2dd6281868b63825:0x5e21430c0a38f895!2m2!1d112.629395!2d-7.983541">
          Jl. Kauman No.1, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <h2><marquee>WELCOME TO SD NEGERI KAUMAN 1 MALANG</marquee></h2>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="card-header">
<h2> Tambah Data Guru </h2><br>
<form action="/fotoguru" method="post" enctype="multipart/form-data">

   @csrf
   
    <div class="form-group">
        <label for="id">No</label>
        <input type="text" class="form-control" required="required" name="id"></br>
    </div>
    <div   class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" required="required" name="nama"></br>
    </div>
    <div class="form-group">
                <label for="fotourl">Foto Guru</label>
                <input type="file" class="form-control" required="required" name="fotourl"><br>
    </div>
    <button type="submit" name="addfotoguru" class="btn btn-primary">Tambah Data</button>
</form></div></div>
