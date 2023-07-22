@extends('Layout/index')
@section('isi')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <body>
    <header>
  <div class="logo">
    <img src="{{URL('logo/logo.png') }}" alt="logo1" height="51px" align="left">
    <img src="{{URL('logo/logo2.png')}}" alt="logo2" height="60px" align="right">
  </div>
  </header>
  
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
    <!-- navbar-->
    
    <!-- end navbar-->
 </body>

 
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

<!-- div class="logo">
    <img src="{{URL('logo/logo.png') }}" alt="logo1">
    <img src="{{URL('logo/logo2.png')}}" alt="logo2">
    
</div>
<div class="tab-bar">
    <ul>
        <li>Beranda</li>
        <li>Produk Hukum</li>
        <li>Pengaduan</li>
        <li><input type="search" id="gsearch" name="gsearch">
    </ul>
</div>
<div class = "gambar">
    <img src="{{URL('logo/gambar.png') }}" alt="gambar" >

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
</div> -->
    
@endsection