<?php include ("inc/koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
   <head>
<meta http-equiv="content-language" content="id" />
<meta name="description" content="Portal info berita terkini, terpercaya, terlengkap, dan terbaru tentang kriminal, sport, hiburan, lifestyle, dan isu nasional terhangat di Jawa Barat Indonesia" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="portal, berita, news,  info terkini, jawa barat, bandung, jabar, berita terbaru, viral , berita terkini, berita update, news, crime, pilkada, persib bandung, sepak bola, sports, style, health, makanan, opini, travelling, pendidikan, konsultasi, jual beli" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="author" content="Portal Berita" />
<meta name="generator" content="CSZ CMS | Version 1.1.5" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta property="og:site_name" content="Portal Berita" />
<meta property="og:title" content="Poskota Portal info berita terkini | Portal Berita" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Portal info berita terkini, terpercaya, terlengkap, dan terbaru tentang kriminal, sport, hiburan, lifestyle, dan isu nasional terhangat di Jakarta Indonesia" />
<!-- <meta property="og:url" content="https://jabar.poskota.co.id/" />
<meta property="og:image" content="https://jabar.poskota.co.id/photo/logo/2020/1601982926_1-org.png" /> -->
<meta property="og:locale" content="id_ID" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Poskota Portal info berita terkini | Portal Berita" />
<meta name="twitter:description" content="Portal info berita terkini, terpercaya, terlengkap, dan terbaru tentang kriminal, sport, hiburan, lifestyle, dan isu nasional terhangat di Jawa Barat Indonesia" />
<!-- <meta name="twitter:image" content="https://jabar.poskota.co.id/photo/logo/2020/1601982926_1-org.png" /> -->
<meta itemprop="name" content="Poskota Portal info berita terkini | Portal Berita" />
<meta name="googlebot" content="index, follow" />
<meta name="googlebot-news" content="index, follow" />
<meta name="language" content="id" />
<meta name="geo.country" content="id" />
<meta name="geo.placename" content="Indonesia" />
<meta property="article:author" content="Portal Berita" />
<meta property="fb:app_id" content="729881971066762" />
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Portal Berita</title>
      <!-- Google font -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
      <!-- Bootstrap -->
      <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Font Awesome Icon -->
      <link rel="stylesheet" href="css/font-awesome.min.css">

      <!-- icon -->
     

      <!-- Custom stlylesheet -->
      <link type="text/css" rel="stylesheet" href="css/style.css" />

      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- HEADER -->
      <header id="header">
         <!-- NAV -->
         <div id="nav">
            <!-- Top Nav -->
            <div id="nav-top">
               <div class="container">
                  <!-- social -->
                 <ul class="nav-social">
                    <a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
               </ul>
                  <!-- /social -->
                  <!-- logo -->
                  <!-- <div class="nav-logo">
                     <a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
                  </div> -->
                  <!-- /logo -->
                  <!-- search & aside toggle -->
                  <div class="nav-btns">
                     <button class="aside-btn"><i class="fa fa-bars"></i></button>
                     <button class="search-btn"><i class="fa fa-search"></i></button>
                     <div id="nav-search">
                        <form>
                           <input class="input" name="search" placeholder="Enter your search...">
                        </form>
                        <button class="nav-close search-close">
                        <span></span>
                        </button>
                     </div>
                  </div>
                  <!-- /search & aside toggle -->
               </div>
            </div>
            <!-- /Top Nav -->
            <!-- Main Nav -->
            
            <?php 
                  include ("plugin/kategori.php");?>
            <!-- /Main Nav -->
            <!-- Aside Nav -->
            <div id="nav-aside">
               <ul class="nav-aside-menu">
                  <li><a href="index.html">Home</a></li>
                  <li class="has-dropdown">
                     <a>Categories</a>
                     <ul class="dropdown">
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Health</a></li>
                     </ul>
                  </li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contacts</a></li>
                  <li><a href="#">Advertise</a></li>
               </ul>
               <button class="nav-close nav-aside-close"><span></span></button>
            </div>
            <!-- /Aside Nav -->
         </div>
         <!-- /NAV -->
      </header>
      <!-- /HEADER -->
      <!-- SECTION -->
      <div class="section">
         <!-- container -->
         <div class="container">
            <!-- row -->
            <?php  include ("plugin/headline.php"); ?>
         </div>
         <!-- /container -->
      </div>
      <!-- /SECTION -->
      <div class="section">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div class="row">
            <div class="col-md-8">
               <!-- row -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title">
                        <h2 class="title">Recent posts</h2>
                     </div>
                  </div>
                  <!-- post -->
                     <div class="col-md-12">
                         <?php  include ("plugin/list_post.php"); ?>
                

                  <!-- /post -->
               
                  </div>
               </div>
               <!-- /row -->
            </div>
            <div class="col-md-4">
               <!-- ad widget-->
               <?php  include ("plugin/iklan.php"); ?>

            </div>
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>

      <!-- FOOTER -->
      <footer id="footer">
         <!-- container -->
         <div class="container">
            <!-- row -->
            <div class="row">
               <div class="col-md-3">
                  <div class="footer-widget">
                     <div class="footer-logo">
                        <a href="index.html" class="logo"><img src="./img/logo-alt.png" alt=""></a>
                     </div>
                     <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                     <ul class="contact-social">
                        <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget">
                     <h3 class="footer-title">Categories</h3>
                     <div class="category-widget">
                        <ul>
                           <li><a href="#">Lifestyle <span>451</span></a></li>
                           <li><a href="#">Fashion <span>230</span></a></li>
                           <li><a href="#">Technology <span>40</span></a></li>
                           <li><a href="#">Travel <span>38</span></a></li>
                           <li><a href="#">Health <span>24</span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget">
                     <h3 class="footer-title">Tags</h3>
                     <div class="tags-widget">
                        <ul>
                           <li><a href="#">Social</a></li>
                           <li><a href="#">Lifestyle</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Travel</a></li>
                           <li><a href="#">Technology</a></li>
                           <li><a href="#">Fashion</a></li>
                           <li><a href="#">Life</a></li>
                           <li><a href="#">News</a></li>
                           <li><a href="#">Magazine</a></li>
                           <li><a href="#">Food</a></li>
                           <li><a href="#">Health</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget">
                     <h3 class="footer-title">Newsletter</h3>
                     <div class="newsletter-widget">
                        <form>
                           <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                           <input class="input" name="newsletter" placeholder="Enter Your Email">
                           <button class="primary-button">Subscribe</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="footer-bottom row">
               <div class="col-md-6 col-md-push-6">
                  <ul class="footer-nav">
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html">About Us</a></li>
                     <li><a href="contact.html">Contacts</a></li>
                     <li><a href="#">Advertise</a></li>
                     <li><a href="#">Privacy</a></li>
                  </ul>
               </div>
               <div class="col-md-6 col-md-pull-6">
                  <div class="footer-copyright">
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </div>
               </div>
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </footer>
      <!-- /FOOTER -->
      <!-- jQuery Plugins -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>