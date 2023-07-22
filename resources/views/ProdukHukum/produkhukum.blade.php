@extends('Layout/prokum')
@section('prokum')
<div class="logo">
    <img src="{{URL('logo/logo.png') }}" alt="logo1">
    <img src="{{URL('logo/logo2.png')}}" alt="logo2">
    
</div>

       
 <div class="atas">
    <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
    <div class="dropdown-menu" aria-labelledby="JDIH PROVINSI SUMATERA">
      <a class="dropdown-item" href="#">Beranda</a>
      <a class="dropdown-item" href="#">Produk Hukum</a>
      <a class="dropdown-item" href="#">Pengaduan</a>
    </div>

    <div class="raperda">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    RAPERDA
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item" href="#">2021</a></li>
    <li><a class="dropdown-item" href="#">2015</a></li>
    <li><a class="dropdown-item" href="#">2012</a></li>
  </ul>
</div>

<div class="perda">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    PERDA
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item" href="#">2021</a></li>
    <li><a class="dropdown-item" href="#">2015</a></li>
    <li><a class="dropdown-item" href="#">2012</a></li>
  </ul>
</div>
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
</div>
    