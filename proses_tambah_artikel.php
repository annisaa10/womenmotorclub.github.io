<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $judul = $_POST['judul'];
    $konten = $_POST['konten'];
    $tanggal = date("Y-m-d");

    $simpan = mysqli_query($koneksi, "INSERT INTO artikel (judul, konten, tanggal) VALUES ('$judul','$konten','$tanggal')");


    if ($simpan) {
        echo "<script>alert('Artikel berhasil disimpan');</script>";
        echo "<script>window.location = 'admin.php'</script>";
    } else {
        echo "<script>alert('Artikel Gagal disimpan');</script>";
        echo "<script>window.location = 'admin.php'</script>";
    }
}
?>