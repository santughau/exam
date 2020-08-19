<?php 
ob_start();
session_start();
$page_title = "Tech Exam ";
$page_key = "microsoft system engineer,what does comptia stand for,a plus certification online classes,networking certification exams,it technician certification,security plus training courses,boson ccna,network certification classes";
$page_desc = "Online CompTIA practice tests mapping to the latest exam domains. CompTIA A+ 220-901 / 220-902, CompTIA Network+ N10-006, CompTIA Security+.Online CompTIA A+ certification practice test 1. Exam 220-901. Each quiz cosists of 25 practice questions. Free online score reports are available";
include('inc/top.php');

/* Check User Session Session */
$exam_id = $_SESSION['exam_id'];



/* Cerate Total Exam  */
$query_t = "SELECT * FROM questions WHERE exam_id = '$exam_id'";
$result_t = mysqli_query($con,$query_t);
$total = mysqli_num_rows($result_t);

/* Create Total Questions */
$marks = $_SESSION['score'];
$percent = 100*$marks /$total;

/* Create Exam Name */
$query_exam = "SELECT * FROM exam WHERE exam_id = '$exam_id'";
$result_exam = mysqli_query($con,$query_exam);
$row_exam = mysqli_fetch_array($result_exam);
$exam_name = $row_exam['exam_name'];
    
/*
       $to = "santu.ghau@gmail.com";
        $header = "$name<$mobile>";
        $subject = "Result  Page From $name<$exam_name><$marks>";
        $message = "Name: $name \n\n Email:  $mobile ";  
        mail($to, $subject, $message, $header); */ 
?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/nav.php'); ?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        
        <div class="col-md-6" style="margin-bottom:15px;">
		<div class="row">
                    <div class="col-md-12">
                       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4151366218309776"
                         data-ad-slot="5270114532"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class=" purple lighten-4 ">
                        <p class="lead text-center">Exam Completed !</p>
                    </div><hr>
                    <h3 class="text-muted text-center">Congratuation !  Your Exam is completed.</h3><hr>
                    <h4 class="text-muted text-center">Your Marks is  : <?php echo $percent;?> %</h4><hr>
                    <?php $_SESSION['score']="";
                
                ?>
                
            <div  align="center"><a href="home.php" class="btn btn-primary col-md-offset-4 col-xs-offset-2">Try Again </a><br><br></div>
			<div  align="center"><a href="whatsapp://send?text=Useful For Comptia,MCSE,CCNA  👉 https://orangecomputers.us/" data-ction="share/whatsapp/share" class="btn btn-danger whatsapp ">Whatsapp Share</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
        <div class="row">
                    <div class="col-md-12">
                       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4151366218309776"
                         data-ad-slot="5270114532"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                </div>
				<div class="row">
                    <div class="col-md-12">
                       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4151366218309776"
                         data-ad-slot="5270114532"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
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
    
    <script>
    $(".table").DataTable();
</script>