
<?php
ob_start(); // Start output buffering to prevent "headers already sent" warning

include('../includes/config.php');
include('header.php');
include('sidebar.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $duration = $_POST['duration'];
    $image = $_FILES['thumbnail']['name'];
    $today = date('Y-m-d');

    $target_dir = "dist/uploads/";
    $target_file = $target_dir . basename($image);
    $imageFiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Corrected file size check
    if ($_FILES['thumbnail']['size'] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file types
    if (!in_array($imageFiletype, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            mysqli_query($db_conn, "INSERT INTO courses(name, category, duration, image, date) 
                VALUES('$name', '$category', '$duration', '$image', '$today')") 
                or die(mysqli_error($db_conn));

            $_SESSION['success_msg'] = "Course has been uploaded successfully";

            header('Location: courses.php'); // Fixed redirect
            exit(); // Always exit after header
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Manage Courses </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Courses</li>
            </ol>
          </div><!-- /.col -->
          <?php 
              if(isset($_SESSION['success_msg']))
              {?>
               <div class="col-12">
                  <small class="text-success" style="font-size:16px"><?=$_SESSION['success_msg']?></small>
               </div>
                <?php
                unset($_SESSION['success_msg']);
              }
          ?>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <?php 
      if (isset($_REQUEST['action'])){ ?>
          <!-- Info boxes -->
        <div class="card">
            <div class="card-header py-1">
                <h3 class="card-title">
                   Add new Course
                </h3>
                
            </div>
            <div class="card-body">
               <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                     <label for="title">Course name</label>  
                    <input type="text" name="name" placeholder="Coursetitle" required class="form-control" required>
                </div>
                <div class="form-group">
                     <label for="title">Course Category</label>  
                    <select name="category" id="category" class="form-control">
                      <option value="">select category</option>
                      <option value="web-design-and-development">web design and development</option>
                      <option value="app-development"> App development</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="duration"> Course Duration</label>
                <input type="text" name="duration" id="duration" placeholder="course duration" class="form-control" required>
              </div>
               <div class="form-group">
                <input type="file" name="thumbnail" id="thumbnail" required>
              </div>
                <button name="submit"class="btn btn-success">
                  submit
                </button>
               </form>
            </div>
        </div>
        <!-- /.row -->

     <?php  }else{?>
        <!-- Info boxes -->
        <div class="card">
            <div class="card-header py-1">
                <h3 class="card-title">
                    Courses
                </h3>
                <div class="card-tools">
                    <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2"> Add New</i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive bg-white">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Duration</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                                    <?php
                                    $count=1;
                                    $course_query = mysqli_query($db_conn,'SELECT * FROM courses');
                                    while($course = mysqli_fetch_object($course_query )){ ?>
                                    <tr>
                                        <td><?=$count++?></td>
                                        <td><img src="./dist/uploads/<?=$course->image?>" height="100" alt="<?=$course->name?>" class="border"></td>
                                        <td><?=$course->name?></td>
                                        <td><?=$course->category?></td>
                                        <td><?=$course->duration?></td>
                                        <td><?=$course->date?></td>
                                    </tr>                                    

                                    <?php } ?>
                                </tbody>

                </table>
            </div>
        </div>
        <!-- /.row -->
         <?php }?>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
<?php include('footer.php') ?>