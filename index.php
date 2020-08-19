<?php 
session_start();
$page_title = "Tech Exam ";
$page_key = "microsoft system engineer,what does comptia stand for,a plus certification online classes,networking certification exams,it technician certification,security plus training courses,boson ccna,network certification classes";
$page_desc = "Online CompTIA practice tests mapping to the latest exam domains. CompTIA A+ 220-901 / 220-902, CompTIA Network+ N10-006, CompTIA Security+.Online CompTIA A+ certification practice test 1. Exam 220-901. Each quiz cosists of 25 practice questions. Free online score reports are available";
include('inc/top.php');
                    ?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/nav.php');?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
        </div>
    </div>
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12" style="margin-bottom:15px;">
            <?php include('inc/slider.php');?>
        </div>
    </div>
    <hr>
    <h2 class="bg-dark text-white text-center">New Added Exams</h2>
    <div class="row">
        <?php
        $get_option = "SELECT * FROM exam  ORDER BY exam_id DESC LIMIT 24";
         $run_option = mysqli_query($con,$get_option);
                while ($row_option = mysqli_fetch_array($run_option)){
                $option_id = $row_option['exam_id'];
                $exam_image = $row_option['exam_image'];
                $option_title = ucfirst($row_option['exam_name']);
        ?>
        <div class="col-md-3" style="margin-bottom:10px;">
            <div class="card bg-primary text-white">
                <div class="card-body" style="height:100px;">
                    <a class="text-white" href="s-index.php?exam_id=<?php echo $option_id;?>"><h4 class="card-title text-center"><?php echo $option_title ?></h4></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <hr>
    <!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php');?>
        </div>
    </div>
    <!--------------------Footer---------------------------------->
    <?php 
       if (isset($_POST['login'])){
        $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
        $pass = mysqli_real_escape_string($con,$_POST['password']);
        $get_user = "SELECT * FROM users where user_mobile = '$mobile' AND user_pass = '$pass'";
        $run_user = mysqli_query($con,$get_user);
        $check = mysqli_num_rows($run_user);
        if($check == 1){
            $row = mysqli_fetch_array($run_user);
             $_SESSION['user_email'] = $mobile;
             $_SESSION['user_id'] = $row['user_id'];
             $_SESSION['user_mobile'] = $row['user_mobile'];
             $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_image'] = $row['user_image'];
            echo "<script>window.open('home.php','_self')</script>";
        }
        else {
            echo "<script>alert('Email Or Password is not correct !')</script>";
        }
        }
?>