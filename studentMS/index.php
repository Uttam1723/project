<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student management system</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.1.0/mdb.min.css"
  rel="stylesheet"
/>

</head>
<body>
    <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">StudentMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"></li>
      </ul>
    </div>
  </div>
</nav>
    <!--navbar-->

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
    <!--Admission form-->

    <section class="py-5">
      <div>
        <h2 class="text-center">our courses</h2>
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
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.1.0/mdb.umd.min.js"
></script>
</body>
</html>