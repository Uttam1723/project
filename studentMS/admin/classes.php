<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php
    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        
        $sections = implode(',',$_POST['section']);
        $added_date = date('Y-m-d');
        mysqli_query($db_conn ,"INSERT INTO classes (title,section,added_date) VALUE ('$title','$sections','$added_date')") or die('DB error');
    }
?>
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Manage Classes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Classes</li>
            </ol>
          </div><!-- /.col -->
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
                   Add new Class
                </h3>
                
            </div>
            <div class="card-body">
               <form action="" method="POST">
                <div class="form-group">
                     <label for="title">title</label>  
                    <input type="text" name="title" placeholder="title" required class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="title">Section</label>
                    <?php 
                    $query = mysqli_query($db_conn,'SELECT * FROM sections');
                    $count=1;
                    while($sections =  mysqli_fetch_object($query)){ ?>
                    <div>
                        <label for="<?=$count?>">
                    <input type="checkbox" name="section[]" id="<?=$count?>" value="<?=$sections->id?> " placeholder="section" >
                    <?=$sections->title?> 
                      </label>
                    </div>
                    <?php 
                      $count++;
                    } ?>
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
                    classes
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
                            <th>Name</th>
                            <th>Sections</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                    <?php
                                    $count=1;
                                    $cla_query = mysqli_query($db_conn,'SELECT * FROM classes');
                                    while($class = mysqli_fetch_object($cla_query )){ ?>
                                    <tr>
                                        <td><?=$count++?></td>
                                        <td><?=$class->title?></td>
                                        <td>
                                          <?php 
                                            $sections = explode(',',$class->section);
                                            foreach ($sections as $key => $section) {
                                                  $sec_query = mysqli_query($db_conn,'SELECT * FROM sections WHERE id = '.$section.'');
                                                  $sec = mysqli_fetch_object($sec_query);
                                                  if($sec)
                                                  {
                                                         echo $sec->title .'<br>';
                                                  }
                                                  else{
                                                    echo "N/A";
                                                  }
                                                 
                                            }
                                          ?>
                                        </td>
                                        <td></td>
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