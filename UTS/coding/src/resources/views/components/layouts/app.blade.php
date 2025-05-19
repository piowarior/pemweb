<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Consulting Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset ('front/img/favicon.png') }}" rel="icon">
  <link href="{{ asset ('front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('front/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('front/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('front/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset ('front/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Consulting
  * Template URL: https://bootstrapmade.com/bootstrap-consulting-website-template/
  * Updated: May 01 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.webp" alt=""> -->
            <h1 class="sitename">SIPIDeC</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
            <li><a href="#hero" class="active">Profile</a></li>
            <!-- <li><a href="#about">About</a></li> -->
            <li><a href="#iuran">Data Iuran</a></li>
            <li><a href="#panduan-pembayaran">Panduan Pembayaran</a></li>
            <li><a href="#whatsapp-contact">kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        </div>
    </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <h2>Sistem Informasi Pembayaran Iuran Desa Cayur</h2>
              <p>Terletak di Kecamatan Kresek, Kabupaten Tangerang, RT 03 dikenal sebagai lingkungan yang aktif dan harmonis. Warga rutin mengadakan kegiatan sosial seperti kerja bakti, pengajian, serta rapat warga demi menjaga kebersamaan dan semangat gotong royong.</p>
              <div class="hero-btns">
                <a href="#iuran" class="btn btn-primary">Lihat Data Iuran</a>
                <a href="#panduan-pembayaran" class="btn btn-outline">Panduan Pembayaran</a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <h3><span data-purecounter-start="0" data-purecounter-end="22" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                        <p>Rata-rata Warga Laki-laki</p>
                    </div>
                    <div class="stat-item">
                        <h3><span data-purecounter-start="0" data-purecounter-end="28" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                        <p>Rata-rata Warga Perempuan</p>
                    </div>
                    <div class="stat-item">
                        <h3><span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                        <p>Kegiatan RT per Tahun</p>
                    </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="{{ asset ('front/img/about/warga-gotong-royong.jpg') }}" alt="Consulting Services" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="about-image" style="position: relative;">
            <img src="{{ asset ('front/img/about/membangun-warga.jpeg') }}" alt="Sistem Pembayaran Iuran RT" class="img-fluid main-image">
            <div class="experience-badge">
                <span class="years">Bulan Ini</span>
                <span class="text">Iuran RT Aktif</span>
            </div>
            </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="about-content">
            <h2>Mudah dan Transparan Mengelola Iuran RT Bulanan</h2>
            <p class="lead">Setiap bulan, warga Desa Cayur dapat melakukan pembayaran iuran RT dengan mudah dan cepat melalui sistem ini.</p>
            <p>Sistem ini dirancang untuk memastikan pencatatan iuran berjalan transparan, terstruktur, dan dapat diakses oleh seluruh warga yang menjadi bagian dari RT 03 Kecamatan Kresek, Kabupaten Tangerang.</p>

            <div class="row features-row">
                <div class="col-md-6">
                <div class="feature-item">
                    <div class="icon">
                    <i class="bi bi-calendar-check"></i>
                    </div>
                    <h4>Iuran Bulanan Terjadwal</h4>
                    <p>Setiap bulan iuran baru otomatis aktif, memudahkan pengurus dan warga untuk melacak pembayaran.</p>
                </div>
                </div>

                <div class="col-md-6">
                <div class="feature-item">
                    <div class="icon">
                    <i class="bi bi-receipt"></i>
                    </div>
                    <h4>Bukti Pembayaran Digital</h4>
                    <p>Warga menerima bukti pembayaran elektronik yang dapat disimpan dan diverifikasi kapan saja.</p>
                </div>
                </div>

                <div class="col-md-6">
                <div class="feature-item">
                    <div class="icon">
                    <i class="bi bi-people-fill"></i>
                    </div>
                    <h4>Pengelolaan Warga dan Data Iuran</h4>
                    <p>Admin RT dapat mengelola data warga dan riwayat iuran secara efisien dan mudah diakses.</p>
                </div>
                </div>

                <div class="col-md-6">
                <div class="feature-item">
                    <div class="icon">
                    <i class="bi bi-shield-lock"></i>
                    </div>
                    <h4>Keamanan dan Privasi Terjamin</h4>
                    <p>Data pembayaran dan informasi pribadi warga dijaga kerahasiaannya dengan sistem keamanan yang handal.</p>
                </div>
                </div>
            </div>

            <div class="cta-button">
                <a href="#panduan-pembayaran" class="btn btn-primary">Pelajari Cara Pembayaran</a>
            </div>
            </div>
        </div>
        </div>

    </div>

    </section><!-- /About Section -->


    <!-- Struktur Pengurus RT Section -->
    <section id="pengurus-rt" class="work-process section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Struktur Pengurus RT</h2>
        <div><span>Kenali</span> <span class="description-title">Struktur Organisasi RT 03</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="steps-content">
            <h2>Pengurus RT 03</h2>
            <p class="lead">Berikut adalah susunan kepengurusan RT 03 yang bertanggung jawab dalam pengelolaan kegiatan warga.</p>
            <p>Struktur ini dibentuk secara musyawarah demi terciptanya koordinasi dan pelayanan terbaik bagi seluruh warga.</p>

            <div class="steps-cta">
                <a href="#contact" class="btn btn-primary">Hubungi Pengurus</a>
                <a href="#galeri" class="btn btn-outline">Lihat Kegiatan</a>
            </div>
            </div>
        </div>

        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="300">
            <div class="steps-list">

            <div class="step-item">
                <div class="step-number">01</div>
                <div class="step-content">
                <h3>Ketua RT - Bapak Suryana</h3>
                <p>Bertanggung jawab atas kepemimpinan dan pengambilan keputusan utama dalam lingkungan RT.</p>
                </div>
            </div>

            <div class="step-item">
                <div class="step-number">02</div>
                <div class="step-content">
                <h3>Sekretaris - Ibu Lestari</h3>
                <p>Mengelola administrasi, surat menyurat, dan pendataan warga.</p>
                </div>
            </div>

            <div class="step-item">
                <div class="step-number">03</div>
                <div class="step-content">
                <h3>Bendahara - Bapak Junaedi</h3>
                <p>Mengatur keuangan RT, termasuk pencatatan iuran dan pengeluaran kas RT.</p>
                </div>
            </div>

            <div class="step-item">
                <div class="step-number">04</div>
                <div class="step-content">
                <h3>Petugas Verifikasi Pembayaran - Ibu Rina</h3>
                <p>Menerima dan memverifikasi bukti pembayaran iuran dari warga melalui sistem.</p>
                </div>
            </div>

            <div class="step-item">
                <div class="step-number">05</div>
                <div class="step-content">
                <h3>Koordinator Data & Laporan - Bapak Toni</h3>
                <p>Mengelola rekap bulanan iuran warga dan membantu publikasi laporan keuangan RT.</p>
                </div>
            </div>

            </div>
        </div>
        </div>

    </div>

    </section>
    <!-- /Struktur Pengurus RT Section -->

    <!-- Data Iuran -->
    @php
    use App\Models\JenisIuran;
    use App\Models\Pembayaran;

    // Ambil jenis iuran aktif (terbaru misalnya)
    $jenisIuranAktif = JenisIuran::latest()->first();

    // Ambil data pembayaran berdasarkan id jenis iuran
    $pembayaran = Pembayaran::where('id_jenis_iuran', $jenisIuranAktif->id)->get();
    @endphp

    <section id="iuran" class="services section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Jenis Iuran</h2>
        <p>{{ $jenisIuranAktif->nama_iuran }} — Rp{{ number_format($jenisIuranAktif->nominal, 0, ',', '.') }} / {{ $jenisIuranAktif->periode }}</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>Nama Warga</th>
                <th>Jumlah</th>
                <th>Tanggal Bayar</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pembayaran as $bayar)
                <tr>
                <td>{{ $bayar->nama_warga }}</td>
                <td>Rp{{ number_format($bayar->jumlah, 0, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($bayar->tanggal_bayar)->format('d M Y') }}</td>
                <td>
                    @if($bayar->status === 'Lunas')
                    <span class="badge bg-success">Lunas</span>
                    @else
                    <span class="badge bg-danger">Belum</span>
                    @endif
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </section>


    <!-- /Data Iuran Section -->


    <!-- Panduan Pembayaran Section -->
    <section id="panduan-pembayaran" class="why-choose-us section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Panduan Pembayaran</h2>
            <div><span>Langkah Pembayaran</span> <span class="description-title">Iuran RT</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="features-content">
                <h2>Cara Melakukan Pembayaran</h2>
                <p class="lead">Silakan lakukan pembayaran iuran RT ke salah satu rekening atau metode QRIS resmi berikut:</p>

                <div class="features-list">
                    <div class="feature-item">
                    <div class="feature-icon"><i class="bi bi-credit-card-2-front"></i></div>
                    <div class="feature-text">
                        <h4>Transfer Bank</h4>
                        <p><strong>Bank BCA:</strong> 1234567890 (a.n. RT 03 Sukamaju)</p>
                        <p><strong>Bank Mandiri:</strong> 9876543210 (a.n. RT 03 Sukamaju)</p>
                    </div>
                    </div>

                    <div class="feature-item">
                    <div class="feature-icon"><i class="bi bi-qr-code"></i></div>
                    <div class="feature-text">
                        <h4>QRIS Pembayaran</h4>
                        <p>Scan QRIS di samping untuk melakukan pembayaran dengan e-wallet atau mobile banking.</p>
                    </div>
                    </div>

                    <div class="feature-item">
                    <div class="feature-icon"><i class="bi bi-journal-check"></i></div>
                    <div class="feature-text">
                        <h4>Langkah Transfer</h4>
                        <p>1. Masuk ke aplikasi m-banking atau ke ATM.<br>
                        2. Pilih menu transfer dan masukkan nomor rekening.<br>
                        3. Isi nominal sesuai iuran RT.<br>
                        4. Selesaikan pembayaran dan simpan bukti transfer.</p>
                    </div>
                    </div>

                    <div class="feature-item">
                    <div class="feature-icon"><i class="bi bi-whatsapp"></i></div>
                    <div class="feature-text">
                        <h4>Konfirmasi Pembayaran</h4>
                        <p>Kirim bukti transfer ke kontak WhatsApp pengurus:<br>
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success btn-sm mt-2">
                            <i class="bi bi-whatsapp"></i> Hubungi Pengurus
                        </a>
                        </p>
                        <p class="mt-2 mb-0"><strong>Petugas Verifikasi Pembayaran:</strong> Ibu Rina</p>
                    </div>
                    </div>

                </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="300">
                <div class="features-image text-center">
                    <!-- QRIS image dibuat lebih besar dan diberi margin bawah -->
                    <img src="{{ asset('storage/qris.png') }}" alt="QRIS Pembayaran" class="img-fluid mb-4" style="max-width: 320px; width: 100%; height: auto;">

                    <div class="stats-card d-flex justify-content-center">
                    <div class="stat-item text-center">
                        <img src="{{ asset('front/img/about/barcode 1.jpg') }}" class="img-fluid" alt="Contoh Bukti Transfer" style="max-width: 180px;">
                        <p class="mt-2">Scan Disini</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </section>
    <!-- /Panduan Pembayaran Section -->

  
    @php
    use App\Models\Kontak;

    $kontakPengurus = Kontak::all();
    @endphp

    <!-- Contact Section -->
    <section id="whatsapp-contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak</h2>
            <div><span>Konfirmasi</span> <span class="description-title">via WhatsApp</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-between">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="contact-card">
                            <h3>Hubungi Pengurus</h3>
                            <p>Silakan hubungi salah satu pengurus berikut jika terjadi kendala di pembayaran atau untuk mengirim bukti pembayaran iuran RT.</p>

                            <div class="contact-details">
                                @foreach ($kontakPengurus as $pengurus)
                                    <div class="contact-item mt-3">
                                        <i class="bi bi-whatsapp"></i>
                                        <div>
                                            <h4>{{ $pengurus->nama }}</h4>
                                            <a href="{{ $pengurus->link_kontak }}" target="_blank" class="btn btn-success btn-sm mt-1">
                                                <i class="bi bi-chat-dots-fill"></i> Chat via WhatsApp
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-card">
                        <i class="bi bi-people-fill"></i>
                        <h3>Gabung Grup WhatsApp RT</h3>
                        <p>Ingin selalu update informasi kegiatan dan pengumuman terbaru dari RT? Bergabunglah ke grup resmi kami.</p>
                        <a href="https://chat.whatsapp.com/INVITE_LINK_GRUP" target="_blank" class="btn btn-primary">
                            <i class="bi bi-person-plus-fill"></i> Gabung Grup WhatsApp RT
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


  </main>

    <footer id="footer" class="footer light-background">

        <div class="container">
            <div class="row gy-4">

            <!-- Tentang RT -->
            <div class="col-lg-4 col-md-6">
                <h4>Tentang Kami</h4>
                <p>
                Portal resmi RT 03 Desa Cayur, Kecamatan Kresek, Kabupaten Tangerang. Menyediakan informasi profil sistem dan desa, Data iuran warga, cara pembayaran, dan kontak via whatsapp.
                </p>
            </div>

            <!-- Kontak Pengurus -->
            <div class="col-lg-4 col-md-6">
                <h4>Kontak Pengurus</h4>
                <ul class="list-unstyled">
                <li><i class="bi bi-geo-alt-fill"></i> Desa Cayur, Kec. Kresek, Kab. Tangerang</li>
                <li><i class="bi bi-telephone-fill"></i> 0812-3456-7890 (Ketua RT 03)</li>
                <li><i class="bi bi-envelope-fill"></i> rt03cayur@gmail.com</li>
                </ul>
            </div>

            <!-- Tautan Penting -->
            <div class="col-lg-4 col-md-6">
                <h4>Tautan Penting</h4>
                <ul class="list-unstyled">
                <li><a href="#hero"><i class="bi bi-chevron-right"></i> Profil</a></li>
                <li><a href="#iuran"><i class="bi bi-chevron-right"></i> Info Iuran</a></li>
                <li><a href="#panduan-pembayaran"><i class="bi bi-chevron-right"></i> Panduan Pembayaran</a></li>
                <li><a href="#whatsapp-contact"><i class="bi bi-chevron-right"></i> Hubungi Kami</a></li>
                </ul>
            </div>

            </div>
        </div>

        <div class="container mt-4 text-center">
            <div class="social-links mb-3">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            </div>
            <p class="mb-0">© 2025 <strong>RT 03 Desa Cayur</strong>. Hak Cipta Dilindungi.</p>
            <small>Desain oleh <a href="https://github.com/yourusername" target="_blank">WebDev Pribadi</a></small>
        </div>

    </footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('front/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset ('front/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset ('front/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset ('front/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset ('front/js/main.js') }}"></script>

</body>

</html>