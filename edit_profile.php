<?php 
ob_start();
session_start();
 $user_id = $_SESSION['user_id'];
$page_title = "Login Page ";
$page_key = "";
$page_desc = "";
include('inc/top.php');
if(!isset($_SESSION['user_email'])){
    header("location:index.php");
}
else if (($_GET['u_id'] !== $user_id )){
    header("location:index.php");
}
else{
  if(isset($_SESSION['user_email'])){
       $user_id = $_SESSION['user_id'];
       $mobile = $_SESSION['user_email'];
       $name = ucfirst($_SESSION['user_name']);
  }
    $user_id = $_GET['u_id'];
                $select = "SELECT * FROM users WHERE user_id='$user_id'";
                $run = mysqli_query($con,$select);
                $row = mysqli_fetch_array($run);
                $id= $row['user_id'];
                $image= $row['user_image'];
                $name= ucfirst($row['user_name']);
                $email= $row['user_email'];
                $user_pass= $row['user_pass'];
                $user_mobile= $row['user_mobile'];
                $u_imagea = $row['user_image'];
?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/nav.php'); ?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-2" style="padding-bottom:15px;">
            <?php include('inc/sidebar.php'); ?>
        </div>
        <div class="col-md-6" style="padding-bottom:15px;">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card  border border-primary text-primary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="card-title">Edit Profile </h3>
                                    <hr>
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-dark">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?php echo $name; ?>" name="name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-dark">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-dark">Password</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?php echo $user_pass; ?>" name="pass" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label text-dark">Photo</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="btn btn-warning" name="u_image"  required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="update">Save Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 table-responsive">
            <h5 class="bg-warning">View All Performence</h5>
            <table class="table table-bordered table-condensed ">
                <thead class="thead-dark">
                    <tr>
                        <th>Sr</th>
                        <th>Exam</th>
                        <th>Marks</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <?php
        $get_result = "SELECT * FROM result where user_id = '$user_id' ORDER BY 1 DESC";
        $run_result = mysqli_query($con,$get_result);
        $sr = 0;
        while($row_result=mysqli_fetch_array($run_result)){
        $result_id = $row_result['result_id'];
        $user_id = $row_result['user_id'];
        $exam_name = $row_result['exam_name'];
        $percent = $row_result['percent'];
        $exam_date = $row_result['exam_date'];
            $sr++;
        ?>
                    <tr>
                        <td>
                            <?php echo $sr;?>
                        </td>
                        <td>
                            <?php echo $exam_name;?>
                        </td>
                        <td>
                            <?php echo $percent;?>
                        </td>
                        <td>
                            <?php echo $exam_date;?>
                        </td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
    </div>
    <hr>
    <!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php');?>
        </div>
    </div>
    <!--------------------Footer---------------------------------->
    <?php } ?>
    <?php
if(isset($_POST['update'])){
            $u_name = $_POST['name'];
            $u_pass = $_POST['pass'];
            $u_email = $_POST['email'];
    
            $u_image = $_FILES['u_image']['name'];
            $image_tmp = $_FILES['u_image']['tmp_name'];
            
            if(empty($u_image)){
                $u_image = $u_imagea;
                }
              else{
                  $u_image = 'user' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
              }
            
            move_uploaded_file($image_tmp,"images/user/$u_image");
    
              echo $update = "UPDATE users SET 
              user_name='$u_name', 
              user_pass='$u_pass',
              user_email='$u_email',
              user_image='$u_image' 
              WHERE user_id='$user_id'";
    
            $run = mysqli_query($con,$update);
            if($run){
            $get_media = "SELECT * FROM users WHERE user_image = '$u_image'";
            $media_query = mysqli_query($con,$get_media);
            $row_media = mysqli_fetch_array($media_query);
            $media_id = $row_media['user_id'];
            $media_name1 = $row_media['user_image'];
                if(file_exists("images/user/$u_image")){
                    if(rename("images/user/$u_image","images/user/$media_id.jpg")){
                        $update = "UPDATE users SET user_image='$media_id.jpg' WHERE user_image = '$media_name1'";
                        $run = mysqli_query($con,$update);
                    }
                    else{
                        echo "Error in rename";
                    }
                }
                else{
                    echo "File Not exist";
                }
                echo"<script>alert('Welcome, You have Updated Succcessfully !')</script>";
	   echo"<script>window.open('home.php','_self')</script>";
        }
}
?>
        <script>
            $(".table").DataTable();
        </script>