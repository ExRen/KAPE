@extends("Layout.proses")
@section("proses")


<?php
if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        echo "Tambah Data";
    } else if ($_POST['aksi'] == "edit") {
        echo "Edit Data";
    }
}
?>

@endsection