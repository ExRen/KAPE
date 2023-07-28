@extends('layouts.app')
@section('content')

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
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <title>Admin</title>
</head>
<body>
<div class="container-fluid">
        <h3 class="text-black-50" style="font-size: 25px; padding:auto;">You are logged in!</h3>
    </div>
 <!--button-->
    <a href="/kelola" type="button" class="btn btn-success">
        Tambah Data
</a>
 <!--akhir button-->
<!--table-->
<div class="table-responsive mt-5">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tahun</th>
                    <th>Detail</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>2020</td>
                    <td>Peraturan tentang Valy </td>
                    <td>
                        <object data="doc/form 3.pdf" type="application / pdf">
                        <embed src = "doc/form 3.pdf" type = "application / pdf" width = "10%" height = "60px" download="aaa"/>
                        <td>
                        <a href="/kelola?ubah=1" type="button" class="btn btn-success btn-sm">
                            Ubah
                        </a>
                        <button type="button" class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                        </td>
                    </object>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
<!--akhir table-->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>

</html>
    @endsection
