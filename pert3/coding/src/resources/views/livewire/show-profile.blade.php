<div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    {{-- Be like water. --}}
    <style>
         body {
      background: linear-gradient(135deg, #2c003e, #5e17eb);
      color: white;
      min-height: 100vh;
    }
    .navbar {
    background-color: rgba(255, 255, 255, 0.3) !important; /* ungu transparan */
    backdrop-filter: blur(10px); /* efek blur */
    -webkit-backdrop-filter: blur(10px); /* untuk Safari */
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* bayangan halus */
    border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* garis bawah tipis */
    }   
    </style>


    <nav class="navbar1 navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="24" height="20" class="d-inline-block align-text-top">
            Bootstrap
          </a>
        </div>
      </nav>
      
    <!-- ini navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MY Portofolio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Navbar items di tengah -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">freelance</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">About</a>
              </li>
            </ul>
      
            <!-- Form search di kanan -->
            <form class="d-flex ms-auto" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
      
          </div>
        </div>
      </nav>
      
      <!-- ini navbar -->

<!-- Hero Section -->
<div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        
        <!-- Left Text -->
        <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
          <h1 class="display-4 fw-bold">I'm Muhamad<br>Rohisul Iman</h1>
          <p class="lead">Design That Speaks,<br>Experiences That Resonate</p>
          
          <!-- Skill Card -->
          <div class="card mt-4 p-3 border-0">
            <div class="card-body">
              <h5 class="card-title fw-bold text-dark">My Skill</h5>
              <hr>
              <p class="card-text text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in nibh gravida, pretium sapien luctus, pellentesque libero. Curabitur dignissim non lacus in.</p>
              <a href="#" class="btn btn-dark rounded-circle">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Right Image + Text -->
        <div class="col-lg-6 text-center">
          <!-- Foto bulat -->
          <img src="./img/gw.jpg" class="rounded-circle img-fluid mb-4" alt="Rohisul Iman" style="width: 250px; height: 250px; object-fit: cover;">
          <h2 class="fw-bold">Digital Product<br>Designer</h2>
        </div>
        
      </div>
    </div>
  </div>
    
<!-- Portfolio Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Portofolio Saya</h2>
  
    <!-- Carousel Highlight -->
    <div id="portfolioCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://via.placeholder.com/1200x400?text=Project+Highlight+1" class="d-block w-100" alt="Project Highlight 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Project Highlight 1</h5>
            <p>Deskripsi singkat untuk highlight project pertama.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/1200x400?text=Project+Highlight+2" class="d-block w-100" alt="Project Highlight 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Project Highlight 2</h5>
            <p>Deskripsi singkat untuk highlight project kedua.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/1200x400?text=Project+Highlight+3" class="d-block w-100" alt="Project Highlight 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Project Highlight 3</h5>
            <p>Deskripsi singkat untuk highlight project ketiga.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
      </button>
    </div>
  
    <!-- Grid Portfolio -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Project 1</h5>
            <p class="card-text"> project 1 sangat keren .</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Project 2</h5>
            <p class="card-text">Proyek kedua tampilan modern.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Project 3</h5>
            <p class="card-text">project 3 sentuhan desain yang modern.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</div>
