@extends('Layout/prokum')
@section('prokum')

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="{{asset('logo/logos-01.png') }}" />
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">RAPERDA</a></li>
            <li><a class="dropdown-item" href="#">PERDA</a></li>
            <li><a class="dropdown-item" href="#">PERATURAN KEPALA DAERAH</a></li>
            <li><a class="dropdown-item" href="#">KEPUTUSAN KEPALA DAERAH</a></li>
            <li><a class="dropdown-item" href="#">PERATURAN BERSAMA KEPALA DAERAH</a></li>
            <li><a class="dropdown-item" href="#">PERATURAN DPRD PROVINSI</a></li>
            <li><a class="dropdown-item" href="#">SURAT EDARAN KEPALA DAERAH</a></li>
            <li><a class="dropdown-item" href="#">MOU/KERJASAMA ANTAR DAERAH</a></li>
              </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link ">Pengaduan</a>
            </li>
          </ul>
          <form class="d-flex" role="Pencarian">
            <input class="form-control me-2" type="Pencarian" placeholder="Pencarian" aria-label="Pencarian">
            <button class="btn btn-outline-success" type="submit">Cari</button>
          </form>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->
  
<div class="">
<div class="row justify-content-end">
<div class="card" style="width: 18rem;">
<div class="card-header">
    Peraturan Provinsi
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                RAPERDA
              </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2015</a></li>
            <li><a class="dropdown-item" href="#">2012</a></li>
            <li><a class="dropdown-item" href="#">2011</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PERDA
              </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2022</a></li>
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2020</a></li>
            <li><a class="dropdown-item" href="#">2019</a></li>
            <li><a class="dropdown-item" href="#">2018</a></li>
            <li><a class="dropdown-item" href="#">2017</a></li>
            <li><a class="dropdown-item" href="#">2016</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Peraturan Kepala Daerah
              </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2022</a></li>
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2020</a></li>
            <li><a class="dropdown-item" href="#">2019</a></li>
            <li><a class="dropdown-item" href="#">2018</a></li>
            <li><a class="dropdown-item" href="#">2017</a></li>
            <li><a class="dropdown-item" href="#">2016</a></li>
            <li><a class="dropdown-item" href="#">2016</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Keputusan Kepala Daerah
              </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2022</a></li>
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2020</a></li>
            <li><a class="dropdown-item" href="#">2019</a></li>
            <li><a class="dropdown-item" href="#">2014</a></li>
            <li><a class="dropdown-item" href="#">1996</a></li>
              </ul>
            </li> 
  <li class="list-group-item">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Peraturan bersama Kepala Daerah
              </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2020</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Peraturan DPRD Provinsi
              </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2021</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Surat Edaran Kepala Daerah
              </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2016</a></li>
            <li><a class="dropdown-item" href="#">2015</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MoU/Kerjasama antar Daerah
              </a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">2022</a></li>
            <li><a class="dropdown-item" href="#">2014</a></li>
            <li><a class="dropdown-item" href="#">2011</a></li>
            <li><a class="dropdown-item" href="#">2010</a></li>
              </ul>
            </li>
</div>
    </div>
</div>
</div>
</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- <div class="row">
    <h1>
        PERATURAN TERBARU
    </h1>
    <div class="container">
        @for ($i = 0; $i < 1; $i++)
    <div class="col-lg-8">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
    </div>
@endfor                                                                                                                                                                                                                                                                                                                                                             
</div> -->
@endsection