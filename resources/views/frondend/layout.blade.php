<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="{{ asset('frondend/icon/Favicon_icon.png') }}"/>

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap Icons -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

      <!-- AOS CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

   
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frondend/fonts/flaticon/font/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('frondend/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('fronend/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('frondend/css/style.css') }}" />

    <title> UltraNet </title>

  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">

              <a href="" class="">
                  <img class="logo-navbar" src="{{ asset('frondend/icon/Logo_Ultranet.png') }}" alt="Logo" style="height: 40px;">
              </a>
              <a href="index.html" class="logo m-0 ms-2">UltraNet</a>
          
            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
              <li class="active"><a href="#">Home</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle custom-dropdown" href="#" id="solutionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Solution
                </a>
                <ul class="dropdown-menu" aria-labelledby="solutionDropdown">
                  <li><a class="dropdown-item" href="#">Internet</a></li>
                  <li><a class="dropdown-item" href="#">Data Center</a></li>
                  <li><a class="dropdown-item" href="#">Cloud Services</a></li>
                  <li><a class="dropdown-item" href="#">IT Solutions</a></li>
                </ul>
              </li>
              <li><a href="#">About</a></li>
              <li><a href="">Contact</a></li>         
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    @yield('content')

    <div class="site-footer mt-5" >
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Kantor pusat</h3>
              <ul class="" style="margin-left: -35px">
                <p> Kp. tank desa girimulya kec. Cibungbulang kab. Bogor jawa barat 13360</p>
              </ul>
              <h3 style="margin-left: -3px">Cabang Bogor</h3>
              <ul style="margin-left: -35px">
                <p> Kp. tank desa girimulya kec. Cibungbulang kab. Bogor jawa barat 13360</p>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3 class="poppins-bold">Melayani</h3>
              <ul class="list-unstyled float-start links">
                <li><a href="#">Internet</a></li>
                <li><a href="#">FTTH (Fiber Ke Rumah)</a></li>
                <li><a href="#">Pusat Data</a></li>
                <li><a href="#">Komputasi Awan</a></li>
                <li><a href="#">Tempat Penjualan</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Visi kami</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kontak Kami</a></li>
              </ul>
               <ul class="list-unstyled social">
                <li>
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-pinterest"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-dribbble"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . Semua Hak Dilindungi Undang-undang. &mdash; UltraNet.
            </p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <!-- <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div> -->

   <script>
  document.getElementById("searchIcon").addEventListener("click", function() {
    var inputContainer = document.getElementById("inputContainer");
    
    // Toggle display between 'flex' and 'none'
    if (inputContainer.style.display === "none" || inputContainer.style.display === "") {
      inputContainer.style.display = "flex";  // Show search input
    } else {
      inputContainer.style.display = "none";  // Hide search input
    }
  });

  AOS.init({
    duration: 1000, // Durasi animasi dalam milidetik
    once: true, // Hanya animasi sekali saat scroll
  });

  const logo = document.querySelector(".logo").cloneNode(true);
  document.querySelector(".logo-container").append("logo");

  AOS.init({
    duration: 1000, // Animasi muncul dalam 1 detik
    easing: 'ease-in-out',
  });

</script>


    
<!-- AOS (Animate on Scroll) CSS/JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

    <script src="{{ asset('frondend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frondend/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('frondend/js/aos.js') }}"></script>
    <script src="{{ asset('frondend/js/navbar.js') }}"></script>
    <script src="{{ asset('frondend/js/counter.js') }}"></script>
    <script src="{{ asset('frondend/js/custom.js') }}"></script>
  </body>
</html>
