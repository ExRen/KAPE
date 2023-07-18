@extends('Layout/index')
@section('isi')
<div class="logo">
    <img src="" alt="">
    
</div>
<div class="tab-bar">
    <ul>
        <li>Beranda</li>
        <li>Produk Hukum</li>
        <li>Pengaduan</li>
        <li><input type="search" id="gsearch" name="gsearch">
    </ul>
</div>
<div class="peraturan">
    <h2>Peraturan</h2>
    <ul>
        <div class="raperda">
        <li>Raperda
            <ul>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
            </ul>
        </li>
        </div>
        <li>Peraturan Daerah (RAPERDA)
            <ul>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
            </ul>
        </li>
        <li>Peraturan Kepala Daerah
            <ul>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
            </ul>
        </li>
        <li>Keputusan Kepala Daerah
            <ul>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
            </ul>
        </li>
        <li>Peraturan Bersama kepala Daerah
            <ul>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
            </ul>
        </li>
        <li>Peraturan DPRD Provinsi
            <ul>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
            </ul>
        </li>
        <li>Surat Edaran Kepala Daerah
            <ul>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
            </ul>
        </li>
        <li>MoU/Kerjasama Antar Daerah
            <ul>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
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
</div>
    
@endsection