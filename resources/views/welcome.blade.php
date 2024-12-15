<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Cello's Portfolio</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <!-- Leaflet CSS -->
  <link href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div class="container-fluid px-0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="Subtract.svg" width="50 px">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container px-3">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
              <li class="nav-item">
                <a class="nav-link me-lg-3" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-lg-3" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-lg-3" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-lg-3" href="#testimonials">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-lg-3" href="#tugas">Tugas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-lg-3" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero -->
    <header class="bg-light py-5">
      <div class="container px-5">
        <div class="row align-items-center">
          <div class="col-lg-8 col-xl-7 col-xxl-6">
            <div class="my-5">
              <h2 class="text-center fw-bold mb-2">Hi! I am Cello</h2>
              <h2 class="text-primary text-center fw-bold mb-2">a UI/UX Designer, Graphic Designer, and Videographer</h2>
              <p class="lead text-muted mb-4">
                Currently a Third Year Student
              </p>
              <div class="d-grid gap-3 d-sm-flex justify-content-center">
                <a class="btn btn-primary btn-large text-uppercase" href="#about">
                  Learn More
                  <span class="material-icons-outlined ms-2">help_outline</span>
                </a>
                <a class="btn btn-outline-primary btn-large text-uppercase" href="#projects">
                  View My Work
                  <span class="material-icons-outlined ms-2">manage_search</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-xxl-6 justify-content-center">
            <img class="img-fluid rounded-3 my-5" src="porto.png" alt="Hero Image">
          </div>
        </div>
      </div>
    </header>
    <!-- End Hero -->

    <main>
      <!-- About -->
      <section id="about" class="text-center py-5">
        <div class="container py-5">
          <div class="row justify-content-center">
            <h2 class="fw-bold">About</h2>
            <p class="lead text-muted mb-5">
              I am a Creative Worker focusing on UI/UX Design, Graphic Design, and Multimedia Production
            </p>
          </div>
        </div>
        <div class="container mb-5">
          <div class="row">
            <div class="col-lg-4 mx-auto mb-5">
              <div class="d-flex mb-5 about">
                <span class="material-icons-outlined m-auto text-primary">palette</span>
              </div>
              <h5>Design</h5>
              <p class="text-muted mb-0">
                I am very passionate on creating unique branding through distinct UI Design
              </p>
            </div>
            <div class="col-lg-4 mx-auto mb-5">
              <div class="d-flex mb-5 about">
                <span class="material-icons-outlined m-auto text-primary">camera</span>
              </div>
              <h5>Documentation & Video Production</h5>
              <p class="text-muted mb-0">
                I am highly skilled in event documentation and video production for a brand
              </p>
            </div>
            <div class="col-lg-4 mx-auto mb-5">
              <div class="d-flex mb-5 about">
                <span class="material-icons-outlined m-auto text-primary">group</span>
              </div>
              <h5>Organization Management</h5>
              <p class="text-muted mb-0">
                I am also experienced on leading multiple teams of Creative Workers. I managed the workflow and the SOP needed for our team to work
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About -->

      <hr>

      <!-- Projects -->
      <section id="projects" class="text-center py-5">
        <div class="container py-5">
          <div class="row justify-content-center">
            <h2 class="fw-bold">Projects</h2>
            <p class="lead text-muted mb-5">View some of my latest projects</p>
          </div>
        </div>
        <div class="container mb-5">
          <div class="row">
            <div class="col-lg-4 mx-auto mb-5">
              <div class="card h-100 shadow-lg border-0 bg-light">
                <img class="card-img-top" src="Dashboard Grand Talkshow - Desktop.png" alt="Project 1">
                <div class="card-body p-4">
                  <h5 class="card-title mb-3">ISE! 2024</h5>
                  <div class="mb-2">
                    <div class="badge bg-primary rounded-pill">Next.js</div>
                    <div class="badge bg-primary rounded-pill">React</div>
                  </div>
                  <p class="card-text">
                    Yearly event of Information Systems department. I am the one who designed the design system based on Next.js framework.
                  </p>
                </div>
                <div class="card-footer bg-transparent mb-3">
                  <a class="btn btn-outline-primary btn-sm text-uppercase"
                    href="https://ise-its.com" target="_blank">
                    <span class="material-icons-outlined me-1">web</span>
                    Visit the site!
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mx-auto mb-5">
              <div class="card h-100 shadow-lg border-0 bg-light">
                <img class="card-img-top" src="DESKTOP - Dashboard admin - Jurusan.png" alt="Project 2">
                <div class="card-body p-4">
                  <h5 class="card-title mb-3">Jago Teknik</h5>
                  <div class="mb-2">
                    <div class="badge bg-primary rounded-pill">Tailwind</div>
                  </div>
                  <p class="card-text">
                    A startup made by ITS Student. I am the one who created the design systems and most of the main pages and dashboard pages.
                  </p>
                </div>
                <div class="card-footer bg-transparent mb-3">
                  <a class="btn btn-outline-primary btn-sm text-uppercase"
                    href="https://jagoteknik.id" target="_blank">
                    <span class="material-icons-outlined me-1">web</span>
                    Visit the site!
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mx-auto mb-5">
              <div class="card h-100 shadow-lg border-0 bg-light">
                <img class="card-img-top" src="Property 1=versi disebar.png" alt="Project 3">
                <div class="card-body p-4">
                  <h5 class="card-title mb-3">ITS International Office</h5>
                  <div class="mb-2">
                    <div class="badge bg-primary rounded-pill">Graphic Design</div>
                    <div class="badge bg-primary rounded-pill">Video</div>
                    <div class="badge bg-primary rounded-pill">Documentation</div>
                  </div>
                  <p class="card-text">
                    I handled many designs and videos needed by ITS International Office.
                  </p>
                </div>
                <div class="card-footer bg-transparent mb-3">
                  <a class="btn btn-outline-primary btn-sm text-uppercase"
                    href="https://instagram.com/itsinternationaloffice" target="_blank">
                    <span class="material-icons-outlined me-1">palette</span>
                    Check the Works!
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Projects -->

      <hr>

      <!-- Testimonials -->
      <section id="testimonials" class="text-center py-5">
        <div class="container py-5">
          <div class="row justify-content-center">
            <h2 class="fw-bold">Testimonials</h2>
            <p class="lead text-muted mb-5">Check what clients have said about my work</p>
          </div>
        </div>
        <div class="container mb-5">
          <div class="row">
            <div class="col-lg-4 mx-auto mb-5">
              <div class="text-center fs-4 fst-italic mb-4 px-2">
                Desain yang keren
              </div>
              <div class="d-flex align-items-center justify-content-center testimonial">
                <img class="rounded-circle me-3" src="images/user1.png" alt="User 1">
                <div class="fw-bold">
                  Limbad
                  <span class="text-primary mx-1">/</span>
                  Klien ketika Freelance
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials -->

      <hr>

      <!-- Tugas -->
      <section id="tugas" class="text-center py-5">
        <div class="container py-5">
          <div class="row justify-content-center">
            <h2 class="fw-bold">Tugas</h2>
            <p class="lead text-muted mb-5">What I've been doing this semester</p>
          </div>
        </div>
        <div class="container mb-5">
          <div class="row">
            <a class="btn btn-outline-primary btn-large text-uppercase mb-2" href="/linktree">
              Linktree
              <span class="material-icons-outlined ms-2">manage_search</span>
            </a>
            <a class="btn btn-outline-primary btn-large text-uppercase mb-2" href="/week5">
              Week 5 Testimonial
              <span class="material-icons-outlined ms-2">manage_search</span>
            </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials -->

      <hr>

      <!-- Contact -->
      <section id="contact" class="text-center py-5">
        <div class="container py-5">
          <div class="row justify-content-center">
            <h2 class="fw-bold">Contact</h2>
            <p class="lead text-muted mb-5">
              Do you need any designs? Please contact me for more inquiries!
            </p>
          </div>
        </div>
        <div class="container mb-5">
          <div class="row">
            <div class="col-xl-5 col-xxl-6 mb-5">
              <div id="map"></div>
            </div>
            <div class="col-lg-8 col-xl-7 col-xxl-6 mb-5">
              <div class="mb-5">
                <h6 class="text-uppercase mb-2">Address</h6>
                <p class="lead mb-0">Surabaya, Indonesia</p>
              </div>
              <div class="mb-5">
                <h6 class="text-uppercase mb-2">Phone</h6>
                <p class="lead mb-0">0823-2973-7745</p>
              </div>
              <div class="mb-5">
                <h6 class="text-uppercase mb-2">Email</h6>
                <p class="lead mb-0">marcelloezra61@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact -->
    </main>
  </div>

  <hr>

  <!-- Footer -->
  <footer class="text-center py-4">
    <div class="container px-5 mb-2">Copyright &copy; 2024 Marcello Ezra.</div>
  </footer>
  <!-- End Footer -->

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="js/scripts.js"></script>
</body>

</html>