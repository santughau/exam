<?php 
ob_start();
session_start();
$page_title = "Login Page ";
$page_key = "";
$page_desc = "";
include('inc/top.php');
if(!isset($_SESSION['user_email'])){
    header("location:index.php");
}
else{
  if(isset($_SESSION['user_email'])){
       $user_id = $_SESSION['user_id'];
       $mobile = $_SESSION['user_email'];
       $name = ucfirst($_SESSION['user_name']);
  }
    if(isset($_GET['e_id'])){
    $exam_name = $_GET['e_id'];
}
?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/nav.php'); ?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-2">
            <?php include('inc/sidebar.php'); ?>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-condensed ">
                <thead class="table-dark">
                        <tr >
                            <th>Sr</th>
                            <th>Student Name</th>
                            <th>Marks</th>
                            <th>Exam date</th>
                            
                        </tr>
                </thead>
    <?php
    
    $get_que = "SELECT * FROM result  WHERE  exam_name  = '$exam_name'  ORDER BY  percent  DESC ";
    $run_que = mysqli_query($con,$get_que);
    $sr = 0;
    while ($row_option = mysqli_fetch_array($run_que)){
    $user_id = $row_option['user_id'];
    $exam_name = $row_option['exam_name'];
    $percent = $row_option['percent'];
    $exam_date = $row_option['exam_date'];
     
    $get_user = "SELECT * FROM users WHERE  user_id  = '$user_id' ";
    $run_user = mysqli_query($con,$get_user);
    $row_user = mysqli_fetch_array($run_user);
    $user_name = $row_user['user_name'];
    $sr++;
    ?>
                        <tr>
                            <td><?php echo $sr;?></td>
                            <td><?php echo $user_name;?></td>
                            <td><?php echo $percent;?></td>
                            <td><?php echo $exam_date;?></td>
                            
                            
                        </tr>
    <?php } ?>
                </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 table-responsive">

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