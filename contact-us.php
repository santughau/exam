<?php 
ob_start();
session_start();
$page_title = "Login Page ";
$page_key = "";
$page_desc = "";
include('inc/top.php');

?>
    <!-- Start from here-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/nav.php'); ?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h2 class="text-secondary text-center">Contact Us</h2><hr>
                <?php
                        if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $website = $_POST['website'];
                            $comment = $_POST['comment'];
                            
                            $to = "santu.ghau@gmail.com";
                            $header = "$name<$email>";
                            $subject = "Message From $name";
                            $message = "<b>Name:</b> $name \n\n<b>Email:</b> $email \n\n<b>Website:</b> $website \n\n<b>Message:</b> $comment ";
                        }
                        ?>
                <h2>Contact Us</h2><hr>
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Full Name:*</label>
                                <input type="text" class="form-control" placeholder="Full Name" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email:*</label>
                                <input type="email" class="form-control" placeholder="Full Email" name="email">
                            </div>
                            <div class="form-group">
                                <label>Website:*</label>
                                <input type="text" class="form-control" placeholder="Enter WEbsite" name="website">
                            </div>
                            <div class="form-group">
                                <label>Message:*</label>
                                <textarea placeholder="Enter Message here" class="form-control" rows="4" name="comment"></textarea>
                            </div>
                            <button class="btn btn-primary" name="submit">Submit</button>
                        </form>
                
                 
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
        
        <script>
    $(".table").DataTable();
</script>