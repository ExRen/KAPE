@extends('Layout/index')
@section('isi')

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

    <main class="center">
      <div class="center">
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{URL('logo/gambar.png') }}" class="d-block w-100" alt="gambar">
          </div>
          <div class="carousel-item">
          <img src="{{URL('logo/banner1.png') }}" class="d-block w-100" alt="gambar">
          </div>
          <div class="carousel-item">
          <img src="{{URL('logo/banner3.png') }}" class="d-block w-100" alt="gambar">
          </div>
          <div class="carousel-item">
          <img src="{{URL('logo/banner4.png') }}" class="d-block w-100" alt="gambar">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<section class="menu">
<div class="container py-5">
<div class="row" id="row">
    <div class="col-md-6 justify-content-center">
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item" id="container">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                RAPERDA
              </a>
              <ul class="dropdown-menu" id="dropbtn">
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2015</a></li>
            <li><a class="dropdown-item" href="#">2012</a></li>
            <li><a class="dropdown-item" href="#">2011</a></li>
              </ul>
            </li>
            <li class="list-group-item" id="container" >
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PERDA
              </a>
              <ul class="dropdown-menu" id="dropbtn">
            <li><a class="dropdown-item" href="#">2022</a></li>
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2020</a></li>
            <li><a class="dropdown-item" href="#">2019</a></li>
            <li><a class="dropdown-item" href="#">2018</a></li>
            <li><a class="dropdown-item" href="#">2017</a></li>
            <li><a class="dropdown-item" href="#">2016</a></li>
              </ul>
            </li>
            <li class="list-group-item" id="container">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Peraturan Kepala Daerah
              </a>
              <ul class="dropdown-menu" id="dropbtn">
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
            <li class="list-group-item" id="container">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Keputusan Kepala Daerah
              </a>
              <ul class="dropdown-menu" id="dropbtn">
            <li><a class="dropdown-item" href="#">2022</a></li>
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2020</a></li>
            <li><a class="dropdown-item" href="#">2019</a></li>
            <li><a class="dropdown-item" href="#">2014</a></li>
            <li><a class="dropdown-item" href="#">1996</a></li>
              </ul>
            </li> 
</div>
    </div>
    <div class="col-md-6 justify-content-center">
<div class="card" style="width: 18rem;">
  <li class="list-group-item" id="container">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Peraturan bersama Kepala Daerah
              </a>
              <ul class="dropdown-menu" id="dropbtn">
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2020</a></li>
              </ul>
            </li>
            <li class="list-group-item" id="container">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Peraturan DPRD Provinsi
              </a>
              <ul class="dropdown-menu" id="dropbtn">
            <li><a class="dropdown-item" href="#">2021</a></li>
              </ul>
            </li>
            <li class="list-group-item" id="container">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Surat Edaran Kepala Daerah
              </a>
              <ul class="dropdown-menu" id="dropbtn">
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2016</a></li>
            <li><a class="dropdown-item" href="#">2015</a></li>
              </ul>
            </li>
            <li class="list-group-item" id="container">
              <a class="list-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MoU/Kerjasama antar Daerah
              </a>
              <ul class="dropdown-menu" id="dropbtn">
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
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>                                                                                                                                                                                                                                                                                                                                                           
</div> -->
<section class="new" id="new">
<div class="row">
    <h5>
        PERATURAN TERBARU
    </h5>
    <div class="container">
        @for ($i = 0; $i < 1; $i++)
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h6 class="card-title">Judul</h6>
    <p class="card-text">Detail</p>
    <a href="#" class="btn btn-primary">Download</a>
  </div>
</div>
  </div>
  @endfor
</div>
  </body>
</section>

<footer>
<div class="container py-5">
    <div class="row">
    <div class="col-md-6 justify-content-center">
<div class = "kontak">
    <h4>Kontak Kami</h4>
    <p>Jalan Kapten A.Rivai Nomor 3
        (0711) 352388
        birohukumsumsel@yahoo.com
    </p>
    <p>Biro Hukum dan HAM Setda Provinsi Sumatera Selatan</p>
</div>
    </div>
    <div class="col-md-6 justify-content-center">
    <h4>Link Terkait</h4>
    <ul>
        <li><a href ="instagram.com" target="_blank">Republik Indonesia</a></li>
        <li href ="">Sekneg RI</li>
        <li href ="">BPHN</li>
        <li href ="">Sumatera Selatan</li>
        <li href ="">Palembang</li>
    </ul>
</div>
    </div>
</div>
    </div>
</footer>
</html>


<<<<<<< HEAD
=======
</div>
<div class="peraturan ">
    <center><b>PERATURAN PROVINSI</b>  </center>
    <ul>
        <div class="Raperda">
        <li>RAPERDA
            <ul>
                <li>2021</li>
                <li>2015</li>
                <li>2012</li>
                <li>2011</li>
            </ul>
        </li>
        </div>
        <li>Peraturan Daerah (PERDA)
            <ul>
                <li>2022</li>
                <li>2021</li>
                <li>2020</li>
                <li>2019</li>
                <li>2018</li>
                <li>2017</li>
                <li>2016</li>
            </ul>
        </li>
        <li>Peraturan Kepala Daerah
            <ul>
                <li>2022</li>
                <li>2021</li>
                <li>2020</li>
                <li>2019</li>
                <li>2018</li>
                <li>2017</li>
                <li>2016</li>
                <li>2015</li>
            </ul>
        </li>
        <li>Keputusan Kepala Daerah
            <ul>
                <li>2022</li>
                <li>2021</li>
                <li>2020</li>
                <li>2019</li>
                <li>2014</li>
                <li>1996</li>
            </ul>
        </li>
        <li>Peraturan Bersama kepala Daerah
            <ul>
                <li>2021</li>
                <li>2020</li>
            </ul>
        </li>
        <li>Peraturan DPRD Provinsi
            <ul>
                <li>2021</li>
            </ul>
        </li>
        <li>Surat Edaran Kepala Daerah
            <ul>
                <li>2021</li>
                <li>2016</li>
                <li>2015</li>
            </ul>
        </li>
        <li>MoU/Kerjasama Antar Daerah
            <ul>
                <li>2022</li>
                <li>2014</li>
                <li>2011</li>
                <li>2010</li>
            </ul>
        </li>
    </ul>
</div>
{{-- <div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown link
    </a>
  
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </div> --}}
<div>
    <h3>Peraturan Terbaru</h3>
    <ul>
        <li></li>
    </ul>
</div>

<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
<div class = "kontak">
    <h4>Kontak Kami</h4>
    <p>Jalan Kapten A.Rivai Nomor 3
        (0711) 352388
        birohukumsumsel@yahoo.com
    </p>
    <p>Biro Hukum dan HAM Setda Provinsi Sumatera Selatan</p>

    <h4>Link Terkait</h4>
    <ul>
        <li><a href ="instagram.com" target="_blank">Republik Indonesia</a></li>
        <li href ="">Sekneg RI</li>
        <li href ="">BPHN</li>
        <li href ="">Sumatera Selatan</li>
        <li href ="">Palembang</li>
    </ul>
<<<<<<< HEAD
</div>
</div>
</div>
</div>
</footer>
=======
</div> -->
>>>>>>> origin/Valyssa
>>>>>>> origin/main
    
@endsection