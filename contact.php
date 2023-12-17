<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['iduser'])) {
    echo "<script>location='login.php'</script>";
} else {
?>


    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <title>Contact Us</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta tag Keywords -->
        <!-- Custom-Files -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <!-- /Fonts -->
        <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
        <!-- //Fonts -->

    </head>

    <body>
    
        
        <div class="main-sec inner-page">
            <!-- //header -->
            <header class="py-sm-3 pt-3 pb-2" id="home">
                <div class="container">
                    <!-- nav -->
                    <div class="top-w3pvt d-flex">
                        <div id="logo">
                            <h1> <a href="index.php"><span class="log-w3pvt">TACTICAL</span> GEAR</a> <label class="sub-des">Online Store</label></h1>
                        </div>

                        <div class="forms ml-auto">

                            <a href="login.php" class="btn"><span class="fa fa-user-circle-o"></span> <?= $_SESSION['user_name'] ?></a>
                            <a href="keluar.php" class="btn"><span class="fa fa-pencil-square-o"></span> logout</a>
                        </div>
                    </div>
                    <div class="nav-top-wthree">
                        <nav>
                            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="shop.php">Collections</a></li>
                                <li class="active"><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- //nav -->
                        <div class="search-form ml-auto">
                            <div class="form-w3layouts-grid">
                                <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </header>
            <!-- //header -->

        </div>

        <!-- //banner-->

        <!--/contact -->
        <section class="banner-bottom py-5" style="justify-content: center">
        <div class="container py-md-5">
            <h3 class="title-wthree mb-lg-5">Contact Us </h3>
            <h4 class="text-danger">!!! UNTUK MELANJUTKAN PESANAN ANDA SILAHKAN LANJUT KE WHATSAPP !!!</h4>
            <p class="text-secondary">KLIK TOMBOL DIBAWAH</p>
            <a href="https://wa.me/+62895419706050" class="btn shop w-50 ">Shop Now</a>
        </div>
        
            <!-- <a href="https://wa.me/+62895419706050" class="btn btn-primary w-100"> WHATSAPP</a> -->
            <!-- <div class="row contact_information">
                <div class="col-md-6">
                    <div class="contact_right p-lg-5 p-4">
                        <form action="#" method="post">
                            <div class="field-group">

                            
                                    <div class="content-input-field">
                                        <input name="nama" id="text1" type="text" value="" placeholder="Nama" required="">
                                    </div>
                                </div>
                                <div class="field-group">

                                    <div class="content-input-field">
                                        <input name="email" id="text1" type="email" value="" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="field-group">

                                    <div class="content-input-field">
                                        <input name="nowhatsapp" id="text2" type="text" value="" placeholder="Nomor Hp" required="">
                                    </div>
                                </div>
                                <div class="field-group">
                                    <div class="content-input-field">
                                        <input name="alamat" id="text3" type="text" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="field-group">
                                    <div class="content-input-field">
                                        <textarea name="pesan" placeholder="Pesan..." required=""></textarea>
                                    </div>
                                </div>
                                <div class="content-input-field">
                                     <button type="submit" class="btn">Submit</button>
                                    
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    <div class="col-md-6 contact_left p-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.237167697539!2d113.41859507413754!3d-7.764654677010106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7004e331dfe01%3A0x501e6ccdf8eec0fd!2sSMK%20Negeri%202%20Kraksaan!5e0!3m2!1sid!2sid!4v1701937176136!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
        </section>
        


        <!--/newsletter -->
        <!-- <section class="newsletter-w3pvt py-5">
            <div class="container py-md-5">
                <form method="post" action="#">
                    <p class="text-center">Subscribe to the Handbags Store mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="row subscribe-sec">
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email.." name="email" required="">

                        </div>
                        <div class="col-md-3">

                            <button type="submit" class="btn submit">Subscribe</button>
                        </div>

                    </div>

                </form>
            </div>
        </section> -->
        <!--//newsletter -->

        <!-- footer -->
        <div class="footer_agileinfo_topf py-5">
            <div class="container py-md-5">
                <div class="row">
                    <div class="col-lg-3 footer_wthree_gridf mt-lg-5">
                        <h2><a href="index.php"><span>Tactical</span>GEAR
                            </a> </h2>
                        <label class="sub-des2">Online Store</label>
                    </div>
                    <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-4">
                        <ul class="footer_wthree_gridf_list">
                            <li>
                                <a href="index.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Home</a>
                            </li>
                            <li>
                                <a href="about.php"><span class="fa fa-angle-right" aria-hidden="true"></span> About</a>
                            </li>
                            <li>
                                <a href="shop.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Shop</a>
                            </li>
                           
                        </ul>
                    </div>

                    <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                        <ul class="footer_wthree_gridf_list">
                            <li>
                                <a href="contact.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Contact Us</a>
                            </li>
                            <li>
                                <a href="shop.php"><span class="fa fa-angle-right" aria-hidden="true"></span>Collections</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                        <ul class="footer_wthree_gridf_list">
                            <li>
                                <a href="login.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Login </a>
                            </li>

                            <li>
                                <a href="register.php"><span class="fa fa-angle-right" aria-hidden="true"></span>Register</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>

                <div class="w3ls-fsocial-grid">
                    <h3 class="sub-w3ls-headf">Follow Us</h3>
                    <div class="social-ficons">
                        <ul>
                            <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                            <li><a href="#"><span class="fa fa-google"></span>Google</a></li>
                        </ul>
                    </div>
                </div>
                <div class="move-top text-center mt-lg-4 mt-3">
                    <a href="#home"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <!-- //footer -->

        <!-- copyright -->
        <div class="cpy-right text-center py-3">
            <p>© artbykhotim
            </p>

        </div>
        <!-- //copyright -->

    </body>
    <!-- <script src="wa.js"> </script> -->
    </html>
<?php
}
?>