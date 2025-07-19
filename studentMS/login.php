<?php include('header.php') ?>
   <section class="bg-dark vh-100 d-flex ">
    <div class="col-3 m-auto container-fluid ">
        <div class="card">
            <div class="card-body">
                <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px">
                    <i class="fa fa-user  text-grey fa-3x  m-auto"></i>
                   
                </div>
                <form action="actions/login.php" method="POST">
                          <div class="md-form">
                            <label for="email">Your Email</label>
                            <input type="email" id="form1" name="email"class="form-control">
                          </div>

                          <div class="md-form">
                            <label for="form1">Your password</label>
                            <input type="text" id="form1" name="password"class="form-control">
                            
                          </div>
                          <div class="text-center">
                            <button class="btn btn-primary mt-3" name="login">login</button>
                          </div>
                </form>
            </div>
        </div>
    </div>
   </section>
<?php include('footer.php')  ?>