<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    $ubah = mysqli_query($koneksi, "UPDATE artikel SET judul='$judul', konten='$konten' WHERE id='$id'");


    if ($ubah) {
        echo "<script>alert('Artikel berhasil diubah');</script>";
        echo "<script>window.location = 'admin.php'</script>";
    } else {
        echo "<script>alert('Artikel Gagal diubah');</script>";
        echo "<script>window.location = 'admin.php'</script>";
    }
}
?>