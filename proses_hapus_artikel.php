<?php
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM artikel WHERE id = '$id'");

if ($hapus) {
    echo "<script>alert('Artikel berhasil dihapus');</script>";
    echo "<script>window.location = 'admin.php'</script>";
} else {
    echo "<script>alert('Artikel Gagal dihapus');</script>";
    echo "<script>window.location = 'admin.php'</script>";
}
?>