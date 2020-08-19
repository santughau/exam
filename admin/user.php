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
        $get_teacher = "SELECT * FROM department WHERE dept_id = '$id'";
        $run_teacher = mysqli_query($con,$get_teacher);
	    $row_teacher = mysqli_fetch_array($run_teacher);
         $dept_name = $row_teacher['dept_name'];
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
       $category = $_POST['category'];
      $insert_news = "update department set 
      dept_name = '$category' 
      where dept_id = '$ida'";
      $insert_pro = mysqli_query($con, $insert_news);
      if($insert_pro){
	   echo"<script>alert('Welcome, You have Updated Succcessfully !')</script>";
	   echo"<script>window.open('category.php','_self')</script>";
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
                   
                    <div class="col-md-12 table-responsive">
                        <h1 class="text-secondary">Users <small class="text-muted">Statistic Overview</small></h1><hr>
                  <table class="table table-bordered table-condensed ">
                <thead class="table-dark">
                        <tr >
                            <th>Sr</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Image</th>
                        </tr>
                </thead>
        <?php
        
        $get_result = "SELECT * FROM users ORDER BY 1 DESC ";
        $run_result = mysqli_query($con,$get_result);
        $sr = 0;
        while($row_result=mysqli_fetch_array($run_result)){

        $user_id = $row_result['user_id'];
        $user_name = $row_result['user_name'];
        $user_mobile = $row_result['user_mobile'];
        $user_email = $row_result['user_email'];
        $user_pass = $row_result['user_pass'];
        $user_image = $row_result['user_image'];
            
        
        $sr++;
        ?>
                    <tr>
                            <td><?php echo $sr; ?></td>
                            <td><?php echo ucfirst($user_name); ?></td>
                            <td><?php echo ucfirst($user_mobile); ?></td>
                            <td><?php echo $user_email; ?></td>
                            <td><?php echo $user_pass; ?></td>
                            <td><img src="../images/user/<?php echo $user_image; ?>" width="30px;" class="img-responsive img-circle"></td>
                            
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
<script>
    $(".table").DataTable();
</script>