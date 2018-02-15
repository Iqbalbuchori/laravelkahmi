<!DOCTYPE html>
<html lang="en">
<head>
  <title>KAHMIPRENEUR | Home</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic%7COpen+Sans:400,600,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="revolution/css/settings.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/spacings.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/color.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body style="font-family: 'Open Sans', sans-serif;">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>

  <header class="nav-type-2">
    
    <nav class="navbar navbar-static-top">
      <div class="navigation">
        <div class="container relative">

          <form method="get" class="search-wrap">
            <input type="search" class="form-control" placeholder="Type &amp; Hit Enter">
          </form>

          <div class="row">

            <div class="navbar-header">
              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap">
                  <a href="welcome">
                    <img class="logo" src="img/logo_dark.png" alt="logo">
                  </a>
                </div>
              </div>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> <!-- end navbar-header -->

            <div class="col-md-9 nav-wrap right">
              
              <div class="collapse navbar-collapse" id="navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown active">
                    <a href="welcome">HOME</a>
                  </li>

                  <li class="dropdown">
                    <a href="about">KAHMIPRENEUR</a>
                  </li>

                  <li class="dropdown">
                    <a href="movie">VIDEO</a>
                  </li>

                  <li class="dropdown">
                    <a href="berita">BERITA</a>
                  </li>

                  <li class="dropdown">
                    <a href="forum">FORUM</a>
                  </li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle">PENDAFTARAN</a>
                    <ul class="dropdown-menu menu-right">
                      <li><a href="{{ route('login') }}">Log in</a></li>
                      <li><a href="{{ route('register') }}">Sign Up</a></li>
                    </ul>
                  </li>

              <li id="mobile-search">
                    <form method="get" class="mobile-search">
                      <input type="search" class="form-control" placeholder="Search...">
                      <button type="submit" class="search-button">
                        <i class="fa fa-search"></i>
                      </button>
                    </form>
                  </li>

                  <li>
                    <a href="#" class="nav-search">
                      <i class="fa fa-search search-trigger"></i>
                      <i class="fa fa-times search-close"></i>
                    </a>
                  </li> 
              </div> <!-- end collapse -->
            </div> <!-- end col -->
            
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->
  </header>


  <div class="main-wrapper-mp oh">

    <!-- Revolution Slider -->
    <section> 
      <div class="rev_slider_wrapper">
        <div class="rev_slider" id="slider2" data-version="5.0">
          <ul>
            <!-- SLIDE 1 -->
            <li 
              data-fstransition="fade"
              data-transition="cube"
              data-easein="default" 
                data-easeout="default"
              data-slotamount="default"
              data-saveperformance="off"
              data-masterspeed="1000"
              data-delay="8000"
              data-title="The Art of Design">
              <!-- MAIN IMAGE -->
              <img src="img/revolution/mp_slide_1.jpg"
                alt=""
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                class="rev-slidebg"
                >

              <!-- LAYER NR. 1 -->
              <div class="tp-caption hero-text giant_nocaps"
                data-x="center"
                data-y="center"
                data-transform_idle="o:1;s:1500;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.1;sY:0.1;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeOut;" 
                data-transform_out="opacity:0;sX:0;sY:0;s:1200;e:Power3.easeInOut;"
                data-start="800
                data-splitout="none">KAHMIPRENEUR
              </div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption subheading_text"
                data-x="center"
                data-y="center"
                data-voffset="84"
                data-transform_idle="o:1;s:1500;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeOut;" 
                data-transform_out="opacity:0;sX:0;sY:0;s:1200;e:Power3.easeInOut;"
                data-start="1000">Saatnya Menjadi Pencipta Lapangan Kerja
              </div>
        
            </li> <!-- end slide 1 -->

            <!-- SLIDE 2 -->
            <li data-transition="cube"
              data-slotamount="1"
              data-masterspeed="1000"
              data-delay="8000"
              data-title="Creative &amp; Emotional">
              <!-- MAIN IMAGE -->
              <img src="img/revolution/mp_slide_2.jpg"
                alt=""
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                class="rev-slidebg"
                >

              <!-- LAYER NR. 1 -->
              <div class="tp-caption hero-text large_white"
                data-x="30"
                data-y="center"
                data-voffset="-50"
                data-transform_idle="o:1;s:1500;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeOut;" 
                data-transform_out="opacity:0;sX:0;sY:0;s:1200;e:Power3.easeInOut;"
                data-start="1000">KAHMIPRENEUR
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption subheading_text"
                data-x="30"
                data-y="center"
                data-voffset="15"
                data-transform_idle="o:1;s:1500;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeOut;" 
                data-transform_out="opacity:0;sX:0;sY:0;s:1200;e:Power3.easeInOut;"
                data-start="1000">Berkontribusi Bersama Membangun Masa Depan Bangsa
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme"
                data-x="30"
                data-y="center"
                data-hoffset="0"
                data-voffset="105" 
                data-transform_idle="o:1;s:1500;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeOut;" 
                data-transform_out="opacity:0;sX:0;sY:0;s:1200;e:Power3.easeInOut;"
                data-start="1000"
                style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='about' class='btn btn-lg btn-transparent'>Selengkapnya</a>
              </div>  
        
            </li> <!-- end slide 2 -->

            <!-- SLIDE 3 -->
            <li data-transition="cube"
              data-slotamount="1"
              data-masterspeed="1000"
              data-delay="8000"
              data-title="Amazing Agency">
              <!-- MAIN IMAGE -->
              <img src="img/revolution/mp_slide_3.jpg"
                alt=""
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                class="rev-slidebg"
                >

              <!-- LAYER NR. 1 -->
              <div class="tp-caption hero-text2 large_white"
                data-x="30"
                data-y="center"
                data-voffset="-90"
                data-transform_idle="o:1;s:1000"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:1000;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1000">
              </div>
  
              <!-- LAYER NR. 3 -->
              <div class="tp-caption subheading_text3"
                data-x="30"
                data-y="center"
                data-voffset="-30"
                data-transform_idle="o:1;s:900"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:1000;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1100">
                <div class="col-sm-6">
            <blockquote class="blockquote-style-1 mb-30">
              <p>
                Incredible change happens in your life when you decide to take 
                <br>
                control of what you do have power over instead of craving 
                <br>
                control over what you don't.
              </p>
              <span>- Steve Maraboli</span>
            </blockquote>         
          </div>
              </div>
            
            </li> <!-- end slide 3 -->

          </ul>

        </div>
      </div>
    </section>
    <!-- Our Services -->

    <!-- From Blog -->
    <section class="section-wrap bg-light from-blog" id="blog">
      <div class="container"> 
        <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center bottom-line">ENTREPRENEUR NEWS</h2>
            <p class="subheading text-center">Our Latest News</p>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div id="owl-blog" class="owl-carousel owl-theme">
              <div class="blog-col">
                <div class="entry-img">
                  <a href="about">
                    <img src="img/blog_1.jpg" alt="">
                  </a>
                </div>
                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="about">Sandiaga Uno Ajak Mahasiswa Setelah Lulus Menjadi Wirausaha</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">Rian Ubay</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>Wakil Gubernur DKI Jakarta Sandiaga Salahuddin Uno mengisi kuliah umum atau studium generale bertema "Being A Winning Young Entrepreneur" di Fakultas Agama Islam, Universitas Muhammadiyah Prof. Dr. Hamka (Uhamka), Jakarta Selata. Dalam kesempatan ini, Sandi menyampaikan mahasiswa pasca-lulus meraih gelar sarjana dapat membuka lapangan pekerjaan melalui wirausaha daripada mencari lapangan pekerjaan.</p>
                    <a href="fullberita" class="read-more">Selengkapnya</a>
                     <i class="icon arrow_right"></i>
                  </div>
                </div>
              </div> <!-- end post -->

              <div class="blog-col">
                <div class="entry-img">
                  <a href="about">
                    <img src="img/blog_2.jpg" alt="">
                  </a>
                </div>
                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="about">CEO HijUp : Follow your heart,<br> follow your dream.</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">Iqbal Buchori</a></li>
                    <li>
                      <a href="#">Februari 11, 2018</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>Terisnpirasi oleh mata kuliah Management Of Change yang ia dapat ketika ia mengenyam pendidikan S1, Diajeng Lestari bertekad untuk menjadi agen perubahan. Setelah memutuskan untuk berhenti bekerja sebagai Marketing Researcher di sebuah perusahaan, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion</p>
                    <a href="fullberita" class="read-more">Selengkapnya</a>
                     <i class="icon arrow_right"></i>
                  </div>
                </div>
              </div> <!-- end post -->

              <div class="blog-col">
                <div class="entry-img">
                  <a href="about">
                    <img src="img/blog_3.jpg" alt="">
                  </a>
                </div>
                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="blog-3.html">All Process Food Lab Studio</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">John Marshal</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>Terisnpirasi oleh mata kuliah Management Of Change yang ia dapat ketika ia mengenyam pendidikan S1, Diajeng Lestari bertekad untuk menjadi agen perubahan. Setelah memutuskan untuk berhenti bekerja sebagai Marketing Researcher di sebuah perusahaan, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion</p>
                    <a href="fullberita" class="read-more">Selengkapnya</a>
                     <i class="icon arrow_right"></i>
                  </div>
                </div>
              </div> <!-- end post -->

            </div>
            <div class="customNavigation mt-40 text-center">
              <a class="prev"><i class="icon arrow_left"></i></a>
              <a class="next"><i class="icon arrow_right"></i></a>
            </div>

          </div> <!-- end row -->
        </div>
      </div>
    </section> <!-- end from blog -->
    <!-- Footer Type-2 -->
   <footer class="footer footer-type-2">
      <div class="container">
        <div class="footer-widgets">
          <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-about-us">
                <h5>Tentang Kami</h5>
                <p class="mb-0">KAHMIPreneur ada untuk merangkul para pengangguran terbuka untuk menciptakan lapangan 
                  kerja sendiri. Terlebih untuk para generasi muda yang memiliki kualitas diri yang baik, sangat 
                  disayangkan jika kualitas tersebut tidak dikembangkan. Program KAHMIPreneur diharapkan 
                  dapat melahirkan dan mencetak generasi wirausaha yang kompeten dan mampu bersaing di 
                  era perdagangan bebas saat ini, <a href="about" style="color:darkred">SELENGKAPNYA</a>
                   <i class="icon arrow_right"></i></p>
              </div>
            </div> <!-- end about us -->

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-get-in-touch">
                <h5>Get in Touch</h5>
                <p class="footer-address">Mayapada Tower I Lt. 20-01B. Setiabudi, Jakarta Selatan, 12920, Indonesia </p>
                <p>Phone: 021 526 0727</p>
                <p>Email: <a href="mailto:kahmipreneur@gmail.com">kahmipreneur@gmail.com</a></p>
                <p>Fax: 021 526 2134</p>

              </div>
            </div> <!-- end stay in touch -->

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-links">
                <h5>Pelayanan</h5>
                <ul>
                  <li><a href="contact">Kontak Kami</a></li>
                  <li><a href="caramendaftar">Cara Mendaftar</a></li>
                  <li><a href="forum">Forum</a></li>
                  <li><a href="about">Berita</a></li>
                </ul>
              </div>
            </div> <!-- end useful links -->

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-posts last">
                <h5>Latest News</h5>
                <div class="footer-entry-list">
                  <div class="footer-entry">
                    <p>
                      <a href="about">Sandiaga Uno Ajak Mahasiswa Setelah Lulus Menjadi Wirausaha.</a>
                    </p>
                    <span>5 Februari, 2018</span>
                  </div> <!-- end entry -->

                  <div class="footer-entry">
                    <p>
                      <a href="about">CEO HijUp : Follow your heart, Follow Your Dream.</a>
                    </p>
                    <span>05 Februari, 2018</span>
                  </div> <!-- end entry -->

                  <div class="footer-entry">
                    <p>
                      <a href="about">lorem ipsum lorem ipsum lorem ipsum</a>
                    </p>
                    <span>05 Februari, 2018</span>
                  </div> <!-- end entry -->
                </div>
              </div>
            </div> <!-- end latest posts -->

          </div> <!-- end row -->
        </div> <!-- end footer widgets -->      
      </div> <!-- end container -->
      

    <footer>
      <div class="bottom-footer">
        <div class="container">
          <div class="row">

            <div class="col-sm-6 col-xs-12 copyright">
              <span>
               © 2018 KAHMIPRENEUR  |  Made by <a href="http://gjidigital.com">Global Jaring Indonesia</a>
              </span>
            </div>
              
            <div class="col-sm-4 col-sm-offset-2 col-xs-12 footer-socials">
              <div class="social-icons clearfix right">
                <a href="https://twitter.com/kahmiPreneur"><i class="fa fa-twitter"></i></a>
                <a href="https://facebook.com/kahmipreneur"><i class="fa fa-facebook"></i></a>                  
                <a href="https://instagram.com/kahmipreneur"><i class="fa fa-instagram"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="js/rev-slider.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>


    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>
</html>