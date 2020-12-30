<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Foto Guru</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <body style="background-color:#48D1CC">
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
            <a class="nav-link" href="/fotoguru">Data Foto Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rapot">Raport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home">Dashboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Title -->
        <h1 class="mt-4">SD NEGERI KAUMAN 1 MALANG</h1>

        <!-- Author -->
        <p class="lead">
          <a href="https://www.google.com/maps/dir/-7.6688224,114.01312/sdn+kauman+1+malang/@-7.7910233,112.76296,9z/am=t/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2dd6281868b63825:0x5e21430c0a38f895!2m2!1d112.629395!2d-7.983541">
          Jl. Kauman No.1, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <h2><marquee>WELCOME TO SD NEGERI KAUMAN 1 MALANG</marquee></h2>

<a href="/fotoguru/addfotoguru" class="btn btn-primary my-3">Tambah Data</a>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>  
                            <th scope="col">Foto</th>          
                            <th scope="col">Kelola Lengkap</th>            
                        </tr>  
                    </thead>
                    @foreach( $fotoguru as $fg)
                        <tr> 
                            <td>{{ $fg->id }}</td>                         
                            <td>{{ $fg->nama}}</td>
                            <td><img width="150px" src="{{ asset('storage/'.$fg->fotourl) }}"></td>
                            <td>
                                <a href="fotoguru/editfotoguru/ {{$fg->id}}" class="badge badge-warning">Edit</a>
                                </form>
                                <form action="{{$fg->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <a href="fotoguru/delete/{{$fg->id}}" class="badge badge-danger">Hapus</a>
                                </form>
                            <td>
                        </tr>
                        @endforeach
                </table>
                </body>
            </div>
        </div>
    </div> 
