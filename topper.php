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
                            <tr class="info">
                                <th>Sr</th>
                                <th>Exam Name</th>
                                <th>Total Question</th>
                                <th>View Toppers</th>
                            </tr>
                        </thead>
                        <?php
                
                $get_option = "SELECT * FROM exam ORDER BY exam_name ASC ";
                $run_option = mysqli_query($con,$get_option);
                //$total_que = mysqli_num_rows($run_option);
                $sr = 0;
                while ($row_option = mysqli_fetch_array($run_option)){
                $exam_id = $row_option['exam_id'];
                $exams_name = $row_option['exam_name'];
                $exam_name = ucfirst($row_option['exam_name']);
                $sr++;
                $get_que = "SELECT * FROM questions WHERE exam_id = '$exam_id' ";
                $run_que = mysqli_query($con,$get_que);
                $total_que = mysqli_num_rows($run_que);    
                    
                ?>
                            <tr>
                                <td>
                                    <?php echo $sr;?>
                                </td>
                                <td>
                                    <?php echo $exam_name;?>
                                </td>
                                <td>
                                    <?php echo $total_que ;?>
                                </td>
                                <td><a href="viewtoppers.php?e_id=<?php echo $exams_name;?>" class="btn btn-secondary btn-xs">View </a></td>
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