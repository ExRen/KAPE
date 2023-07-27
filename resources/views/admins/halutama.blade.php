@extends ('Layout/halutama')
@section('adm')

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="{{asset('css/landing.css')}}" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css" />
  <title>Landing</title>
</head>
<!-- logo atas -->
<div class="row">
  <div class="logo">
    <img src="{{URL('logo/logo.png') }}" alt="logo1" height="51px" align="left">
    <img src="{{URL('logo/logo2.png')}}" alt="logo2" height="60px" align="right">
      
  </div>
</div>
<!-- logo atas -->

<body id="landingg">
  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#FF3C38 ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produk Hukum
            </a>
            <ul class="dropdown-menu" id="dropbtn">
              <div class="item">
                <li><a class="dropdown-item" href="#">RAPERDA</a></li>
                <li><a class="dropdown-item" href="#">PERDA</a></li>
                <li><a class="dropdown-item" href="#">PERATURAN KEPALA DAERAH</a></li>
                <li><a class="dropdown-item" href="#">KEPUTUSAN KEPALA DAERAH</a></li>
                <li><a class="dropdown-item" href="#">PERATURAN BERSAMA KEPALA DAERAH</a></li>
                <li><a class="dropdown-item" href="#">PERATURAN DPRD PROVINSI</a></li>
                <li><a class="dropdown-item" href="#">SURAT EDARAN KEPALA DAERAH</a></li>
                <li><a class="dropdown-item" href="#">MOU/KERJASAMA ANTAR DAERAH</a></li>
              </div>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link ">Pengaduan</a>
          </li>
        </ul>
        <form class="d-flex" role="Pencarian">
          <input class="form-control me-2" type="Pencarian" placeholder="Pencarian" aria-label="Pencarian">
          <button class="btn btn-outline-success" type="submit" id="cari">Cari</button>
        </form>
      </div>
    </div>
  </nav>
  <!--akhir navbar-->

     <!--judul-->
     <figure class="text-center">
     <blockquote class="blockquote">
        <h3>Halaman Admin</h3>
     </blockquote>
    <figcaption class="blockquote-footer">
         JDIH PROVINSI<cite title="Source Title"> SUMATERA SELATAN</cite>
  </figcaption>
</figure>
    <button type="button" class="btn btn-success">Tambah Data</button>
   <!--judul-->

    <!--isi-->
<div class="table-responsive">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>

</html>
@endsection