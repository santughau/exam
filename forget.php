<?php 
session_start();
$page_title = "Login Page ";
$page_key = "";
$page_desc = "";
$msg = '' ;
include('inc/top.php');
if(isset($_POST['submit']))
{
    
    $mobile = $_POST['mobile'];
     $email = $_POST['email'];
    $select = "SELECT * FROM users WHERE user_mobile='$mobile' AND user_email = '$email'";
    $run = mysqli_query($con,$select);
    $check = mysqli_num_rows($run);
    if($check == 1){
        $row = mysqli_fetch_array($run);
        
        $id= $row['user_id'];
        $name= ucfirst($row['user_name']);
        $email= $row['user_email'];
        $user_pass= $row['user_pass'];
        $user_mobile= $row['user_mobile'];
        
        $to = $email;
        $header = "Recover Password from ....";
        $subject = "Please Your Details as below";
        $message = "Name: $name \n\n Email: $email \n\n Password: $user_pass \n\n Mobile: $user_mobile \n\n Click to Login : http://orangecomputers.us/login.php";  
        mail($to, $subject, $message, $header); 
        
        $msg = "<span class='text-primary'>Messsage send to your Email Address. Please check .</span><hr>";
    }
    else{
        $msg = "<span class='text-danger'>Mobile or Email Address Check Again Or You are not register with us. Please Register now .</span><hr>";

    }
}
?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">Exam</a>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1 text-secondary text-center">Fill Following info</h4><hr>
                    <form method="post" action="">
                        <div class="form-group">
                            <input name="mobile" class="form-control"  placeholder="Enter Mobile No" type="text"  required>
                        </div>
                        <!-- form-group// -->
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Enter Email Address" type="email" required>
                        </div>
                        <!-- form-group// -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" name="submit"> Submit  </button>
                                </div>
                                <!-- form-group// -->
                            </div>
                        </div>
                        <!-- .row// -->
                    </form>
                </article>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <article class="card-body">
                    <?php echo $msg ;?>
                </article>
            </div>
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
    