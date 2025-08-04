<?php include('header.php')?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>SMS</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Events</a>
        </li>
        <!-- You can re-enable dropdowns like below if needed -->
        
       
        
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown position-relative">
          <?php if (isset($_SESSION['login'])) { ?>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fas fa-user me-2"></i>Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
          <?php } else { ?>
          <a href="login.php" class="nav-link"><i class="fa fa-user me-2"></i>User login</a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main class="py-5">
  <!-- Hero Banner -->
  <section class="text-center mb-5">
    <div class="container">
      <h1 class="display-4">About Our Student Management System</h1>
      <p class="lead text-secondary">
        Designed to streamline admission, attendance, exams, fees, and analytics for modern institutions.
      </p>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="mb-4">
    <div class="container row gx-4">
      <div class="col-md-6">
        <h3>Our Mission</h3>
        <p>To enable educational institutions with secure, modular, and user-friendly tools to automate academic & administrative workflows from admission through alumni networks.</p>
      </div>
      <div class="col-md-6">
        <h3>Our Vision</h3>
        <p>To be the most trusted and intuitive student information system (SIS) by offering scalable modules and real‑time insights for data‑driven decisions.</p>
      </div>
    </div>
  </section>

  <!-- Key Features -->
  <section class="mb-4">
    <div class="container">
      <h3 class="mb-3 text-center">Key Modules & Features</h3>
      <ul class="list-group list-group-flush text-secondary">
        <li class="list-group-item">🎓 Online Admissions & Enrollment</li>
        <li class="list-group-item">📊 Attendance Management </li>
        <li class="list-group-item">📝 Exam scheduling, grading & report cards</li>
        <li class="list-group-item">💰 Fee Tracking </li>
        
      </ul>
      <p class="small text-muted mt-2">
        *Based on industry-standard modules found in modern SIS platforms :contentReference[oaicite:1]{index=1}*
      </p>
    </div>
  </section>

  <!-- Meet the Team (optional) -->
  <section>
    <div class="container text-center">
      <h3>Meet Our Team</h3>
      <div class="row justify-content-center py-3">
        <!-- Example: use your real team photos -->
        <div class="col-6 col-sm-4 col-md-2">
          <img src="assets/images/photo.jpg" class="rounded-circle img-fluid mb-2" alt="Alice Nguyen" loading="lazy">
          <p class="small mb-0">uttam gondaliya</p>
          <p class="small text-secondary">Backend Developer & frontend devloper</p>
        </div>
        <!-- Add more members as needed -->
      </div>
    </div>
  </section>

  <!-- Contact or CTA -->
  <section class="mt-5 text-center">
    <div class="container">
      <p class="lead text-secondary">
        Interested in streamlining your institution’s processes?
      </p>
      <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
    </div>
  </section>
  
</main>
<footer style="background:url(./assets/images/footer.jpg) center no-repeat">
        <div class="py-5 text-white" style="background:#000000bb">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4">
                    <h4> Useful links </h4>

                    <ul class="fa-ul">
                          <li><a href="index.php" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li>
                          <li><a href="about_us.php" class="text-light"><i class="fa-li fa fa-angle-right"></i>aboout us</a></li>
                          <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>courses</a></li>
                          <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>Events</a></li>
                    </ul>
                </div>

               
                <div class="col-lg-3">
                    <h4> social media </h4>
                  <a href="https://www.facebook.com/profile.php?id=100072146707509/">
                    <spam class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                    </spam>Facebook</a><br> 

                    <a href="https://www.instagram.com/uttam_gondaliya_1/">
                    <spam class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fab fa-instagram  fa-stack-1x fa-inverse text-dark"></i>
                    </spam>instagram</a><br>
                    <a href="https://x.com/Uttam_045/">
                    <spam class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                    </spam>Twitter</a><br>
                    <a href="https://www.youtube.com/uttam gondaliya">
                    <spam class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                    </spam> Youtube</a>
              </div>
            </div>
        </div>
      </footer>

      <section class="py-2 bg-dark text-light center">
        <div class="container-fluid">
          copyright 2020-2026 All Rights Reserved . <a href="#" class="text-light"> StudentMS </a>
        </div>
      </section>

<?php include('footer.php'); // Contains closing </body> & </html> ?>
