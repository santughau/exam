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
                            <div class="col-md-6">
                                <h3 class="card-title">My Profile </h3>
                                <hr>
                                <p><span class="text-muted">Name : <?php echo $name;?></span> </p>
                                <p><span class="text-muted">Mobile : <?php echo $mobile;?></span> </p>
                                <a href="home.php" class="btn btn-primary">Back to Home</a>
                                <a href="edit_profile.php?u_id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-danger">Edit Password</a><hr>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <h3 class="card-title"> . </h3>
                                <hr>
                                <p><span class="text-muted">Email : <?php echo $email;?></span> </p>
                                <p><span class="text-muted">Password : <?php echo $user_pass;?></span> </p>
                                <a href="myresult.php?u_id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-warning">My Result</a>
                                <a href="logout.php" class="btn btn-secondary">Log Out</a><hr>
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
                        <tr >
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
                            <td><?php echo $sr;?></td>
                            <td><?php echo $exam_name;?></td>
                            <td><?php echo $percent;?></td>
                            <td><?php echo $exam_date;?></td>
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
        <script>
    $(".table").DataTable();
</script>