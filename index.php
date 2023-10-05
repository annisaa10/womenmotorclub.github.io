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
        Women's Motor Club
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
                        <li class="propClone"><a href="index.php" style="color: #FF5599">Home</a></li>
                        <li class="propClone"><a href="produk.php">Produk</a></li>
                        <li class="propClone"><a href="galeri.php">Galeri</a></li>
                        <li class="propClone"><a href="artikel.php">Artikel</a></li>
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
                            Selamat datang di website <br/> Women's Motor Club!
                        </div>
                        <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
                            Kami merayakan semangat dan kebebasan wanita dalam berkendara motor.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- STEPS =============================-->
<div class="item content">
    <div class="container toparea">
        <div class="text-center ">
            <h3 class="text-center" >Siapa Kami?</h3>
            <p style="padding: 20px">Kami adalah Women's Motor Club, sebuah komunitas eksklusif yang didedikasikan untuk
                wanita yang berbagi
                semangat dan kecintaan terhadap berkendara motor. Dengan berdiri pada tahun 2021, kami telah
                menjadi rumah bagi beragam wanita yang menjadikan motor sebagai bagian tak terpisahkan dari gaya hidup
                mereka. Kami bangga menjadi tempat di mana wanita-wanita tangguh ini dapat bersatu, belajar, dan tumbuh
                bersama dalam dunia motor. Kami mengutamakan keselamatan dalam berkendara dan menjunjung tinggi
                persaudaraan di atas segalanya. Selamat datang di komunitas kami, di mana kebebasan berada di atas dua
                roda, dan semangat kami terus berkobar!</p>

            <h4>Sejarah Singkat & Bidang Kegiatan</h4>
            <p>Women's Motor Club didirikan pada tahun 2021 oleh sekelompok wanita yang
                bersemangat tentang motor. Kami adalah klub motor yang eksklusif untuk wanita yang berbagi cinta mereka
                untuk berkendara.
                Kami aktif dalam berbagai kegiatan, termasuk perjalanan bersama, pertemuan bulanan,
                acara amal, dan kami juga dengan bangga memiliki produk eksklusif yang tersedia untuk dijual bagi
                anggota setia kami. Keamanan selalu menjadi prioritas utama kami.</p>
                <br>
            <h4>Pengalaman, Kelebihan serta Visi & Misi Kami</h4>
            <p>
                Kami adalah klub motor yang berpengalaman dengan lebih dari 2 tahun di dunia motor.
                Kelebihan kami adalah komunitas yang solid, pengalaman berkendara yang mendalam, dan komitmen terhadap
                keselamatan.

                Visi: Menjadi klub motor terdepan yang menyatukan para bikers sejati untuk memperkuat persaudaraan dan
                keselamatan di jalan raya.
                Misi: Mengedepankan keamanan berkendara, mempromosikan budaya berkendara yang bertanggung jawab, dan
                membantu masyarakat melalui kegiatan amal.
            </p>
            <br>
            <h4>Kegiatan dan Event</h4>
            <p>
                Women's Motor Club aktif dalam berbagai kegiatan, termasuk perjalanan bersama, pertemuan mingguan hingga bulanan,
                acara amal, dan edukasi keselamatan berkendara.
            </p>
        </div>
    </div>
</div>


<!-- LATEST ITEMS =============================-->
<section class="item content">
    <div class="container">
        <div class="underlined-title">
            <div class="editContent">
                <h1 class="text-center latestitems">Produk Terbaik Kami</h1>
            </div>
            <div class="wow-hr type_short">
				<span class="wow-hr-h">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="productbox">
                    <div class="fadeshop">
                        <div class="captionshop text-center" style="display: none;">
                            <h3>Pinky Rabbit Helmet</h3>
                            <p>
                                Helm dengan desain yang unik dan menarik. Didesain khusus untuk para wanita yang ingin
                                tampil beda.
                            </p>
                            <p>
                                <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Pesan</a>
                            </p>
                        </div>
                        <span class="maxproduct"><img src="images/produk_helm.jpeg" alt=""></span>
                    </div>
                    <div class="product-details">
                        <a href="#">
                            <h1>Pinky Rabbit Helmet</h1>
                        </a>
                        <span class="price">
						<span class="edd_price">Rp849.000</span>
						</span>
                    </div>
                </div>
            </div>
            <!-- /.productbox -->
            <div class="col-md-4">
                <div class="productbox">
                    <div class="fadeshop">
                        <div class="captionshop text-center" style="display: none;">
                            <h3>Jaket WMC</h3>
                            <p>
                                Jaket dengan kualitas terbaik dan desain yang menarik. Didesain khusus untuk para wanita
                            </p>
                            <p>
                                <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Pesan</a>
                            </p>
                        </div>
                        <span class="maxproduct"><img src="images/produk_jaket.jpeg" alt=""></span>
                    </div>
                    <div class="product-details">
                        <a href="#">
                            <h1>Jaket WMC</h1>
                        </a>
                        <span class="price">
						<span class="edd_price">Rp699.000</span>
						</span>
                    </div>
                </div>
            </div>
            <!-- /.productbox -->
            <div class="col-md-4">
                <div class="productbox">
                    <div class="fadeshop">
                        <div class="captionshop text-center" style="display: none;">
                            <h3>Protaper Handgrip</h3>
                            <p>
                                Handgrip yang memiliki kualitas dan desain terbaik.
                            </p>
                            <p>
                                <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Pesan</a>
                            </p>
                        </div>
                        <span class="maxproduct"><img src="images/produk_handgrip.jpeg" alt=""></span>
                    </div>
                    <div class="product-details">
                        <a href="#">
                            <h1>Protaper Handgrip</h1>
                        </a>
                        <span class="price">
						<span class="edd_price">Rp249.000</span>
						</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<!-- BUTTON =============================-->
<div class="item content">
    <div class="container text-center">
        <a href="produk.php" class="homebrowseitems">Lihat Semua Produk
            <div class="homebrowseitemsicon">
                <i class="fa fa-star fa-spin"></i>
            </div>
        </a>
    </div>
</div>
<br/>


<!-- AREA =============================-->
<div class="item content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-microphone infoareaicon"></i>
                <div class="infoareawrap">
                    <h1 class="text-center subtitle">General Questions</h1>
                    <p>
                    Club Motor Wanita adalah sebuah komunitas yang didedikasikan untuk para wanita pecinta motor. 
                    Kami adalah tempat di mana Anda bisa berbagi pengalaman, belajar tentang perjalanan, 
                    merawat kendaraan Anda, dan merayakan semangat kebebasan yang hanya bisa dirasakan saat berada di atas motor.
                    </p>
                </div>
            </div>
            <!-- /.col-md-4 col -->
            <div class="col-md-4">
                <i class="fa fa-comments infoareaicon"></i>
                <div class="infoareawrap">
                    <h1 class="text-center subtitle">Discussion</h1>
                    <p>
                    Di Club Motor Wanita, kami mengerti bahwa setiap pengendara memiliki perjalanan mereka sendiri. 
                    Dalam perjalanan yang indah ini, kadang-kadang Anda mungkin menghadapi tantangan atau pertanyaan. 
                    Itulah mengapa kami hadir dengan komitmen untuk memberikan dukungan yang Anda butuhkan melalui tema dukungan kami.
                    </p>
                </div>
            </div>
            <!-- /.col-md-4 col -->
            <div class="col-md-4">
                <i class="fa fa-bullhorn infoareaicon"></i>
                <div class="infoareawrap">
                    <h1 class="text-center subtitle">Hire Us</h1>
                    <p>
                    Kami di Club Motor Wanita tidak hanya sebuah komunitas yang menyediakan dukungan dan
                    inspirasi kepada para pengendara motor wanita. Kami juga memiliki tim ahli yang siap membantu
                    Anda dengan berbagai kebutuhan berkendara Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- TESTIMONIAL =============================-->
<div class="item content">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="slide-text">
                <div>
                    <h2><span class="uppercase">Review</span></h2>
                    <p>
                    Saya telah menemukan inspirasi sejati di Club Motor Wanita. Komunitas ini tidak hanya tentang mengendarai motor, 
                    tetapi juga tentang mendukung satu sama lain dalam setiap aspek kehidupan. Kami adalah keluarga yang saling mendukung.
                    </p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                    <p>
                        <strong>Annisa</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#FF5599;">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
                    <h1 class="callactiontitle">Klien & Sponsor Kami</h1>
                </div>
                <br/>
                <div data-scrollreveal="enter bottom over 0.4s after 0.1s">
                    <div style="display: flex; justify-content: center;">
                        <div class="col-sm-4 col-md-2">
                            <img src="images/yamaha.png" height="30"/>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <img src="images/shell.png" height="30"/>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <img src="images/polantas.png" height="30"/>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <img src="images/pertamina.png" height="30"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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