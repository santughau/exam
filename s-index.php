<?php 
$page_title = "Tech Exam ";
$page_key = "microsoft system engineer,what does comptia stand for,a plus certification online classes,networking certification exams,it technician certification,security plus training courses,boson ccna,network certification classes";
$page_desc = "Online CompTIA practice tests mapping to the latest exam domains. CompTIA A+ 220-901 / 220-902, CompTIA Network+ N10-006, CompTIA Security+.Online CompTIA A+ certification practice test 1. Exam 220-901. Each quiz cosists of 25 practice questions. Free online score reports are available";
include('inc/top.php');

if(isset($_GET['exam_id'])){
    $exam_id = $_GET['exam_id'];
}
$query = "SELECT * FROM questions WHERE exam_id = '$exam_id'";
$result = mysqli_query($con,$query);
$q = mysqli_num_rows($result);
$query_exam = "SELECT * FROM exam WHERE exam_id = '$exam_id'";
$result_exam = mysqli_query($con,$query_exam);    
$get_exam = mysqli_fetch_array($result_exam);
    $exam_name = ucfirst($get_exam['exam_name']);
    $exam_image = $get_exam['exam_image'];
    
    /*
       $to = "santu.ghau@gmail.com";
        $header = "$name<$mobile>";
        $subject = "Exam  Page From $name<$exam_name>";
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

        <div class="col-md-6">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Responsive -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="5270114532" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <div class="row">
                <div class="col-md-12">
                    <div class="card  border border-primary text-primary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title">Best <span class="text-muted">Of Luck</span></h3>
                                    <hr>
                                    <p class="card-text">
                                        <?php echo $exam_name;?>
                                    </p>
                                    <hr>
                                    <p><span class="text-muted">Total Questions :</span>
                                        <?php echo $q ;?>
                                    </p>
                                    <a href="s-question.php?n=1&exam_id=<?php echo $exam_id?>" class="btn btn-danger final" id="btn">Start Exam!</a>
                                    <hr>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6">
                                    <img class="img-fluid" src="images/exam/<?php echo $exam_image;?>" alt="<?php echo $exam_name;?>">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Responsive -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="5270114532" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Responsive -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4151366218309776" data-ad-slot="5270114532" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

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
        $(document).ready(function() {
            $(".table").DataTable();
            $('#btn').mouseover(function() {
                $('#btn').removeClass('btn-danger');
                $('#btn').addClass('btn-primary');
            });
            $('#btn').mouseout(function() {
                $('#btn').removeClass('btn-primary');
                $('#btn').addClass('btn-danger');
            });
        });
    </script>