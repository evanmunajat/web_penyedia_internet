@extends('frondend.layout')

@section('content')

<!-- resources/views/header.blade.php -->
<!-- resources/views/header.blade.php -->

{{-- OPEN HEADER --}}
<div class="container py-5">
  <div class="row align-items-center">
      <!-- Teks di sebelah kiri -->
      <div class="col-md-5" data-aos="fade-up" data-aos-delay="300" style="margin-top: -10%">
          <h1 class="fw-bold" style="color: #004d40;">UltraNet</h1>
          <p class="text-muted">menyediakan layanan internet terbaik untuk kebutuhan Anda. Dengan kecepatan tinggi dan jangkauan luas, kami memastikan Anda tetap terhubung tanpa hambatan. Apapun kebutuhan digital Anda, dari streaming, gaming, hingga bekerja dari rumah, Ultra Net memberikan koneksi yang andal dan stabil.
          </p>
          <div class="button-header">
          <button class="btn-header" style="width: 220px; height: 50px;">
            <a href="">Jelajahi pelanyanan kami</a>
          </button>
          </div>
      </div>

      <!-- Gambar di sebelah kanan -->
      <div class="col-md-7 text-end">
        <img src="{{ asset('frondend/images/hero_bg.jpg') }}" alt="Gambar Header" class="img-fluid rounded shadow-sm w-75" style="object-fit: cover; float: right;">

      </div>
  </div>
</div>
{{-- CLOSE HEADER --}}

{{-- OPEN LOGO SCROLL --}}

<div class="container mt-5"  data-aos="fade-up" data-aos-delay="300">
  <h2 class="poppins-bold text-center" style="color: #004d40"> Klien Kami </h2>
  <div class="logo-container">
    <div class="logo-scroll" id="logo">
      <img src="{{ asset('frondend/images/1002443_OIMZ3J1.svg') }}" alt="">
      <img src="{{ asset('frondend/images/828380_file.svg') }}" alt="">
      <img src="{{ asset('frondend/images/838006_file.svg') }}" alt="">
      <img src="{{ asset('frondend/images/844053_O3IICE1.svg') }}" alt="">
    </div>  
    <div class="logo-scroll" id="logo">
      <img src="{{ asset('frondend/images/1002443_OIMZ3J1.svg') }}" alt="">
      <img src="{{ asset('frondend/images/828380_file.svg') }}" alt="">
      <img src="{{ asset('frondend/images/838006_file.svg') }}" alt="">
      <img src="{{ asset('frondend/images/844053_O3IICE1.svg') }}" alt="">
    </div> 
  </div>
</div>

{{-- CLOSE LOGO SCROLL --}}

<section class="about-section mt-5" data-aos="fade-up" data-aos-delay="300">
  <div class="container">
    <div class="row align-items-center">
        <!-- Teks di sebelah kiri -->
        <div class="col-md-5 order-md-1 order-2 mb-4 mb-md-0">
            <h1 class="fw-bold" style="color: #004d40;">Tentang Kami</h1>
            <p class="text-muted">
              Ultra Net adalah penyedia layanan internet terdepan yang menawarkan koneksi internet cepat dan andal untuk kebutuhan digital Anda. Kami berdedikasi untuk memberikan pengalaman internet terbaik, baik untuk keperluan pribadi maupun bisnis. Dengan jangkauan luas dan kecepatan tinggi, Ultra Net memastikan Anda dapat tetap terhubung tanpa gangguan.
            </p>
            <div class="button-header" >
                <button class="btn-header" style="width: 180px; height: 48px;">
                    <a href="contact.html" style="text-decoration: none; color: white;">Hubungi Kami</a>
                </button>
            </div>
        </div>

        <!-- Gambar di sebelah kanan -->
        <div class="col-md-7 order-md-2 order-1 text-end" style="mix-blend-mode: multiply" >
            <img src="{{ asset('frondend/images/Img_About.png') }}" alt="Tentang Kami" class="img-fluid rounded shadow-sm" style="object-fit: cover;">
        </div>
    </div>
  </div>
  </section>





<section class="features-1 mt-5" data-aos="fade-up" data-aos-delay="300">
  <div class="container">
    <h2 class="text-center poppins-bold mb-0 mt-5" style="color: #004d40">SOLUSI UTAMA</h1>
    <h6 class="text-center poppins-light mb-5">Temukan cara asnet membantu Anda merintis jalur baru untuk menegakkan kembali bisnis Anda.</h6>
    <div class="row mt-5"> <!-- Tambahkan margin-top yang lebih besar -->
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="box-feature">
          <img src="{{ asset('frondend/icon/Internet.png') }}" alt="">
          <h3 class="mb-2 mt-2">Internet</h3>
          <p>
            Tingkatkan Bisnis Anda dengan Solusi Internet Kecepatan Tinggi
          </p>
        </div>
      </div>

      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
        <div class="box-feature">
          <img src="{{ asset('frondend/icon/FTTH.png') }}" alt="">
          <h3 class="mb-2 mt-2"> FTTH (Fiber To The Home)</h3>
          <p>
            Koneksi Internet Cepat dan Andal
          </p>
        </div>
      </div>

      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
        <div class="box-feature">
          <img src="{{ asset('frondend/icon/Cloud.png') }}" alt="">
          <h3 class="mb-2 mt-2">Cloud Computing
          </h3>
          <p>
            Komputasi Awan Openstack
          </p>
        </div>
      </div>

      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
        <div class="box-feature">
          <img src="{{ asset('frondend/icon/Data.png') }}" alt="">
          <h3 class="mb-2 mt2">Data Center</h3>
          <p>
            Domain, hosting, & server
          </p>
        </div>
      </div>
    </div>
  </div>
</section>



  {{-- ==== Open Card Why Choose Us  --}}

  <div class="section sec-testimonials" data-aos="fade-up" data-aos-delay="300" style="margin-top: 9;">
    <div class="container mt-5">
      <h2 class="text-center mt-5 poppins-bold" style="margin-top: 15%; color: #004d40">Mengapa Harus Memilih Kami</h2>
          <div class="row mt-5">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature mt-5">
                <h3 class="mb-2 mt-2 poppins-bold">Solusi IoT Profesional</h3>
                <p class="mt-4">
                  Kami hadir untuk menawarkan solusi terbaik untuk kebutuhan komputasi awan,
                   interkoneksi jaringan, infrastruktur pusat data, dan sistem terintegrasi.
                </p>
              </div>
            </div>
    
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
              <div class="box-feature mt-5">               
                <h3 class="mb-2 mt-2 poppins-bold"> Perluas Bisnis Digital Anda</h3>
                <p class="mt-4">
                  Sistem Anda memerlukan tim khusus untuk menjamin aplikasi berjalan dengan baik.
                </p>
              </div>
            </div>
    
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
              <div class="box-feature mt-5">              
                <h3 class="mb-2 mt-2 poppins-bold"> Karyawan </h3>
                <h3 class="mb-2 poppins-bold"> 100 + </h3>
                <p class="mt-4">
                  LTim asnet yang berpengalaman siap membantu segala kebutuhan bisnis online IoT
                </p>
              </div>
            </div>
    
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
              <div class="box-feature mt-5">
                <h3 class="mb-2 mt2 poppins-bold">Proyek </h3>
                <h3 class=" mb-2 Proyek"> 100 + </h3>
                <p class="mt-4">
                  Kami telah menyelesaikan ribuan proyek, baik perusahaan maupun pemerintah
                </p>
              </div>
            </div>
          </div>
    </div>
  </div>

  <section class="bg-inherit section-expand-digital" data-aos="fade-up" data-aos-delay="300">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="text-content">
        <h1 class="poppins-bold">Perluas Digital Anda <br> Bisnis</h1>
        <p class="poppins-light">Sistem Anda memerlukan tim khusus untuk menjamin aplikasi berjalan dengan baik</p>
      </div>
      <div class="image-content">
        <img src="{{ asset('frondend/images/objeck.png') }}" alt="Expand Your Digital Business" class="img-fluid">
      </div>
    </div>
  </section>

  {{--  --}}

  <section class="content-paket mt-5" data-aos="fade-up" data-aos-delay="300">
  <div class="container">
    <h2 class="poppins-bold text-center" style="color: #004d40">Baca Berita Terkini Kami</h1>
    
    <!-- Row 1: 3 Cards di atas -->
    <div class="row mt-5">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-content d-flex flex-column align-items-center">
              <img src="{{ asset('frondend/images/Internet_Unlimited.png') }}" alt="Paket Internet 1" class="img-fluid mb-3" />
              <h5 class="poppins-bold mt-3">Paket Internet Unlimited</h5>
              <p class=" mt-2">Nikmati koneksi internet cepat tanpa batas.</p>
              <button class="btn btn-outline-light mt-4">Lihat Paket</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-content d-flex flex-column align-items-center">
              <img src="{{ asset('frondend/images/interner_bisnis.jpg') }}" alt="Paket Internet 1" class="img-fluid mb-3" />
              <h5 class="poppins-bold mt-3">Paket Internet Bisnis</h5>
              <p class=" mt-2">Solusi koneksi internet untuk bisnis Anda.</p>
              <button class="btn btn-outline-light mt-4">Lihat Paket</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-content d-flex flex-column align-items-center">
              <img src="{{ asset('frondend/images/internet_rumahan.jpg') }}" alt="Paket Internet 1" class="img-fluid mb-3" />
              <h5 class="poppins-bold mt-3">Paket Internet Rumahan</h5>
              <p class=" mt-2">Paket khusus untuk rumah dengan harga ekonomis.</p>
              <button class="btn btn-outline-light mt-4">Lihat Paket</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2: 2 Cards di bawah -->
    <div class="row mt-4">
      <!-- Card 4 -->
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-content d-flex flex-column align-items-center">
              <img src="{{ asset('frondend/images/internet_gaming.jpg') }}" alt="Paket Internet 1" class="img-fluid mb-3" />
              <h5 class="poppins-bold mt-3">Paket Internet Gaming</h3>
              <p class="mt-2">Koneksi cepat untuk pengalaman gaming tanpa lag.</p>
              <button class="btn btn-outline-light mt-4">Lihat Paket</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-content d-flex flex-column align-items-center">
              <img src="{{ asset('frondend/images/internet_mobile.jpg') }}" alt="Paket Internet 1" class="img-fluid mb-3" />
              <h5 class="poppins-bold mt-3">Paket Internet Mobile</h5>
              <p class=" mt-2">Paket internet mobile dengan harga terjangkau.</p>
              <button class="btn btn-outline-light mt-4">Lihat Paket</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- OPEN KONTAK KAMI --}}

<section id="contact-form" class="contact-form mt-5 mb-5">
  <div class="container">

    <!-- Section Heading -->
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <div class="section-heading mb-5">
          <h2 class="mb-4 poppins-bold">Kirimkan Pesan kepada Kami</h2>
          <p class="poppins-light">Kami ingin mendengar pendapat Anda! Silakan isi formulir di bawah ini dan kami akan menghubungi Anda sesegera mungkin.</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-between">
      <!-- Form Section -->
      <div class="col-md-6">
        <form class="form-kontak" action="#" method="post" class="p-4 p-md-5 border rounded" data-aos="fade-up">
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" placeholder="Masukan Nama Anda Disini" required>
                <label for="name">Masukan Nama Anda Disini</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="Masukan Email Anda Disini" required>
                <label for="email">Masukan Email Anda Disini</label>
              </div>
            </div>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="No Telphon" placeholder="Masukan No Telphon Anda Disini" required>
            <label for="subject">Masukan No Telphon Anda Disini</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" id="message" placeholder="Masukan Pesan Anda Disini" style="height: 150px;" required></textarea>
            <label for="message">Masukan Pesan Anda Disini</label>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary py-3 px-5">Kirim Pesan</button>
          </div>
        </form>
      </div>

      <!-- Image Section -->
      <div class="col-md-5 d-none d-md-block">
        <div class="contact-image">
          <img src="{{ asset('frondend/images/UltraBot.png') }}" alt="Contact Image" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</section>






{{-- CLOSE KONTAK KAMI --}}

  
  


@endsection