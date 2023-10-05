<?php
session_start();
$ceklogin = false;
if (isset($_SESSION['username'])) {
    $ceklogin = true;
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
        Artikel - Women's Motor Club
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
                        <li class="propClone"><a href="artikel.php" style="color: #FF5599">Artikel</a></li>
                        <li class="propClone"><a href="kontak.php">Kontak Kami</a></li>
                        <li class="propClone">
                            <?php if($ceklogin === true) { ?> 
                                <a href="admin.php">Admin</a>
                            <?php } else { ?>
                                <a href="login.php">Login</a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="text-homeimage">
                        <div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
                            Artikel
                        </div>
                        <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
                            Artikel menarik seputar dunia club motor wanita
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <section class="item content container">
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM artikel order by id desc");
            while ($tampil = mysqli_fetch_array($data)) {
                ?>
                <div>
                    <h4><?php echo $tampil['judul'] ?></h4>
                    <p class="text-info">Diposting pada: <?php echo $tampil['tanggal'] ?></p>
                    <a href="detail_artikel.php?id=<?php echo $tampil['id'] ?>" class="btn" style ="background:#FF5599;color:#FFFFFF"">Baca Selengkapnya</a>
                </div>
                <hr>
            <?php } ?>
        </section>

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