<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
    <title>
        Admin Ubah Artikel - Women's Motor Club
    </title>
</head>
<body>


<!-- HEADER =============================-->
<header class="item header margin-top-0">
    <div class="wrapper">
        <nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle"
                            type="button">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a href="index.php" class="navbar-brand">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="images/logo.png" width="100" height="40" class="d-inline-block align-top"/>
                            </div>
                            <div class="col-sm-8">
                                <h4>
                                    Women's Motor Club
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="propClone"><a href="index.php">Home</a></li>
                        <li class="propClone"><a href="produk.php">Produk</a></li>
                        <li class="propClone"><a href="galeri.php">Galeri</a></li>
                        <li class="propClone"><a href="artikel.php">Artikel</a></li>
                        <li class="propClone"><a href="kontak.php">Kontak Kami</a></li>
                        <li class="propClone"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br/>
        <br/>
    </div>
</header>

<br/>
<br/>
<br/>
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Ubah Artikel</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="proses_ubah_artikel.php" method="post">
                <?php
                include 'koneksi.php';

                $id = $_GET['id'];

                $artikel = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id = '$id'");
                $artikel = mysqli_fetch_array($artikel);
                ?>

                <input type="hidden" name="id" value="<?php echo $artikel['id'] ?>">
                <div class="row">
                    <div class="col-md-12">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul Artikel"
                            value="<?php echo $artikel['judul'] ?>" required>
                        <br/>
                    </div>
                    <div class="col-md-12">
                        <label for="isi_artikel">Isi Konten Artikel</label>
                        <textarea name="konten" rows="5" class="form-control" placeholder="Isi Konten Artikel"
                                required><?php echo $artikel['konten'] ?></textarea>
                        <br/>
                    </div>
                    <div class="col-md-12 text-center">
                        <br/>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        <a href="admin.php" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<br/>
<br/>


<!-- FOOTER =============================-->
<div class="footer text-center">
    <div class="container">
        <div class="row">
            <p class="footernote">
                Women's Motor Club
            </p>
            <ul class="social-iconsfooter">
                <li><a href="#"><i class="fa fa-phone"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
            <p>
                &copy; 2021<br/>
                Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
            </p>
        </div>
    </div>
</div>

<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.fadeshop').hover(
            function () {
                $(this).find('.captionshop').fadeIn(150);
            },
            function () {
                $(this).find('.captionshop').fadeOut(150);
            }
        );
    });
</script>

</body>
</html>