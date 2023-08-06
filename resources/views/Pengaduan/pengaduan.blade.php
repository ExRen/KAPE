@extends ('Layout/pengaduan')
@section('report')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/pengaduan.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style.css" />
        <title>Pengaduan</title>


    </head>
    <!-- logo atas -->
    <div class="row">
        <div class="logo">
            <img src="{{ URL('logo/logo.png') }}" alt="logo1" height="51px" align="left">
            <img src="{{ URL('logo/logo2.png') }}" alt="logo2" height="60px" align="right">

        </div>
    </div>

    <body id="pengaduan">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #FF3C38">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/produkhukum" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Produk Hukum
                            </a>

                            <ul class="dropdown-menu" id="dropbtn">
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
                            <a class="nav-link " href="/pengaduan">Pengaduan</a>
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
        {{-- <div class="row">
            <div class="col-lg-4" id="card">
                <div class="card">
                    <div class="card-header" style="background-color: #C6EBC5">
                        <h3 style="text-align: center">PENGADUAN</h3>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="isi nama disini">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pengaduan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                        <button type="submit">Kirim</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <form action="/pengaduan" method="post">
            @csrf
            <div style=""class="row">
                <div style="margin-left:8%;"class="col lg-4">
                    <div class="mb-3">
                        <label for="form" class="form-label">Nama*</label>
                        <input type="text" name="nama" class="form-control" id="form" aria-describedby=""
                            required>
                    </div>
                </div>
                <div style="margin-right:8%"class="col lg-4">
                    <div class="mb-3">
                        <label for="form" class="form-label">Pengaduan*</label>
                        <input type="text" name="isi" class="form-control" id="form" aria-describedby=""
                            required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="content-wrapper mt-5">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Data Pengaduan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Pengaduan</th>
                                        {{-- <th>Tanggapan</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengaduans as $pengaduan)
                                        <tr>
                                            <td>{{ $pengaduan->nama }}</td>
                                            <td>{{ $pengaduan->isi }}</td>
                                            {{-- <td>
                                                @if ($pengaduan->reply == '')
                                                    Pengaduan belum ditanggapi admin. Silahkan menunggu.
                                                @else
                                                    {{ $pengaduan->reply }}
                                                @endif
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 justify-content-center">
                    <div class="kontak">
                        <h4>Kontak Kami</h4>
                        <p>Jalan Kapten A.Rivai Nomor 3
                            (0711) 352388
                            birohukumsumsel@yahoo.com
                        </p>
                        <p>Biro Hukum dan HAM Setda Provinsi Sumatera Selatan</p>
                    </div>
                </div>
                <div class="col-lg-6 justify-content-center">
                    <h4>Link Terkait</h4>
                    <ul>
                        <li><a href="instagram.com" target="_blank">Republik Indonesia</a></li>
                        <li href="">Sekneg RI</li>
                        <li href="">BPHN</li>
                        <li href="">Sumatera Selatan</li>
                        <li href="">Palembang</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.js"></script>
    <script src="js/sb-admin-charts.js"></script>

    </html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
