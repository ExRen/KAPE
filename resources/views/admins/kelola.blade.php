<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css') }}" />
    <title>Login Admin JDIH</title>
    <link rel="icon" href="{{asset('logo/logos-01.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
</head>

<body>
    <div class="container mt-3">
        <form action="/proses" method="post" >
            @csrf
            <div class="mb-3 row">
                <label for="inputNomor" class="col-sm-2 col-form-label">Nomor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNomor" placeholder="Masukkan Nomor">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputTahun" class="col-sm-2 col-form-label">Tahun</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTahun" placeholder="Masukkan Tahun">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inpuDetail" class="col-sm-2 col-form-label">Detail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNomor" placeholder="Masukkan Detail">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="filepdf" class="col-sm-2 col-form-label">File PDF</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="filepdf">
                </div>
            </div>

            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                    if (isset($_GET['ubah'])) {
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            Simpan Perubahan
                        </button>
                    <?php
                    } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            Tambahkan
                        </button>
                    <?php
                    }
                    ?>
                    <a href="/halutama" type="button" class="btn btn-danger">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
    @yield("lola")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>