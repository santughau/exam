<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_mobile'])){
        header('Location:../admin.php');
    echo $_SESSION['user_mobile'];
    }
require_once('inc/top.php');
if(isset($_GET['id'])){
        $id = $_GET['id'];
        if($_SESSION['user_mobile']== '8698642735'){
        $get_teacher = "SELECT * FROM exam WHERE exam_id = '$id'";
        $run_teacher = mysqli_query($con,$get_teacher);
	    $row_teacher = mysqli_fetch_array($run_teacher);
        $exam_name = $row_teacher['exam_name'];
        $dept_id = $row_teacher['dept_id'];
        $u_imagea = $row_teacher['exam_image'];
        }
    else{
         header('Location:index.php');
    }
        }
if(isset($_GET['e_id'])){
    $exam_id = $_GET['e_id'];
}
if(isset($_POST['submit'])){
       $ida = $id;
       $exam = $_POST['exam'];
       $deptid = $_POST['cate'];
       $deptid = $_POST['cate'];
    
    $u_image = $_FILES['u_image']['name'];
      $image_tmp = $_FILES['u_image']['tmp_name'];
      if(empty($u_image)){
                $u_image = $u_imagea;
        }
      else{
          $u_image = 'product_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
      }
      move_uploaded_file($image_tmp,"../images/exam/$u_image");
    
      $insert_news = "update exam set 
      dept_id = '$deptid' ,
      exam_name = '$exam',
      exam_image = '$u_image'
      where exam_id = '$ida'";
      $insert_pro = mysqli_query($con, $insert_news);
      if($insert_pro){
          $get_media = "SELECT * FROM exam WHERE exam_image = '$u_image'";
            $media_query = mysqli_query($con,$get_media);
            $row_media = mysqli_fetch_array($media_query);
            $media_id = $row_media['exam_id'];
            $media_name1 = $row_media['exam_image'];
                if(file_exists("../images/exam/$u_image")){
                    if(rename("../images/exam/$u_image","../images/exam/$media_id.jpg")){
                        $update = "UPDATE exam SET exam_image='$media_id.jpg' WHERE exam_image = '$media_name1'";
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
	   echo"<script>window.open('addexam.php','_self')</script>";
       }
    else{
        echo"Not";
    }
    }
?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
                <?php include('inc/sidebar.php');?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/logo.jpg" class="img-fluid shadow-light">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-danger text-center">Edit Exam </h3>
                        <hr>
                        <form action="" method="post" style="padding-top:20px; padding-bottom:20px;" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Add Exam" name="exam" value="<?php echo" $exam_name ";?>">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="cate">
    <?php echo get_option_list('department','dept_id','dept_name');?>
    </select>
                            </div>
                            <div class="form-group">
                                <input type="file" class="btn btn-warning" name="u_image" >
                            </div>
                            <button type="submit" class="btn btn-primary col-md-offset-4" name="submit">Edit Exam</button>
                        </form>
                    </div>
                    <div class="col-md-8 table-responsive">
                        <h1 class="text-secondary">Category <small class="text-muted">Statistic Overview</small></h1>
                        <hr>
                        <table class="table table-bordered table-condensed ">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sr</th>
                                    <th>Category Name</th>
                                    <th>No Of Exams</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <?php
        $get_result = "SELECT * FROM department ORDER BY 1 DESC";
        $run_result = mysqli_query($con,$get_result);
        $sr = 0;
        while($row_result=mysqli_fetch_array($run_result)){
        $dept_id = $row_result['dept_id'];
        $dept_name = $row_result['dept_name'];
        $get_exam = "SELECT * FROM exam  WHERE dept_id = '$dept_id'";
        $run_exam = mysqli_query($con,$get_exam);
        $total_exam = mysqli_num_rows($run_exam);
        $sr++;
        ?>
                                <tr>
                                    <td>
                                        <?php echo $sr; ?>
                                    </td>
                                    <td>
                                        <?php echo ucfirst($dept_name); ?>
                                    </td>
                                    <td>
                                        <?php echo $total_exam ?>
                                    </td>
                                    <td><a href="edit_category.php?id=<?php echo $dept_id ;?>" class="btn btn-success btn-sm a">Edit</a></td>
                                    <td><a href="category.php?id=<?php echo $dept_id ;?>" class="btn btn-danger btn-sm a">Delete</a></td>
                                </tr>
                                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------Footer---------------------------------->
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php');?>
        </div>
        <!--------------------Footer---------------------------------->
    </div>
    </html>