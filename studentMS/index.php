<?php include('header.php') ?>

    <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-info bg-primary">  
    <a class="navbar-brand" href="#"><b>StudentMS<b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto nav-flex-icons">
              <li class="nav-item dropdown">
                <?php if(isset($_SESSION['login'])){ ?>
             
                  <a class="nav-link dropdown-toggle"  id="navbarSupportedContent-333"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i> class="fas fa-user mr-2"</i>Account
                 </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="#navbarDropdownMenuLink-333"
                  class="dropdown-menu" aria-labelledby="#navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">logout</a>
                  </div>  
                  <?php }
                  else{
                    ?>
                    <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i> login</a>
                  <?php } ?>
                </li> 
          </ul>
        </div>
      </nav>
    

    <!--Admission form-->
  <div class="d-flex shadow" style="height:400px;background:skyblue;">
    <div class="container-fluid my-auto">
      <div class="row">
        <div class="col-lg-6 my-auto">
          <h1 class="display-5 text-black font-weight-bold"> Student management System</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero possimus nam accusantium consectetur quibusdam expedita magni </p>
          <a href="" class="btn btn-lg btn-primary"> call to action</a>
        </div>
        <div class="col-lg-6">
                <div class="w-50 mx-auto card shadow-lg">
                    <div class="card-body">
                      <h4>Admission Form</h4>
                      <form action="" method="post" class="">
                           <!-- material input-->
                          <div class="md-form">
                            <label for="form1">Your Name</label>
                            <input type="text" id="form1" class="form-control">
                            
                          </div>

                           <!-- material input-->
                          <div class="md-form">
                            <label for="form1">Your Email</label>
                            <input type="text" id="form1" class="form-control">
                            
                          </div>

                          <!-- material input-->
                          <div class="md-form mb-4">
                            <label for="form1">Your Mobile</label>
                            <input type="text" id="form1" class="form-control">
                            
                          </div>

                          <button class="btn btn-lg btn-primary btn-block">submit form</button>
                   
                    </form>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>

  
    
    <!--courses-->
    <section class="py-5">
      <div class="text-center mb-5">
        <h2 class="font-weight-bold">our courses</h2>
      </div>
        <!--course1-->
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card shadow" >
              <div>
                <img src="./assets/images/course1.jpg" alt="" class="img-fluid rounded-top">
              </div>
              <div class="card-body">
                <b>web design & development</b>
                <p class="card-text">
                  <b>Duration : </b> 45 hours <br>
                  <b>price :</b> 5000/- rs
                </p>
                <button class="btn btn-block btn-primary">Enroll now</button>
                
              </div>
            </div>
          </div>

          <!--course2-->
          <div class="col-lg-4">
            <div class="card shadow" >
              <div>
                <img src="./assets/images/course2.jpeg" alt="" class="img-fluid rounded-top">
              </div>
              <div class="card-body">
                <b>cyber security</b>
                <p class="card-text">
                  <b>Duration : </b> 50 hours <br>
                  <b>price :</b> 6000/- rs
                </p>
                <button class="btn btn-block btn-primary">Enroll now</button>
                
              </div>
            </div>
          </div>

          <!--course3-->
          <div class="col-lg-4">
            <div class="card shadow" >
              <div>
                <img src="./assets/images/course3.jpg" alt="" class="img-fluid rounded-top">
              </div>
              <div class="card-body">
                <b>Software development</b>
                <p class="card-text">
                  <b>Duration : </b> 40 hours <br>
                  <b>price :</b> 5500/- rs
                </p>
                <button class="btn btn-block btn-primary">Enroll now</button>
                  
                </div>
              </div>
            </div>
            
        </div>
      </div>

    </section>
    
    <!--teaches-->
    <section class="py-5 bg-light background">
          <div class="text-center mb-8">
        <h2 class="font-weight-bold ">our teachers</h2>
      </div>
          <div class="container">
            <div class="row">
            <div class="col-lg-3">
                <div class="card">
                  <div class="col-7 position-absolute" style="top:-50px">
                          <img src="./assets/images/teacher1.jpg" alt="" class="mw-100 bodered rounded-circle">
                      </div>
                  <div class="card-body pt-5 mt-4">
                      <h5 class="card-title">teachers name</h5>
                      <p class="card-text">
                        <b>courses: </b> 5<br>
                        <b>Rating :</b><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                      </p>
                  </div>
                </div>
              </div>  

                <div class="col-lg-3">
                <div class="card">
                  <div class="col-7 position-absolute" style="top:-50px">
                          <img src="./assets/images/teacher1.jpg" alt="" class="mw-100 bodered rounded-circle">
                      </div>
                  <div class="card-body pt-5 mt-4">
                      <h5 class="card-title">teachers name</h5>
                      <p class="card-text">
                        <b>courses: </b> 5<br>
                        <b>Rating :</b><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                      </p>
                  </div>
                </div>
              </div>  

              <div class="col-lg-3">
                <div class="card">
                  <div class="col-7 position-absolute" style="top:-50px">
                          <img src="./assets/images/teacher1.jpg" alt="" class="mw-100 bodered rounded-circle">
                      </div>
                  <div class="card-body pt-5 mt-4">
                      <h5 class="card-title">teachers name</h5>
                      <p class="card-text">
                        <b>courses: </b> 5<br>
                        <b>Rating :</b><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                      </p>
                  </div>
                </div>
              </div>  

              <div class="col-lg-3">
                <div class="card">
                  <div class="col-7 position-absolute" style="top:-50px">
                          <img src="./assets/images/teacher1.jpg" alt="" class="mw-100 bodered rounded-circle">
                      </div>
                  <div class="card-body pt-5 mt-4">
                      <h5 class="card-title">teachers name</h5>
                      <p class="card-text">
                        <b>courses: </b> 5<br>
                        <b>Rating :</b><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                      </p>
                  </div>
                </div>
              </div>  
            </div>
          </div>
    </section>

    <!--footer-->
      <footer style="background:url(./assets/images/footer.jpg) center no-repeat">
        <div class="py-5 text-white" style="background:#000000bb">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4">
                    <h4> useful links </h4>

                    <ul class="fa-ul">
                          <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>list icon</a></li>
                          <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>list icon</a></li>
                          <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>list icon</a></li>
                          <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>list icon</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h4> social media </h4>

                    <spam class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                    </spam>

                    <spam class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fab fa-instagram  fa-stack-1x fa-inverse text-dark"></i>
                    </spam>

                    <spam class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                    </spam>
                    <spam class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                    </spam>
                </div>
              </div>
            </div>
        </div>
      </footer>

      <section class="py-2 bg-dark text-light center">
        <div class="container-fluid">
          copyright 2020-2026 All Rights Reserved . <a href="#" class="text-light"> StudentMS </a>
        </div>
      </section>
    <!-- MDB -->
<?php include('footer.php') ?>